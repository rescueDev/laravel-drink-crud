@extends('layouts.main-layout')
@section('content')
    <div class="container">
        <ul>
            @foreach ($drinks as $drink)
                <li>
                    <a href="{{ route('show-drink', $drink->id) }}">
                        {{ $drink->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
