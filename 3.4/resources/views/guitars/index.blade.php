@extends('layout')

@section('title', 'Guitars!')


@section('content')

@foreach($guitars as $key => $guitar)

<h4><a href="{{ route('guitars.show', $key) }}">{{ $guitar['title'] }}</a></h4>

<div class="row">
    <div class="col-sm-2">
        <ul>
            <li>Make: {{ $guitar['make'] }}</li>
            <li>Year: {{ $guitar['year'] }}</li>
        </ul>
    </div>
    <div class="col">
        {{ $guitar['description'] }}
    </div>
</div>


@endforeach



@endsection
