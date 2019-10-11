@extends('state.main') 
@section('content')
<div class="container">
  <div id="ContentPlaceHolder1_PnlShow"  style="display: inline;">
    <div class="row">
      <div class="col-sm-12">
        <div class="box box-color orange box-condensed box-bordered">
          <div class="box-title">
            <div class="col-sm-6 col-md-6">
                <h3>UPDATE VEHICLE DETAILS </h3>
            </div>
            <div class="col-sm-6 col-md-6">
                <a class="btn btn-inverse pull-right" href="{{route('vehicledetails.index')}}">Back</a>
            </div>
            <div id="add-city-form">
             <form class="well well1 form-horizontal" method="post" action="{{route('vehicledetails.update',$edata->id)}}"  enctype="multipart/form-data">
              {{csrf_field()}}
              @method('PATCH')
              
                <div class="col-md-4 col-xl-4 mt-2">
                   <span style="color: #FF0000;font-size:15px;">*</span> <label for="Vehicle No.">Vehicle No.</label>
                    @error('vch_no')
                      <span class="text-danger pull-right" role="alert">
                          <strong style="font-size: smaller;">{{ "Please enter vehicle number" }}</strong>
                      </span>
                    @enderror
                   <input id="vch_no" name="vch_no" class="form-control  " value="{{old('vch_no') ?? $edata->vch_no}}" >

                </div>
                  
                <div class="col-md-4 col-xl-4 mt-2">
                    <span style="color: #FF0000;font-size:15px;">*</span> <label for="vehicle company">Vehicle Company</label>
                     @error('vch_comp')
                          <span class="text-danger pull-right" role="alert">
                              <strong style="font-size: smaller;">{{ "Please enter vehicle company" }}</strong>
                          </span>
                      @enderror
                     <div class="inputGroupContainer">

                       <div class="input-group">
                          <select id="vch_comp" name="vch_comp" class="selectpicker form-control">
                             <option disabled="true">Select..</option>
                            @foreach($company as $comp)
                                <option  value="{{$comp->id}}" 
                                	{{$edata->vch_comp == $comp->id ? 'selected' : ''}}>{{$comp->comp_name}}</option>
                            @endforeach    
                          </select>
                        </div>
                    </div> 
                </div>
                <div class="col-md-4 col-xl-4 mt-2">
                    <span style="color: #FF0000;font-size:15px;">*</span> <label for="vehicle_model ">Vehicle Model </label>
                    @error('vch_model')
                          <span class="text-danger pull-right" role="alert">
                              <strong style="font-size: smaller;">{{ "Please enter vehicle model" }}</strong>
                          </span>
                      @enderror
                       <div class="inputGroupContainer">
                           <div class="input-group">
                            @php ($vch = App\vch_model::find($edata->vch_model))                      
                              <select id="vch_model" name="vch_model" class="selectpicker form-control">
                                 <option disabled="true">Select..</option>
                              </select>
                            </div>
                        </div> 
                    </div>
            
                <div class="col-md-6 col-xl-6 mt-2">
                    <span style="color: #FF0000;font-size:15px;">*</span> <label for=" Vehicle Owner Name"> Vehicle Owner Name</label>
                    @error('owner_name')
                          <span class="text-danger pull-right" role="alert">
                              <strong style="font-size: smaller;">{{ "Please enter owner name" }}</strong>
                          </span>
                      @enderror
                    <input id="email" type="text" name="owner_name" class="form-control  " value="{{ old('owner_name') ?? $edata->owner_name}}">

                </div>
                <div class="col-md-6 col-xl-6 mt-2">
                    <span style="color: #FF0000;font-size:15px;">*</span> <label for="Owner Address">Owner Address</label>
                    @error('owner_addr')
                          <span class="text-danger pull-right" role="alert">
                              <strong style="font-size: smaller;">{{ "Please enter owner address" }}</strong>
                          </span>
                      @enderror
                    <input id="email1" type="text" class="form-control  " name="owner_addr" value="{{ old('owner_addr') ?? $edata->owner_addr}}">

                </div>

                <div class="col-md-6 col-xl-6 mt-2">
                    <span style="color: #FF0000;font-size:15px;">*</span> <label for=" Owner PAN Card No">Owner PAN Card No</label>
                    @error('owner_pan')
                          <span class="text-danger pull-right" role="alert">
                              <strong style="font-size: smaller;">{{ "Please enter pan card number" }}</strong>
                          </span>
                      @enderror
                    <input id="email" type="text" class="form-control" name="owner_pan" value="{{ old('owner_pan') ?? $edata->owner_pan}}">

                </div>                  
                 <div class="form-group">
                 </div>
                  <div class="row">
                    <div class="box-title" style="width: 100%;">
                        <h3>
                            <i class="fa fa-bars"></i>VEHICLE INFORMATION
                        </h3>

                            <div class="col-md-12 m-auto">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-12 col-xl-12 col-sm-12 d-inline-flex radio-group" style=" ">

                                                <a style="background: #5bc0de;margin-right: 6px;max-width: 165px;" data = 'registration' class="col-md-2  text-center btn big active_class get_table"  id="registration">Registration Details</a>

                                                {{-- <a style="background: #5bc0de;margin-right: 6px;max-width: 168.5PX;" data = 'purchase' class="col-md-2 text-center btn big get_table" id="purchase">Purchase Details</a> --}}

                                                <a style="background: #5bc0de;max-width: 168.5PX;margin-right: 6px;" data="chasis" class="col-md-2 text-center btn big get_table" id="chasis">Chasis Details</a>

                                                {{-- <a style="background: #5bc0de;margin-right: 6px;max-width: 168.5PX;" data = 'sale' class="col-md-2  text-center btn big active_class get_table"  id="sale">
                                                Sale Details</a> --}}

                                                <a style="background: #5bc0de;margin-right: 6px;max-width: 168.5PX;" data = 'engine' class="col-md-2 text-center btn big get_table" id="engine">
                                                Engine Details</a>

                                                <a style="background: #5bc0de;max-width: 168.5PX;" data="vehicle" class="col-md-2 text-center btn big get_table" id="vehicle">
                                                Vehicle Documents</a>
                                            </div>
                                        </div>              
                                    </div>
                                    <div class="card-body " >
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-xl-12" id="mytable1">
                                                                                
                                                <div class="col-md-12 col-xl-12 mt-2">
                                                    <label for="Vehicle No.">Make Name</label>
                                                    <input id="vehicle_no" class="form-control" name="reg_make" value="{{ old('reg_make') ?? $edata->reg_make}}" > 
                                                </div>
                                                
                                                <div class="col-md-6 col-xl-6 mt-2">
                                                    <label for="No Of Tyres">No Of Tyres </label>
                                                    <input id="email" type="text" name="reg_no_tyres" class="form-control  " value="{{ old('reg_no_tyres') ?? $edata->reg_no_tyres}}">

                                                </div>
                                                <div class="col-md-6 col-xl-6 mt-2">
                                                    <label for="Avg. Mileage">Avg. Mileage</label>
                                                    <input id="email1" type="text" name="reg_mileage" class="form-control" name="email1" value="{{ old('reg_mileage') ?? $edata->reg_mileage}}">

                                                </div>

                                                <div class="col-md-6 col-xl-6 mt-2">
                                                    <label for="Chasis No">Chasis No </label>
                                                    <input id="email" name="reg_chassis_no" class="form-control  " value="{{ old('reg_chassis_no') ?? $edata->reg_chassis_no}}">

                                                </div>
                                                <div class="col-md-6 col-xl-6 mt-2">
                                                    <label for="Engine No">Engine No</label>
                                                    <input id="email1" class="form-control  " name="reg_engine_no" value="{{ old('reg_engine_no') ?? $edata->reg_engine_no}}">
                                                </div>

                                                <div class="col-md-6 col-xl-6 mt-2">
                                                    <label for="Manufacturer Year"> Manufacturer Year</label>
                                                    <input id="email" class="form-control" name="reg_manuf_year" value="{{ old('reg_manuf_year') ?? $edata->reg_manuf_year}}">

                                                </div>
                                                <div class="col-md-6 col-xl-6 mt-2">
                                                    <label for="Regi. Date">Regi. Date</label>
                                                    <input id="email1" type="text" class="form-control datepicker" name="reg_date" readonly="true" value="{{ old('reg_date') ?? $edata->reg_date}}">

                                                </div>
                                                <div class="col-md-6 col-xl-6 mt-2">
                                                    <label for="KM Reading">KM Reading</label>
                                                    <input id="email1" class="form-control  " name="email1" value="">
                                                </div>

                                                <div class="col-md-6 col-xl-6 mt-2">
                                                    <label for=" D. Tank Capacity">D. Tank Capacity</label>
                                                    <input id="email" name="reg_tank_cap" type="text" class="form-control  " value="{{ old('reg_tank_cap') ?? $edata->reg_tank_cap}}">

                                                </div>
                                                <div class="col-md-6 col-xl-6 mt-2">
                                                    <label for="RLWL (Max Wt.) ">RLWL (Max Wt.) </label>
                                                    <input id="email1"  class="form-control  " name="email1" value="">

                                                </div>

                                                <div class="col-md-6 col-xl-6 mt-2">
                                                    <label for="Company Mileage">Company Mileage</label>
                                                    <input id="email"  class="form-control  " value="">

                                                </div>
                                                <div class="col-md-6 col-xl-6 mt-2">
                                                    <label for="IMEI Number">Tare Weight</label>
                                                    <input id="email1" class="form-control  " name="email1" value="">
                                                </div>

                                            </div>   
                                        </div>
                                    
                                        <div class="row">

                                        <div class="col-sm-12 col-md-12 col-xl-12  table-responsive " id="mytable2" style="display: none;">
                                            
                                            <div class="col-md-12 col-xl-12 mt-2">
                                                <label for="Purchase From">Purchase From</label>
                                                <input id="vehicle_no" name="pur_dealer_name" class="form-control  " value="{{ old('pur_dealer_name') ?? $edata->pur_dealer_name}}" > 
                                            </div>
                                                
                                            <div class="col-md-12 col-xl-12 mt-2">
                                                <label for="Dealer Address">Dealer Address </label>
                                                <input id="email" name="pur_dealer_addr"  class="form-control  " value="{{ old('pur_dealer_addr') ?? $edata->pur_dealer_addr}}">

                                            </div>
                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Dealer City ">Dealer City</label>
                                                   <select name="pur_dealer_city" class="selectpicker form-control">
                                                        <option selected=" true " disabled="true">Select..</option>
                                                        @foreach($city as $cities)
                                                           <option value="{{$cities->id}}">{{$cities->city_name}}</option>
                                                        @endforeach                       
                                                    </select>                                                    
                                             </div>
                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="After Sales Services Provideb By ">After Sales Services Provideb By  </label>
                                                <input id="email" type="text" name="pur_after_sales_srv" class="form-control  " value="{{ old('pur_after_sales_srv') ?? $edata->pur_after_sales_srv}}">

                                            </div>
                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Invoice No">Invoice No</label>
                                                <input id="email1" type="text" class="form-control  " name="pur_invoice_no" value="{{ old('pur_invoice_no') ?? $edata->pur_invoice_no}}">
                                            </div>

                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Invoice Date">Invoice Date</label>
                                                <input id="email" name="pur_invoice_dt" type="text" class="form-control datepicker" readonly="true" value="{{ old('pur_invoice_dt') ?? $edata->pur_invoice_dt}}">

                                            </div>
                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Assest Cost ">Purchase Amount</label>
                                                <input id="email1" type="" class="form-control  " name="pur_amt" value="{{ old('pur_amt') ?? $edata->pur_amt }}">                                                    
                                             </div>                                            
                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="No of Free Services ">No of Free Services  </label>
                                                <input id="email1" type="" class="form-control" name="pur_free_srv_count" value="{{old('pur_free_srv_count') ?? $edata->pur_free_srv_count}}">

                                            </div>
                                            <div class="col-md-3 col-xl-3 mt-2">
                                                <label for=" Free Services Provided ">Free Services Provided </label><br>
                                                <input  name="pur_free_srv" type="radio" {{ $edata->pur_free_srv == 1 ? 'checked': '' }} value="1">Yes<br>
                                                <input  name="pur_free_srv" type="radio" {{ $edata->pur_free_srv == 0 ? 'checked':'' }} value="0">No
                                            </div>                                           

                                            <div class="col-md-3 col-xl-3 mt-2">
                                                <label for="Duplicate key at H.O.">Duplicate key at H.O.</label><br>
                                                <input  name="pur_duplicate_key" type="radio" {{ $edata->pur_duplicate_key == 1 ? 'checked':'' }} value="1">Yes<br>
                                                <input  name="pur_duplicate_key" type="radio" {{ $edata->pur_duplicate_key == 0 ? 'checked':'' }} value="0">No
                                            </div>                                           
                                        </div>
                                        
                                        <div class="col-sm-12 col-md-12 col-xl-12  table-responsive " style="display: none;" id="mytable3">
                                            
                                             <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Chasis Serial No.">Chasis Serial No.</label>
                                                <input id="email1"  class="form-control" name="chassis_serial_no" value="{{old('chassis_serial_no') ?? $edata->chassis_serial_no}}">
                                            </div>

                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Assesories Supplied at Purchase">Assesories Supplied at Purchase</label>
                                                <input id="email" type="" name="accessories_supplied" class="form-control" value="{{old('accessories_supplied') ?? $edata->accessories_supplied}}">

                                            </div>
                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Vehicle Body height">Vehicle Body height</label>
                                                <input id="email1" type="" class="form-control  " name="body_height" value="{{old('body_height') ?? $edata->body_height}}">

                                            </div>

                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Chasis Length">Chasis Length</label>
                                                <input id="email1" type="" class="form-control" name="chassis_length" value="{{old('chassis_length') ?? $edata->chassis_length}}">                                                    
                                             </div>
                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Chasis color">Chasis color</label>
                                                <input id="email1" type="text" class="form-control" name="chassis_color" value="{{old('chassis_color') ?? $edata->chassis_color}}">
                                            </div>

                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Body color ">Body color </label>
                                                <input id="email1" type="text" class="form-control" name="body_color" value="{{old('body_color') ?? $edata->body_color}}">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-xl-12  table-responsive " style="display: none;" id="mytable4">
                                            
                                             <div class="col-md-4 col-xl-4 mt-2">
                                                <label for="Start Date">Sale Date</label>
                                                <input id="email1" type="text" readonly="true" class="form-control datepicker" name="sale_dt" value="{{old('sale_dt') ?? $edata->sale_dt}}">
                                            </div>

                                            <div class="col-md-4 col-xl-4 mt-2">
                                                <label for="Sale Price">Sale Price </label>
                                                <input id="email" type="" class="form-control" name="sale_amt" value="{{old('sale_amt') ?? $edata->sale_amt}}">
                                            </div>
                                            <div class="col-md-4 col-xl-4 mt-2">
                                                <label for="Buyer Company">Buyer Name</label>
                                                <input id="email1" type="" class="form-control" name="buyer_name" value="{{old('buyer_name') ?? $edata->buyer_name}}">

                                            </div>
                                            <div class="col-md-4 col-xl-4 mt-2">
                                                <label for="Buyer City">Buyer City  </label>
                                                <select name="pur_dealer_city" class="selectpicker form-control">
                                                    <option selected=" true " disabled="true">Select..</option>
                                                    @foreach($city as $cities)
                                                       <option {{ $edata->pur_dealer_city == $cities->id ? 'selected':'' }} value="{{$cities->id}}">{{$cities->city_name}}</option>
                                                    @endforeach                       
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-xl-4 mt-2">
                                                <label for="Buyer Phone ">Buyer Phone </label>
                                                <input id="email1" type="text" class="form-control  " name="buyer_phone" value="{{ old('buyer_phone') ?? $edata->buyer_phone}}">
                                            </div>
                                            <div class="col-md-4 col-xl-4 mt-2">
                                                <label for="Old meter Reading at Sale">Old meter Reading at Sale</label>
                                                <input id="email1" class="form-control  " name="sale_odo_reading" value="{{ old('sale_odo_reading') ?? $edata->sale_odo_reading }}">
                                            </div>
                                            <div class="col-md-8 col-xl-8 mt-2">
                                                <label for="Buyer Address">Buyer Address</label>
                                                <textarea id="email1" class="form-control  " name="buyer_addr" value="{{ $edata->buyer_addr}}">{{ $edata->buyer_addr}}</textarea>
                                            </div>
                                            <div class="col-md-12 col-xl-12 mt-2">
                                                <label for="Buyer Address">Comments</label>
                                                <textarea id="email1" class="form-control" name="sale_comments" value="{{old('sale_comments') ?? $edata->sale_comments}}">{{$edata->sale_comments}} </textarea>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-xl-12  table-responsive " style="display: none;" id="mytable5">
                                            
                                             <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Serial No.">Serial No.</label>
                                                <input id="email1" type="" class="form-control  " name="eng_serial_no" value="{{ old('eng_serial_no') ?? $edata->eng_serial_no }}">
                                            </div>

                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Power (BHP)">Power (BHP)</label>
                                                <input id="email" type="" class="form-control" name="eng_power" value="{{ old('eng_power') ?? $edata->eng_power}}">

                                            </div>
                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Ignition Key No.">Ignition Key No.</label>
                                                <input id="email1" type="" class="form-control  " name="eng_ignition_key_no" value="{{old('eng_ignition_key_no') ?? $edata->eng_ignition_key_no}}">

                                            </div>

                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Fuel Type\Grade">Fuel Type\Grade</label>
                                                <input id="email1" type="" class="form-control  " name="eng_fuel_type" value="{{ old('eng_fuel_type') ?? $edata->eng_fuel_type }}">                                                    
                                             </div>
                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Door Key No">Door Key No</label>
                                                <input id="email1" type="text" class="form-control  " name="eng_door_key_no" value="{{ old('eng_door_key_no') ?? $edata->eng_door_key_no }}">
                                            </div>

                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Engine Color ">Engine Color</label>
                                               <input id="email1" type="text" class="form-control  " name="eng_color" value="{{ old('eng_color') ?? $edata->eng_color }}">
                                            </div>
                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Cylinders ">Cylinders</label>
                                                <input id="email1" type="text" class="form-control  " name="eng_cylinder_count" value="{{ old('eng_cylinder_count') ?? $edata->eng_cylinder_count }}">
                                            </div>
                                            <div class="col-md-6 col-xl-6 mt-2">
                                                <label for="Torque (lb-ft)">Torque (lb-ft)</label>
                                                <input id="email1" type="text" class="form-control  " name="eng_torque" value="{{ old('eng_torque') ?? $edata->eng_torque}}">
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-xl-12 " style="display: none;" id="mytable6">
                                            
                                             <span id='file_size' class="invalid-feedback d-block" role="alert">
                                                <strong></strong>
                                            </span>
                                            <span id='file_type' class="invalid-feedback d-block" role="alert">
                                                <strong></strong>
                                            </span>
                                             <div  class="col-md-6 col-xl-6 mt-2">
                                                <label for="Buyer City  ">Select image type </label>
                                                <select id="images_slc" name="images_slc" class="selectpicker form-control">
                                                    <option value="vch_pic">Vehicle Picture</option>
                                                    <option value='chasis_pic'>Chasis Picture</option>
                                                    <option value="reg_pic">Registration Book (RC)</option>
                                                    <option value="pan_pic">Owner PAN Card</option>
                                                    <option value="tds_pic">TDS Declaration</option>   
                                                </select>
                                            </div>
                                             <div  class="col-md-3 col-xl-3 mt-2" id='vehicle_pic'>
                                                <label for="Vehicle Picture">Vehicle Picture</label>
                                                <input class="image" type="file" data="vch_pic" name="vch_pic" value="">
                                                <img src="storage/app/"></img>
                                            </div>

                                            <div style="display: none" class="col-md-3 col-xl-3 mt-2" id="chasis_pic">
                                                <label for="Chasis Picture">Chasis Picture</label>
                                                <input class="image"type="file" data="chasis_pic" name="chassic_pic" value="">
                                                <img src="storage/app/"></img>

                                            </div>
                                            <div style="display: none" class="col-md-6 col-xl-6 mt-2" id="reg_pic">
                                                <label for="Registration Book (RC)">Registration Book (RC)</label>
                                                <input class="image"type="file" data="reg_pic" name="rc_book_pic" value="">
                                                <img src="storage/app/"></img>

                                            </div>

                                            <div class="col-md-6 col-xl-6 mt-2" style="display: none" id="pan_pic">
                                                <label for="Owner PAN Card">Owner PAN Card</label>
                                                <input class="image" data="pan_pic" type="file" name="owner_pan_pic" value="">
                                                <img src="storage/app/"></img>                                                    
                                             </div>
                                            <div style="display: none" class="col-md-6 col-xl-6 mt-2"  id="tds_pic">
                                                <label for="TDS Declaration">TDS Declaration {{ $edata->tds_declaration_pic }}</label>
                                                <input class="image" data="tds_pic" type="file" name="tds_declaration_pic" value="">
                                                <img src="storage/app/public/<?php echo $edata->fleet_code.'/vehicle_number/'.$edata->vch_no.'/'.$edata->tds_declaration_pic ; ?>"></img>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                      <div class="form-group">
                        <div class="col-md-6" style="margin-top: 24px;">
                          <input style="margin-right: -8px;" type="submit" value="Submit" class="btn btn-primary active pull-right"></input>
                        </div>
                 </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
  $(document).ready( function () {
     $(function() {
        $( ".datepicker" ).datepicker({format:'yyyy-mm-dd'});
     });
    $('#vch_comp').on('change',function(){
        var vch_comp = $('#vch_comp').val();
        $.ajax({
                url: "/vehicleget",
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {'id':vch_comp},
                success: function (data) {
                    $('#vch_model').html(data);
                }
            })
    })

    $('#registration,#chasis,#purchase,#sale,#engine,#vehicle').on('click',function(){
        var data = $(this).attr('data');
    
        if(data=='registration'){
            $('#mytable1').show();
            $('#mytable2').hide();
            $('#mytable3').hide();
            $('#mytable4').hide();
            $('#mytable5').hide();
            $('#mytable6').hide();
        }
        else if(data=='purchase'){
            $('#mytable1').hide();
            $('#mytable2').show();
            $('#mytable3').hide();
            $('#mytable4').hide();
            $('#mytable5').hide();
            $('#mytable6').hide();
        }
        else if(data == 'chasis'){
            $('#mytable1').hide();
            $('#mytable2').hide();
            $('#mytable3').show();
            $('#mytable4').hide();
            $('#mytable5').hide();
            $('#mytable6').hide();
        }
        else if(data == 'sale'){
            $('#mytable1').hide();
            $('#mytable2').hide();
            $('#mytable3').hide();
            $('#mytable4').show();
            $('#mytable5').hide();
            $('#mytable6').hide();
        }
        else if(data == 'engine'){
            $('#mytable1').hide();
            $('#mytable2').hide();
            $('#mytable3').hide();
            $('#mytable4').hide();
            $('#mytable5').show();
            $('#mytable6').hide();
        }
        else{
            $('#mytable1').hide();
            $('#mytable2').hide();
            $('#mytable3').hide();
            $('#mytable4').hide();
            $('#mytable5').hide();
            $('#mytable6').show();
        }
    });
     $('#images_slc').on('change',function(){
        var data = $(this).val();
                   
        if(data=='vch_pic'){
            $('#vehicle_pic').show();
            $('#chasis_pic').hide();
            $('#reg_pic').hide();
            $('#pan_pic').hide();
            $('#tds_pic').hide();
        }
        else if(data=='chasis_pic'){
            $('#vehicle_pic').hide();
            $('#chasis_pic').show();
            $('#reg_pic').hide();
            $('#pan_pic').hide();
            $('#tds_pic').hide();
        }

        else if(data=='reg_pic'){
            $('#vehicle_pic').hide();
            $('#chasis_pic').hide();
            $('#reg_pic').show();
            $('#pan_pic').hide();
            $('#tds_pic').hide();
        }

        else if(data=='pan_pic'){
            $('#vehicle_pic').hide();
            $('#chasis_pic').hide();
            $('#reg_pic').hide();
            $('#pan_pic').show();
            $('#tds_pic').hide();
        }

        else if(data=='tds_pic'){
            $('#vehicle_pic').hide();
            $('#chasis_pic').hide();
            $('#reg_pic').hide();
            $('#pan_pic').hide();
            $('#tds_pic').show();
        }
      });
    })  

</script>
@endsection
