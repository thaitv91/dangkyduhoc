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
				                        <span class="ir app done tip" title="" data-toggle="tooltip" data-original-title="This course has been shortlisted but not yet submitted to us. Chat with us online if you require some guidance."></span>
				                    </div>
				                <div class="status">
				                    <span class="ir app yet tip" title="" data-toggle="tooltip" data-original-title="No updates has been provided at this stage yet."></span>
				                </div>
				                <div class="status">
				                    <span class="ir app problem tip" title="" data-toggle="tooltip" data-original-title="No updates has been provided at this stage yet."></span>
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

		<div class="continue-to-apply" id="applicationSection">
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

		<div class="apply-success">
			<div class="row rowsec bgr-white">
	        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	            <div class="section header">
	                <h3 class="header-text">CONFIRMATION</h3>
	            </div>
	            <div class="section">
	                <p style="font-size:16px;">Thanks for submitting your university application online. Below is a summary of your application. A copy of this summary has also been emailed to you.</p>
	            </div>
	            <div class="section header">
	                <h3 class="header-text">WHAT'S NEXT?</h3>
	            </div>
	            <div class="section">
	                <p style="font-size:15px;">1) An education consultant from theRightU will be in contact with you within 1-2 working days to confirm that your details and supporting documents are in order.</p>
	                <p style ="font-size:15px;">2) You WILL be able to make amendments to your choice of courses or upload missing documents and resubmit before your application is processed.</p>
	                <p style="font-size:15px;">3) If you wish to cancel your application, please drop us a line at <a href="mailto:hello@therightu.com">hello@therightu.com</a></p>
	            </div>
	            <div class="section header">
	                <h3 class="header-text">SUMMARY</h3>
	            </div>
	            <div class="section block">
	                REFERENCE ID: <b>5576</b><br />
	                DATE SUBMITTED: <b>26/10/2017 4:59:59 PM</b><br />
	                APPLICATION FEE: <b>WAIVED</b><br />
	            </div>
	        </div>
        
		    <div class="col-lg-12">
		            <div class="section header">
		                <br />
		                <h3 class="header-text">COURSES APPLIED</h3>
		            </div>
		                <div class="section block">
		                            <div class="row">
		                                <div class="col-lg-9 clearfix">
		                                    <span class="name">1. Accounting and Finance</span> <span class="code">(N420)</span> -
		                                        <span class="university">Robert Gordon University (United Kingdom)</span>
		                                </div>
		                            </div>
		                            <div class="row">
		                                <div class="col-lg-9 clearfix">
		                                    <span class="name">2. Bachelor of International Business in Hotel and Tourism Management</span> <span class="code">(CR-001)</span> -
		                                        <span class="university">Cesar Ritz (Switzerland)</span>
		                                </div>
		                            </div>
		                            <div class="row">
		                                <div class="col-lg-9 clearfix">
		                                    <span class="name">3. Accounting and Finance</span> <span class="code">(N420)</span> -
		                                        <span class="university">Middlesex University (United Kingdom)</span>
		                                </div>
		                            </div>


		                </div>


		        <div id="step_1_header" class="section header">
		            <br />
		            <h3 class="header-text">PERSONAL DETAILS</h3>
		        </div>
		        <div id="step_1" class="questionaire section block">
		            <table class="answers_table">
		                <tr>
		                    <td>Given name:</td>
		                    <td>Duyen</td>
		                </tr>
		                <tr>
		                    <td>Family name:</td>
		                    <td>Phan</td>
		                </tr>
		                <tr>
		                    <td>Email address:</td>
		                    <td>duyenphan@luxcer.com</td>
		                </tr>
		                <tr>
		                    <td>Gender:</td>
		                    <td>Female</td>
		                </tr>
		                <tr>
		                    <td>Date of birth:</td>
		                    <td>8 October 1980</td>
		                </tr>
		                <tr>
		                    <td>Country of birth:</td>
		                        <td>Vietnam</td>
		                </tr>
		                <tr>
		                    <td>Nationality:</td>
		                        <td>Vietnamese</td>
		                </tr>
		                <tr>
		                    <td>Passport no.:</td>
		                    <td>0976645</td>
		                </tr>
		                <tr>
		                    <td>Correspondence address:</td>
		                    <td>Ha Noi, Viet Nam</td>
		                </tr>
		                <tr>
		                    <td>Permanent address:</td>
		                    <td>Ha Noi, Viet Nam</td>
		                </tr>
		                <tr>
		                    <td>Mobile number:</td>
		                    <td>0987545377</td>
		                </tr>
		                <tr>
		                    <td>Home phone no.:</td>
		                    <td>+84</td>
		                </tr>
		                <tr>
		                    <td>Enrolment year:</td>
		                    <td>2017</td>
		                </tr>
		                <tr>
		                    <td>Funding source:</td>
		                    <td>

		                                                
		                        <text>Scholarship</text>
		                    </td>
		                </tr>
		                <tr>
		                    <td>
		                        Free consultation:
		                    </td>
		                    <td>
		                                Yes
		                    </td>
		                </tr>

		                <tr>
		                    <td>Disability:</td>
		                    <td>No</td>
		                </tr>
		                <tr>
		                    <td>Criminal record:</td>
		                    <td>No</td>
		                </tr>
		            </table>
		        </div>
		        <div id="step_2_header" class="section header">
		            <br />
		            <h3 class="header-text">EDUCATION &amp; WORK</h3>
		        </div>
		        <div id="step_2" class="questionaire section block">
		                <p>Education background:</p>
		                <table id="education" class="exp">

		                        <tbody id="1702">
		                            <tr>
		                                <td>
		                                    17 October 2017 - 27 October 2017: BGV (GCE &#39;A&#39; Levels)
		                                </td>
		                            </tr>
		                        </tbody>
		                </table>
		                <br />

		                <p>Work experience:</p>
		                <table id="work" class="exp">
		                        <tbody id="work_1103">
		                            <tr>
		                                <td>
		                                    2 October 2017 - 31 October 2017 : BGN (Part-time)
		                                </td>
		                            </tr>
		                            <tr>
		                                <td>
		                                    HTML/CSS
		                                </td>
		                            </tr>
		                        </tbody>

		                </table>
		                <br />
		                            <p>English proficiency tests:</p>
		                <table id="english" class="exp">
		                        <tbody id="prof_225">
		                            <tr>
		                                <td>
		                                    31 October 2017 - Occupational English Test (GHN)
		                                </td>
		                            </tr>
		                        </tbody>
		                </table>
		                <br />
		            Supporting documents:
		                <ul>
		                            <li>thanhly.doc</li>
		                </ul>

		        </div>

		            <div id="step_3_header" class="section header open">
		                <br />
		                <h3 class="header-text">ADDITIONAL DETAILS</h3>
		            </div>
		            <div id="step_3" class="questionaire section block">

		                            </div>
		            </div>


		    </div>

		    <div class="btn-bottom-apply-success">
				<button class="btn btn-blue">Print</button><br>
				<button class="btn btn-blue">Exit</button>
			</div>

		</div><!-- /.apply-success -->
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
