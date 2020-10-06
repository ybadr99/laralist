<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index','show']]);
    }


    public function index()
    {
        $listings = Listing::orderBy('created_at','desc')->get();
        return view('listings.index',compact('listings'));
    }


    public function create()
    {
        return view('listings.create');
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'email'
        ]);
            
        Listing::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'bio'=>$request->bio,
            'phone'=>$request->phone,
            'user_id'=>auth()->user()->id,
        ]);

        return redirect('/dashboard')->with('success','Listings Created');
    }

 
    public function show($id)
    {
        $listing = Listing::find($id);
        return view('listings.show')->with('listing', $listing);
    }


    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('listings.edit')->with('listing', $listing);
    }


    public function update(Request $request, Listing $listing)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'email'
        ]);
            
        $listing->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'bio'=>$request->bio,
            'phone'=>$request->phone,
            'user_id'=>auth()->user()->id,
        ]);

        return redirect('/dashboard')->with('success','Listings Updated');
    }

    public function destroy($id)
    {

        // dd('sd');
        $listing = Listing::find($id);
        
        $listing->delete();
        
        return redirect('/dashboard')->with('error','Listings Deleted');

    }
}
