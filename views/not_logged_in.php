<div class="container">
    <?php include 'header.php';?>
    <div class="row">
    <form class="form-horizontal" method="post" action="index.php" name="loginform">
      <div class="form-group">
        <label for="login_input_username" class="col-sm-2 control-label text-left">User Name</label>
        <div class="col-sm-8">
          <input class="form-control login_input" id="login_input_username" placeholder="User Name" type="text" name="user_name" required>
        </div>
        <div class="col-sm-2">
        </div>
      </div>
      <div class="form-group">
        <label for="login_input_password" class="col-sm-2 control-label text-left">Password</label>
        <div class="col-sm-8">
          <input type="password" class="form-control login_input" id="login_input_password" placeholder="Password" name="user_password">
        </div>
        <div class="col-sm-2">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" name="login" class="btn btn-default" value="Log in"></button>
        </div>
      </div>
    </form>
    </div>
    <?php include 'footer.php'; ?>
</div>