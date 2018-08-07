@extends("master")
@section("content")
<!-- Slider -->
<div class="slider w3layouts agileits">
    <ul class="rslides w3layouts agileits" id="slider">
        <li>
            <img src="{{url('/')}}/public/fontend/images/b2.jpg" alt="Affiliation">
            <div class="layer w3layouts agileits">
                <h3>fringilla id ipsum sit.</h3>
                <p>Phasellus fringilla faucibus ipsum, id pharetra massa consequat ac. Nullam at tempus urna.</p>
                <a href="#" data-toggle="modal" data-target="#myModal" >read more</a>
            </div>
        </li>
        <li>
            <img src="{{url('/')}}/public/fontend/images/b1.jpg" alt="Affiliation">
            <div class="layer w3layouts agileits">
                <h3>Suspendisse potenti Phase.</h3>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece.</p>
                <a href="#" data-toggle="modal" data-target="#myModal" >read more</a>
            </div>
        </li>
        <li>
            <img src="{{url('/')}}/public/fontend/images/b3.jpg" alt="Affiliation">
            <div class="layer w3layouts agileits">
                <h3>Lorem ipsum dolor sit amet.</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                <a href="#" data-toggle="modal" data-target="#myModal" >read more</a>
            </div>
        </li>
    </ul>
    <!-- banner bottom -->
    <div class="banner-grids">
        <div class="container">
            <div class="col-md-4 banner-grid1">
                <a href="#" data-toggle="modal" data-target="#myModal"><h3>Quisque nisi elit, porttitor ut porta id. Nullam at tempus.</h3></a>
                <h4>1/3/2017</h4>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 banner-grid2">
                <a href="#" data-toggle="modal" data-target="#myModal"><h3>Nullam sit amet ligula non ante dapibus facilisis. Donec.</h3></a>
                <h4>2/3/2017</h4>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 banner-grid3">
                <a href="#" data-toggle="modal" data-target="#myModal"><h3> Pellentesque sit amet lacus sit amet magna pellentesque.</h3></a>
                <h4>3/3/2017</h4>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- banner bottom -->
</div>
<!-- //Slider -->

@endsection