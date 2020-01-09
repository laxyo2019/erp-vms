@extends('state.main') 
@section('content')

<div class="container">
  <div id="ContentPlaceHolder1_PnlShow"  style="display: inline;">
    <div class="row">
      <div class="col-sm-12">
        <div class="box box-color orange box-condensed box-bordered">
          <div class="box-title">
            <div class="col-sm-6 col-md-6">
                <h3>TYRE REMOLDING ISSUE DETAILS</h3>

            </div>
            <div class="col-sm-6 col-md-6">
                <a class="btn btn-inverse pull-right" href="{{route('tyre_remolding.index')}}">Back</a>
            </div>
            <div id="add-city-form">
             <form class="well form-horizontal" id="create_form" method="post" action="{{route('tyre_remolding.store')}}"  enctype="multipart/form-data">
              {{csrf_field()}}             
                 <div class="card-body " >
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xl-12">                                     
                            <div class='row'>                         
                              <div class="col-md-4 col-xl-4 mt-2">
                                   <span style="color: #FF0000;font-size:15px;">*</span><label for="entry_no">Entry No</label>
                                  <input id="entry_no" name="entry_no" readonly="true" class="form-control  " value="">
                                  @error('entry_no')
                                  <span class="invalid-feedback d-block" role="alert">
                                     <strong>{{ $message }}</strong>
                                  </span>
                               @enderror
                                  
                              </div>

                              <div class="col-md-4 col-xl-4 mt-2">
                                   <span style="color: #FF0000;font-size:15px;">*</span><label for="date">Date</label>
                                  <input id="date" name="date" class="form-control datepicker" readonly="true" value="">
                                  @error('date')
                                  <span class="invalid-feedback d-block" role="alert">
                                     <strong>{{ 'Please select date' }}</strong>
                                  </span>
                               @enderror
                                  
                              </div>
                              <div class="col-md-4 col-xl-4 mt-2">
                                <span style="color: #FF0000;font-size:15px;">*</span><label for="vendor_name">Vendor Name</label>
                                <select id="vendor_name" required="true" name="vendor_name" class="form-control">
                                       <option value="0" >Select..</option>
                                    {{-- @foreach ($vendors as $vendor)
                                      <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                                    @endforeach  --}}
                                </select>
                                @error('vendor_name')
                                <span class="invalid-feedback d-block" role="alert">
                                  <strong>{{ 'Please select supplier' }}</strong>
                                </span>
                               @enderror                                  
                              </div>
                              <div class="col-md-4 col-xl-4 mt-2">
                                   <span style="color: #FF0000;font-size:15px;">*</span><label for="bill_no">Bill No</label>
                                  <input id="bill_no" name="bill_no" readonly="true" class="form-control  " value="">
                                  @error('bill_no')
                                  <span class="invalid-feedback d-block" role="alert">
                                     <strong>{{ $message }}</strong>
                                  </span>
                               @enderror
                                  
                              </div>

                              <div class="col-md-4 col-xl-4 mt-2">
                                   <span style="color: #FF0000;font-size:15px;">*</span><label for="bill_date">Bill Date</label>
                                  <input id="bill_date" name="bill_date" class="form-control datepicker" readonly="true" value="">
                                  @error('bill_date')
                                  <span class="invalid-feedback d-block" role="alert">
                                     <strong>{{ 'Please select date' }}</strong>
                                  </span>
                               @enderror
                                  
                              </div>
                          </div>        
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="text-center">
                                <span class="qty_error" style="color: #FF0000;font-size:15px;"></span>
                              </div>  
                                <div class="box box-color orange box-condensed box-bordered">
                                    <div class="box-title">
                                        <h3>INFORMATION FOR ABOVE TYRE</h3>
                                    </div>
                                    <div class="box-content nopadding" style="height: 305px;overflow: scroll;" align="center">
                                      <div id="ContentPlaceHolder1_Panel5" style="background-color:Transparent;height:auto;width:90%;padding-top: 22px;">
                                      <div id="ContentPlaceHolder1_UpdatePanel86">                      
                                <div class="row sup_table" style="padding-top: 21px;">
                                  <table id="myTable1" >
                                    <thead>
                                      <tr >
                                        <th style="width: 20px;">#</th>
                                        <th style="width: 200px;">TYRE NO</th>
                                        <th style="width: 200px;">COMPANY</th>
                                        <th style="width: 200px;">TYPE</th>
                                        <th style="width: 200px;">CONDITION</th>
                                        <th style="width: 200px;">STATUS</th>
                                        <th style="width: 200px;">NSD</th>
                                        <th style="width: 200px;">RATE</th>
                                        <th style="width: 200px;">ACTION</th>
                                      </tr>
                                    </thead>
                                    
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="row">
               		<div class="col-md-6 col-xl-6 mt-2">
               			<span style="color: #FF0000;font-size:15px;">*</span><label for="total_amount">Total Amount</label>
                       
                   		 <input id="total_amount" class="form-control  " name="total_amount" value="{{old('total_amount')}}">
                   		  @error('total_amount')
                            <span class="invalid-feedback d-block" role="alert">
                               <strong>{{ 'Please enter bank branch' }}</strong>
                            </span>
                         @enderror
               		</div>
               		<div class="col-md-6 col-xl-6 mt-2">
                      	<label class="">Payment mode</label>
	                       
                       <select id="type" name="payment_mode" class=" form-control">
                            <option selected="true" value="0">Mode</option>
                            <option {{old('payment_mode') =='cash' ? 'selected':'' }} value="cash">Cash</option>
							<option {{old('payment_mode') =='cheque' ? 'selected':'' }} value="cheque">Cheque</option>
							<option {{old('payment_mode') =='credit' ? 'selected':'' }} value="credit">Credit</option>
							<option {{old('payment_mode') =='dd' ? 'selected':'' }} value="dd">DD</option>
							<option {{old('payment_mode') =='rtgs' ? 'selected':'' }} value="rtgs">RTGS</option>
							<option {{old('payment_mode') =='neft' ? 'selected':'' }} value="neft">NEFT</option>  
                        </select>
                        @error('payment_mode')
                              <span class="invalid-feedback d-block " role="alert">
                                  <strong>{{ 'Please Select payment mode' }}</strong>
                              </span>
                          @enderror                    
                  </div> 
               	</div>

                  	<div style="display: none" class="row cheque">
					                	<div class="col-md-3 col-xl-3 mt-2">
		                              	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">Cheque No.</label>
			                               
		                               		 <input id="cheque_no" class="form-control  " name="cpay_no" value="{{old('pay_no')}}">
		                               		  @error('cpay_no')
					                            <span class="invalid-feedback d-block" role="alert">
					                               <strong>{{ "Please enter cheque number" }}</strong>
					                            </span>
					                         @enderror
		                                </div>
		                           		<div class="col-md-3 col-xl-3 mt-2">
		                              	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">Cheque Date</label>
			                               
		                               		 <input id="" class="form-control datepicker" readonly="true" name="cpay_dt" name="pay_dt" value="{{old('pay_dt')}}">
		                               		  @error('cpay_dt')
					                         <span class="invalid-feedback d-block" role="alert">
					                               <strong>{{ "Please enter cheque date" }}</strong>
					                            </span>
					                         @enderror
		                               
		                           		 </div>
		                           		
		                           		<div class="col-md-3 col-xl-3 mt-2">
		                              	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">Bank Name</label>
			                               
		                               		 <input id="email1" class="form-control  " name="cpay_bank" value="{{old('pay_bank')}}">
		                               		  @error('cpay_bank')
					                            <span class="invalid-feedback d-block" role="alert">
					                               <strong>{{ 'Please enter bank name' }}</strong>
					                            </span>
					                         @enderror
		                               
		                           		 </div>
		                           		 <div class="col-md-3 col-xl-3 mt-2">
		                              	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">Branch Name </label>
			                               
		                               		 <input id="email1" class="form-control  " name="cpay_branch" value="{{old('pay_branch')}}">
		                               		  @error('cpay_branch')
					                            <span class="invalid-feedback d-block" role="alert">
					                               <strong>{{ 'Please enter bank branch' }}</strong>
					                            </span>
					                         @enderror
		                               
		                           		 </div>
	               	</div>

	               	<div style="display: none" class="row dd">
	                	<div class="col-md-3 col-xl-3 mt-2">
	                  	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">DD No</label>
	                       
	                   		 <input id="email1" class="form-control  " name="dpay_no" value="{{old('pay_no')}}">
	                   		  @error('dpay_no')
	                            <span class="invalid-feedback d-block" role="alert">
	                               <strong>{{ 'Please enter DD number' }}</strong>
	                            </span>
	                         @enderror
	                    </div>
	               		<div class="col-md-3 col-xl-3 mt-2">
	                  	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">DD Date</label>
	                       
	                   		 <input id="" class="form-control datepicker" readonly="true" name="dpay_dt" value="{{old('pay_dt')}}">
	                   		  @error('dpay_dt')
	                         <span class="invalid-feedback d-block" role="alert">
	                               <strong>{{ 'Please enter DD date' }}</strong>
	                            </span>
	                         @enderror
	                   
	               		 </div>
	               		
	               		<div class="col-md-3 col-xl-3 mt-2">
	                  	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">Bank Name</label>
	                        
	                   		 <input id="email1" class="form-control  " name="dpay_bank" value="{{old('pay_bank')}}">
	                   		 @error('dpay_bank')
	                            <span class="invalid-feedback d-block" role="alert">
	                               <strong>{{ 'Please enter bank name' }}</strong>
	                            </span>
	                         @enderror
	                   
	               		 </div>
	               		 <div class="col-md-3 col-xl-3 mt-2">
	                  	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">Branch Name</label>
	                       
	                   		 <input id="email1" class="form-control  " name="dpay_branch" value="{{old('pay_branch')}}">
	                   		  @error('dpay_branch')
	                            <span class="invalid-feedback d-block" role="alert">
	                               <strong>{{ 'Please enter bank branch' }}</strong>
	                            </span>
	                         @enderror
	                   
	               		 </div>
	               	</div>
	               	
	               	<div style="display: none" class="row rtgs">
	                	<div class="col-md-3 col-xl-3 mt-2">
	                  	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">RTGS No.</label>
	                        @error('rpay_no')
	                            <span class="invalid-feedback d-block" role="alert">
	                               <strong>{{ 'Please enter RTGS number' }}</strong>
	                            </span>
	                         @enderror
	                   		 <input id="email1" class="form-control  " name="rpay_no" value="{{old('rpay_no')}}">
	                    </div>
	               		<div class="col-md-3 col-xl-3 mt-2">
	                  	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">RTGS Date</label>
	                        @error('rpay_dt')
	                         <span class="invalid-feedback d-block" role="alert">
	                               <strong>{{ 'Please enter RTGS date' }}</strong>
	                            </span>
	                         @enderror
	                   		 <input id="" class="form-control datepicker  readonly="true"  name="rpay_dt" value="{{old('pay_dt')}}">
	                   
	               		 </div>
	               		
	               		<div class="col-md-3 col-xl-3 mt-2">
	                  	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">Bank Name </label>
	                        @error('rpay_bank')
	                            <span class="invalid-feedback d-block" role="alert">
	                               <strong>{{ 'Please enter bank name' }}</strong>
	                            </span>
	                         @enderror
	                   		 <input id="email1" class="form-control  " name="rpay_bank" value="{{old('rpay_bank')}}">
	                   
	               		 </div>
	               		 <div class="col-md-3 col-xl-3 mt-2">
	                  	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">Branch Name</label>
	                        @error('rpay_branch')
	                            <span class="invalid-feedback d-block" role="alert">
	                               <strong>{{ 'Please enter branch name' }}</strong>
	                            </span>
	                         @enderror
	                   		 <input id="email1" class="form-control  " name="rpay_branch" value="{{old('rpay_branch')}}">
	                   
	               		 </div>
	               	</div>

	               	<div style="display: none" class="row neft">
	                	<div class="col-md-3 col-xl-3 mt-2">
	                  	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">NEFT No.</label>
	                        @error('nupdate_dt')
	                            <span class="invalid-feedback d-block" role="alert">
	                               <strong>{{ 'Please enter NEFT number' }}</strong>
	                            </span>
	                         @enderror
	                   		 <input id="email1" class="form-control  " name="npay_no" value="{{old('npay_no')}}">
	                    </div>
	               		<div class="col-md-3 col-xl-3 mt-2">
	                  	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">NEFT Date</label>
	                        @error('npay_dt')
	                         <span class="invalid-feedback d-block" role="alert">
	                               <strong>{{ 'Please enter NEFT date' }}</strong>
	                            </span>
	                         @enderror
	                   		 <input id="" class="form-control datepicker" readonly="true" name="npay_dt" value="{{old('npay_dt')}}">
	                   
	               		 </div>
	               		
	               		<div class="col-md-3 col-xl-3 mt-2">
	                  	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">Bank Name</label>
	                        @error('npay_bank')
	                            <span class="invalid-feedback d-block" role="alert">
	                               <strong>{{ 'Please enter bank name' }}</strong>
	                            </span>
	                         @enderror
	                   		 <input id="email1" class="form-control  " name="npay_bank" value="{{old('npay_bank')}}">
	                   
	               		 </div>
	               		 <div class="col-md-3 col-xl-3 mt-2">
	                  	  <span style="color: #FF0000;font-size:15px;">*</span><label for="Engine No">Branch Name</label>
	                        @error('npay_branch')
	                            <span class="invalid-feedback d-block" role="alert">
	                               <strong>{{ 'Please enter branch name' }}</strong>
	                            </span>
	                         @enderror
	                   		 <input id="email1" class="form-control  " name="npay_branch" value="{{old('npay_branch')}}">
	               		 </div>
	               	</div>
                    <div class="row">      
                        <div class="col-md-12 text-center"  style="margin-top: 24px;">
                          <input  style="margin-right: -8px;" type="submit" id="submit1" value="Submit" class="btn btn-primary active ">
                        </div>
                    </div>

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
</div>  

