@extends('layout')
@section('content')
    @include('partials._search')
    @foreach ($listings as $listing)
        <x-single-list :listing="$listing" />
    @endforeach
@endsection
