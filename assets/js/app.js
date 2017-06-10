

 $('a[rel=modal]').on('click', function(evt) {
            evt.preventDefault();
       
            var modal = $('#modal').modal();
            modal.find('.modal-body')
        
            .load($(this).attr('href'), function (responseText, textStatus) {
              //  if ( textStatus === 'success' || 
                //     textStatus === 'notmodified') 
                  //  {    
                   // }

                   $('#txtArea').Editor();
                   $(function(){
                        $('#datepicker').datepicker({
                                format: 'yyyy/mm/dd',
                                startDate: '-3d'
                            });
                   });
                   //btnTambah Trigger
                    $('#btnTambah').on('click',function(a){
                      a.preventDefault();
                      
                        $.ajax({
                                type: "POST",
                                url: $(this).attr('attr-submit'),
                                data: {
                                    'judul'             : $('#judul').val(),
                                    'perusahaan'        : $('#perusahaanName').val(),
                                    'tanggal_seleksi'   : $('#datepicker').val(),
                                    'detil'             : $('#txtArea').Editor("getText"),
                                    'jns_kelamin'       : $('#JnsKelamin').val(),
                                    'max_umur'          : $('#maxUmur').val(),
                                    'biaya'             : $('#biayaDftr').val(),
                                    'status'            : $('#status_aktif').val()
                                 },
                                cache: false,
                                success: function(result){
                                //alert(result);
                                    if(result ='success'){
                                     // $('.modal-body').modal('hide');
                                     $(function(){
                                        $('#modal').modal('hide');
                                     });
                                        
                                        //location.reload();
                                        $('#table2').DataTable().ajax.reload();
                                    }else if(result = 'error'){
                                      alert('errorRingan');
                                    }else{
                                      alert('errorParah');
                                    }
                                  }

                        });
                    });
                   //$('#datepicker').datepicker();
                           //$('#txtArea').wysihtml5();
                    });
             modal.onbeforeunload = function (event) {
                event.preventDefault();
                    $('.wysihtml5-sandbox, .wysihtml5-toolbar').remove();
                    $('#txtArea').show();
                 }

                });
