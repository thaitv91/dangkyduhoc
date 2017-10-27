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

	<div class="some-courses">
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
					<?php foreach ($courses as $key => $course): ?>
						<tr class="course-row">
							<td class="priority hidden-xs tip"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="Drag to prioritise">{{ $key+1 }}</span></td>
							<td class="header">
								<a href="#" class="course_name">{{ $course->name }}</a>
								@if ($course->review_status == 0)
								<a href="javascript:;" onclick="removeCourse(this)" data-course-id="{{ $course->id }}" class="remove-button">
									<i class="fa fa-times tip" title="" data-original-title="Remove course?"></i>
								</a>
								@endif
								<span class="classification">BA (Hons)</span>
								<div class="item tip" data-original-title="" title="">
									<a class="university_name" href="/university/the-university-of-liverpool">{{ $course->university->name }} , {{ $course->country() }},  {{ $course->information->duration}} years</a>
								</div>
							</td>
							<td class="submitted hidden-xs">
								<div class="course-status">
									@php if($course->receive_status==0) $receive_status = 'ir app yet tip'; @endphp 
				                    @php if($course->receive_status==1) $receive_status = 'ir app done tip'; @endphp  
				                    @php if($course->receive_status==2) $receive_status = 'ir app problem tip'; @endphp  
				                    @php if($course->review_status==0) $review_status = 'ir app yet tip'; @endphp 
				                    @php if($course->review_status==1) $review_status = 'ir app done tip'; @endphp  
				                    @php if($course->review_status==2) $review_status = 'ir app problem tip'; @endphp  
				                    @php if($course->submit_status==0) $submit_status = 'ir app yet tip';  @endphp 
				                    @php if($course->submit_status==1) $submit_status = 'ir app done tip';  @endphp 
				                    @php if($course->submit_status==2) $submit_status = 'ir app problem tip'; @endphp  
				                    @php if($course->outcome_status==0) $outcome_status = 'ir app yet tip';  @endphp 
				                    @php if($course->outcome_status==1) $outcome_status = 'ir app done tip';  @endphp 
				                    @php if($course->outcome_status==2) $outcome_status = 'ir app problem tip'; @endphp
									<div class="status">
										<span class="{{ $receive_status }}" title="" @if ($course->receive_status == 0) data-toggle="tooltip" data-original-title="This course has been shortlisted but not yet submitted to us. Chat with us online if you require some guidance." @endif></span>
										<br>
										{{ $course->received }}
									</div>
									
									<div class="status">
										<span class="{{ $review_status }}" title="" @if($course->review_status == 0) data-toggle="tooltip" data-original-title="No updates has been provided at this stage yet." @endif></span>
										<br>
										{{ $course->reviewd }}
									</div>
									
									<div class="status">
										<span class="{{ $submit_status }}" title="" @if($course->submit_status == 0) data-toggle="tooltip" data-original-title="No updates has been provided at this stage yet." @endif></span>
										<br>
										{{ $course->submitted }}
									</div>
									
									<div class="status">
										<span class="{{ $outcome_status }}" @if($course->outcome_status == 0) title="" data-toggle="tooltip" data-original-title="No updates has been provided at this stage yet." @endif></span>
										<br>
										{{ $course->outcome }}
									</div>
								</div>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div><!-- /.list-apply -->

		<div id="add_course_dialog">
			<h3>ADD COURSE</h3>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<select class="form-control" name="country" id="country">
							<option selected disabled>Choose a country</option>
							<?php foreach ($countries as $key => $country): ?>
								<option value="{{ $country->slug }}">{{ $country->name }}</option>
							<?php endforeach ?>
						</select>
					</div>

					<div class="form-group">
						<select class="form-control" name="university" id="universities">
							<option selected disabled>Choose a university</option>
						</select>
					</div>

					<div class="form-group">
						<select class="form-control" name="course" id="course">
							<option selected disabled>Choose a course</option>
						</select>
					</div>
					<a class="" href="#" onclick="return false;" data-toggle="tooltip" data-html="true" title="" data-original-title="We are constantly expanding our university network, and more universities will be included shortly. &lt;br&gt;&lt;br&gt;If your choice of university or course is not available, simply leave a note under the comments section of the application form and we will assist.">I can’t find the university or course. Why?</a>
					<div class="text-right">
						<button class="btn btn-blue" onclick="addCourse()">Add Course</button>
					</div>
				</div>
			</div>
		</div><!-- /#add_course_dialog -->

		<div id="continue-apply" style="display: none">
			@if (Auth::check())
				@include('user/continue_apply')
			@endif
		</div>

		<div id="current_app_status">
			<button id="add-course-btn" class="btn btn-blue">Add more courses?</button><br/>
			<button id="apply-btn" class="btn btn-blue">Continue to apply</button>
		</div><!-- /#current_app_status -->

		<div class="fine-print">
			<h2>Points to note</h2>
			<ol>
				<li>You can apply up to EIGHT courses.</li>
				<li>Maximum FIVE courses from the UK.</li>
				<li>Maximum THREE courses per university.</li>
				<li>Credit exemptions and scholarships will be considered on a per course basis.</li>
				<li>Our admissions team will contact you if there any discrepancies with the information you provided.</li>
				<li>Application fees are waived (Except for some canadian universities)</li>
				<li>Have a chat with our education consultants if you are unsure which courses are right for you.</li>
				<li>Your online data is secure and confidential.</li>
			</ol>
		</div><!-- /.fine-print -->

	</div>
