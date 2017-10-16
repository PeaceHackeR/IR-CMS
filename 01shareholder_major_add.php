<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Major Shareholder</title>

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
                            <h3>Major Shareholder</h3>
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
                                                        <input type="text" class="form-control pickadate" placeholder="Pick a date&hellip;" name="start_date">
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
                                                            <th class="text-center"><strong>Rank</strong></th>
                                                            <th class="text-center"><strong>Major Shareholders</strong></th>
                                                            <th class="text-center"><strong># Shares</strong></th>
                                                            <th class="text-center"><strong>% Shares</strong></th>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">1.</td>
                                                                <td>นางดาวนภา เพชรอำไพ</td>
                                                                <td width="15%" class="text-right">720,000,000</td>
                                                                <td width="15%" class="text-right">33.96</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">2.</td>
                                                                <td>นายชูชาติ เพ็ชรอำไพ</td>
                                                                <td width="15%" class="text-right">718,056,400</td>
                                                                <td width="15%" class="text-right">33.87</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3.</td>
                                                                <td>บริษัท ไทยเอ็นวีดีอาร์ จำกัด</td>
                                                                <td width="15%" class="text-right">87,856,497</td>
                                                                <td width="15%" class="text-right">4.14</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">4.</td>
                                                                <td>นายวศิน เดชกิจวิกรม</td>
                                                                <td width="15%" class="text-right">59,550,100</td>
                                                                <td width="15%" class="text-right">2.81</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">5.</td>
                                                                <td>STATE STREET BANK EUROPE LIMITED</td>
                                                                <td width="15%" class="text-right">22,312,500</td>
                                                                <td width="15%" class="text-right">1.05</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">6.</td>
                                                                <td> THE HONGKONG AND SHANGHAI BANKING CORPORATION LIMITED</td>
                                                                <td width="15%" class="text-right">22,250,000</td>
                                                                <td width="15%" class="text-right">1.05</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">7.</td>
                                                                <td>บริษัท ไทยประกันชีวิต จำกัด (มหาชน)</td>
                                                                <td width="15%" class="text-right">15,238,400</td>
                                                                <td width="15%" class="text-right">0.72</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">8.</td>
                                                                <td>NORBAX, INC.</td>
                                                                <td width="15%" class="text-right">13,508,200</td>
                                                                <td width="15%" class="text-right">0.64</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">9.</td>
                                                                <td>กองทุนเปิด เค หุ้นทุนบริพัตรเพื่อการเลี้ยงชีพ</td>
                                                                <td width="15%" class="text-right">12,431,200</td>
                                                                <td width="15%" class="text-right">0.59</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">10.</td>
                                                                <td>HSBC (SINGAPORE) NOMINEES PTE LTD</td>
                                                                <td width="15%" class="text-right">11,978,100</td>
                                                                <td width="15%" class="text-right">0.57</td>
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
