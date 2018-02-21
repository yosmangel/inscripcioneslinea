<!-- MODAL HABILITAR -->
	<div class="modal fade" id="modal-verificar" style="display: none;" data-backdrop="static">
		<div class="modal-dialog modal-size-30">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title">Verificar</h4>
				</div>
				
				<div class="modal-body">
					<br>
					<p class="p-cerrar-sesion">Introduzca los últimos 3 dígitos del télefono escrito</p>
					<br>
				</div>
					<form role="form" id="confirmarForm" name="confirmarForm"  method="POST" onsubmit="return false">
						{{ csrf_field() }}
						<input type="password" name="confirmacion" class="form-control" placeholder="Ingrese aquí su validación" 
							maxlength="3" id="confirmacion" >
				<div class="modal-footer">
					
						
						<button type="submit"  class="btn btn-blue" id="btnHabilitar" >Aceptar</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					</form>
				</div>

			</div>
		</div>
	</div>