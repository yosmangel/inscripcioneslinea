@extends('layout')

@section('header')


	<h1>
    	Datos Personales
    </h1>
@stop
@section('content')

<div class="row">
	<div class="col-md-12">
		<form method="POST"  id="formRegister" name="formRegister" action="">
		{{ csrf_field() }}
		<div class="row box box-primary">
			<div class="col-md-8">
				<div class="box">
					<div class="box-body">
						<div class="form-group {{$errors->has('cedula')? 'has-error' : '' }}">
							<label>Cédula</label>
							<input type="text" 
							name="cedula" 
							class="form-control" 
							placeholder="Ingrese aquí su cédula" 
							maxlength="13" 
							id="cedula" 
							data-inputmask="'mask': '999-99999-9999'"		
							>
							<span name="nombre_usuario" id="nombre_usuario"></span>
							<span id="error-cedula" class="validate-has-error ocultar-mensaje-error">Mensaje de error</span>
						</div>
						<div class="form-group {{$errors->has('telefono')? 'has-error' : '' }}">
							<label>Teléfono</label>
							<input type="text" name="telefono" class="form-control" placeholder="Ingrese aquí su teléfono" 
							maxlength="12" id="telefono" data-inputmask="'mask': '999-999-9999'">
							
							<span id="error-telefono" class="validate-has-error ocultar-mensaje-error">Mensaje de error</span>
							
						</div>
						<div class="form-group {{$errors->has('email')? 'has-error' : '' }}">
							<label>Correo</label>
							<input type="text" name="email" class="form-control" placeholder="Ingrese aquí su correo" id="email">
							
							<span id="error-email" class="validate-has-error ocultar-mensaje-error">Mensaje de error</span>
							
						</div>
					</div>
				</div>	
			</div>
			<div class="col-md-8">
				<div id="granSectionObligatoria" class="panel panel-primary" data-collapsed="0">
					
					<div class="panel-heading">
						<div class="panel-title">
							Más Datos
						</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="fa fa-list" style="color: white;"></i></a>
						</div>
					</div>
					
					<div class="panel-body">
						<div class="form-group {{$errors->has('direccion')? 'has-error' : '' }}">
							<label>Dirección</label>
							<textarea rows="5" name="direccion" class="form-control" placeholder="Ingrese aquí su dirección" id="direccion"></textarea>
							
							<span id="error-direccion" class="validate-has-error ocultar-mensaje-error">Mensaje de error</span>
							
						</div>			
								
						<div class="form-group {{$errors->has('category_id')? 'has-error' : '' }}">
							<label>Porfesión u oficio</label>
							<select name="profesion" id="profesion" class="form-control">
								<option value="-">Selecciona una profesión u oficio</option>
								@foreach($profesion_oficio as $profesion)
									<option value="{{ $profesion->id }}">{{ $profesion->name }}</option>
								@endforeach
							</select>
							
							<span id="error-profesion" class="validate-has-error ocultar-mensaje-error">Mensaje de error</span>
							
						</div>
						<div class="form-group {{$errors->has('cedula')? 'has-error' : '' }}">
							<label>Inscrito por:</label>
							<input type="text" id="cedula2" name="cedula2" class="form-control" placeholder="Ingrese aquí su cédula" maxlength="13"
							data-inputmask="'mask': '999-99999-9999'">
							<span name="nombre_usuario2" id="nombre_usuario2" ></span>
							
							<span id="error-cedula2" class="validate-has-error ocultar-mensaje-error">Mensaje de error</span>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<button class="btn btn-primary btn-block" id="btnRegistrar" name="btnRegistrar">Guardar Inscripcion</button>
			</div>
		</div>
	</form>
	</div>
</div>
	
@stop

@push('styles')
	<link rel="stylesheet" href="/adminlte/bower_components/select2/dist/css/select2.min.css">

@endpush

@push('scripts')
	<script src="/js/registro/validFormRegistry.js"></script>
	<script src="/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
	<script src="/Inputmask/dist/jquery.inputmask.bundle.js"></script>
	<script src="/Inputmask/dist/inputmask/phone-codes/phone.js"></script>
	<script src="/Inputmask/dist/inputmask/phone-codes/phone-be.js"></script>
	<script src="/Inputmask/dist/inputmask/phone-codes/phone-ru.js"></script>
	<script>

    	$('.select2').select2({
    		tags:true
    	});

    	
	</script>
	
@endpush

@section('modales')
	@include('modal.verificacion')	
@endsection

