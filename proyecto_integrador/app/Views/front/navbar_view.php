<?php 
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<!--NavBar -->
<nav class="navbar navbar-expand-lg bg-body-black">
  <div class="container-fluid">
    <div class="navbar-header">
         <?php if (session()->perfil_id == 1): ?>
            <div class="btn btn-secondary active btnUser btn-sm">
                <a>Admin: <?php echo $nombre; ?></a>
            </div>
        <?php elseif(session()->perfil_id == 2):?>
            <div class="btn btn-secondary active btnUser btn-sm">
                <a>Cliente: <?php echo $nombre; ?></a>
            </div>
            <?php endif;?>
      <a class="navbar-brand me-auto barra" href="<?php echo base_url('principal')?>">
        <!--logo-->
        <img src="<?php echo base_url('assets/img/logo.png')?>"
          alt="marca" width="75" height="30" class="img-fluid"/>
      </a>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href='<?php echo base_url('quienes_somos')?>'>Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?php echo base_url('acerca_de')?>'>Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?php echo base_url('registro')?>'>Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?php echo base_url('login')?>'>Login</a>
        </li>       
      </ul>
       <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>