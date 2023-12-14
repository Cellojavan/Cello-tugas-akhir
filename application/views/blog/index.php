
    <body id="top">

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <img src="<?=base_url()?>dist/images/image-removebg-preview (32).png" class="img-fluid logo-image mb-1">

                    <div class="d-flex flex-column">
                        <strong class="logo-text">CODE</strong>
                        <small class="logo-slogan">Learn Coding</small>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-center ms-lg-5">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">Homepage</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#tutorial">Tutorial</a>
                        </li>

                       

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>

                        <li class="nav-item ms-lg-auto">
                            <a class="nav-link" href="#"></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link custom-btn btn" href="<?=base_url('login/logout')?>">Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            <section class="hero-section d-flex justify-content-center align-items-center">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <div class="hero-section-text mt-5">
                                <h6 class="text-white">Hallo, Selamat Datang</h6>

                                <h1 class="hero-title text-white mt-4 mb-4">Learn to Code.</h1>
                               

                                <a href="#categories-section" class="custom-btn custom-border-btn btn">Learn More</a>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-form hero-form" action="#" method="get" role="form">
                                <h3 class="text-white mb-3">Search Programming Language</h3>
                                

                                <div class="row">
                                    <div class="col-lg-12 col-md-6 col-12">
                                        <div class="input-group">
                                        <form action="" method="post">
                                                <input type="text" name="keywoardd" id="job-title" class="form-control" placeholder="Search" autocomplete="off">

                                        </div>
                                        <div class="col-lg-10 col-12" style="margin-left: 46px;">
                                            <button type="submit" class="form-control">
                                                Find a Programming Language
                                            </button>
                                        </div>
                                        </form>
                                    </div>

                     

                                    

                                   
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="categories-section section-padding" id="categories-section">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-5" id="tutorial">Learn by <span>Categories</span></h2>
                            
    
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="categories-block">
                                <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                    <i class="bi bi-filetype-php" style="color:white; font-size: 25px;
                                    "></i>    

                                    <small class="categories-block-title">Php   </small>

                                    
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="categories-block">
                                <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                    <i class="bi bi-filetype-html" style="color:white; font-size: 25px;
                                    "></i>
                                    <small class="categories-block-title">Html</small>

                                   
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="categories-block">
                                <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                    <i class="bi bi-filetype-css" style="color:white; font-size: 25px;
                                    "></i>
                                
                                    <small class="categories-block-title">Css</small>

                                    
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="categories-block">
                                <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                    <i class="bi bi-filetype-js" style="color:white; font-size: 25px;
                                    "></i>
                                
                                    <small class="categories-block-title">JavaScript</small>

                                    
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="categories-block">
                                <a href="#" class="d-flex flex-column justify-content-center align-items-center h-100">
                                    <i class="bi bi-filetype-py" style="color:white; font-size: 25px;
                                    "></i>
                                
                                    <small class="categories-block-title">Python</small>

                                    
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


          


            <section class="job-section job-featured-section section-padding" id="job-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 text-center mx-auto mb-4">
                            <h2 id="cari">Featured Programming Language</h2>

                        </div>
                        <?php if($this->session->userdata('username') ==  ''):?>

                            <div class="job-section-btn-wrap" style="margin-bottom:20px; margin-left:100px;">
                    <button type="button" class="add" data-toggle="modal" data-target="#exampleModal">
                    <i class="bi bi-plus-circle"></i><span>&nbspAdd</span>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
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

                        <?php echo form_close();?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <style>
                        .add{
                            border-radius: 20px;
                            background-color: #4169E1;
                            color: white;
                            padding: 14px;
                        }
                    </style>
                    
                </div>
                        <?php else : ?>
                            
                        <?php endif; ?>    
                        <div class="col-lg-12 col-12">
                        <?php foreach($gambar as $g) :?>

                            <div class="job-thumb d-flex" id="targetku">
                                <div class="job-image-wrap bg-white shadow-lg">
                                    <img src="<?=base_url()?>gambar/<?= $g['gambar']?>" class="job-image img-fluid" alt="">
                                </div>

                                <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                                    <div class="mb-3">
                                        <h4 class="job-title mb-lg-0">
                                            <a href="job-details.html" class="job-title-link"><?=$g['judul']?></a>
                                        </h4>

                                        <div class="d-flex flex-wrap align-items-center">
                                          <p class="job-location mb-0">
                                          
                                          <?=$g['content']?>
                                          </p>
                                        </div>
                                    </div>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn" data-toggle="modal" style="background-color:#FC6A03; color:white; border-radius:20px;" data-target="#exampleModal<?=$g['id']?>">
                                      Read More
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal<?=$g['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Read More</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                          <img src="<?=base_url()?>gambar/<?= $g['gambar']?>" class="job-image img-fluid" alt="" style="width:50%">
                                          <h2><?=$g['judul']?></h2>
                                          <p><?=$g['content']?></p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                          <?php endforeach?>

                         
                           


                        
                        </div>

                        <?= $this->pagination->create_links();?>
                    </div>
                </div>
            </section>


            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <div class="custom-text-block custom-border-radius-start">
                                <h2 class="text-white mb-3">Help you Learning Programming Language</h2>

                                <p class="text-white"> programming language or management language is a notation system for writing computer programs. Most programming languages ​​are formal languages ​​based on text, but may also be graphical.</p>

                              
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="video-thumb">
                                <img src="images/people-working-as-team-company.jpg" class="about-image custom-border-radius-end img-fluid" alt="">

                                <div class="video-info">
                                    <a href="https://www.youtube.com/tooplate" class="youtube-icon bi-youtube"></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


        

     
        </main>

        