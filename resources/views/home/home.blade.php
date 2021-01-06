@extends('layouts.wrapper')
@section('intro')


    <section id="intro">
        <div class="welcome">
            <div class="row p-5">
                <div class="col-8">
                    <h2 class="text-center pb-3">Welcome To Charity</h2>
                    <h5 class="text-left" style="color: gray">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                        and more recently with desktop publishing software like Aldus PageMaker including versions of
                        Lorem Ipsum.
                    </h5>
                </div>
                <div class="col-4">
                    <img src="https://cambodia1.files.wordpress.com/2009/06/470.jpg" alt="" style="border-radius: 10px"
                         class="ml-5">
                </div>
            </div>
        </div>
    </section>
@endsection
@section('ct')
    <section id="donation">
        <div class="d-flex justify-content-center">
            <div class="header mt-5">
                <h2>
                    Our Organization
                </h2>
            </div>
        </div>
        <div class="row">
            @foreach($orgs as $org)
                <div class="col-4">
                    <div class="p-3 text-center" style="width: auto; height: fit-content">
                        <img class="card-img-top cs-image mt-1" src="{{asset('image/'.$org->image)}}"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title cs-header">
                                {{$org['name']}}
                            </h5>
                            <p class="card-text cs-p ">
                                {{$org->des}}
                            </p>
                            <a href="donationForm/{{$org->id}}" class="btn btn-outline-success">
                                Donate Now
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
@section('vol')
    <div class="text-center volunteer shadow mt-5">
        <h2 class="mt-3">Become a volunteer</h2>
        <div>
            <a href="/" class="btn btn-success mt-3 mb-3">Join Us!</a>
        </div>
        <img src="{{asset('1.jpg')}}" alt="" class="mb-2">
    </div>
@endsection
@section('event')
    <section id="event">
        <div class="d-flex justify-content-center">
            <div class="header mt-5">
                <h2>OurEvent</h2>
            </div>
        </div>
        @if(\Illuminate\Support\Facades\Session::has('join'))
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{\Illuminate\Support\Facades\Session::get('join')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        @foreach($events as $event)
            <div class="d-flex justify-content-center">
                <div class="card text-center shadow mt-2 mb-2" style="width: 1160px; height: fit-content">
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
                        @if(!\Illuminate\Support\Facades\Session::has('joined'))
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
    </section>
@endsection
