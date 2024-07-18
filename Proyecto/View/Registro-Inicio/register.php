<?php include_once '../layout.php';
include_once '../../Controller/usuarioController.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <?php  HeadCSS(); ?>
<body>
  <div class="container-scroller background-arenal">
    <div class="container-fluid page-body-wrapper full-page-wrapper background-arenal">
      <div class="main-panel background-arenal">
        <div class="content-wrapper d-flex align-items-center auth px-0 background-arenal">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5 navbar-blur">
                <div class="brand-logo">
                  <img src="../images/AFLogoBlanco.svg" alt="logo">
                </div>
                <h4 class="text-white text-white" >Registrese, es gratis!</h4>
                <h6 class=" text-white font-weight-light text-white" >Complete el formulario</h6>
                <br />
                <?php
                    if(isset($_POST["msj"]))
                    {
                        echo '<div class="alert alert-info">' . $_POST["msj"] . '</div>';
                    }
                ?>
                <form class="pt-3" action="" method="post">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="txtNombre" 
                     name="txtNombre" placeholder="Ingrese su nombre">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="txtUsername" 
                     name="txtUsername" placeholder="Ingrese su nombre de usuario">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="txtEmail" 
                    name="txtEmail" placeholder="Ingrese su email" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" 
                    name="txtPassword" id="txtPassword" placeholder="Ingrese su contraseña" required>
                  </div>  
                  <div class="mt-3">
                    <button type="submit" id="btnRegistrarUsuario"  name="btnRegistrarUsuario" 
                    class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Registrarse</button>
                  </div>
                  <div class="text-center mt-4 text-light" >
                    ¿Ya tiene una cuenta? <a href="login.php" class="text-success" >Inicie sesión</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <script src="js/template.js"></script>
  <script src="js/rutinas.js"></script>

</body>

</html>