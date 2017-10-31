<div class="continue-to-apply" id="applicationSection">
	<div class="row appDiv details_container clearfix relative odd rowsec bgr-white">
		<div class="col-lg-12">
			<form id="form-apply-1">
				<div id="step_1_header" class="section header open">
					<h3>1) PERSONAL DETAILS</h3>
				</div><!-- /#step_1_header -->

				<div id="step_1" class="questionaire section block">
					<table class="questions_table">
						<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
						<tbody>
							<tr>
								<td><label for="GivenName">Given name</label></td>
								<td><input type="text" id="GivenName" name="given_name" required="required" value=""></td>
							</tr>
							<tr>
								<td><label for="FamilyName">Family name</label></td>
								<td><input type="text" id="FamilyName" name="family_name" required="required"></td>
							</tr>
							<tr>
								<td>
									<label for="email">Email address&nbsp;<i class="fa fa-question-circle tip" title="Please ensure that the email you provide is correct and active. Communications with you will be made through this email."></i>
									</label>
								</td>
								<td><input type="text" name="email" id="email" required="required" value="{{ Auth::user()->email }}" class="emailaddress"></td>
							</tr>
							<tr>
								<td>
									<label for="question_91_49">
										Gender
									</label>
								</td>

								<td>
									<input type="radio" id="GenderFeMale" name="gender" value="Female" checked="" required="required"><label for="GenderFeMale">Female</label>
									<br>
									<input type="radio" id="GenderMale" name="gender" value="Male" required="required"><label for="GenderMale">Male</label>
									<br>
								</td>
							</tr>
							<tr>
								<td>
									<label for="dp1508750818053">Date of birth</label>
								</td>
								<td class="td-date">
									<input class="textbox DOB hasDatepicker" datetype="dob" id="dp1508750818053" name="dob" placeholder="eg. d/m/yyyy" required="required" type="dates" value="">                            
								</td>
							</tr>
							<tr>
								<td>
									<label for="applicant_country">
										Country of birth
									</label>
								</td>
								<td>
									<div class="styled-select country">
										<select id="applicant_country" name="country_birth">
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
										<select id="add_course_nationality" name="nationality">
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
									<input type="text" id="Passport" name="passport_no" required="required">
								</td>
							</tr>
							<tr>
								<td>
									<label for="CorrespondenceAddress">
										Correspondence address
									</label>
								</td>
								<td>
									<textarea id="CorrespondenceAddress" name="correspondence_address" placeholder="eg. Residential address" required="required"></textarea>
								</td>
							</tr>
							<tr>
								<td>
									<label for="PermanentAddress">
										Permanent address&nbsp;<i class="fa fa-question-circle tip" title="Leave blank if this is the same as correspondence address."></i>
									</label>
								</td>
								<td>
									<textarea id="PermanentAddress" name="permanent_address" placeholder="Leave blank if this is the same as correspondence address."></textarea>
								</td>
							</tr>
							<tr>
								<td>
									<label for="MobilePhone">
										Mobile number
									</label>
								</td>
								<td>
									<input type="text" id="MobilePhone" name="mobile_number" required="required" class="number">
								</td>
							</tr>
							<tr>
								<td class="td-short">
									<label for="HomePhone">
										Home number
									</label>
								</td>
								<td class="td-short">
									<input type="text" id="HomePhone" name="home_number" required="required" class="number">
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
										<select id="applicant_intake" name="enrolment_year" required="required" class="year">
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
									<label for="funding_source">
										Funding source
									</label>
								</td>

								<td>
									<input data-groupname="funding_source" type="checkbox" name="is_schoolarship" value="true" required="required" id="IsScholarship"><label for="IsScholarship">Scholarship</label><br>
									<input data-groupname="funding_source" type="checkbox" name="is_self_funded" value="true" required="required" id="IsSelfFunded"><label for="IsSelfFunded">Self Funded</label><br>
									<input type="hidden" disabled name="funding_source" id="funding_source">
								</td>
							</tr>
							<tr>
								<td>
									<label for="free_consultation">
										Free consultation&nbsp;<i class="fa fa-question-circle tip" title="Would you like to receive a free assessment of your chosen courses by our education consultants?"></i>
									</label>
								</td>
								<td>
									<input type="radio" name="free_consultation" value="true" checked="checked" id="IsHelpYes"><label for="IsHelpYes">Yes</label>
									<br>
									<input type="radio" name="free_consultation" value="false" id="IsHelpNo"><label for="IsHelpNo">No</label>
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
									<input type="radio" name="disability" value="false" checked="checked" required="required" id="disabilityNo"><label for="disabilityNo">No</label>
									<br>
									<input type="radio" name="disability" value="true" required="required" id="disabilityYes"><label for="disabilityYes">Yes</label>
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
									<input type="radio" name="criminal_record" value="false" checked="checked" required="required" id="criminalNo"><label for="criminalNo">No</label>
									<br>
									<input type="radio" name="criminal_record" value="true" required="required" id="criminalYes"><label for="criminalYes">Yes</label>
									<br>
								</td>
							</tr>
						</tbody>
					</table>
					<br>
					<center><input id="step_1_save_button" class="blue-btn" onclick="javascript:save_and_next(2);" type="button" value="Save and continue"></center>
				</div><!-- #step_1 -->
			</form>
			<div id="second-section" class="hidden">
				<form id="form-apply-2">
					<div id="step_2_header" class="section header martop5px">
						<h3>2) EDUCATION &amp; WORK</h3>
					</div><!-- /#step_2_header -->

					<div id="step_2" class="questionaire section block">
						<p><strong>Education background</strong>&nbsp;<i class="fa fa-question-circle tip" title="Kindly provide the details of your education, including your current studies and all previous studies from secondary level onwards."></i></p>
						<table id="education" class="exp">
							<tbody data-index="0">
								@foreach($user->education as $key => $value)
								<tr>
									<td class="td-sm">
										<input type="dates" name="edu_start[]" placeholder="Start" datatype="edu_start" index="{{ $key }}" class="hasDatepicker" value="{{ Carbon\Carbon::parse($value->edu_start)->format('d/m/Y') }}"/>
									</td>
									<td class="td-sm">
										<input type="dates" name="edu_end[]" placeholder="End" datatype="edu_end" index="{{ $key }}" class="hasDatepicker" value="{{ Carbon\Carbon::parse($value->edu_end)->format('d/m/Y') }}"/>
									</td>
									<td>
										<input type="text" name="edu_school_name[]" placeholder="Name of School or Institution" datatype="edu_school_name" index="{{ $key }}" value="{{ $value->edu_school_name }}">
									</td>
									<td class="td-md">
										<div class="styled-select">
											<select class="select-with-placeholder select-empty" name="edu_qualification[]" datatype="edu" index="{{ $key }}">
												<option value='2' @if($value->qualification == 2) selected @endif>GCE 'O' Levels</option>
												<option value='3' @if($value->qualification == 3) selected @endif>GCE 'A' Levels</option>
												<option value="4" @if($value->qualification == 4) selected @endif>Polytechnic Diploma</option>
												<option value="5" @if($value->qualification == 5) selected @endif>Private Diploma</option>
												<option value="6" @if($value->qualification == 6) selected @endif>International Baccaleaurate</option>
												<option value="7" @if($value->qualification == 7) selected @endif>Sijil Tinggi Persekolahan Malaysia</option>
												<option value='9' @if($value->qualification == 9) selected @endif>Bachelor's</option>
												<option value='10' @if($value->qualification == 10) selected @endif>Master's</option>
												<option value="8" @if($value->qualification == 8) selected @endif>Others</option>
											</select>
										</div>
									</td>
									<td class="td-sm">
										<input class="button del" type="button" onclick="javascript:remove_edu(this);" value="Remove">
									</td>
								</tr>
								@endforeach
								<tr>
									<td class="td-sm">
										<input type="dates" name="edu_start[]" placeholder="Start" value="" datatype="edu_start" index="0" id="dp1508751721287" class="hasDatepicker">
									</td>
									<td class="td-sm">
										<input type="dates" name="edu_end[]" placeholder="End" value="" datatype="edu_end" index="0" id="dp1508751721288" class="hasDatepicker">
									</td>
									<td>
										<input type="text" name="edu_school_name[]" placeholder="Name of School or Institution" value="" datatype="edu_school_name" index="0">
									</td>
									<td class="td-md">
										<div class="styled-select">
											<select class="select-with-placeholder select-empty" name="edu_qualification[]" datatype="edu" index="0">
												<option selected value="-1">-- Select Qualification --</option>
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
										<input class="button del" type="button" onclick="javascript:remove_edu(this);" value="Remove">
									</td>
								</tr>
								<tr id="add-edu-row">
									<td>
										<input type="button" class="add button" value="Add new" onclick="javascript:add_edu_row();">
									</td>
								</tr>
							</tbody>
						</table>
						<br>
						<p>
							<strong>Work experience</strong>&nbsp;<i class="fa fa-question-circle tip" title="Please provide details of your working experience, including both part-time and full-time positions. If you do not have the exact start/end dates, approximate dates are fine."></i>
						</p>
						<table id="work" class="exp">
							@foreach($user->workExperience as $value) 
							<tbody id="work_exp" data-index="0">
								<tr>
									<td class="td-sm">
										<input type="dates" name="work_start[]" placeholder="Start" datatype="work_start" index="0" id="dp1508751721289" class="hasDatepicker" value="{{ Carbon\Carbon::parse($value->work_start)->format('d/m/Y') }}">
									</td>
									<td class="td-sm">
										<input type="dates" name="work_end[]" placeholder="End" datatype="work_end" index="0" id="dp1508751721290" class="hasDatepicker" value="{{ Carbon\Carbon::parse($value->work_end)->format('d/m/Y') }}">
									</td>
									<td>
										<input type="text" name="employer_name[]" placeholder="Employer's name" datatype="work" index="0" value="{{ $value->employer_name }}">
									</td>
									<td class="td-sm">
										<div class="styled-select">
											<select name="work_type[]">
												<option selected value="-1">-- Type of work --</option>
												<option value="Full-Time" @if($value->work_type == 'Full-Time') selected @endif>Full-Time</option>
												<option value="Part-Time" @if($value->work_type == 'Part-Time') selected @endif>Part-Time</option>
											</select>
										</div>
									</td>
									<td>
										&nbsp;
									</td>
								</tr>
								<tr>
									<td colspan="4">
										<input class="work_desc" type="text" name="work_description[]" placeholder="Job position &amp; brief description" value="{{ $value->work_description }}">
									</td>
									<td class="td-sm">
										<input class="del button" type="button" onclick="javascript:remove_work(this);" value="Remove">
									</td>
								</tr>
							</tbody>
							@endforeach
							<tbody id="work_exp" data-index="0">
								<tr>
									<td class="td-sm">
										<input type="dates" name="work_start[]" placeholder="Start" datatype="work_start" index="0" id="dp1508751721289" class="hasDatepicker">
									</td>
									<td class="td-sm">
										<input type="dates" name="work_end[]" placeholder="End" datatype="work_end" index="0" id="dp1508751721290" class="hasDatepicker">
									</td>
									<td>
										<input type="text" name="employer_name[]" placeholder="Employer's name" datatype="work" index="0">
									</td>
									<td class="td-sm">
										<div class="styled-select">
											<select name="work_type[]">
												<option selected value="-1">-- Type of work --</option>
												<option value="Full-Time">Full-Time</option>
												<option value="Part-Time">Part-Time</option>
											</select>
										</div>
									</td>
									<td>
										&nbsp;
									</td>
								</tr>
								<tr>
									<td colspan="4">
										<input class="work_desc" type="text" name="work_description[]" placeholder="Job position &amp; brief description">
									</td>
									<td class="td-sm">
										<input class="del button" type="button" onclick="javascript:remove_work(this);" value="Remove">
									</td>
								</tr>
							</tbody>
							<tbody>
								<tr>
									<td>
										<input type="button" class="add button" value="Add new" onclick="javascript: add_work_row(this);">
									</td>
								</tr>
							</tbody>
						</table>
						<br>
						<p><strong>English proficiency tests</strong>&nbsp;<i class="fa fa-question-circle tip" title="Indicate all English Tests that you have taken in the last 2 years (e.g. IELTS, TOEFL)"></i></p>
						<table id="english" class="exp">
							<tbody id="english_test" data-index="0">
								@foreach($user->englishProficiency as $value)
								<tr>
									<td class="td-sm">
										<input type="dates" name="test_date[]" placeholder="Date" datatype="test_date" index="0" id="dp1508751721291" class="hasDatepicker" value="{{ Carbon\Carbon::parse($value->test_date)->format('d/m/Y') }}">
									</td>
									<td class="td-sm">
										<div class="styled-select">
											<select class="select-with-placeholder select-empty" name="certificate[]" datatype="test_type" index="0">
												<option value="1" @if($value->certificate == 1) selected @endif>IELTS</option>
												<option value="2" @if($value->certificate == 2) selected @endif>TOEFL iBT (internet based)</option>
												<option value="3" @if($value->certificate == 3) selected @endif>TOEFL PBT (paper based)</option>
												<option value="4" @if($value->certificate == 4) selected @endif>PTE Academic</option>
												<option value="5" @if($value->certificate == 5) selected @endif>Cambridge English Advanced (CAE)</option>
												<option value="6" @if($value->certificate == 6) selected @endif>Pearson Test of English (PTE)</option>
												<option value="7" @if($value->certificate == 7) selected @endif>Occupational English Test</option>
											</select>
										</div>
									</td>
									<td>
										<input type="text" name="reference_no[]" placeholder="Reference no." datatype="test_ref" index="0" class="fullwidth" value="{{ $value->reference_no }}">
									</td>
									<td class="td-sm">
										<input class="del button" type="button" onclick="javascript:remove_english_test_row(this);" value="Remove">
									</td>
								</tr>
								@endforeach
								<tr>
									<td class="td-sm">
										<input type="dates" name="test_date[]" placeholder="Date" datatype="test_date" index="0" id="dp1508751721291" class="hasDatepicker">
									</td>
									<td class="td-sm">
										<div class="styled-select">
											<select class="select-with-placeholder select-empty" name="certificate[]" datatype="test_type" index="0">
												<option value="-1" selected>-- Select Certificate --</option>
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
										<input type="text" name="reference_no[]" placeholder="Reference no." datatype="test_ref" index="0" class="fullwidth">
									</td>
									<td class="td-sm">
										<input class="del button" type="button" onclick="javascript:remove_english_test_row(this);" value="Remove">
									</td>
								</tr>
								<tr>
									<td>
										<input type="button" class="add button" value="Add new" onclick="javascript: add_english_test_row(this);">
									</td>
								</tr>
							</tbody>
						</table>
						<br>
						<center><input id="step_2_save_button" class="blue-btn" onclick="javascript: save_and_next(3);" type="button" value="Save and continue"></center>
					</div><!-- /#step_2 -->
				</form>
				<form id="form-apply-3" enctype="multipart/form-data">
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

						<div id="dropzone" class="dropzone">
							<div class="dz-clickable" id="documentupload">
								<div class="dz-message">
									<img src="/img/file-upload.svg">
									<br>
									Drag and drop your academic transcripts here to help us speed up the assessment process. (We accept zip/scans/pdf/photo files)<br>
								</div>
								<!-- <input name="file" type="file" multiple /> -->
							</div>
						</div>
						<br><br><br>

						<h4>United Kingdom</h4>
						<table class="questions_table">
							<tbody>
								<tr>

									<td>
										<input type="hidden" name="UniApplication_Questions[0].QuestionID" value="63" disabled>
										<label for="UniApplication_Questions[0].Answer" &lt;span="" class="&quot;ir" i="" tip&quot;="" title="&quot;Your" personal="" statement="" the="" admissions="" board="" is="" optional="" at="" this="" point="" in="" time.="" our="" consultants="" will="" provide="" you="" with="" additional="" guidance="" a="" later="" stage.&quot;&gt;info&lt;="" span&gt;="">
											Personal Statement
											<i class="fa fa-question-circle tip" title="Your personal statement for the admissions board is OPTIONAL at this point in time. Our consultants will provide you with additional guidance at a later stage."></i>
										</label>
									</td>		                        
									<td>
										<textarea id="UniApplication_Questions[0].Answer" name="personal_statement" rows="15" style="height:auto;min-width:80%" onkeyup="countChar(this,4000)"></textarea>
										<br><br>

									</td>

								</tr>
								<tr>

									<td>
										<input type="hidden" name="UniApplication_Questions[1].QuestionID" value="64" disabled>
										<label for="UniApplication_Questions[1].Answer" &lt;span="" class="&quot;ir" i="" tip&quot;="" title="&quot;Deferred" entry="" allows="" you="" to="" be="" enrolled="" the="" september="" 2015="" intake="" (instead="" of="" 2014).="" if="" have="" chosen="" defer,="" will="" not="" considered="" 2014="" entry.&quot;&gt;info&lt;="" span&gt;="">
											Would you like to be considered for deferred entry?
											<i class="fa fa-question-circle tip" title="Deferred entry allows you to be enrolled for the September 2015 intake (instead of 2014). If you have chosen to defer, you will not be considered for the 2014 entry."></i>
										</label>
									</td>		                        

									<td>
										<input type="radio" name="question1" value="false" required="required" id="UniApplication_Questions[1].Answer_No"><label for="UniApplication_Questions[1].Answer_No">No</label>
										<br>
										<input type="radio" name="question1" value="true" required="required" id="UniApplication_Questions[1].Answer_Yes"><label for="UniApplication_Questions[1].Answer_Yes">Yes</label>
										<br>
										<label for="UniApplication_Questions[1].MoreTextAnswer">For which courses?</label>&nbsp;&nbsp;<input id="UniApplication_Questions[1].MoreTextAnswer" type="text" class="more" name="answer1">
									</td>
								</tr>
								<tr>

									<td>
										<input type="hidden" name="UniApplication_Questions[2].QuestionID" value="65" disabled>
										<label for="UniApplication_Questions[2].Answer" &lt;span="" class="&quot;ir" i="" tip&quot;="" title="&quot;Advanced" standing="" allows="" you="" to="" be="" enrolled="" in="" a="" course="" starting="" the="" second="" or="" third="" year.="" may="" required="" provide="" details="" modules="" took="" your="" highest="" qualification.="" if="" this="" is="" required,="" we="" will="" contact="" separately.&quot;&gt;info&lt;="" span&gt;="">
											Do you wish to be considered for advanced standing?
											<i class="fa fa-question-circle tip" title="Advanced standing allows you to be enrolled in a course starting in the second or third year. You may be required to provide the details the modules you took for your highest qualification. If this is required, we will contact you separately."></i>
										</label>
									</td>	                        

									<td>
										<input type="radio" name="question2" value="false" requirexited="required" id="UniApplication_Questions[2].Answer_No"><label for="UniApplication_Questions[2].Answer_No">No</label>
										<br>
										<input type="radio" name="question2" value="true" required="required" id="UniApplication_Questions[2].Answer_Yes"><label for="UniApplication_Questions[2].Answer_Yes">Yes</label>
										<br>
										<label for="UniApplication_Questions[2].MoreTextAnswer">For which courses?</label>&nbsp;&nbsp;<input id="UniApplication_Questions[2].MoreTextAnswer" type="text" class="more" name="answer2">
									</td>
								</tr>
							</tbody>
						</table>

						<br>
						<br>
						<center><input id="step_3_save_button" class="blue-btn" onclick="javascript:save_and_next(4);" type="button" value="SAVE AND CONTINUE"></center>
					</div><!-- /#step_3 -->
				</form>
				<form id="form-apply-4">
					<div id="step_4_header" class="section header martop5px">
						<h3>4) VERIFICATION</h3>
					</div><!-- /#step_4_header -->
					<div id="step_4" class="questionaire section block">
						<p>
							By submitting the application, I confirm that the information given in this form is accurate. I give consent to theRightU and applied universities for the use of my data for the purpose of my university application. We will review your application and contact you soon.
						</p>

						<p>Comments for theRightU (if any):</p>
						<textarea name="verification"></textarea>
						<br>
						<br>
						<center>
							<input id="submit_application_button" class="blue-btn" onclick="javascript:submit_form();" type="button" value="Submit application">
						</center>
					</div><!-- /#step_4 -->
				</form>
			</div>
		</div>
	</div>
</div><!-- /.continue-to-apply -->