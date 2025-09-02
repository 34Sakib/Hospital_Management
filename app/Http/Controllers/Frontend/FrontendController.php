<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function booking()
    {
        return view('frontend.pages.booking');
    }

    public function storeBooking(Request $request)
    {
        return redirect()->back()->with('success', 'Booking request submitted successfully!');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function signin()
    {
        return view('frontend.pages.signin');
    }

    public function register()
    {
        return view('frontend.pages.register');
    }

    public function services()
    {
        return view('frontend.pages.services');
    }

    public function specialists()
    {
        return view('frontend.pages.specialists');
    }

    public function doctorProfile($id)
    {
        return view('frontend.pages.doctor_profile', compact('id'));
    }
    
    public function serviceInfo()
    {
        return view('frontend.pages.service-info');
    }
    
    public function blog()
    {
        return view('frontend.pages.blog');
    }
    
    public function blogInfo($slug)
    {
        return view('frontend.pages.bloginfo');
    }
}
