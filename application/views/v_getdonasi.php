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
    
    <!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
            <?php 
            foreach($rek as $data):
            ?>
			<div class="section-top-border">
				<h3 class="mb-30">Silahkan Transfer Pada Nomer Rekening Tujuan Di Bawah Ini</h3>
				<div class="row">
					<div class="col-md-3">
                    <img src="<?= base_url().'assets/img/'. $data->foto_barcode ?>">
					</div>
					<div class="col-md-9 mt-sm-20">
                            <div class="col-md-12 mt-sm-30">
                                <div class="">
                                    <ul class="unordered-list">
                                        <li>
                                            <div class="typography">
                                                <h4><i>No Rekening : <?= $data->nomor_rekening; ?></i></h4>
						                    </div>
                                        </li>
                                        <li>
                                            <div class="typography">
                                                <h6>A/n : <?= $data->nama_bank; ?></h6>
						                    </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
					</div>
				</div>
			</div>

			

            <div class="section-top-border">
				<h3 class="mb-30">Konfirmasi lewat WhatsApp</h3>
				<div class="row">
					<div class="col-lg-12">
						<blockquote class="generic-blockquote">
                            <div class="button-group-area mt-40">
                            <?php
                                foreach($about as $data):
                            ?>
                            <a href="https://api.whatsapp.com/send?phone=+<?= $data->no_wa; ?>&text=Halo" class="genric-btn primary radius">Konfirmasi</a>
			                <?php endforeach ?>
                            </div>
						</blockquote>
					</div>
				</div>
			</div>
            <?php endforeach ?>
		</div>
	</div>