<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Usage</title>

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
            <div class="content-wrapper wrapper-detail-page">

                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title col-xs-10">
                            <h3>Usage</h3>
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">


                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Storage</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="form-group">
                                                    <label>Storage</label>
                                                    <div class="area-usage">
                                                    
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-xs-12">
                                                <div class="form-group">
                                                    <label>Usage</label>
                                                    <div class="area-usage">
                                                        <div class="head-usage">
                                                            <span>Current Plan</span>
                                                            <span class="text-right">5 GB</span>
                                                        </div>
                                                        <ul class="type-usage">
                                                            <li>
                                                                <span>PDF</span>
                                                                <span class="text-right">0.34 GB</span>
                                                            </li>
                                                            <li>
                                                                <span>ZIP</span>
                                                                <span class="text-right">0.25 GB</span>
                                                            </li>
                                                            <li>
                                                                <span>Images</span>
                                                                <span class="text-right">1 GB</span>
                                                            </li>
                                                            <li>
                                                                <span>Others</span>
                                                                <span class="text-right">1 GB</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label>Plans</label>
                                                    <div class= "area-usage">
                                                        <div class="row">
                                                            <div class="col-sm-4 col-xs-12">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12">
                                                            </div>
                                                            <div class="col-sm-4 col-xs-12">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Spask Post</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        
                                    </div>
                                </div>
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
