
@extends('layouts.app')
@section('content')


    <div class="container py-3">
        <div class="d-flex justify-content-between">
            <div class="h4">CONTACTS</div>
            <div>
                <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">CREATE</a>
            </div>
        </div>
        <div class="card border-0 shadow-lg">
            <div class="card-body ">
                <table class="table table-light table-striped">
                    <thead>
                        <tr>

                            <th>FIRST NAME</th>
                            <th>LAST NAME</th>
                         <th>CONTACT</th>
                            <th>EMAIL</th>
                           <th>ADDRESS</th>
                            {{-- <th>Phonenumber</th> --}}
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($contacts as $contact)
                            <tr>

                                <td>{{ $contact->firstname }}</td>
                                <td>{{ $contact->lastname }}</td>

                                <td>{{ $contact->contact }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{$contact->address}}</td>

                                {{-- <td>{{ $contact->phonenumber }}</td> --}}
                                <td>

                                    {{-- <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST"> --}}
                                    {!! Form::open(['route' => ['contacts.destroy', $contact->id], 'method' => 'POST']) !!}

                                    <a
                                        class="btn-outline-success btn"href="{{ route('contacts.show', $contact->id) }}">View</a>
                                    <a
                                        class="btn-outline-primary btn"href="{{ route('contacts.edit', $contact->id) }}">Edit</a>



                                    @method('DELETE')
                                    {!! Form::submit('Delete', ['class' => 'btn-outline-danger btn']) !!}
                                    {{-- <button type="submit" class="btn-outline-danger btn">Delete</button> --}}
                                    {!! Form::close() !!}
                                    {{-- </form> --}}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>
@endsection
