@extends('layouts.app')

@section('content')
    <div class="container py-3">
        <div class="d-flex justify-content-between">
            <div class="h4">CONTACTS</div>
            <div>
                <a href="{{ route('contacts.index') }}" class="btn btn-primary mb-3">BACK</a>
            </div>
        </div>

        {!! Form::open([
            'url' => route('contacts.index'),
            'method' => 'post',
        ]) !!}

        @include('contacts.form')
        {!! Form::close() !!}

    </div>
@endsection
