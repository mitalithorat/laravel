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
        'username' => [
            'label' => ['name' => 'username', 'text' => 'Username'],
            'text' => ['name' => 'username', 'attributes' => ['id' => 'username', 'class' => 'form-control', 'placeholder' => 'Enter UserName']],
        ],
        'contact' => [
            'label' => ['name' => 'contact', 'text' => 'Contact'],
            'text' => ['name' => 'contact', 'attributes' => ['id' => 'contact', 'class' => 'form-control', 'placeholder' => '000000000']],
        ],
        'email' => [
            'label' => ['name' => 'email', 'text' => 'Email'],
            'email' => ['name' => 'email', 'attributes' => ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'xyz@gmail.com']],
        ],
        'country' => [
            'label' => ['name' => 'country', 'text' => 'Country'],
            'select' => [
                'name' => 'country',
                'attributes' => ['id' => 'country', 'class' => 'form-control'],
                'options' => ['' => 'choose country', 'US' => 'US', 'INDIA' => 'INDIA'],
            ],
        ],
        'state' => [
            'label' => ['name' => 'state', 'text' => 'State'],
            'select' => [
                'name' => 'state',
                'attributes' => ['id' => 'state', 'class' => 'form-control'],
                'options' => ['' => 'choose state', 'Maharastra' => 'Maharastra', 'Punjab' => 'Punjab', 'Delhi' => 'Delhi'],
            ],
        ],
        'street' => [
            'label' => ['name' => 'street', 'text' => 'Street'],
            'text' => ['name' => 'street', 'attributes' => ['id' => 'street', 'class' => 'form-control']],
        ],
        'pincode' => [
            'label' => ['name' => 'pincode', 'text' => 'Pincode'],
            'number' => ['name' => 'pincode', 'attributes' => ['id' => 'pincode', 'class' => 'form-control']],
        ],
    ];
@endphp
<div class="container">
    <div class="row">
        @foreach ($fieldDetails as $key => $fields)
            <div class="col-md-6 mt-md-0 py-2">
                @if (in_array($key, ['contact', 'email','username','pincode']))
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
