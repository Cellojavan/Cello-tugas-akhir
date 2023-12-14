

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
                <?php if($this->session->flashdata('danger')) :?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Berhasil
                 <strong><?= $this->session->flashdata('danger');?></strong> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <?php endif ?>
                <center>
                  
                  <h2>Halaman Admin</h2>
                </center>
                <button type="button" class="btn btn-dark mt-2" data-toggle="modal" data-target="#exampleModal">
                TAMBAH DATA
                </button>
                <br>
                &nbsp
                <input type="text" class="form-control" id="datein"  name="judul"  autocomplete="off" placeholder="Searching"><Button class="btn btn-primary float-right" style="margin-top:-4.4%; margin-left:95%;">Search</Button>

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
                        <?php  echo form_open_multipart("ada/tambah");?>
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
                        <th scope="col">AKSI</th>
                      </tr>
                      <?php $_POST?>
                    </thead>
                    <tbody>
                        <?php foreach($gambar as $g) :?>
                      <tr>
                        <th scope="row">1</th>
                        <td><img src="<?=base_url()?>gambar/<?=$g["gambar"]?>" width="150" height="150" alt=""></td>
                        <td><?= $g["judul"]; ?></td>
                        <td><?= $g["content"]; ?></td>
                        <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1<?=$g['id']?>">
                          show
                        </button>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal2<?=$g['id']?>">
                          ubah
                        </button>
                        
                        <a class="btn btn-danger" href="<?=base_url()?>ada/hapus/<?=$g['id']?>">delete</a>

                        <div class="modal fade" id="exampleModal1<?=$g['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Show Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
                                    <div class="form-group">
                                        <label for="datein">Gambar</label><br>
                                        <img src="<?=base_url()?>gambar/<?=$g["gambar"]?>" width="150" height="150" alt="">
                                    </div>
                                    <div class="form-group">
                                        <label for="datein">Judul</label>
                                        <input type="text" class="form-control" id="datein" value="<?=$g['judul']?>" name="judul"  autocomplete="off" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="datein">Konten</label>
                                        <input name="konten" class="form-control" value="<?=$g['content']?>" rows="5" readonly></input>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                                
                                
                            </div>
                            

                            </div>
                        </div>
                        </div>
                        <div class="modal fade" id="exampleModal2<?=$g['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ubah Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <?php  echo form_open_multipart("ada/edit");?>

                                    <div class="form-group">
                                        <label for="datein">File</label>
                                        <input type="file" class="form-control" id="datein" name="foto"  autocomplete="off" >
                                        <input type="hidden" name="id" value="<?=$g['id']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="datein">Judul</label>
                                        <input type="text" class="form-control" id="datein" value="<?=$g['judul']?>" name="judul"  autocomplete="off" >
                                    </div>
                                    <div class="form-group">
                                        <label for="datein">Konten</label>
                                        <input name="konten" class="form-control" value="<?=$g['content']?>" rows="5"></input>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            <?php echo form_close();?>

                                
                            </div>
                            

                            </div>
                        </div>
                        </div>
                           
                    
                            
                        </td>
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
