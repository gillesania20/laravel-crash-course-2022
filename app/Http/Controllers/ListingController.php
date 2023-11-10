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
            'listings' => Listing::latest()->filter($filterArr)->paginate(5)
        ]);
    }

    // Show single listing
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

    // Show create form
    public function create() {
        return view('listings.create');
    }

    // Store listing data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formFields);
        return redirect('/')->with('message', 'Listing created successfully!');
    }

    // Show edit form
    public function edit(Listing $listing){
        return view('listings.edit', ['listing' => $listing]);
    }

    // Update listing data
    public function update(Request $request, Listing $listing) {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);
        return back()->with('message', 'Listing updated successfully!');
    }

    // Destroy listing
    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }
}
