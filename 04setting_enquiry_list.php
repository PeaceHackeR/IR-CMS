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
                            <h3>Enquiry</h3>
                        </div>
                        <div class="heading-button">
                            <a href="04setting_enquiry_add.php"><button type="button" class="btn btn-addnew btn-rounded-xs"><i class="icon-btn-addnew position-left"></i><span class="hidden-xs">Add</span></button></a>
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">

                    <div class="panel panel-flat">

                        <div class="panel-body">

                            <div class="dataTables_wrapper">

                                <!-- App -->
                                <?php include 'ssi/app-list-filter-enquiry-setting.php'; ?>
                                <!-- /app -->

                                <div class="table-responsive">
                                    <table class="table table-hover tasks-list">
                                        <thead>
                                            <tr>
                                                <th class="td-type text-center">Enquiry Type</th>
                                                <th class="td-name">Responsible Person</th>
                                                <th class="td-email">Forward to</th>
                                                <th class="td-status text-center">Status</th>
                                                <th class="td-actions text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-type text-center">IR Contact</td>
                                                <td class="td-name"><a href="04setting_enquiry_detail.php">นายไพรัช ธัชยพงษ์</a></td>
                                                <td class="td-email"><a href="#">pairash_th@example.co.th</a></td>
                                                <td class="td-status text-center">
                                                    <span class="status">Created by <a href="#">Admin</a></span><br>
                                                    <span class="date">Jun 24, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                                <td class="td-actions text-center">
                                                    <?php include 'ssi/app-actions-enquiry-email.php'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-type text-center">IR Contact</td>
                                                <td class="td-name"><a href="04setting_enquiry_detail.php">นายพิชิต วิวัฒน์รุจิราพงศ์</a></td>
                                                <td class="td-email"><a href="#">phichit_vi@example.co.th</a></td>
                                                <td class="td-status text-center">
                                                    <span class="status">Created by <a href="#">Admin</a></span><br>
                                                    <span class="date">Jun 24, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                                <td class="td-actions text-center">
                                                    <?php include 'ssi/app-actions-enquiry-email.php'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-type text-center">Secretary Contact</td>
                                                <td class="td-name"><a href="04setting_enquiry_detail.php">นางกอบกาญจนา วีระพงษ์ประดิษฐ์</a></td>
                                                <td class="td-email"><a href="#">kobkanjana_ve@example.co.th</a></td>
                                                <td class="td-status text-center">
                                                    <span class="status">Edited by <a href="#">Admin</a></span><br>
                                                    <span class="date">Jun 24, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                                <td class="td-actions text-center">
                                                    <?php include 'ssi/app-actions-enquiry-email.php'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-type text-center">Whistle Blowing</td>
                                                <td class="td-name"><a href="04setting_enquiry_detail.php">Mrs. Kobkanjana Veerapongpradit</a></td>
                                                <td class="td-email"><a href="#">kobkanjana_ve@example.co.th</a></td>
                                                <td class="td-status text-center">
                                                    <span class="status">Edited by <a href="#">Admin</a></span><br>
                                                    <span class="date">Jun 24, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                                <td class="td-actions text-center">
                                                    <?php include 'ssi/app-actions-enquiry-email.php'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-type text-center">Whistle Blowing</td>
                                                <td class="td-name"><a href="04setting_enquiry_detail.php">Mrs. Kobkanjana Veerapongpradit</a></td>
                                                <td class="td-email"><a href="#">kobkanjana_ve@example.co.th</a></td>
                                                <td class="td-status text-center">
                                                    <span class="status">Created by <a href="#">Admin</a></span><br>
                                                    <span class="date">Jun 24, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                                <td class="td-actions text-center">
                                                    <?php include 'ssi/app-actions-enquiry-email.php'; ?>
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
