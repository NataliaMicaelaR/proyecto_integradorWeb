<h1>Acerca de Roco's Drink</h1>
    <h2>Login</h2>

    </div>
    <p> Por favor, ingrese sus datos para iniciar sesión: </p>

        <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata ('msg')?>
            </div>
        <?php endif;?>
        
    <form method="post" action="<?php echo base_url('/enviarlogin') ?>">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header p-3 mb-2 bg-warning-subtle">
                        
        <div class=".container {
              display: flex;
             flex-direction: column;
              align-items: center;
             text-align: center;
               padding: 20px;">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header p-3 mb-2 bg-warning-subtle">
                        Inicio de Sesión
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
                            </div>
                            <div class="form-group">
                                <label for="username">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="usuario" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="pass" placeholder="contraseña" required>
                            </div>

                            <input type="submit" value="Ingresar" class="btn btn-warning">
                            <a href="<?php echo base_url ('/'); ?>" class="btn btn-secondary">Cancelar</a>
                            <br><span>¿Aún no se registró? <a href="<?php echo base_url('/registro'); ?>"> Registrarse aquí</a></span>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>