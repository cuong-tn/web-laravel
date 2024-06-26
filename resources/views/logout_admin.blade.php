
<!DOCTYPE html>
<head>
    <title>QL Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
    <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="log-w3">
    <div class="w3layouts-main">
        <h2>ĐĂNG KÍ NGAY</h2>
        <?php
        $message = Session()->get('message');
        echo '<div style="color: #ACE1AF;text-align: center">',$message,'</div>';
        Session()->put('message',null);
        ?>

        <form action="{{URL::to('login_admin')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="customer_name">Name <span>*</span></label>
                <input type="text" id="customer_name" name="admin_name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="customer_email">Email <span>*</span></label>
                <input type="email" id="customer_email" name="admin_email" class="form-control" placeholder="Email Address" required>
            </div>
            <div class="form-group">
                <label for="customer_password">Password <span>*</span></label>
                <input type="password" id="customer_password" name="admin_password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="customer_phone">Phone <span>*</span></label>
                <input type="text" id="customer_phone" name="admin_phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="clearfix"></div>
            <input type="submit" value="Đăng kí" name="login">
        </form>
    </div>

</div>

<script src="{{asset('backend/js/bootstrap.js')}}"></script>
<script src="{{asset('backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('backend/js/scripts.js')}}"></script>
<script src="{{asset('backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('backend/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('backend/js/jquery.scrollTo.js')}}"></script>
</body>
</html>
