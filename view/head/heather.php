<?php
    require_once("c://xampp/htdocs/login/view/head/head.php");
?>



<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>


<div class="fondo_menu">
  <div class="container_fluid">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Productos</a></li>
              <li><a class="dropdown-item" href="#">Contactos</a></li>
              <li><a class="dropdown-item" href="#">Otros...</a></li>
            </ul>
          </li>        
        </ul>
        <a href="/login/view/home/login.php" class"boton">Iniciar Sesión</a>
        <a href="/login/view/home/login.php" class"boton">Registrate</a>
      </div>
    </div>
  </nav>
  </div>
</div>

<div class="fondo">