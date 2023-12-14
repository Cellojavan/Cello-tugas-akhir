<script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous">
</script>
<script type="text/javascript">
  $(document).ready(function(){

    $("#icon-click").click(function(){
      $("#icon").toggleClass("fa-eye-slash");

      var input = $("#pass");
      if(input.attr("type")==="password"){
        input.attr("type","text");
      }
      else{
        input.attr("type","password");
      }

    });
  });
</script>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-orange">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1">Log<b>In</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <?php if($this->session->flashdata('success')) :?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong><?= $this->session->flashdata('success');?></strong> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
      <?php endif ?>
      <?php if($this->session->flashdata('error')) :?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong><?= $this->session->flashdata('error');?></strong> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
      <?php endif ?>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"><?= form_error('username'); ?></small>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" id="pass">
          <div class="input-group-append">
            <div class="input-group-text">
              <a href="#" class="text-dark" id="icon-click">
                <i class="fas fa-eye" id="icon"></i>
              </a>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"><?= form_error('password'); ?></small>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn btn-block" style="background-color:orange; color:white;">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    
      <!-- /.social-auth-links -->

      
      <p class="mb-0">
        <a href="<?=base_url()?>login/register" class="text-center" style="color:black;">Register a new membership</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
