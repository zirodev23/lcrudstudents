@extends('layouts.app', ['title' => 'Student: ' . $student->name])

@section('content')
    <div class="card">
        <div class="card-header">Students Page</div>
            <div class="card-body">   
                <div class="card-body">
                <h5 class="card-title">Name : {{ $student->name }}</h5>
                <p class="card-text">Address : {{ $student->address }}</p>
                <p class="card-text">Mobile : {{ $student->mobile }}</p>
            </div>
        </div>
    </div>

    <a href="/students">Back to student list</a>
@endsection