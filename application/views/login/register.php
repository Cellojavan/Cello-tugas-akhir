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
<script type="text/javascript">
  $(document).ready(function(){

    $("#icon-click1").click(function(){
      $("#icon1").toggleClass("fa-eye-slash");

      var input = $("#pass1");
      if(input.attr("type")==="password"){
        input.attr("type","text");
      }
      else{
        input.attr("type","password");
      }

    });
  });
</script>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-orange">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Re</b>gister</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="username" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"><?= form_error('username'); ?></small>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="email" placeholder="email" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"><?= form_error('email'); ?></small>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="password" autocomplete="off" id="pass" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <a href="#" class="text-dark" id="icon-click">
                <i class="fas fa-eye" id="icon"></i>
              </a>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"><?= form_error('password'); ?></small>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="cpassword" placeholder="cpassword" autocomplete="off" id="pass1" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <a href="#" class="text-dark" id="icon-click1">
                <i class="fas fa-eye" id="icon1"></i>
              </a>
            </div>
          </div>
        </div>
        <small class="form-text text-danger"><?= form_error('cpassword'); ?></small>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn btn-block" style="background-color:orange; color:white;">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <a href="<?=base_url()?>login" class="text-center" style="color:black;">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->


