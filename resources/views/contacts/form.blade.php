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
        'address' => [
            'label' => ['name' => 'address', 'text' => 'Address'],
            'textarea' => ['name' => 'address', 'attributes' => ['id' => 'address', 'class' => 'form-control']],
        ],
    ];

@endphp




<div class="container">
    <div class="row">
        @foreach ($fieldDetails as $key => $fields)
            <div class="col-md-6 mt-md-0 py-2">
                @if (in_array($key, ['contact', 'email']))
                    <span style="color: red">*</span>
                @endif

                @foreach ($fields as $fieldKey => $fieldValue)
                    @include('input.' . $fieldKey, $fieldValue)
                @endforeach
                @error($key)
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        @endforeach



    </div>
    {{ Form::submit(isset($account) ? 'Update' : 'Save', ['class' => 'btn btn-primary', 'style' => 'margin-top:10px']) }}
</div>
