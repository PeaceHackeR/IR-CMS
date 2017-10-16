<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>CG Document</title>

    <!-- Global stylesheets -->
    <?php include "ssi/themes.php"; ?>

    <!-- Core JS files -->
    <?php include 'ssi/js-list.php'; ?>

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
            <div class="content-wrapper wrapper-list-page">

                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title col-xs-10">
                            <h3>CG Document</h3>
                        </div>
                        <div class="heading-button">
                            <a href="01report_cg_add.php"><button type="button" class="btn btn-addnew btn-rounded-xs"><i class="icon-btn-addnew position-left"></i><span class="hidden-xs">Add</span></button></a>
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">

                    <div class="content-group change-lang">
                        <div class="btn-group">
                            <a href="#" class="btn active btn-xlg">ไทย</a>
                            <a href="#" class="btn btn-xlg">Eng</a>
                        </div>
                    </div>

                    <div class="panel panel-flat">

                        <div class="panel-body">

                            <div class="show-list-all">
                                <div class="dataTables_wrapper">

                                    <!-- App -->
                                    <?php include 'ssi/app-list-filter-reorder.php'; ?>
                                    <!-- /app -->

                                    <div class="table-responsive">
                                        <table class="table table-hover tasks-list">
                                            <thead>
                                                <tr>
                                                    <th class="td-order text-center">Order</th>
                                                    <th class="td-img text-center">Cover</th>
                                                    <th class="td-title">Title</th>
                                                    <th class="td-publish text-center">Published</th>
                                                    <th class="td-status text-center">Status</th>
                                                    <th class="td-actions text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="td-order text-center">1</td>
                                                    <td class="td-img text-center">
                                                        <div class="thumbnail-list square">
                                                            <a href="assets-cms/images/upload/img_220x300.jpg" data-popup="lightbox">
                                                                <img src="assets-cms/images/upload/img_220x300.jpg" alt="">
                                                                <i class="icon-zoom-img"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="td-title"><a href="01report_cg_detail.php">นโยบายกำกับดูแลกิจการ</a></td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-yes">Yes</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Created by <a href="#">Admin</a></span><br>
                                                        <span class="date">Jun 24, 2017</span><br>
                                                        <span class="time">01.37 pm</span>
                                                    </td>
                                                    <td class="td-actions text-center">
                                                        <?php include 'ssi/app-actions-link.php'; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-order text-center">2</td>
                                                    <td class="td-img text-center">
                                                        <div class="thumbnail-list square">
                                                            <a href="assets-cms/images/upload/img_220x300.jpg" data-popup="lightbox">
                                                                <img src="assets-cms/images/upload/img_220x300.jpg" alt="">
                                                                <i class="icon-zoom-img"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="td-title"><a href="01report_cg_detail.php">นโยบายต่อต้านคอร์รัปชั่น</a></td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-yes">Yes</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Created by <a href="#">Admin</a></span><br>
                                                        <span class="date">Jun 24, 2017</span><br>
                                                        <span class="time">01.37 pm</span>
                                                    </td>
                                                    <td class="td-actions text-center">
                                                        <?php include 'ssi/app-actions-link.php'; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-order text-center">3</td>
                                                    <td class="td-img text-center">
                                                        <div class="thumbnail-list square">
                                                            <a href="assets-cms/images/upload/img_220x300.jpg" data-popup="lightbox">
                                                                <img src="assets-cms/images/upload/img_220x300.jpg" alt="">
                                                                <i class="icon-zoom-img"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="td-title"><a href="01report_cg_detail.php">ปัจจัยความเสี่ยง</a></td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-yes">Yes</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Created by <a href="#">Admin</a></span><br>
                                                        <span class="date">Jun 24, 2017</span><br>
                                                        <span class="time">01.37 pm</span>
                                                    </td>
                                                    <td class="td-actions text-center">
                                                        <?php include 'ssi/app-actions-link.php'; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-order text-center">4</td>
                                                    <td class="td-img text-center">
                                                        <div class="thumbnail-list square">
                                                            <a href="assets-cms/images/upload/img_220x300.jpg" data-popup="lightbox">
                                                                <img src="assets-cms/images/upload/img_220x300.jpg" alt="">
                                                                <i class="icon-zoom-img"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="td-title"><a href="01report_cg_detail.php">ความรับผิดชอบต่อสังคม</a></td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-no">No</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Edited by <a href="#">Admin</a></span><br>
                                                        <span class="date">Jun 24, 2017</span><br>
                                                        <span class="time">01.37 pm</span>
                                                    </td>
                                                    <td class="td-actions text-center">
                                                        <?php include 'ssi/app-actions-link.php'; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-order text-center">5</td>
                                                    <td class="td-img text-center">
                                                        <div class="thumbnail-list square">
                                                            <a href="assets-cms/images/upload/img_220x300.jpg" data-popup="lightbox">
                                                                <img src="assets-cms/images/upload/img_220x300.jpg" alt="">
                                                                <i class="icon-zoom-img"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="td-title"><a href="01report_cg_detail.php">ความรับผิดชอบต่อสังคม</a></td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-draft">Draft</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Created by <a href="#">Admin</a></span><br>
                                                        <span class="date">Jun 24, 2017</span><br>
                                                        <span class="time">01.37 pm</span>
                                                    </td>
                                                    <td class="td-actions text-center">
                                                        <?php include 'ssi/app-actions-link.php'; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- App -->
                                    <?php include 'ssi/app-list-pagination.php'; ?>
                                    <!-- /app -->

                                </div>
                                <!-- end .dataTables_wrapper -->
                            </div>
                            <!-- end .show-list-all -->

                            <div class="show-reorder-all">
                                <div class="dataTables_wrapper">
                                    <div class="datatable-header">
                                        <div class="dataTables_length">
                                            <a href="01report_cg_list.php"><button type="button" class="btn btn-cancel">Cancel</button></a>
                                            <button type="button" class="btn btn-save">Save</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover tasks-list" id="sortable-table">
                                            <thead>
                                                <tr>
                                                    <th class="td-order text-center">Order</th>
                                                    <th class="td-img text-center">Cover Image</th>
                                                    <th class="td-title">Title</th>
                                                    <th class="td-publish text-center">Published</th>
                                                    <th class="td-status text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
                                                    <td class="td-img text-center">
                                                        <div class="thumbnail-list square">
                                                            <a href="assets-cms/images/upload/img_220x300.jpg" data-popup="lightbox">
                                                                <img src="assets-cms/images/upload/img_220x300.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="td-title">นโยบายกำกับดูแลกิจการ</td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-yes">Yes</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Created by Admin</span><br>
                                                        <span class="date">Jun 24, 2017</span><br>
                                                        <span class="time">01.37 pm</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
                                                    <td class="td-img text-center">
                                                        <div class="thumbnail-list square">
                                                            <a href="assets-cms/images/upload/img_220x300.jpg" data-popup="lightbox">
                                                                <img src="assets-cms/images/upload/img_220x300.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="td-title">นโยบายต่อต้านคอร์รัปชั่น</td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-yes">Yes</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Created by Admin</span><br>
                                                        <span class="date">Jun 24, 2017</span><br>
                                                        <span class="time">01.37 pm</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
                                                    <td class="td-img text-center">
                                                        <div class="thumbnail-list square">
                                                            <a href="assets-cms/images/upload/img_220x300.jpg" data-popup="lightbox">
                                                                <img src="assets-cms/images/upload/img_220x300.jpg" alt="">
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="td-title">ปัจจัยความเสี่ยง</td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-yes">Yes</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Created by Admin</span><br>
                                                        <span class="date">Jun 24, 2017</span><br>
                                                        <span class="time">01.37 pm</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                            <!-- end .show-reorder-all -->

                        </div>
                        <!-- end .panel-body -->

                    </div>
                    <!-- end .panel panel-flat -->


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
