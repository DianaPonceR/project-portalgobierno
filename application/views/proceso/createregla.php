<h2>Crear Regla</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('proceso/createregla'); ?>

    <!--label for="regla">Regla</label>
    <input type="input" name="regla" /><br /-->

    <label for="cumplido">Cumplido</label>
    <select name="opcion">
    	<option value="true" name="true">Si</option>
    	<option value="false" name="false">No</option>
    </select><br />

    <label for="descripcion">Describir como se cumplió</label>
    <textarea name="descripcion"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />

</form>