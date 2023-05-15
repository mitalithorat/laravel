@extends('layouts.app')
@section('content')
    <div class="container py-3">
        <div class="d-flex justify-content-between">

            <div class="h4">PEOPLE</div>
            <div>
                <a href="{{ route('people.create') }}" class="btn btn-primary mb-3">CREATE</a>
            </div>
        </div>
        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <table class="table table-stripped">
                    <thead>
                        <tr>

                            <th>NAME</th>
                            <th>AGE</th>
                            <th>GENDER</th>
                            <th>NATIONALITY</th>
                            <th>OCCUPATION</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>



                        @foreach($people as $person)
        <tr>
            <td>{{ $person->name }}</td>
            <td>{{ $person->age }}</td>
            <td>{{ $person->gender }}</td>
            <td>{{ $person->nationality }}</td>
            <td>{{ $person->occupation }}</td>
                                <td>
                                    {!! Form::open(['route' => ['people.destroy', $person->id], 'method' => 'POST']) !!}

                                    <a
                                        class="btn-outline-success btn"href="{{ route('people.show', $person->id) }}">View</a>
                                    <a
                                        class="btn-outline-primary btn"href="{{ route('people.edit', $person->id) }}">Edit</a>



                                    @method('DELETE')

                                    {!! Form::submit('Delete', ['class' => 'btn-outline-danger btn']) !!}

                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>
@endsection
