***REMOVED***

    require '../includes/config.php';

    if(base64_decode($_COOKIE['loggedin']) == 'true') {***REMOVED***
      else { header('Location: ../login.php'); ***REMOVED***

    $requestdns = $_GET['domain'];

    if (isset($requestdns) && $requestdns != '') {***REMOVED***
      else { header('Location: ../list/dns.php'); ***REMOVED***

    $postvars = array(
      array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-list-user','arg1' => $username,'arg2' => 'json'),
      array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-list-dns-records','arg1' => $username,'arg2' => $requestdns, 'arg3' => 'json'));

    $curl0 = curl_init();
    $curl1 = curl_init();
    $curlstart = 0; 


    while($curlstart <= 1) {
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_URL, $vst_url);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_RETURNTRANSFER,true);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_POST, true);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_POSTFIELDS, http_build_query($postvars[$curlstart]));
        $curlstart++;
    ***REMOVED*** 

    $admindata = json_decode(curl_exec($curl0), true)[$username];
    $useremail = $admindata[CONTACT];
    $recordnumber = array_keys(json_decode(curl_exec($curl1), true));
    if ($recordnumber[0] == '') { header('Location: ../list/dns.php'); ***REMOVED***
***REMOVED***

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/ico" href="../plugins/images/favicon.ico">
    <title>***REMOVED*** echo $sitetitle; ***REMOVED*** - DNS</title>
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/footable/css/footable.bootstrap.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/colors/***REMOVED*** echo $themecolor; ***REMOVED***" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.5/sweetalert2.min.css" />
    <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
        </svg>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="../index.php">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="../plugins/images/admin-logo.png" alt="home" class="logo-1 dark-logo" /><!--This is light logo icon--><img src="../plugins/images/admin-logo-dark.png" alt="home" class="logo-1 light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="../plugins/images/admin-text.png" alt="home" class="hidden-xs dark-logo" /><!--This is light logo text--><img src="../plugins/images/admin-text-dark.png" alt="home" class="hidden-xs light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>      
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">

                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs">***REMOVED*** print_r($uname); ***REMOVED***</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-text">
                                        <h4>***REMOVED*** print_r($uname); ***REMOVED***</h4>
                                        <p class="text-muted">***REMOVED*** print_r($useremail); ***REMOVED***</p></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../profile.php"><i class="ti-home"></i> My Account</a></li>
                            <li><a href="../profile.php?settings=open"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../process/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3>
                        <span class="fa-fw open-close">
                            <i class="ti-menu hidden-xs"></i>
                            <i class="ti-close visible-xs"></i>
                        </span> 
                        <span class="hide-menu">Navigation</span>
                    </h3>  
                </div>
                <ul class="nav" id="side-menu">
                    <li> <a href="../index.php" class="waves-effect"><i class="mdi mdi-home fa-fw"></i> <span class="hide-menu">Dashboard</span></a> </li>
                    <li class="devider"></li>
                    <li>
                        <a active href="#" class="waves-effect"><i class="ti-user fa-fw"></i><span class="hide-menu"> ***REMOVED*** print_r($uname); ***REMOVED***<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li> <a href="../profile.php"><i class="ti-home fa-fw"></i> <span class="hide-menu"> My Account</span></a></li>
                            <li> <a active href="../profile.php?settings=open"><i class="ti-settings fa-fw"></i> <span class="hide-menu"> Account Setting</span></a></li>
                        </ul>
                    </li>
                    <li class="devider"></li>
                    <li class="active"> <a href="#" class="awaves-effect"><i class="mdi mdi-av-timer fa-fw" aria-expanded="true" data-icon="v"></i> <span class="hide-menu">Management <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="../list/web.php"><i class="ti-world fa-fw"></i><span class="hide-menu">Web</span></a> </li>
                            <li> <a href="../list/dns.php" class="active"><i class="fa fa-sitemap fa-fw"></i><span class="hide-menu">DNS</span></a> </li>
                            <li> <a href="../list/mail.php"><i class="fa fa-envelope fa-fw"></i><span class="hide-menu">Mail</span></a> </li>
                            <li> <a href="../list/db.php"><i class="fa fa-database fa-fw"></i><span class="hide-menu">Database</span></a> </li>
                        </ul>
                    </li>
                    <li> <a href="../list/cron.php" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">Cron Jobs</span></a> </li>
                    <li> <a href="../list/backups.php" class="waves-effect"><i  class="fa fa-cloud-upload fa-fw"></i> <span class="hide-menu">Backups</span></a> </li>   
                    <li class="devider"></li>                
                    <li><a href="#" class="waves-effect"><i class="mdi mdi-apps fa-fw"></i> <span class="hide-menu">Apps<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="https://webftp.cdgtech.one"><i class="fa fa-file-code-o fa-fw"></i><span class="hide-menu">FTP</span></a></li>
                            <li><a href="https://usermail.cdgtech.one"><i class="fa fa-envelope-o fa-fw"></i><span class="hide-menu">Webmail</span></a></li>
                            <li><a href="https://host.cdgtech.one/phpmyadmin"><i class="fa fa-edit fa-fw"></i><span class="hide-menu">phpMyAdmin</span></a></li>
    
                        </ul>
                    </li>
                    <li class="devider"></li>
                    <li><a href="../process/logout.php" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                    <li class="devider"></li>
                    <li><a href="https://host.cdgtech.one:8083" class="waves-effect"> <i class="fa fa-tachometer fa-fw"></i> <span class="hide-menu"> Control Panel v1</span></a></li>
                    <li><a href="http://cdgsupport.epizy.com" class="waves-effect"> <i class="fa fa-life-ring fa-fw"></i> <span class="hide-menu">Support</span></a></li>
                </ul>
            </div>
        </div>
        <div id="page-wrapper">
           <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add DNS Record</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" autocomplete="off" method="post" action="../create/dnsrecord.php">
                                <div class="form-group">
                                    <label class="col-md-12">Domain</label>
                                    <div class="col-md-12">
                                        <input type="text" disabled value="<? print_r($requestdns); ***REMOVED***" style="background-color: #eee;padding-left: 0.6%;border-radius: 2px;border: 1px solid rgba(120, 130, 140, 0.13);bottom: 19px;background-image: none;" class="form-control uneditable-input form-control-static"> 
                                        <input type="hidden" name="v_domain" value="<? print_r($requestdns); ***REMOVED***"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Record</label>
                                    <div class="col-md-12">
                                        <input type="text" name="v_record" autocomplete="new-password" class="form-control form-control-line"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Type</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="v_type">
                                        <option value="A">A</option>
                                        <option value="AAAA">AAAA</option>
                                        <option value="NS">NS</option>
                                        <option value="CNAME">CNAME</option>
                                        <option value="MX">MX</option>
                                        <option value="TXT">TXT</option>
                                        <option value="SRV">SRV</option>
                                        <option value="DNSKEY">DNSKEY</option>
                                        <option value="KEY">KEY</option>
                                        <option value="IPSECKEY">IPSECKEY</option>
                                        <option value="PTR">PTR</option>
                                        <option value="SPF">SPF</option>
                                        <option value="TLSA">TLSA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-12">IP or Value</label>
                                    <div class="col-md-12">
                                        <input type="text" name="v_value" autocomplete="new-password" value="<? print_r($recorddata[$requestrecord][VALUE]); ***REMOVED***" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-12">Priority</label>
                                    <div class="col-md-12">
                                        <input type="text" name="v_priority" autocomplete="new-password" value="<? print_r($recorddata[$requestrecord][PRIORITY]); ***REMOVED***" class="form-control form-control-line"> 
                                        <small class="form-text text-muted">Optional</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">Add Record</button> &nbsp;
                                            <a href="../list/dnsdomain.php?domain=<? echo $requestdns; ***REMOVED***" style="color: inherit;text-decoration: inherit;"><button class="btn btn-muted" type="button">Back</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           <footer class="footer text-center">&copy; Copyright ***REMOVED*** echo date("Y") . ' ' . $sitetitle; ***REMOVED***. All Rights Reserved. Powered by VestaCP, CDG Web Services, & WrapPixel.</footer>
    </div>
    </div>
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="../js/jquery.slimscroll.js"></script>
    <script src="../js/waves.js"></script>
    <script src="../plugins/bower_components/moment/moment.js"></script>
    <script src="../plugins/bower_components/footable/js/footable.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="../plugins/bower_components/custom-select/custom-select.min.js"></script>
    <script src="../js/footable-init.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/dashboard1.js"></script>
    <script src="../js/cbpFWTabs.js"></script>
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.5/sweetalert2.all.js"></script>
    <script src="../plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
$('.datepicker').datepicker();
        (function () {
                [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
                new CBPFWTabs(el);
            ***REMOVED***);
        ***REMOVED***)(); 
        jQuery(function($){
            $('.footable').footable();
        ***REMOVED***);
    </script>
</body>

</html>