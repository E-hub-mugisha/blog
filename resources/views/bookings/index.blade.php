@extends('bookings.layout')
 
@section('content')
       <div class="booking_section">
       <div class="section-header">
                    <h2>fill the form </h2>
                    <p>Road to your success....</p>
                </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
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
   
    <form action="{{ route('bookings.store') }}" method="POST" class="booking-form">
    @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <strong>Name:</strong>
                        <input type="text" name="names" class="form-control" placeholder="Name*">
                    </div>
                    <div class="col-md-6 form-group">
                        <strong>email:</strong>
                        <input type="text" name="email" class="form-control" placeholder="email*">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <strong>phone:</strong>
                        <input type="text" name="phone" class="form-control" placeholder="phone*">
                    </div>
                    <div class="col-md-6 form-group">
                        <strong>Project type:</strong>
                        <input type="text" name="service-type" class="form-control" placeholder="Project type*">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 form-group">
                        <strong>Project Date:</strong>
                        <input type="date" name="event-date" class="form-control" placeholder="select date">
                    </div>
                    <div class="col-md-4 form-group">
                        <strong>Start Time:</strong>
                        <input type="time" name="start-time" class="form-control" placeholder="starting time*">
                    </div>
                    <div class="col-md-4 form-group">
                        <strong>End Time:</strong>
                        <input type="time" name="end-time" class="form-control" placeholder="ending time*">
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quick Message:</strong>
                    <textarea class="form-control" style="height:150px" name="message" placeholder="Quick message*"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn booking-btn">Submit your booking</button>
            </div>
        </div>
    </form>
       </div>
@endsection

      
