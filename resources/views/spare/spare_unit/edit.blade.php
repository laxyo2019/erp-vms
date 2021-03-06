@extends('state.main') 
@section('content')
<div class="container">
  <div id="ContentPlaceHolder1_PnlShow"  style="display: inline;">
    <div class="row">
      <div class="col-sm-12">
        <div class="box box-color orange box-condensed box-bordered">
          <div class="box-title">
            <div class="col-sm-6 col-md-6">
                <h3>UPDATE SPARE UNIT</h3>

            </div>
            <div class="col-sm-6 col-md-6">
                <a class="btn btn-inverse pull-right" href="{{route('spareunit.index')}}">Back</a>
            </div>
            <div id="add-city-form">
             <form enctype="multipart/form-data" class="well form-horizontal" method="post" action="{{route('spareunit.update',$data->id)}}">
              {{csrf_field()}}
              @method("PATCH")
                 <div class="card-body " >
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xl-12" id="mytable1">
                        	<div class="row">

				                <div class="col-md-4 col-xl-4 mt-2 ">
	                                <label class="pull-right" for="Vehicle No." >Spare Unit Name</label><span class="pull-right" style="color: #FF0000;font-size:15px;">*</span>               
	                               
	                            </div>

	                            <div class="col-md-4 col-xl-4 mt-2">
	                                                               
	                                <input id="ins_policy_no" class="form-control" name="unit_name" value="{{old('unit_name') ?? $data->unit_name}}" > 
	                                @error('unit_name')
			                            <span class="invalid-feedback d-block pull-right" role="alert">
			                               <strong>{{ 'Please enter spare type name' }}</strong>
			                            </span>
			                         @enderror
	                            </div>
				                
				            </div>
				            <div class="row">

				                <div class="col-md-4 col-xl-4 mt-2 ">
	                                <label class="pull-right" for="Vehicle No." >Spare Unit Description</label>               
	                               
	                            </div>

	                            <div class="col-md-4 col-xl-4 mt-2">
	                                                               
	                                <textarea id="ins_policy_no" class="form-control" name="unit_desc" value="" >{{old('unit_desc') ?? $data->unit_desc}}</textarea> 
	                                @error('unit_desc')
			                            <span class="invalid-feedback d-block pull-right" role="alert">
			                               <strong>{{ 'Please enter agent name' }}</strong>
			                            </span>
			                         @enderror
	                            </div>
				                
				            </div>
                           
                         <div class="col-md-6" style="margin-top: 24px;">
                         	<input  style="margin-right: -8px;" type="submit" value="Submit" class="btn btn-primary active pull-right">
                       	</div>

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
<script type="text/javascript">
  
</script>

@endsection