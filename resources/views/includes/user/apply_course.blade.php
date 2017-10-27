<tr class="course-row">
	<td class="priority hidden-xs tip"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="Drag to prioritise">{{ $data['order'] }}</span></td>
	<td class="header">
		<a href="#" class="course_name">{{ $data['course_name'] }}</a>
		<a href="javascript:;" onclick="javascript:if (!confirm('This course will be removed from your application. Are you sure?')) return false; else { unselect_and_reload('4269');}" class="remove-button"><i class="fa fa-times tip" title="" data-original-title="Remove course?"></i></a>
		<span class="classification">BA (Hons)</span>
		<div class="item tip" data-original-title="" title="">
			<a class="university_name" href="/university/the-university-of-liverpool">{{ $data['university_name'] }} , {{ $data['country_name'] }},  {{ $data['duration'] }} years</a>
		</div>
	</td>
	<td class="submitted hidden-xs">
		<div class="course-status">
			<div class="status">
				<span class="ir app yet tip" title="" data-toggle="tooltip" data-original-title="This course has been shortlisted but not yet submitted to us. Chat with us online if you require some guidance."></span>
			</div>
			<div class="status">
				<span class="ir app yet tip" title="" data-toggle="tooltip" data-original-title="No updates has been provided at this stage yet."></span>
			</div>
			<div class="status">
				<span class="ir app yet tip" title="" data-toggle="tooltip" data-original-title="No updates has been provided at this stage yet."></span>
			</div>
			<div class="status">
				<span class="ir app yet tip" title="" data-toggle="tooltip" data-original-title="No updates has been provided at this stage yet."></span>
			</div>
		</div>
	</td>
</tr>