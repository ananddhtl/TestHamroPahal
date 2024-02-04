<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\RegisterEventAttendes;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        try {
            $query = Events::select('*');
            if ($request->filled('title')) {
                $title = $request->input('title');
                $query->where('events.title', 'like', '%' . $title . '%');
            }
            $list = $query->get();
            return view('backend.events.list', compact('list'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }

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
                'title' => ['required', 'string', 'max:26', 'min:5'],
                'location' => ['required', 'string'],
                'date' => ['required', 'date'],
                'time' => ['required', 'date_format:H:i'],
                'organized_by' => ['required', 'string'],
                'ticketfee' => ['required', 'integer'],
                'totaltargetfund' => ['required', 'integer'],
                'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
            ]);

            $events = new Events();
            $events->title = $request->title;
            $events->location = $request->location;
            $events->description = $request->description;
            $events->organized_by = $request->organized_by;
            $events->ticketfee = $request->ticketfee;
            $events->date = $request->date;
            $events->time = $request->time;
            $events->totaltargetfund = $request->totaltargetfund;
            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail');
                $img_name = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->move('uploads/events/thumbnail/', $img_name);
                $save_url = '/uploads/events/thumbnail/' . $img_name;
                // Correct the assignment to use $events, not $newsDescription
                $events->thumbnail = $save_url;
            }
            $events->save();
            return redirect('/admin-eventdescription')->with('message', 'Your data has been saved successfully');
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
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $events, $id)
    {
        try {
            $editEvents = Events::where('id', $id)->first();

            return view('backend.events.edit', compact('editEvents'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events, $id)
    {

        try {
            $events = Events::find($id);
            if (!$events) {
                return response()->json(['error' => 'Events not found'], 404);
            }
            $events->delete();
            return redirect()->back()->with('message', 'Your data has been deleted successfully');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }

    }

    public function update(Request $request, $id)
    {
        try {

            // $request->validate([
            //     'title' => ['required', 'string', 'max:26', 'min:5'],
            //     'location' => ['required', 'string'],
            //     'date' => ['required', 'date'],
            //     'time' => ['required', 'date_format:H:i'],
            //     'organized_by' => ['required', 'string'],
            //     'ticketfee' => ['required', 'integer'],
            //     'totaltargetfund' => ['required', 'integer'],
            //     'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
            // ]);

            $events = Events::find($id);
            if (!$events) {
                return response()->json(['error' => 'Member not found'], 404);
            }
            $events->title = $request->title;
            $events->location = $request->location;
            $events->description = $request->description;
            $events->organized_by = $request->organized_by;
            $events->ticketfee = $request->ticketfee;
            $events->date = $request->date;
            $events->time = $request->time;
            $events->totaltargetfund = $request->totaltargetfund;

            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail');
                $img_name = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->move('uploads/events/thumbnail/', $img_name);
                $save_url = '/uploads/events/thumbnail/' . $img_name;

                $events->thumbnail = $save_url;
            }

            $events->save();
            return redirect('/admin-eventdescription')->with('message', 'Your data has been updated successfully');
        } catch (ValidationException $e) {
            $errors = $e->validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function geteventreport(Request $request)
    {
        try {
            $query = Events::select('*')
                ->get();
            $list = $query;
            return view('backend.eventreport', compact('list'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function geteventattendes(Request $request, $id)
    {
        try {
            $query = RegisterEventAttendes::join('events', 'events.id', '=', 'register_event_attendes.event_id')
                ->join('users', 'users.user_id', '=', 'register_event_attendes.user_id')
                ->select(
                    'register_event_attendes.*',
                    'users.*',
                    'events.*'
                )
                ->where('register_event_attendes.event_id',$id)
                ->get();

            $list = $query;
            
            return view('backend.attendelist', compact('list'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

}
