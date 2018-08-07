
@extends("deshboard")
@section("content")
<style>
    .user-row {
        margin-bottom: 14px;
    }

    .user-row:last-child {
        margin-bottom: 0;
    }

    .dropdown-user {
        margin: 13px 0;
        padding: 5px;
        height: 100%;
    }

    .dropdown-user:hover {
        cursor: pointer;
    }

    .table-user-information > tbody > tr {
        border-top: 1px solid rgb(221, 221, 221);
    }

    .table-user-information > tbody > tr:first-child {
        border-top: 0;
    }


    .table-user-information > tbody > tr > td {
        border-top: 0;
    }
    .toppad
    {margin-top:20px;
    }

</style>


<br><br>

<div class="container" id="page-wrapper">
    <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
            <a href="#" >Edit Profile</a>

        
                  <a class="fa fa-times-rectangle-o" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                
            <br>
            <p class=" text-info">
                <?php
                
                date_default_timezone_set("Asia/Dhaka");
                
                echo "Today is " . date("Y-m-d h:i:sa") . "<br>";
                ?> </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">

                        @guest

                        @else
                        <h3>   {{ Auth::user()->name }} </h3>

                        @endguest
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center">
                            <span class="prfil-img"><img src="{{url('/')}}/public/fontenddash/images/2.jpg" alt=""> </span> 
                        </div>

                        <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                          <dl>
                            <dt>DEPARTMENT:</dt>
                            <dd>Administrator</dd>
                            <dt>HIRE DATE</dt>
                            <dd>11/12/2013</dd>
                            <dt>DATE OF BIRTH</dt>
                               <dd>11/12/2013</dd>
                            <dt>GENDER</dt>
                            <dd>Male</dd>
                          </dl>
                        </div>-->
                        <div class=" col-md-9 col-lg-9 "> 
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>Department:</td>
                                        <td>Programming</td>
                                    </tr>
                                    <tr>
                                        <td>Hire date:</td>
                                        <td>06/23/2013</td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td>01/24/1988</td>
                                    </tr>

                                    <tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>Male</td>
                                    </tr>
                                    <tr>
                                        <td>Home Address</td>
                                        <td>Kathmandu,Nepal</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                                    </tr>
                                <td>Phone Number</td>
                                <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                                </td>

                                </tr>

                                </tbody>
                            </table>

                            <a href="#" class="btn btn-primary" style="">Face Book Login</a>
                            <a href="#" class="btn btn-primary" style="">Google Login</a>

                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="fa fa-envelope-o"></i></a>
                    <span class="pull-right">
                        <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                        <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="fa fa-user"></i></a>
                    </span>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        var panels = $('.user-infos');
        var panelsButton = $('.dropdown-user');
        panels.hide();

        //Click dropdown
        panelsButton.click(function () {
            //get data-for attribute
            var dataFor = $(this).attr('data-for');
            var idFor = $(dataFor);

            //current button
            var currentButton = $(this);
            idFor.slideToggle(400, function () {
                //Completed slidetoggle
                if (idFor.is(':visible'))
                {
                    currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                } else
                {
                    currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                }
            })
        });


        $('[data-toggle="tooltip"]').tooltip();

        $('button').click(function (e) {
            e.preventDefault();
            //alert("This is a demo.\n :-)");
        });
    });
</script>
@endsection