<?php
@extends('layouts.app')

@section('content')
    <h1>My Favorites</h1>

    @if(count($favorites))
        <ul>
            @foreach($favorites as $favorite)
                <li>{{ $favorite->name }}</li>
            @endforeach
        </ul>
    @else
        <p>You have no favorite properties yet.</p>
    @endif
@endsection

@foreach ($favorites as $favorite)
    <div>{{ $favorite->property->name }}</div>
@endforeach


