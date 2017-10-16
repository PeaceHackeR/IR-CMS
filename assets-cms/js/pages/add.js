// Add //

$(function () {

    // ====== Images Cropper ======= //

    // Basic modals
    // ------------------------------

    // Load remote content
    $('#action-image169').on('show.bs.modal', function () {

        var modalDialogWidth = $(this).find('.modal-dialog').outerWidth(true);
        var modalDialogWidth = modalDialogWidth - 40;
        console.log('modalDialogWidth = ' + modalDialogWidth);

        $(".modal-dialog").find(".image-cropper-container").width(modalDialogWidth);

        // 16:9 ratio
        $('.crop-16-9').cropper({
            aspectRatio: 16 / 9
        });

    });

    // Load remote content
    $('#action-image43').on('show.bs.modal', function () {

        var modalDialogWidth = $(this).find('.modal-dialog').outerWidth(true);
        var modalDialogWidth = modalDialogWidth - 40;
        console.log('modalDialogWidth = ' + modalDialogWidth);

        $(".modal-dialog").find(".image-cropper-container").width(modalDialogWidth);

        // 4:3 ratio
        $('.crop-4-3').cropper({
            aspectRatio: 4 / 3
        });

    });


    // Load remote content
    $('#action-imageBasic').on('show.bs.modal', function () {

        var modalDialogWidth = $(this).find('.modal-dialog').outerWidth(true);
        var modalDialogWidth = modalDialogWidth - 40;
        console.log('modalDialogWidth = ' + modalDialogWidth);

        $(".modal-dialog").find(".image-cropper-container").width(modalDialogWidth);

        // Default initialization
        $('.crop-basic').cropper();

    });

    // Load remote content
    $('#action-imageFixSize').on('show.bs.modal', function () {

        var modalDialogWidth = $(this).find('.modal-dialog').outerWidth(true);
        var modalDialogWidth = modalDialogWidth - 40;
        console.log('modalDialogWidth = ' + modalDialogWidth);

        $(".modal-dialog").find(".image-cropper-container").width(modalDialogWidth);

        // Fixed size
        $('.crop-not-resizable').cropper({
            cropBoxResizable: false,
            data: {
                x: 10,
                y: 10,
                width: 300,
                height: 300
            }
        });

    });


    // ========= Form Select ========

    $('.select').select2({
        minimumResultsForSearch: "-1"
    });


    // ====== Checkbox ====== //

    // Checkboxes/radios (Uniform)
    // ------------------------------

    // Default initialization
    $(".styled, .multiselect-container input").uniform({
        radioClass: 'choice'
    });

    // File input
    $(".file-styled").uniform({
        wrapperClass: 'bg-blue',
        fileButtonHtml: '<i class="icon-file-plus"></i>'
    });

    //
    // Contextual colors
    //

    // Primary
    $(".control-primary").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-primary-600 text-primary-800'
    });

    // Danger
    $(".control-danger").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-danger-600 text-danger-800'
    });

    // Success
    $(".control-success").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-success-600 text-success-800'
    });

    // Warning
    $(".control-warning").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-warning-600 text-warning-800'
    });

    // Info
    $(".control-info").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-info-600 text-info-800'
    });

    // Default
    $(".control-default").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-default-600 text-default-800'
    });

    // Custom color
    $(".control-custom").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-indigo-600 text-indigo-800'
    });

    // Use Year Only
    $(".control-use-year").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 color-use-year'
    });

    // Check Highlight
    $(".control-check-hl").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 color-check-hl'
    });

    // Enabled
    $(".control-enabled").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-enabled'
    });

    // Disabled
    $(".control-disabled").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-disabled'
    });

    // Enabled
    $(".control-yes").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-yes'
    });

    // Disabled
    $(".control-no").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-no'
    });

    // Draft
    $(".control-draft").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-draft'
    });

    // Sync
    $(".control-sync").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-sync'
    });

    // Not sync
    $(".control-not-sync").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-not-sync'
    });

    // Highlihgt
    $(".control-highlight").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-highlight'
    });

    // Use image thai
    $(".control-same-img").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-same-img'
    });

    // Link to Meeting
    $(".control-link-meeting").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-link-meeting'
    });

    // Layout Intro
    $(".control-select-layout").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-select-layout'
    });

    // Text alignment
    $(".control-alignment").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-alignment'
    });

    // Target
    $(".control-target").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-target'
    });

    // Event & Meeting
    $(".control-event").uniform({
        radioClass: 'choice',
        wrapperClass: 'border-600 status-event'
    });



    // ====== Text Editor ====== //

    // Basic editors
    // ------------------------------

    // Default initialization
    $('.summernote-no-img').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['style']],
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['table']],
            ['insert', ['link']],
            ['misc', ['codeview']]
        ]
    });

    $('.summernote-img').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['style']],
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['fontsize', ['fontsize']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['table']],
            ['insert', ['link', 'picture']],
            ['misc', ['codeview']]
        ]
    });


    // ========= Sortable ==========
    var _reorderInside = $(".list-reorder-inside .btn-reorder");
    _reorderInside.click(function () {
        $(this).closest(".list-reorder-inside").find(".button-reorder > .reorder").hide();
        $(this).closest(".list-reorder-inside").find(".button-reorder > .cancel-save").show();
        $(this).closest(".list-reorder-inside").find(".show-all-list").hide();
        $(this).closest(".list-reorder-inside").find(".show-all-reorder").show();
    });

    var _editOrder = $(".list-reorder-inside .show-all-list #btn-edit");
    var _addOrder = $(".list-reorder-inside .show-all-list #btn-add");
    _editOrder.click(function () {
        $(this).closest("tr").find("td").hide();
        $(this).closest("tr").find("td.td-edit-file").show();
        $(this).closest("tr").next("tr").find("td").not(".td-edit-file").css("border-width", "0px");
        _addOrder.click(function () {
            $(this).closest("tr").find("td").show();
            $(this).closest("tr").find("td.td-edit-file").hide();
            $(this).closest("tr").next("tr").find("td").not(".td-edit-file").css("border-width", "1px");
        });
    });


    $("[id*='inside-sortable-table'] table").find("tbody").sortable({
        cursor: "move",
        disabled: false
    });

    $("#sortable-table").find("tbody").sortable({
        cursor: "move",
        disabled: false
    });

    // Pick-a-date picker
    // ------------------------------

    // Basic options
    $('.pickadate').pickadate({
        weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        showMonthsShort: true,
        formatSubmit: 'yyyy-mm-dd'
    });

    // Default functionality
    $('.pickatimeHours').pickatime({
        format: 'HH',
    });

    $('.pickatimeMinutes').pickatime({
        format: "i"
    });


    // Edit Text Head Topic
    //===============================
    $(".content-group .edit-heading-topic").find(".text-heading").attr("contenteditable", "true");


    // ========== Image lightbox ============
    $('[data-popup="lightbox"]').fancybox({
        padding: 3
    });

    // ======== Color Picker ========== //
    // Display color formats
    $(".colorpicker-show-input").spectrum({
        showInput: true
    });


    // ======= Browse File  ========== //
    //
    // Define variables
    //

    // Modal template
    var modalTemplate = '<div class="modal-dialog modal-lg" role="document">\n' +
        '  <div class="modal-content">\n' +
        '    <div class="modal-header">\n' +
        '      <div class="kv-zoom-actions btn-group">{toggleheader}{fullscreen}{borderless}{close}</div>\n' +
        '      <h6 class="modal-title">{heading} <small><span class="kv-zoom-title"></span></small></h6>\n' +
        '    </div>\n' +
        '    <div class="modal-body">\n' +
        '      <div class="floating-buttons btn-group"></div>\n' +
        '      <div class="kv-zoom-body file-zoom-content"></div>\n' + '{prev} {next}\n' +
        '    </div>\n' +
        '  </div>\n' +
        '</div>\n';

    // Buttons inside zoom modal
    var previewZoomButtonClasses = {
        toggleheader: 'btn btn-default btn-icon btn-xs btn-header-toggle',
        fullscreen: 'btn btn-default btn-icon btn-xs',
        borderless: 'btn btn-default btn-icon btn-xs',
        close: 'btn btn-default btn-icon btn-xs'
    };

    // Icons inside zoom modal classes
    var previewZoomButtonIcons = {
        prev: '<i class="icon-arrow-left32"></i>',
        next: '<i class="icon-arrow-right32"></i>',
        toggleheader: '<i class="icon-menu-open"></i>',
        fullscreen: '<i class="icon-screen-full"></i>',
        borderless: '<i class="icon-alignment-unalign"></i>',
        close: '<i class="icon-cross3"></i>'
    };

    // File actions
    var fileActionSettings = {
        zoomClass: 'btn btn-link btn-xs btn-icon',
        zoomIcon: '<i class="icon-zoomin3"></i>',
        dragClass: 'btn btn-link btn-xs btn-icon',
        dragIcon: '<i class="icon-three-bars"></i>',
        removeClass: 'btn btn-link btn-icon btn-xs',
        removeIcon: '<i class="icon-trash"></i>',
        indicatorNew: '<i class="icon-file-plus text-slate"></i>',
        indicatorSuccess: '<i class="icon-checkmark3 file-icon-large text-success"></i>',
        indicatorError: '<i class="icon-cross2 text-danger"></i>',
        indicatorLoading: '<i class="icon-spinner2 spinner text-muted"></i>'
    };


    //
    // Basic example
    //

    $('.file-input-image').fileinput({
        browseLabel: 'Browse',
        browseClass: 'btn btn-primary',
        uploadClass: 'btn btn-default',
        browseIcon: '<i class="icon-file-plus"></i>',
        uploadIcon: '<i class="icon-file-upload2"></i>',
        removeIcon: '<i class="icon-cross3"></i>',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
        allowedFileExtensions: ["jpg", "jpeg", "png"],
        initialCaption: "No file selected",
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons,
        fileActionSettings: fileActionSettings
    });

    $('.file-input-pdf-zip').fileinput({
        browseLabel: 'Browse',
        browseClass: 'btn btn-primary',
        uploadClass: 'btn btn-default',
        browseIcon: '<i class="icon-file-plus"></i>',
        uploadIcon: '<i class="icon-file-upload2"></i>',
        removeIcon: '<i class="icon-cross3"></i>',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
        allowedFileExtensions: ["pdf", "zip"],
        initialCaption: "No file selected",
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons,
        fileActionSettings: fileActionSettings
    });

    $('.file-input-pdf').fileinput({
        browseLabel: 'Browse',
        browseClass: 'btn btn-primary',
        uploadClass: 'btn btn-default',
        browseIcon: '<i class="icon-file-plus"></i>',
        uploadIcon: '<i class="icon-file-upload2"></i>',
        removeIcon: '<i class="icon-cross3"></i>',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
        allowedFileExtensions: ["pdf"],
        initialCaption: "No file selected",
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons,
        fileActionSettings: fileActionSettings
    });

    //
    // AJAX upload
    //

    $(".file-input-banner").fileinput({
        uploadUrl: "http://localhost", // server upload action
        uploadAsync: true,
        maxFileCount: 5,
        browseLabel: 'Browse',
        dropZoneTitle: "Drag & Drop Files Here &hellip;",
        browseIcon: '<i class="icon-file-plus"></i>',
        initialPreview: [],
        fileActionSettings: {
            removeIcon: '<i class="icon-bin"></i>',
            removeClass: 'btn btn-link btn-xs btn-icon',
            uploadIcon: '<i class="icon-upload"></i>',
            uploadClass: 'btn btn-link btn-xs btn-icon',
            zoomIcon: '<i class="icon-zoomin3"></i>',
            zoomClass: 'btn btn-link btn-xs btn-icon',
            indicatorNew: '<i class="icon-file-plus text-slate"></i>',
            indicatorSuccess: '<i class="icon-checkmark3 file-icon-large text-success"></i>',
            indicatorError: '<i class="icon-cross2 text-danger"></i>',
            indicatorLoading: '<i class="icon-spinner2 spinner text-muted"></i>',
        },
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
        allowedFileExtensions: ["jpg", "jpeg", "png"],
        initialCaption: "No file selected",
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons
    });


    $(".file-input-gallery").fileinput({
        uploadUrl: "http://localhost", // server upload action
        uploadAsync: true,
        maxFileCount: 30,
        browseLabel: 'Browse',
        dropZoneTitle: "Drag & Drop Files Here &hellip;",
        browseIcon: '<i class="icon-file-plus"></i>',
        initialPreview: [],
        fileActionSettings: {
            removeIcon: '<i class="icon-bin"></i>',
            removeClass: 'btn btn-link btn-xs btn-icon',
            uploadIcon: '<i class="icon-upload"></i>',
            uploadClass: 'btn btn-link btn-xs btn-icon',
            zoomIcon: '<i class="icon-zoomin3"></i>',
            zoomClass: 'btn btn-link btn-xs btn-icon',
            indicatorNew: '<i class="icon-file-plus text-slate"></i>',
            indicatorSuccess: '<i class="icon-checkmark3 file-icon-large text-success"></i>',
            indicatorError: '<i class="icon-cross2 text-danger"></i>',
            indicatorLoading: '<i class="icon-spinner2 spinner text-muted"></i>',
        },
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
        allowedFileExtensions: ["jpg", "jpeg", "png"],
        initialCaption: "No file selected",
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons
    });




    // ========= Banner Highlight ========= //
    var _selectLayout = $('.type-layout .info-layout');
    _selectLayout.hide();
    _selectLayout.parent().find('.img-only').show();
    _selectLayout.parent().find('.show-text-button').hide();
    $('.type-layout input[name="select-layout"]').change(function () {
        _selectLayout.hide();
        var _relLayout = $('input[name="select-layout"]:checked').attr('rel');
        if (_relLayout != 'img-only') {
            _selectLayout.parent().find('.img-only').hide();
            _selectLayout.not('.img-only').show();
            _selectLayout.parent().find('.show-text-button').hide();
            if (_relLayout == 'img-text-button') {
                _selectLayout.parent().find('.show-text-button').show();
            }
        }else{
            _selectLayout.parent().find('.img-only').show();
        }
    });


    // ========= Event & Shareholder Meeting AGM & EGM ======== //
    $('.event-number-egm').hide();
    $('.event-meeting-type input[name=event]').change(function () {
        var _eventMeetingType = $(this).val();
        if (_eventMeetingType == 'EGM') {
            $('.event-number-egm').show();
            $('.shareholder-agenda-agm').hide();
        } else if (_eventMeetingType == 'AGM') {
            $('.event-number-egm').hide();
            $('.shareholder-agenda-agm').show();
        }
    });

    $('.meeting-link-event').hide();
    $('#link-to-event').change(function () {
        var _checkLinkEvent = $('#link-to-event').parent().attr('class');
        if (_checkLinkEvent == 'checked') {
            $('.meeting-link-event').show();
        } else {
            $('.meeting-link-event').hide();
        }
    });









    // Box Reorder //
    var _formError = $("#action-formError");

    function getBoxAPI(dom) {
        var _obj = {};
        $(dom).find(".fx-input").each(function () {
            _obj[$(this).data('name')] = this.value;
        });
        if (_obj.title == "") return false;
        if (_obj.img == "") return false;
        $(dom).find(".fx-input").val("");
        $(dom).find(".px-boxReorder-image").removeClass("active").css('background-image', '');
        return _obj;
    }
    $(".px-boxReorder").each(function (i) {
        var _loc = $(this),
            _content = _loc.find(".px-boxReorder-template"),
            _form = _loc.find(".px-boxReorder-form"),
            template_list = _content.html();
        _content.html("");

        _loc.find(".px-boxReorder-insert").click(function () {
            var resp = getBoxAPI(_form);
            if (resp) {
                var _html = template_list;

                var num = _content.find(".list-reorder-inside").length + 1;

                _html = _html.replace(/{{no}}/g, num);
                _html = _html.replace(/{{img}}/g, resp.img);
                _html = _html.replace(/{{title}}/g, resp.title);
                _html = _html.replace(/{{hl}}/, resp.hl);
                _html = _html.replace(/{{desc}}/, resp.desc);

                _content.append(_html);
            } else {
                _formError.modal('show');
            }
        });

        _loc.find(".btn-reorder").click(function () {
            _loc.find(".reorder-start").hide();
            _loc.find(".reorder-action").show();

            var _ls = _loc.find(".list-reorder-inside");

            _ls.find(".show-reorder").show();
            _ls.find(".edit-detail").hide();

            _ls.find(".show-reorder li.btn-action-list").addClass('hidden');
            _ls.find(".show-reorder li:first-child").html('<span class="icon-reorder"><i class="icon-point-order"></i></span>');

            _loc.find(".reorder-inside").sortable({
                cursor: "move",
                disabled: false,
                handle: 'span.icon-reorder',
                update: function (e, ui) {
                    $(".bc-inside-t .reorder-action .btn-save").click(function () {
                        $(".bc-inside-t .reorder-action").hide();
                        $(".bc-inside-t .reorder-start").show();

                        $(".reorder-inside .list-reorder-inside .show-reorder ul li.btn-action-list").removeClass('hidden');

                        $(".reorder-inside .list-reorder-inside").sortable({
                            disabled: true,
                            cursor: false
                        });

                        var index = 1;
                        var reOrderLength = $(".reorder-inside .list-reorder-inside").length;
                        for (var i = index; i <= reOrderLength; i++) {
                            $('.reorder-inside .list-reorder-inside:nth-child(' + i + ') .show-reorder ul li:first-child').html('<h3>' + i + '</h3>');

                        }

                    });
                }
            });
        })
    });
    $(".px-boxReorder").on("change", ".fx-browse", function () {
        var _reader = new FileReader(),
            _file = this.files[0],
            _target = $(this).closest(".px-boxReorder-image");

        _reader.addEventListener("load", function () {
            _target.addClass("active");
            _target.find(".fx-input").val(this.result);
            _target[0].style.backgroundImage = 'url("' + this.result + '")';
        });
        if (_file) {
            _reader.readAsDataURL(_file);
        }
    });
    var _modalOk = $("#action-imageRemove").find(".btn-modal-ok");
    _modalOk.click(function () {
        this.confirmRemove();
    })
    $(".px-boxReorder").on("click", ".btn-remove", function (e) {
        var _ref = $(this).closest(".px-boxReorder-image");
        _modalOk[0].confirmRemove = function (e) {
            _ref.removeClass("active");
            _ref.find(".fx-input").val("");
            _ref[0].style.backgroundImage = "";
        }
    });
    $(".px-boxReorder").on("click", ".px-boxReorder-edit", function () {
        $(this).closest(".list-reorder-inside").addClass("editMode");
    });
    $(".px-boxReorder").on("click", ".px-boxReorder-cls", function () {
        $(this).closest(".list-reorder-inside").removeClass("editMode");
    });
    $(".px-boxReorder").on("change", ".px-boxReorder-inputTitle", function () {
        $(this).closest(".list-reorder-inside").find(".px-boxReorder-title").text(this.value);
    });


    // --- Image Uploader Controller --- //
    $(".px-imageUploader")
        .on("change", ".fx-browse", function () {
            var _reader = new FileReader(),
                _file = this.files[0],
                _target = $(this).closest(".px-imageUploader");

            _reader.addEventListener("load", function () {
                _target.addClass("active");
                console.log(this)
                _target.find("input")[0].value = this.result;
                _target[0].style.backgroundImage = 'url("' + this.result + '")';
            });
            if (_file) {
                _reader.readAsDataURL(_file);
            }
        })
        .on("click", ".btn-remove", function (e) {
            var _ref = $(this).closest(".px-imageUploader");
            _modalOk[0].confirmRemove = function (e) {
                _ref.removeClass("active");
                _ref.find(".fx-input").val("");
                _ref[0].style.backgroundImage = "";
            }
        });


    // --- POLYFORM --- //
    $(".px-polyform").each(function (i) {
        var _loc = $(this),
            _numList = 1,
            _content = _loc.find(".px-polyform-template"),
            template_list = _content.html();


        _loc.find(".px-polyform-insert").click(function (e) {
            e.preventDefault();
            _numList++;
            _content.append(template_list.replace(/{{no}}/, _numList));
        });
    });
    $(".px-polyform")
        .on("click", ".px-polyform-edit", function () {
            var _loc = $(this).closest(".px-polyform-list");
            _loc.addClass("editMode");
        })
        .on("click", ".px-polyform-save", function () {
            var _loc = $(this).closest(".px-polyform-list");
            _loc.removeClass("editMode");
        });



    //
    $("#dataForm").submit(function (e) {
        //        $(".click2edit").each(function () {
        //            var _html = $(this).html(),
        //                _name = $(this).data('inputName');
        //            $(this).after("<textarea name=\"" + _name + "\" style=\"display:none;\">" + _html + "</textarea>");
        //        })
    })
});
