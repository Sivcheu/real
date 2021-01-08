@extends('layouts.wrapper')
{{--Intro--}}
@section('intro')
    <div class="container">
        @if(\Illuminate\Support\Facades\Session::has('volJoin'))
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{\Illuminate\Support\Facades\Session::get('volJoin')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('register'))
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{\Illuminate\Support\Facades\Session::get('register')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('donate'))
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{\Illuminate\Support\Facades\Session::get('donate')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
    </div>
    <div class="hero-image" style="background-image: url({{url('4.jpg')}})">
        <div class="hero-text">
            <h1 style="font-size: 80px; font-family: fantasy">Save our country</h1>
        </div>
    </div>
    <section id="intro">
        <div class="welcome">
            <div class="container">
                <div class="row p-5">
                    <div class="col-md-8">
                        <h2 class="text-center pb-3 intro">Welcome To Charity</h2>
                        <h5 class="text-left" style="color: gray">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley
                            of type and scrambled it to make a type specimen book. It has survived not only five
                            centuries,
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was
                            popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions
                            of
                            Lorem Ipsum.
                        </h5>
                    </div>
                    <div class="col-md-4 ">
                        <img src="https://cambodia1.files.wordpress.com/2009/06/470.jpg" alt=""
                             style="border-radius: 10px" class="intro1">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{--Donation--}}
@section('ct')
    <section id="donation">
        <div class="d-flex justify-content-center">
            <div class="header mt-5">
                <h2>
                    Our Organization
                </h2>
            </div>
        </div>
        <div class="row shadow">
            @foreach($orgs as $org)
                <div class="col-lg-4 col-md-6 col-xs-12 shadow-sm rounded">
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
{{--Event--}}
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
        @if(\Illuminate\Support\Facades\Session::has('fail'))
            <div class="container">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{\Illuminate\Support\Facades\Session::get('fail')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif
        @foreach($events as $event)
            @include('components.event_card')
        @endforeach
    </section>

@endsection
{{--Footer--}}
@section('footer')
    {{\Illuminate\Support\Facades\View::make('footer')}}
@endsection

