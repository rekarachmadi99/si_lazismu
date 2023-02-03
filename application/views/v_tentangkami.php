
<!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
							<h2>Tentang Kami</h2>
							<p>Lazismu <span>/</span>Umbulharjo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


	<section class="sample-text-area">
		<div class="container box_1170">
			<h3 class="text-heading">Lazismu Umbulharjo</h3>
            <?php 
            
            foreach($about as $data):
            
            ?>
			<!-- <p class="sample-text"> -->
				<?= $data->isi_tentang_kami; ?>
			<!-- </p> -->
            <?php 
            
            endforeach

            ?>
		</div>
        <div class="container box_1170">
			<h3 class="text-heading">Visi & Misi</h3>
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                    <h5 class="typography">Visi</h5>
                        <?php 
                        
                        foreach($vm as $data):
                        
                        ?>
                        <p class="sample-text">
                            <?= $data->visi; ?>
                        </p>
                        <?php 
                        
                        endforeach

                        ?>
                    </div>
                </div>
                &nbsp;
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                    <h5 class="typography">Misi</h5>
                        <?php 
                        
                        foreach($vm as $data):
                        
                        ?>
                        <p class="sample-text">
                            <?= $data->misi; ?>
                        </p>
                        <?php 
                        
                        endforeach

                        ?>
                    </div>
                </div>
		</div>
	</section>
    

	