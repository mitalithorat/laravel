@extends('layouts.app')
@section('content')
    <div class="container py-3">
        <div class="d-flex justify-content-between">
            <div class="h4">STUDENTS</div>
            <div>
                <a href="{{ route('students.index') }}" class="btn btn-primary mb-3">BACK</a>
            </div>
        </div>

        {!! Form::model($student, ['route' => ['students.update', $student->id], 'method' => 'PUT']) !!}
        @include('students.form ')

      {!! Form::close() !!}
    </div>
@endsection
