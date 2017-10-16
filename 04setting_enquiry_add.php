<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Enquiry</title>

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
                            <h3>Enquiry</h3>
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-9 col-xs-12">

                            <div class="content-group add-enquiry-email">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Add</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-cancel">Cancel</button>
                                            <button type="button" class="btn btn-topic-save">Save</button>
                                        </div>

                                        <div class="form-group">
                                            <label>Enquiry Type</label>
                                            <div class="clear"></div>
                                            <div class="radio-inline">
                                                <label>
                                                    <input type="radio" name="event" class="control-event" value="IR Contact" checked="checked">IR Contact	
                                                        </label>
                                            </div>
                                            <div class="radio-inline">
                                                <label>
                                                    <input type="radio" name="event" class="control-event" value="Secretary Contact">Secretary Contact
                                                        </label>
                                            </div>
                                            <div class="radio-inline">
                                                <label>
                                                    <input type="radio" name="event" class="control-event" value="Whistle Blowing">Whistle Blowing
                                                        </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label>Responsible Person</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label>Forward to</label>
                                                    <span class="pull-right"><a type="button" class="btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a></span>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="#"><i class="icon-btn-addnew position-left"></i>Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-group">
                                <div class="panel-flat">
                                    <div class="text-center">
                                        <p>
                                            <button type="submit" class="btn btn-save">Save</button>
                                        </p>
                                    </div>
                                </div>
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
