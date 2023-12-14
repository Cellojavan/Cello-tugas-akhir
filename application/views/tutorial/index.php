
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
                    <a class="nav-link active" href="<?=base_url()?>tutorial">Tutorial</a>
                </li>

               

                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>

                <li class="nav-item ms-lg-auto">
                    <a class="nav-link" href="#">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link custom-btn btn" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>

    


    <section class="categories-section section-padding" id="categories-section">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-5">Learn by <span>Categories</span></h2>
                    
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
                    <h2>Featured Programming Language</h2>

                </div>
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

                <div class="col-lg-12 col-12">
                    <div class="job-thumb d-flex">
                        <div class="job-image-wrap bg-white shadow-lg">
                            <img src="<?=base_url()?>dist/images/logos/image-removebg-preview (3).png" class="job-image img-fluid" alt="">
                        </div>

                        <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                            <div class="mb-3">
                                <h4 class="job-title mb-lg-0">
                                    <a href="job-details.html" class="job-title-link">Technical Lead</a>
                                </h4>

                                <div class="d-flex flex-wrap align-items-center">
                                    <p class="job-location mb-0">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        Kuala, Malaysia
                                    </p>

                                    <p class="job-date mb-0">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        10 hours ago
                                    </p>

                                    <p class="job-price mb-0">
                                        <i class="custom-icon bi-cash me-1"></i>
                                        $20k
                                    </p>

                                    <div class="d-flex">
                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge badge-level">Internship</a>
                                        </p>

                                        
                                    </div>
                                </div>
                            </div>

                            <div class="job-section-btn-wrap">
                                <a href="job-details.html" class="custom-btn btn">Apply now</a>
                            </div>
                        </div>
                    </div>

                    <div class="job-thumb d-flex">
                        <div class="job-image-wrap bg-white shadow-lg">
                            <img src="<?=base_url()?>dist/images/logos/image-removebg-preview (32).png" class="job-image img-fluid" alt="">
                        </div>

                        <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                            <div class="mb-3">
                                <h4 class="job-title mb-lg-0">
                                    <a href="job-details.html" class="job-title-link">Business Director</a>
                                </h4>

                                <div class="d-flex flex-wrap align-items-center">
                                    <p class="job-location mb-0">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        California, USA
                                    </p>

                                    <p class="job-date mb-0">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        1 day ago
                                    </p>

                                    <p class="job-price mb-0">
                                        <i class="custom-icon bi-cash me-1"></i>
                                        $90k
                                    </p>

                                    <div class="d-flex">
                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge badge-level">Senior</a href="job-listings.html">
                                        </p>

                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge">Full Time</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="job-section-btn-wrap">
                                <a href="job-details.html" class="custom-btn btn">Apply now</a>
                            </div>
                        </div>
                    </div>

                    <div class="job-thumb d-flex">
                        <div class="job-image-wrap bg-white shadow-lg">
                            <img src="<?=base_url()?>dist/images/logos/image-removebg-preview (33).png" class="job-image img-fluid" alt="" style="margin-top: 8px;">
                        </div>

                        <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                            <div class="mb-3">
                                <h4 class="job-title mb-lg-0">
                                    <a href="job-details.html" class="job-title-link">HR Manager</a>
                                </h4>

                                <div class="d-flex flex-wrap align-items-center">
                                    <p class="job-location mb-0">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        Tower, Paris
                                    </p>

                                    <p class="job-date mb-0">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        22 hours ago
                                    </p>

                                    <p class="job-price mb-0">
                                        <i class="custom-icon bi-cash me-1"></i>
                                        $50k
                                    </p>

                                    <div class="d-flex">
                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge badge-level">Junior</a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge">Contract</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="job-section-btn-wrap">
                                <a href="job-details.html" class="custom-btn btn">Apply now</a>
                            </div>
                        </div>
                    </div>

                    <div class="job-thumb d-flex">
                        <div class="job-image-wrap bg-white shadow-lg">
                            <img src="<?=base_url()?>dist/images/logos/image-removebg-preview (35).png" class="job-image img-fluid" alt="" style="width: 200px;">
                        </div>

                        <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                            <div class="mb-3">
                                <h4 class="job-title mb-lg-0">
                                    <a href="job-details.html" class="job-title-link">Dev Ops</a>
                                </h4>

                                <div class="d-flex flex-wrap align-items-center">
                                    <p class="job-location mb-0">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        Bangkok, Thailand
                                    </p>

                                    <p class="job-date mb-0">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        40 minutes ago
                                    </p>

                                    <p class="job-price mb-0">
                                        <i class="custom-icon bi-cash me-1"></i>
                                        $75k - 80k
                                    </p>

                                    <div class="d-flex">
                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge badge-level">Senior</a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge">Part Time</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="job-section-btn-wrap">
                                <a href="job-details.html" class="custom-btn btn">Apply now</a>
                            </div>
                        </div>
                    </div>

                    <div class="job-thumb d-flex">
                        <div class="job-image-wrap bg-white shadow-lg">
                            <img src="<?=base_url()?>dist/images/logos/image-removebg-preview (36).png" class="job-image img-fluid" alt="">
                        </div>

                        <div class="job-body d-flex flex-wrap flex-auto align-items-center ms-4">
                            <div class="mb-3">
                                <h4 class="job-title mb-lg-0">
                                    <a href="job-details.html" class="job-title-link">UX Designer</a>
                                </h4>

                                <div class="d-flex flex-wrap align-items-center">
                                    <p class="job-location mb-0">
                                        <i class="custom-icon bi-geo-alt me-1"></i>
                                        Bangkok, Thailand
                                    </p>

                                    <p class="job-date mb-0">
                                        <i class="custom-icon bi-clock me-1"></i>
                                        2 hours ago
                                    </p>

                                    <p class="job-price mb-0">
                                        <i class="custom-icon bi-cash me-1"></i>
                                        $100k
                                    </p>

                                    <div class="d-flex">
                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge badge-level">Entry</a>
                                        </p>

                                        <p class="mb-0">
                                            <a href="job-listings.html" class="badge">Remote</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="job-section-btn-wrap">
                                <a href="job-details.html" class="custom-btn btn">Apply now</a>
                            </div>
                        </div>
                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-5">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">Prev</span>
                                </a>
                            </li>

                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">1</a>
                            </li>
                            
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="#">4</a>
                            </li>

                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                            
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Button trigger modal -->


            </div>
        </div>
    </section>


  




</main>

