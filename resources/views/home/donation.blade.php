@extends('layouts.wrapper')

@section('ct')
    <div class="cs-org ">
        <div class="row">
            @foreach($orgs as $org)
                <div class="col-6">
                    <div class="card shadow cs-m" style="width: 500px; height: fit-content">
                        <img class="card-img-top cs-image" src="{{asset('image/'.$org->image)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center cs-header">{{$org['name']}}</h5>
                            <p class="card-text cs-p">
                                {{$org->des}}
                            </p>
                            <div class="text-center">
                                <a href="donationForm/{{$org->id}}" class="btn btn-outline-success">Donate Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