</div><!-- /.courses-apply -->
		<div class="continue-to-apply hidden" id="applicationSection">
			<div class="row appDiv details_container clearfix relative odd rowsec bgr-white">
				<div class="col-lg-12">
					<form>
						<div id="step_1_header" class="section header open">
	                  <h3>1) PERSONAL DETAILS</h3>
	               </div><!-- /#step_1_header -->

	               <div id="step_1" class="questionaire section block">
                    <table class="questions_table">
                        <tbody>
                        	<tr>
                           	<td><label for="GivenName">Given name</label></td>
                           	<td><input type="text" id="GivenName" name="GivenName" required="required"></td>
                        	</tr>
	                        <tr>
	                            <td><label for="FamilyName">Family name</label></td>
	                            <td><input type="text" id="FamilyName" name="FamilyName" required="required"></td>
	                        </tr>
	                        <tr>
	                            <td><label for="email">Email address&nbsp;<i class="fa fa-question-circle tip" title="Please ensure that the email you provide is correct and active. Communications with you will be made through this email."></i></label></td>
	        <td><input type="text" name="email" id="email" required="required" value="duyenphan@luxcer.com" class="emailaddress"></td>

	                        </tr>
	                        <tr>
	                            <td>
	                                <label for="question_91_49">
	                                    Gender
	                                </label>
	                            </td>

	                            <td>
	                                    <input type="radio" id="GenderFeMale" name="Gender" value="Female" checked="" required="required"><label for="GenderFeMale">Female</label>
	                                    <br>
	                                    <input type="radio" id="GenderMale" name="Gender" value="Male" required="required"><label for="GenderMale">Male</label>
	                                    <br>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                                <label for="DOBCnt">
	                                    Date of birth
	                                </label>
	                            </td>
	                            <td class="td-date">
	<input class="textbox DOB hasDatepicker" datetype="dob" id="dp1508750818053" name="DOB" placeholder="eg. d/m/yyyy" required="required" type="dates" value="">                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                                <label for="applicant_country">
	                                    Country of birth
	                                </label>
	                            </td>
	                            <td>
	                                <div class="styled-select country">
	                                    <select id="applicant_country" name="CountryID">
	                                        <option value="" selected="selected" disabled="disabled">Choose One</option>
	                                            <option value="195" selected="">Singapore</option>
	                                            <option value="27">Brunei</option>
	                                            <option value="115">Cambodia</option>
	                                            <option value="46">China</option>
	                                            <option value="99">Indonesia</option>
	                                            <option value="124">Laos</option>
	                                            <option value="155">Malaysia</option>
	                                    </select>
	                                </div>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                                <label for="add_course_nationality">
	                                    Nationality
	                                </label>
	                            </td>
	                            <td>
	                                <div class="styled-select country">
	                                    <select id="add_course_nationality" name="NationalityID">
	                                        <option value="" selected="selected" disabled="disabled">Choose One</option>
	                                            <option value="159" selected="">Singaporean</option>
	                                            <option value="28">Bruneian</option>
	                                            <option value="31">Burmese</option>
	                                            <option value="33">Cambodian</option>
	                                            <option value="40">Chinese</option>
	                                            <option value="62">Filipino</option>
	                                            <option value="83">Indonesian</option>
	                                            <option value="98">Laotian</option>
	                                            <option value="109">Malaysian</option>
	                                    </select>
	                                </div>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                                <label for="Passport">
	                                    Passport no.
	                                </label>
	                            </td>
	                            <td>
	                                <input type="text" id="Passport" name="Passport" required="required">
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                                <label for="CorrespondenceAddress">
	                                    Correspondence address
	                                </label>
	                            </td>
	                            <td>
	                                <textarea id="CorrespondenceAddress" name="CorrespondenceAddress" placeholder="eg. Residential address" required="required"></textarea>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                                <label for="PermanentAddress">
	                                    Permanent address&nbsp;<i class="fa fa-question-circle tip" title="Leave blank if this is the same as correspondence address."></i>
	                                </label>
	                            </td>
	                            <td>
	                                <textarea id="PermanentAddress" name="PermanentAddress" placeholder="Leave blank if this is the same as correspondence address."></textarea>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                                <label for="MobilePhone">
	                                    Mobile number
	                                </label>
	                            </td>
	                            <td>
	                                <input type="text" id="MobilePhone" name="MobilePhone" required="required" class="number">
	                            </td>
	                        </tr>
	                        <tr>
	                            <td class="td-short">
	                                <label for="HomePhone">
	                                    Home number
	                                </label>
	                            </td>
	                            <td class="td-short">
	                                <input type="text" id="HomePhone" name="HomePhone" required="required" class="number">
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                                <br>
	                                <br>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                                <label for="Intake">
	                                    Enrolment year&nbsp;<i class="fa fa-question-circle tip" title="When is the earliest would you like to enrol into university?"></i>
	                                </label>
	                            </td>
	                            <td>
	                                <div class="styled-select intake">
	                                    <select id="applicant_intake" name="Intake" required="required" class="year">
	                                        <option value="" selected=""> </option>

	                                    <option value="2017" selected="">2017</option>
	                                    <option value="2018">2018</option>
	                                    <option value="2019">2019</option>
	                                    <option value="2020">2020</option>
	                                    <option value="2021">2021</option>
	                                    <option value="2022">2022</option>

	                                    </select>
	                                </div>
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                                <label for="question_91_59[]">
	                                    Funding source
	                                </label>
	                            </td>

	                            <td>
	                                    <input data-groupname="fundingSource" type="checkbox" name="IsScholarship" value="true" required="required" id="scholarship"><label for="scholarship">Scholarship</label><br>
	                                    <input data-groupname="fundingSource" type="checkbox" name="IsSelfFunded" value="true" required="required" id="selffunded"><label for="selffunded">Self Funded</label><br>
	                            </td>
	                        </tr>

	                        <tr>
	                            <td>
	                                <label>
	                                    Free consultation&nbsp;<i class="fa fa-question-circle tip" title="Would you like to receive a free assessment of your chosen courses by our education consultants?"></i>
	                                </label>
	                            </td>
	                            <td>
	                                    <input type="radio" name="IsHelp" value="true" checked="checked" id="IsHelpYes"><label for="IsHelpYes">Yes</label>
	                                    <br>
	                                    <input type="radio" name="IsHelp" value="false" id="IsHelpNo"><label for="IsHelpNo">No</label>
	                                    <br>
	                            </td>
	                        </tr>

	                        <tr>
	                            <td>
	                                <label for="question_91_62">
	                                    Disability
	                                </label>
	                            </td>
	                            <td>
	                                    <input type="radio" name="HasDisability" value="false" checked="checked" required="required" id="disabilityNo"><label for="disabilityNo">No</label>
	                                    <br>
	                                    <input type="radio" name="HasDisability" value="true" required="required" id="disabilityYes"><label for="disabilityYes">Yes</label>
	                                    <br>
	                            </td>
	                        </tr>

	                        <tr>
	                            <td>
	                                <label for="question_91_61">
	                                    Criminal record
	                                </label>
	                            </td>
	                            <td>
	                                    <input type="radio" name="HasCriminalRecord" value="false" checked="checked" required="required" id="criminalNo"><label for="criminalNo">No</label>
	                                    <br>
	                                    <input type="radio" name="HasCriminalRecord" value="true" required="required" id="criminalYes"><label for="criminalYes">Yes</label>
	                                    <br>
	                            </td>
	                        </tr>


                    		</tbody>
                   	</table>
                    <br>
                    <center><input id="step_1_save_button" class="blue-btn" onclick="javascript:save_and_next(2);" type="button" value="Save and continue"></center>
                </div><!-- #step_1 -->

                <div id="step_2_header" class="section header martop5px">
                    <h3>2) EDUCATION &amp; WORK</h3>
                </div><!-- /#step_2_header -->

                <div id="step_2" class="questionaire section block">
                    <p><strong>Education background</strong>&nbsp;<i class="fa fa-question-circle tip" title="Kindly provide the details of your education, including your current studies and all previous studies from secondary level onwards."></i></p>
                    <table id="education" class="exp">
                       <tbody data-index="0">
                           <tr>
                               <td class="td-sm">

                                   <input type="dates" name="UniApplication_Education[0].StartDate" placeholder="Start" value="" datatype="edu_start" index="0" id="dp1508751721287" class="hasDatepicker">
                               </td>
                               <td class="td-sm">
                                   <input type="dates" name="UniApplication_Education[0].EndDate" placeholder="End" value="" datatype="edu_end" index="0" id="dp1508751721288" class="hasDatepicker">
                               </td>
                               <td>
                                   <input type="text" name="UniApplication_Education[0].School" placeholder="Name of School or Institution" value="" datatype="edu_school" index="0">
                               </td>
                               <td class="td-md">
                                   <div class="styled-select">
                                       <select class="select-with-placeholder select-empty" name="UniApplication_Education[0].School_TypesID" datatype="edu" index="0">
                                           <option selected="" disabled="" hidden="" value="">Qualification</option>
                                           <option value="-1"></option>
                                           <option value="2">GCE 'O' Levels</option>
                                           <option value="3">GCE 'A' Levels</option>
                                           <option value="4">Polytechnic Diploma</option>
                                           <option value="5">Private Diploma</option>
                                           <option value="6">International Baccaleaurate</option>
                                           <option value="7">Sijil Tinggi Persekolahan Malaysia</option>
                                           <option value="9">Bachelor's</option>
                                           <option value="10">Master's</option>
                                           <option value="8">Others</option>
                                       </select>
                                   </div>
                               </td>
                               <td class="td-sm">
                                   <input class="hide button del" type="button" onclick="javascript: remove_edu(0);" value="Remove">

                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="button" class="add button" value="Add new" onclick="javascript:add_edu_row('education');">
                               </td>
                           </tr>
                       </tbody>
                    </table>

                    <br>
                    <p>
                        <strong>Work experience</strong>&nbsp;<i class="fa fa-question-circle tip" title="Please provide details of your working experience, including both part-time and full-time positions. If you do not have the exact start/end dates, approximate dates are fine."></i>
                    </p>
                    <table id="work" class="exp">
                       <tbody id="work_exp" data-index="0">
                           <tr>
                               <td class="td-sm">
                                   <input type="dates" name="UniApplication_Work[0].StartDate" placeholder="Start" datatype="work_start" index="0" id="dp1508751721289" class="hasDatepicker">
                               </td>
                               <td class="td-sm">
                                   <input type="dates" name="UniApplication_Work[0].EndDate" placeholder="End" datatype="work_end" index="0" id="dp1508751721290" class="hasDatepicker">
                               </td>
                               <td>
                                   <input type="text" name="UniApplication_Work[0].Employer" placeholder="Employer's name" datatype="work" index="0">
                               </td>
                               <td class="td-sm">
                                   <div class="styled-select">
                                       <select name="UniApplication_Work[0].IsFullTime">
                                           <option value="true">Full-Time</option>
                                           <option value="false">Part-Time</option>
                                       </select>
                                   </div>
                               </td>
                               <td>
                                   &nbsp;
                               </td>
                           </tr>
                           <tr>
                               <td colspan="4">
                                   <input class="work_desc" type="text" name="UniApplication_Work[0].Description" placeholder="Job position &amp; brief description">
                               </td>
                               <td class="td-sm">
                                   <input class="del button hide" type="button" onclick="javascript:remove_work(0);" value="Remove">
                               </td>
                           </tr>
                           <tr>
                               <td>
                                   <input type="button" class="add button" value="Add new" onclick="javascript: add_work_row('work');">
                               </td>
                           </tr>
                       </tbody>
                    </table>
                    <br>
                    <p><strong>English proficiency tests</strong>&nbsp;<i class="fa fa-question-circle tip" title="Indicate all English Tests that you have taken in the last 2 years (e.g. IELTS, TOEFL)"></i></p>
                    <table id="english" class="exp">
	                    <tbody id="english_test" data-index="0">
	                        <tr>
	                            <td class="td-sm">
	                                <input type="dates" name="UniApplication_EnglishProficiency[0].Date" placeholder="Date" datatype="test_date" index="0" id="dp1508751721291" class="hasDatepicker">
	                            </td>
	                            <td class="td-sm">
	                                <div class="styled-select">
	                                    <select class="select-with-placeholder select-empty" name="UniApplication_EnglishProficiency[0].LanguageExamID" datatype="test_type" index="0">
	                                        <option value="" disabled="" selected="" hidden="">Certificate</option>
	                                        <option value="-1"></option>
	                                        <option value="1">IELTS</option>
	                                        <option value="2">TOEFL iBT (internet based)</option>
	                                        <option value="3">TOEFL PBT (paper based)</option>
	                                        <option value="4">PTE Academic</option>
	                                        <option value="5">Cambridge English Advanced (CAE)</option>
	                                        <option value="6">Pearson Test of English (PTE)</option>
	                                        <option value="7">Occupational English Test</option>
	                                    </select>
	                                </div>
	                            </td>
	                            <td>
	                                <input type="text" name="UniApplication_EnglishProficiency[0].ReferenceNo" placeholder="Reference no." datatype="test_ref" index="0" class="fullwidth">
	                            </td>
	                            <td class="td-sm">
	                                <input class="del button hide" type="button" onclick="javascript:remove_english_test(0);" value="Remove">
	                            </td>
	                        </tr>
	                        <tr>
	                            <td>
	                                <input type="button" class="add button" value="Add new" onclick="javascript: add_eng_row('english');">
	                            </td>
	                        </tr>
	                    </tbody>

                    </table>
                    <br>
                    <center><input id="step_2_save_button" class="blue-btn" onclick="javascript: save_and_next(3);" type="button" value="Save and continue"></center>
                </div><!-- /#step_2 -->

                <div id="step_3_header" class="section header martop5px">
                    <h3>3) DOCUMENTS</h3>
                </div><!-- /#step_3_header -->

                <div id="step_3" class="questionaire section block">
                    <ol>
                        <li>Kindly upload a copy of your transcripts (O levels &amp; above), testimonials, and passport (bio data and photo page).</li>
                        <li>If you are unable to obtain a scanner now, you may use your camera phone. Your photos must well lit and all corners of the document must be visible.</li>
                        <li>Accepted file types include .zip (preferred), .pdf, .jpg, .jpeg, .gif, .doc, docx, .ppt, .pptx</li>
                        <li>Maximum 50 MB per file.</li>
                        <li>The transfer of your documents to our servers are secure.</li>
                    </ol>

                    <div id="dropzone" class="martop30">
                        <div class="dropzone dz-clickable" id="documentupload">
                            <div class="dz-message">
                                <img src="/img/file-upload.svg">
                                <br>
                                Drag and drop your academic transcripts here to help us speed up the assessment process. (We accept zip/scans/pdf/photo files)<br>
                            </div>
                        </div>
                    </div>
                    <br><br><br>

						    <h4>United Kingdom</h4>
						    <table class="questions_table">
						        <tbody>
		                    <tr>

		                        <td>
		                            <input type="hidden" name="UniApplication_Questions[0].QuestionID" value="63">
		                            <label for="UniApplication_Questions[0].Answer" &lt;span="" class="&quot;ir" i="" tip&quot;="" title="&quot;Your" personal="" statement="" the="" admissions="" board="" is="" optional="" at="" this="" point="" in="" time.="" our="" consultants="" will="" provide="" you="" with="" additional="" guidance="" a="" later="" stage.&quot;&gt;info&lt;="" span&gt;="">
		                                Personal Statement
		                                    <i class="fa fa-question-circle tip" title="Your personal statement for the admissions board is OPTIONAL at this point in time. Our consultants will provide you with additional guidance at a later stage."></i>
		                            </label>
		                        </td>		                        
	                            <td>
	                                    <textarea id="UniApplication_Questions[0].Answer" name="UniApplication_Questions[0].Answer" rows="15" style="height:auto;min-width:80%" onkeyup="countChar(this,4000)"></textarea>
	                                <br><br>
	                                
	                            </td>

		                    </tr>
		                    <tr>

		                        <td>
		                            <input type="hidden" name="UniApplication_Questions[1].QuestionID" value="64">
		                            <label for="UniApplication_Questions[1].Answer" &lt;span="" class="&quot;ir" i="" tip&quot;="" title="&quot;Deferred" entry="" allows="" you="" to="" be="" enrolled="" the="" september="" 2015="" intake="" (instead="" of="" 2014).="" if="" have="" chosen="" defer,="" will="" not="" considered="" 2014="" entry.&quot;&gt;info&lt;="" span&gt;="">
		                                Would you like to be considered for deferred entry?
		                                    <i class="fa fa-question-circle tip" title="Deferred entry allows you to be enrolled for the September 2015 intake (instead of 2014). If you have chosen to defer, you will not be considered for the 2014 entry."></i>
		                            </label>
		                        </td>		                        

                              <td>
                                        <input type="radio" name="UniApplication_Questions[1].Answer" value="No" required="required" id="UniApplication_Questions[1].Answer_No"><label for="UniApplication_Questions[1].Answer_No">No</label>
                                    <br>
                                        <input type="radio" name="UniApplication_Questions[1].Answer" value="Yes" required="required" id="UniApplication_Questions[1].Answer_Yes"><label for="UniApplication_Questions[1].Answer_Yes">Yes</label>
                                    <br>
                                        <label for="UniApplication_Questions[1].MoreTextAnswer">For which courses?</label>&nbsp;&nbsp;<input id="UniApplication_Questions[1].MoreTextAnswer" type="text" class="more" name="UniApplication_Questions[1].MoreTextAnswer">
                            </td>
		                    </tr>
		                    <tr>

		                        <td>
		                            <input type="hidden" name="UniApplication_Questions[2].QuestionID" value="65">
		                            <label for="UniApplication_Questions[2].Answer" &lt;span="" class="&quot;ir" i="" tip&quot;="" title="&quot;Advanced" standing="" allows="" you="" to="" be="" enrolled="" in="" a="" course="" starting="" the="" second="" or="" third="" year.="" may="" required="" provide="" details="" modules="" took="" your="" highest="" qualification.="" if="" this="" is="" required,="" we="" will="" contact="" separately.&quot;&gt;info&lt;="" span&gt;="">
		                                Do you wish to be considered for advanced standing?
		                                    <i class="fa fa-question-circle tip" title="Advanced standing allows you to be enrolled in a course starting in the second or third year. You may be required to provide the details the modules you took for your highest qualification. If this is required, we will contact you separately."></i>
		                            </label>
		                        </td>	                        

	                            <td>
	                                  <input type="radio" name="UniApplication_Questions[2].Answer" value="No" required="required" id="UniApplication_Questions[2].Answer_No"><label for="UniApplication_Questions[2].Answer_No">No</label>
	                              <br>
	                                  <input type="radio" name="UniApplication_Questions[2].Answer" value="Yes" required="required" id="UniApplication_Questions[2].Answer_Yes"><label for="UniApplication_Questions[2].Answer_Yes">Yes</label>
	                              <br>
	                                  <label for="UniApplication_Questions[2].MoreTextAnswer">For which courses?</label>&nbsp;&nbsp;<input id="UniApplication_Questions[2].MoreTextAnswer" type="text" class="more" name="UniApplication_Questions[2].MoreTextAnswer">
	                            </td>
		                    </tr>
						        </tbody>
						    </table>

						<br>
						<br>
						<center><input id="step_3_save_button" class="blue-btn" onclick="javascript:save_and_next(4);" type="button" value="SAVE AND CONTINUE"></center>



                </div><!-- /#step_3 -->

                <div id="step_4_header" class="section header martop5px">
                    <h3>4) VERIFICATION</h3>
                </div><!-- /#step_4_header -->

                <div id="step_4" class="questionaire section block">
                    <p>
                        By submitting the application, I confirm that the information given in this form is accurate. I give consent to theRightU and applied universities for the use of my data for the purpose of my university application. We will review your application and contact you soon.
                    </p>

                    <p>Comments for theRightU (if any):</p>
                    <textarea name="UserComments"></textarea>
                    <br>
                    <br>
                    <center>
						<input id="submit_application_button" class="blue-btn" onclick="javascript:submit_form();" type="button" value="Submit application">
                    </center>
                </div><!-- /#step_4 -->
					</form>
				</div>
			</div>
		</div><!-- /.continue-to-apply -->

	</div><!-- /.courses-apply -->	
