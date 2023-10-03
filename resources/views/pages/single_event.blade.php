@extends('layouts.kingsbridge')

@section('content')
<section class="hero-area bg-1 text-center overly">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Header Content -->
                <div class="content-block">
                    <h1>{{ $carevent->event_title }}</h1>
                    <div class="short-popular-category-list text-center">
                        <h2>Popular Category</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="{{ route('vehicleslist') }}"><i class="fa fa-car"></i> Vehicles</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="Hdrive text-center my-3">
    <div class="container">
        <div class="col-md-12">
            <div class="section-title">
                <h2>{{ $carevent->event_title }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <!-- Event details -->
                <img class="img-fluid" src="/storage/photos/{{ $carevent->event_image }}" alt="Event Image" style="width: 100%; max-height: 400px;">
                <div class="text-left mt-3">
                    <p><b>Location:</b> {{ $carevent->event_location }}</p>
                    <p><b>Date:</b> {{ $carevent->event_date }}</p>
                    <p><b>Time:</b> {{ $carevent->event_time }}</p>
                    <p><b>Organizer:</b> {{ $carevent->organizer }}</p>
                    <p><b>Ticket Price: Ksh</b> {{ $carevent->ticket_price }}</p>
                    <h3>Description:</h3>
                    <p>{!! strip_tags($carevent->event_description) !!}</p> <!-- Display the event description without HTML tags -->
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('carevent') }}" class="btn btn-main">Back to Events</a>
        </div>
    </div>
</div>
@endsection
