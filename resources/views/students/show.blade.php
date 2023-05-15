@extends('layouts.app')
@section('content')

                <h2 class="container p-3  text-center text-dark " style="margin-top:55px;" > Show Details</h2>


    <form class="container form-control  text-dark  p-5">
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Firstname:</strong>
                {{ $student->firstname }}
            </div>
</div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Lastname:</strong>
                {{ $student->lastname }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $student->email }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Hobbies:</strong>
                {{ $student->hobbies }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $student->gender }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Contact:</strong>
                {{ $student->contact }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Birthday:</strong>
                {{ $student->birthday }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Subject:</strong>
                {{ $student->subject }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $student->address }}
            </div>
        </div>



        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
            </div>
        </form>
@endsection
