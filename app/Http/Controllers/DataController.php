<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::all();
        return view('data', compact('data'));
    }

    public function create(Request $request)
    {
        $data = new Data();
        $data->data = $request->data;
        $data->save();

        return redirect('/');
    }

    public function delete($id)
    {
        $data = Data::find($id);
        $data->delete();

        return redirect('/');
    }
}
