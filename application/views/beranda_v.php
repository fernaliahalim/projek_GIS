<?php
	$this->load->view('header_v')
?>
		
		
		<div class="carousel slide" id="banner">
			<ol class="carousel-indicators">
				<li data-target="#banner" data-slide-to="0" class="active"></li>
				<li data-target="#banner" data-slide-to="1"></li>
				<li data-target="#banner" data-slide-to="2"></li>
				<!--<li data-target="#banner" data-slide-to="3"></li>
				<li data-target="#banner" data-slide-to="4"></li>-->
			</ol>
		
		<br> <br>
		
		<div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo base_url();?>assets/img/projek.jpg" alt="Komunikasi" width="1139px">
                <div class="carousel-caption">
                    <h4> Peta Persebaran Industri Makanan dan Minuman Kota Bogor </h4>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo base_url();?>assets/img/projek2.jpg" alt="Komunikasi" width="1139px">
                <div class="carousel-caption">
                    <h4> Peta Persebaran Industri Makanan dan Minuman Kota Bogor  </h4>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo base_url();?>assets/img/projek3.jpg" alt="Komunikasi" width="1139px">
                <div class="carousel-caption">
                    <h4> Peta Persebaran Industri Makanan dan Minuman Kota Bogor  </h4>
                    <p></p>
                </div>
            </div>
        </div>
    </div>

    <br/>
    <br/>
    <br/>

    <script type="text/javascript">
        $(document).ready(function(e) (
            $('.carousel').carousel();
        ));
    </script>

	<?php
		$this->load->view('footer_v')
	?>
	