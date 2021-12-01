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
                        <a href="<?php echo base_url('admin/gejala'); ?>" class="btn btn-primary">
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
                                        <label class="form-control-label text-white" for="input-id_penyakit">ID Gejala</label>
                                        <input type="hidden" name="kd_gejala" value="<?php echo set_value('kd_gejala') ? set_value('kd_gejala') : (isset($data_gejala) ? $data_gejala->kd_gejala : $kd_gejala) ; ?>">
                                        <input type="text" name="kd_gejala"  class="form-control" placeholder="Masukan ID Gejala" value="<?php echo set_value('kd_gejala') ? set_value('kd_gejala') : (isset($data_gejala) ? $data_gejala->kd_gejala : $kd_gejala) ; ?>" <?php echo (isset($kd_gejala) ? 'disabled' : '')  ?>>
                                        <span class="text-red"><?php echo form_error('kd_gejala'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label text-white" for="input-nama_penyakit">Nama Gejala</label>
                                        <input type="text" name="nm_gejala" id="input-nama_penyakit" class="form-control" placeholder="Masukan Nama gejala" value="<?php echo set_value('nm_gejala') ? set_value('nm_gejala') : (isset($data_gejala) ? $data_gejala->nm_gejala : '') ; ?>">
                                        <span class="text-red"><?php echo form_error('nm_gejala'); ?></span>
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