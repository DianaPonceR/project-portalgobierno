<div class="col-5 create-cronograma">
	<p>Seleccione la fecha de inicio y la fecha final para la implementación del proceso</p>
	
	<?php echo validation_errors(); ?>

	<?php echo form_open('cronograma/createdate'); ?>

		<label for="date">Fecha Inicio</label>
		<input type="text" name="date" class="fecha" id="datepicker" size="30" /><br />

		<label for="datef">Fecha Final</label>
		<input type="text" name="datef" class="fecha" id="datepickerf" size="30" /><br />

		<input type="submit" name="submit" value="Crear periodo" />

	</form>

	<p><a href="<?php echo site_url('cronograma/dates'); ?>">Ver periodos creados</a></p>

</div>