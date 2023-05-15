@extends('layouts.app')
@section('content')
    <div class="container py-3">
        <div class="d-flex justify-content-between">

            <div class="h4">STUDENTS</div>
            <div>
                <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">CREATE</a>
            </div>
        </div>
        <div class="card border-0 shadow-lg">
            <div class="card-body">
                <table class="table table-stripped">
                    <thead>
                        <tr>

                            <th>FIRSTNAME</th>
                            <th>LASTNAME</th>
                            <th>EMAIL</th>
                            <th>HOBBIES</th>
                            <th>GENDER</th>
                            <th>CONTACT</th>
                            <th>BIRTHDAY</th>
                            <th>SUBJECT</th>
                            <th>ADDRESS</th>

                            <th>OPERATIONS</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($students as $student)
                            <tr>

                                <td>{{ $student->firstname }}</td>
                                <td>{{ $student->lastname }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->hobbies }}</td>
                                <td>{{ $student->gender }}</td>
                                <td>{{ $student->contact }}</td>
                                <td>{{ $student->birthday }}</td>
                                <td>{{ $student->subject }}</td>
                                <td>{{ $student->address }}</td>
                                <td>
                                    {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'POST']) !!}

                                    <a
                                        class="btn-outline-success btn"href="{{ route('students.show', $student->id) }}">View</a>
                                    <a
                                        class="btn-outline-primary btn"href="{{ route('students.edit', $student->id) }}">Edit</a>



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
