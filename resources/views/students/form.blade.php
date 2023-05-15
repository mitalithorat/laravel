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
                    'subject' => [
                        'label' => ['name' => 'subject', 'text' => 'Subject'],
                        'select' => [
                            'name' => 'subject',
                            'attributes' => ['id' => 'subject', 'class' => 'form-control'],
                            'options' => ['' => 'chosse subject', 'wd' => 'wd', 'dma' => 'dma', 'os' => 'os'],
                        ],
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

                    'hobbies' => [
                        'label' => ['name' => 'hobbies:', 'text' => 'Hobbies:'],
                        'checkbox' => [
                            [
                                'label' => [
                                    'name' => 'Read',
                                    'text' => 'Read',
                                    'attributes' => ['id' => 'subject', 'class' => 'form-control'],
                                ],
                                'checkbox' => [
                                    'name' => 'hobbies[]',
                                    'value' => 'Read',
                                    'attributes' => ['class' => 'form-check-input', 'id' => 'check1'],
                                ],
                            ],
                            [
                                'label' => [
                                    'name' => 'Travelling',
                                    'text' => 'Travelling',
                                    'attributes' => ['id' => 'subject', 'class' => 'form-control'],
                                ],
                                'checkbox' => ['name' => 'hobbies[]', 'value' => 'Travelling',
                                'attributes' => ['class' => 'form-check-input', 'id' => 'check2']],
                            ],
                        ],
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
                                @if ($fieldKey == 'checkbox')
                                    @foreach ($fieldValue as $checkbox)
                                        @foreach ($checkbox as $fieldKey => $fieldValue)
                                            @include('input.' . $fieldKey, $fieldValue)
                                        @endforeach
                                    @endforeach
                                @elseif ($fieldKey == 'radio')
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
            {{ Form::submit(isset($student) ? 'Update' : 'Save', ['class' => 'btn btn-primary', 'style' => 'margin-top:10px']) }}
            </div>
