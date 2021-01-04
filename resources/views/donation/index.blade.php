@extends('layouts.sidebar')

@section('content')
    <h1 class="text-center">List All Donors</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">DonorName</th>
            <th scope="col">Amount</th>
            <th scope="col">Organization</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($donors as $donor)
            <tr class="table-info">
                <th>{{$donor->id}}</th>
                <td>{{$donor->lastname}}</td>
                <td>${{$donor->amount}}</td>
                <td>{{$donor->name}}</td>
                <td>
{{--                    <a href="/event-edit/{{$event->id}}" class="btn btn-warning">Edit</a>--}}
{{--                    <a href="/event-show/{{$event->id}}" class="btn btn-info">Detail</a>--}}
{{--                    <a href="/event-delete/{{$event->id}}" class="btn btn-danger">Delete</a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
