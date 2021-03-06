@extends('state.main') 
@section('content')
<div class="container">
  <div id="ContentPlaceHolder1_PnlShow"  style="display: inline;">
    <div class="row">
      <div class="col-sm-12">
        <div class="box box-color orange box-condensed box-bordered">
          <div class="box-title">
            <div class="col-sm-6 col-md-6">
                <h3> MODEL DETAILS </h3>
            </div>
            <div class="col-sm-6 col-md-6">
                <a class="btn btn-inverse pull-right" href="{{route('vehicleModel.index')}}">Back</a>
            </div>
            <div id="add-city-form">
             <form class="well form-horizontal" method="post" action="{{route('vehicleModel.store')}}">
              {{csrf_field()}}
                 <div class="row mt-2">
                  <div class="col-sm-2 col-md-2"></div>
                  <div class="col-md-2">
                    <label class=" control-label"><span style="color: #FF0000;font-size:15px;">*</span>Vehicle Company</label>
                  </div>  
                  <div class="col-md-4 ">
                      <select name="vehicle_company" class="selectpicker form-control">
                        <option value="0" selected=" true" disabled="true">Select..</option>
                        @foreach($company as $companys)
                          <option value="{{$companys->id}}">{{$companys->comp_name}}</option>
                        @endforeach     
                      </select>
                   
                     @error('vehicle_company')
                        <span class="invalid-feedback d-block" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                     </div>  
                </div>                
                <div class="row mt-2">
                  <div class="col-sm-2 col-md-2"></div>
                    <div class="col-md-2 col-sm-2">
                      <label class=" control-label"><span style="color: #FF0000;font-size:15px;">*</span>Vehicle Model</label>
                    </div>
                    <div class="col-md-4">
                        <input id="addressLine1" name="model_name" class="form-control"  value="" type="text">
                        @error('model_name')
                          <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                  </div>  
                  <div class="row mt-2">
                    <div class="col-sm-2 col-md-2"></div>
                    <div class="col-md-2">
                      <label class=" control-label">Model Description</label>
                    </div>
                    <div class="col-md-4">
                      <input id="addressLine1" name="model_desc" class="form-control"  value="" type="text">
                        
                    </div>
                </div>
                 <div class="row mt-3">
                    <div class="col-md-12 text-center">
                      <input style="margin-right: -8px;" type="submit" value="Submit" class="btn btn-primary active "></input>
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
    $('#myTable').DataTable();
} );

</script>
@endsection