<?php

namespace App\Http\Controllers;

use App\Models\RefrenceUser;
use Illuminate\Http\Request;

class RefrenceUserController extends Controller
{
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

            $request->validate([
                'fullname' => ['required', 'string', 'max:26', 'min:5'],
                'email_address' => ['required', 'string'],
                'contact_number' => ['required', 'integer'],

            ]);
            $userReferenceCount = RefrenceUser::where('user_id', $request->user_id)->count();
            if ($userReferenceCount >= 4) {
                return redirect()->back()->with('message', 'You can save up to 4 reference users only.');
            }
            $refrenceUser = new RefrenceUser();
            $refrenceUser->user_id = $request->user_id;
            $refrenceUser->fullname = $request->fullname;
            $refrenceUser->email = $request->email_address;
            $refrenceUser->contact_number = $request->contact_number;
            $refrenceUser->save();
            return redirect()->back()->with('message', 'Refrence User has been added successfully');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RefrenceUser $refrenceUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RefrenceUser $refrenceUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RefrenceUser $refrenceUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RefrenceUser $childContent, $id)
    {
        try {
            $refrenceUser = RefrenceUser::find($id);
            if (!$refrenceUser) {
                return response()->json(['error' => 'Child Content  not found'], 404);
            }
            $refrenceUser->delete();
            return redirect()->back()->with('message', 'The refrence user been deleted successfully');

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function getrefrenceusers($tCode)
    {
        try {
        $referenceUsers = RefrenceUser::where('tCode', $tCode)->get();

        return response()->json(['referenceUsers' => $referenceUsers]);
    } catch (\Exception $ex) {
        return $ex->getMessage();
    }
    }

}
