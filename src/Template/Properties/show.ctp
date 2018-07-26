<?php/* print_r($data);

foreach( $data as $key=>$value){
echo $key." ". $value->location;    
}*/?>



<div class="row"  style="margin:4% 0 0% 0; padding:0%;">
<div class="col-lg-3 col-md-3 col-sm-3" style="padding:0%;">


<div class="search-field"  style=" background: linear-gradient(to bottom right,   #e4858dce, #d1e295c0,#ecb7aa);">
								<form class="search-form" action="<?= $this->url->build(["controller"=>"Properties","action"=>"show"]);?>" method="post">
									 <div class="row">
									 	<div class="col-lg-12  d-flex align-items-center justify-content-center toggle-wrap">
											<div class="row">
												<div class="col">
													<center><h4 class="search-title">Search Properties For</h4></center>
												</div>
                                                <br><br><br>
												<div class="col">
													<div class="onoffswitch3 d-block mx-auto">
													    <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
													    <label class="onoffswitch3-label" for="myonoffswitch3">
													        <span class="onoffswitch3-inner">
													            <span class="onoffswitch3-active">
													            	<span class="onoffswitch3-switch">Sell</span>
													            	<span class="lnr lnr-arrow-right"></span>
													            </span>
													            <span class="onoffswitch3-inactive">
													            	<span class="lnr lnr-arrow-left"></span>
													            	<span class="onoffswitch3-switch">Rent</span>
													            </span>
													        </span>
													    </label>
													</div>													
												</div>
											</div>
									 	</div>
									    <div class="col-lg-11 col-md-11 col-xs-11">
											<select name="location" id="location" class="app-select form-control" required>
												<option data-display="Choose locations">Choose locations</option>
												<?= $data1?>
											</select>
										</div>
									  
										<br><br><br>
									    <div class="col-lg-11 col-md-11 col-xs-11">
											<select name="bedroom" class="app-select form-control" required>
												<option data-display="Bedrooms">Bedrooms</option>
												<option value="one">One</option>
												<option value="two">Two</option>
												<option value="three">Three</option>
											</select>
									    </div><br><br><br>
									    <div class="col-lg-11 col-md-11 col-xs-11">
											<select name="type" class="app-select form-control" required>
												<option data-display="Type">Type</option>
												<option value="Apartment">Apartment</option>
												<option value="House">House</option>
												<option value="Section">Section</option>
			                                    <option value="TownHouse">TownHouse</option>
											</select>
									    </div><br><br><br>
									    <div class="col-lg-11 col-md-11 range-wrap">
									    	<p>Price Range:</p>
									    	<input type="text" id="range" value="" name="range" />
									    </div>	
									    <div class="col-lg-11 col-md-11 range-wrap">
									    	<p>Area Range(sqm):</p>
									    	<input type="text" id="range2" value="" name="range2" />
									    </div> <br><br>										    
									    <div class="col-lg-11 col-md-11 d-flex justify-content-end">
											<button class="primary-btn mt-50 srch-btn" style="height: 45px;">Search Properties<span class="lnr lnr-arrow-right"></span></button>
										</div>						  
									  </div>
							  	</form>
							</div>



</div>

<div class="col-lg-9 col-md-9 col-sm-9" style="padding:0%;">

<div class="row" style="margin-top:4%;margin-left:4%;margin-right:0%;">
<?php
foreach( $data as $key=>$value){
echo '     
<div class="col-lg-3 col-md-5 col-sm-11" style="margin-top:2%;margin-bottom:2%;" >

<div class="card card-cascade wider">

  <div class="view view-cascade overlay">
  <a href="'. $this->url->build(["controller"=>"Properties","action"=>"details","?"=>["id"=>$value->id]]).'">
    <img class="card-img-top" src="'. $this->url->image("pics/".$value->picture).'" height="150px"  alt="Card image cap">
    
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>
  <br><br><br><br><br><br><br>
  <!-- Card content -->
  <div class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong>'.$value->type.'</strong></h4>
    <!-- Subtitle -->
    <h5 class="blue-text pb-2"><strong>Bedrooms: '.$value->bedroom.'</strong></h5>
    <!-- Text -->
	<p class="card-text">This is a very good house with very good conditon and nice loadtion.
	seriously you gonna love it. </p>

    
  </div>

</div>
<!-- Card Wider -->
</div>'; }
?>

</div>
</div>
</div>