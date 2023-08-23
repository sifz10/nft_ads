<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trending;

class TrendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trendings = Trending::all();

        return view('trendings.index', compact('trendings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('trendings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'trending_name' => 'required|string',
            'link' => 'nullable|url',
            'status' => 'nullable|string',
        ]);

        Trending::create($data);

        return redirect()->route('trendings.index')->with('success', 'Trending created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trending $trending)
    {
        return view('trendings.show', compact('trending'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trending $trending)
    {
        return view('trendings.edit', compact('trending'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trending $trending)
    {
        $data = $request->validate([
            'trending_name' => 'required|string',
            'link' => 'nullable|url',
            'status' => 'nullable|string',
        ]);

        $trending->update($data);

        return redirect()->route('trendings.index')->with('success', 'Trending updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trending $trending)
    {
        $trending->delete();
        return redirect()->route('trendings.index')->with('success', 'Trending deleted successfully');
    }
}
