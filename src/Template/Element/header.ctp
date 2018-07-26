
<!-- Start Header Area -->
<header class="default-header">


<nav class="navbar navbar-expand-lg  navbar-light bg-light  fixed-top scrolling-navbar animated slideInDown ">
	<div class="container">
		 <a class="navbar-brand" href="<?= $this->url->build(["controller"=>"Properties","action"=>"index"])?>">
			<img src="<?php echo $this->url->image("logo.png")?>" height="53px" width="65px" alt="">
		 </a>
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
		 </button>

	 <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
	 <ul class="navbar-nav">
								<li><a href="<?= $this->url->build(["controller"=>"Properties","action"=>"index"])?>/#home">Home</a></li>
								<li><a href="<?= $this->url->build(["controller"=>"Properties","action"=>"index"])?>/#service">Service</a></li>
								<li><a href="<?= $this->url->build(["controller"=>"Properties","action"=>"index"])?>/#property">Property</a></li>
								<li><a href="<?= $this->url->build(["controller"=>"Properties","action"=>"index"])?>/#contact">Contact</a></li>
							
						    </ul>
						  </div>						
					</div>
				</nav>


			</header>
			<!-- End Header Area -->

