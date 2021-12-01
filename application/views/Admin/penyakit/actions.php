    <!-- Page content -->
    <div class="container-fluid mt--6">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <!-- <h3 class="text-white mb-0">Dark table</h3> -->
                <div class="row align-items-center bg-transparent border-0">
                <div class="col">
                        <h3 class="text-white mb-0">Form Tambah/Update Data</h3>
                    </div>
                    <div class="col text-right">
                        <a href="<?php echo base_url('admin/penyakit'); ?>" class="btn btn-primary">
                            <i class="ni ni-bold-left"></i>
                            Kembali
                        </a>
                    </div>
                </div>
            </div>
            <div class="card bg-default shadow">
                <div class="card-body">
                    <form method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label text-white" for="input-id_penyakit">ID Penyakit</label>
                                        <input type="hidden" name="kd_penyakit" value="<?php echo set_value('kd_penyakit') ? set_value('kd_penyakit') : (isset($data_penyakit) ? $data_penyakit->kd_penyakit : $kd_penyakit) ; ?>">
                                        <input type="text" name="kd_penyakit" id="input-id_penyakit" class="form-control" placeholder="Masukan ID penyakit" value="<?php echo set_value('kd_penyakit') ? set_value('kd_penyakit') : (isset($data_penyakit) ? $data_penyakit->kd_penyakit : $kd_penyakit) ; ?>" <?php echo (isset($kd_penyakit) ? 'disabled' : '')  ?>>
                                        <span class="text-red"><?php echo form_error('kd_penyakit'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label text-white" for="input-nama_penyakit">Nama Penyakit</label>
                                        <input type="text" name="nama_penyakit" id="input-nama_penyakit" class="form-control" placeholder="Masukan Nama penyakit" value="<?php echo set_value('nama_penyakit') ? set_value('nama_penyakit') : (isset($data_penyakit) ? $data_penyakit->nm_penyakit : '') ; ?>">
                                        <span class="text-red"><?php echo form_error('nama_penyakit'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label text-white" for="input-stok">Pengobatan</label>
                                        <textarea name="pengobatan" class="form-control"><?php echo set_value('pengobatan') ? set_value('pengobatan') : (isset($data_penyakit) ? $data_penyakit->pengobatan : '') ; ?></textarea>
                                        <span class="text-red"><?php echo form_error('pengobatan'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-12 justify-content-center">
                                    <button type="submit" class="btn btn-md btn-success">
                                        <i class="ni ni-archive-2"></i>
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
          </div>
          </div>
        </div>
      </div>
    </div>