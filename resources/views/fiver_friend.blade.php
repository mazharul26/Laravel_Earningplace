@extends("deshboard")
@section("content")



<br/><br/><br/><br/><br/><br/><br/><br/>

<div class="container">
   <div class="row " id="page-wrapper">

        <div class="col-sm-9 well ">
            
              
                    <div class="panel">
                        <div class="panel-heading">
                            List of all Friends
                        </div>
                        @forelse ($friends as $friend)
                        <a href="{{ route('fiver_show',$friend->id) }}" class="panel-block" style="justify-content: space-between;">
                            <div>{{ $friend->name }}</div>
                            <onlineuser v-bind:friend="{{ $friend }}" v-bind:onlineusers="onlineUsers"></onlineuser>
                        </a>
                        @empty
                        <div class="panel-block">
                            You don't have any friends
                        </div>
                        @endforelse
                    </div>
                
       

        </div>
    </div>
</div>









@endsection