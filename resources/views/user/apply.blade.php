@extends("layouts/app")

@section("content")
<div class="title-page">
	<div class="container"><h1>UNIVERSITY GUIDE</h1></div>
</div>

<div class="container apply-page">
	<div class="apply-header-page text-center">
		<img src="/img/img_title_application.svg" alt="Your online university application">
		<h2>One simple online form, multiple universities worldwide. Application fees waived!<br>Track your application progress here upon submission.</h2>
	</div><!-- /.apply-header-page -->

	<div class="some-courses" style="display: none;">
		<h3 class="text-center">Ready to apply? Start by searching for some courses.</h3>
		<div class="row list">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
			</div>
		</div>
	</div><!-- /.some-courses -->

	<div class="courses-apply">
		<div class="list-apply">
			<table class="courses">
				<thead class="hidden-xs hidden-sm">
	                <tr>
	                    <td class="priority">
	                    </td>
	                    <td class="header"></td>
	                    <td class="hidden-xs">
	                        <div class="course-status">
	                            <div class="status tip" title="" data-toggle="tooltip" data-placement="top" data-original-title="This indicates that your course application has been received by theRightU">
	                                Received
	                            </div>
	                            <div class="status tip" title="" data-toggle="tooltip" data-placement="top" data-original-title="This indicates that your course application has been reviewed">
	                                Reviewed
	                            </div>
	                            <div class="status tip" title="" data-toggle="tooltip" data-placement="top" data-original-title="This indicates that your course has been submitted to your selected universities">
	                                Submitted
	                            </div>
	                            <div class="status tip" title="" data-toggle="tooltip" data-placement="top" data-original-title="This indicates the outcome of your course application">
	                                Outcome
	                            </div>
	                        </div>
	                    </td>
	                    <td class="hidden-xs"></td>
	                    <td></td>
	                </tr>
	            </thead>
	            <tbody>
	            	<tr class="course-row">
	            		<td class="priority hidden-xs tip"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="Drag to prioritise">1</span></td>
	            		<td class="header">
				            <a href="#" class="course_name">Accounting and Finance</a>
				                <a href="javascript:;" onclick="javascript:if (!confirm('This course will be removed from your application. Are you sure?')) return false; else { unselect_and_reload('4269');}" class="remove-button"><i class="fa fa-times tip" title="" data-original-title="Remove course?"></i></a>
				            <span class="classification">BA (Hons)</span>
				            <div class="item tip" data-original-title="" title="">
				                <a class="university_name" href="/university/the-university-of-liverpool">The University of Liverpool , United Kingdom,  3 years</a>
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

	            	<tr class="course-row">
	            		<td class="priority hidden-xs tip"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="Drag to prioritise">2</span></td>
	            		<td class="header">
				            <a href="#" class="course_name">Accounting and Finance</a>
				                <a href="javascript:;" onclick="javascript:if (!confirm('This course will be removed from your application. Are you sure?')) return false; else { unselect_and_reload('4269');}" class="remove-button"><i class="fa fa-times tip" title="" data-original-title="Remove course?"></i></a>
				            <span class="classification">BA (Hons)</span>
				            <div class="item tip" data-original-title="" title="">
				                <a class="university_name" href="/university/the-university-of-liverpool">The University of Liverpool , United Kingdom,  3 years</a>
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
	            </tbody>
			</table>
		</div><!-- /.list-apply -->

		<div id="add_course_dialog">
			<h3>ADD COURSE</h3>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<select class="form-control">
							<option>Choose a country</option>
						</select>
					</div>

					<div class="form-group">
						<select class="form-control">
							<option>Choose a university</option>
						</select>
					</div>

					<div class="form-group">
						<select class="form-control">
							<option>Choose a course</option>
						</select>
					</div>
					<a class="" href="#" onclick="return false;" data-toggle="tooltip" data-html="true" title="" data-original-title="We are constantly expanding our university network, and more universities will be included shortly. &lt;br&gt;&lt;br&gt;If your choice of university or course is not available, simply leave a note under the comments section of the application form and we will assist.">I can’t find the university or course. Why?</a>
					<div class="text-right">
						<button class="btn btn-blue">Add Course</button>
					</div>
				</div>
			</div>
		</div><!-- /#add_course_dialog -->

		<div id="current_app_status">
			<button id="add-course-btn" class="btn btn-blue">Add more courses?</button><br/>
			<button id="apply-btn" class="btn btn-blue">Continue to apply</button>
		</div><!-- /#current_app_status -->
	</div><!-- /.courses-apply -->

	<div class="fine-print">
		<h2>Points to note</h2>
		<ol>
         <li>You can apply up to EIGHT courses.</li>
         <li>Maximum FIVE courses from the UK.</li>
         <li>Maximum THREE courses per university.</li>
         <li>Credit exemptions and scholarships will be considered on a per course basis.</li>
         <li>Our admissions team will contact you if there are any discrepancies with the information you provided.</li>
         <li>Application fees are waived (Except for some canadian universities)</li>
         <li>Have a chat with our education consultants if you are unsure which courses are right for you.</li>
         <li>Your online data is secure and confidential.</li>
     </ol>
	</div><!-- /.fine-print -->
	
</div>




@endsection
@section('scripts')
{{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
<script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> --}}

@endsection
