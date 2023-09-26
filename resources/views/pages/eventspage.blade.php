@extends('layouts.kingsbridge')
@section('content')

<div class="Hdrive text-center my-3">
	<div class = "container">
	<div class="col-md-12">
		<div class="section-title">
			<h2>Upcoming Events</h2>
		</div>
	</div>
	<div id="eventCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach ($carevents as $index => $carevent)
            <li data-target="#eventCarousel" data-slide-to="{{ $index }}" @if ($index === 0) class="active" @endif></li>
        @endforeach
    </ol>

    <!-- Slides -->
    <div class="carousel-inner">
        @for ($i = 0; $i < count($carevents); $i += 3)
            <div class="carousel-item @if ($i === 0) active @endif">
                <div class="row">
                    @for ($j = $i; $j < min($i + 3, count($carevents)); $j++)
                        <div class="col-sm col-md-4 col-lg-4">
                            <!-- event card -->
                            <div class="product-item bg-light" style="margin-right: 10px;"> <!-- Adjust this value as needed -->
                                <div class="card">
                                    <div class="thumb-content">
                                        <div class="price">Event</div>
                                        <a href="{{ route('events') }}">
                                            <!-- Display event image -->
                                            <img class="card-img-top category-img-fluid" src="/storage/photos/{{ $carevents[$j]->event_image }}" alt="Event Image" style="max-height: 400px;">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="mdl-card__title">
                                            <!-- Display event title -->
                                            <h2 style="font-weight: 450; font-size: 20px;" class="mdl-card__title-text">{{ $carevents[$j]->event_title }}</h2>
                                        </div>
                                        <div class="mdl-card__supporting-text">
                                            <p class="card-text">
                                                <ul class="list-horizontal">
                                                    <!-- Display event details -->
                                                    <li><b>Location:</b> <span>{{ $carevents[$j]->event_location }}</span></li>
                                                    <li><b>Date:</b> <span>{{ $carevents[$j]->event_date }}</span></li>
                                                    <li><b>Time:</b> <span>{{ $carevents[$j]->event_time }}</span></li>
                                                    <li><b>Organizer:</b> <span>{{ $carevents[$j]->organizer }}</span></li>
                                                    <li><b>Ticket:</b> <span>Kes: {{ $carevents[$j]->ticket_price }}</span></li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        @endfor
    </div>

    <!-- Controls -->
    <a class="carousel-control-prev" href="#eventCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#eventCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


</div>
</div>