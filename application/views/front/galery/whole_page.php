

<!--yuklenme animasiyasi-->
<?php $this->load->view("front/includes_for_whole_pages/load_animation");?>
<!--yuklenme animasiyasi-->


<!--header-->
<?php $this->load->view("front/includes_for_whole_pages/header");?>
<!--header-->


<!--navbar-->
<?php $this->load->view("front/includes_for_whole_pages/navbar");?>
<!--navbar-->


<!--axtaris hissesi -->
<?php $this->load->view("front/includes_for_whole_pages/search");?>
<!--axtaris hissesi -->



<!--    Gallery section start   -->
<div class="gallery-section blog-grid">
    <div class="container">
        <div class="row">
            <?php foreach ($photos as $photo) {?>
            <div class="col-lg-4 col-md-6">
                <div class="single-pic wow fadeInRight" data-wow-duration="1.5s">
                    <img src="<?php echo base_url('uploads/gallery/'.$photo['name'])?>" alt="">
                    <div class="single-pic-overlay"></div>
                    <div class="txt-icon">
                        <div class="outer">
                            <div class="inner">
                                <a class="icon-wrapper" href="<?php echo base_url('uploads/gallery/'.$photo['name'])?>" data-lightbox="single-pic" data-title="Transpix Gallery 01">
                                    <i class="fas fa-search-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <nav class="pagination-nav">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--    Gallery section end   -->





<!--scriptler-->
<?php $this->load->view("front/includes_for_whole_pages/scripts");  ?>
<!--scriptler-->

