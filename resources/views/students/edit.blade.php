<!-- resources/views/students/edit.blade.php -->

@extends('layout')

@section('content')
<div class="container mt-5">
    <h2>Edit Student</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>MSSV</label>
            <input type="text"
                   name="student_code"
                   class="form-control"
                   value="{{ old('student_code', $student->student_code) }}"
                   required>
        </div>

        <div class="form-group">
            <label>Name</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   value="{{ old('name', $student->name) }}"
                   required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   value="{{ old('email', $student->email) }}"
                   required>
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text"
                   name="phone"
                   class="form-control"
                   value="{{ old('phone', $student->phone) }}"
                   required>
        </div>

        <div class="form-group">
            <label>Gender</label>
            <select name="gender" class="form-control" required>
                <option value="male" {{ old('gender', $student->gender)=='male'?'selected':'' }}>Male</option>
                <option value="female" {{ old('gender', $student->gender)=='female'?'selected':'' }}>Female</option>
                <option value="other" {{ old('gender', $student->gender)=='other'?'selected':'' }}>Other</option>
            </select>
        </div>

        <div class="form-group">
            <label>Age</label>
            <input type="number"
                   name="age"
                   class="form-control"
                   value="{{ old('age', $student->age) }}"
                   required>
        </div>

        <div class="form-group">
            <label>Address</label>
            <input type="text"
                   name="address"
                   class="form-control"
                   value="{{ old('address', $student->address) }}"
                   required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ old('description', $student->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
