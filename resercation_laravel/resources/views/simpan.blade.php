@extends('master')

@section('title','Validation Data')

@section('judul_halaman',' Data Yang Verifikasi ')

@section('konten')


<div class="col-md-12">
    <div class="card  card-plain">
      <div class="card-header">
        <h4 class="card-title"> Data Yang Di Input</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive ps">
        <table class="table table-bordered table-striped">
        <tr>
            <td style="width:150px">Time</td>
            <td>{{ $data->time }}</td>
        </tr>
        <tr>
            <td>Date</td>
            <td>{{ $data->date }}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{ $data->name }}</td>
        </tr>
        <tr>
            <td>Telephone number</td>
            <td>{{ $data->tlpnumber }}</td>
        </tr>
        <tr>
            <td>Comments</td>
            <td>{{ $data->comments }}</td>
        </tr>
    </table>
    <a href="/" class="btn btn-primary">Kembali</a>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
      </div>
    </div>
  </div>
  @endsection