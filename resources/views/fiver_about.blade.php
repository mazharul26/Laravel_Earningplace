 
@extends("master")
@section("content")
<!-- about -->	
<section class="about" id="about">
    <div class="container">
        <div class="heading">
            <h2>about</h2>
        </div>
        <div class="col-md-8 about-left">
            <div class="about-left-grids">
                <h3>Quisque nisi elit, porttitor ut porta id, eleifend vel mauris.</h3>
                <div class="about-left-top">
                    <div class="col-md-2 gridicon">
                        <i class="fa fa-compass" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-4 gridtext">
                        <h4>Lorem Ipsum</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vel.</p>
                    </div>
                    <div class="col-md-2 gridicon">
                        <i class="fa fa-fax" aria-hidden="true"></i>

                    </div>
                    <div class="col-md-4 gridtext">
                        <h4>Quisque nisi</h4>
                        <p>Ut pulvinar erat in eros sodales tristique. Pellentesque risus dui. vel.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="about-left-bottom">
                    <div class="col-md-2 gridicon">
                        <i class="fa fa-hand-rock-o" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-4 gridtext">
                        <h4>Dolor sit</h4>
                        <p>Nam diam leo, tincidunt et elit nec, convallis malesuada lacus. Integer.</p>
                    </div>
                    <div class="col-md-2 gridicon">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-4 gridtext">
                        <h4>Congue vel</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In congue vel qam.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 about-right">
            <img src="{{url('/')}}/public/fontend/images/tran-mau-tri-tam-57714.jpg" alt="" />
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<!-- about -->
@endsection