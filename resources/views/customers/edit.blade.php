@extends('layouts.myapp') 
@section('content')
<FORM method="POST" action="/customers/update"> 
    @csrf <input type="hidden" name="id" value="{{$customer->id}}"> 
	
	<div class="form-group">
	
         <label for="firstname">Enter your first name:</label> 
		 <input type="text" name="firstname" value="{{$customer->firstname}}"><br> 
    </div>
	
	<div class="form-group">
	
         <label for="firstname">Enter your surname:</label> 
		 <input type="text" name="surname" value="{{$customer->surname}}"><br>
	</div>
	
	<div class="form-group">
	
	     <label for="firstname">Enter your DOB:</label>
		 <input type="text" date="dob" value="{{$customer->DOB}}"><br> 
	</div>
	
	<input type="submit"> 
	
</FORM> 

@endsection 
