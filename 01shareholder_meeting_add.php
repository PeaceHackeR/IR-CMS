<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Shareholder Meeting</title>

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
                            <h3>Shareholder Meeting</h3>
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
                                        <div class="row event-meeting-type">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label>Meeting Type</label>
                                                    <div class="clear"></div>
                                                    <div class="radio-inline">
                                                        <label>
                                                    <input type="radio" name="event" class="control-event" value="AGM" checked="checked">AGM
                                                        </label>
                                                    </div>
                                                    <div class="radio-inline">
                                                        <label>
                                                    <input type="radio" name="event" class="control-event" value="EGM">EGM
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
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
                                                    <label>Year</label>
                                                    <select class="select">
                                                                <option value="">Select</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2016">2016</option>
                                                                <option value="2015">2015</option>
                                                                <option value="2014">2014</option>
                                                                <option value="2013">2013</option>
                                                            </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-12 event-number-egm">
                                                <div class="form-group">
                                                    <label>No.</label>
                                                    <select class="select">
                                                                <option value="">Select</option>
                                                                <option value="No. 1">No. 1</option>
                                                                <option value="No. 2">No. 2</option>
                                                                <option value="No. 3">No. 3</option>
                                                                <option value="No. 4">No. 4</option>
                                                                <option value="No. 5">No. 5</option>
                                                            </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <label>
                                        		<input type="checkbox" id="link-to-event" class="control-link-meeting">Link to Event
                                        	</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="meeting-link-event">
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Link Event</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-group shareholder-agenda-agm">
                                <div class="heading-topic edit-heading-topic">
                                    <h4 class="text-heading">Agenda</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="list-reorder-inside">
                                                <div class="button-reorder button-right top-topic">
                                                    <div class="reorder">
                                                        <button type="button" class="btn btn-reorder"><i class="icon-btn-reorder position-left"></i><span>Re Order</span></button>
                                                        <a href="01shareholder_meeting_add.php"><button type="button" class="btn btn-cancel">Cancel</button></a>
                                                        <button type="button" class="btn btn-save">Save</button>
                                                    </div>
                                                    <div class="cancel-save">
                                                        <a href="01shareholder_meeting_add.php"><button type="button" class="btn btn-cancel">Cancel</button></a>
                                                        <button type="button" class="btn btn-save">Save</button>
                                                    </div>
                                                </div>
                                                <label>&nbsp;</label>
                                                <hr class="no-margin">
                                                <div class="show-all-list">
                                                    <div class="table-responsive">
                                                        <table class="table tasks-list">
                                                            <thead>
                                                                <tr>
                                                                    <th class="td-order text-center">Order</th>
                                                                    <th class="td-title">Title</th>
                                                                    <th class="td-file">Attach File</th>
                                                                    <th class="td-actions text-center">&nbsp;</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="td-order text-center">1</td>
                                                                    <td class="td-title">Criteria of entitlement for minority shareholder(s) to propose AGM agenda(s) in advance for Consideration of the Board of Directors</td>
                                                                    <td class="td-file"><a href="#">agm-agenda-2017-director.pdf</a></td>
                                                                    <td class="td-actions text-center">
                                                                        <button type="button" id="btn-edit"><i class="icon-btn-edit"></i></button>
                                                                        <button type="button" class="btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></button>
                                                                    </td>
                                                                    <td colspan="4" class="td-edit-file">
                                                                        <div class="bc-highlight bg-highlight">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label>Title</label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group attach-file">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 col-xs-12">
                                                                                        <label>Attach File</label>
                                                                                        <div class="bc-file-upload">
                                                                                            <input type="text" class="form-control">
                                                                                            <ul class="import-file">
                                                                                                <li><a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a></li>
                                                                                                <li><a href="#" class="btn btn-computer"><i class="icon-btn-computer"></i></a></li>
                                                                                                <li><a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12">
                                                                                        <!-- App -->
                                                                                        <?php include 'ssi/app-extension-pdf.php'; ?>
                                                                                        <!-- /app -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <p>
                                                                                    <button type="button" id="btn-add" class="btn btn-add">Save</button>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center">2</td>
                                                                    <td class="td-title">Criteria of entitlement for minority shareholder(s) to nominate person(s) to be the Company’s Director(s) for initial consideration of the Corporate Governance and Nomination Committee</td>
                                                                    <td class="td-file"><a href="#">agm-agenda-2017-nominage.pdf</a></td>
                                                                    <td class="td-actions text-center">
                                                                        <button type="button" id="btn-edit"><i class="icon-btn-edit"></i></button>
                                                                        <button type="button" class="btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></button>
                                                                    </td>
                                                                    <td colspan="4" class="td-edit-file">
                                                                        <div class="bc-highlight bg-highlight">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label>Title</label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group attach-file">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 col-xs-12">
                                                                                        <label>Attach File</label>
                                                                                        <div class="bc-file-upload">
                                                                                            <input type="text" class="form-control">
                                                                                            <ul class="import-file">
                                                                                                <li><a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a></li>
                                                                                                <li><a href="#" class="btn btn-computer"><i class="icon-btn-computer"></i></a></li>
                                                                                                <li><a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12">
                                                                                        <!-- App -->
                                                                                        <?php include 'ssi/app-extension-pdf.php'; ?>
                                                                                        <!-- /app -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <p>
                                                                                    <button type="button" id="btn-add" class="btn btn-add">Save</button>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="show-all-reorder" id="inside-sortable-table">
                                                    <div class="table-responsive">
                                                        <table class="table tasks-list">
                                                            <thead>
                                                                <tr>
                                                                    <th class="td-order text-center">Order</th>
                                                                    <th class="td-title">Title</th>
                                                                    <th class="td-file">Attach File</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
                                                                    <td class="td-title">Criteria of entitlement for minority shareholder(s) to propose AGM agenda(s) in advance for Consideration of the Board of Directors</td>
                                                                    <td class="td-file">agm-agenda-2017-director.pdf</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
                                                                    <td class="td-title">Criteria of entitlement for minority shareholder(s) to nominate person(s) to be the Company’s Director(s) for initial consideration of the Corporate Governance and Nomination Committee</td>
                                                                    <td class="td-file">agm-agenda-2017-nominage.pdf</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bc-highlight bg-highlight">
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Title</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group attach-file">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                            <label>Attach File</label>
                                                            <div class="bc-file-upload">
                                                                <input type="text" class="form-control">
                                                                <ul class="import-file">
                                                                    <li><a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a></li>
                                                                    <li><a href="#" class="btn btn-computer"><i class="icon-btn-computer"></i></a></li>
                                                                    <li><a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <!-- App -->
                                                            <?php include 'ssi/app-extension-pdf.php'; ?>
                                                            <!-- /app -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <p>
                                                        <button type="button" class="btn btn-add">Add</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="#"><i class="icon-btn-addnew position-left"></i>Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-group">
                                <div class="heading-topic edit-heading-topic">
                                    <h4 class="text-heading">Invitation</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="list-reorder-inside">
                                                <div class="button-reorder button-right top-topic">
                                                    <div class="reorder">
                                                        <button type="button" class="btn btn-reorder"><i class="icon-btn-reorder position-left"></i><span>Re Order</span></button>
                                                        <a href="01shareholder_meeting_add.php"><button type="button" class="btn btn-cancel">Cancel</button></a>
                                                        <button type="button" class="btn btn-save">Save</button>
                                                    </div>
                                                    <div class="cancel-save">
                                                        <a href="01shareholder_meeting_add.php"><button type="button" class="btn btn-cancel">Cancel</button></a>
                                                        <button type="button" class="btn btn-save">Save</button>
                                                    </div>
                                                </div>
                                                <label>&nbsp;</label>
                                                <hr class="no-margin">
                                                <div class="show-all-list">
                                                    <div class="table-responsive">
                                                        <table class="table tasks-list">
                                                            <thead>
                                                                <tr>
                                                                    <th class="td-order text-center">Order</th>
                                                                    <th class="td-enclosure">Enclosure</th>
                                                                    <th class="td-title">Title</th>
                                                                    <th class="td-file">Attach File</th>
                                                                    <th class="td-actions text-center">&nbsp;</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="td-order text-center">1</td>
                                                                    <td class="td-enclosure">Enclosure 1</td>
                                                                    <td class="td-title">Minutes of Extraordinary General Meeting of Shareholders No.1/2015</td>
                                                                    <td class="td-file"><a href="#">enc1-minutes-egm-12015.pdf</a></td>
                                                                    <td class="td-actions text-center">
                                                                        <button type="button" id="btn-edit"><i class="icon-btn-edit"></i></button>
                                                                        <button type="button" class="btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></button>
                                                                    </td>
                                                                    <td colspan="5" class="td-edit-file">
                                                                        <div class="bc-highlight bg-highlight">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label>Enclosure</label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label>Title</label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group attach-file">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 col-xs-12">
                                                                                        <label>Attach File</label>
                                                                                        <div class="bc-file-upload">
                                                                                            <input type="text" class="form-control">
                                                                                            <ul class="import-file">
                                                                                                <li><a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a></li>
                                                                                                <li><a href="#" class="btn btn-computer"><i class="icon-btn-computer"></i></a></li>
                                                                                                <li><a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12">
                                                                                        <!-- App -->
                                                                                        <?php include 'ssi/app-extension-pdf.php'; ?>
                                                                                        <!-- /app -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <p>
                                                                                    <button type="button" id="btn-add" class="btn btn-add">Save</button>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center">2</td>
                                                                    <td class="td-enclosure">Enclosure 2</td>
                                                                    <td class="td-title">Annual Report 2015</td>
                                                                    <td class="td-file"><a href="#">enc2-annual-report.pdf</a></td>
                                                                    <td class="td-actions text-center">
                                                                        <button type="button" id="btn-edit"><i class="icon-btn-edit"></i></button>
                                                                        <button type="button" class="btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></button>
                                                                    </td>
                                                                    <td colspan="5" class="td-edit-file">
                                                                        <div class="bc-highlight bg-highlight">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label>Enclosure</label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label>Title</label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group attach-file">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 col-xs-12">
                                                                                        <label>Attach File</label>
                                                                                        <div class="bc-file-upload">
                                                                                            <input type="text" class="form-control">
                                                                                            <ul class="import-file">
                                                                                                <li><a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a></li>
                                                                                                <li><a href="#" class="btn btn-computer"><i class="icon-btn-computer"></i></a></li>
                                                                                                <li><a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12">
                                                                                        <!-- App -->
                                                                                        <?php include 'ssi/app-extension-pdf.php'; ?>
                                                                                        <!-- /app -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <p>
                                                                                    <button type="button" id="btn-add" class="btn btn-add">Save</button>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center">3</td>
                                                                    <td class="td-enclosure">&nbsp;</td>
                                                                    <td class="td-title">Proxy A.</td>
                                                                    <td class="td-file"><a href="#">proxy-a.pdf</a></td>
                                                                    <td class="td-actions text-center">
                                                                        <button type="button" id="btn-edit"><i class="icon-btn-edit"></i></button>
                                                                        <button type="button" class="btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></button>
                                                                    </td>
                                                                    <td colspan="5" class="td-edit-file">
                                                                        <div class="bc-highlight bg-highlight">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label>Enclosure</label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label>Title</label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group attach-file">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 col-xs-12">
                                                                                        <label>Attach File</label>
                                                                                        <div class="bc-file-upload">
                                                                                            <input type="text" class="form-control">
                                                                                            <ul class="import-file">
                                                                                                <li><a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a></li>
                                                                                                <li><a href="#" class="btn btn-computer"><i class="icon-btn-computer"></i></a></li>
                                                                                                <li><a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12">
                                                                                        <!-- App -->
                                                                                        <?php include 'ssi/app-extension-pdf.php'; ?>
                                                                                        <!-- /app -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <p>
                                                                                    <button type="button" id="btn-add" class="btn btn-add">Save</button>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="show-all-reorder" id="inside-sortable-table">
                                                    <div class="table-responsive">
                                                        <table class="table tasks-list">
                                                            <thead>
                                                                <tr>
                                                                    <th class="td-order text-center">Order</th>
                                                                    <th class="td-enclosure">Enclosure</th>
                                                                    <th class="td-title">Title</th>
                                                                    <th class="td-file">Attach File</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
                                                                    <td class="td-enclosure">Enclosure 1</td>
                                                                    <td class="td-title">Minutes of Extraordinary General Meeting of Shareholders No.1/2015</td>
                                                                    <td class="td-file">enc1-minutes-egm-12015.pdf</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
                                                                    <td class="td-enclosure">Enclosure 2</td>
                                                                    <td class="td-title">Annual Report 2015</td>
                                                                    <td class="td-file">enc2-annual-report.pdf</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
                                                                    <td class="td-enclosure">&nbsp;</td>
                                                                    <td class="td-title">Proxy A.</td>
                                                                    <td class="td-file">proxy-a.pdf</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bc-highlight bg-highlight">
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Enclosure</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Title</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group attach-file">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                            <label>Attach File</label>
                                                            <div class="bc-file-upload">
                                                                <input type="text" class="form-control">
                                                                <ul class="import-file">
                                                                    <li><a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a></li>
                                                                    <li><a href="#" class="btn btn-computer"><i class="icon-btn-computer"></i></a></li>
                                                                    <li><a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <!-- App -->
                                                            <?php include 'ssi/app-extension-pdf.php'; ?>
                                                            <!-- /app -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <p>
                                                        <button type="button" class="btn btn-add">Add</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="#"><i class="icon-btn-addnew position-left"></i>Add</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="content-group">
                                <div class="heading-topic edit-heading-topic">
                                    <h4 class="text-heading">Minutes</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-cancel">Cancel</button>
                                            <button type="button" class="btn btn-topic-save">Save</button>
                                        </div>
                                        <div class="form-group attach-file">
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <label>Attach File</label>
                                                    <div class="bc-file-upload">
                                                        <input type="text" class="form-control">
                                                        <ul class="import-file">
                                                            <li><a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a></li>
                                                            <li><a href="#" class="btn btn-computer"><i class="icon-btn-computer"></i></a></li>
                                                            <li><a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12">
                                                    <!-- App -->
                                                    <?php include 'ssi/app-extension-pdf.php'; ?>
                                                    <!-- /app -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-group">
                                <div class="heading-topic edit-heading-topic">
                                    <h4 class="text-heading">Other</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <div class="list-reorder-inside">
                                                <div class="button-reorder button-right top-topic">
                                                    <div class="reorder">
                                                        <button type="button" class="btn btn-reorder"><i class="icon-btn-reorder position-left"></i><span>Re Order</span></button>
                                                        <a href="01shareholder_meeting_add.php"><button type="button" class="btn btn-cancel">Cancel</button></a>
                                                        <button type="button" class="btn btn-save">Save</button>
                                                    </div>
                                                    <div class="cancel-save">
                                                        <a href="01shareholder_meeting_add.php"><button type="button" class="btn btn-cancel">Cancel</button></a>
                                                        <button type="button" class="btn btn-save">Save</button>
                                                    </div>
                                                </div>
                                                <label>&nbsp;</label>
                                                <hr class="no-margin">
                                                <div class="show-all-list">
                                                    <div class="table-responsive">
                                                        <table class="table tasks-list">
                                                            <thead>
                                                                <tr>
                                                                    <th class="td-order text-center">Order</th>
                                                                    <th class="td-title">Title</th>
                                                                    <th class="td-file">Attach File</th>
                                                                    <th class="td-actions text-center">&nbsp;</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="td-order text-center">1</td>
                                                                    <td class="td-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                                                    <td class="td-file"><a href="#">agm-agenda-2017-lorem.pdf</a></td>
                                                                    <td class="td-actions text-center">
                                                                        <button type="button" id="btn-edit"><i class="icon-btn-edit"></i></button>
                                                                        <button type="button" class="btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></button>
                                                                    </td>
                                                                    <td colspan="4" class="td-edit-file">
                                                                        <div class="bc-highlight bg-highlight">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label>Title</label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group attach-file">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 col-xs-12">
                                                                                        <label>Attach File</label>
                                                                                        <div class="bc-file-upload">
                                                                                            <input type="text" class="form-control">
                                                                                            <ul class="import-file">
                                                                                                <li><a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a></li>
                                                                                                <li><a href="#" class="btn btn-computer"><i class="icon-btn-computer"></i></a></li>
                                                                                                <li><a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12">
                                                                                        <!-- App -->
                                                                                        <?php include 'ssi/app-extension-pdf.php'; ?>
                                                                                        <!-- /app -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <p>
                                                                                    <button type="button" id="btn-add" class="btn btn-add">Save</button>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center">2</td>
                                                                    <td class="td-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                                                    <td class="td-file"><a href="#">agm-agenda-2017-lorem.pdf</a></td>
                                                                    <td class="td-actions text-center">
                                                                        <button type="button" id="btn-edit"><i class="icon-btn-edit"></i></button>
                                                                        <button type="button" class="btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></button>
                                                                    </td>
                                                                    <td colspan="4" class="td-edit-file">
                                                                        <div class="bc-highlight bg-highlight">
                                                                            <div class="row">
                                                                                <div class="col-sm-6 col-xs-12">
                                                                                    <div class="form-group">
                                                                                        <label>Title</label>
                                                                                        <input type="text" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group attach-file">
                                                                                <div class="row">
                                                                                    <div class="col-sm-6 col-xs-12">
                                                                                        <label>Attach File</label>
                                                                                        <div class="bc-file-upload">
                                                                                            <input type="text" class="form-control">
                                                                                            <ul class="import-file">
                                                                                                <li><a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a></li>
                                                                                                <li><a href="#" class="btn btn-computer"><i class="icon-btn-computer"></i></a></li>
                                                                                                <li><a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12">
                                                                                        <!-- App -->
                                                                                        <?php include 'ssi/app-extension-pdf.php'; ?>
                                                                                        <!-- /app -->
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <p>
                                                                                    <button type="button" id="btn-add" class="btn btn-add">Save</button>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="show-all-reorder" id="inside-sortable-table">
                                                    <div class="table-responsive">
                                                        <table class="table tasks-list">
                                                            <thead>
                                                                <tr>
                                                                    <th class="td-order text-center">Order</th>
                                                                    <th class="td-title">Title</th>
                                                                    <th class="td-file">Attach File</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
                                                                    <td class="td-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                                                    <td class="td-file">agm-agenda-2017-lorem.pdf</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="td-order text-center"><i class="icon-list-reorder"></i></td>
                                                                    <td class="td-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                                                    <td class="td-file">agm-agenda-2017-lorem.pdf</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bc-highlight bg-highlight">
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Title</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group attach-file">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                            <label>Attach File</label>
                                                            <div class="bc-file-upload">
                                                                <input type="text" class="form-control">
                                                                <ul class="import-file">
                                                                    <li><a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a></li>
                                                                    <li><a href="#" class="btn btn-computer"><i class="icon-btn-computer"></i></a></li>
                                                                    <li><a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <!-- App -->
                                                            <?php include 'ssi/app-extension-pdf.php'; ?>
                                                            <!-- /app -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                    <p>
                                                        <button type="button" class="btn btn-add">Add</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="#"><i class="icon-btn-addnew position-left"></i>Add</a>
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
