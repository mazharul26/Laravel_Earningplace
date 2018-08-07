
@extends("deshboard")
@section("content")

<style>
    .mytext{
        width: 100%;
        text-align: left;
      text-combine-upright: all;
    }
</style>
<br/><br/>

<br/><br/> <br/><br/> <br/><br/>

<div class="container">
    <div class="row  ">

        <div class="col-sm-9 well " style="width:80%;float: right">

            <form class="" action="{{url('/fiver_details/{id}')}}" method="post" enctype="multipart/form-data" >

                @csrf
                <p>Gigs Title</p>
                <table class="table table-striped" border="0"  style="margin-top:0%;">

                    <tr>
                        <th rowspan="5">Number of Page</th>
                        <th>Basic</th>
                    </tr>

                    <tr>
                        <td><textarea class="mytext" value="" name="basic_title" placeholder="" disabled>{{$allgigsprising->basic_title}}</textarea></td>
                    </tr>

                    <tr>
                        <td><textarea class="mytext"  name="gigs_description" disabled>
                                <?php
                                $str = File::get(storage_path("app/files1/$allgigsprising->id.txt"));
                                echo$str;
                                ?></textarea></td>
                    </tr>



                    <?php
//                            $str = File::get(storage_path("app/files/$dir/{$product->id}.txt"));
//                            $str1 =(explode("fdksajfi&^cccd2", $str));
                    //echo str_limit($str, 100)
                    ?>



                    <tr>
                        <td>

                            <select name="delivery_id">

                                @foreach($alldelivery as $delivery)
                                @if($delivery->id==$allgigsprising->delivery_id)
                                <option selected="" value="{{$delivery->id}}" disabled>{{$delivery->delivery_time}}</option>
                                @endif
                                @endforeach
                            </select>

                        </td>

                    </tr>

                    <tr>
                        <td><input type="text" name="page_number" value="{{$allgigsprising->number_pages}}" placeholder="" disabled/></td>
                    </tr>
                    <tr>
                        <th>Gig Picture</th>
                        <td> <img src="{{url('/')}}/public/images1/{{$allgigsprising->id}}.{{$allgigsprising->picture}}" class="img-responsive coupon-img img-rounded" width="250"/></td>
                    </tr>
                    <tr>
                        <th>Design Customization</th>
                        <th><input type="checkbox" value="{{$allgigsprising->designcustomization}}" name="customization" checked="" disabled/></th>
                    </tr>
                    <tr>
                        <th>Transmition</th>
                        <th><input type="checkbox" value="transmition" name="transmition" checked="" disabled/></th>
                    </tr>
                    <tr>
                        <th>Content Upload</th>
                        <th><input type="checkbox" value="upload" name="upload" checked="" disabled=""/></th>
                    </tr>
                    <tr>
                        <th>Number of Products</th>
                        <th><input type="text" value="{{$allgigsprising->product_number }}Pages" name="product_number"  disabled/></th>
                    </tr>
                    <tr>
                        <th>Revisions</th>
                        <td><select name="revition_id">
                                  @foreach($allrevition as $revition)  
                                @if($revition->id == $allgigsprising->revision_id)
                                <option selected="" disabled>{{$revition->revision_type}}</option>
                                
                                @endif
@endforeach

                            </select></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <th><input type="text" value="${{$allgigsprising->price}}" name="price" placeholder="" disabled /></th>
                    </tr>
                </table>







                <br/><br/>
                <input type="submit" name="sub" class="btn btn-success" value="Send Order" />
                <a href="#" class="btn btn-danger" style="float: right">Canceal</a>
            </form>
            <?php
                
                $db = new mysqli("localhost", "root", "", "fiver_place");
                    $add=$allgigsprising->id;
                    $add_view =$allgigsprising->views;
                    $new_add_view =$add_view+1;
                    $sqql = $db->query("UPDATE fiver_gigs_prissings set views =$new_add_view where id=$add");
                 
           
                ?>
              

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