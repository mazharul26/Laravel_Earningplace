
@extends("deshboard")
@section("content")

<br/><br/>     <br/><br/>
<div class="main-content">
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">

    </div>

    <div id="page-wrapper">
        <div class="main-page login-page ">
            <h2 class="title1">Delivery-Duration</h2>
            <div class="widget-shadow">
                <div class="login-body">

                    <form method="POST" action="{{url('/fiver_delivery_duration')}}" >
                        @csrf
                        <input id="email" type="text"  name ='delivery_time' placeholder="Enter Your Cataegory"  required autofocus>


                        <br/><br/>
                        <button type="submit" class="btn btn-primary" id='submit'>
                            {{ __('Save') }}
                        </button>

                        <br/><br/>

                    </form>
                    <br/><br/>

                </div>
            </div>

        </div>
    </div>

</div>

<div id="page-wrapper">
    <div class="main-page login-page ">
        <h2 class="title1">Delivery-Duration</h2>
        <div class="widget-shadow">
            <div class="login-body">

                <table class="table table-striped" style="width: 100%" border="1">
                    <tr>
                        <th>ID</th>

                        <th>Name</th>
                    </tr>
                    @foreach($alldelivery as $delivery)

                    <tr>
                        <th>{{$delivery->id}}</th>
                        <th>{{$delivery->delivery_time}}</th>

                    </tr>

                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>
<script>

    $(document).ready(function () {
        $("#submit").click(function () {
            alert("Insert Successful");
        });
    });

</script>

@endsection