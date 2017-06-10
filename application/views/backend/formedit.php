
            <!-- <form method="post" action="<?php echo base_url();?>index.php/backend/tambahloker">    -->

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                            <label for="judul">Judul:</label>
                            <input type="text" class="form-control" id="judul" name="judul">
                             </div>
                        </div>
                        <div class="col-sm-4">
                             <div class="form-group">
                                <label for="perusahaan">Perusahaan:</label>
                                <input type="text" class="form-control disabled"  id="perusahaanName" name="perusahaan">
                             </div>

                        </div>
                          <div class="col-sm-2">
                        <div class="form-group">
                            <label for="tanggal">Tanggal Pelaksanaan</label>
                            <input type="text" id="datepicker" class="form-control" name="tanggal_seleksi" />
                        </div>
                        </div>
                    </div>

                
                   
                    
                    <div class="form-group">
                    <label for="detil_lowongankerja">Detil Lowongan Kerja:</label>
                    </p>
                    <?php // echo form_textarea('detil', '', 'id="txtEditor"');?>
                    <textarea name="detil" id="txtArea" class="detilInput"> </textarea>
                    </div>
                  
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="tahun_beli">Jenis Kelamin:</label>
                                <!-- <input type="text" class="form-control" id="thn_anggaran" name="thn_anggaran">-->
                                <select name="jns_kelamin" class="form-control" id="JnsKelamin">
                                <option value="L"> Laki-Laki</option>
                                <option value="P"> Perempuan</option>
                                <option value="L/P"> Laki-laki dan Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="unitkerja">Maks Usia:</label>
                                <?php //echo form_dropdown('id_ruangan', $ruangan,"",'class="form-control" id="id_ruangan"');?>
                                <input type="text" name="max_umur" id="maxUmur" class="form-control" />
                            </div>

                        </div>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="biaya">Biaya Pendaftaran</label>
                                <input type="text" id="biayaDftr" class="form-control" name="biaya" />
                            </div> 
                        </div>
                      <div class="col-sm-2">
                          <div class="form-group">
                          <label for="statusAktif"><strong>Status Keaktifan</strong></label>
                          <select name="status" id="status_aktif" class="form-control">
                              <option value="1">Aktif</option>
                              <option value="2">Tidak Aktif</option>
                          </select>
                          </div>
                      </div>
                    </div>
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button id="btnTambah" class="btn btn-primary" attr-submit="<?php echo base_url();?>index.php/backend/aksitambah">Save changes</button>
                </div>
                <!--</form>-->
        </div>
        <!-- /.modal-content -->
    </div>


