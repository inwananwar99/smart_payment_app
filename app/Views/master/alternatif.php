<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="pagetitle">
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Master</li>
          <li class="breadcrumb-item active">Alternatif</li>
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
                  <h5 class="card-title">Data Alternatif</h5>
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
                    <th>Code</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;
                  foreach($alternatif as $row): ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $row['code'];?></td>
                      <td><?= $row['nama'];?></td>
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
                      <h5 class="modal-title">Tambah Data Alternatif</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('/alternatif');?>" method="POST">
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Code</label>
                        <div class="col-sm-10">
                          <input type="text" name="code" class="form-control">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" class="form-control">
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
               <?php foreach($alternatif as $row): ?>
              <div class="modal fade" id="editModal<?= $row['id'];?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Ubah Data Alternatif</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="<?= base_url('/alternatif/'.$row['id']);?>" method="POST">
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Code</label>
                        <div class="col-sm-10">
                          <input type="text" name="code" class="form-control" value="<?= $row['code']?>">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" class="form-control" value="<?= $row['nama']?>">
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

              <?php foreach($alternatif as $row): ?>
              <div class="modal fade" id="deleteModal<?= $row['id'];?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Hapus Data Alternatif</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="<?= base_url('/alternatif/'.$row['id']);?>" method="DELETE">
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
