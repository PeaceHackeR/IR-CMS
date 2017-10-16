<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Auto Feed</title>

    <!-- Global stylesheets -->
    <?php include "ssi/themes.php"; ?>

    <!-- Core JS files -->
    <?php include 'ssi/js-setting.php'; ?>

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
            <div class="content-wrapper wrapper-feed-page">

                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title col-xs-10">
                            <h3>Auto Feed</h3>
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-9 col-xs-12">


                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table feed-list">
                                            <thead>
                                                <tr>
                                                    <th class="td-title">Financial</th>
                                                    <th class="td-type text-center">File Type</th>
                                                    <th class="td-switch text-center">Auto Synchronize <i class="icon-info-feed color-notification-feed" data-popup="tooltip-auto-feed" title="ตั้งค่าเพื่อให้ระบบทำการดึงข้อมูลหลัง 00.00 น. ของทุกวัน เพื่อแสดงข้อมูลในระบบ CMS เฉพาะที่มีการเปลี่ยนแปลงข้อมูลเท่านั้น"></i></th>
                                                    <th class="td-switch text-center">Auto Publish <i class="icon-info-feed color-notification-feed" data-popup="tooltip-auto-feed" title="ตั้งค่าเพื่อให้ระบบทำการเปิดเผยข้อมูลที่หน้า website ทันทีเมื่อข้อมูลส่วนนั้นมีการเปลี่ยนแปลง"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="td-title">Finacial Highlight</td>
                                                    <td class="td-type text-center">Text</td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-feed" checked="checked">
                      											</label>
                                                        </div>
                                                    </td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-publish">
                      											</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title">Annual Report</td>
                                                    <td class="td-type text-center">PDF</td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-feed">
                      											</label>
                                                        </div>
                                                    </td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-publish">
                      											</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title">Form 56-1</td>
                                                    <td class="td-type text-center">PDF</td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-feed" checked="checked">
                      											</label>
                                                        </div>
                                                    </td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-publish" checked="checked">
                      											</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title">Finacial Statement</td>
                                                    <td class="td-type text-center">ZIP</td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-feed" checked="checked">
                      											</label>
                                                        </div>
                                                    </td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-publish" checked="checked">
                      											</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table feed-list">
                                            <thead>
                                                <tr>
                                                    <th class="td-title">Shareholder</th>
                                                    <th class="td-type text-center">File Type</th>
                                                    <th class="td-switch text-center">Auto Synchronize <i class="icon-info-feed color-notification-feed" data-popup="tooltip-auto-feed" title="ตั้งค่าเพื่อให้ระบบทำการดึงข้อมูลหลัง 00.00 น. ของทุกวัน เพื่อแสดงข้อมูลในระบบ CMS เฉพาะที่มีการเปลี่ยนแปลงข้อมูลเท่านั้น"></i></th>
                                                    <th class="td-switch text-center">Auto Publish <i class="icon-info-feed color-notification-feed" data-popup="tooltip-auto-feed" title="ตั้งค่าเพื่อให้ระบบทำการเปิดเผยข้อมูลที่หน้า website ทันทีเมื่อข้อมูลส่วนนั้นมีการเปลี่ยนแปลง"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="td-title">Free Float</td>
                                                    <td class="td-type text-center">Text</td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-feed" checked="checked">
                      											</label>
                                                        </div>
                                                    </td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-publish">
                      											</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title">Major Shareholder</td>
                                                    <td class="td-type text-center">Text</td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-feed">
                      											</label>
                                                        </div>
                                                    </td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-publish">
                      											</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td-title">Dividend</td>
                                                    <td class="td-type text-center">Text</td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-feed" checked="checked">
                      											</label>
                                                        </div>
                                                    </td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-publish" checked="checked">
                      											</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-flat">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table feed-list">
                                            <thead>
                                                <tr>
                                                    <th class="td-title">News</th>
                                                    <th class="td-type text-center">File Type</th>
                                                    <th class="td-switch text-center">Auto Synchronize <i class="icon-info-feed color-notification-feed" data-popup="tooltip-auto-feed" title="ตั้งค่าเพื่อให้ระบบทำการดึงข้อมูลอัตโนมัติ เพื่อแสดงข้อมูลในระบบ CMS เฉพาะที่มีการเปลี่ยนแปลงข้อมูลเท่านั้น"></i></th>
                                                    <th class="td-switch text-center">Auto Publish <i class="icon-info-feed color-notification-feed" data-popup="tooltip-auto-feed" title="ตั้งค่าเพื่อให้ระบบทำการเปิดเผยข้อมูลที่หน้า website ทันทีเมื่อข้อมูลส่วนนั้นมีการเปลี่ยนแปลง"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="td-title">SET Announcement</td>
                                                    <td class="td-type text-center">PDF</td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-feed" checked="checked">
                      											</label>
                                                        </div>
                                                    </td>
                                                    <td class="td-switch text-center">
                                                        <div class="checkbox checkbox-switchery switchery-sm">
                                                            <label>
                      												<input type="checkbox" class="switchery-auto-publish">
                      											</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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
