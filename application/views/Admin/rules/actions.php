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
                        <a href="<?php echo base_url('admin/rules'); ?>" class="btn btn-primary">
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
                                        <label class="form-control-label text-white" for="input-id_penyakit">ID Aturan</label>
                                        <input type="hidden" name="kd_aturan" value="<?php echo set_value('kd_aturan') ? set_value('kd_aturan') : (isset($data_rules) ? $data_rules->kd_aturan : $kd_aturan) ; ?>">
                                        <input type="text" name="kd_aturan"class="form-control" placeholder="Masukan ID Aturan" value="<?php echo set_value('kd_aturan') ? set_value('kd_aturan') : (isset($data_rules) ? $data_rules->kd_aturan : $kd_aturan) ; ?>" <?php echo (isset($kd_aturan) ? 'disabled' : '')  ?>>
                                        <span class="text-red"><?php echo form_error('kd_aturan'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label text-white">Nama Penyakit</label>
                                        <select class="form-control" name="penyakit">
                                            <?php
                                                if (empty($data_penyakit)) {
                                                    echo "<option><strong>Data Penyakit Kosong !!!</strong></option>";
                                                }
                                                else {
                                                    echo empty(set_value('penyakit')) || (set_value('penyakit') == "--- Pilih Penyakit ---") ?"<option>--- Pilih Penyakit ---</option>" : ''; 
                                                    foreach ($data_penyakit as $penyakit) {
                                                        if ( (isset($data_rules) && $data_rules->kd_penyakit == $penyakit->kd_penyakit) || set_value('penyakit') == $penyakit->kd_penyakit) {
                                                            echo "<option value='$penyakit->kd_penyakit'selected>$penyakit->nm_penyakit</option>";  
                                                        }
                                                        else {
                                                            echo "<option value='$penyakit->kd_penyakit'>$penyakit->nm_penyakit</option>";
                                                        }
                                                            
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <span class="text-red"><?php echo form_error('penyakit'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label text-white">Nama Gejala</label>
                                        <select class="form-control" name="gejala">
                                            <?php
                                                if (empty($data_gejala)) {
                                                    echo "<option><strong>Data Gejala Kosong !!!</strong></option>";
                                                }
                                                else {
                                                    echo empty(set_value('gejala')) || (set_value('gejala') == "--- Pilih Gejala ---") ?"<option>--- Pilih Gejala ---</option>" : ''; 
                                                    foreach ($data_gejala as $gejala) {
                                                        if ( (isset($data_rules) && $data_rules->kd_gejala == $gejala->kd_gejala) || set_value('gejala') == $gejala->kd_gejala) {
                                                            echo "<option value='$gejala->kd_gejala'selected>$gejala->nm_gejala</option>";  
                                                        }
                                                        else {
                                                            echo "<option value='$gejala->kd_gejala'>$gejala->nm_gejala</option>";
                                                        }
                                                            
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <span class="text-red"><?php echo form_error('penyakit'); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label text-white">Nilai Probabilita</label>
                                        <select class="form-control" name="probabilitas">
                                            <?php
                                                $data_probabilitas = [0.1, 0.2 , 0.3, 0.4, 0.5 , 0.6, 0.7, 0.8 , 0.9];
                                                echo empty(set_value('probabilitas')) || (set_value('probabilitas') == "--- Pilih Nilai Probabilitas ---") ?"<option>--- Pilih Nilai Probabilitas ---</option>" : ''; 
                                                for ($i=0; $i<9; $i++) {
                                                    if (isset($data_rules) && $data_rules->nl_prob == $data_probabilitas[$i] || set_value('probabilitas') == $data_probabilitas[$i]){
                                                        echo "<option value='$data_probabilitas[$i]'selected>$data_probabilitas[$i]</option>"; 
                                                    }
                                                    else {
                                                        echo "<option value='$data_probabilitas[$i]'>$data_probabilitas[$i]</option>";     
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <span class="text-red"><?php echo form_error('penyakit'); ?></span>
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