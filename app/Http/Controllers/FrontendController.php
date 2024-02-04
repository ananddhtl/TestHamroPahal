<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Blog;
use App\Models\Testimonials;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage(Request $request)
    {

        try {
           
            $testimonials = Testimonials::orderBy('id', 'DESC')->get();
            $events = Events::get();
            return view('frontend.homepage', compact('events','testimonials'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }

    }
    public function eventDescription(Request $request, Events $events, $id)
    {
        try {
            $eventDescription = Events::where('id', $id)->first();

            $relatedevents = Events::where('id' ,'!=', $id)->get();

            return view('frontend.eventdescription', compact('eventDescription','relatedevents'));

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function eventcheckout(Request $request, Events $events, $id)
    {
        try {

            if (session()->get('sessionUserId') == '') {
                return redirect('/login')->with('message', 'You have to login first');
            }
            $eventDescription = Events::where('id', $id)->first();
            return view('frontend.checkout', compact('eventDescription'));

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function blogpage(Request $request)
    {
        try {
            
            $blog = Blog::orderBy('id', 'DESC')->limit(3)->get();
            $allBlogs = Blog::get();
            $relatedblog = $allBlogs->except($blog->pluck('id')->all());
            return view('frontend.ourblog', compact('blog', 'relatedblog'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function blogdescription(Request $request, $id)
    {
        try {
            $blog = Blog::where('id',$id)->first();
            $relatedblog = Blog::where('id', '!=', $id)->get();
          
            return view('frontend.blogdescription', compact('blog','relatedblog'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function contactus(Request $request)
    {
        try {
            return view('frontend.contactus');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function faqs(Request $request)
    {
        
        try {
            $faqs = FAQ::get();
            return view('frontend.faqs',compact('faqs'));
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    
}