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
    
    <style>
        .fx-mode .fx-mode-edit,
        .fx-mode.editBox .fx-mode-view {
            display: none;
        }
        
        .fx-mode.editBox .fx-mode-edit {
            display: block;
        }

    </style>
<!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.3/backbone-min.js"></script>
-->
    <script src="assets-cms/js/core/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.12.0/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4/lodash.min.js"></script>
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
            <div class="content-wrapper wrapper-detail-page">

                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title col-xs-10">
                            <h3>Members</h3>
                        </div>
                        <div class="heading-button">
                            <a href="#"><button type="button" class="btn btn-preview btn-rounded-xs"><i class="icon-btn-preview position-left"></i><span class="hidden-xs">Preview</span></button></a>
                        </div>
                    </div>
                </div>
                <!-- /page header -->

                <!-- Content area -->
                <div id="appModule" class="content">
                    <div class="row">
                        <div class="col-lg-9 col-xs-12">

                            <div class="content-group fx-mode">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Information</h4>
                                </div>
                                
                                <div id="tp_information" class="fx-mode-view">
                                    <div class="panel panel-flat">
                                        <div class="panel-body">
                                            <div class="button-right top-topic">
                                                <button type="button" class="btn btn-view-edit">Edit</button>
                                            </div>
                                            <div class="fx-mode-viewRender">
                                                <div class="form-group">
                                                    <label>Full name</label>
                                                    <p>{{page.fullname}}</p>
                                                </div>
                                                <div v-for="item in page.departments" class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Department</label>
                                                            <p>{{item.name}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Position</label>
                                                            <p>{{item.position}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="last-modified"><strong>Last Modified</strong> {{page.datetime}} - by <a v-bind:href="'#'+page.authorId">{{page.author}}</a></p>
                                </div>
                                <div class="fx-mode-edit">
                                    <div class="panel panel-flat">
                                        <form class="px-formEdit" action="outputdata.php" method="post" target="_blank">
                                            <div class="panel-body">
                                                <div class="button-right top-topic">
                                                    <button type="button" class="btn btn-cancel">Cancel</button>
                                                    <button type="submit" class="btn btn-topic-save">Save</button>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <label>Full Name</label>
                                                            <input type="text" class="form-control" name="fullname" v-model="db.fullname" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-boxDxInput">
                                                    <div class="row px-boxDxInput-container">
                                                        <div class="col-md-12 px-boxDxInput-list" v-for="item in db.departments">
                                                            <div class="row">
                                                                <div class="col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label>Department</label>
                                                                        <select class="select raw-select" name="department_list[]" v-model="item.name" required>
                                                                            <option value="" disabled>-- Select --</option>
                                                                            <option value="Board of Directors">Board of Directors</option>
                                                                            <option value="Independent Director">Independent Director</option>
                                                                            <option value="Audit Committee">Audit Committee</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6 col-xs-12">
                                                                    <div class="form-group">
                                                                        <label>Position {{item.name}}</label>
                                                                        <span class="pull-right"><a type="button" class="btn-remove" data-toggle="modal" data-target="#action-Remove"><i class="icon-btn-remove"></i></a></span>
                                                                        <input type="text" class="form-control"  name="position_list[]" v-model="item.position" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="#" class="px-boxDxInput-insert" @click="insertDepartment"><i class="icon-btn-addnew position-left"></i>Insert New Department</a>
                                                    </div>
                                                </div>

                                            </div>
                                            </form>
                                    </div>
                                </div>
                            </div>

                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Image</h4>
                                    <!-- App -->
                                    <?php include 'ssi/app-thai-img-view.php'; ?>
                                    <!-- /App -->
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-view-edit">Edit</button>
                                        </div>
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <p class="text-center"><img src="assets-cms/images/upload/img_300x300.jpg" class="img-responsive"></p>
                                        </div>
                                    </div>
                                </div>
                                <p class="last-modified"><strong>Last Modified</strong> Aug 9, 2017 at 04.38 pm - by <a href="#">Admin</a></p>
                            </div>

                            <div class="content-group">
                                <div class="heading-topic">
                                    <h4 class="text-heading">Profile</h4>
                                </div>
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <div class="button-right top-topic">
                                            <button type="button" class="btn btn-view-edit">Edit</button>
                                        </div>
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <p>Tommy Taechaubol holds a Bachelor’s Degree in Commerce (with merit) and a Bachelor’s Degree in Law from the University of New South Wales, Australia, and a MBA in Finance (with merit) from The Sasin Graduate Institute of Business Administration.</p>
                                            <p>His career began at MFC Asset Management PCL (MFC) in the property department in 2010, moving on to become the head of the Business Development Division in 2012 overseeing the property, infrastructure and private equity departments. During his time at MFC, he was responsible for the establishment of 6 property funds raising a total of THB 11B of Investment capital. He was also was also responsible for overseeing a total of 26 funds with THB 32B under management and developed expertise in property and energy sectors. He was a member of the management committee where he focused on competitive strategy.</p>
                                            <p>Tommy currently serves as CEO of Country Group Holdings PCL since the company’s restructure in 2015. He also sits as Director on the board of its subsidiaries including Country Group Securities PCL (2012) and Padang Industries PCL (2015). He maintains his active role at MFC as an advisor to the Executive Board (2014).</p>
                                            <ul>
                                                <li>2014 - Present Director of The Stock Exchange of Thailand</li>
                                                <li>2014 - Present luminaries of Market for Alternative Investment – MAI</li>
                                                <li>2014 - Present luminaries of Market for Alternative Investment – MAI</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p class="last-modified"><strong>Last Modified</strong> Aug 9, 2017 at 04.38 pm - by <a href="#">Admin</a></p>
                            </div>

                            <!-- App -->
                            <?php include 'ssi/app-setting-detail.php'; ?>
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
<script>
    
    // Model //
    var page_DATA = {
            page:{
                datetime: '',
                fullname: '',
                departments: [],
                author: '',
                authorId: ''
            },
            db:{
                fullname: 'Mr. Tommy Taechaubol',
                departments: [],
            }
        };
    
    // Controller //
    var app_MODULE = new Vue({
        el: '#appModule',
        data: page_DATA,
        updated:function(){
            this.$nextTick(function () {
                $(this.$el).find('.select').select2({
                    minimumResultsForSearch: "-1"
                }).on('change',function(e){
                    page_DATA
                })
            });
        },
        watch:{
            db: {
                handler(val){
                    console.log('chg : '+val)
                },
                deep:true
            }
        },
        created: function() {
            var _loc = this;
            axios.get("dat/members-information.json")
                .then(function(resp) {
                    console.log('loaded')
                    _loc.page.fullname = resp.data.results.data.fullname;
                    _loc.page.departments = resp.data.results.data.departments;
                    _loc.page.datetime = _loc.showdate(resp.data.results.commits.datetime);
                    _loc.page.author = resp.data.results.commits.author;
                    _loc.page.authorId = resp.data.results.commits.author_id;
                    //
                    _loc.db.fullname = JSON.parse(JSON.stringify(resp.data.results.data.fullname));
                    _loc.db.departments =  JSON.parse(JSON.stringify(resp.data.results.data.departments));
                })
        },
        methods: {
            showdate: function(t) {
                return moment(t, "YYYY-MM-DD HH:mm:ss").format("MMM D, YYYY [at] HH.MM a");
            },
            insertDepartment: function(evt){
                console.log(this.db.fullname);
                this.db.departments.push({name:"",position:""});
            }
        }
    });

</script>
<script>
    $(function() {
        $(".fx-mode").each(function() {
            var _loc = $(this);
            //var _editTopic = $(this).parent().find(".fx-topic");
            _loc.find(".btn-view-edit").click(function(e) {
                e.preventDefault();
                _loc.addClass("editBox");
                //_editTopic.addClass("edit-heading-topic").find(".text-heading").attr("contenteditable","true");
            });
            _loc.find(".btn-cancel").click(function(e) {
                e.preventDefault();
                _loc.removeClass("editBox");
                //_editTopic.removeClass("edit-heading-topic").find(".text-heading").attr("contenteditable","false");
            });
            _loc.find(".btn-topic-save").closest(".px-formEdit").submit(function(e) {
                _loc.removeClass("editBox");
            })
        })
    })
</script>
<script>
    //                                                    $(function(){
    //                                                        $(".px-boxDxInput").each(function(){
    //                                                            // decomplied plugin
    //                                                            $(this).find(".select").select2('destroy');
    //
    //                                                            //
    //                                                            var _loc = $(this),
    //                                                                _container = _loc.find(".px-boxDxInput-container"),
    //                                                                _nx = _container.children().length,
    //                                                                _template = _container.children().eq(0).wrap('<div class="temp-box"></div>').parent().html();
    //
    //                                                            if(_nx>1){
    //                                                                _nx--;
    //                                                                _container.find(".temp-box").remove();
    //                                                            }else{
    //                                                                _container.find(".temp-box").children().unwrap();
    //                                                            }
    //
    //                                                            _container.children().eq(0).find(".btn-remove").parent().remove();
    //                                                            _loc.find(".select").select2({
    //                                                                minimumResultsForSearch: "-1"
    //                                                            });
    //
    //                                                            $(".px-boxDxInput-insert").click(function(e){
    //                                                                e.preventDefault();
    //
    //                                                                var _obj = $(_template)
    //                                                                _container.append(_template);
    //                                                                _container.find(".select").select2({
    //                                                                    minimumResultsForSearch: "-1"
    //                                                                });
    //                                                            });
    //                                                        });
    //                                                        //
    //                                                        var _modalConfirmRemove = $("#action-Remove").find(".btn-modal-ok");
    //                                                        _modalConfirmRemove.click(function () {
    //                                                            this.confirmRemove();
    //                                                        });
    //                                                        $(".px-boxDxInput-container").on("click", ".btn-remove", function (e) {
    //                                                            var _ref = $(this).closest(".px-boxDxInput-list");
    //                                                            _modalConfirmRemove[0].confirmRemove = function (e) {
    //                                                                _ref.remove();
    //                                                            }
    //                                                        });
    //                                                    });
</script>
</body>

</html>