<script type="text/javascript">

   $(document).ready( function () {
    $(function() {
        $( ".datepicker" ).datepicker({format: 'yyyy-mm-dd' });
      });
    $('#myTable1').DataTable();
  
  	$('#type').on('change',function(){
    	var type = $(this).val();
    	if(type == 'cheque'){
    		$('.cheque').show();
    		$('.dd').hide();
    		$('.rtgs').hide();
    		$('.neft').hide();
    		$('#cheque_no').on('keyup',function(){
    			var chk = $(this).val();
    			if($.isNumeric(chk)){

    			}
    		})

    	}
    	else if(type == 'dd'){
    		$('.cheque').hide();
    		$('.dd').show();
    		$('.rtgs').hide();
    		$('.neft').hide();
    	}

    	else if(type == 'rtgs'){
    		$('.cheque').hide();
    		$('.dd').hide();
    		$('.rtgs').show();
    		$('.neft').hide();
    	}

    	else if(type == 'neft'){
    		$('.cheque').hide();
    		$('.dd').hide();
    		$('.rtgs').hide();
    		$('.neft').show();
    	}
    	else if( (type == 'cash') || (type == 'credit') || (type="") ){
    		$('.cheque').hide();
    		$('.dd').hide();
    		$('.rtgs').hide();
    		$('.neft').hide();	
    	}

    })

    	var type = "{{old('payment_mode')}}"
    	if(type == 'cheque'){
    		$('.cheque').show();
    		$('.dd').hide();
    		$('.rtgs').hide();
    		$('.neft').hide();
      	}

    	else if(type == 'dd'){
    		$('.cheque').hide();
    		$('.dd').show();
    		$('.rtgs').hide();
    		$('.neft').hide();
    	}

    	else if(type == 'rtgs'){
    		$('.cheque').hide();
    		$('.dd').hide();
    		$('.rtgs').show();
    		$('.neft').hide();
    	}

    	else if(type == 'neft'){
    		$('.cheque').hide();
    		$('.dd').hide();
    		$('.rtgs').hide();
    		$('.neft').show();
    	}
    	else if( (type == 'cash') || (type == 'credit') || (type="0") ){
    		$('.cheque').hide();
    		$('.dd').hide();
    		$('.rtgs').hide();
    		$('.neft').hide();	
    	}
});
</script>
@endsection