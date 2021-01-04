@extends('layouts.wrapper')

@section('ct')
    <div class="d-flex justify-content-center">
        <div class="header">
            <a href="/event" class="logo">OurEvent</a>
        </div>
    </div>
    @foreach($events as $event)
        <div class="d-flex justify-content-center">
            <div class="card text-center shadow mt-2 mb-2" style="width: 1000px; height: fit-content">
                <div class="card-header">
                    Staring date: {{$event->start}}
                </div>
                <div class="card-body">
                    <h5>
                        {{$event->title}}
                    </h5>
                    <p class="card-text cs-p">
                        {{$event->description}}
                    </p>
                    <img style="width: 700px "
                         src="{{asset('image/'.$event->image)}}" alt="">
                </div>
                <div class="text-center mb-3">
                    <a href="/volForm/{{$event->id}}" class="btn btn-primary">Join Volunteer</a>
                    <a href="#" class="btn btn-info">Join Event</a>
                </div>
                <div class="card-footer text-muted">
                    Ending date: {{$event->end}}
                </div>
            </div>
        </div>
    @endforeach


@endsection
