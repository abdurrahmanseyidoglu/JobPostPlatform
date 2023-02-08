<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //get and Show all listing
    public function index()
    {
        return view('listings.index', [
            'listings' => Listing::all()
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
