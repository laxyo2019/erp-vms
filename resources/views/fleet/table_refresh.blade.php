<table class="table table-stripped table-bordered" id="account_table1" style="width: 100%">
	<thead>
		<tr>
			<th>SNo.</th>
			<th>User</th>
			<th>Email</th>	
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@php  $count =0;	@endphp 
		@foreach($user as $users)
			<tr>
				<td style="width: 16.66%">{{ ++$count}}</td>
				<td style="width: 16.66%">{{$users->name}}</td>
				<td style="width: 16.66%">{{$users->email}}</td>	
				<td><a href="{{route('destroy.account',$users->id)}}"><i class="fa-lg fa fa-trash" aria-hidden="true"></i></a>	</td>			
			</tr>
		@endforeach
	</tbody>
</table>
<script type="text/javascript">
	$(document).ready(function(){		
		$('#account_table1').DataTable();		
	})
</script>