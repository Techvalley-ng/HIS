@extends('layouts.login')
@section('login_temp')
    
<div class="container">
    <!--information system name-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="titlename text-center">
                HOSPITAL INFORMATION SYSTEM
            </div>
        </div>
    </div>
    <!--end of information system name-->
    
    <!--wing name-->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="wingname text-center">
                <img src="/image/airplan.png" class="img-fluid c130">
                    NIGERIA AIRFORCE 
                <img src="/image/airplan.png" class="img-fluid">
            </div>
        </div>
    </div>
    <!--end of wing name-->
    <!--system login box-->
       <div class="row">
           <div class="col-md-12 col-sm-12">
                <div class="row justify-content-md-center">
                    <div class="col-md-4 col-sm-12">
                        {!! Form::open(['action'=>'Loginprocess@LoginAuth', 'method'=>'POST','id'=>'nafhislogin', 'class'=>'login']) !!}
                            {{form::text('username','',['class'=>'form-control username','placeholder'=>'Enter User name'])}}        
                            {{form::password('password',['class'=>'form-control password','placeholder'=>'Enter Password'])}}
                            <div class="row">
                                <div class="col-10" style="padding-right:0px;">
                                     {{form::text('token','',['class'=>'form-control token','placeholder'=>'Enter Token Number'])}}
                                </div>
                                <div class="col-2" style="padding-left:0px;">
                                    {{form::button('<i class="fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i>',['class'=>'form-control sumite-icon', 'type'=>'submit'])}}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
           </div>
       </div>
    <!--end of login box-->


    <!--nierian airforce logo-->
    <div class="row">
        <div class="col">
            <img src="image/logo_NAF.png" class="img-fluid img-thumbnail rounded mx-auto d-block float-center logo_NAF">
        </div>
    </div>
    <!--end of nigeria airforce logo-->
    
        


@endsection