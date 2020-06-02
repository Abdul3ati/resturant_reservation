<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservation;

class reservationController extends Controller
{
    public function index()
    {
        $data = reservation::all();

        if(count($data) > 0){
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }
        else{
            $res['message'] = "Kosong!";
            return response($res);
        }
    }
    public function getId($id)
    {
        $data = reservation::Where('id',$id)->get();

        if(count($data) > 0){
            $res['message'] = "Success!";
            $res['values'] = $data;
            return response($res);
        }
        else{
            $res['message']= "Gagal!";
            return response($res);
        }
    }
    public function create(Request $request)
    {
        $reserv = new reservation();
        $reserv->time = $request->time;
        $reserv->date = $request->date;
        $reserv->name = $request->name;
        $reserv->tlpnumber = $request->tlpnumber;
        $reserv->numberpeople = $request->numberpeople;
        $reserv->comments = $request->comments;

        if($reserv->save()){
            $res['message'] = "Data Berhasil Ditambah!";
            $res['value'] = "$reserv";
            return response($res);
        }
    }
    public function update(Request $request, $id)
    {
        $time = $request->time;
        $date = $request->date;
        $name = $request->name;
        $tlpnumber = $request->tlpnumber;
        $numberpeople = $request->numberpeople;
        $comments = $request->comments;

        $reserv = reservation::find($id);
        $reserv->time = $request->time;
        $reserv->date = $request->date;
        $reserv->name = $request->name;
        $reserv->tlpnumber = $request->tlpnumber;
        $reserv->numberpeople = $request->numberpeople;
        $reserv->comments = $request->comments;

        if($reserv->save()){
            $res['message'] = "Data Berhasil Diubah!";
            $res['value'] = "$reserv";
            return response($res);
        }
        else{
            $res['message']= "Gagal!";
            return response($res);
        }


    }
    public function delete($id)
    {
        $reserv = reservation::Where('id',$id);

        if($reserv->delete()){
            $res['message'] = "Data Berhasil Dihapus!";
            return response($res);
        }
        else{
            $res['message'] = "Gagal!";
            return response($res);
        }
    }
}
