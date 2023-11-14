@extends('layouts.app', ['title' => 'All students'])

@section('content')
    <h1>Student list</h1>
    <a href="/students/create">Add new student</a>
    @foreach($all_students as $student)
        <h3>{{ $student->name }}</h3>
        <p>{{ $student->address }}</p>
        <p>{{ $student->mobile }}</p>
        <p><a href="/students/{{$student->id}}">Show</a></p>
        <p><a href="/students/{{$student->id}}/edit">Edit</a></p>
        <form method="POST" action="{{ url('/students' . '/' . $student->id) }}" accept-charset="UTF-8" style="display:inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
    @endforeach
@endsection