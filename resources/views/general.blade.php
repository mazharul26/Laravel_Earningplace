

@extends("deshboard")

@section("content")
<style>
    .coupon {
        border: 3px dashed #bcbcbc;
        border-radius: 10px;
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", 
            "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
        font-weight: 300;
    }

    .coupon #head {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        min-height: 56px;
    }

    .coupon #footer {
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    #title .visible-xs {
        font-size: 12px;
    }

    .coupon #title img {
        font-size: 30px;
        height: 30px;
        margin-top: 5px;
    }

    @media screen and (max-width: 500px) {
        .coupon #title img {
            height: 15px;
        }
    }

    .coupon #title span {
        float: right;
        margin-top: 5px;
        font-weight: 700;
        text-transform: uppercase;
    }

    .coupon-img {
        width: 100%;
        margin-bottom: 15px;
        padding: 0;
    }

    .items {
        margin: 15px 0;
    }

    .usd, .cents {
        font-size: 20px;
    }

    .number {
        font-size: 40px;
        font-weight: 700;
    }

    sup {
        top: -15px;
    }




    .disclosure {
        padding-top: 15px;
        font-size: 11px;
        color: #bcbcbc;
        text-align: center;
    }

    .coupon-code {
        color: #333333;
        font-size: 11px;
    }

    .exp {
        color: #f34235;
    }

    .print {
        font-size: 14px;
        float: right;
    }



    /*------------------dont copy these lines----------------------*/
    body {
        font-family: "HelveticaNeue-Light", "Helvetica Neue Light", 
            "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
        font-weight: 300;
    }
    .row {
        margin: 30px 0;
    }

    #quicknav ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
        text-align: center;
    }

    #quicknav ul li { 
        display: inline; 
    }

    #quicknav ul li a {
        text-decoration: none;
        padding: .2em 1em;
    }

    .btn-danger, 
    .btn-success, 
    .btn-info, 
    .btn-warning, 
    .btn-primary {
        width: 105px;
    }

    .btn-default {
        margin-bottom: 40px;
    }
    .picture_width{
        width:500px;
        height: 200px;
    }
    /*-------------------------------------------------------------*/
</style>

<!-- main content start-->
<div id="page-wrapper">
    <div class="main-page general">
        <h2 class="title1">General Elements</h2>
        <div class="panel-info widget-shadow">


            <div class="container">

                <div class="row"><h1 class="text-center">Wordpress webside</h1>
                    <p class="text-center">Gigs You’ve Added To Your Favorites</p>
                </div>


                @foreach($allgigsprossing as $gigsprissing )
                <div class="col-md-5" style="padding:20px">
                    <div class="panel panel-default coupon">

                        <div class="panel-body" >
                        <!--<img src="http://i.imgur.com/e07tg8R.png" class="coupon-img img-rounded">-->
                            <a href="{{url('/fiver_details')}}/{{$gigsprissing->id}}"><img src="{{url('/')}}/public/images1/{{$gigsprissing->id}}.{{$gigsprissing->picture}}" class="img-responsive coupon-img img-rounded picture_width" /></a>
                            <div class="col-md-9">
                                <ul class="items">
                                    <li>{{$gigsprissing->basic_title}}</li>
                                    <li>{{$gigsprissing->designcustomization}}</li>
                                    <li>{{$gigsprissing->revision_type}}</li>

                                </ul>
                            </div>
                            <div class="col-md-3">

                            </div>
                            <div class="col-md-9">
                                <a href="{{url('/fiver_details')}}/{{$gigsprissing->id}}" class="btn btn-success">Read More</a>
 

                            </div>
                            <div class="col-md-3">
                                <div class="offer">

                                    <span class="number">${{$gigsprissing->price}}</span>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                @endforeach
          
            </div>

            <div class="clearfix"> </div>
        </div>

    </div>
</div>
@endsection