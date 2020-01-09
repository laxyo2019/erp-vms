@extends('state.main') 
@section('content')
<div class="container">
  <div id="ContentPlaceHolder1_PnlShow"  style="display: inline;">
    <div class="row">
      <div class="col-sm-12">
        <div class="box box-color orange box-condensed box-bordered">
          <div class="box-title">
            <div class="col-sm-6 col-md-6">
                <h3> CITY DETAILS </h3>
            </div>
            <div class="col-sm-6 col-md-6">
                <a class="btn btn-inverse pull-right" href="{{route('insurance_type.index')}}">Back</a>
            </div>
            <div id="add-city-form">
             <form class="well form-horizontal" method="post" action="{{route('insurance_type.store')}}">
              {{csrf_field()}}
                 <div class="form-group">
                    <label class="col-md-3 control-label"><span style="color: #FF0000; font-size:20px;">*</span>Insurance Company Name</label>
                    <div class="col-md-7 inputGroupContainer">
                       <div class="input-group">
                          <select name="ins_id" class="selectpicker form-control">
                             <option value="0" selected=" true " disabled="true">Select..</option>
                             @foreach($companies as $company)
                                <option value="{{$company->id}}">{{$company->comp_name}}</option>
                             @endforeach     
                          </select>
                        </div>
                         @error('comp_id')
                              <span class="invalid-feedback d-block" role="alert">
                                  <strong>{{ 'Please select company name' }}</strong>
                              </span>
                          @enderror
                    </div>
                 </div>
                 <div class="form-group">
                    <label class="col-md-3 control-label"><span style="color: #FF0000; font-size:20px;">*</span>Insurance Type </label>
                    <div class="col-md-7 inputGroupContainer">
                       <div class="input-group">
                          <input id="addressLine1" name="type_name" class="form-control"  value="" type="text">
                          @error('type_name')
                            <span class="invalid-feedback d-block" role="alert">
                               <strong>{{ 'Please enter insurance type' }}</strong>
                            </span>
                         @enderror

                        </div>
                    </div>
                  </div>
                  <div class="form-group">
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