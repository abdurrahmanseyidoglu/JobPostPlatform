<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //get and Show all listing
    public function index(Request $request)
    {
        return view('listings.index', [
            //latest()->get() is the same as all() but this will return sorted array
            'listings' => Listing::latest()->get()
        ]);
    }

    //get and show single listing
    public function show(Listing $listing)
    {

        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
