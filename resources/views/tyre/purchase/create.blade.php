@extends('state.main') 
@section('content')
<div class="container">
  <div id="ContentPlaceHolder1_PnlShow"  style="display: inline;">
    <div class="row">
      <div class="col-sm-12">
        <div class="box box-color orange box-condensed box-bordered">
          <div class="box-title">
            <div class="col-sm-6 col-md-6">
                <h3>TYRE PURCHASE ORDER DETAILS </h3>

            </div>
            <div class="col-sm-6 col-md-6">
                <a class="btn btn-inverse pull-right" href="{{route('tyre_purchase.index')}}">Back</a>
            </div>
            <div id="add-city-form">
             <form class="well form-horizontal"  id="create_form1" >
              {{ csrf_field() }}
                 <div class="card-body " >
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xl-12" id="mytable1">               
                            <div class='row'>        
                            	<div class="col-md-3 col-xl-3 mt-2">
	                                <span style="color: #FF0000;font-size:15px;">*</span><label for="po_no">PO No</label>
	                                <input id="po_no" name="po_no" class="form-control" readonly="true" value="{{old('po_no') ? old('po_no') : $no}}">
	                                @error('po_no')
			                            <span class="invalid-feedback d-block" role="alert">
			                               <strong>{{ $message }}</strong>
			                            </span>
			                         @enderror	                                
	                            </div>
	                            <div class="col-md-3 col-xl-3 mt-2">
	                                <span style="color: #FF0000;font-size:15px;">*</span><label for="po_date">PO Date</label>
	                                <input id="po_date" name="po_date" class="form-control datepicker" readonly="true" value="{{old('po_date') ? old('po_date') : $date }}">
	                                @error('po_date')
			                            <span class="invalid-feedback d-block" role="alert">
			                               <strong>{{ 'Please select mtr date' }}</strong>
			                            </span>
			                         @enderror	                                
	                            </div>
                              <div class="col-md-3 col-xl-3 mt-2">
                                <span style="color: #FF0000;font-size:15px;">*</span><label for="vendor_name">Supplier Name</label>
                                <select id="vendor_code" required="true" name="vendor_code" class="form-control">
							                         <option value="0" >Select..</option>
                                    @foreach ($vendors as $vendor)
                                      <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                                    @endforeach	
							                  </select>
                                @error('vendor_code')
                                <span class="invalid-feedback d-block" role="alert">
                                  <strong>{{ 'Please select supplier' }}</strong>
                                </span>
                               @enderror                                  
                              </div>
                            	<div class="col-md-3 col-xl-3 mt-2">
	                              <span style="color: #FF0000;font-size:15px;margin-left: 50px;">*</span><label for="Chasis No">WITH MTR</label>
	                              <div class="roundedOne">
										                <input value="1" type="checkbox"  name="is_mtr_no" value="None" id="is_mtr" name="check" style="margin-left: 80px;">
										                <label for="roundedOne"></label>
									              </div>
	                                                            
	                            </div>
                            </div>
                            <div class="row">
	                            <div class="col-md-3 col-xl-3 mt-2">
	                                <span style="color: #FF0000;font-size:15px;">*</span><label for="Chasis No">MTR NO</label>
                                  <select id="mtr_no" name="mtr_no" disabled="true" class="form-control">
							                       <option value="0">Select..</option>
							                    </select>
	                                @error('mtr_no')
	                                <span class="invalid-feedback d-block" role="alert">
	                                  <strong>{{ 'Please select mtr no' }}</strong>
	                                </span>
	                               @enderror                               
	                           	</div>
                              <div class="col-md-3 col-xl-3 mt-2">
                                  <span style="color: #FF0000;font-size:15px;">*</span><label for="tyre_comp_name">TYRE COMPANY NAME</label>
                                  <select id="tyre_comp_name" name="tyre_comp_name"  class="form-control">
                                     <option value="0">Select..</option>
                                     @foreach($companys as $company)
                                     <option value="{{$company->id}}">{{$company->comp_name}}</option>
                                     @endforeach
                                  </select>
                                  @error('tyre_comp_name')
                                  <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ 'Please select Tyre Company Name' }}</strong>
                                  </span>
                                 @enderror                               
                              </div>
                              <div class="col-md-3 col-xl-3 mt-2">
                                  <span style="color: #FF0000;font-size:15px;">*</span><label for="tyre_type_name">TYRE TYPE</label>
                                  <select id="tyre_type_name" name="tyre_type_name"  class="form-control">
                                     <option value="0">Select ..</option>
                                  </select>
                                  @error('tyre_type_name')
                                  <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ 'Please select  Tyre Type' }}</strong>
                                  </span>
                                 @enderror                               
                              </div>
                              <div class="col-md-3 col-xl-3 mt-2">
                                  <span style="color: #FF0000;font-size:15px;">*</span><label for="tyre_condition">TYRE CONDITION</label>
                                  <select id="tyre_condition" name="tyre_condition"  class="form-control">
                                     <option value="0">Select..</option>
                                     <option value="1">NEW TYRE </option>
                                     <option value="2">OLD TYRE</option>
                                     <option value="3">REMOLDED TYRE</option>
                                     <option value="4">REJECTED TYRE</option>
                                     <option value="5">CUT REPAIRED TYRE</option>
                                  </select>
                                  @error('tyre_type_name')
                                  <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ 'Please select  Tyre Type' }}</strong>
                                  </span>
                                 @enderror                               
                              </div>
                              
                           	</div>
                            <div class="row">
	                            <div class="col-md-12 text-center add_btn"  style="margin-top: 24px;">
                                <a id="additem" style="margin-right: -8px;" class="btn btn-primary active">Add Item</a>
                             	</div>
                       	  	</div>                       		     	
                       		  <div class="row" style="" id="tabel">
	                       		
                          		<div class="col-sm-12">
                                <div class="text-center">
                                  <span class="qty_error" style="color: #FF0000;font-size:15px;"></span>
                              	</div>  
                                <div class="box box-color orange box-condensed box-bordered">
                                    <div class="box-title">
                                        <h3>TYRES</h3>
                                    </div>
                              
                                    <div class="box-content nopadding" style="height: 305px;overflow: scroll;" align="center">                                   
                                      <div id="ContentPlaceHolder1_Panel5" style="background-color:Transparent;height:auto;width:90%;padding-top: 22px;">
                                         	<div id="ContentPlaceHolder1_UpdatePanel86">                      
        					                          <div id="sup_table" class="row sup_table" style="padding-top: 21px;">
        					                       <table id="myTable" >
                										        <thead>
                										          <tr>
                												        <th style="width: 20px;">#</th>
                												        <th style="width: 200px;">TYRE COMPANY</th>
                												        <th style="width: 200px;">TYRE TYPE</th>
                                                <th style="width: 200px;">TYRE CONDITION</th>
                												        <th style="width: 200px;">QUANTITY</th>
                                                <th style="width: 200px;">RATE</th>
                                                <th style="width: 200px;">AMT</th>
                                                <th style="width: 200px;">DISC%</th>
                                                <th style="width: 200px;">DISC AMT</th>
                                                <th style="width: 200px;">IGST%</th>
                                                <th style="width: 200px;">IGST AMT</th>
                                                <th style="width: 200px;">CGST%</th>
                                                <th style="width: 200px;">CGST AMT</th>
                                                <th style="width: 200px;">SGST%</th>
                                                <th style="width: 200px;">SGST AMT</th>
                                                <th style="width: 200px;">NET AMT</th>
                                                <th style="width: 200px;">REMARKS</th>
                												      </tr>
                										        </thead>
                                            <tbody>
                                               <?php $count = 0;
                                                    $cc = 0;
                                                    if(session('data')){
                                                      dd(session('data'));
                                                      }else{
                                                        echo 'error';
                                                      }
                                                   ?>
                                               <?php $ids   = session('ids') ? session('ids'):array(); ?>
                                                @foreach($ids as $id)
                                                  <?php  $id = $id[$count]; ?>                                                 
                                                   <?php $data1  = session('data') ? session('data')[$id] :array();?>

                                                  @foreach($data1 as $data) 

                                                    <tr data-id ="tr_{{$data['id']}}">
                                                      <td style=" width:5% padding-left: 20px;">
                                                        <a style="cursor: pointer;color: #ff0000" data="{{$data['id']}}" id="trash"><i style="margin-right: 5px; " class="fas fa-trash" aria-hidden="true"></i></a>
                                                      </td>
                                                      <input type='hidden' value="{{$data['id']}}" name = "id[]" >
                                                      <td style=" width:25%; ">{{$data['comp_name']}}</td>
                                                      <td style=" width:25%;">{{$data['model_name']}}</td>
                                                      <td style=" width:25%; "><input class="form-control qty" type="number" id="qty_{{$data['id']}}" data-id = '{{$data['id']}}' name="qty[]" >
                                                        
                                                        @error('qty.'.$cc)
                                                          <span class="text-danger" role="alert">
                                                            <strong>{{ 'Please enter Quantity' }}</strong>
                                                          </span>
                                                         @enderror
                                                       
                                                      </td>
                                                     <td style=" width:25%; "><input class="form-control rate" type="text" value="" id="rate_{{$data['id']}}" data-id = '{{$data['id']}}' name="rate[]">
                                                        
                                                        @error('rate.'.$cc)
                                                          <span class="text-danger" role="alert">
                                                            <strong>{{ 'Please enter rate' }}</strong>
                                                          </span>
                                                         @enderror
                                                      </td>
                                                      <td style=" width:25%; "><input readonly="true" class="form-control ac_amt" type="text" id="amt_{{$data['id']}}" value="" name="amt[]">
                                                         
                                                      </td>
                                                      <td style=" width:25%; "><input class="form-control disc_pct" type="text" value="" data-id = '{{$data['id']}}' id="disc_pct_{{$data['id']}}" name="disc_pct[]">

                                                      @error('disc_pct.'.$cc)
                                                          <span class="text-danger" role="alert">
                                                            <strong>{{ 'Please enter discount' }}</strong>
                                                          </span>
                                                         @enderror
                                                      
                                                      </td>
                                                      <td style=" width:25%; "><input class="form-control disc_amt" type="text" value="" name="disc_amt[]" readonly="true" id="disc_amt_{{$data['id']}}"></td>
                                                      <td style=" width:25%; "><input class="form-control igst_pct" type="text" value="" id="igst_pct_{{$data['id']}}" data-id = '{{$data['id']}}'  name="igst_pct[]">

                                                        @error('igst_pct.'.$cc)
                                                          <span class="text-danger" role="alert">
                                                            <strong>{{ 'Please enter IGST%' }}</strong>
                                                          </span>
                                                         @enderror

                                                      </td>
                                                      <td style=" width:25%; "><input readonly="true" class="form-control igst_amt" id="igst_amt_{{$data['id']}}" type="text" value="" name="igst_amt[]"></td>
                                                      <td style=" width:25%; "><input data-id = '{{$data['id']}}' class="form-control cgst_pct" id="cgst_pct_{{$data['id']}}" type="text" value="" name="cgst_pct[]">

                                                        @error('cgst_pct.'.$cc)
                                                          <span class="text-danger" role="alert">
                                                            <strong>{{ 'Please enter CGST%' }}</strong>
                                                          </span>
                                                         @enderror

                                                      </td>
                                                      <td style=" width:25%; "><input id="cgst_amt_{{$data['id']}}" class="form-control cgst_amt" type="text" readonly="true" value="" name="cgst_amt[]"></td>
                                                      <td style=" width:25%;"><input class="form-control sgst_pct" type="text" value="" name="sgst_pct[]" id="sgst_pct_{{$data['id']}}" data-id = '{{$data['id']}}'>

                                                         @error('sgst_pct.'.$cc)
                                                          <span class="text-danger" role="alert">
                                                            <strong>{{ 'Please enter SGST%' }}</strong>
                                                          </span>
                                                         @enderror
                
                                                      </td>
                                                      <td style=" width:25%;"><input class="form-control sgst_amt" type="text" value="" name="sgst_amt[]" readonly="true" id="sgst_amt_{{$data['id']}}"></td>
                                                      <td style=" width:25%;"><input readonly="true" id="net_amt_{{$data['id']}}" class="form-control net_amt" type="text" value="" name="net_amt[]"></td>
                                                     <td style=" width:25%;"><input class="form-control" type="text" name="remark[]"></td>
                                                  </tr>
                                                  <?php ++$cc ?>
                                                @endforeach
                                              @endforeach
                                            </tbody>
        										              </table>
        					                     </div>
                    								</div>
                    							</div>
                    						</div>
                    					</div>
                    				</div>
                            	<div class="col-md-4 col-xl-4 mt-2">
                              	 <label class="" for="Chasis No">Total Qty</label>
                              	<input readonly="true" id="total_qty" name='total_qty' class="form-control total" value="">
                                   @error('total_qty')
      	                        <span class="invalid-feedback d-block" role="alert">
      	                            <strong>{{ 'Please enter prepared by name in alphabets' }}</strong>
      	                        </span>
                             		@enderror                          
                              </div>
                             <div class="col-md-4 col-xl-4 mt-2">
                              	 <label class="" for="Chasis No">Grand Total</label>
                              	<input readonly="true"  name='grand_total' id="grand_total" class="form-control" value="">
                                                          
                              </div> 
                              <div class="col-md-4 col-xl-4 mt-2">
                              	 <label class="" for="Chasis No">Disc. Amount</label>
                              	<input readonly="true" id="disc_amt_sum" name='totl_disc_amt' class="form-control" value="">
                                                          
                              </div>
                              	<div class="col-md-4 col-xl-4 mt-2">
                                	 <label class="" for="Chasis No">IGST Amount</label>
                                	<input readonly="true" id="igst_amt_sum" name='totl_igst_amt' class="form-control  total" value="">
                                                            
                                </div>
                               <div class="col-md-4 col-xl-4 mt-2">
                                	 <label class="" for="Chasis No">CGST Amount</label>
                                	<input  id="cgst_amt_sum" readonly="true" name='totl_cgst_amt' class="form-control  total" value="">
                                                            
                                </div> 
                                <div class="col-md-4 col-xl-4 mt-2">
                                	 <label class="" for="Chasis No">SGST Amount</label>
                                	<input readonly="true" id="sgst_amt_sum" name='totl_sgst_amt' class="form-control  total" value="">
                                                           
                                </div>
                          	<div class="col-md-4 col-xl-4 mt-2">
                              	 <label class="" for="Chasis No">Net Amount</label>
                              	<input readonly="true " id="net_amt_sum" name='totl_net_amt' class="form-control  total" value="">
                                                         
                              </div> 
                          </div>    
                    
                          <div class="row"  >
                            <div class="col-md-12 col-xl-12 mt-2" >
                              <label for="Chasis No">Remarks</label>
           
                              <textarea id="email" name="remark" class="form-control  " value="">{{old('remarks') }}</textarea>
                             	@error('remarks')
                              <span class="invalid-feedback d-block" role="alert">
                                  <strong>{{ 'Please enter prepared by name in alphabets' }}</strong>
                              </span>
                              @enderror                          
                          	</div>      
                           	<div class="col-md-12 text-center"  style="margin-top: 24px;" id="btn_sub">
                           		<a  style="margin-right: -8px;" id="submit_form"  value="Submit" class="btn btn-primary active ">Submit</a>
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
</div>{{--   

<div id="MyPopup" class="modal fade" style="padding-top: 164px;" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
            	
               	<button type="button" class="close" data-dismiss="modal">
                    &times;</button>
   		    </div>
            <div class="modal-body">
            	
            	
            </div>
            <div class="modal-footer">
            	 <button type="button" class="btn btn-danger" id="submit">
                    Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    Close</button>               
            </div>
        </div>
    </div>
  </div> --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript">

	 $(document).ready( function () {

    $(function() {
        $( ".datepicker" ).datepicker({format: 'yyyy-mm-dd' });    
      });
 
    $('#myTable').DataTable();
    $('#file').change(function() {
       //$('#target').submit();
      });

    $('#myTable1').DataTable({
    	"searching": false,
    	"bPaginate": false,
    });
 
$('#additem').click(function(){
  var tyre_comp_name = $('#tyre_comp_name').val();
  var tyre_type_name = $('#tyre_type_name').val();
  var tyre_condition = $('#tyre_condition').val();
    $.ajax({
          url: '{{route('tyre_purchase_order_save')}}',
          type: 'POST',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {'tyre_comp_name':tyre_comp_name,'tyre_type_name':tyre_type_name,'tyre_condition':tyre_condition,},
          success: function(data) {
           console.log(data)           
           $('#sup_table').html(data);
          }
      });
   });

$('#submit_form').click(function(){
    	
      $.ajax({
          url: '{{route('purchase_save')}}',
          type: 'POST',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: $('#create_form1').serialize(),
          success: function(data) {
            location.reload(); 
          }
      });

	});

});

$(document).on("click", "#trash1", function() {
    var id = $(this).attr('data');
    $.ajax({
          url: '{{route('tyre_purchase_order_remove')}}',
          type: 'POST',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data: {'id':id},
          success: function(data) {
           // location.reload();
           $('.sup_table').html(data);
          }
      });
});

$('#tyre_comp_name').on('change',function(){
            var com_id = $(this).val();
            var html   = [];

          $.ajax({
                url:'{{route('get_type')}}',
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {'id':com_id},
                success:function(data){                  
                  console.log(data);
                  $.each( data, function( key, cvalue ) { 
                    $('#tyre_type_name').empty();
                      $.each(cvalue.detail,function( key, value ){                        
                       $('#tyre_type_name').append('<option value='+value.id+'>'+ value.model_name+'</option>')
                    });
                });
              }
          })

    })

$(document).on('change','#is_mtr',function(){
	var id = $('#is_mtr:checked').val();
	if(id == 1){
		$.ajax({
	          url: '{{route('purchase_mtr_no')}}',
	          type: 'POST',
	          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	          data: {'id':id},
	          success: function(data) {	       
	            $('#btnShowPopup').prop('disabled', true);
              $('#tyre_comp_name').prop('disabled', true);
              $('#tyre_type_name').prop('disabled', true);
              $('#tyre_condition').prop('disabled', true);
              $('#additem').prop('disabled', true);
              $('#btnShowPopup').prop('disabled', true);
              $('#tabel').show();
              $('#btn_sub').show();
	            $('#mtr_no').prop('disabled', false);
	            $('#mtr_no').html(data);
	          }
	      });
	}
	else{
    $('#tyre_comp_name').prop('disabled', false);
    $('#tyre_type_name').prop('disabled', false);
    $('#tyre_condition').prop('disabled', false);
    $('#additem').prop('disabled', false);
		$('#btnShowPopup').prop('disabled',false);
    $('#mtr_no').prop('disabled', true);
    $('#tabel').show();
    $('#btn_sub').show();
	}
})

$(document).on('change','#mtr_no',function(event){
	event.preventDefault()
 	var id = $('#mtr_no').val();
      $.ajax({
          url : '{{route('pur_mtr_list')}}',
          type : 'POST',
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          data : {'id':id},
          success : function(data){
            $('.sup_table').html(data);
          }

      })
});
function gteGst(price, percentage) {
    var calcPrice =  (price/100) * percentage ;
    var discountPrice = calcPrice.toFixed(2); 
    return calcPrice
}

$(document).on('keyup','.qty , .rate , .disc_pct,.igst_pct,.cgst_pct,.sgst_pct',function(){
  var pre_id     = $(this).attr('data-id');
  var qty        = $('#qty_'+pre_id).val();
  var rate       = $('#rate_'+pre_id).val();
  var percentage = $('#disc_pct_'+pre_id).val();
  var igst_pct   = $('#igst_pct_'+pre_id).val();
  var cgst_pct   = $('#cgst_pct_'+pre_id).val();
  var sgst_pct   = $('#sgst_pct_'+pre_id).val();
  var multi      = qty*rate;
  var disc_pct   = gteGst(multi,percentage);  
  var igst_amt   = gteGst(multi,igst_pct);  
  var cgst_amt   = gteGst(multi,cgst_pct); 
  var sgst_amt   = gteGst(multi,sgst_pct); 
  var total_amt  = igst_amt+cgst_amt+sgst_amt+multi-disc_pct;

  if(multi !==''){
    $('#amt_'+ pre_id).val(multi);
    $('#disc_amt_'+pre_id).val(disc_pct);
    $('#igst_amt_'+pre_id).val(igst_amt);
    $('#cgst_amt_'+pre_id).val(cgst_amt);
    $('#sgst_amt_'+pre_id).val(sgst_amt);
    $('#net_amt_'+pre_id).val(total_amt);
    } 
})

$(document).on("change", ".qty", function() {
    var sum = 0;
    $("input[class *= 'qty']").each(function(){
        sum += +$(this).val();
    });
    $("#total_qty").val(sum);
});

$(document).on("keyup",'.qty , .rate , .disc_pct,.igst_pct,.cgst_pct,.sgst_pct', function() {
    var sum = 0;
    var disc_sum = 0;
    var igst_sum = 0;
    var cgst_sum = 0;
    var sgst_amt = 0;
    var net_amt  = 0;
    $("input[class *= 'ac_amt']").each(function(){
        sum += +$(this).val();
    });
    $("input[class *= 'disc_amt']").each(function(){
        disc_sum += +$(this).val();
    });
    $("input[class *= 'igst_amt']").each(function(){
        igst_sum += +$(this).val();
    });
    $("input[class *= 'cgst_amt']").each(function(){
        cgst_sum += +$(this).val();
    });
    $("input[class *= 'sgst_amt']").each(function(){
        sgst_amt += +$(this).val();
    });
    $("input[class *= 'net_amt']").each(function(){
        net_amt += +$(this).val();
    });
    $("#grand_total").val(sum);
    $('#disc_amt_sum').val(disc_sum);
    $('#igst_amt_sum').val(igst_sum);
    $('#cgst_amt_sum').val(cgst_sum);
    $('#sgst_amt_sum').val(sgst_amt);
    $('#net_amt_sum').val(net_amt);
});
</script>
@endsection