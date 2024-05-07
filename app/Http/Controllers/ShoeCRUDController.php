<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $data['shoes'] = Shoe::orderBy('id', 'desc')->paginate(5);
        return view('shoes.index', $data);
    }


    public function create()
    {
        return view('shoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param
        \Illuminate\Http\Request
        $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required'
        ]);
        $Shoe = new Shoe;
        $Shoe->brand = $request->brand;
        $Shoe->model = $request->model;
        $Shoe->price = $request->price;
        $Shoe->save();
        return redirect()->route('shoes.index')
            ->with('success', 'Shoe has been created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param
        \App\Note
        $Note
     * @return \Illuminate\Http\Response
     */ public function show(Shoe $shoe)
    {
        return view('shoes.show', compact('shoe'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param
    \App\Note
        $Shoe
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoe $shoe)
    {
        return view('shoes.edit', compact('shoe'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param\Illuminate\Http\Request
     * @param\App\Shoe
        $request
        $Shoe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required',
        ]);
        $Shoe = Shoe::find($id);
        $Shoe->brand = $request->brand;
        $Shoe->model = $request->model;
        $Shoe->price = $request->price;
        $Shoe->save();
        return redirect()->route('shoes.index')
            ->with('success', 'Shoe Has Been updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param
        \App\Schoe
        $Shoe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoe $shoe)
    {
        $shoe->delete();
        return redirect()->route('shoes.index')
            ->with('success', 'shoe has been deleted successfully');
    }
}
