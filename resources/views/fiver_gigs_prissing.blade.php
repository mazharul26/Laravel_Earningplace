
@extends("deshboard")
@section("content")

<style>
 
</style>
<br/><br/>

 <br/><br/> <br/><br/> <br/><br/>

<div class="container">
    <div class="row  ">
 
        <div class="col-sm-9 well " style="width:80%;float: right">
       
            <form class="" action="{{url('/fiver_gigs_prissing')}}" method="post" enctype="multipart/form-data" >
                 
                @csrf
                 <p>Gigs Title</p>
                <table class="table table-striped" border="0"  style="margin-top:0%;">
                        
                    <tr>
                        <th rowspan="5">Number of Page</th>
                        <th>Basic</th>
                    </tr>
                 
                    <tr>
                        <td><textarea name="basic_title" placeholder="Gig Title"></textarea></td>
                    </tr>
               
                    <tr>
                        <td><textarea name="gigs_description" placeholder="Gig Description"></textarea></td>
                    </tr>
                 
                    <tr>
                        <td><select name="delivery_id"><option>Choice Delevery</option>
                            
                            @foreach($alldelivery as $delivery)
                            <option value="{{$delivery->id}}">{{$delivery->delivery_time}}</option>
                            
                            @endforeach
                            
                            
                            </select></td>
                         
                    </tr>
               
                    <tr>
                        <td><input type="text" name="page_number" placeholder="Number of page" /></td>
                    </tr>
                     <tr>
                          <th>Gig Picture</th>
                          <td><input type="file" name="picture" /></td>
                    </tr>
                    <tr>
                        <th>Design Customization</th>
                        <th><input type="checkbox" value="Customization" name="customization"/></th>
                    </tr>
                        <tr>
                        <th>Transmition</th>
                        <th><input type="checkbox" value="transmition" name="transmition"/></th>
                    </tr>
                    <tr>
                        <th>Content Upload</th>
                        <th><input type="checkbox" value="upload" name="upload"/></th>
                    </tr>
                      <tr>
                          <th>Number of Products</th>
                       <th><input type="text" value="" name="product_number" placeholder="At least 4 product" /></th>
                    </tr>
                     <tr>
                          <th>Revisions</th>
                         <td><select name="revition_id"><option>Select Revision</option>
                           @foreach($allrevition as $revition)

                            <option value="{{$revition->id}}">{{$revition->revision_type}}</option>
                            
                            @endforeach          


</select></td>
                    </tr>
                     <tr>
                          <th>Price</th>
                          <th><input type="text" value="" name="price" placeholder="At least $5" /></th>
                    </tr>
                </table>
                
                
                
             
            
             

                <br/><br/>
                <input type="submit" name="sub" class="btn btn-success" value="Save and Continue" />
                <a href="#" class="btn btn-danger" style="float: right">Canceal</a>
            </form>
        </div>
    </div>
</div>
<br/><br/>   <br/><br/><br/><br/>   <br/><br/><br/><br/>   <br/><br/><br/><br/> <br/><br/>  
<script src="{{url('/')}}/public/fselect/multipleselect.js"></script>

<script>





</script>

<script>
    $('.select').multipleSelect({
        styler: function (value) {
            if (value == '1') {
                return 'background-color: #ffee00; color: #ff0000;';
            }
            if (value == '6') {
                return 'background-color: #000; color: #fff;';
            }
        }
    });
</script>




@endsection