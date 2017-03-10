@if ($message = Session::get('success'))
	<div class="alert alert-success alert-block">
		@if(is_array($message)) 
			@foreach ($message as $m) 
				<p>{{ $m }}</p> 
			@endforeach
		@else 
			<p>{{ $message }}</p>
		@endif
	</div>
@endif

@if($errors->any())
	<div class="alert alert-danger alert-block">
		<p>Por favor verifique los siguientes errores:</p>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif


@if ($message = Session::get('error'))
	<div class="alert alert-danger alert-block">
		<p>Por favor verifique los siguientes errores:</p>
		@if(is_array($message))
			@foreach ($message as $m)
				<p>{{ $m }}</p>
			@endforeach
		@else 
			<p>{{ $message }}</p> 
		@endif
	</div>
@endif 

@if ($message = Session::get('warning'))
	<div class="alert alert-warning alert-block">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		@if(is_array($message))
			@foreach ($message as $m)
				<p>{{ $m }}</p>
			@endforeach
		@else 
			<p>{{ $message }}</p>
		@endif
	</div>
@endif 

@if ($message = Session::get('info'))
	<div class="alert alert-info alert-block">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		@if(is_array($message))
			@foreach ($message as $m)
				<p>{{ $m }}</p>
			@endforeach
		@else 
			<p>{{ $message }}</p>
		@endif
	</div>
@endif