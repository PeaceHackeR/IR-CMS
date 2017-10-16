<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Company Presentations</title>

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
                            <h3>Company Presentations</h3>
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
                                    <h4 class="text-heading">Add</h4>
                                    <div class="pull-right">
                                        <p>
                                            <button type="button" data-toggle="modal" data-target="#action-ConfirmThai" class="btn btn-duplicate btn-rounded-xs"><i class="icon-btn-duplicate position-left"></i><span class="hidden-xs">Duplicate from Thai</span></button>
                                        </p>
                                    </div>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-cancel">Cancel</button>
                                            <button type="button" class="btn btn-topic-save">Save</button>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label>Title</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label>Year</label>
                                                    <select class="select">
                                                        <option value="">Select</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2005">2005</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label>Quarter</label>
                                                    <select class="select">
                                                        <option value="">Select</option>
                                                        <option value="Quarter 1">Quarter 1</option>
                                                        <option value="Quarter 2">Quarter 2</option>
                                                        <option value="Quarter 3">Quarter 3</option>
                                                        <option value="Quarter 4">Quarter 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Cover</h4>
                                    <!-- App -->
                                    <?php include 'ssi/app-thai-cover.php'; ?>
                                    <!-- /App -->
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
                                                <div class="img"><img src="assets-cms/images/upload/presentation_350x200.jpg" class="img-responsive"></div>
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
                                    <h4 class="text-heading">Attach File</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-cancel">Cancel</button>
                                            <button type="button" class="btn btn-topic-save">Save</button>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <label>&nbsp;</label>
                                                    <div class="bc-file-upload">
                                                        <input type="text" class="form-control">
                                                        <ul class="import-file">
                                                            <li><a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a></li>
                                                            <li><a href="#" class="btn btn-computer"><i class="icon-btn-computer"></i></a></li>
                                                            <li><a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <!-- App -->
                                                    <?php include 'ssi/app-extension-pdf.php'; ?>
                                                    <!-- /app -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- App -->
                            <?php include 'ssi/app-setting-add.php'; ?>
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
