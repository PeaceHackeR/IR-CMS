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
            <div class="content-wrapper wrapper-add-page">

                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title col-xs-10">
                            <h3>Department</h3>
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
                                                    <label>Department</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label>Intro</label>
                                                    <textarea rows="5" cols="5" class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label>Remark</label>
                                                    <textarea rows="5" cols="5" class="form-control" placeholder=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">List</h4>
                                    <p class="text-right">***** Not Show in Add Page / Use in Edit Page *****</p>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="list-reorder-inside">
                                                <div class="button-reorder button-right top-topic">
                                                    <div class="reorder">
                                                        <button type="button" class="btn btn-reorder"><i class="icon-btn-reorder position-left"></i><span>Re Order</span></button>
                                                        <a href="01structure_department_add.php"><button type="button" class="btn btn-cancel">Cancel</button></a>
                                                        <button type="button" class="btn btn-save">Save</button>
                                                    </div>
                                                    <div class="cancel-save">
                                                        <a href="01structure_department_add.php"><button type="button" class="btn btn-cancel">Cancel</button></a>
                                                        <button type="button" class="btn btn-save">Save</button>
                                                    </div>
                                                </div>
                                                <label>&nbsp;</label>
                                                <hr class="no-margin">
                                                <div class="show-all-list">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover tasks-list">
                                                            <thead>
                                                                <tr>
                                                                    <th class="td-order text-center">Order</th>
                                                                    <th class="td-name">Name</th>
                                                                    <th class="td-title">Position</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="td-order text-center">1</td>
                                                                    <td class="td-name"><strong>Mr. Yuth Worachattarn</strong></td>
                                                                    <td class="td-title">Chairman of the Board of Directors, Independent Director</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center">2</td>
                                                                    <td class="td-name"><strong>Mrs. Wanee Thasanamontien</strong></td>
                                                                    <td class="td-title">Chairman of Executive Committee, Director</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center">3</td>
                                                                    <td class="td-name"><strong>Mrs. Wanee Thasanamontien</strong></td>
                                                                    <td class="td-title">Audit Committee, Chairman of Nomination and Remuneration Committee, Independent Director</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center">4</td>
                                                                    <td class="td-name"><strong>Mrs. Wanee Thasanamontien</strong></td>
                                                                    <td class="td-title">Nomination and Remuneration Committee, Independent Director</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="show-all-reorder">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover tasks-list" id="sortable-table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="td-order text-center">Order</th>
                                                                    <th class="td-name">Name</th>
                                                                    <th class="td-title">Position</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
                                                                    <td class="td-name"><strong>Mr. Yuth Worachattarn</strong></td>
                                                                    <td class="td-title">Chairman of the Board of Directors, Independent Director</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
                                                                    <td class="td-name"><strong>Mrs. Wanee Thasanamontien</strong></td>
                                                                    <td class="td-title">Chairman of Executive Committee, Director</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
                                                                    <td class="td-name"><strong>Mrs. Wanee Thasanamontien</strong></td>
                                                                    <td class="td-title">Audit Committee, Chairman of Nomination and Remuneration Committee, Independent Director</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
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
