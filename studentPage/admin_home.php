<?php
//error_reporting(0);
include("common_function.php");

$url = WebuneFullUrl();
//Find weather localhost or other online server
$pos = strpos(strval($url), "localhost");
//$pos=strchr($url,$host_name);
$host_name = substr(strval($url), $pos, 9);
if ($host_name != "localhost") {
    error_reporting(0);
}

SessionManager::init();
$admin = new Admin();
$admin = SessionManager::getSessionAttribute(SessionConstants::SYSTEM_STUDENT);
if ($admin == NULL) {
    echo "<script>window.location.href='index.php'</script>";
}


?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Cambridge International School :: Student Login</title>

    <link rel="icon" href="images/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>

    <script type="text/javascript" src="js/validation/common_functions.js"></script>
    <script type="text/javascript" src="js/browser_detect.js"></script>
    <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 5px;
            margin-right: 0px;
            margin-bottom: 0px;
            background: url(images/login-bg.jpg) no-repeat fixed;
        }

        .logo {
            background: url("images/logo.png") no-repeat scroll 15px 10px transparent;

            margin: 0;
            padding: 20px;
            padding-left: 70px;

            color: #CCCCCC;
            font-size: 16px;
            font-weight: bold;
            text-shadow: 0.1em 0.1em #000000;
            text-transform: uppercase;
            text-decoration: none;
        }

        -->
    </style>

    <link rel="stylesheet" type="text/css" href="css/st_admin_style.css"/>

    <link rel="stylesheet" type="text/css" href="js/menu/ddsmoothmenu.css"/>
    <link rel="stylesheet" type="text/css" href="js/menu/ddsmoothmenu-v.css"/>


    <link type="text/css" href="js/ui/themes/base/ui.all.css"

          rel="stylesheet"/>


    <script type="text/javascript" src="js/ui/jquery-1.5.1.min.js"></script>

    <script type="text/javascript" src="js/menu/ddsmoothmenu.js"></script>

    <script type="text/javascript">
        ddsmoothmenu.init({
            mainmenuid: "smoothmenu1", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })
    </script>

</head>
<body onload="updateClock('current_date','full','label');setInterval('updateClock(\'current_date\',\'full\',\'label\')',1000);updateClock('currentDate','dateOnly','input');setInterval('updateClock(\'currentDate\',\'dateOnly\',\'input\')',1000);updateClock('currentTime','timeOnly','input');setInterval('updateClock(\'currentTime\',\'timeOnly\',\'input\')',1000);">
<table width="1000" border="0" cellspacing="0" cellpadding="0"
       class="outer_tab" align="center">
    <tr>
        <td valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td valign="top">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="100%" colspan="2" valign="top">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0"
                                           class="header">
                                        <tr>
                                            <th style="letter-spacing: 10px;padding: 0px;text-align: left;">
                                                <div class="logo">Cambridge International School</div>
                                            </th>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td height="18" colspan="2" valign="top" bgcolor="#333333"><?php
                                    if ($_REQUEST["view"] != "rpt_tot_stock_balance" && $_REQUEST["view"] != "rpt_pending_payment" && $_REQUEST["view"] != "rpt_delivered_invoice" && $_REQUEST["view"] != "rpt_pending_delivery_invoice" && $_REQUEST["view"] != "rpt_pending_item" && $_REQUEST["view"] != "rpt_sale_summary" && $_REQUEST["view"] != "rpt_customer_summary" && $_REQUEST["view"] != "rpt_todays_delivery")
                                        include './menu.php'; ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td align="center" valign="top" class="glass"><img src="images/space_5x5.gif"
                                                           width="5" height="5"></td>
    </tr>
    <tr>
        <td align="center" valign="top" class="glass">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td height="300" valign="top"><?= BuildView::setView(); ?></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center" valign="top" class="glass">&nbsp;</td>
    </tr>
    <tr>
        <td valign="top" class="glass">
            <table width="100%" border="0" cellspacing="0" cellpadding="0"
                   class="footer_tab">
                <tr>
                    <td height="25" valign="middle">&copy;<?= date('Y'); ?> Cambridge International School</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
<script type="text/javascript">
    function formCallback(result, form) {
        window.status = "valiation callback for form '" + form.id + "': result = " + result;
    }
    try {
        var valid = new Validation('rng_system_form', {immediate: true, onFormValidate: formCallback});
        Validation.addAllThese([
            ['validate-password', 'Password must be more than 6 characters and not be same as the Username', {
                minLength: 6,
                //	notOneOf : ['password','PASSWORD','123456','123456'],
                notEqualToField: 'user_name'
            }],
            ['validate-password-confirm', 'Your confirmation password does not match your first password, please try again.', {
                equalToField: 'password'
            }],
            ['validate-exist_username', 'Username is not available, please try another.', {
                notOneOf: ['admin', 'ADMIN'],
                notEqualToField: 'exist_username'
            }],
            ['validate-exist_item_serial_no', 'This Serial No. is already exist !, please try another.', {
                notEqualToField: 'exist_serial_no'
            }],
            ['validate-exist_technician_code', 'This Technician Code is already exist !, please try another.', {
                notEqualToField: 'exist_technician_code'
            }],
            ['validate-new-password-confirm', 'Your confirmation password does not match your new password, please try again.', {
                equalToField: 'new_password'
            }]
        ]);
    } catch (e) {

    }

</script>
