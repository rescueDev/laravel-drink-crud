@extends('layouts.main-layout')
@section('content')
    <div class="drinks-container">
        <div class="button-container">

            <a class="create-button" href="{{ route('new-drink') }}">Create New Drink</a>
        </div>
        <ul>
            @foreach ($drinks as $drink)
                <li>
                    <a href="{{ route('show-drink', $drink->id) }}">
                        {{ $drink->name }}
                    </a>
                    <div class="edit-cont">
                        <a href="{{ route('edit-drink', $drink->id) }}">EDIT</a>
                        <a href="{{ route('delete-drink', $drink->id) }}">DELETE</a>

                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
