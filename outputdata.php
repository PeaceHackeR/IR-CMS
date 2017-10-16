<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Dashboard</title>

    <!-- Global stylesheets -->
    <?php include "ssi/themes.php"; ?>

    <!-- Core JS files -->
    <?php include 'ssi/js-add.php'; ?>

</head>

<body>

    <!-- Main navbar -->
    <?php include 'ssi/main-navbar.php'; ?>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">

                    <!-- Main navigation -->
                    <?php include 'ssi/main-navigation.php'; ?>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper wrapper-add-page">

                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h3><span class="text-semibold">OUTPUT --> data</span></h3>
                        </div>
                        <ul class="breadcrumb">
                            <li>referer : <?php echo $_SERVER['HTTP_REFERER']; ?></li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->

                <div class="content bc-content">
                    <div class="panel panel-flat">
                        <div class="panel-body">
                            <div class="heading-first-add">
                                <h4 class="text-heading">submit data</h4>
                                <p>
                                    <?php
                                        var_dump($_POST);
                                    ?>
                                </p>
                            </div>
                        </div>
                        <!-- end .panel-heading -->
                    </div>

                    <!-- Footer -->
                    <?php include 'ssi/footer.php'; ?>
                    <!-- /footer -->

                </div>

                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>

</html>
