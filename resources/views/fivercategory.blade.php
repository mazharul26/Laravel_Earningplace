
@extends("deshboard")
@section("content")

     <br/><br/>     <br/><br/>
<div class="main-content">
    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">

    </div>

    <div id="page-wrapper">
        <div class="main-page login-page ">
            <h2 class="title1">Category</h2>
            <div class="widget-shadow">
                <div class="login-body">
                    <form method="POST" action="{{url('/fiverr-category')}}" >
                        @csrf
                        <input id="email" type="text" placeholder="Enter Your Cataegory"  required autofocus>


                           <br/><br/>
                        <button type="submit" class="btn btn-primary">
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


@endsection