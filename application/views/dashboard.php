<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('/assets/images/favicon.png')?>">
    <title>My Admin - is a responsive admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url('/assets/bower_components/metisMenu/dist/metisMenu.min.css')?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url('/assets/bower_components/morrisjs/morris.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('/assets/css/style.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/additional-style.css')?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <?php
        $data = $this->session->userdata('userdata');
        $user_data = $data['user_data'][0];
    ?>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part"><a class="logo" href="dashboard.php"><i class="glyphicon glyphicon-fire"></i>&nbsp;<span class="hidden-xs">My Admin</span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs hidden-lg
                            waves-effect waves-light"><i class="ti-arrow-circle-left ti-menu"></i>
                    </a></li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="ti-search"></i></a>
                        </form>
                    </li>
                    <li class="dropdown-user">
                        <a class="profile-pic" href="#"> 
                            <img src="<?php echo base_url('/assets/images/users/hritik.jpg')?>" alt="user-img" width="36" class="img-circle">
                            <b class="hidden-xs">
                                <?php echo $user_data['nama_admin']?>
                            </b> 
                        </a>
                        <div id="dropdown-user-content" class="dropdown-content hide">
                            <a href="<?php echo base_url('Login_controller/logout')?>">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>

        <?php 
            $this->load->view('side_menu');
        ?>
        
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Welcome to My Admin</h4>
                        <ol class="breadcrumb">
                            <li>Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->
        <footer class="footer text-center"> 2017 &copy; Myadmin brought to you by wrappixel.com </footer>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url('/assets/bower_components/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url('/assets/bower_components/metisMenu/dist/metisMenu.min.js')?>"></script>
    <!--Nice scroll JavaScript -->
    <script src="<?php echo base_url('/assets/js/jquery.nicescroll.js')?>"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url('/assets/bower_components/raphael/raphael-min.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('/assets/js/waves.js')?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('/assets/js/myadmin.js')?>"></script>
</body>

</html>
