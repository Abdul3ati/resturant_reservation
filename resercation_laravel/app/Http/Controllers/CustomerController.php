<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index()
    {
        $reservation = DB::table('reservation')->get();
        return view ('index',['reservation' => $reservation]);
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function simpan(Request $request)
    {
        $this->validate($request, [
            'time' => 'required',
            'date' => 'required',
            'name' => 'required',
            'tlpnumber' => 'required|numeric',
            'numberpeople' => 'required|numeric',
            'comments' => 'required'
        ]);DB::table('reservation')->insert([
            'time' => $request->time,
            'date' => $request->date,
            'name' => $request->name,
            'tlpnumber' => $request->tlpnumber,
            'numberpeople' => $request->numberpeople,
            'comments' => $request->comments
        ]);
        return view('simpan',['data' => $request]);
    }
}
