<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<?php include('menu.php') ?>
    <div class="container">

<!-- formulario contacto -->
        <div class="row">
        <div class="d-flex justify-content-center align-items-center">
            <div class="alert alert-info col-md-6 text-center ">

             Para poder tener acceso al sistema primero debe ingresar tus datos correctos.
            </div>
        </div>
 
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-4 ">
                    <div class="card" style="max-width: 18rem;">
                        <div class="card-header bg-secondary">
                            <p class="text-center text-white">Login</p>
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="post">
                                <?php include('errors.php'); ?>
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Nombre de usuario</label>
                                    <input type="text" class="form-control form-control-sm " name="username" required="true" maxlength="50" minlength="3" value="juan">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control form-control-sm" name="password" required="true" maxlength="64" minlength="3" value="1231231">
                                </div>
                                <input type="submit" class="btn btn-primary"  name="login"  value="Ingresar">
                        
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    </script> -->
</body>
</html>