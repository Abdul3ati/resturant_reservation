@extends('master')

@section('title', 'Home')

@section('judul_halaman','Data Reservasi')

@section('konten')
<div class="col-md-12">
    <div class="card  card-plain">
    <br>
    <h2 class="card-title">Reservation List</h2>
      <div class="card-body">
        <div class="table-responsive ps">
<div class="content">
<div class="row">
  <div class="col-md-12">
      </div>
      <div class="card-body">
        <div class="table-responsive ps">
        <a href="/customer/tambah" class="btn btn-primary">Make a Reservation</a>
    <br/>
    <br/>
    <br/>
    <br/>
    <table class="table table-condensed table-striped">
        <thead>
            <tr>
                <th>Time </th>
                <th>Date</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservation as $res)
            <tr>
                <td>{{ $res->time }}</td>
                <td>{{ $res->date }}</td>
                <td>{{ $res->name }}</td>
                <td>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
@endsection