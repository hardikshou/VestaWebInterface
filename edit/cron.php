***REMOVED***

session_start();

if (file_exists( '../includes/config.php' )) { require( '../includes/config.php'); ***REMOVED***  else { header( 'Location: ../install' );***REMOVED***;

if(base64_decode($_SESSION['loggedin']) == 'true') {***REMOVED***
else { header('Location: ../login.php'); ***REMOVED***

$requestjob = $_GET['job'];

if (isset($requestjob) && $requestjob != '') {***REMOVED***
else { header('Location: ../list/mail.php'); ***REMOVED***

$postvars = array(
    array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-list-user','arg1' => $username,'arg2' => 'json'),
    array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-list-cron-job','arg1' => $username,'arg2' => $requestjob, 'arg3' => 'json'));

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
$useremail = $admindata['CONTACT'];
$crondata = array_values(json_decode(curl_exec($curl1), true));
$cronname = array_keys(json_decode(curl_exec($curl1), true));
if ($cronname[0] == '') { header('Location: ../list/cron.php'); ***REMOVED***
if(isset($admindata['LANGUAGE'])){ $locale = $ulang[$admindata['LANGUAGE']]; ***REMOVED***
setlocale(LC_CTYPE, $locale); setlocale(LC_MESSAGES, $locale);
bindtextdomain('messages', '../locale');
textdomain('messages');
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
        <title>***REMOVED*** echo $sitetitle; ***REMOVED*** - ***REMOVED*** echo _("Cron Jobs"); ***REMOVED***</title>
        <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
        <link href="../plugins/bower_components/footable/css/footable.bootstrap.css" rel="stylesheet">
        <link href="../plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <link href="../css/animate.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
        <link href="../css/colors/***REMOVED*** if(isset($_COOKIE['theme'])) { echo base64_decode($_COOKIE['theme']); ***REMOVED*** else {echo $themecolor; ***REMOVED*** ***REMOVED***" id="theme" rel="stylesheet">
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
                            <li><a href="../profile.php"><i class="ti-home"></i> ***REMOVED*** echo _("My Account"); ***REMOVED***</a></li>
                            <li><a href="../profile.php?settings=open"><i class="ti-settings"></i> ***REMOVED*** echo _("Account Settings"); ***REMOVED***</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../process/logout.php"><i class="fa fa-power-off"></i> ***REMOVED*** echo _("Logout"); ***REMOVED***</a></li>
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
                        <span class="hide-menu">***REMOVED*** echo _("Navigation"); ***REMOVED***</span>
                    </h3>  
                </div>
               <ul class="nav" id="side-menu">
                            <li> 
                                <a href="../index.php" class="waves-effect">
                                    <i class="mdi mdi-home fa-fw"></i> <span class="hide-menu">***REMOVED*** echo _("Dashboard"); ***REMOVED***</span>
                                </a> 
                            </li>

                            <li class="devider"></li>
                            <li>
                                <a href="#" class="waves-effect"><i  class="ti-user fa-fw"></i><span class="hide-menu"> ***REMOVED*** print_r($uname); ***REMOVED***<span class="fa arrow"></span></span>
                                </a>
                                <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                                    <li> <a href="../profile.php"><i class="ti-home fa-fw"></i> <span class="hide-menu"> ***REMOVED*** echo _("My Account"); ***REMOVED***</span></a></li>
                                    <li> <a href="../profile.php?settings=open"><i class="ti-settings fa-fw"></i> <span class="hide-menu"> ***REMOVED*** echo _("Acount Settings"); ***REMOVED***</span></a></li>
                                </ul>
                            </li>
                        ***REMOVED*** if ($webenabled == 'true' || $dnsenabled == 'true' || $mailenabled == 'true' || $dbenabled == 'true') { echo '<li class="devider"></li>
                            <li> <a href="#" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu">'. _("Management") . '<span class="fa arrow"></span> </span></a>
                                <ul class="nav nav-second-level">'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($webenabled == 'true') { echo '<li> <a href="../list/web.php"><i class="ti-world fa-fw"></i><span class="hide-menu">' . _("Web") . '</span></a> </li>'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($dnsenabled == 'true') { echo '<li> <a href="../list/dns.php"><i class="fa fa-sitemap fa-fw"></i><span class="hide-menu">' . _("DNS") . '</span></a> </li>'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($mailenabled == 'true') { echo '<li> <a href="../list/mail.php"><i class="fa fa-envelope fa-fw"></i><span class="hide-menu">' . _("Mail") . '</span></a> </li>'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($dbenabled == 'true') { echo '<li> <a href="../list/db.php"><i class="fa fa-database fa-fw"></i><span class="hide-menu">' . _("Database") . '</span></a> </li>'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($webenabled == 'true' || $dnsenabled == 'true' || $mailenabled == 'true' || $dbenabled == 'true') { echo '</ul>
                            </li>'; ***REMOVED*** ***REMOVED***
                        <li> <a href="../list/cron.php" class="waves-effect active"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">***REMOVED*** echo _("Cron Jobs"); ***REMOVED***</span></a> </li>
                        <li> <a href="../list/backups.php" class="waves-effect"><i  class="fa fa-cloud-upload fa-fw"></i> <span class="hide-menu">***REMOVED*** echo _("Backups"); ***REMOVED***</span></a> </li>
                        ***REMOVED*** if ($ftpurl == '' && $webmailurl == '' && $phpmyadmin == '' && $phppgadmin == '') {***REMOVED*** else { echo '<li class="devider"></li>
                            <li><a href="#" class="waves-effect"><i class="mdi mdi-apps fa-fw"></i> <span class="hide-menu">' . _("Apps") . '<span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($ftpurl != '') { echo '<li><a href="' . $ftpurl . '" target="_blank"><i class="fa fa-file-code-o fa-fw"></i><span class="hide-menu">' . _("FTP") . '</span></a></li>';***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($webmailurl != '') { echo '<li><a href="' . $webmailurl . '" target="_blank"><i class="fa fa-envelope-o fa-fw"></i><span class="hide-menu">' . _("Webmail") . '</span></a></li>';***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($phpmyadmin != '') { echo '<li><a href="' . $phpmyadmin . '" target="_blank"><i class="fa fa-edit fa-fw"></i><span class="hide-menu">' . _("phpMyAdmin") . '</span></a></li>';***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($phppgadmin != '') { echo '<li><a href="' . $phppgadmin . '" target="_blank"><i class="fa fa-edit fa-fw"></i><span class="hide-menu">' . _("phpPgAdmin") . '</span></a></li>';***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($ftpurl == '' && $webmailurl == '' && $phpmyadmin == '' && $phppgadmin == '') {***REMOVED*** else { echo '</ul></li>';***REMOVED*** ***REMOVED***
                        <li class="devider"></li>
                        <li><a href="../process/logout.php" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">***REMOVED*** echo _("Log out"); ***REMOVED***</span></a></li>
                        ***REMOVED*** if ($oldcpurl == '' || $supporturl == '') {***REMOVED*** else { echo '<li class="devider"></li>'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($oldcpurl != '') { echo '<li><a href="' . $oldcpurl . '" class="waves-effect"> <i class="fa fa-tachometer fa-fw"></i> <span class="hide-menu"> ' . _("Control Panel v1") . '</span></a></li>'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($supporturl != '') { echo '<li><a href="' . $supporturl . '" class="waves-effect" target="_blank"> <i class="fa fa-life-ring fa-fw"></i> <span class="hide-menu">' . _("Support") . '</span></a></li>'; ***REMOVED*** ***REMOVED***
                        </ul>
                </div>
            </div>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row bg-title">
                        <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                            <h4 class="page-title">***REMOVED*** echo _("Edit Cron Job"); ***REMOVED***</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="panel">
                                <div class="sk-chat-widgets">
                                    <div class="panel panel-themecolor">
                                        <div class="panel-heading">
                                            <center>***REMOVED*** echo _("CREATED"); ***REMOVED***</center>
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                                <h2>
                                                    ***REMOVED*** $date=date_create($crondata[0]['DATE'] . ' ' . $crondata[0]['TIME']); echo date_format($date,"F j, Y - g:i A"); ***REMOVED***
                                                </h2>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="panel">
                                <div class="sk-chat-widgets">
                                    <div class="panel panel-themecolor">
                                        <div class="panel-heading">
                                            <center>***REMOVED*** echo _("STATUS"); ***REMOVED***</center>
                                        </div>
                                        <div class="panel-body">
                                            <center>
                                                <h2>
                                                    ***REMOVED*** if ($crondata[0]['SUSPENDED'] == 'no') {echo 'Active';***REMOVED*** else {echo 'Suspended';***REMOVED******REMOVED***
                                                </h2>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-horizontal form-material">
                            <div class="col-md-12 col-xs-12">
                                <div class="white-box">
                                    <div class="form-group">
                                        <label class="col-md-12">***REMOVED*** echo _("Command"); ***REMOVED***</label>
                                        <div class="col-md-12">
                                            <input type="text" form="vstobjects" name="v_cmd" value="***REMOVED*** echo $crondata[0]['CMD']; ***REMOVED***" class="form-control"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <form class="form-horizontal form-material" autocomplete="off" id="vstobjects" method="post" action="../change/cron.php">
                            <input type="hidden" name="v_job" value="***REMOVED*** echo $requestjob; ***REMOVED***"> 
                            <div class="col-md-8 col-xs-12">
                                <div class="white-box">
                                    <div class="form-group">
                                        <label class="col-md-12">***REMOVED*** echo _("Minute"); ***REMOVED***</label>
                                        <div class="col-md-12">
                                            <input type="text" name="v_min" value="***REMOVED*** echo $crondata[0]['MIN']; ***REMOVED***" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">***REMOVED*** echo _("Hour"); ***REMOVED***</label>
                                        <div class="col-md-12">
                                            <input type="text" name="v_hour" value="***REMOVED*** echo $crondata[0]['HOUR']; ***REMOVED***" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">***REMOVED*** echo _("Day"); ***REMOVED***</label>
                                        <div class="col-md-12">
                                            <input type="text" name="v_day" value="***REMOVED*** echo $crondata[0]['DAY']; ***REMOVED***" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">***REMOVED*** echo _("Month"); ***REMOVED***</label>
                                        <div class="col-md-12">
                                            <input type="text" name="v_month" value="***REMOVED*** echo $crondata[0]['MONTH']; ***REMOVED***" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">***REMOVED*** echo _("Day of Week"); ***REMOVED***</label>
                                        <div class="col-md-12">
                                            <input type="text" name="v_wday" value="***REMOVED*** echo $crondata[0]['WDAY']; ***REMOVED***" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">***REMOVED*** echo _("Update Cron"); ***REMOVED***</button> &nbsp;
                                            <a href="../list/cron.php" style="color: inherit;text-decoration: inherit;"><button class="btn btn-muted" type="button">***REMOVED*** echo _("Back"); ***REMOVED***</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div> </form>
                        <div class="col-lg-4 col-xs-12">
                            <div class="white-box">
                                <div> 
                                    <center>
                                        <h3>
                                            ***REMOVED*** echo _("Cron Generator"); ***REMOVED***
                                        </h3>
                                    </center><br>
                                    <div class="overlay-box" style="background: #fff;">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a  href="#1" data-toggle="tab">***REMOVED*** echo _("Minutes"); ***REMOVED***</a>
                                            </li>
                                            <li><a href="#2" data-toggle="tab">***REMOVED*** echo _("Hourly"); ***REMOVED***</a>
                                            </li>
                                            <li><a href="#3" data-toggle="tab">***REMOVED*** echo _("Daily"); ***REMOVED***</a>
                                            </li>
                                            <li><a href="#4" data-toggle="tab">***REMOVED*** echo _("Weekly"); ***REMOVED***</a>
                                            </li>
                                            <li><a href="#5" data-toggle="tab">***REMOVED*** echo _("Monthly"); ***REMOVED***</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content  generator">
                                            <div class="tab-pane active" id="1">
                                                <form class="form-horizontal form-material" autocomplete="off" action="javascript:void(0);">
                                                    <div class="form-group">
                                                        <label class="col-md-12">***REMOVED*** echo _("Run Command"); ***REMOVED***</label>
                                                        <div class="col-md-12">
                                                            <select class="form-control" name="h_min" >
                                                                <option value="*" selected="selected">***REMOVED*** echo _("every minute"); ***REMOVED***</option>
                                                                <option value="*/2">***REMOVED*** echo _("every two minutes"); ***REMOVED***</option>
                                                                <option value="*/5">***REMOVED*** echo _("every"); ***REMOVED*** 5</option>
                                                                <option value="*/10">***REMOVED*** echo _("every"); ***REMOVED*** 10</option>
                                                                <option value="*/15">***REMOVED*** echo _("every"); ***REMOVED*** 15</option>
                                                                <option value="*/30">***REMOVED*** echo _("every"); ***REMOVED*** 30</option>
                                                            </select>
                                                    <input type="hidden" name="h_hour" value="*">
                                                    <input type="hidden" name="h_day" value="*">
                                                    <input type="hidden" name="h_month" value="*">
                                                    <input type="hidden" name="h_wday" value="*">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <button class="btn btn-success">***REMOVED*** echo _("Generate"); ***REMOVED***</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="2">
                                                <form class="form-horizontal form-material" autocomplete="off" action="javascript:void(0);">
                                                    <input type="hidden" name="h_day" value="*">
                                                    <input type="hidden" name="h_month" value="*">
                                                    <input type="hidden" name="h_wday" value="*">
                                                    <div class="form-group">
                                                        <label class="col-md-12">Run Command</label>
                                                        <div class="col-md-12">
                                                            <select class="form-control" name="h_hour">
                                                                <option value="*" selected="selected">***REMOVED*** echo _("every hour"); ***REMOVED***</option>
                                                                <option value="*/2">***REMOVED*** echo _("every two hours"); ***REMOVED***</option>
                                                                <option value="*/6">***REMOVED*** echo _("every"); ***REMOVED*** 6</option>
                                                                <option value="*/12">***REMOVED*** echo _("every"); ***REMOVED*** 12</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-12">***REMOVED*** echo _("Minute"); ***REMOVED***</label>
                                                    <div class="col-md-12">
                                                        <select class="form-control" name="h_min">
                                                            <option value="0" selected="selected">00</option>
                                                            <option value="15">15</option>
                                                            <option value="30">30</option>
                                                            <option value="45">45</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button class="btn btn-success">***REMOVED*** echo _("Generate"); ***REMOVED***</button>
                                                    </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="3">
                                                <form class="form-horizontal form-material" autocomplete="off" action="javascript:void(0);">
                                                    <input type="hidden" name="h_month" value="*">
                                                    <input type="hidden" name="h_wday" value="*">
                                                    <div class="form-group">
                                                        <label class="col-md-12">***REMOVED*** echo _("Run Command"); ***REMOVED***</label>
                                                        <div class="col-md-12">
                                                            <select class="form-control" name="h_day">
                                                                <option value="*" selected="selected">***REMOVED*** echo _("every day"); ***REMOVED***</option>
                                                                <option value="1-31/2">***REMOVED*** echo _("every odd day"); ***REMOVED***</option>
                                                                <option value="*/2">***REMOVED*** echo _("every even day"); ***REMOVED***</option>
                                                                <option value="*/3">***REMOVED*** echo _("every"); ***REMOVED*** 3</option>
                                                                <option value="*/5">***REMOVED*** echo _("every"); ***REMOVED*** 5</option>
                                                                <option value="*/10">***REMOVED*** echo _("every"); ***REMOVED*** 10</option>
                                                                <option value="*/15">***REMOVED*** echo _("every"); ***REMOVED*** 15</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-sm-6 pull-left"***REMOVED*** echo _("Hour"); ***REMOVED***</label><label class="col-sm-6 pull-right">***REMOVED*** echo _("Minute"); ***REMOVED***</label>
                                                        <div class="col-sm-6 pull-left">
                                                            <select class="form-control" name="h_hour">
                                                                <option value="0">00</option>
                                                                <option value="1">01</option>
                                                                <option value="2">02</option>
                                                                <option value="3">03</option>
                                                                <option value="4">04</option>
                                                                <option value="5">05</option>
                                                                <option value="6">06</option>
                                                                <option value="7">07</option>
                                                                <option value="8">08</option>
                                                                <option value="9">09</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12" selected="selected">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6 pull-right">
                                                            <select class="form-control" name="h_min">
                                                                <option value="0" selected="selected">00</option>
                                                                <option value="1">01</option>
                                                                <option value="2">02</option>
                                                                <option value="5">05</option>
                                                                <option value="10">10</option>
                                                                <option value="15">15</option>
                                                                <option value="20">20</option>
                                                                <option value="25">25</option>
                                                                <option value="30">30</option>
                                                                <option value="35">35</option>
                                                                <option value="40">40</option>
                                                                <option value="45">45</option>
                                                                <option value="50">50</option>
                                                                <option value="55">55</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <button class="btn btn-success">***REMOVED*** echo _("Generate"); ***REMOVED***</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="4">
                                                <form class="form-horizontal form-material" autocomplete="off" action="javascript:void(0);">
                                                    <input type="hidden" name="h_month" value="*">
                                                    <input type="hidden" name="h_day" value="*">
                                                    <div class="form-group">
                                                        <label class="col-md-12">***REMOVED*** echo _("Run Command"); ***REMOVED***</label>
                                                        <div class="col-md-12">
                                                            <select class="form-control" name="h_wday">
                                                                <option value="*" selected="selected">***REMOVED*** echo _("every day"); ***REMOVED***</option>
                                                                <option value="1,2,3,4,5">***REMOVED*** echo _("weekdays (5 days)"); ***REMOVED***</option>
                                                                <option value="0,6">***REMOVED*** echo _("weekend (2 days)"); ***REMOVED***</option>
                                                                <option value="1">***REMOVED*** echo _("Monday"); ***REMOVED***</option>
                                                                <option value="2">***REMOVED*** echo _("Tuesday"); ***REMOVED***</option>
                                                                <option value="3">***REMOVED*** echo _("Wednesday"); ***REMOVED***</option>
                                                                <option value="4">***REMOVED*** echo _("Thursday"); ***REMOVED***</option>
                                                                <option value="5">***REMOVED*** echo _("Friday"); ***REMOVED***</option>
                                                                <option value="6">***REMOVED*** echo _("Saturday"); ***REMOVED***</option>
                                                                <option value="0">***REMOVED*** echo _("Sunday"); ***REMOVED***</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                    <label class="col-sm-6 pull-left">***REMOVED*** echo _("Hour"); ***REMOVED***</label><label class="col-sm-6 pull-right">***REMOVED*** echo _("Minute"); ***REMOVED***</label>
                                                    <div class="col-sm-6 pull-left">
                                                        <select class="form-control" name="h_hour">
                                                            <option value="0">00</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                            <option value="5">05</option>
                                                            <option value="6">06</option>
                                                            <option value="7">07</option>
                                                            <option value="8">08</option>
                                                            <option value="9">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12" selected="selected">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-6 pull-right">
                                                        <select class="form-control" name="h_min">
                                                            <option value="0" selected="selected">00</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="5">05</option>
                                                            <option value="10">10</option>
                                                            <option value="15">15</option>
                                                            <option value="20">20</option>
                                                            <option value="25">25</option>
                                                            <option value="30">30</option>
                                                            <option value="35">35</option>
                                                            <option value="40">40</option>
                                                            <option value="45">45</option>
                                                            <option value="50">50</option>
                                                            <option value="55">55</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-12">
                                                        <button class="btn btn-success">***REMOVED*** echo _("Generate"); ***REMOVED***</button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="5">
                                                <form class="form-horizontal form-material" autocomplete="off" action="javascript:void(0);">
                                                    <input type="hidden" name="h_wday" value="*">
                                                    <div class="form-group">
                                                        <label class="col-md-12">***REMOVED*** echo _("Run Command"); ***REMOVED***</label>
                                                        <div class="col-md-12">
                                                            <select class="form-control" name="h_month">
                                                                <option value="*" selected="selected">***REMOVED*** echo _("every month"); ***REMOVED***</option>
                                                                <option value="1-11/2">***REMOVED*** echo _("every odd month"); ***REMOVED***</option>
                                                                <option value="*/2">***REMOVED*** echo _("every even month"); ***REMOVED***</option>
                                                                <option value="*/3">***REMOVED*** echo _("every"); ***REMOVED*** 3</option>
                                                                <option value="*/6">***REMOVED*** echo _("every"); ***REMOVED*** 6</option>
                                                                <option value="1">***REMOVED*** echo _("January"); ***REMOVED***</option>
                                                                <option value="2">***REMOVED*** echo _("February"); ***REMOVED***</option>
                                                                <option value="3">***REMOVED*** echo _("March"); ***REMOVED***</option>
                                                                <option value="4">***REMOVED*** echo _("April"); ***REMOVED***</option>
                                                                <option value="5">***REMOVED*** echo _("May"); ***REMOVED***</option>
                                                                <option value="6">***REMOVED*** echo _("June"); ***REMOVED***</option>
                                                                <option value="7">***REMOVED*** echo _("July"); ***REMOVED***</option>
                                                                <option value="8">***REMOVED*** echo _("August"); ***REMOVED***</option>
                                                                <option value="9">***REMOVED*** echo _("September"); ***REMOVED***</option>
                                                                <option value="10">***REMOVED*** echo _("October"); ***REMOVED***</option>
                                                                <option value="11">***REMOVED*** echo _("November"); ***REMOVED***</option>
                                                                <option value="12">***REMOVED*** echo _("December"); ***REMOVED***</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-12">***REMOVED*** echo _("Date"); ***REMOVED***</label>
                                                        <div class="col-md-12">
                                                            <select class="form-control" name="h_day">
                                                                <option value="1" selected="selected">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="26">26</option>
                                                                <option value="27">27</option>
                                                                <option value="28">28</option>
                                                                <option value="29">29</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-6 pull-left">***REMOVED*** echo _("Hour"); ***REMOVED***</label><label class="col-sm-6 pull-right">***REMOVED*** echo _("Minute"); ***REMOVED***</label>
                                                        <div class="col-sm-6 pull-left">
                                                            <select class="form-control" name="h_hour">
                                                                <option value="0">00</option>
                                                                <option value="1">01</option>
                                                                <option value="2">02</option>
                                                                <option value="3">03</option>
                                                                <option value="4">04</option>
                                                                <option value="5">05</option>
                                                                <option value="6">06</option>
                                                                <option value="7">07</option>
                                                                <option value="8">08</option>
                                                                <option value="9">09</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12" selected="selected">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="19">19</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="22">22</option>
                                                                <option value="23">23</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6 pull-right">
                                                            <select class="form-control" name="h_min">
                                                                <option value="0" selected="selected">00</option>
                                                                <option value="1">01</option>
                                                                <option value="2">02</option>
                                                                <option value="5">05</option>
                                                                <option value="10">10</option>
                                                                <option value="15">15</option>
                                                                <option value="20">20</option>
                                                                <option value="25">25</option>
                                                                <option value="30">30</option>
                                                                <option value="35">35</option>
                                                                <option value="40">40</option>
                                                                <option value="45">45</option>
                                                                <option value="50">50</option>
                                                                <option value="55">55</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-12">
                                                            <button class="btn btn-success">***REMOVED*** echo _("Generate"); ***REMOVED***</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer text-center">&copy; ***REMOVED*** echo _("Copyright"); ***REMOVED*** ***REMOVED*** echo date("Y") . ' ' . $sitetitle; ***REMOVED***. ***REMOVED*** echo _("All Rights Reserved. Vesta Web Interface"); ***REMOVED*** ***REMOVED*** require '../includes/versioncheck.php'; ***REMOVED*** ***REMOVED*** echo _("by CDG Web Services"); ***REMOVED***.</footer>
            </div>
        </div>
        <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
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
            $('.generator form').submit(function(){
                $('#vstobjects input[name=v_min]').val($(this).find(':input[name=h_min]').val());
                $('#vstobjects input[name=v_hour]').val($(this).find(':input[name=h_hour]').val());
                $('#vstobjects input[name=v_day]').val($(this).find(':input[name=h_day]').val());
                $('#vstobjects input[name=v_month]').val($(this).find(':input[name=h_month]').val());
                $('#vstobjects input[name=v_wday]').val($(this).find(':input[name=h_wday]').val());

                return false;
            ***REMOVED***);
            jQuery(function($){
                $('.footable').footable();
            ***REMOVED***);
        </script>
    </body>

</html>