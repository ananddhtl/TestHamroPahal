<?php

namespace App\Http\Controllers;

use App\Models\ChildContent;
use App\Models\ParentPage;
use Illuminate\Http\Request;
use DB;

class ChildContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $list = ChildContent::join('parent_pages', 'parent_pages.id', '=', 'child_contents.parentpage_id')
                ->join('child_pages', 'child_pages.id', '=', 'child_contents.childpage_id')
                ->select('child_pages.*', 'parent_pages.*','child_contents.*')
                ->where('parent_pages.ischild', 1)
                ->get();
            return view('backend.childcontent.list', compact('list'));
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
                'parentpage_id' => ['required', 'integer'],
                'description' => ['required'],
               
            ],[
                'parentpage_id.not_in' => 'Please select your parent page.',
            ]);

            $childContent = new ChildContent();
            $childContent->parentpage_id = $request->parentpage_id;
            $childContent->childpage_id = $request->childpage_id;
            $childContent->text = $request->description;
          
            $childContent->save();
            return redirect('/admin-listchildcontent')->with('message', 'Your data has been saved successfully');
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
    public function show(ChildContent $childContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChildContent $childContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChildContent $childContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChildContent $childContent)
    {
        //
    }
    public function childcontent()
    {
        try {
            $parentpage = ParentPage::where('ischild', 1)->get();
            return view('backend.childcontent.add',compact('parentpage'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function getsubmenu($parentpage_id)
    {
        $submenu = DB::table('child_pages')->where('parentpage_id', $parentpage_id)->get();
        return response()->json($submenu);
    }
}