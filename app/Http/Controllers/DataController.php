<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index(){
        $data = Data::all();
        return view('data.index', compact(['data']));
    }
    public function create(){
        return view('data.create');
    }
    public function store(Request $request){
        //dd($request->except('_token', 'submit'));
        Data::create($request->except('_token', 'submit'));
        return redirect('/data');
    }
    public function edit($id){
        $data = Data::find($id);
        return view('data.edit', compact(['data']));
    }
    public function update($id, Request $request)
    {
        $data = Data::find($id);
        $data->update($request->except(['_token', 'submit']));
        return redirect('/data');
    }
    public function destroy($id)
    {
        $data = Data::find($id);
        $data->delete();
        return redirect('/data');
    }
}

