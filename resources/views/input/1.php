@php
$fieldDetails = [
    'firstName' => [
        'label' => ['name' => 'firstname', 'text' => 'Firstname'],
        'text' => ['name' => 'firstname', 'attributes' => ['id' => 'firstname', 'class' => 'form-control', 'placeholder' => 'Enter FirstName']],
    ],
    'lastname' => [
        'label' => ['name' => 'lastname', 'text' => 'Lastname'],
        'text' => ['name' => 'lastname', 'attributes' => ['id' => 'lastname', 'class' => 'form-control', 'placeholder' => 'Enter LastName']],
    ],
    'email' => [
        'label' => ['name' => 'email', 'text' => 'Email'],
        'email' => ['name' => 'email', 'attributes' => ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'xyz@gmail.com']],
    ],
    'contact' => [
        'label' => ['name' => 'contact', 'text' => 'Contact'],
        'text' => ['name' => 'contact', 'attributes' => ['id' => 'contact', 'class' => 'form-control', 'placeholder' => '00000000']],
    ],
    'birthday' => [
        'label' => ['name' => 'birthday', 'text' => 'Birthday'],
        'date' => ['name' => 'birthday', 'attributes' => ['id' => 'birth', 'class' => 'form-control']],
    ],
    'subjects' => [
        'label' => ['name' => 'subjects', 'text' => 'Subjects'],
        'select' => [
           'name' => 'subjects','attributes' => ['id' => 'subjects', 'class' => 'form-control','options' => ['IS' => 'IS', 'DMA' => 'DMA', 'OS' => 'OS']]
        ],
    ],
];
@endphp
{{-- @foreach ($fieldDetails as $key => $labels)
@foreach ($labels as $key => $details)
    @include('label.' . $key, $details)
    {{-- @dd($labelDetails) --}}
{{-- @endforeach
@endforeach
@foreach ($fieldDetails as $key => $fields)
@foreach ($fields as $key => $property) --}}
{{-- @dd($key,$property,'input.'.$key,$property) --}}
{{-- @include('input.' . $key, $property)
@endforeach
@endforeach  --}}

@foreach ($fieldDetails as $key => $fields)
                        <div class="col-md-6 mt-md-0 mt-3">
                            <span style="color: red">* </span>
                            @foreach ($fields as $fieldKey => $fieldValue)
                                @include('input.' . $fieldKey, $fieldValue)
                            @endforeach
                            @error($key)
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    @endforeach

<div class="container">
<div class="row">
    @foreach ($fieldDetails as $key => $fields)
    <div class="col-md-6 mt-md-0 mt-3">
        <span style="color: red">* </span>
            @foreach ($fields as $fieldKey => $fieldValue)
                @include('input.' . $fieldKey, $fieldValue)
            @endforeach
            {{-- @error('firstname')
            <span class="text-danger">{{ $message }}</span>
            @enderror --}}
        </div>
        @endforeach
   </div>
</div>

{{ Form::submit(isset($student) ? 'Update' : 'Save', ['class' => 'btn btn-primary', 'style' => 'margin-top:10px']) }}

{{-- {{ Form::submit('Save') }} --}}
{{-- <button type="submit" class="btn btn-primary" style="margin-top: 10px">Save</button> --}}
<div class="col-md-6 mt-md-0 mt-3 py-4">

    {{ Form::label('hobbies', 'HOBBIES:') }}

    {{ Form::checkbox('hobbies[]', 'Read', null, ['class' => 'form-check-input', 'id' => 'check1']) }}
    {{ Form::label('check1', 'Read', ['class' => 'col py']) }}



    {{ Form::checkbox('hobbies[]', 'Travelling', null, ['class' => 'form-check-input', 'id' => 'check2']) }}
    {{ Form::label('check2', 'Travelling', ['class' => 'col']) }}


</div>
