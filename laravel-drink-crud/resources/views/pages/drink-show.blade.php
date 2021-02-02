@extends('layouts.main-layout')
@section('content')
    <h3>Name: {{ $drink->name }}</h3>
    <h3>Alcohol content: {{ $drink->alcoholContent }}</h3>
    <h3>Price: {{ $drink->price }}</h3>
@endsection
