
<style>
@media screen and (max-width:800px) {
	.slidertexts { 
border-bottom: 5px solid gray; 
	width:100%;
font-family: 'Raleway', sans-serif;
text-align:left;
font-size:18px;
	color:black;
background-color:rgba(255,255,255,0.8);
padding:5px;
padding-left:5;
padding-right:15px;
margin-left:15px;
	} 
.slidercss{
width: 100%; position:relative; height:40vh; overflow:hidden
}
.imgcls{
width:100%!important; height:40vh!important;; object-fit:cover!important;;
}
}
@media screen and (min-width:800px) {
	.slidertexts { 
border-bottom: 5px solid gray; 
	width:100%;
	font-family: 'Raleway', sans-serif;
	font-size:28px;
color:black;
padding:5px;
background-color:rgba(255,255,255,0.8);
padding-left:5px;
padding-right:15px;
	} 
.slidercss{
width: 100%; position:relative; height:70vh; overflow:hidden
}
.imgcls{
width:100%!important; height:70vh!important;; object-fit:cover!important;;
}
}
</style>
<div id="carousel-example-generic" class="carousel slide slidercss" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
   <?php foreach ($this->banner->all() as $key=>$banner): ?>
    <div class="item <?php if($key==0) { ?>active <?php } ?>">
      <img class="imgcls lazyload"  data-src="public/upload/banner/<?php echo $banner->image ?>" alt="<?php echo $banner->title ?>">
      <div class="carousel-caption" >
           <div class="col-md-12 slidertexts"  style="font-size:1.4em; text-align: center">
                        <?php echo $banner->text ?>

                    </div>
      </div>
    </div>

  <?php endforeach; ?>
  
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
