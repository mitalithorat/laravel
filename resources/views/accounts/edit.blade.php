@extends('layouts.app')
@section('content')
    <div class="container py-3">
        <div class="d-flex justify-content-between">
            <div class="h4">ACCOUNTS</div>
            <div>
                <a href="{{ route('accounts.index') }}" class="btn btn-primary mb-3">BACK</a>
            </div>
        </div>
        {{ Form::model($account, ['route' => ['accounts.update', $account->id], 'method' => 'PUT']) }}
        @include('accounts.form')
        {!! Form::close() !!}

    </div>
@endsection
