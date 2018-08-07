

@extends("deshboard")

@section("content")

<style>
    .test_table{
        padding-right: 0px;
        margin-right: 0px;
    }
</style>
<br/><br/>
<div id="page-wrapper">
    <div class="main-page general">
        <h2 class="title1">General Elements</h2>
        <div class="panel-info widget-shadow">


            <div class="container-fluid">
                
                    <div class="panel-body" >
                        <table class="table table-striped test_table" border="1" style="text-align: center">
                            <tr >
                                <th style="text-align: center">Title</th>
                                <th style="text-align: center">Time Duration</th>
                                <th style="text-align: center">Price</th>
                                <th style="text-align: center">Date/Time</th>
                                 <th style="text-align: center">Request-Send</th>
                            </tr>
                        </table>
                  
                </div>
            </div>
        </div>
    </div>
</div>  

@endsection
