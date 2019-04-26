@extends('layouts.admin')

@section('title')

@endsection

@section('styles')
<!-- DataTables -->
	<link rel="stylesheet" href="{{ url('plugins/datatables/dataTables.bootstrap.css') }}">
	<link rel="stylesheet" href="{{ url('plugins/datatables/jquery.dataTables.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('datetimepicker/build/jquery.datetimepicker.min.css') }}">
@endsection

@section('content')
<div class="box">
	<div class="box-header">
		<div class="col-md-5"><h3 class="box-title">Assessments</h3></div>
		<div class="col-md-1">
			<div class="form-group">
				<h4 class="box-title">From date</h4>				
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<input type="text" name="from_date" id="from-date" class="form-control" placeholder="dd/mm/YYYY" />
			</div>
		</div>
		<div class="col-md-1">
			<div class="form-group">
				<h4 class="">To Date</h4>				
			</div>
		</div>
		<div class="col-md-2">
			<div class="form-group">
				<input type="text" name="to_date" id="to-date" class="form-control" placeholder="dd/mm/YYYY" />
			</div>
		</div>
		<div class="col-md-1">
			<a href="" onclick="exportToExcel(); return false;" class="btn btn-success btn-xs">Export to xls</a>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example2" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Course Completed</th>
					<th>Avarage Score</th>
					<th>Created at</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($assessments as $key => $assessment)
				<tr>
					@if ($assessment->status == 0)
					<td><b>{{ $key+1 }}</b></td>
					<td><b>{{ $assessment->name }}</b></td>
					<td><b>{{ $assessment->email }}</b></td>
					<td><b>{{ $assessment->phone }}</b></td>
					<td><b>{{ $assessment->course_completed }}</b></td>
					<td><b>{{ $assessment->avg_score }}</b></td>
					<td><b>{{ $assessment->created_at->format('d/m/Y') }}</b></td>
					@else
					<td>{{ $key+1 }}</td>
					<td>{{ $assessment->name }}</td>
					<td>{{ $assessment->email }}</td>
					<td>{{ $assessment->phone }}</td>
					<td>{{ $assessment->course_completed }}</td>
					<td>{{ $assessment->avg_score }}</td>
					<td>{{ $assessment->created_at->format('d/m/Y') }}</td>
					@endif
					<td><a href="{{ route('admin.assessment.show', ['assessment_id' => $assessment->id]) }}" class="btn btn-success btn-xs">Detail</a>
						<a href="#" class="btn btn-danger btn-xs" onclick="confirmDelete('{{ route('admin.assessment.remove', ['assessment_id' => $assessment->id]) }}')">Remove</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->

<!-- Modal delete -->
<div class="modal fade" id="modal-delete" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Confirm delete</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure to do this action?</p>
			</div>
			<div class="modal-footer">
				<a href="" class="btn btn-danger">Delete</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
@endsection

@section('scripts')

<!-- DataTables -->
<script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('datetimepicker/build/jquery.datetimepicker.full.js') }}"></script>
<script type="text/javascript">
	var table = $('#example2').DataTable();

 	$('#from-date').datetimepicker({
        format: 'd/m/Y',
        timepicker:false,
    });

    $('#to-date').datetimepicker({
        format: 'd/m/Y',
        timepicker:false,
    });

    $('#from-date').on('change', function() {
        if ($(this).val() != '') {
            var selectDate = formatDate($(this).val());
            $('#to-date').datetimepicker({minDate : selectDate});
        }
    });

    $('#to-date').on('change', function() {
        if ($(this).val() != '') {
            var selectDate = formatDate($(this).val());        
            $('#from-date').datetimepicker({maxDate : selectDate});
        }
    });

    function formatDate(selectDate) {
        selectDate = selectDate.split('/');
        selectDate = new Date(selectDate[2], selectDate[1]-1, selectDate[0]);

        return selectDate;
    }

    $('.dataTables_filter').hide();

    $.fn.dataTable.ext.search.push(
        function( settings, data, dataIndex ) {
            var fromDate = $('#from-date').val();
            var toDate = $('#to-date').val();

            fromDate = fromDate!=''?fromDate.split('/'):'';
            toDate = toDate!=''?toDate.split('/'):'';
            curentDate = data[6].split(' ')[0].split('/');

            if (fromDate != ''){
            	fromDate = parseInt(fromDate[0]) + parseInt(fromDate[1])*30 + parseInt(fromDate[2])*12*30;
            }

            if (toDate != ''){
            	toDate = parseInt(toDate[0]) + parseInt(toDate[1])*30 + parseInt(toDate[2])*12*30;
            }

            curentDate = parseInt(curentDate[0]) + parseInt(curentDate[1])*30 + parseInt(curentDate[2])*12*30;

            if (fromDate == '' && toDate == '')
            	return true;

            if (
            	((fromDate != '' && fromDate <= curentDate) && (toDate == '')) ||
            	((toDate != '' && toDate >= curentDate) && (fromDate == '')) 
            	)  
            {
            	return true;
            }

            if ( (toDate != '' && toDate >= curentDate) && (fromDate != '' && fromDate <= curentDate) )
            	return true;

            return false;
        }   
    );


    //Delay time for typing to search coupon
    var delay = (function(){
        var timer = 0;
        return function(callback, ms){
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        };
    })();

    $('#from-date').on('change', function() {
        keywords = $(this).val();
        table.draw();
        delay(function(){
            if (keywords == null || keywords == '') {
                return false;
            }
        }, 1000);
    });

    $('#to-date').on('change', function() {
        keywords = $(this).val();
        table.draw();
        delay(function(){
            if (keywords == null || keywords == '') {
                return false;
            }
        }, 1000);
    });

    //Export file
    function exportToExcel() {
    	var fromDate = $('#from-date').val();
    	var toDate = $('#to-date').val();
    	var url = "{{ route('admin.assessment.export') }}" + "?fromDate=" + fromDate + "&toDate=" + toDate;
		
		 window.open(url, '_blank');    	
    }
</script>
<script type="text/javascript">
	function confirmDelete(url) {
		$('#modal-delete a').attr('href',url);
		$('#modal-delete').modal('show');
	}
</script>
@endsection