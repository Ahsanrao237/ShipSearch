@extends('admin/layout/layout')

@section('page_title','Add Post')

@section('container')

<div class="">
    <div class="page-title">
        <div class="title_left">
            <h1>Cargo <span class="size16">Type</span></h1>
            <a href="/admin/cargo/view" class="btn btn-light border pt-2 pb-2 pl-3 pr-3">
                <i class="fas fa-eye"></i><br>
                <span class="size13">View All</span>
            </a>
            <a href="/admin/cargo/add" class="btn btn-light border pt-2 pb-2 pl-3 pr-3">
                <i class="fas fa-plus"></i><br>
                <span class="size13">Add New</span>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="x_panel p-0">
                <p class="p-3 bg-light cl_bd size16 mb-0">Fill the required details</p>
                <div class="x_content p-3">
                    <br />
                    <form method="post" action="/admin/post/add_post" class="form-horizontal form-label-left"
                        enctype="multipart/form-data">
                        <!-- <form method="post" action="{{url('/admin/post/add_post')}}" class="form-horizontal form-label-left"> -->
                        @csrf
                        <div class="form-group col-sm-4">
                            <label for="">Cargo Name</label>
                            <input type="text" required name="cargo_name" class="form-control">
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4">
                            <label for="">Cargo Type</label>
                            <select name="cargo_type_id" required class="form-control">
                                <option value="-1" disabled selected>Choose</option>
                                @foreach ($cargo_type as $row)
                                <option value="{{$row->cargo_type_id}}">{{$row->cargo_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4">
                            <label for="">Loading Region</label>
                            <select name="loading_region_id" id="loading_region_id" required class="form-control">
                                <option value="-1" disabled selected>Choose</option>
                                @foreach ($cargo_type as $row)
                                <option value="{{$row->cargo_type_id}}">{{$row->cargo_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Loading Country</label>
                            <select name="loading_country_id" id="loading_country_id" required class="form-control">
                                <option value="-1" disabled selected>Choose</option>
                                @foreach ($cargo_type as $row)
                                <option value="{{$row->cargo_type_id}}">{{$row->cargo_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Loading Port#1</label>
                            <select name="loading_port_id_1" id="loading_port_id_1" required class="form-control">
                                <option value="-1" disabled selected>Choose</option>
                                @foreach ($cargo_type as $row)
                                <option value="{{$row->cargo_type_id}}">{{$row->cargo_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Loading Port#2</label>
                            <select name="loading_port_id_2" id="loading_port_id_2" required class="form-control">
                                <option value="-1" disabled selected>Choose</option>
                                @foreach ($cargo_type as $row)
                                <option value="{{$row->cargo_type_id}}">{{$row->cargo_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Discharge Region</label>
                            <select name="discharge_region_id" id="discharge_region_id" required class="form-control">
                                <option value="-1" disabled selected>Choose</option>
                                @foreach ($cargo_type as $row)
                                <option value="{{$row->cargo_type_id}}">{{$row->cargo_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Discharge Country</label>
                            <select name="discharge_country_id" id="discharge_country_id" required class="form-control">
                                <option value="-1" disabled selected>Choose</option>
                                @foreach ($cargo_type as $row)
                                <option value="{{$row->cargo_type_id}}">{{$row->cargo_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Discharge Port#1</label>
                            <select name="discharge_port_id_1" id="discharge_port_id_1" required class="form-control">
                                <option value="-1" disabled selected>Choose</option>
                                @foreach ($cargo_type as $row)
                                <option value="{{$row->cargo_type_id}}">{{$row->cargo_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Discharge Port#2</label>
                            <select name="discharge_port_id_2" id="discharge_port_id_2" required class="form-control">
                                <option value="-1" disabled selected>Choose</option>
                                @foreach ($cargo_type as $row)
                                <option value="{{$row->cargo_type_id}}">{{$row->cargo_type_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Laycan Date From</label>
                            <div class="input-group date" data-provide="datepicker" data-date-start-date="0d"
                                data-date-format="dd-mm-yyyy">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right datepicker" name="laycan_date_from"
                                    value="<?php //echo date('d-m-Y'); ?>">
                            </div>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Laycan Date To</label>
                            <div class="input-group date" data-provide="datepicker" data-date-start-date="0d"
                                data-date-format="dd-mm-yyyy">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right datepicker" name="laycan_date_to"
                                    value="<?php //echo date('d-m-Y'); ?>">
                            </div>
                        </div>
                        <!-- -->
                        <div class="col-sm-4 mt-4">
                            <div class="form-group col-sm-6">
                                <label for="">Quantity</label>
                                <input type="text" required name="quantity" class="form-control">
                            </div>
                            <!-- -->
                            <div class="form-group col-sm-6">
                                <label for="">Unit</label>
                                <select name="unit_id" required class="form-control">
                                    <option value="-1" disabled selected>Choose</option>
                                    @foreach ($cargo_type as $row)
                                    <option value="{{$row->cargo_type_id}}">{{$row->cargo_type_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Max LOA</label>
                            <input type="text" required name="max_loa" class="form-control">
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Max Draft</label>
                            <input type="text" required name="max_draft" class="form-control">
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Max Height</label>
                            <input type="text" required name="max_height" class="form-control">
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Commission</label>
                            <input type="text" required name="commision" class="form-control">
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Combinable</label>
                            <select name="combinable" required class="form-control">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Over Age</label>
                            <select name="over_age" required class="form-control">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Hazmat</label>
                            <select name="hazmat" required class="form-control">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!-- -->
                        <div class="col-sm-4 mt-4">
                            <div class="form-group col-sm-6">
                                <label for="">Loading/Discharge Rates</label>
                                <input type="text" required name="loading_discharge_rates" class="form-control">
                            </div>
                            <!-- -->
                            <div class="form-group col-sm-6">
                                <label for="">Loading/Discharge Unit</label>
                                <select name="loading_discharge_unit_id" required class="form-control">
                                    <option value="-1" disabled selected>Choose</option>
                                    @foreach ($cargo_type as $row)
                                    <option value="{{$row->cargo_type_id}}">{{$row->cargo_type_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Loading Equipment Req</label>
                            <input type="text" required name="loading_equipment_req" class="form-control">
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Gear Lifting Capacity</label>
                            <input type="text" required name="gear_lifting_capacity" class="form-control">
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Loading/Discharge Equipment Req</label>
                            <select name="loading_discharge_equipment_req[]" multiple required class="form-control">
                                <option value="Gears">Gears</option>
                                <option value="Conveyor Belt">Conveyor Belt</option>
                                <option value="Pipes/Hoses">Pipes/Hoses</option>
                                <option value="Pallets">Pallets</option>
                                <option value="Dunnage">Dunnage</option>
                                <option value="Pontoon Cover">Pontoon Cover</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Additional Info</label>
                            <input type="text" required name="additional_info" class="form-control">
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Brocker Name</label>
                            <input type="text" name="brocker_name" class="form-control">
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Brocker Contact #</label>
                            <input type="text" name="broacker_contact" class="form-control">
                        </div>
                        <!-- -->
                        <div class="form-group col-sm-4 mt-4">
                            <label for="">Brocker Email</label>
                            <input type="email" name="broacker_email" class="form-control">
                        </div>
                        <!-- -->

                        <div class="col-sm-12">
                            <hr>
                            <div class="">
                                <button type="submit" class="btn btn-info">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection