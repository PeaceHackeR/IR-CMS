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
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">

                    <div class="panel panel-flat">

                        <div class="panel-body">

                            <div class="dataTables_wrapper">

                                <!-- App -->
                                <?php include 'ssi/app-list-filter-enquiry.php'; ?>
                                <!-- /app -->

                                <div class="table-responsive">
                                    <table class="table table-hover tasks-list">
                                        <thead>
                                            <tr>
                                                <th class="td-id text-center">ID</th>
                                                <th class="td-type text-center">Enquiry Type</th>
                                                <th class="td-name">Name</th>
                                                <th class="td-subject">Subject</th>
                                                <th class="td-date text-center">Received Date</th>
                                                <th class="td-actions text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-id text-center">EQ-5</td>
                                                <td class="td-type text-center">IR Contact</td>
                                                <td class="td-name"><a href="02enquiry_contact_detail.php">นายไพรัช ธัชยพงษ์</a></td>
                                                <td class="td-subject"><a href="02enquiry_contact_detail.php">สอบถามการขอเล่มรายงานประจำปี</a></td>
                                                <td class="td-date text-center">
                                                    <span class="date">Aug 9, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                                <td class="td-actions text-center">
                                                    <?php include 'ssi/app-actions-enquiry-contact.php'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-id text-center">EQ-4</td>
                                                <td class="td-type text-center">IR Contact</td>
                                                <td class="td-name"><a href="02enquiry_contact_detail.php">นายพิชิต วิวัฒน์รุจิราพงศ์</a></td>
                                                <td class="td-subject"><a href="02enquiry_contact_detail.php">การจ่ายเงินปันผลของบริษัท</a></td>
                                                <td class="td-date text-center">
                                                    <span class="date">Aug 9, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                                <td class="td-actions text-center">
                                                    <?php include 'ssi/app-actions-enquiry-contact.php'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-id text-center">EQ-3</td>
                                                <td class="td-type text-center">Secretary Contact</td>
                                                <td class="td-name"><a href="02enquiry_contact_detail.php">นางกอบกาญจนา วีระพงษ์ประดิษฐ์</a></td>
                                                <td class="td-subject"><a href="02enquiry_contact_detail.php">การจ่ายเงินปันผลของบริษัท</a></td>
                                                <td class="td-date text-center">
                                                    <span class="date">Aug 9, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                                <td class="td-actions text-center">
                                                    <?php include 'ssi/app-actions-enquiry-contact.php'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-id text-center">EQ-2</td>
                                                <td class="td-type text-center">Whistle Blowing</td>
                                                <td class="td-name"><a href="02enquiry_contact_detail.php">Mrs. Kobkanjana Veerapongpradit</a></td>
                                                <td class="td-subject"><a href="02enquiry_contact_detail.php">การจ่ายเงินปันผลของบริษัท</a></td>
                                                <td class="td-date text-center">
                                                    <span class="date">Aug 9, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                                <td class="td-actions text-center">
                                                    <?php include 'ssi/app-actions-enquiry-contact.php'; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-id text-center">EQ-1</td>
                                                <td class="td-type text-center">Whistle Blowing</td>
                                                <td class="td-name"><a href="02enquiry_contact_detail.php">Mrs. Kobkanjana Veerapongpradit</a></td>
                                                <td class="td-subject"><a href="02enquiry_contact_detail.php">การจ่ายเงินปันผลของบริษัท</a></td>
                                                <td class="td-date text-center">
                                                    <span class="date">Aug 9, 2017</span><br>
                                                    <span class="time">01.37 pm</span>
                                                </td>
                                                <td class="td-actions text-center">
                                                    <?php include 'ssi/app-actions-enquiry-contact.php'; ?>
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
