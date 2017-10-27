<div class="content-group publish-set fx-mode">
    <div class="heading-topic">
        <h4 class="text-heading">Publish Settings</h4>
    </div>
    <div class="fx-mode-view">
        <div class="panel-flat">
            <div class="button-right top-topic">
                <button type="button" class="btn btn-view-edit">Edit</button>
            </div>
            <div class="bc-detail-status">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <p><strong>Published</strong><br> <span class="label label-rounded label-yes">{{ page.status }}</span></p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <p><strong>Public Schedule</strong><br> {{ showFormatDate(page.publish_datetime) }} - by <a v-bind:href="page.publish_by_id">{{ page.publish_by }}</a></p>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <p><strong>Start Date</strong><br> {{ showFormatDate(page.start_datetime) }}</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <p><strong>End Date</strong><br> {{ showFormatDate(page.end_datetime) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="last-modified"><strong>Last Modified</strong> {{ showFormatDate(page.datetime[0]) }} - by <a v-bind:href="'#'+page.authorId[0]">{{ page.author[0] }}</a></p>
    </div>
    <div class="fx-mode-edit">
        <form class="px-formEdit" action="outputdata.php" method="post" target="_blank">
            <input type="hidden" name="block_key" value="0">
            <div class="panel-flat">
                <div class="button-right top-topic">
                    <button type="button" class="btn btn-cancel">Cancel</button>
                    <button type="submit" class="btn btn-topic-save">Save</button>
                </div>
                <div class="radio-status-setting">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                               <!--<p>Published</p>-->
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="status" class="control-yes" value="1" required>Yes
                                </label>
                                </div>
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="status" class="control-no" value="0">No
                                </label>
                                </div>
                                <div class="radio">
                                    <label>
                                    <input type="radio" name="status" class="control-draft" value="2">Draft
                                </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="date-time-setting">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Start Date</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-datepicker"></i></span>
                                    <input type="text" class="form-control pickadate" placeholder="Pick a Date&hellip;" name="start_date">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>Start Time</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-timepicker"></i></span>
                                            <select class="select" name="start_time_hh" placeholder="Hours&hellip;">
                                                <option value="" selected disabled>-- Hours --</option>
                                                <?php
                                                    $str = "";
                                                    for($num = 0; $num < 24; $num++){
                                                        $ns = sprintf("%02d", $num);
                                                        $str .= '<option value="'.$ns.'">'.$ns.'</option>';
                                                    }
                                                    echo $str;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="input-group time-minutes">
                                            <select class="select" name="start_time_mm" placeholder="Minutes&hellip;">
                                                <option value="" selected disabled>-- Minutes --</option>
                                                <?php
                                                    $str = "";
                                                    for($num = 0; $num <60; $num++){
                                                        $ns = sprintf("%02d", $num);
                                                        $str .= '<option value="'.$ns.'">'.$ns.'</option>';
                                                    }
                                                    echo $str;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>End Date</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="icon-datepicker"></i></span>
                                    <input type="text" class="form-control pickadate" placeholder="Pick a Date&hellip;" name="end_date">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label>End Time</label>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-timepicker"></i></span>
                                            <select class="select" name="end_time_hh" placeholder="Hours&hellip;">
                                                <option value="" selected disabled>-- Hours --</option>
                                                <?php
                                                    $str = "";
                                                    for($num = 0; $num < 24; $num++){
                                                        $ns = sprintf("%02d", $num);
                                                        $str .= '<option value="'.$ns.'">'.$ns.'</option>';
                                                    }
                                                    echo $str;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="input-group time-minutes">
                                            <select class="select" name="end_time_mm" placeholder="Minutes&hellip;">
                                                <option value="" selected disabled>-- Minutes --</option>
                                                <?php
                                                    $str = "";
                                                    for($num = 0; $num <60; $num++){
                                                        $ns = sprintf("%02d", $num);
                                                        $str .= '<option value="'.$ns.'">'.$ns.'</option>';
                                                    }
                                                    echo $str;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
