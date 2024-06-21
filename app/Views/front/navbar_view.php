<!-- menú de navegación-->
<style>
        .bg-pink {
            background-color: #5a5f73; /* Color de fondo oscuro */
        }
</style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-pink fixed-top">
  <div class="container-fluid">
  <a href= "<?php echo base_url('principal')?>" alt="" width="80">
                <img src="assets/img/logo.png" alt="Logo" width="80">
            </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url("quienes_somos");?>">¿Quiénes Somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url("acerca_de");?>">Acerca de</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">Tours Grupales</a></li>
          <li><a class="dropdown-item" href="#">Tours Exclusivos</a></li>
          <li><a class="dropdown-item" href="#">Prónostico</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url("registro");?>">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url("login");?>">Iniciar sesión</a>
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>
<!--termina el nav-->