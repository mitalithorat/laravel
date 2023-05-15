@extends('layouts.app')
@section('content')





<h2 class="container p-3  text-center text-dark " style="margin-top:30px;" > Show Details</h2>
<form class="container form-control p-5 shadow p-3 mb-5 bg-white rounded border border-secondary border border-2">
    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>Firstname:</strong>
            {{$contact->firstname}}
        </div>
    </div>
    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>Lastname:</strong>
            {{$contact->lastname}}
        </div>
    </div>

    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>Contact:</strong>
            {{$contact->contact }}
        </div>
    </div>
    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>Email:</strong>
            {{$contact->email}}
        </div>
    </div>
    <div class="mb-3 col-10 fs-5">
        <div class="form-inline">
            <strong>Address:</strong>
            {{$contact->address}}
        </div>
    </div>




    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>
    </div>
</form>
@endsection
