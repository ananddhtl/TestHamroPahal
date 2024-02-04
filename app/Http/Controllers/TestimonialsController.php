<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $list = Testimonials::get();
            return view('backend.testimonials.list', compact('list'));
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
                'name' => ['required', 'string', 'max:50','min:2'],
                'description' => ['required', 'string'],
                'designation' => ['required', 'string', 'max:50','min:2'],
                'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048']

            ]);

            $testimonials = new Testimonials();
            $testimonials->name = $request->name;
            $testimonials->description = $request->description;
            $testimonials->designation = $request->designation;
            if ($request->hasFile('image')) {
                $thumbnail = $request->file('image');
                $img_name = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->move('uploads/testimonials/image/', $img_name);
                $save_url = '/uploads/testimonials/image/' . $img_name;
                // Correct the assignment to use $events, not $newsDescription
                $testimonials->image = $save_url;
            }
            $testimonials->save();
            return redirect('/admin-listtestimonials')->with('message', 'Your data has been saved successfully');
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
    public function show(Testimonials $testimonials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonials $testimonials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonials $testimonials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonials $testimonials)
    {
        //
    }
    public function addtestimonialpage()
    {
        try {
            return view('backend.testimonials.add');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
