<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Financial Statement</title>

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
                            <h3>Financial Statement</h3>
                        </div>
                        <div class="heading-button">
                            <a href="#"><button type="button" class="btn btn-preview btn-rounded-xs"><i class="icon-btn-preview position-left"></i><span class="hidden-xs">Preview</span></button></a>
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
                                    <h4 class="text-heading">Information</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-view-edit">Edit</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <p>Financial Statement</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Year</label>
                                            <p>2017</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Quarter</label>
                                            <p>Q2</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="last-modified"><strong>Last Modified</strong> Aug 9, 2017 at 04.38 pm - by <a href="#">Admin</a></p>
                            </div>



                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Cover</h4>
                                    <!-- App -->
                                    <?php include 'ssi/app-thai-cover-view.php'; ?>
                                    <!-- /App -->
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-view-edit">Edit</button>
                                        </div>
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <p class="text-center"><img src="assets-cms/images/upload/img_220x300.jpg" class="img-responsive"></p>
                                        </div>
                                    </div>
                                </div>
                                <p class="last-modified"><strong>Last Modified</strong> Aug 9, 2017 at 04.38 pm - by <a href="#">Admin</a></p>
                            </div>

                            <!-- IF Synced can't edit attach file -->
                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Attach File</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-view-edit">Edit</button>
                                        </div>
                                        <div class="form-group">
                                            <p><a href="#">20170913-phol-fs-2016-en.zip</a> (200 KB.)</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="last-modified"><strong>Last Modified</strong> Aug 9, 2017 at 04.38 pm - by <a href="#">Admin</a></p>
                            </div>

                            <!-- App -->
                            <?php include 'ssi/app-setting-detail-link.php'; ?>
                            <!-- /app -->

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
