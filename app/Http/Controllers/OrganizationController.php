<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations = Organization::paginate(5);
        return view('organizations.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('organizations.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organization = new Organization();

        $organization->name = $request->name;
        $organization->phone = $request->phone;
        $organization->email = $request->email;
        $organization->address = $request->address;
        $organization->city = $request->city;
        $organization->state = $request->state;
        $organization->country_id = $request->country_id;
        $organization->postal_code = $request->postal_code;


        $organization->save();

        return redirect()->route('organizations')->with('success', 'Organization Saved Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        return view('organizations.index', compact('organization'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        $countries = Country::all();
        return view('organizations.edit', compact('organization', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organization $organization)
    {

        $organization->name = $request->name;
        $organization->phone = $request->phone;
        $organization->email = $request->email;
        $organization->address = $request->address;
        $organization->city = $request->city;
        $organization->state = $request->state;
        $organization->country_id = $request->country_id;
        $organization->postal_code = $request->postal_code;


        $organization->update();

        return redirect()->route('organizations')->with('success', 'Organization Saved Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        $organization->delete();
        return redirect()->route('organizations')->with('success', 'Deleted Successfully');
    }
}
