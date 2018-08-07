
@extends("deshboard")
@section("content")

<br/><br/>     <br/><br/>
<div class="main-content">
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">

    </div>

    <div id="page-wrapper">
        <div class="main-page login-page ">
            <h2 class="title1">GigMetadata-Type</h2>
            <div class="widget-shadow">
                <div class="login-body">

                    <form method="POST" action="{{url('/fiver_gigmetadata')}}" >
                        @csrf
                        <input id="email"  class="subcat" type="text"  name ='metadata_name' placeholder="Enter Your Service"  required autofocus><br/><br/>
                        <select name="subcategory_name" class="subcat">
                            <option value="0">Choice SubCategory</option>

                            @foreach($allsubcat as $subcat)


                            <option value="{{$subcat->id}}">{{$subcat->subcat_name}}</option>


                            @endforeach
                        </select>


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
        <h2 class="title1">GigMetadata-Type</h2>
        <div class="widget-shadow">
            <div class="login-body">

                <table class="table table-striped" style="width: 100%" border="1">
                    <tr>
                        <th>ID</th>

                        <th>SubCategory</th>
                        <th>Service</th>
                    </tr>
                    @foreach($allgigmeta as $gigmeta)
                    <tr>
                        <td>{{$gigmeta->id}}</td>
                        <td>{{$gigmeta->metadata_name}}</td>
                        <td>{{$gigmeta->subcat_name}}</td>
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
            var subcat = $(this).text();

            alert(subcat)
        });
    });

</script>

@endsection