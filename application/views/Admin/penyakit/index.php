    <!-- Page content -->
    <div class="container-fluid mt--6">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <!-- <h3 class="text-white mb-0">Dark table</h3> -->
              <div class="row align-items-center bg-transparent border-0">
                  <div class="col">
                      <h3 class="text-white mb-0">Tabel Data Penyakit</h3>
                  </div>
                  <div class="col text-right">
                      <a href="<?php echo base_url('admin/create-penyakit'); ?>" class="btn btn-success">
                          <i class="ni ni-fat-add"></i>
                          Tambah Data
                      </a>
                  </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="id_barang">ID Penyakit</th>
                    <th scope="col" class="sort" data-sort="nama_barang">Nama Penyakit</th>
                    <th scope="col" class="sort" data-sort="harga">NP penyakit</th>
                    <th scope="col" class="sort" data-sort="stok">Pengobatan</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody class="list">
                  <?php 
                  if (empty($data_penyakit)){
                    echo "<div class='alert alert-danger' role='alert'>
                            <strong>Data Penyakit kosong !!!</strong>
                          </div>";
                  } 
                  else {
                    foreach($data_penyakit as $penyakit){
                  ?>
                  <tr>
                    <td>
                      <?php echo $penyakit->kd_penyakit; ?>
                    </td>
                    <td>
                      <?php echo  $penyakit->nm_penyakit; ?>
                    </td>
                    <td>
                    <?php echo $penyakit->np_penyakit; ?>
                    </td>
                    <td>
                      <?php echo  $penyakit->pengobatan; ?>
                    </td>
                    <td>
                        <a href="<?php echo base_url('admin/update-penyakit/'.$penyakit->kd_penyakit); ?>" class="btn btn-sm btn-warning">Update</a>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete<?php echo $penyakit->kd_penyakit;?>">Delete</button>
                        <div class="col-md-4">
                            
                            <div class="modal fade" id="modal-delete<?php echo $penyakit->kd_penyakit;?>" tabindex="-1" role="dialog" aria-labelledby="modal-delete<?php echo $penyakit->kd_penyakit;?>" aria-hidden="true">
                                <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                <div class="modal-content bg-gradient-danger">
                                    
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    
                                    <div class="modal-body">
                                        
                                        <div class="py-3 text-center">
                                            <i class="ni ni-bell-55 ni-3x"></i>
                                            <h4 class="heading mt-4">Apakah Anda yakin ingin menghapus penyakit <br>"<?php echo $penyakit->nm_penyakit; ?>"</br></h4>
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <a href="<?php echo site_url('admin/delete_penyakit/'.$penyakit->kd_penyakit); ?>"class="btn btn-danger text-white">Ya, hapus</a>
                                        <button type="button" class="btn btn-white ml-auto" data-dismiss="modal">Close</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </td>
                  </tr>
                  <?php }} ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-default shadow py-4">
              <nav aria-label="...">
                <?php echo $this->pagination->create_links(); ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>