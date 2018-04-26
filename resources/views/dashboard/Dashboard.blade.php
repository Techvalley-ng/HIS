@extends('layouts.Dashboard')
@section('Dashboard_temp')

<div class="container-fluid">
    <div class="row top" style="margin-top:3em;">
        <div class="col-md-3" style="padding-left:0px; padding-right:0px;">
            <div class="menue-box">
                <a href="#" style="text-decoration:none; color:#ffffff">
                    <div class="tab text-nowrap">
                        <i class="fas fa-tachometer-alt" aria-hidden="true"></i>
                        &nbsp;Dashboard
                    </div>
                </a>
                <a href="#" style="text-decoration:none; color:#ffffff">
                    <div class="tab text-nowrap">
                        <i class="fab fa-codepen" aria-hidden="true"></i>
                        &nbsp;Add New Depertment
                    </div>
                </a>
                 <a href="#" style="text-decoration:none; color:#ffffff">
                    <div class="tab text-nowrap">
                        <i class="fas fa-address-card " aria-hidden="true"></i>
                        &nbsp;List Of Depertments / Delete
                    </div>
                </a>
                
                <a href="#" style="text-decoration:none; color:#ffffff">
                    <div class="tab text-nowrap">
                        <i class="fas fa-plus-square" aria-hidden="true"></i>
                        &nbsp;Add New Staff
                    </div>
                </a>
                <a href="#" style="text-decoration:none; color:#ffffff">
                    <div class="tab text-nowrap">
                        <i class="fas fa-list-alt" aria-hidden="true"></i>
                        &nbsp;List Of Staffs / Delete
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="row" style="margin-top:.5em">
                <div class="col">
                    <div class="dp-titl text-center">HUMAN RESOURCE DEPARTMENT (HR)</div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <img src="/image/profilepic/wali.jpg" class="img-fluid img-thumbnail user-profile" alt="Responsive image">
                </div>
                <div class="col-9">
                    <div class="row staff-bar" style="margin-left:1em">
                            <div class="col">STAFF INFORATION</div>
                            <div class="col text-right">LAST LOGIN: 1/14/2018 </div>
                    </div>
                    <div class="row" style="margin-left:.5em">
                        <div class="col-md-12">
                            <table class="table table-striped table-bordered table-hover table-sm">
                                <tr>
                                    <th>NAME</th>
                                    <td>ABUBAKAR BAKARI</td>
                                </tr>
                                <tr>
                                    <th>DEPARTMENT</th>
                                    <td>HR</td>
                                </tr>
                                <tr>
                                    <th>LEVEL / RANK</th>
                                    <td>NYSC</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-primary form-control logout">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>
                                &nbsp;LogOut
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>    