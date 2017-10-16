<!-- Main navigation -->
<div class="sidebar-category sidebar-category-visible">
    <div class="category-content no-padding">
        <ul class="navigation navigation-main navigation-accordion">

            <!-- Main -->
            <li><a href="00dashboard.php"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
            <li>
                <a href="#"><i class="icon-grid"></i> <span>Site Content</span></a>
                <ul>
                    <li><a href="01intro_page_list.php">Intro Page</a></li>
                    <li><a href="#">Homepage</a>
                        <ul>
                            <li><a href="01homepage_banner_list.php">Highlight Banner</a></li>
                            <li><a href="01homepage_news_list.php">News Update</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Organization Structure</a>
                        <ul>
                            <li><a href="01structure_department_list.php">Department</a></li>
                            <li><a href="01structure_member_list.php">Members</a></li>
                        </ul>
                    </li>
                    <li><a href="01financial_highlight_list.php">Financial Highlight</a></li>
                    <li class="reports"><a href="#">Reports</a>
                        <ul>
                            <li class="navigation-header"><span>Financial</span></li>
                            <li><a href="01report_fs_list.php">Financial Statement</a></li>
                            <li><a href="01report_mdna_list.php">MD &amp; A</a></li>
                            <li><a href="01report_presentations_list.php">Company Presentations</a></li>
                            <li><a href="01report_factsheet_list.php">Company Factsheet</a></li>
                            <li><a href="01report_prospectus_list.php">Prospectus</a></li>
                            <li><a href="01report_ar_list.php">Annual Report</a></li>
                            <li><a href="01report_form561_list.php">Form 56-1</a></li>
                            <li class="navigation-header"><span>Corporate Governance</span></li>
                            <li><a href="01report_sustain_list.php">Sustainability Report</a></li>
                            <li><a href="01report_cg_list.php">CG Document</a></li>
                            <li class="navigation-header"><span>Analyst</span></li>
                            <li><a href="01report_analyst_list.php">Analyst Report</a></li>
                        </ul>
                    </li>
                    <li><a href="#">News</a>
                        <ul>
                            <li><a href="01news_corporate_list.php">Corporate News</a></li>
                            <li><a href="01news_prnews_list.php">Press Release</a></li>
                            <li><a href="01news_set_list.php">SET Announcement</a></li>
                            <li><a href="01news_award_list.php">CG Award</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Events</a>
                        <ul>
                            <li><a href="01event_meeting_list.php">AGM &amp; EMG</a></li>
                            <li><a href="01event_results_list.php">Results</a></li>
                            <li><a href="01event_roadshow_list.php">Roadshow</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Shareholder</a>
                        <ul>
                            <li><a href="01shareholder_freefloat_list.php">Free Float</a></li>
                            <li><a href="01shareholder_major_list.php">Major Shareholder</a></li>
                            <li><a href="01shareholder_ratio_list.php">Shareholder Ratio</a></li>
                            <li><a href="01shareholder_meeting_list.php">Shareholder Meeting</a></li>
                            <li><a href="01shareholder_dividend_list.php">Dividend Payment</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="02enquiry_contact_list.php"><i class="icon-envelop3"></i><span>Enquiry</span></a>
            </li>
            <li>
                <a href="03media_library.php"><i class="icon-image2"></i><span>Media Library</span></a>
            </li>
            <li><a href="#"><i class="icon-address-book"></i><span>Email Alert</span></a>
                <ul>
                    <li><a href="05email_subscriber_list.php">Subscriber</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="icon-cog3"></i><span>Settings</span></a>
                <ul>
                    <li><a href="04setting_users_permissions.php">User &amp; Permission</a></li>
                    <li><a href="04setting_auto_feed.php">Auto Feed</a></li>
                    <li><a href="04setting_enquiry_list.php">Enquiry</a></li>
                    <li><a href="#">Logs</a>
                        <ul>
                            <li><a href="04setting_log_activities.php">Activities</a></li>
                            <li><a href="04setting_log_user.php">User</a></li>
                        </ul>
                    </li>
                    <li><a href="04setting_email_alert.php">Email Alert</a></li>
                    <li><a href="04setting_unique_list.php">Unique Link</a></li>
                    <li><a href="04setting_usage_total.php">Usage</a></li>
                </ul>
            </li>
            <!-- /main -->

        </ul>
    </div>
</div>
<!-- /main navigation -->

<script>
    function getKeyX(str){
        var _str = String(str).split("_");
        return _str[0]+"_"+_str[1];
    }
    var _urlName = /[^\/]+\.php/ig.exec(location.href),
        _key = getKeyX(_urlName);
    
    document.querySelectorAll(".navigation-main a").forEach(function(el,i){
       if(getKeyX(el.getAttribute("href"))==_key){
           el.parentElement.className += "active";
           return false;
       }
    });
</script>
