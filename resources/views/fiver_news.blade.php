
@extends("master")
@section("content")
<!-- news -->
<section class="news" id="news">
		<div class="container">
			<div class="heading">
				<h3>Explore the Marketplace</h3><br/>
                                <h5 style="text-align: center">Get inspired to build your business</h5>
			</div>
			<div class="news-grids">
				<div class="col-md-4 news-grid1">
					<img src="{{url('/')}}/public/fontend/images/olu-eletu-13086.jpg" alt="" />
						<div class="absolute">
							<div class="absolute-left">
								<p class="p1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  2/3/2017</p>
							<div class="clearfix"></div>
							</div>
							<div class="absolute-right">
								<p class="left"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="span1">50</span></p>
								<p class="right"><i class="fa fa-thumbs-down" aria-hidden="true"></i> <span class="span1">20</span></p>
							<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					<h3>Vesti id ipsum sit amet sem rutrum ut.</h3>
						<p>Phasellus fringilla faucibus ipsum, id pharetra massa consequat ac. Nullam at tempus urna. Praesent non dapibus.</p>
						<div class="more">
							<a href="#" data-toggle="modal" data-target="#myModal" >read more</a>
						</div>
				</div>
				<div class="col-md-4 news-grid1">
					<img src="{{url('/')}}/public/fontend/images/business-437020_960_720.jpg" alt="" />
						<div class="absolute">
							<div class="absolute-left">
								<p class="p1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  1/3/2017</p>
							<div class="clearfix"></div>
							</div>
							<div class="absolute-right">
								<p class="left"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="span1">70</span></p>
								<p class="right"><i class="fa fa-thumbs-down" aria-hidden="true"></i> <span class="span1">35</span></p>
							<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					<h3>Quisque nisi elit, porttitor ut porta id.</h3>
						<p>Nullam sit amet ligula non ante dapibus facilisis. Donec nec sollicitudin lectus. Nam iaculis risus scelerisque lacus. </p>
						<div class="more">
							<a href="#" data-toggle="modal" data-target="#myModal" >read more</a>
						</div>
				</div>
				<div class="col-md-4 news-grid1">
					<img src="{{url('/')}}/public/fontend/images/office-photo-2071332_960_720.jpg" alt="" />
						<div class="absolute">
							<div class="absolute-left">
								<p class="p1"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>  28/2/2017</p>
							<div class="clearfix"></div>
							</div>
							<div class="absolute-right">
								<p class="left"><i class="fa fa-thumbs-up" aria-hidden="true"></i> <span class="span1">4</span></p>
								<p class="right"><i class="fa fa-thumbs-down" aria-hidden="true"></i> <span class="span1">10</span></p>
							<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					<h3> Etiam iaculis metus vitae lectus imperdiet.</h3>
						<p>Ut pulvinar erat in eros sodales tristique. Pellentesque risus dui, tincidunt id tincidunt eget, venenatis id lorem. tincidunt </p>
						<div class="more">
							<a href="#" data-toggle="modal" data-target="#myModal" >read more</a>
						</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
</section>
<!-- news -->

@endsection
<?php
//$des = read_file("./files/des-{$tourview->id}.txt");
//                                                   
//
//echo $des = word_limiter($des, 15);
?>