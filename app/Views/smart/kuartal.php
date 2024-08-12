<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">SMART</li>
          <li class="breadcrumb-item active">Kuartal</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-10">
                  <h5 class="card-title">Data Kuartal</h5>
                </div>
                <div class="col-md-2">
                  <button class="btn btn-success mt-3" data-bs-toggle="modal" data-bs-target="#addModal">+ Data</button>
                </div>
              </div>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>ID</th>
                    <th>Metode Pembayaran</th>
                    <th>Pulau</th>
                    <th>Tanggal Masuk</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach($kuartal as $row): ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $row['id'];?></td>
                      <td><?= $row['nama'];?></td>
                      <td><?= $row['pulau'];?></td>
                      <td><?= $row['tgl_masuk'];?></td>
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
                      <h5 class="modal-title">Tambah Data Kuartal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('/kuartal');?>" method="POST">
                          <input type="hidden" name="id_alternatives" class="form-control">
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Metode</label>
                        <div class="col-sm-10">
                            <select name="id_alternatives" class="form-control">
                                <option>-- Pilih Metode --</option>
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
               <?php foreach($kuartal as $row): ?>
              <div class="modal fade" id="editModal<?= $row['id'];?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ubah Data Kuartal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('/kuartal/'.$row['id']);?>" method="POST">
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Metode</label>
                        <div class="col-sm-10">
                            <select name="id_alternatives" class="form-control">
                                <option value="<?= $row['id_alternatif']?>">-- <?= $row['nama']?> --</option>
                                <?php foreach ($alternatif as $alt) :?>
                                    <option value="<?= $alt['id']?>"><?= $alt['nama'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Pulau/Wilayah</label>
                        <div class="col-sm-10">
                          <input type="text" name="island" class="form-control" value="<?= $row['pulau'] ?>">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                        <div class="col-sm-10">
                          <input type="date" name="date_insert" class="form-control" value="<?= $row['tgl_masuk'] ?>">
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
              <?php endforeach;?>

              <?php foreach($kuartal as $row): ?>
              <div class="modal fade" id="deleteModal<?= $row['id'];?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Hapus Data Kuartal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('/kuartal/'.$row['id']);?>" method="DELETE">
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

<?= $this->endSection(); ?>
