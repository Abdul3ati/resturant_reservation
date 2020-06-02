@extends('master')

@section('title','Tambah Data')

@section('judul_halaman','Make a Reservation')

@section('konten')
    <br/>
    <br/>
<a href="/" class="btn btn-danger">Back</a>
    <br/>
    <br/>
    @if(count($errors) > 0)
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
    @endif
    <div class="col-md-10">
    <form action="/customer/simpan" method="post">
        {{ csrf_field() }}
        <div class="form-group">
        08.00 - 20.00
        <br/>
            <label for="time">Time</label>
            <input class="form-control" type="time" name="time" required="requied" value="{{ old('time')}} " ><br/>
            
        </div>
        <div class="form-group">
        day-month-year
        <br/>
            <label for="date">Date</label>
            <input class="form-control" type="date" name="date" required="requied" value="{{ old('date')}} " ><br/>
            
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" required="requied" value="{{ old('name')}} " ><br/>
        </div>
        <div class="form-group">
            <label for="tlpnumber">Phone Number</label>
            <input class="form-control" type="number" name="tlpnumber" required="requied" value="{{ old('tlpnumber')}} " ><br/>
        </div>
        <div class="form-group">
        1-4
        <br>
            <label for="numberpeople">Number People</label>
            <input class="form-control" type="number" name="numberpeople" required="requied" value="{{ old('numberpeople')}} " ><br/>
            
        </div>
        <div class="form-group">
            <label for="comments">Comments</label>
            <input class="form-control" type="text" name="comments" value="{{ old('comments')}} " ><br/>
        </div>
        <div>
            <button type="submit" name="Submit" class="btn btn-primary">Submit</button><br/>
        </div>
    </form>
    @endsection