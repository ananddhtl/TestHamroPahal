<?php

namespace App\Http\Controllers;

use App\Models\ChildPage;
use App\Models\ParentPage;
use Illuminate\Http\Request;

class ChildPageController extends Controller
{

    public function childpage()
    {
        try {
            $parentpage = ParentPage::where('ischild', 1)->get();
            return view('backend.childpage.add',compact('parentpage'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $list = ChildPage::join('parent_pages', 'parent_pages.id', '=', 'child_pages.parentpage_id')->select('child_pages.child_title', 'child_pages.id as child_id', 'parent_pages.*')->where('parent_pages.ischild', 1)->get();
            return view('backend.childpage.list', compact('list'));
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
                'child_title' => ['required', 'string', 'max:50', 'min:2'],

            ], [
                'parentpage_id.not_in' => 'Please select your parent page.',
            ]);

            $childpage = new ChildPage();
            $childpage->child_title = $request->child_title;
            $childpage->parentpage_id = $request->parentpage_id;
            $childpage->save();
            return redirect('/')->with('message', 'Your data has been saved successfully');
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
    public function show(ChildPage $childPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChildPage $childPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChildPage $childPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChildPage $childPage)
    {
        //
    }
}