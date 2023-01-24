
    <!-- jQuery  -->
    <script src="<?php echo base_url("assets/js/jquery.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/metismenu.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.slimscroll.js")?>"></script>
    <script src="<?php echo base_url("assets/js/waves.min.js")?>"></script>

    <!--Morris Chart-->
    <script src="<?php echo base_url("assets/plugins/morris/morris.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/plugins/raphael/raphael.min.js") ?>"></script>

    <script src="<?php echo base_url("assets/pages/dashboard.init.js") ?>"></script>

    <!-- Parsley js -->
    <script src="<?php echo base_url("assets/plugins/parsleyjs/parsley.min.js") ?>"></script>

    <!-- Plugins js --> 
    <script src="<?php echo base_url("assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/plugins/apexchart/apexcharts.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js") ?>"></script>
    <!-- Plugins Init js -->
    <script src="<?php echo base_url("assets/pages/form-advanced.init.js") ?>"></script>
    <script src="<?php echo base_url("assets/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js") ?>"></script>

    
    <script src="<?php echo base_url("assets/plugins/tinymce/tinymce.min.js")?>"></script>

    <!-- Dropzone js -->
    <script src="<?php echo base_url("assets/plugins/dropzone/dist/dropzone.js")?>"></script>

    <script>
        $(document).ready(function() {
            if ($("#elm1").length > 0) {
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [{
                        title: 'Bold text',
                        inline: 'b'
                    }, {
                        title: 'Red text',
                        inline: 'span',
                        styles: {
                            color: '#ff0000'
                        }
                    }, {
                        title: 'Red header',
                        block: 'h1',
                        styles: {
                            color: '#ff0000'
                        }
                    }, {
                        title: 'Example 1',
                        inline: 'span',
                        classes: 'example1'
                    }, {
                        title: 'Example 2',
                        inline: 'span',
                        classes: 'example2'
                    }, {
                        title: 'Table styles'
                    }, {
                        title: 'Table row 1',
                        selector: 'tr',
                        classes: 'tablerow1'
                    }]
                });
            }
        });
    </script>
    <script src="<?php echo base_url("assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js")?>"></script>

    <script>
        jQuery.browser = {};
        (function() {
            jQuery.browser.msie = false;
            jQuery.browser.version = 0;
            if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
                jQuery.browser.msie = true;
                jQuery.browser.version = RegExp.$1;
            }
        })();
    </script>

    <!-- Required datatable js -->
    <script src="<?php echo base_url("assets/plugins/datatables/jquery.dataTables.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/plugins/datatables/dataTables.bootstrap4.min.js") ?>"></script>
    <!-- Buttons examples -->
    <script src="<?php echo base_url("assets/plugins/datatables/dataTables.buttons.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/plugins/datatables/buttons.bootstrap4.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/plugins/datatables/jszip.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/plugins/datatables/pdfmake.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/plugins/datatables/vfs_fonts.js") ?>"></script>
    <script src="<?php echo base_url("assets/plugins/datatables/buttons.html5.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/plugins/datatables/buttons.print.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/plugins/datatables/buttons.colVis.min.js") ?>"></script>
    <!-- Responsive examples -->
    <script src="<?php echo base_url("assets/plugins/datatables/dataTables.responsive.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/plugins/datatables/responsive.bootstrap4.min.js") ?>"></script>

    <!-- Datatable init js -->
    <script src="<?php echo base_url("assets/pages/datatables.init.js")?>"></script>

    <!--CkEditor -->
    <script src="<?php echo base_url('assets/ckeditor/ckeditor.js');?>"></script>

     <!--Hooks js -->
     <script src="<?php echo base_url("application/hooks/adress.js")?>"></script>

    <!-- App js -->
    <script src="<?php echo base_url("assets/js/app.js")?>"></script>

  