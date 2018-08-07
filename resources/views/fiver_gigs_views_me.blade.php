
@extends("deshboard")

@section("content")

<style>
    .test_table{
        padding-right: 0px;
        margin-right: 0px;
    }
    .picture_width{
        width:50px;
        height: 20px;
    }
</style>
<br/><br/>
<div id="page-wrapper">
    <div class="main-page general">

        <h2><a href="{{url('/fiver_gigs')}}" style="float:right;margin-right:15" class="title1 btn btn-success">Create Gigs</a> </h2>
        <h2 class="title1">General Elements</h2>
        <div class="panel-info widget-shadow">

            <h4>  <select style="float:right;" class="" >
                    <option>Last 3 days</option>
                    <option>Last 5 days</option>
                    <option>Last 7 days</option>
                    <option>Last 9 days</option>
                    <option>Last 15 days</option>
                    <option>Last 30 days</option>
                </select></h4>
            <h3>Active gigs</h3>

            <br/><br/>
            <div class="container-fluid">

                <div class="panel-body" >



                    <table class="table table-striped test_table" border="1" style="text-align: center">
                        <tr >
                            <th style="text-align: center" colspan="3">Gigs</th>
                            <th style="text-align: center">Impressions </th>
                            <th style="text-align: center">Clicks</th>
                            <th style="text-align: center">Views</th>
                            <th style="text-align: center">Orders</th>
                            <th style="text-align: center"  colspan="2">Cancellations</th>
                        </tr>
                        @foreach($allgigsprossing as $gigsprossing)
                        <tr >
                            <th style="text-align: center" ><input type="checkbox"/></th>
                            <th style="text-align: center" ><img src="{{url('/')}}/public/images1/{{$gigsprossing->id}}.{{$gigsprossing->picture}}" class="img-responsive coupon-img img-rounded picture_width" /></th>
                            <th style="text-align: center" >{{$gigsprossing->basic_title}}</th>
                            <th style="text-align: center">10 </th>
                            <th style="text-align: center">8</th>
                            <th style="text-align: center">{{$gigsprossing->views}}</th>
                            <th style="text-align: center">0</th>
                            <th style="text-align: center">0%</th>
                            <th style="text-align: right;border: 0"><select>
                                    <option></option>
                                    <option>Edit</option>

                                    <option>Delete</option>
                                    <option>Preview</option>
                                    <option>Share</option>
                                    <option>Pause</option>
                                    <option>Add Video</option>
                                </select></th>

                        </tr>

                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>  

@endsection
