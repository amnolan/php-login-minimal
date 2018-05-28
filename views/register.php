<!-- register form -->
<div class="container">
    <?php include 'header.php';?>
    <div class="row">
    <form class="form-horizontal" method="post" action="register.php" name="registerform">
      <div class="form-group">
        <label for="login_input_username" class="col-sm-2 control-label text-left">User Name</label>
        <div class="col-sm-8">
          <input id="login_input_username" class="form-control login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" placeholder="User name" required>
        </div>
        <div class="col-sm-2">
        </div>
      </div>
      <div class="form-group">
        <label for="login_input_email" class="col-sm-2 control-label text-left">Email</label>
        <div class="col-sm-8">
          <input id="login_input_email" class="form-control login_input" type="email" name="user_email" placeholder="Email" required>
        </div>
        <div class="col-sm-2">
        </div>
      </div>
      <div class="form-group">
        <label for="login_input_password_new" class="col-sm-2 control-label text-left">Password</label>
        <div class="col-sm-8">
          <input id="login_input_password_new" class="form-control login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" placeholder="Password" >
        </div>
        <div class="col-sm-2">
        </div>
      </div>
      <div class="form-group">
        <label for="login_input_password_repeat" class="col-sm-2 control-label text-left">Repeat password</label>
        <div class="col-sm-8">
          <input id="login_input_password_repeat" class="form-control login_input" type="password" name="user_password_repeat" pattern=".{6,}" placeholder="Repeat password" required autocomplete="off">
        </div>
        <div class="col-sm-2">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" class="btn btn-default" value="Register" name="register"></button>
        </div>
      </div>
    </form>
    </div>
    <div class="row">
        <div class="col-sm-offset-2 col-sm-10">
        <a href="index.php" id="index_link"><h4>Back to Login Page</h4></a>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div>