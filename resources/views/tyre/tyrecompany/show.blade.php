@extends('state.main') 
@section('content')
<div class="container">
<div id="ContentPlaceHolder1_PnlShow"  style="display: inline;">
  <div class="row">
    <div class="col-sm-12">
      <div class="box box-color orange box-condensed box-bordered">
        <div class="box-title">
          <div class="col-sm-6 col-md-6">
              <h3>TYRE COMPANY DETAILS  </h3>
          </div>
           <div class="col-sm-2 col-md-2">
              <a style="margin-bottom: 5px;" href="{{route('tyrecompany.create')}}" class="btn btn-inverse pull-right" ><i style="margin-right: 5px; " class="fas fa-plus"></i>ADD NEW</a>
          </div>
          <div class="col-sm-4 col-md-4">
           <form id="target" class="pull-right" action="{{ route('tyrecompany.import') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
               <div class="file btn btn-inverse"><i class="fas fa-file-download"></i>
                Import
                <input id="file" type="file" name="file"/>
              </div>
                <a class="btn btn-inverse" href="{{ route('tyrecompany.export') }}"><i style="margin-right: 5px; " class="fas fa-file-import"></i></i>Export Bulk Data</a>
                <a class="btn btn-inverse" href="{{route('tyrecompany.download') }}"><i style="margin-right: 5px; " class="fas fa-file-import"></i></i>Format</a>

            </form>  
                       
          </div>
                
            <table id="myTable">
              <thead>
                <tr >
                  <th style="width: 10px;">SR NO.</th>
                  <th style="width: 200px;">TYRE COMPANY</th>
                  <th style="width: 61px;">ACTION</th>
                </tr>
              </thead>
              
              <?php $count = 0; ?>
              @foreach($tyre as $Tyre) 
                 
                <tr>
                  <td style=" padding-left: 20px;">{{++$count}}</td>
                  <td style=" width:72%; padding-left: 20px">{{$Tyre->comp_name}}</td>
                  <td style="width:10%; text-align:center;">
                    <a style="padding: 2px 5px;" href="{{route('tyrecompany.edit',$Tyre->id)}}" runat="server" class="btn btn-success" rel="tooltip" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                    <a style="padding: 2px 7px;" onclick="javascript:return confirm('Do You Really Want To Delete This?');" href="{{route('tyrecompany.delete',$Tyre->id)}}" class="btn btn-inverse" rel="tooltip" title="" data-original-title="Delete"><i class="fa fa-times"></i></a>
                  </td>
                </tr>
                @endforeach
      
              </tbody>
            </table>
            
            </div>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
    $('#file').change(function() {
       $('#target').submit();
      });

} );

</script>
@endsection