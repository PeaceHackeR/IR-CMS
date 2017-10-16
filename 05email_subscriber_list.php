<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Subscriber</title>

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
                            <h3>Subscriber</h3>
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
                                <?php include 'ssi/app-list-filter-subscribe.php'; ?>
                                <!-- /app -->

                                <div class="table-responsive">
                                    <table class="table table-hover tasks-list">
                                        <thead>
                                            <tr>
                                                <th class="td-type text-center">Subscribe Type</th>
                                                <th class="td-name">Name</th>
                                                <th class="td-email">Email</th>
                                                <th class="td-status text-center">Subscribe Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-type text-center">SET Announcement,<br>
                                                Financial Report</td>
                                                <td class="td-name">นายไพรัช ธัชยพงษ์</td>
                                                <td class="td-email"><a href="#">pairash_th@example.co.th</a></td>
                                                <td class="td-status text-center">
                                                    <span class="date">Jun 24, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-type text-center">SET Announcement</td>
                                                <td class="td-name">นายพิชิต วิวัฒน์รุจิราพงศ์</td>
                                                <td class="td-email"><a href="#">phichit_vi@example.co.th</a></td>
                                                <td class="td-status text-center">
                                                    <span class="date">Jun 24, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-type text-center">Financial Report</td>
                                                <td class="td-name">นางกอบกาญจนา วีระพงษ์ประดิษฐ์</td>
                                                <td class="td-email"><a href="#">kobkanjana_ve@example.co.th</a></td>
                                                <td class="td-status text-center">
                                                    <span class="date">Jun 24, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-type text-center">SET Announcement,<br>
                                                Financial Report</td>
                                                <td class="td-name">Mrs. Kobkanjana Veerapongpradit</td>
                                                <td class="td-email"><a href="#">kobkanjana_ve@example.co.th</a></td>
                                                <td class="td-status text-center">
                                                    <span class="date">Jun 24, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-type text-center">SET Announcement,<br>
                                                Financial Report</td>
                                                <td class="td-name">Mrs. Kobkanjana Veerapongpradit</td>
                                                <td class="td-email"><a href="#">kobkanjana_ve@example.co.th</a></td>
                                                <td class="td-status text-center">
                                                    <span class="date">Jun 24, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
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
