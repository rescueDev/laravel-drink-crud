@extends('layouts.main-layout')
@section('content')
    <form id="edit-drink" action="{{ route('update-drink', $drink->id) }}" method="POST">

        @csrf
        @method('POST')

        <label for="name">Name:</label>
        <input value={{ $drink->name }} type="text" name="name">

        <label for="alcoholContent">Alcohol Content:</label>
        <input value={{ $drink->alcoholContent }} type="text" name="alcoholContent">

        <label for="price">Price:</label>
        <input value={{ $drink->price }} type="text" name="price">

        <input type="submit" value="SUBMIT">

    </form>
@endsection
