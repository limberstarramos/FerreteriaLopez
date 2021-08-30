<!-- aqui pregunta que si o si tiene que ingresar datos -->

<?php if (count($errors)>0):?>

     <div class="error">
     	<?php foreach ($errors as $error): ?> 
     	<small class="text-danger"><?php echo $error; ?></small>
     <?php endforeach ?>
     </div>
<?php endif ?>