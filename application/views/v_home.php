<link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/dist/jquery.fancybox.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script src="<?= base_url('') ?>assets/dist/jquery.fancybox.min.js"></script>
  


  <style>
  .batas{
      width: 1200px;
      min-height : 50px;
      background : #fff;
      margin : 70px auto;
      display : flex;
      flex-direction : row;
      flex-wrap:wrap;
  }

  .batas .bo{
      position: relative;
      width : 380px;
      height: 200px;
      background : #ff0;
      margin: 10px;
      box-sizing: border-box;
      display: inline-block;
  }

  .batas .bo .imgBox{
      position : relative;
      overflow : hidden;
  }

  .batas .bo .imgBox img{
      max-width : 100%;
      transition : transform 2s;
  }
  .batas .bo:hover .imgBox img{
      transform: scale(1.2);
  }

  .batas .bo .detail{
      position : absolute;
      top:10px;
      left: 10px;
      bottom :10px;
      right : 10px;
      background : rgba(0,0,0,.8);
      transform : scaleY(0);
      transition : transform .5s;
  }

  .batas .bo:hover .detail{
      transform : scaleY(1);
  }


  .batas .bo .detail .conten{
      position : absolute;
      top:80px;
      transform : translateY(-50%);
      text-align : center;
      padding : 15px;
      color : #fff;
  }

  .batas .bo .detail .conten h2{
      margin : 20px;
      padding : 0px;
      font-size: 20px;
      color : #ff0;
  }

  .batas .bo .detail .conten p{
      margin : 10px 0 0;
      padding : 0px;
  }

  .fancybox-caption{
      color:#fff;
      font-family:arial;
      font-size:21px;
  }
  
  </style>   
   
   <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>memberi Untuk
                                Negeri</h1>
                            <p>"Dan berinfaklah kamu (bersedekah atau nafakah) di jalan Allah dan janganlah kamu mencampakkan diri kamu ke dalam kebinasaan, 
                            dan berbuat baiklah kerana sesungguhnya Allah mencintai orang-orang yang berbuat baik".</p> 
                            <h5>Q.S(Al-Baqarah:195)</h5>
                            <a href="<?= base_url('DonasiOnline') ?>" class="btn_1">Donasi Online </a>
                            <a class="btn_2 btn-scrool-to" href="#hasilDonasi" >Hasil Donasi </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container"> 
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Mitra <br> Lazismu Umbulharjo</h2>
                        <!-- <p>Set have great you male grass yielding an yielding first their you're
                            have called the abundantly fruit were man </p> -->
                        <a href="<?=base_url('Mitra_front'); ?>" class="btn_1">Lihat Mitra Yang Lain</a>
                    </div>
                </div>
                <?php
                    foreach($mitra as $data):
                ?>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="<?= base_url().'assets/images/'. $data->foto_mitra; ?>" class="special_img mt-3" alt=""></span>
                            <h4><?= $data->nama_mitra; ?></h4>
                            <p><?= $data->deskripsi_mitra; ?></p>
                        </div>
                    </div>
                </div>
                        <?php endforeach ?>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->
    <section class="special_cource padding_top">
        <!-- padding -->
    </section>
    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="<?= base_url(); ?>assets/img/learning_img.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>Tentang kami</h5>
                        <h2>Lazismu Umbulharjo</h2>
                        <?php
                            foreach($about as $data):
                        ?>
                        <p><?= substr($data->isi_tentang_kami,0,500); ?></p>
                        <?php endforeach ?>
                        <a id="hasilDonasi" href="<?= base_url('Tentangkami'); ?>" class="btn_1">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">124</span>
                        <h4>Total donatur</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">960.000</span>
                        <h4> Total dana yang terkumpul</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <!-- <p>popular courses</p> -->
                        <h2>Berita Lazismu</h2>
                    </div>
                </div>
            </div>
            
            <div class="row">
            <?php
                foreach($berita as $data):
                // $isi= substr($data->isi_berita,0,200);        
            ?>
                <div class="col-sm-4 col-lg-4">
                    <div class="single_special_cource">
                        <img src="<?= base_url().'assets/images/'. $data->foto; ?>" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="<?= base_url().'News/readmore/'. $data->id_berita; ?>" class="btn_4">Baca</a>
                            <h4><?= $data->tgl_berita; ?></h4>
                            <a href="<?= base_url().'News/readmore/'. $data->id_berita; ?>"><h3><?= $data->judul_berita; ?></h3></a>
                            <p></p>
                            <!--  -->
                        </div>
                    </div>
                </div>
                <?php endforeach?>              
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- learning part start-->
    <section class="special_cource padding_top">
        <!-- padding -->
    </section>
    <!-- learning part end-->

    <!--::review_part start::-->
    <section class="testimonial_part">
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
    <!--::blog_part end::-->

    <!--::blog_part start::-->
    <section class="blog_part section_padding">
    </section>
    <!--::blog_part end::-->

    