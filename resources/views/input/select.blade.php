
{{-- @dd($fieldValue) --}}
{!! Form::select($fieldValue['name'], $fieldValue['options'], null, $fieldValue['attributes']) !!}
{{-- {!! Form::select(
    'subject',
    ['' => 'Choose subjetcs', 'IS' => 'IS', 'DMA' => 'DMA', 'OS' => 'OS', 'WD' => 'WD'],
    null,
    [
        'class' => 'form-select',
        'id' => 'subjects',
    ],
) !!} --}}
