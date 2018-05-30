<nav class="navbar navbar-expand-md navbar-dark bg-success mb-4">
      <a class="navbar-brand" href="#">Tholib Subechan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('index.php/Blog') ?>">Blog (yang lawas)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/Blog/datatable") ?>">Blog With Datatable</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/Blog/pagination") ?>">Blog With Pagination</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/User/Register") ?>">Registration</a>
          </li> </ul>
          <?php if(!$this->session->userdata('logged_in')) : ?>

           <div class="btn-group" role="group" aria-label="Data baru">
              <?php echo anchor('User/login', 'Login', array('class' => 'btn btn-outline-light')); ?>
            </div>
        <?php endif; ?>

        <?php if($this->session->userdata('logged_in')) : ?>
          <div class="btn-group" role="group" aria-label="Data baru">
          <?php echo anchor('User/logout', 'Logout', array('class' => 'btn btn-outline-light')); ?>
          </div>
        <?php endif; ?>
       
      </div>
    </nav>
<?php if($this->session->flashdata('user_registered')): ?>
         <?php echo '<div class="alert alert-success" role="alert">'.$this->session->flashdata('user_registered').'</div>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('user_loggedin')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
       <?php endif; ?>

       <?php if($this->session->flashdata('login_failed')): ?>
         <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
       <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
         <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
       <?php endif; ?>