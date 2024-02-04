<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $list = Blog::get();
            return view('backend.blog.list', compact('list'));
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
                'title' => ['required', 'string', 'max:50', 'min:5'],
                'description' => ['required', 'string'],
                'sub_title' => ['required', 'string','max:300','min:10'],
                'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
            ]);

            $blog = new Blog();
            $blog->blog_title = $request->title;
            $blog->sub_title = $request->sub_title;
            $blog->description = $request->description;
            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail');
                $img_name = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->move('uploads/blog/thumbnail/', $img_name);
                $save_url = '/uploads/blog/thumbnail/' . $img_name;
               
                $blog->thumbnail = $save_url;
            }
            $blog->save();
            return redirect('/admin-listblogs')->with('message', 'Your data has been saved successfully');
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
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
    public function addblogpage()
    {
        try {
            return view('backend.blog.add');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
}
