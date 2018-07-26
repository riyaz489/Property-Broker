
<?php foreach($data as $key=>$value) {
echo '
<!-- Card -->

<div class="container" style="margin-top:6%;margin-bottom:5%;"><div class="row"><div class="col-lg-6 ">
<div class="card card-cascade wider reverse">

  <!-- Card image -->
  <div style="position:relative;" class="view view-cascade overlay">
    <img class="card-img-top" src="'.$this->url->image('pics/'.$value->picture).'" height="400px" width:"200px" alt="Card image cap">
    <a href="#!">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!-- Card content -->
  <div style="position:relative;" class="card-body card-body-cascade text-center">

    <!-- Title -->
    <h4 class="card-title"><strong>'.$value->name.'</strong></h4>
    <!-- Subtitle -->
    <h6 class="font-weight-bold indigo-text py-2"style="color:black;">Price: Rs'.$value->price.'</h6>
    <!-- Text -->
    <p class="card-text">Newer 3 bedroom 2 bath home at Bethel and Church area. Easy freeway access too! Enjoy large covered patio with ceiling fans and ample backyard.</p>

   
    <!-- Twitter -->
    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
    <!-- Dribbble -->
    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>

  </div>

</div></div>


<div class="col-lg-5 " style="background:linear-gradient(to right bottom, rgba(7, 86, 131, 0.829),rgba(216, 25, 51, 0.822));color:white;padding-left:50px;height:70%; ">
<br><br>
<h3 style="color:white;">'.$value->type.'</h3>
<br><br>
<h6 style="display:inline-block;margin-right:30px;">Area:'.$value->area.'sqm  </h6>
<br>
<h6 style="display:inline-block;margin-right:90px;">Status:Active  </h6><h6 style="display:inline-block;">Bedroom: '.$value->bedroom.'</h6>
<br><h6 style="display:inline-block;margin-right:36px;">State: '.$value->location.'  </h6><h6 style="display:inline-block;">City: '.$value->city.'</h6>
<br><h6 style="display:inline-block;margin-right:30px;">Seller Name: '.$value->sname.'  </h6><h6 style="display:inline-block;">Phone Number: '.$value->sphone.'</h6>

</div>
</div></div>



';}?>