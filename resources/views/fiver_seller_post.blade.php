@extends("deshboard")
@section("content")
<link href="{{url('/')}}/public/fselect/fmultiselect.css" rel="stylesheet" />
<style>
    .subcat{
        float: left;
        padding: 0;
        margin: 0;
        width: 45%;

    }
    .floatleft{
        float: right;
        padding: 0;
        margin: 0;
        width: 45%;
    }

    .text_title{
        width: 100%;
    }

</style>


<br/><br/>   <br/><br/>  <br/><br/><br/><br/>
<div class="container w3-container">
    <div class="row  ">
        <div class="col-sm-3" style="width:"></div>
        <div class="col-sm-9 well " style="width:80%;float: right">
            <form class="" action="{{url('/fiver_seller_post')}}" method="post"  enctype="multipart/form-data" >
                @csrf
                <p>Gigs Title</p>
                <textarea class="text_title" name="gigs_title">I will</textarea>
                <br/><br/>
                <input type='file' name='picture' value="" class='subcat' />

                <br/><br/>
                <select class="category form-control1 subcat" name="category">
                    <option value="0">Choice Category</option>
                    @foreach($allcat as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>

                    @endforeach
                </select>
                <select class="subcategory form-control1 floatleft" name="subcategory">
                    <option value="0">Choice SubCategory</option>

                </select>
                <br/><br/>
                <select class="subcategory form-control1 subcat" name="product">
                    <option value="0">Choice Product</option>
                    @foreach($allproduct as $product)
                    <option value="{{$product->id}}">{{$product->product_name}}</option>
                    @endforeach
                </select>
              
             <select class="subcategory form-control1 floatleft" name="delivery">
                    <option value="0">Choice Delivery</option>
                    @foreach( $alldelivery as $delivery)
                    <option value="{{$delivery->id}}">{{$delivery->delivery_time}}</option>
                    @endforeach
                </select>
                <br/><br/>         <br/><br/>        
           
             
                <input type="hidden" name="users_id" value="{{Auth::user()->id}}" 
                    
                    ////kkkk   
                <input type="hidden" value="<?php echo date("Y.m.d")?>" name="mydate"  />
                 <input type="text" value="" name="price" placeholder="At least $5" />
                  <br/><br/>
                <input type="submit" name="sub" class="btn btn-success" value="Job POST" />
                <a href="#" class="btn btn-danger" style="float: right">Canceal</a>
            </form>
        </div>
    </div>
</div>
<br/><br/>   <br/><br/><br/><br/>   <br/><br/><br/><br/>   <br/><br/><br/><br/> <br/><br/>  




<script>


</script>


<script src="{{url('/')}}/public/fselect/multipleselect.js"></script>

<script>

    $(document).ready(function () {
   
    if ($("select[name=category]").val() == 0){

    $(".subcategory").hide();
    $(".category>option").click(function () {
    $(".subcategory").show(1000);
    });
    }
    });
    $(document).ready(function () {
    $(".delivery").hide();
    $(".product >option").click(function () {
    $(".delivery").show(1000);
    });
    });</script>

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
    });</script>


<script>
    // kam

    function akam(categoryValue){
    category = categoryValue;
    if (category == 0) {
    $("select[name='subcategory']").children().remove();
    $("select[name='subcategory']").prop('disabled', true);
    $("select[name='subcategory']").append("<option value='0'>Select City</option>");
    // category loop start
    @foreach($allcat as $category)
    } else if (category == {{$category->id }}) {
  
    $("select[name='subcategory']").prop('disabled', false);
    $("select[name='subcategory']").children().remove();
    // subcategory loop start for $category->id
    @foreach($allsubcat as $subcategory)
            @if ($subcategory->categories_id == $category->id)
            $("select[name='subcategory']").append("<option value='{{ $subcategory->id }}'>{{ $subcategory->subcat_name}}</option>");
    @endif
            @endforeach
            @endforeach
            // category loop end
    }
    }

    $(document).ready(function () {

    $("select[name='subcategory']").prop('disabled', false);
    // category ager theke ekta load thake 
    akam($("select[name=category]").val());
    // category chanbge korle
    $("select[name=category]").change(function () {
    akam($(this).val());
    });
    });


</script>
















@endsection