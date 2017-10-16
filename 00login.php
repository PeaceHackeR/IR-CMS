<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Log in</title>

    <!-- Global stylesheets -->
    <?php include "ssi/themes.php"; ?>
    <link href="assets-cms/css/pages/login.css" rel="stylesheet" type="text/css">

    <!-- Core JS files -->
    <?php include 'ssi/js-login.php'; ?>

</head>

<body class="login-container">


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content">

                    <form action="00_dashboard.php" method="post">

                        <div class="panel-body login-form">
                            <div class="logo"><img src="assets-cms/images/logo_listed_login.png" alt=""></div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" required="required" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" required="required" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-login"><span>Log in</span></button>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-6">
                                    <div class="checkbox">
                                        <label>

                                      <input type="checkbox" class="control-remember-me">
                            					Remember me
                            				</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 forget-password">
                                    <p><a href="#">Forgot password?</a></p>
                                </div>
                            </div>

<!--
                            <div class="bc-login-b">
                                <ul class="term-privacy">
                                    <li><a href="#">Terms of Use</a></li>
                                    <li><a href="#">Privacy &amp; Cookies</a></li>
                                </ul>
                                <p class="listed-agency"><a href="#">thelistedagency.com</a></p>
                            </div>
-->
                        </div>

                    </form>

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

    <footer class="footer" role="contentinfo">
        <div class="legalFooter">
            <div class="extendedContent">
                <ul class="footerGroup footerGroupWithSiblings">
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy &amp; Cookies</a></li>
                </ul>
                <p class="footerCopyright">
                    &copy; Copyright 2017. <a href="http://www.icweb.co.th/" target="_blank">The Listed Agency</a> by <a href="www.icweb.co.th/" target="_blank">IC Web Co., Ltd.</a>
                </p>
                <p class="footerDisclaimer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>
            </div>
        </div>
    </footer>

</body>

</html>
