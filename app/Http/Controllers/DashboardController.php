<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        return view('dds.dashboard');
    }
    public function index2()
    {
        return view('dds.index2');
    }
    public function index3()
    {
        return view('dds.index3');
    }
    public function millInfo()
    {
        return view('dds.millInfo');
    }
    public function millAgriplotStats()
    {
        return view('dds.millAgriplotStats');
    }
    public function millSupplierInfo()
    {
        return view('dds.millSupplierInfo');
    }
    public function user()
    {
        return view('dds.user');
    }
    public function setting()
    {
        return view('dds.setting');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
