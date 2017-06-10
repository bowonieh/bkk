
            <form method="post" action="<?php echo base_url();?>index.php/backend/tambahloker">    

                    

                
                    <div class="form-group">
                    <label for="perusahaan">Perusahaan:</label>
                    <input type="text" class="form-control disabled"  id="perusahaan" name="perusahaan">
                    </div>
                    <div class="form-group">
                    <label for="judul">Judul:</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                    </div>
                    <div class="form-group">
                    <label for="detil_lowongankerja">Detil Lowongan Kerja:</label>
                    </p>
                    <?php // echo form_textarea('detil', '', 'id="txtEditor"');?>
                    <textarea name="detil" id="txtEditor"> </textarea>
                    
                    

                    
                    </div>
                  
                    <div class="form-group">
                        <label for="tahun_beli">Tahun Anggaran:</label>
                        <input type="text" class="form-control" id="thn_anggaran" name="thn_anggaran">
                    </div>
                    <div class="form-group">
                        <label for="unitkerja">Ruangan:</label>
                        <?php //echo form_dropdown('id_ruangan', $ruangan,"",'class="form-control" id="id_ruangan"');?>
                        
                    </div>
                    <div class="form-group">
            
        </div>
                
                

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
        </div>
        <!-- /.modal-content -->
    </div>


