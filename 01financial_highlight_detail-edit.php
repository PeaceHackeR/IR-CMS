<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Financial Highlight</title>

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
                            <h3>Financial Highlight</h3>
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
                                            <p>Financial Highlight</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Intro</label>
                                            <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="last-modified"><strong>Last Modified</strong> Aug 9, 2017 at 04.38 pm - by <a href="#">Admin</a></p>
                            </div>


                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Details</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-view-edit">Edit</button>
                                        </div>
                                        <div class="form-group">
                                            <label>Data Table</label>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-inside-detail" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Period as of</th>
                                                            <th width="15%" class="text-center">Y/E '14<br>31/12/2014</th>
                                                            <th width="15%" class="text-center">Y/E '15<br>31/12/2015</th>
                                                            <th width="15%" class="text-center">Y/E '16<br>31/12/2016</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>รายได้รวม
                                                                <div class="text-muted text-size-small">หน่วย: พันล้านบาท</div>
                                                            </td>
                                                            <td class="text-right">8,776.81</td>
                                                            <td class="text-right">13,082.80</td>
                                                            <td class="text-right">24,425.58</td>
                                                        </tr>
                                                        <tr>
                                                            <td>%YoY</td>
                                                            <td class="text-right">30%</td>
                                                            <td class="text-right">34%</td>
                                                            <td class="text-right">42%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>%QoQ</td>
                                                            <td class="text-right">30%</td>
                                                            <td class="text-right">34%</td>
                                                            <td class="text-right">42%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
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
