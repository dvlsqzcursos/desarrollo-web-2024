<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-search-dollar fa-fw"></i> &nbsp; BUSCAR PRÉSTAMOS POR FECHA
    </h3>
    <p class="text-justify">
	Llena los campos para buscar una reservacion.
    </p>
</div>

<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="<?php echo SERVERURL; ?>reservation-new/"><i class="fas fa-plus fa-fw"></i> &nbsp; NUEVO PRÉSTAMO</a>
        </li>
        <li>
            <a href="<?php echo SERVERURL; ?>reservation-reservation/"><i class="far fa-calendar-alt"></i> &nbsp; RESERVACIONES</a>
        </li>
        <li>
            <a href="<?php echo SERVERURL; ?>reservation-pending/"><i class="fas fa-hand-holding-usd fa-fw"></i> &nbsp; PRÉSTAMOS</a>
        </li>
        <li>
            <a href="<?php echo SERVERURL; ?>reservation-list/"><i class="fas fa-clipboard-list fa-fw"></i> &nbsp; FINALIZADOS</a>
        </li>
        <li>
            <a class="active" href="<?php echo SERVERURL; ?>reservation-search/"><i class="fas fa-search-dollar fa-fw"></i> &nbsp; BUSCAR POR FECHA</a>
        </li>
    </ul>
</div>
<?php
    if(!isset($_SESSION['fecha_inicio_prestamo']) && empty($_SESSION['fecha_inicio_prestamo']) && !isset($_SESSION['fecha_final_prestamo']) && empty($_SESSION['fecha_final_prestamo'])){
?>
<div class="container-fluid">
	<form class="form-neon FormularioAjax" action="<?php echo SERVERURL; ?>ajax/buscadorAjax.php" data-form="default" method="POST" enctype="multipart/form-data" autocomplete="off" >
		<input type="hidden" name="modulo" value="prestamo">
		<div class="container-fluid">
			<div class="row justify-content-md-center">
				<div class="col-12 col-md-4">
					<div class="form-group">
						<label for="fecha_inicio" >Fecha inicial (día/mes/año)</label>
						<input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" maxlength="30">
					</div>
				</div>
				<div class="col-12 col-md-4">
					<div class="form-group">
						<label for="fecha_final" >Fecha final (día/mes/año)</label>
						<input type="date" class="form-control" name="fecha_final" id="fecha_final" maxlength="30">
					</div>
				</div>
				<div class="col-12">
					<p class="text-center" style="margin-top: 40px;">
						<button type="submit" class="btn btn-raised btn-info"><i class="fas fa-search"></i> &nbsp; BUSCAR</button>
					</p>
				</div>
			</div>
		</div>
	</form>
</div>
<?php }else{ ?>
<div class="container-fluid">
	<form class="FormularioAjax" action="<?php echo SERVERURL; ?>ajax/buscadorAjax.php" data-form="search" method="POST" enctype="multipart/form-data" autocomplete="off" >
		<input type="hidden" name="eliminar_busqueda" value="eliminar">
		<input type="hidden" name="modulo" value="prestamo">
		<div class="container-fluid">
			<div class="row justify-content-md-center">
				<div class="col-12 col-md-6">
					<p class="text-center" style="font-size: 20px;">
						Fecha de busqueda: <strong><?php echo date("d-m-Y", strtotime($_SESSION['fecha_inicio_prestamo'])); ?> &nbsp; a &nbsp; <?php echo date("d-m-Y", strtotime($_SESSION['fecha_final_prestamo'])); ?></strong>
					</p>
				</div>
				<div class="col-12">
					<p class="text-center" style="margin-top: 20px;">
						<button type="submit" class="btn btn-raised btn-danger"><i class="far fa-trash-alt"></i> &nbsp; ELIMINAR BÚSQUEDA</button>
					</p>
				</div>
			</div>
		</div>
	</form>
</div>

<div class="container-fluid">
	<?php
        require_once "./controladores/prestamoControlador.php";
        $ins_prestamo = new prestamoControlador();

        echo $ins_prestamo->paginador_prestamos_controlador($pagina[1],15,$_SESSION['privilegio_spm'],$pagina[0],"Busqueda",$_SESSION['fecha_inicio_prestamo'],$_SESSION['fecha_final_prestamo']);
    ?>
</div>
<?php } ?>