<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">SMART</li>
          <li class="breadcrumb-item active">Penilaian</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-9">
                  <h5 class="card-title">Data Penilaian</h5>
                </div>
                <div class="col-md-3">
                  <button class="btn btn-info mt-3" data-bs-toggle="modal" data-bs-target="#utilityModal">Nilai Utility</button>
                  <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#addModal">+ Data</button>
                </div>
              </div>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Pulau</th>
                    <th>Metode Pembayaran</th>
                    <th>Nama Kriteria</th>
                    <th>Nilai</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach($penilaian as $row): ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $row['pulau'];?></td>
                      <td><?= $row['alternatif'];?></td>
                      <td><?= $row['kriteria'];?></td>
                      <td><?= $row['nilai'];?></td>
                      <td>
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'];?>"><i class="bi bi-pencil-square mr-3"></i></button>
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $row['id'];?>"><i class="bi bi-trash mr-3"></i></button>
                      </td>
                    </tr>
                  <?php endforeach;?>
                </tbody>
              </table>

              <div class="modal fade" id="addModal" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Tambah Data Penilaian</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('/penilaian');?>" method="POST">                        
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Metode</label>
                        <div class="col-sm-10">
                            <select name="id_alternatives" class="form-control">
                                <option>-- Pilih Metode Pembayaran --</option>
                                <?php foreach ($alternatif as $alt) :?>
                                    <option value="<?= $alt['id']?>"><?= $alt['nama'];?></option>
                                <?php endforeach;?>
                            </select>   
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Pulau/Wilayah</label>
                        <div class="col-sm-10">
                          <input type="text" name="island" class="form-control">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-10">
                          <input type="date" name="date_insert" class="form-control">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kriteria</label>
                        <div class="col-sm-10">
                        <select name="id_criteria" class="form-control">
                                <option>-- Pilih Kriteria --</option>
                                <?php foreach ($kriteria as $q) :?>
                                    <option value="<?= $q['id']?>"><?= $q['nama'];?></option>
                                <?php endforeach;?>
                        </select> 
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nilai</label>
                        <div class="col-sm-10">
                        <select name="value" class="form-control">
                        <option>-- Pilih Nilai --</option>
                                    <option value="10">1</option>
                                    <option value="20">2</option>
                                    <option value="30">3</option>
                                    <option value="40">4</option>
                                    <option value="50">5</option>
                        </select> 
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div><!-- End Basic Modal-->


              <!-- End Table with stripped rows -->
               <!-- <?php foreach($penilaian as $row): ?> -->
              <div class="modal fade" id="editModal<?= $row['id'];?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ubah Data Penilaian</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="<?= base_url('/penilaian/'.$row['id']);?>" method="POST">
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Metode</label>
                        <div class="col-sm-10">
                            <select name="id_alternatives" class="form-control">
                                <option value="<?= $row['id_alternatif']?>">-- <?= $row['alternatif'];?> --</option>
                                <?php foreach ($alternatif as $alt) :?>
                                    <option value="<?= $alt['id']?>"><?= $alt['nama'];?></option>
                                <?php endforeach;?>
                            </select>   
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Pulau/Wilayah</label>
                        <div class="col-sm-10">
                          <input type="text" name="island" value="<?= $row['pulau']?>" class="form-control">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-10">
                          <input type="date" name="date_insert" value="<?= $row['tgl_masuk']?>" class="form-control">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Kriteria</label>
                        <div class="col-sm-10">
                        <select name="id_criteria" class="form-control">
                        <option value="<?= $row['id_kriteria']?>">-- <?= $row['kriteria']?> --</option>
                                <?php foreach ($kriteria as $q) :?>
                                    <option value="<?= $q['id']?>"><?= $q['nama'];?></option>
                                <?php endforeach;?>
                        </select> 
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nilai</label>
                        <div class="col-sm-10">
                        <select name="value" class="form-control">
                              <?php if ($row['nilai'] == 10){ ?>
                                <option value="10">-- 1 --</option>
                              <?php }elseif ($row['nilai'] == 20){ ?>
                                <option value="20">-- 2 --</option>
                              <?php }elseif ($row['nilai'] == 30){ ?>
                                <option value="30">-- 3 --</option>
                                <?php }elseif($row['nilai'] == 40){ ?>
                                  <option value="40">-- 4 --</option>
                              <?php }else{ ?>
                                <option value="50">-- 5 --</option>
                                <?php } ?>
                                    <option value="10">1</option>
                                    <option value="20">2</option>
                                    <option value="30">3</option>
                                    <option value="40">4</option>
                                    <option value="50">5</option>
                        </select> 
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- End Basic Modal -->
              <!-- <?php endforeach;?> -->

              <?php foreach($penilaian as $row): ?>
              <div class="modal fade" id="deleteModal<?= $row['id'];?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Hapus Data Penilaian</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('/penilaian/'.$row['id']);?>" method="DELETE">
                             <p>Apakah Anda yakin ingin menghapus data ini?</p>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                          <button type="submit" class="btn btn-danger">Hapus</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div><!-- End Basic Modal-->
              <?php endforeach;?>


            </div>
          </div>

        </div>
      </div>
    </section>


    <div class="modal fade" id="utilityModal" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Nilai Utility</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <table class="table">
                <thead>
                  <tr>
                    <th rowspan="1">Alternatif</th>
                    <th colspan="6">Kriteria</th>
                  </tr>
                  <tr>
                      <th></th>
                      <th>Kemudahan</th>
                      <th>Keamanan</th>
                      <th>Kenyamanan</th>
                      <th>Keuntungan</th>
                      <th>Dukungan Masalah</th>
                      <th>Kecepatan</th>
                      <th>Keakuratan</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($utilityAlternatif as $row): ?>
                  <tr>
                    <td><?= $row['nama_alternatif']?></td>
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>

<?= $this->endSection(); ?>
