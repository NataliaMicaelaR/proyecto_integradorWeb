<div class="container">
    <div class="row">
      <div class="col-md-12 text-center mt-4">
        <h2>Registro de Usuario</h2>
        <?php $validation = \Config\Services::validation(); ?>
<form method="post" action="<?php echo base_url('/enviar-form') ?>">
    <?=csrf_field();?>
    <?php if(!empty (session()->getFlashdata('fail'))):?>
       <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
    <?php endif?>
    <?php if(!empty (session()->getFlashdata('success'))):?>
    <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
    <?php endif?>
      </div>
      <div class="col-md-8 mx-auto">
        <div class="registration-box">
          <form>
            <div class="form-group">
              <label for="inputNombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre" required>
               <?php if ($validation->getError('nombre')) {?>
                 <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError ('nombre');?>
                                    </div>}
                                    <?php }?>
            </div>
            <div class="form-group">
              <label for="inputApellido">Apellido</label>
              <input type="text" class="form-control" id="apellido" placeholder="apellido" name="apellido" required>
              <?php if ($validation->getError('apellido')) {?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError ('apellido');?>
                                    </div>}
                                    <?php }?>
            </div>
            <div class="form-group">
              <label for="inputUsername">Nombre de Usuario</label>
              <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" required>
      <?php if ($validation->getError('usuario')) {?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError ('usuario');?>
                                    </div>}
                                    <?php }?>
            </div>
            <div class="form-group">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="correo electrónico"required>
                     <?php if ($validation->getError('email')) {?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError ('email');?>
                                    </div>}
                                    <?php }?>
            </div>
            <div class="form-group">
              <label for="inputPassword">Contraseña</label>
              <input type="password" class="form-control" id="contrasena" placeholder="contraseña" name="pass" required>
              <?php if ($validation->getError('pass')) {?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError ('pass');?>
                                    </div>}
                                    <?php }?>
            </div>
            <button type="submit" value="guardar" class="btn btn-primary">Enviar</button>
            <button type="button" value="cancelar"class="btn btn-secondary">Cancelar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
