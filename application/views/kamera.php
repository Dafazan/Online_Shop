<div class="container-fluid">
    
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="carouselExampleIndicators" data-slide-to="1"></li>
                
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('assets/img/gop.jpg') ?>" class="d-block w-100" alt="..." >
                </div>
                <div class="carousel-item active">
                    <img src="<?php echo base_url('assets/img/milanoex.jpg') ?>" class="d-block w-100" alt="..." >
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    
       


   

        <div class="row text-center mt-4">

        <?php foreach ($kamera as $brg) : ?>

        <div class="card ml-3 mb-3" style="width: 16rem;">
            <img src="<?php echo base_url(). '/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"> <?php echo $brg->nama_brg ?></h5>
                <small><?php echo $brg->keterangan ?></small><br>
                <span class="badge badge-pill badge-success mb-2">IDR <?php echo number_format($brg->harga),',','.' ?></span><br>
                <?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                 <?php echo anchor('dashboard/detail/' .$brg->id_brg,'<div class="btn btn-sm btn-success">Detail</div>') ?>
                


            </div>
        </div>  


        <?php endforeach ?>
    </div>
    
    <div class="rev">

        <div class="card ml-2 mt-3 mb-3" style="max-width: 1000px;">
            <h2 class="rev-text ml-3">Popular Review about this Platform</h2>
        </div>

     <div class="card ml-2 mt-3 mb-3" style="max-width: 1000px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/tio.jpg') ?>" class="img-fluid rounded-start" alt="...">
                </div>
                    <div class="card-body">
                        <h4 class="card-title">Captain Tio</h4>
                        <p class="card-text">"Toko Ini sangat membantu, saya bisa belanja seharian"</p>
                        <p class="card-text">"Saya seringkali belanja di toko ini, Jarang sekali ada kesalahan sisini."</p>
                        <p class="card-text"><small class="text-muted">June 2, 2022</small></p>
                    </div>
                </div>
            </div>

                 <div class="card ml-2 mt-3 mb-3" style="max-width: 1000px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/steve.jpg') ?>" class="img-fluid rounded-start" alt="...">
                </div>
                    <div class="card-body">
                        <h5 class="card-title">Steve Rogers</h5>
                        <p class="card-text">"Mantap Shield nya asli"</p>
                        <p class="card-text"><small class="text-muted">Aug 15, 2019</small></p>
                    </div>
                </div>
            </div>

                 <div class="card ml-2 mt-3 mb-3" style="max-width: 1000px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/img/castle.jpg') ?>" class="img-fluid rounded-start" alt="...">
                </div>
                    <div class="card-body">
                        <h5 class="card-title">Richard Castle</h5>
                        <p class="card-text">"Platform yang bagus, mungkin saya akan merilis buku saya disini."</p>
                        <p class="card-text"><small class="text-muted">Dec 12, 2012</small></p>
                    </div>
                </div>
            </div>

        </div>





        </div>


</div>