@extends('layouts.app')
@section('content')

                <h2 class="container p-3  text-center text-dark " style="margin-top:55px;" > Show Details</h2>


    <form class="container form-control  text-dark  p-5">
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $person->name }}
            </div>
</div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Age:</strong>
                {{ $person->age }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Gender:</strong>
                {{ $person->gender }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Nationality:</strong>
                {{ $person->nationality }}
            </div>
        </div>
        <div class="mb-3 col-10 fs-5">
            <div class="form-group">
                <strong>Occupation:</strong>
                {{ $person->occupation }}
            </div>
        </div>





        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('people.index') }}"> Back</a>
            </div>
        </form>
@endsection
