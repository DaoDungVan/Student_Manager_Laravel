<!-- resources/views/students/show.blade.php -->

@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Student Detail</h2>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $student->id }}</td>
        </tr>
        <tr>
            <th>MSSV</th>
            <td>{{ $student->student_code }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $student->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $student->email }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $student->phone }}</td>
        </tr>
        <tr>
            <th>Gender</th>
            <td>{{ ucfirst($student->gender) }}</td>
        </tr>
        <tr>
            <th>Age</th>
            <td>{{ $student->age }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $student->address }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $student->description ?? 'No description' }}</td>
        </tr>
    </table>

    <a href="{{ route('students.index') }}" class="btn btn-secondary">
        Back to list
    </a>
    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">
        Edit
    </a>
</div>
@endsection
