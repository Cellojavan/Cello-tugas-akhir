

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        
          


        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title"></h5>
                <!-- Button trigger modal -->
                <?php if($this->session->flashdata('success')) :?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Berhasil
                 <strong><?= $this->session->flashdata('success');?></strong> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif ?>
                <center>

                    <h2>Halaman User</h2>
                </center>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php  echo form_open_multipart("blog/tambah");?>
                            <div class="form-group">
                                <label for="datein">File</label>
                                <input type="file" class="form-control" id="datein"  name="foto"  autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="datein">Judul</label>
                                <input type="text" class="form-control" id="datein"  name="judul"  autocomplete="off" >
                            </div>
                            <div class="form-group">
                                <label for="datein">Konten</label>
                                <textarea name="konten" class="form-control"  rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        <?php echo form_close();?>
                        
                    </div>
                    

                    </div>
                </div>
                </div>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">NO</th>
                        <th scope="col">GAMBAR</th>
                        <th scope="col">JUDUL</th>
                        <th scope="col">CONTENT</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php foreach($gambar as $g) :?>
                      <tr>
                        <th scope="row">1</th>
                        <td><img src="<?=base_url()?>gambar/<?=$g["gambar"]?>" width="150" height="150" alt=""></td>
                        <td><?= $g["judul"]; ?></td>
                        <td><?= $g["content"]; ?></td>
                        
                      </tr>
                      <?php endforeach?>
                    </tbody>
                  </table>

                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
        
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
       
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
