<div class="content-group publish-set">
    <div class="heading-topic">
        <h4 class="text-heading">Publish Settings</h4>
    </div>
    <div class="panel-flat">
        <div class="button-right top-topic">
            <button type="button" class="btn btn-cancel">Cancel</button>
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
        <div class="text-center">
            <p>
                <a href="#" data-toggle="modal" data-target="#action-Preview"><button type="button" class="btn btn-preview"><i class="icon-btn-preview position-left"></i>Preview</button></a>
                <button type="submit" class="btn btn-save">Save</button>
            </p>
        </div>
    </div>
</div>
