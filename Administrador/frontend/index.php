<?php
include 'seguridad.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/e37ddc2f97.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Administrador </title>
    <link rel="shortcut icon" href="img/favicon/icono-32x32.png">
  
</head>
<body class="menu">

  <!--Barra de navegacion-->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand titulo" href="#">
            <img src="img/iconos/1_logo.png" alt=""  class="d-inline-block align-text-top icono" >
              A D M I N I S T R A C I Ó N
          </a>
        </div>
    </nav>
    <main>
    <a href="logout.php" ><i  class="fas fa-power-off" style="color: red;"></i></a>
        <div class="contenido-menu">
            <div class="container">
                <div class="row">
                    <!--Administrar Empresas-->
                    <div class="col" style="border-color: black;">
                        <div class="card mb-3 opciones" style="max-width: 540px;" onclick="mostarAd()"> 
                            <div class="row g-0">
                              <div class="col-md-4 menu-img">
                                <img  class="img-fluid rounded-start " src="img/AministrarEmpresas.png">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title titulo-menu">Administar Empresas</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                     <!--Fin AE-->
                      </div>

                      <div class="col">
                        <div class="card mb-3 opciones" style="max-width: 540px;" onclick="mostarProductos()">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img  class="img-fluid rounded-start" src="img/Productos.png">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title titulo-menu">Administar Productos de las Empresas</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      
                </div>

                <!--Fila 2-->
                <div class="row">
                    <!--Motorista-->
                    <div class="col">
                        <div class="card mb-3 opciones" style="max-width: 540px;" onclick="mostarMotoristas()">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img  class="img-fluid rounded-start" src="img/Motorista.png">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title titulo-menu">Motorista</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                     <!--Fin AE-->
                      </div>
                      
                      <div class="col">
                        <div class="card mb-3 opciones" style="max-width: 540px;" onclick="mostarOrdenes()">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img  class="img-fluid rounded-start" src="img/Ordenes.png">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title titulo-menu">Órdenes</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>  
                </div>
            </div>
        </div>

        <!--Administracion de Empresas-->
        <div id="admin-Empresas">
            <!--Abajo-->
            <div class="container ">
                <div class="row">
                  <div class=" col-12 titulos">
                    <h1>Administración de Empresas</h1>
                   </div>
                </div>


                <div class="row ">
                    <h2 style="margin-bottom: 20px;">Agregar Empresas</h2>
                    <div class="col">
                        <!--Form 1-->
                      <form>

                        <div class="mb-3">
                          <label  class="form-label">Nombre</label>
                          <input id="text-nombre" type="text" class="form-control"  placeholder="nombre empresa">
                        </div>

                        <div class="mb-3">
                          <label class="form-label">Categoría</label>
                          <input id="text-categoria" type="txt" class="form-control"  placeholder="Categoría">
                        </div>

                        <div class="mb-3">
                            <label  class="form-label">Descripción</label>
                            <textarea id="text-descrip" class="form-control"rows="3"></textarea>
                        </div>
  
                        <div class="mb-3">
                            <label class="form-label">Horario</label>
                            <input id="text-horario" type="txt" class="form-control"  placeholder="Horario">
                        </div>

                      </form>
                    </div>

                    <div class="col">
                        <!--Form 2-->
                        <div class="mb-3">
                            <label class="form-label">Logo</label>
                        </div>
                        <div class="mb-3" id="liveAlertPlaceholder">
                            <button id="liveAlertBtn" type="button" class="btn btn-danger form-control boton-ad" onclick="guardarEmpresa()" >Agregar archivo</button>
                        </div>
                        <div class="mb-3">
                            <img src="img/AministrarEmpresas.png" width="200" height="200">
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        <!--Fin administracion de empresas-->


        <!--Administracion de Productos-->
        <div id="admin-Productos">
          
            <!--Abajo-->
            <div class="container ">
              <div class="row">
                <div class=" col-12 titulos">
                  <h1>Administración de Productos</h1>
                 </div>
               </div>

                <div class="row ">
                    <h2 style="margin-bottom: 20px;">Agregar Productos</h2>
                    <div class="col">
                        <!--Form 1-->
                      <form>

                        <div class="mb-3">
                          <label  class="form-label">Nombre Del Producto</label>
                          <input id="text-nombreProducto" type="text" class="form-control"  placeholder="nombre producto">
                        </div>

                        <div class="mb-3">
                          <label class="form-label">Empresa</label>
                          <input id="text-empresa" type="txt" class="form-control"  placeholder="Empresa">
                        </div>

                        <div class="mb-3">
                            <label  class="form-label">Descripción</label>
                            <textarea id="text-descrip" class="form-control"rows="3"></textarea>
                        </div>
  
                        <div class="mb-3">
                            <label class="form-label">Precio</label>
                            <input id="text-precio" type="txt" class="form-control"  placeholder="Precio">
                        </div>

                      </form>
                    </div>

                    <div class="col">
                        <!--Form 2-->
                        <div class="mb-3">
                            <label class="form-label">Logo</label>
                        </div>
                        <div class="mb-3" id="liveAlertPlaceholder" >
  
                            <button id="liveAlertBtn" type="button" class="btn btn-danger form-control boton-ad" onclick="guardarProducto()" >Agregar archivo</button>
                        </div>
                        <div class="mb-3">
                            <img src="img/logo_pizzahut.png" width="200" height="200">
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        <!--Fin administracion de Productos-->
        

        <!--Motorista-->
        <div id="motorista">
            

            <!--Abajo-->
            <div class="container ">
              <div class="row">
                <div class=" col-12 titulos">
                  <h1>Motorista</h1>
                 </div>
              </div>
              <div id="solicitud">
              
                
              </div >
            </div>
        
        </div>
        <!--Fin de MOtorista-->

        <!--Órdenes-->
        
        <div id="ordenes">
          <!--<div class="titulos">
            <h1>Órdenes</h1>
           </div>-->
            
            <!--Abajo-->
            <div class="container ">
                <div class="row">
                  <div class=" col-12 titulos">
                    <h1>Órdenes</h1>
                   </div>

                </div>
              
                <div class="row ">
                    <div class="col-6" >
                        <!--Cards -->
                        <div class="container">
                          <!--Fila1-->
                          <div class="row" id="order">
                                 
                          </div>
                          <!--Fila2-->
                      </div>
                          
                    </div>

                    <div class="col">
                        <!--Form 2-->
                        <div class="container "> 
                            <div class="row">
                                <div class="card orden-moto" id="asignar">
                                  <div class="card-header">
                                    Pizza Hut
                                    <img class="img-logocard" src="img/logo_pizzahut.png">
                                </div>
                                <h5 class="card-title">Orden ###</h5>
                                <div class="row g-0">
                                     <div class="col-md-4">
                                       <img src="img/8_Producto.jpg" class="img-fluid rounded-start" alt="...">
                                      </div>
                                    <div class="col-md-8">
                                         <div class="card-body">
                                             <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero dignissimos unde corporis, culpa incidunt autem?</p>
                                             <div class="mb-3">
                                              <label class="form-label">Asignar Motorista</label>
                                              <input type="txt" class="form-control"  placeholder="Asignar Motorista">
                                            </div>
                                           </div>
                                      </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                       
                    </div>
                </div><!--Fin columna-->
            </div><!--Fin coteiner abajo-->
        
        </div>
        <!--Fin de Órdenes-->
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="js/axios.min.js"></script>
    <script src="js/controlador.js"></script>

    
</body>
</html>