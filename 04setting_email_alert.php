<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Email Alert</title>

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
                        <div class="page-title col-xs-10">
                            <h3>Email Alert</h3>
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-9 col-xs-12">

                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Logo</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-cancel">Cancel</button>
                                            <button type="button" class="btn btn-topic-save">Save</button>
                                        </div>
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <div class="bc-img-browse">
                                                <div class="img"><img src="assets-cms/images/upload/logo_250x150.jpg" class="img-responsive"></div>
                                                <div class="remove-img">
                                                    <a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a>
                                                </div>
                                                <div class="btn-group import-img">
                                                    <a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a>
                                                    <a href="#" class="btn btn-computer" data-toggle="modal" data-target="#action-image43"><i class="icon-btn-computer"></i></a>
                                                </div>
                                            </div>
                                            <!-- App -->
                                            <?php include 'ssi/app-extension-image.php'; ?>
                                            <!-- /app -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Logo</h4>
                                    <p class="text-right">***** Use Edit *****</p>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-view-edit">Edit</button>
                                        </div>
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <p class="text-center"><img src="assets-cms/images/upload/img_250x150.jpg" class="img-responsive"></p>
                                        </div>
                                    </div>
                                </div>
                                <p class="last-modified"><strong>Last Modified</strong> Aug 9, 2017 at 04.38 pm - by <a href="#">Admin</a></p>
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
