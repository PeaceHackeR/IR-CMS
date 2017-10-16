<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Intro Page</title>

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
            <div class="content-wrapper wrapper-add-page template-layout">

                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title col-xs-10">
                            <h3>Intro Page</h3>
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content type-layout">
                    <div class="row">
                        <div class="col-lg-9 col-xs-12">

                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Template Layout</h4>
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
                                            <div class="col-sm-4 col-xs-6">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <div class="img-layout">
                                                        <p><img src="assets-cms/images/pages/intro_page/img-only.jpg" class="img-responsive"></p>
                                                    </div>
                                                    <div class="check-layout">
                                                        <div class="radio-inline">
                                                            <label>
                                                                <input type="radio" name="select-layout" class="control-select-layout" rel="img-only" checked="checked">Image Only
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-xs-6">
                                                <div class="form-group">
                                                    <label>&nbsp;</label>
                                                    <div class="img-layout">
                                                        <p><img src="assets-cms/images/pages/intro_page/img-text.jpg" class="img-responsive"></p>
                                                    </div>
                                                    <div class="check-layout">
                                                        <div class="radio-inline">
                                                            <label>
                                                                <input type="radio" name="select-layout" class="control-select-layout" rel="img-text">Image and Text
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Image</h4>
                                    <!-- App -->
                                    <?php include 'ssi/app-thai-img.php'; ?>
                                    <!-- /App -->
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-cancel">Cancel</button>
                                            <button type="button" class="btn btn-topic-save">Save</button>
                                        </div>
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <div class="bc-img-browse">
                                                <div class="img"><img src="assets-cms/images/upload/news_700x300.jpg" class="img-responsive"></div>
                                                <div class="remove-img">
                                                    <a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a>
                                                </div>
                                                <div class="btn-group import-img">
                                                    <a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a>
                                                    <a href="#" class="btn btn-computer" data-toggle="modal" data-target="#action-image43"><i class="icon-btn-computer"></i></a>
                                                </div>
                                            </div>
                                            <?php include 'ssi/app-extension-image.php'; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Background</h4>
                                    <!-- App -->
                                    <?php include 'ssi/app-thai-background.php'; ?>
                                    <!-- /App -->
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-cancel">Cancel</button>
                                            <button type="button" class="btn btn-topic-save">Save</button>
                                        </div>
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <div class="bc-img-browse">
                                                <div class="img"><img src="assets-cms/images/upload/news_700x300.jpg" class="img-responsive"></div>
                                                <div class="remove-img">
                                                    <a class="btn btn-remove" data-toggle="modal" data-target="#action-Delete"><i class="icon-btn-remove"></i></a>
                                                </div>
                                                <div class="btn-group import-img">
                                                    <a href="#" class="btn btn-library"><i class="icon-btn-library"></i></a>
                                                    <a href="#" class="btn btn-computer" data-toggle="modal" data-target="#action-image43"><i class="icon-btn-computer"></i></a>
                                                </div>
                                            </div>
                                            <!-- App -->
                                            <?php include 'ssi/app-extension-image.php'; ?>
                                            <!-- /app -->
                                        </div>
                                        <div class="form-group">
                                            <label>Color</label>
                                            <div class="bg-picker">
                                                <input type="text" class="form-control colorpicker-show-input" data-preferred-format="hex" value="#000000">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Img Text -->
                            <div class="info-layout img-text">
                                <div class="content-group">
                                    <div class="heading-topic">
                                        <h4 class="text-heading">Information</h4>
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
                                                        <label>Headline</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Subheadline</label>
                                                        <textarea rows="5" cols="5" class="form-control" placeholder=""></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Text Alignment</label>
                                                <div class="clear"></div>
                                                <div class="radio-inline">
                                                    <label>
                                                    <input type="radio" name="alignment" class="control-alignment" checked="checked">Left
                                                </label>
                                                </div>
                                                <div class="radio-inline">
                                                    <label>
                                                    <input type="radio" name="alignment" class="control-alignment">Center
                                                </label>
                                                </div>
                                                <div class="radio-inline">
                                                    <label>
                                                    <input type="radio" name="alignment" class="control-alignment">Right
                                                </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Text Button (Thai)</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>URL Link (Thai)</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Text Button (English)</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>URL Link (English)</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="radio-inline">
                                                    <label>
                                                    <input type="radio" name="target" class="control-target">Open New Window
                                                </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Img Only -->
                            <div class="info-layout img-only">
                                <div class="content-group">
                                    <div class="heading-topic">
                                        <h4 class="text-heading">Link</h4>
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
                                                        <label>Text Button (Thai)</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>URL Link (Thai)</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Text Button (English)</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>URL Link (English)</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="radio-inline">
                                                    <label>
                                                    <input type="radio" name="target" class="control-target">Open New Window
                                                </label>
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
