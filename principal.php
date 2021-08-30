<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- menu denavegacion -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Ferreteria</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link " href="#">Usarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Productos</a>
                        </li>
                    </ul>
                    <a href="login.php" class="btn btn-secondary" type="submit" style="text-decoration:none;">Login</a>
                </div>
            </div>
        </nav>
<!-- end menu de navegacion -->

<!-- formulario contacto -->
        <div class="row">
            <div class="col-md-12">
                <h3>Dashboard</h3>
             </div>
         
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-secondary">
                            <p class="text-center text-white">Registro de CLientes</p>
                        </div>
                        <div class="card-body">
                            <form action="guardarContacto.php" method="post">
                    
                                <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Nombres</label>
                                    <input type="text" class="form-control form-control-sm " name="nombres" required="true" maxlength="50" minlength="3">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control form-control-sm" name="apellidos" required="true" maxlength="64" minlength="3">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-sm" name="email" required="true" maxlength="64" minlength="3" value="bob@gmail.com">
                                </div>
                                <div class="mb-2">
                                    <label for="exampleFormControlInput1" class="form-label">Direccion</label>
                                    <input type="text" class="form-control form-control-sm" name="direccion" required="true" maxlength="64" minlength="3" value="av. irala">
                                </div>

                                <input type="submit" class="btn btn-primary" value="Guardar">
                                <input type="reset" class="btn btn-secondary" value="Cancelar">

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                    <img src="img/ferre.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require("mysql.php");
                        $pdo=new db();
                    $contactos = $pdo->mysql->query("select *from contactos");
                    
                    foreach($contactos as $contacto){
                        //  $telefonos=$pdo->mysql->query("select numero from telefonos where id={$contacto['id_contacto']}");
                        echo "<tr>
                                <td>{$contacto['id']}</td>
                                <td>{$contacto['apellidos']}</td>
                                <td>{$contacto['nombres']}</td>
                                <td>{$contacto['direccion']}</td>";
                                //   echo "<td>";
                                //   foreach($telefonos as $telefono)
                                //   {
                                //       echo "<li>{$telefono['numero']}</li>";
                                   //   }
                                //   echo "</td>";
                                //   echo "<td><a href='modificarContacto.php?id={$contacto['id_contacto']}'>Modificar</a></td>
                                //   <td><a href='eliminarContacto.php?id_contacto={$contacto['id_contacto']}'>Eliminar</a></td>";
                        echo "</tr>";
                    }


                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>