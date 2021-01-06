@extends('layouts.wrapper')

@section('ct')
    <div class="d-flex justify-content-center">
        <h2 class="mt-2">
            Our Organization
        </h2>
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
@endsection
