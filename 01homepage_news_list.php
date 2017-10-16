<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>News Update</title>

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
                            <h3>News Update</h3>
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
                                                    <th class="td-type text-center">News Type</th>
                                                    <th class="td-date text-center">Date</th>
                                                    <th class="td-title">Title</th>
                                                    <th class="td-publish text-center">Published</th>
                                                    <th class="td-flag text-center">Flag on Homepage</th>
                                                    <th class="td-status text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="td-orde4r text-center">1</td>
                                                    <td class="td-type text-center">Corporate News</td>
                                                    <td class="td-date text-center"><span class="date">Aug 9, 2017</span></td>
                                                    <td class="td-title"><a href="#">คันทรี่ กรุ๊ป โฮลดิ้งส์และบริษัทหลักทรัพย์คันทรี่ กรุ๊ป ร่วมแสดงพลังวันต่อต้านคอร์รัปชันประจำปี 2560</a></td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-yes">Yes</span></td>
                                                    <td class="td-flag text-center"><span class="label label-rounded label-flag">Flag</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Created by <a href="#">Admin</a></span><br>
                                                        <span class="date">Jun 24, 2017</span><br>
                                                        <span class="time">01.37 pm</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-orde4r text-center">2</td>
                                                    <td class="td-type text-center">Press Release</td>
                                                    <td class="td-date text-center"><span class="date">Aug 9, 2017</span></td>
                                                    <td class="td-title"><a href="#">ทีทีเอทุ่ม600ล.ปูพรมพิซซ่าฮัทขยาย100สาขา</a></td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-yes">Yes</span></td>
                                                    <td class="td-flag text-center"><span class="label label-rounded label-flag">Flag</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Created by <a href="#">Admin</a></span><br>
                                                        <span class="date">Jun 24, 2017</span><br>
                                                        <span class="time">01.37 pm</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-orde4r text-center">3</td>
                                                    <td class="td-type text-center">CG Award</td>
                                                    <td class="td-date text-center"><span class="date">Aug 9, 2017</span></td>
                                                    <td class="td-title"><a href="#">ประกาศเกียรติคุณการใช้ซอฟแวร์ไทย</a></td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-yes">Yes</span></td>
                                                    <td class="td-flag text-center"><span class="label label-rounded label-flag">Flag</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Created by <a href="#">Admin</a></span><br>
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
                            <!-- end .show-list-all -->

                            <div class="show-reorder-all">
                                <div class="dataTables_wrapper">
                                    <div class="datatable-header">
                                        <div class="dataTables_length">
                                            <a href="01homepage_news_list.php"><button type="button" class="btn btn-cancel">Cancel</button></a>
                                            <button type="button" class="btn btn-save">Save</button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover tasks-list" id="sortable-table">
                                            <thead>
                                                <tr>
                                                    <th class="td-order text-center">Order</th>
                                                    <th class="td-type text-center">News Type</th>
                                                    <th class="td-date text-center">Date</th>
                                                    <th class="td-title">Title</th>
                                                    <th class="td-publish text-center">Published</th>
                                                    <th class="td-flag text-center">Flag on Homepage</th>
                                                    <th class="td-status text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="td-orde4r text-center"><i class="icon-list-reorder"></i></td>
                                                    <td class="td-type text-center">Corporate News</td>
                                                    <td class="td-date text-center"><span class="date">Aug 9, 2017</span></td>
                                                    <td class="td-title"><a href="#">คันทรี่ กรุ๊ป โฮลดิ้งส์และบริษัทหลักทรัพย์คันทรี่ กรุ๊ป ร่วมแสดงพลังวันต่อต้านคอร์รัปชันประจำปี 2560</a></td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-yes">Yes</span></td>
                                                    <td class="td-flag text-center"><span class="label label-rounded label-flag">Flag</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Created by <a href="#">Admin</a></span><br>
                                                        <span class="date">Jun 24, 2017</span><br>
                                                        <span class="time">01.37 pm</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-orde4r text-center"><i class="icon-list-reorder"></i></td>
                                                    <td class="td-type text-center">Press Release</td>
                                                    <td class="td-date text-center"><span class="date">Aug 9, 2017</span></td>
                                                    <td class="td-title"><a href="#">ทีทีเอทุ่ม600ล.ปูพรมพิซซ่าฮัทขยาย100สาขา</a></td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-yes">Yes</span></td>
                                                    <td class="td-flag text-center"><span class="label label-rounded label-flag">Flag</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Created by <a href="#">Admin</a></span><br>
                                                        <span class="date">Jun 24, 2017</span><br>
                                                        <span class="time">01.37 pm</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-orde4r text-center"><i class="icon-list-reorder"></i></td>
                                                    <td class="td-type text-center">CG Award</td>
                                                    <td class="td-date text-center"><span class="date">Aug 9, 2017</span></td>
                                                    <td class="td-title"><a href="#">ประกาศเกียรติคุณการใช้ซอฟแวร์ไทย</a></td>
                                                    <td class="td-publish text-center"><span class="label label-rounded label-yes">Yes</span></td>
                                                    <td class="td-flag text-center"><span class="label label-rounded label-flag">Flag</span></td>
                                                    <td class="td-status text-center">
                                                        <span class="status">Created by <a href="#">Admin</a></span><br>
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
