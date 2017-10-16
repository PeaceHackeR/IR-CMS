<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Members</title>

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
                            <h3>Members</h3>
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div class="content">
                    <form id="dataForm" class="px-formEdit" action="outputdata.php" method="post" target="_blank">
                    <input type="hidden" value="th" name="lang">
                    <div class="row">
                        <div class="col-lg-9 col-xs-12">

                            <div class="content-group add-department">
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
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control" name="fullname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-boxDxInput">
                                            <div class="row px-boxDxInput-container">
                                                <div class="col-md-12 px-boxDxInput-list">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label>Department</label>
                                                                <select class="select raw-select" name="department_list[]" required>
                                                                    <option value="" selected disabled>-- Select --</option>
                                                                    <option value="Board of Directors">Board of Directors</option>
                                                                    <option value="Independent Director">Independent Director</option>
                                                                    <option value="Audit Committees">Audit Committee</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <label>Position </label>
                                                                <span class="pull-right"><a type="button" class="btn-remove" data-toggle="modal" data-target="#action-Remove"><i class="icon-btn-remove"></i></a></span>
                                                                <input type="text" class="form-control"  name="position_list[]" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <a href="#" class="px-boxDxInput-insert"><i class="icon-btn-addnew position-left"></i>Insert New Department</a>
                                            </div>
                                        </div>
                                        <script>
                                            $(function(){
                                                $(".px-boxDxInput").each(function(){
                                                    // decomplied plugin
                                                    $(this).find(".select").select2('destroy');
                                                    
                                                    //
                                                    var _loc = $(this),
                                                        _container = _loc.find(".px-boxDxInput-container"),
                                                        _nx = _container.children().length,
                                                        _template = _container.children().eq(0).wrap('<div class="temp-box"></div>').parent().html();
                                                    
                                                    if(_nx>1){
                                                        _nx--;
                                                        _container.find(".temp-box").remove();
                                                    }else{
                                                        _container.find(".temp-box").children().unwrap();
                                                    }
                                                    
                                                    _container.children().eq(0).find(".btn-remove").parent().remove();
                                                    _loc.find(".select").select2({
                                                        minimumResultsForSearch: "-1"
                                                    });

                                                    $(".px-boxDxInput-insert").click(function(e){
                                                        e.preventDefault();
                                                        
                                                        var _obj = $(_template)
                                                        _container.append(_template);
                                                        _container.find(".select").select2({
                                                            minimumResultsForSearch: "-1"
                                                        });
                                                    });
                                                });
                                                //
                                                var _modalConfirmRemove = $("#action-Remove").find(".btn-modal-ok");
                                                _modalConfirmRemove.click(function () {
                                                    this.confirmRemove();
                                                });
                                                $(".px-boxDxInput-container").on("click", ".btn-remove", function (e) {
                                                    var _ref = $(this).closest(".px-boxDxInput-list");
                                                    _modalConfirmRemove[0].confirmRemove = function (e) {
                                                        _ref.remove();
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Image</h4>
                                    <div class="pull-right">
                                        <div class="checkbox">
                                            <label>
                                        		<input type="checkbox" class="control-same-img" name="image_same_th" value="yes">Use the same image from Thai
                                        	</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <div class="bc-img-browse">
                                                <div class="img"><img src="assets-cms/images/upload/board_300x300.jpg" class="img-responsive"></div>
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
                                    </div>
                                </div>
                            </div>

                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Profile</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <textarea class="form-control summernote-no-img" name="profile_html"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- App -->
                            <?php include 'ssi/app-setting-add.php'; ?>
                            <!-- /app -->

                        </div>
                    </div>

                    </form>



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
