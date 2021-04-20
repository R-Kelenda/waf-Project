<!-- Personid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PERSONID', 'Personid:') !!}
    {!! Form::number('PERSONID', null, ['class' => 'form-control']) !!}
</div>

<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Address', 'Address:') !!}
    {!! Form::text('Address', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Phone', 'Phone:') !!}
    {!! Form::text('Phone', null, ['class' => 'form-control','maxlength' => 13,'maxlength' => 13]) !!}
</div>

<!-- Dateofbirth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    {!! Form::text('dateofbirth', null, ['class' => 'form-control','id'=>'dateofbirth']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#dateofbirth').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Trainerid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TRAINERID', 'Trainerid:') !!}
    {!! Form::number('TRAINERID', null, ['class' => 'form-control']) !!}
</div>