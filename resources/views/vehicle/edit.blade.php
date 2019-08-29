@extends('state.main') 
@section('content')
<div class="container">
  <div id="ContentPlaceHolder1_PnlShow"  style="display: inline;">
    <div class="row">
      <div class="col-sm-12">
        <div class="box box-color orange box-condensed box-bordered">
          <div class="box-title">
            <div class="col-sm-6 col-md-6">
                <h3> COMPANY DETAILS </h3>
            </div>
            <div class="col-sm-6 col-md-6">
                <a class="btn btn-inverse pull-right" href="{{route('vehicle.index')}}">Back</a>
            </div>
            <div id="add-city-form">
             <form class="well form-horizontal" method="post" action="{{route('vehicle.update',$vehicle[0]->id)}}">
              {{csrf_field()}}
              @method('PATCH')
                 <div class="form-group">
                    <label class="col-md-3 control-label"><span style="color: #FF0000;font-size:15px;">*</span>Vehicle Company</label>
                    <div class="col-md-4 inputGroupContainer">
                       <div class="input-group">
                          <input id="addressLine1" name="vehicle_company" class="form-control"  value="{{old('vehicle_company') ?? $vehicle[0]->comp_name}}" type="text">
                          @error('vehicle_company')
                            <span class="invalid-feedback d-block" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                         @enderror

                        </div>
                    </div>
                  </div>
                   <div class="form-group">
                    <label class="col-md-3 control-label">Company Description</label>
                    <div class="col-md-4 inputGroupContainer">
                       <div class="input-group">
                          <input id="addressLine1" name="company_description" class="form-control"  value="{{old('company_description') ?? $vehicle[0]->comp_desc}}" type="text">
                          @error('company_description')
                            <span class="invalid-feedback d-block" role="alert">
                               <strong>{{ $message }}</strong>
                            </span>
                         @enderror

                        </div>
                    </div>
                  </div>
                 <div class="form-group">
                    <div class="col-md-4">
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
</div>    

<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>
@endsection