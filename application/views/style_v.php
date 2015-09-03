<?php
	$this->load->view('header_v')
?>
		
		
		<div class="carousel slide" id="banner">
		
		<br> <br>
		
		<div class="carousel-inner">
            <div class="form-group">
            <nav class="nav pull-right">
            <form action="<?PHP echo site_url();?>assets/pdf/Style.pdf">
            <button class="btn btn-primary btn-sm">
                <i class="glyphicon glyphicon-export"></i>Export to PDF
            </button>
        </form>
    </nav>
    </div>
    <br/>
        <center>
            <img src="<?PHP echo site_url();?>assets/img/style1.jpg" width="700px">
            <img src="<?PHP echo site_url();?>assets/img/style2.jpg" width="700px">
            <img src="<?PHP echo site_url();?>assets/img/style3.jpg" width="700px">
        </center>
        </div>
    </div>

    <br/>
    <br/>
    <br/>

	<?php
		$this->load->view('footer_v')
	?>
	