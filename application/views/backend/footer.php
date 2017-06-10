<div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">Ace</span>
                            Application &copy; 2013-2014
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->
        <div id="modal" class="modal fade" 
     tabindex="-1" role="dialog" aria-labelledby="plan-info" aria-hidden="true">
    <div class="modal-dialog modal-full-screen">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" 
                  data-dismiss="modal" aria-hidden="true">
                  <span class="glyphicon glyphicon-remove-circle"></span>
                </button>
            </div>
            <div class="modal-body">
                <!-- /# content goes here -->
            </div>
        </div>
    </div>
</div>
        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->

        <!--[if lte IE 8]>
          <script src="assets/js/excanvas.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url();?>assets/js/jquery-ui.custom.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.easypiechart.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.sparkline.index.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.flot.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.flot.resize.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-2.1.4.min.js"></script>
        

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/buttons.flash.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/buttons.colVis.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/dataTables.select.min.js"></script>


        <!-- ace scripts -->
        <script src="<?php echo base_url();?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/ace.min.js"></script>
        <script src="<?php echo base_url();?>bower_components/wysihtml5x/dist/wysihtml5x.min.js"></script>
        <script src="<?php echo base_url();?>bower_components/wysihtml5x/dist/wysihtml5x-toolbar.min.js"></script>
        <script src="<?php echo base_url();?>bower_components/editor/editor.js"></script>
        <script src="<?php echo base_url();?>bower_components/handlebars/handlebars.min.js"></script>
        <script src="<?php echo base_url();?>bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.js"></script>
        <script src="<?php echo base_url();?>bower_components/datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url();?>assets/js/app.js"></script>
        
        <!-- inline scripts related to this page -->
        
        
        
        <script type="text/javascript">
        //======================================

        //======================================
                
             
                   // $.get($('#remoteList').attr('attr-list'),function(data){
                     //   $('#remoteList').append(data);
                    //});
            
           
       

           

       jQuery(function(){
                var tableKu = $('#table2').DataTable({
                    "processing":true,
                    "serverSida":true,
                    "order" : [],
                    "ajax" :{
                            "url"   : $('#table2').attr('attr-list'),
                            "type"  : "POST"
                    },  
                    "columnDefs": [
                        { 
                            "targets": [ 0 ], //first column / numbering column
                            "orderable": false, //set not orderable
                        },
                    ],

 
                });
                $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                
                new $.fn.dataTable.Buttons( tableKu, {
                    buttons: [
                      {
                        "extend": "colvis",
                        "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                        "className": "btn btn-white btn-primary btn-bold",
                        columns: ':not(:first):not(:last)'
                      },
                      {
                        "extend": "copy",
                        "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                        "extend": "csv",
                        "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                    
                      {
                        "extend": "print",
                        "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                        "className": "btn btn-white btn-primary btn-bold",
                        autoPrint: false,
                        message: 'This print was produced using the Print button for DataTables'
                      }       
                    ]
                } );
                tableKu.buttons().container().appendTo( $('.tableTools-container') );
                //style the message box
                var defaultCopyAction = tableKu.button(1).action();
                tableKu.button(1).action(function (e, dt, button, config) {
                    defaultCopyAction(e, dt, button, config);
                    $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                });
                
                
                var defaultColvisAction = tableKu.button(0).action();
                tableKu.button(0).action(function (e, dt, button, config) {
                    
                    defaultColvisAction(e, dt, button, config);
                    
                    
                    if($('.dt-button-collection > .dropdown-menu').length == 0) {
                        $('.dt-button-collection')
                        .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                        .find('a').attr('href', '#').wrap("<li />")
                    }
                    $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
                });

                setTimeout(function() {
                    $($('.tableTools-container')).find('a.dt-button').each(function() {
                        var div = $(this).find(' > div').first();
                        if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
                        else $(this).tooltip({container: 'body', title: $(this).text()});
                    });
                }, 500);
                
                
                
                
                
                tableKu.on( 'select', function ( e, dt, type, index ) {
                    if ( type === 'row' ) {
                        $(tableKu.row( index ).node() ).find('input:checkbox').prop('checked', true);
                    }
                } );
                tableKu.on( 'deselect', function ( e, dt, type, index ) {
                    if ( type === 'row' ) {
                        $( tableKu.row( index ).node() ).find('input:checkbox').prop('checked', false);
                    }
                } );
            
            
            
            
                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                
                //select/deselect all rows according to table header checkbox
                $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $('#table2').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) tableKu.row(row).select();
                        else  tableKu.row(row).deselect();
                    });
                });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
                    var row = $(this).closest('tr').get(0);
                    if(this.checked) myTable.row(row).deselect();
                    else myTable.row(row).select();
                });
                
                //aksi edit tables
                $('#table2').on('click','#editBtn',function(e){
                    e.preventDefault();
                    var modal = $('#modal').modal();
                    modal.find('.modal-body')
                    .load($(this).attr('href'), function (responseText, textStatus) {

                            $('#txtArea').Editor();

                            $(function(){
                                $('#datepicker').datepicker({
                                    format: 'yyyy/mm/dd',
                                    startDate: '-3d'
                                });
                            });


                    });
                });
            //==========================================================
            
                $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });
                
            });


        </script>
    </body>
</html>
