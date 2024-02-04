<?php

namespace App\Http\Controllers;

use App\Models\ParentPage;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ParentPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $list = ParentPage::simplePaginate(10);
            return view('backend.parentpage', compact('list'));
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
                    'title' => ['required', 'string', 'max:26', 'min:2'],
    
                ]);
                $parentpage = new ParentPage();
                $parentpage->title = $request->title;
                $parentpage->ischild = $request->ischild;
                $parentpage->save();
                return redirect()->back()->with('message', 'Your data has been saved successfully');
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
    public function show(ParentPage $parentPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ParentPage $parentPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ParentPage $parentPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ParentPage $parentPage)
    {
        //
    }
}