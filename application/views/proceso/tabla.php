<div class="row">
	<div class="col-12">
		<h2>Lista de Reglas del Proceso</h2>
		<div class="col-2">
			<p class="text-center">Regla</p>
			<?php foreach($rule as $reglas_item): ?>
				<p class="text-center"><?php echo $reglas_item['id']; ?></p>
			<?php endforeach; ?>
		</div>
		<div class="col-2">
			<p>Cumplido</p>
			<?php foreach($rule as $reglas_item): ?>
				<?php echo $reglas_item['cumplido']; ?><br />
			<?php endforeach; ?>
		</div>
		<div class="col-8">
			<p>Describir cómo se cumplió</p>
			<?php foreach($rule as $reglas_item): ?>
				<?php echo $reglas_item['descripcion']; ?></br>
			<?php endforeach; ?>
		</div>
	</div>
</div>