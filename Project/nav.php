<?php

?>
<link href="fa\css\font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="bt\css\bootstrap.min.css" rel="stylesheet" type='text/css' >
<link href="{{ elixir('css/app.css') }}" rel="stylesheet">
<script src="jq\jquery-2.2.3.min.js"></script>
<script src="bt\js\bootstrap.min.js"></script>




  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="mainadmin.php" ><img src="img\logo.png" width="150" height="52" ></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="viewemployee.php"><i class="fa fa-cog" aria-hidden="true"></i> จัดการข้อมูลพนักงาน</a></li>
          <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> จัดการข้อมูลลูกค้า</a></li>
          <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i> จัดการข้อมูลประกันภัย</a></li>
        </ul>
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-primary">ค้นหา <i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['emp_name']; ?><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> แก้ไขข้อมูลส่วนตัว</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li><a href="function.php?action=logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
            </ul>
          </li>


        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

</body>
