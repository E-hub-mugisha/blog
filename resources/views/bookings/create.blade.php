@extends('bookings.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Booking</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('bookings.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="names" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>phone:</strong>
                <input type="text" name="phone" class="form-control" placeholder="phone">
            </div>
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="service-type" class="form-control" placeholder="type">
            </div>
            <div class="form-group">
                <strong>Name:</strong>
                <input type="date" name="event-date" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>Name:</strong>
                <input type="time" name="start-time" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>Name:</strong>
                <input type="time" name="end-time" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="message" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection