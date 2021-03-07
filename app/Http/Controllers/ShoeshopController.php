<?php

namespace App\Http\Controllers;

use App\Models\Shoeshop;
use Illuminate\Http\Request;

class ShoeshopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zapatos = Shoeshop::all();
        return view('shoeshops.index', compact('zapatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shoeshops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shoeshop = request()->except('_token');
        Shoeshop::insert($shoeshop);
        return redirect()->to(url('/shoesshop'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shoeshop  $shoeshop
     * @return \Illuminate\Http\Response
     */
    public function show(Shoeshop $shoeshop)
    {
        return view('shoeshops.show', compact('shoeshop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shoeshop  $shoeshop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoeshop $shoeshop)
    {
        return view('shoeshops.edit', compact('shoeshop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shoeshop  $shoeshop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoeshop $shoeshop)
    {
        $dataShoeshop = request()->except('_token');
        $shoeshop->update($dataShoeshop);
        return redirect()->to(url('/shoeshops'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shoeshop  $shoeshop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoeshop $shoeshop)
    {
        $shoeshop->delete();
        return redirect()->to(url('/shoeshops'));
    }
}
