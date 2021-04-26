<!-- Personid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('PERSONID', 'Personid:') !!}
    {!! Form::number('PERSONID', null, ['class' => 'form-control']) !!}
</div>

<!-- Trainerid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TRAINERID', 'Trainerid:') !!}
    {!! Form::number('TRAINERID', null, ['class' => 'form-control']) !!}
</div>

<!-- Ordernumber Field -->
<div class="form-group col-sm-6">
    {!! Form::label('OrderNumber', 'Ordernumber:') !!}
    {!! Form::number('OrderNumber', null, ['class' => 'form-control']) !!}
</div>

<!-- Customername Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CustomerName', 'Customername:') !!}
	<select = 'personid' class="form-control">
    @foreach($person as $person)
	    <option value='{{$person->id}}'>{{$person}}</option>
	@endforeach
	</select>
</div>

<!-- Orderdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('OrderDate', 'Orderdate:') !!}
    {!! Form::text('OrderDate', null, ['class' => 'form-control','id'=>'OrderDate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#OrderDate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush