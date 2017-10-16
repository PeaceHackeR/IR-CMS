<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Free Float</title>

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
                            <h3>Free Float</h3>
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
                                                    <label>As of</label>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="icon-datepicker"></i></span>
                                                        <input type="text" class="form-control pickadate" placeholder="Pick a Date&hellip;" name="start_date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Details</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-cancel">Cancel</button>
                                            <button type="button" class="btn btn-topic-save">Save</button>
                                        </div>
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <div class="summernote-no-img">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-inside-detail" width="100%">
                                                        <thead>
                                                            <th colspan="2"><strong>Free Float As of 07/03/2017</strong></th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Minor Shareholders (Free float)</td>
                                                                <td width="15%" class="text-right">7,011</td>
                                                            </tr>
                                                            <tr>
                                                                <td>% Shares in Minor Shareholders (% Free float)</td>
                                                                <td width="15%" class="text-right">31.68</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <br>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-inside-detail" width="100%">
                                                        <thead>
                                                            <th colspan="2"><strong>Overview As of 02/05/2017 Rights Type : XD</strong></th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Total Shareholders</td>
                                                                <td width="15%" class="text-right">6,997</td>
                                                            </tr>
                                                            <tr>
                                                                <td>% Shares in Scripless Holding</td>
                                                                <td width="15%" class="text-right">87.65</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
