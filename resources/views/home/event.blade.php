@extends('layouts.wrapper')

@section('ct')
<div class="d-flex justify-content-center">
    <h2 class="my-2">Event</h2>
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
            <img style="width: 700px " src="{{asset('image/'.$event->image)}}" alt="">
        </div>
        <div class="text-center mb-3">
            <a href="/volForm/{{$event->id}}" class="btn btn-primary">Join Volunteer</a>
            @if (!$event->isJoin(session('user')->id))
            <form action="/test" method="POST" class="d-inline">
                @csrf
                <input type="hidden" name="event_id" value={{$event->id}}>
                <button type="submit" class="btn btn-success">
                    Join now
                </button>
            </form>
            @endif
        </div>
        <div class="card-footer text-muted">
            Ending date: {{$event->end}}
        </div>
    </div>
</div>
@endforeach


@endsection