<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    // Show all listings
    public function index(Request $request) {
        $filterArr = ['tag' => $request->tag, 'search' => $request->search];
        return view('listings.index', [
            'listings' => Listing::latest()->filter($filterArr)->get()
        ]);
    }

    // Show sing listing
    public function show($id) {
        $listing = Listing::find($id);
        if($listing){
            return view('listings.show', [
                'listing' => Listing::find($id)
            ]);
        }else{
            abort('404');
        }
    }
}