</div>

@endsection
@section('scripts')
{{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> --}}   
{{-- <script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> --}}

<script type="text/javascript">
	$.ajaxSetup({
		headers : {
			'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content'),
		}
	})

	$('#country').on('change', function(e) {
		var country_slug = $(this).val();
		$('#universities').empty();
		$('#universities').append("<option selected disabled>Searching university...</option>");
		$.ajax({
			url : "{{ route('user.apply.getUniversity') }}",
			data : {country_slug : country_slug}
		}).done(function (data){
			var html = '<option selected disabled>Choose a university</option>';
			$.each(data, function(index, value) {
				html += '<option value="'+value.id+'">'+value.name+'</option>';
			});
			$('#universities').empty();
			$('#course').empty();
			$('#course').append('<option selected disabled>Choose a course</option>')
			$('#universities').append(html);
		});
	});

	$('#universities').on('change', function(e) {
		var university_id = $(this).val();
		$('#course').empty();
		$('#course').append("<option selected disabled>Searching course...</option>");
		$.ajax({
			url : "{{ route('user.apply.getCourse') }}",
			data : {university_id : university_id}
		}).done(function (data){
			var html = '<option selected disabled>Choose a course</option>';
			$.each(data, function(index, value) {
				html += '<option value="'+value.id+'" data-classification="'+value.classification+'" data-duration="'+value.duration+'">'+value.name+'</option>';
			});
			$('#course').empty();
			$('#course').append(html);
		});
	});

	function addCourse() {
		var course_name = $('#course').find(':selected').text();
		var university_name = $('#universities').find(':selected').text();
		var country_name = $('#country').find(':selected').text();
		var duration = $('#course').find(':selected').data('duration');
		var classification = $('#course').find(':selected').data('classification');
		if ($('#course').val() != null && $('#universities').val() != null && $('#country').val() != null) {
			$.ajax({
				url : "{{ route('user.apply.addCourse') }}",
				data : {
					id : $('#course').val(),
					course_name : course_name,
					university_name : university_name,
					country_name : country_name,
					duration : duration,
					classification : classification,
					order : $('table tr').length,
				}
			}).done(function(data) {
				$('tbody').append(data);
				$('#universities').empty();
				$('#course').empty();
				$('#country').find(':disabled').prop('selected', true);
				$('#universities').append("<option selected disabled>Choose a university</option>");
				$('#course').append("<option selected disabled>Choose a course</option>");
				$('#add_course_dialog').slideToggle();
			});
			apply($('#course').val());
		} else {
			toastr.error('Please fill all the fields.');
		}
	}

	function apply(id) {
		$.ajax({
			url : "{{ route('user.subject.setCookieApplyCourse') }}",
			data : {id : id},
		}).done(function(data) {
			if (data == 1) {
				toastr.success('Course Added.');
			} else {
				toastr.warning('Course Unselected');
			}
			getCourseCount();
			$('table.courses').draw();
			return false;
		})
	}

	function removeCourse(index) {
		if (!confirm('This course will be removed from your application. Are you sure?')) 
			return false; 
		else { 
			$(index).parent().parent().remove();
			apply($(index).data('course-id'));
			redraw();
		}
	}

	function redraw(table) {
		table = $('table.courses');
		var tbody = table.find('tbody');
		var tr = tbody.children('tr').each(function () {
			$(this).find('.priority span').text(this.rowIndex+'');
		});
	}
