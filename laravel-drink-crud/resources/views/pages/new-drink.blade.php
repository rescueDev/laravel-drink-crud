@extends('layouts.main-layout')
@section('content')
    <form id="create-drink" action="{{ route('store-drink') }}" method="POST">

        @csrf
        @method('POST')

        <label for="name">Name:</label>
        <input type="text" name="name">

        <label for="alcoholContent">Alcohol Content:</label>
        <input type="text" name="alcoholContent">

        <label for="price">Price:</label>
        <input type="text" name="price">

        <input type="submit" value="SUBMIT">

    </form>
@endsection
