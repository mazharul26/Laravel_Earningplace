@extends("deshboard")
@section("content")
 

<br/><br/>

<div class="main-content">
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">

    </div>

    <div id="page-wrapper">
        <div class="main-page login-page ">
            <h2 class="title1">Paypal Payment</h2>
            <div class="widget-shadow">
                <div class="login-body">
                @if ($message = Session::get('success'))
            <div class="alert alert-success">
               {{ $message }}
            </div>
            <?php Session::forget('success'); ?>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger">
               {{ $message }}
            </div>
            <?php Session::forget('error'); ?>
            @endif
                   
            <form class="w3-container w3-card-4 w3-padding-16" method="POST" id="payment-form" action="{!! URL::to('paypal') !!}">
               {{ csrf_field() }}
               <br />
               <h3 style="margin-bottom: 10px;">Payment Form</h3>
               <label class="w3-text-blue"><b>Enter Amount</b></label>
               <input class="w3-input w3-border" id="amount" type="text" name="amount"  style="margin-bottom: 15px; width: 250px"></p>
               <button class="w3-btn w3-blue">Pay with PayPal</button>
            </form>
                    <br/><br/>
                    
                </div>
            </div>

        </div>
    </div>
    <!--footer-->


@endsection
