<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\PublicUser;
use App\Models\RefrenceUser;
use App\Models\RegisterEventAttendes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class RegisterEventAttendesController extends Controller
{
    public function generateUniqueTransactionCode($length = 6)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';

        do {
            for ($i = 0; $i < $length; $i++) {
                $code .= $characters[mt_rand(0, strlen($characters) - 1)];
            }
            $isUnique = $this->isTransactionCodeUnique($code);

        } while (!$isUnique);

        return $code;
    }

    public function isTransactionCodeUnique($code)
    {
        return !DB::table('refrence_users')->where('tCode', $code)->exists();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            if ($request->user_id === '') {
                return redirect('/login')->with('message', 'Please login first to register');
            }

            $request->validate([
                'user_id' => 'required',
                'event_id' => 'required',
            ]);

            
            $existingRegistration = RegisterEventAttendes::where('user_id', $request->user_id)
                ->where('event_id', $request->event_id)
                ->first();
            if ($existingRegistration) {
                return response()->json(['error' => true, 'message' => 'You have already registered the event.']);
            }

            
            $tCode = $this->generateUniqueTransactionCode();

            $user = PublicUser::where('user_id', $request->user_id)->first();

            if (!$user) {
                return response()->json(['error' => true, 'message' => 'User not found']);
            }
            DB::beginTransaction();
            $referenceUsersData = [];
            try {

                if ($request->has('referenceUsers') && is_array($request->referenceUsers)) {
                    if (count($request->referenceUsers) > 4) {
                        return response()->json(['error' => true, 'message' => 'You cannot add more than 4 refrence user']);
                    }
    
                   
                    foreach ($request->referenceUsers as $referenceUser) {
                        $referenceUsersData[] = [
                            'name' => $referenceUser['name'],
                            'email' => $referenceUser['email'],
                        ];
                        $refrenceUser = new RefrenceUser();
                        $refrenceUser->tCode = $tCode;
                        $refrenceUser->user_id = $request->user_id;
                        $refrenceUser->event_id = $request->event_id;
                        $refrenceUser->fullname = $referenceUser['name'];
                        $refrenceUser->email = $referenceUser['email'];
                        $refrenceUser->save();
                    }
                }

                $events = new RegisterEventAttendes();
                $events->tCode = $tCode;
                $events->event_id = $request->event_id;
                $events->user_id = $request->user_id;
                $events->totalticketqty = $request->totalticketqty;
                $events->amount = $request->totalamount;
                $events->save();

                DB::commit();

                $event = Events::find($request->event_id);
                $eventData = [
                    'eventName' => $event->title,
                    'eventImage' => $event->thumbnail,
                    'eventdescription' => $event->description,
                    'datetime' => $request->date . $request->time,
                    'organizedby' => $request->organized_by,
                    'ticketfee' => $request->ticketfee,
                ];
                $eventData['referenceUsers'] = $referenceUsersData;
                
                Mail::send('frontend.emailtemplate.eventregistered', ['eventData' => $eventData], function ($message) use ($eventData, $user) {
                    $message->to($user->email_address);
                    $message->subject('You have successfully registered for the event');
                    $message->from('anddhital@gmail.com');
                });
                return response()->json(['success' => true, 'message' => 'Registeration complete']);
            } catch (\Exception $ex) {

                DB::rollback();
                return $ex->getMessage();
            }
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RegisterEventAttendes $registerEventAttendes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegisterEventAttendes $registerEventAttendes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegisterEventAttendes $registerEventAttendes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegisterEventAttendes $registerEventAttendes)
    {
        //
    }
}