@extends('layouts.sidebar')

@section('content')
    <h1 class="text-center">List All Donors</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Username</th>
            <th scope="col">Event</th>
        </tr>
        </thead>
        <tbody>
        @foreach($userEvent as $item)
            <tr class="table-info">
                <th>{{$item->id}}</th>
                <td>{{$item->lastname}}</td>
                <td>{{$item->title}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
