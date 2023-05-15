@php
    $fieldDetails = [
        'Name' => [
            'label' => ['name' => 'name', 'text' => 'Name'],
            'text' => ['name' => 'name', 'attributes' => ['id' => 'name', 'class' => 'form-control', 'placeholder' => 'Enter Name']],
        ],

        'age' => [
            'label' => ['name' => 'age', 'text' => 'Age'],
            'number' => ['name' => 'age', 'attributes' => ['id' => 'age', 'class' => 'form-control']],
        ],

        'Nationality' => [
            'label' => ['name' => 'nationality', 'text' => 'Nationality'],
            'text' => ['name' => 'nationality', 'attributes' => ['id' => 'nationality', 'class' => 'form-control']],
        ],
        'Occupation' => [
            'label' => ['name' => 'occupation', 'text' => 'Occupation'],
            'text' => ['name' => 'occupation', 'attributes' => ['id' => 'occupation', 'class' => 'form-control']],
        ],
        'gender' => [
            'label' => ['name' => 'gender:', 'text' => 'gender:'],
            'radio' => [
                [
                    'label' => ['name' => 'Male', 'text' => 'Male', 'attributes' => ['id' => 'subject', 'class' => 'form-control']],
                    'radio' => ['name' => 'gender', 'value' => 'Male', 'attributes' => ['class' => 'col', 'id' => 'radio1']],
                ],
                [
                    'label' => ['name' => 'Female', 'text' => 'Female', 'attributes' => ['id' => 'subject', 'class' => 'form-control']],
                    'radio' => ['name' => 'gender', 'value' => 'Female', 'attributes' => ['class' => 'col', 'id' => 'radio2']],
                ],
            ],
        ],
    ];

    @endphp
<div class="container">
    <div class="row">
        @foreach ($fieldDetails as $key => $fields)
            <div class="md-form mb-0">
                @if (in_array($key, ['Name', 'age', 'Occupation']))
                    <span style="color: red">*</span>
                @endif
                @foreach ($fields as $fieldKey => $fieldValue)
                    @if ($fieldKey == 'radio')
                        @foreach ($fieldValue as $radio)
                            @foreach ($radio as $fieldKey => $fieldValue)
                                @include('input.' . $fieldKey, $fieldValue)
                            @endforeach
                        @endforeach
                    @else
                        @include('input.' . $fieldKey, $fieldValue)
                    @endif
                @endforeach
                @error($key)
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        @endforeach
    </div>
</div>
{{ Form::submit(isset($person) ? 'Update' : 'Save', ['class' => 'btn btn-primary', 'style' => 'margin-top:10px']) }}
</div>