</script>

<!-- Submit apply -->
<script type="text/javascript">
	$('#apply-btn').on('click', function(e) {
		e.preventDefault();
		@if (Auth::check())
		$('#continue-apply').slideToggle();
		@else 
		$('#left-nav').animate({
			left:-1024
		});
		$('#login_drawer').slideDown();
		$('#nav-main').hide();
		@endif
	});

	function save_and_next(type) {
		$("#form-apply-"+(type-1)).submit();
		$('html, body').animate({
			scrollTop: $("#step_"+type+"_header").offset().top
		}, 500);
	}
</script>
<script type="text/javascript">
	$('.hasDatepicker').datepicker({
		format : 'dd/mm/yyyy',
	});

	//Set data for personal detail 
	@php 
	$personal_details = isset($user)?$user->personalDetail:null;
	@endphp
	@if (count($personal_details))
		$('#GivenName').val("{{ $personal_details->given_name }}");
		$('#GivenName').prop("readonly", true);

		$('#FamilyName').val("{{ $personal_details->family_name }}");
		$('#FamilyName').prop("readonly", true);

		$('#email').prop("readonly", true);

		$('#Gender'+"{{ $personal_details->gender }}").prop('checked', true);
		$('input[name="gender"]').prop("disabled", true);

		$('#dp1508750818053').val("{{ Carbon\Carbon::parse($personal_details->dob)->format('d/m/Y') }}");
		$('#dp1508750818053').prop("disabled", true);

		$('#applicant_country').val("{{ $personal_details->country_birth }}");
		$('#applicant_country').prop("disabled", true);

		$('#add_course_nationality').val("{{ $personal_details->nationality }}");
		$('#add_course_nationality').prop("disabled", true);

		$('#Passport').val("{{ $personal_details->passport_no }}");
		$('#Passport').prop("readonly", true);

		$('#CorrespondenceAddress').val("{{ $personal_details->correspondence_address }}");
		$('#CorrespondenceAddress').prop("readonly", true);

		$('#PermanentAddress').val("{{ $personal_details->permanent_address }}");
		$('#PermanentAddress').prop("readonly", true);

		$('#MobilePhone').val("{{ $personal_details->mobile_number }}");
		$('#MobilePhone').prop("readonly", true);

		$('#HomePhone').val("{{ $personal_details->home_number }}");
		$('#HomePhone').prop("readonly", true);

		$('#applicant_intake').val("{{ $personal_details->enrolment_year }}");
		$('#applicant_intake').prop("disabled", true);

		$('#IsScholarship').prop('checked',"{{ $personal_details->is_schoolarship }}");
		$('#IsScholarship').prop('disabled',true);

		$('#IsSelfFunded').prop('checked',"{{ $personal_details->is_self_funded }}");
		$('#IsSelfFunded').prop("disabled", true);

		@if ($personal_details->free_consultation == 1)
		$('#IsHelpYes').prop('checked',true);
		@else
		$('#IsHelpNo').prop('checked',true);
		@endif
		$('#IsHelpYes').prop('disabled',true);
		$('#IsHelpNo').prop('disabled',true);

		@if ($personal_details->disability == 1)
		$('#disabilityYes').prop('checked',true);
		@else
		$('#disabilityNo').prop('checked',true);
		@endif
		$('#disabilityYes').prop('disabled',true);
		$('#disabilityNo').prop('disabled',true);

		@if ($personal_details->criminal_record == 1)
		$('#criminalYes').prop('checked',true);
		@else
		$('#criminalNo').prop('checked',true);
		@endif
		$('#criminalYes').prop('disabled',true);
		$('#criminalNo').prop('disabled',true);
	@endif

	//Save and continue 1
	$('#form-apply-1').on('submit', function(e) {
		@if (count($personal_details) == 0)
			$.ajax({
				url : "{{ route('user.apply.storePersonalDetail') }}",
				data : $(this).serialize(),
				type : 'POST'
			}).done(function (data) {
				if (data == 1) {
					toastr.success('Save data successful');
					$('#GivenName').prop("readonly", true);
					$('#FamilyName').prop("readonly", true);
					$('#email').prop("readonly", true);
					$('input[name="gender"]').prop("disabled", true);
					$('#dp1508750818053').prop("disabled", true);
					$('#applicant_country').prop("disabled", true);
					$('#add_course_nationality').prop("disabled", true);
					$('#Passport').prop("readonly", true);
					$('#CorrespondenceAddress').prop("readonly", true);
					$('#PermanentAddress').prop("readonly", true);
					$('#MobilePhone').prop("readonly", true);
					$('#HomePhone').prop("readonly", true);
					$('#applicant_intake').prop("disabled", true);
					$('#IsScholarship').prop('disabled',true);
					$('#IsSelfFunded').prop("disabled", true);
					$('#IsHelpYes').prop('disabled',true);
					$('#IsHelpNo').prop('disabled',true);
					$('#disabilityYes').prop('disabled',true);
					$('#disabilityNo').prop('disabled',true);
					$('#criminalYes').prop('disabled',true);
					$('#criminalNo').prop('disabled',true);

				} else if (data == 0) {
					toastr.error('Save data fails. Please try again.');
				} else if (data == 2){
					toastr.warning('Data has been saved successful');
				} else {
					var input = $('[name="'+data+'"]');
					var id = input.attr('id');
					var text = $("label[for='"+id+"']").text();
					toastr.error(text + ' is empty');
					console.log(data);
				}
			});
		@endif
		return false;
	});

	// Education & work
	function add_edu_row() {
		var html = '<tr>'+
		'<td class="td-sm">'+
		'<input type="dates" name="edu_start[]" placeholder="Start" value="" datatype="edu_start" index="0" class="hasDatepicker">'+
		'</td>'+
		'<td class="td-sm">'+
		'<input type="dates" name="edu_end[]" placeholder="End" value="" datatype="edu_end" index="0" class="hasDatepicker">'+
		'</td>'+
		'<td>'+
		'<input type="text" name="edu_school_name[]" placeholder="Name of School or Institution" value="" datatype="edu_school_name" index="0">'+
		'</td>'+
		'<td class="td-md">'+
		'<div class="styled-select">'+
		'<select class="select-with-placeholder select-empty" name="edu_qualification[]" datatype="edu" index="0">'+
		'<option selected value="-1">-- Select Qualification --</option>'+
		"<option value='2'>GCE 'O' Levels</option>"+
		"<option value='3'>GCE 'A' Levels</option>"+
		'<option value="4">Polytechnic Diploma</option>'+
		'<option value="5">Private Diploma</option>'+
		'<option value="6">International Baccaleaurate</option>'+
		'<option value="7">Sijil Tinggi Persekolahan Malaysia</option>'+
		"<option value='9'>Bachelor's</option>"+
		"<option value='10'>Master's</option>"+
		'<option value="8">Others</option>'+
		'</select>'+
		'</div>'+
		'</td>'+
		'<td class="td-sm">'+
		'<input class="button del" type="button" onclick="javascript: remove_edu(this);" value="Remove">'+
		'</td>'+
		'</tr>';
		$('#add-edu-row').remove();
		html +=
		'<tr id="add-edu-row">'+
		'<td>'+
		'<input type="button" class="add button" value="Add new" onclick="javascript:add_edu_row();">'+
		'</td>'+
		'</tr>';
		$('#education tbody').append(html);
		$('.hasDatepicker').datepicker({
			format : 'dd/mm/yyyy',
		});
	}

	function remove_edu(index) {
		var tr = $(index).parent().parent();
		tr.remove();
	}

	function add_work_row(index) {
		var html = '<tbody id="work_exp" data-index="0">'+
		'<tr>'+
		'<td class="td-sm">'+
		'<input type="dates" name="work_start[]" placeholder="Start" datatype="work_start" index="0" id="dp1508751721289" class="hasDatepicker">'+
		'</td>'+
		'<td class="td-sm">'+
		'<input type="dates" name="work_end[]" placeholder="End" datatype="work_end" index="0" id="dp1508751721290" class="hasDatepicker">'+
		'</td>'+
		'<td>'+
		'<input type="text" name="employer_name[]" placeholder="Employer\'s name" datatype="work" index="0">'+
		'</td>'+
		'<td class="td-sm">'+
		'<div class="styled-select">'+
		'<select name="work_type[]">'+
		'<option selected value="-1">-- Type of work --</option>'+
		'<option value="Full-Time">Full-Time</option>'+
		'<option value="Part-Time">Part-Time</option>'+
		'</select>'+
		'</div>'+
		'</td>'+
		'<td>'+
		'&nbsp;'+
		'</td>'+
		'</tr>'+
		'<tr>'+
		'<td colspan="4">'+
		'<input class="work_desc" type="text" name="work_description[]" placeholder="Job position &amp; brief description">'+
		'</td>'+
		'<td class="td-sm">'+
		'<input class="del button" type="button" onclick="javascript:remove_work(this);" value="Remove">'+
		'</td>'+
		'</tr>'+
		'</tbody>';
		html += 
		'<tbody>'+
		'<tr>'+
		'<td>'+
		'<input type="button" class="add button" value="Add new" onclick="javascript: add_work_row(this);">'+
		'</td>'+
		'</tr>'+
		'</tbody>';

		$(index).parent().parent().remove();
		$('#work').append(html);
		$('.hasDatepicker').datepicker({
			format : 'dd/mm/yyyy',
		});
	}

	function remove_work(index) {
		var tbody = $(index).parent().parent().parent();
		tbody.remove();
	}

	function add_english_test_row(index) {
		var html =
		'<tr>'+
		'<td class="td-sm">'+
		'<input type="dates" name="test_date[]" placeholder="Date" datatype="test_date" index="0" id="dp1508751721291" class="hasDatepicker">'+
		'</td>'+
		'<td class="td-sm">'+
		'<div class="styled-select">'+
		'<select class="select-with-placeholder select-empty" name="certificate[]" datatype="test_type" index="0">'+
		'<option value="-1" selected>-- Select Certificate --</option>'+
		'<option value="-1"></option>'+
		'<option value="1">IELTS</option>'+
		'<option value="2">TOEFL iBT (internet based)</option>'+
		'<option value="3">TOEFL PBT (paper based)</option>'+
		'<option value="4">PTE Academic</option>'+
		'<option value="5">Cambridge English Advanced (CAE)</option>'+
		'<option value="6">Pearson Test of English (PTE)</option>'+
		'<option value="7">Occupational English Test</option>'+
		'</select>'+
		'</div>'+
		'</td>'+
		'<td>'+
		'<input type="text" name="reference_no[]" placeholder="Reference no." datatype="test_ref" index="0" class="fullwidth">'+
		'</td>'+
		'<td class="td-sm">'+
		'<input class="del button" type="button" onclick="javascript:remove_english_test_row(this);" value="Remove">'+
		'</td>'+
		'</tr>'+
		'<tr>'+
		'<td>'+
		'<input type="button" class="add button" value="Add new" onclick="javascript: add_english_test_row(this);">'+
		'</td>'+
		'</tr>';

		$('#english').append(html);
		$(index).parent().parent().remove();
		$('.hasDatepicker').datepicker({
			format : 'dd/mm/yyyy',
		});
	}

	function remove_english_test_row(index) {
		$(index).parent().parent().remove();
	}

	$('#form-apply-2').on('submit', function(e) {
		@if (count($personal_details) > 0)
			$.ajax({
				url : "{{ route('user.apply.storeEducationAndWork') }}",
				data : $(this).serialize(),
				type : 'POST',
			}).done(function (data) {
				if (data == 1) {
					toastr.success('Save data successful');
				} else if(data == 0) {
					toastr.error('Save data fails. Please try again.');
				} else if(data == -1) {
					alert('You must login again');
					//location.reload();
				} else {
					toastr.error(data);
				}
			});
		@else
			toastr.error('Please complete form PERSONAL DETAILS first.');
			e.preventDefault();
		@endif
		return false;
	});

	//fill data form 3
	@if($user && count($user->additionalDetail) > 0)
		@php $value = $user->additionalDetail; @endphp
		$('[name="personal_statement"]').text("{{ $value->personal_statement }}");
		$('[name="question1"][value="{{ $value->question1 == 1?'true':'false' }}"]').prop('checked', true);
		$('[name="question2"][value="{{ $value->question2 == 1?'true':'false' }}"]').prop('checked', true);
		$('[name="answer1"]').val("{{ $value->answer1 }}");
		$('[name="answer2"]').val("{{ $value->answer2 }}");
		$('[name="verification"]').val("{{ $value->verification }}");
	@endif

	Dropzone.options.dropzone = {
        url : '{{ route("user.apply.uploadFile") }}',
        maxFilesize: 50, // MB
        addRemoveLinks: true,
        minFiles : 1,
        // acceptedFiles : 'image/jpeg, images/jpg, image/png',
        init : function(){
            var fileList = new Array;
            var fileList_count = 0;
            var thisDropzone = this;

            this.on("removedfile", function(file) {
                $.ajax({
                    type: 'POST',
                    url: '{{ route("user.apply.removeFile") }}',
                    data : {
                        name: file.serverFileName,
                    }
                }).done(function(data){
                    if(data == -1){//New Image
                        var index = fileList.indexOf(file);
                        delete fileList[index];
                        var file_info_id = "file_info"+index;
                        $("#"+file_info_id).remove();
                    }else{ //Old image
                        var file_info_id = "file_info"+fileList_count;
                        var hidden_data = '<input name = "file_info[]" type="hidden" value="1,' + file.serverFileName+','+file.name+'" id="'+file_info_id+'" />';
                        $('#form-apply-3').append(hidden_data);
                    }
                });
            } );
            this.on("success", function(file, serverFileName) {
                // Change the name of image
                var name = file.previewElement.querySelector("[data-dz-name]");
                name.dataset.dzName = serverFileName;
                name.innerHTML = file.name;
                file.serverFileName = serverFileName;
                fileList[++fileList_count] = file;
                var file_info_id = "file_info"+fileList_count;
                var hidden_data = '<input name = "file_info[]" type="hidden" value="' + 0 +","+file.serverFileName+','+file.name+'" id="'+file_info_id+'" />';
                $('#form-apply-3').append(hidden_data);
            } );

            this.on("sending", function(file, xhr, formData){
                formData.append("_token", $('meta[name="csrf-token"]').attr('content'));
            });

            //Get images from databse
            $.ajax({
                url : '{{route("user.apply.getFile")}}',
                type: 'GET',
            }).done(function(data){
                $.each(data,function(index,value){
                    var string = value.url.split('\\');
                    var file_folder = string[0];
                    var file_server_name = string[1];
                    var file_name = value.file_name

                    var mockFile = { name: file_name, accepted: true, serverFileName:file_server_name };
                    thisDropzone.emit("addedfile", mockFile);
                    thisDropzone.emit("success", mockFile);
                    thisDropzone.emit("complete", mockFile);
                    thisDropzone.files.push(mockFile);
                    thisDropzone.createThumbnailFromUrl(mockFile, file_folder+'/'+file_server_name);
                    var name = mockFile.previewElement.querySelector("[data-dz-name]");
                    name.dataset.dzName = file_server_name;
                    name.innerHTML = file_name;
                    mockFile.serverFileName = file_server_name;
                });
            });
        }//Init function
};//Dropzoen

$('#form-apply-3').on('submit', function() {
	$.ajax({
		url : "{{ route('user.apply.storeDocument') }}",
		data : $(this).serialize(),
		type : 'POST'
	}).done(function (data) {
		if (data == 1) {
			toastr.success('Save data successfully');
		} else if (data == 0) {
			toastr.error('Save data fails. Please try again.');
		} 
				
		});
	return false;
});

$('#form-apply-4').on('submit', function() {
	$.ajax({
		url : "{{ route('user.apply.storeVerification') }}",
		data : $(this).serialize(),
		type : 'POST',
	});
	return false;
});

function submit_form() {
	$('#form-apply-1').submit();
	$('#form-apply-2').submit();
	$('#form-apply-3').submit();
	$('#form-apply-4').submit();
	
	$.ajax({
		url : "{{ route('user.apply.submit') }}",
		type : 'POST',
	}).done(function () {
		window.location  = "{{ route('user.apply.confirmation') }}";
	})
}
</script>

@endsection
