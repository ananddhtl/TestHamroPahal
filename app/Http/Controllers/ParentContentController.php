<?php

namespace App\Http\Controllers;

use App\Models\ParentContent;
use App\Models\ParentPage;
use Illuminate\Http\Request;

class ParentContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {

            $list = ParentContent::join('parent_pages', 'parent_pages.id', '=', 'parent_contents.parentpage_id')->select('parent_pages.title', 'parent_contents.*')->get();
            return view('backend.parentcontent.list', compact('list'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function parentpage()
    {
        try {
            $parentpage = ParentPage::get();
            return view('backend.parentcontent.add', compact('parentpage'));
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
                'parentpage_id' => ['required', 'integer', 'not_in:0'],
                'text' => ['required'],

            ], [
                'parentpage_id.not_in' => 'Please select your proper gender.',
            ]);

            $parentcontent = new ParentContent();
            $parentcontent->parentpage_id = $request->parentpage_id;
            $parentcontent->text = $request->text;
            if ($request->hasFile('thumbnailimg')) {
                $image = $request->file('thumbnailimg');
                $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
                $image->move('uploads/parentcontent/thumbnail/', $img_name);
                $save_url = '/uploads/parentcontent/thumbnail/' . $img_name;
                $parentcontent->Thumbnailimg = $save_url;
            }
            $parentcontent->save();
            return redirect('/admin-listparentcontent')->with('message', 'Your data has been saved successfully');
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
    public function show(ParentContent $parentContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ParentContent $parentContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ParentContent $parentContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ParentContent $parentContent)
    {
        //
    }
}
