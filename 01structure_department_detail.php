<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Department</title>

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
                            <h3>Department</h3>
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
                                            <label>Department</label>
                                            <p>Board of Directors</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Intro</label>
                                            <p>Board of Director comprises of 8 directors as follows:</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Remark</label>
                                            <p> Directors 2, 3 and 4 are directors who have authority to sign on behalf of the Company. Two-thirds of these directors must sign their names together and affix it with the Company’s seal.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="last-modified"><strong>Last Modified</strong> Aug 9, 2017 at 04.38 pm - by <a href="#">Admin</a></p>
                            </div>


                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">List</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-view-edit">Edit</button>
                                        </div>
                                        <div class="form-group">
                                            <div class="list-reorder-inside">
                                                <div class="table-responsive">
                                                    <table class="table table-hover tasks-list">
                                                        <thead>
                                                            <tr>
                                                                <th class="td-name">Name</th>
                                                                <th class="td-title">Position</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="td-name"><strong>Mr. Yuth Worachattarn</strong></td>
                                                                <td class="td-title">Chairman of the Board of Directors, Independent Director</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-name"><strong>Mrs. Wanee Thasanamontien</strong></td>
                                                                <td class="td-title">Chairman of Executive Committee, Director</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-name"><strong>Mrs. Wanee Thasanamontien</strong></td>
                                                                <td class="td-title">Audit Committee, Chairman of Nomination and Remuneration Committee, Independent Director</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-name"><strong>Mrs. Wanee Thasanamontien</strong></td>
                                                                <td class="td-title">Nomination and Remuneration Committee, Independent Director</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="last-modified"><strong>Last Modified</strong> Aug 9, 2017 at 04.38 pm - by <a href="#">Admin</a></p>
                            </div>


                            <!-- App -->
                            <?php include 'ssi/app-setting-detail.php'; ?>
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
