
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
							<h2>Donasi</h2>
							<p>Lazismu <span>/</span>Umbulharjo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--::review_part start::-->
    <section class="testimonial_part section_padding">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Donasi Online</p>
                        <h2>Lazismu Umbulharjo</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <!-- style="padding-left:145px;" -->
                    <div class="textimonial_iner owl-carousel">
                        <?php 
                                foreach($rek as $data): 
                                ?>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <h4><?= $data->nama_bank; ?></h4>
                                        <p>Nomor Rekening :</p><h5><?= $data->nomor_rekening; ?></h5>
                                            <div class="button-group-area mt-10">
                                            <a href="<?= base_url().'DonasiOnline/getdonasi/'.$data->id_rekening ?>" class="genric-btn primary-border">Donasi</a>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-4 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="<?= base_url().'assets/img/'. $data->foto_barcode ?>" style="width:290px;">
                                    </div>
                                </div>
                                <!-- <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <?php endforeach?>
                    </div>
                </div>

            </div>
        </div>
    </section>

	