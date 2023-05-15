@extends('layouts.app')
@section('content')
    <div class="container py-3">
        <div class="d-flex justify-content-between">
            <div class="h4">PEOPLE</div>
            <div>
                <a href="{{ route('people.index') }}" class="btn btn-primary mb-3">BACK</a>
            </div>
        </div>

        {!! Form::model($person, ['route' => ['people.update', $person->id], 'method' => 'PUT']) !!}
        @include('people.form ')

      {!! Form::close() !!}
    </div>
@endsection
