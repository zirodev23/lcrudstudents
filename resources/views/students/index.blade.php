<h1>Student list</h1>
@foreach($all_students as $student)
    <h3>{{ $student->name }}</h3>
    <p>{{ $student->address }}</p>
    <p>{{ $student->mobile }}</p>
@endforeach