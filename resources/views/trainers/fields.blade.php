<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control','maxlength' => 30,'maxlength' => 30]) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Phone', 'Phone:') !!}
    {!! Form::text('Phone', null, ['class' => 'form-control','maxlength' => 13,'maxlength' => 13]) !!}
</div>

<!-- Personid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PERSONID', 'Personid:') !!}
    {!! Form::text('PERSONID', null, ['class' => 'form-control','maxlength' => 20,'maxlength' => 20]) !!}
</div>