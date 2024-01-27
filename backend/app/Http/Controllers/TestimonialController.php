<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $testimonials = Testimonial::all();
        return response()->json($testimonials);
    }


    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

}
