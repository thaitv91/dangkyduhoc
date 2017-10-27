@extends("layouts/app")

@section("content")
<div class="title-page">
	<div class="container"><h1>UNIVERSITY GUIDE</h1></div>
</div>

<div class="container apply-page">
	<div class="apply-header-page text-center">
		<img src="/img/img_title_application.svg" alt="Your online university application">
	</div><!-- /.apply-header-page -->

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
                REFERENCE ID: <b>{{ $user->id }}</b><br />
                DATE SUBMITTED: <b>{{ Carbon\Carbon::parse($user->additionalDetail->created_at)->format('d/m/Y H:i:s') }}</b><br />
                APPLICATION FEE: <b>WAIVED</b><br />
            </div>
        </div>
     
	    	<div class="col-lg-12">
            <div class="section header">
                <br />
                <h3 class="header-text">COURSES APPLIED</h3>
            </div>
            <div class="section block">
            	@foreach ($user->applyCourse as $key => $value) 
            	<div class="row">
                    <div class="col-lg-9 clearfix">
                        <span class="name">{{ $key }}. {{ $value->name }}</span> <span class="code">({{ $value->classification }})</span> -
                        <span class="university">{{ $value->university->name }} ({{ $value->country() }})</span>
                    </div>
               </div>
            	@endforeach
            </div>

	        <div id="step_1_header" class="section header">
	            <br />
	            <h3 class="header-text">PERSONAL DETAILS</h3>
	        </div>

	        <div id="step_1" class="questionaire section block">
	            <table class="answers_table">
	                <tr>
	                  <td>Given name:</td>
	                  <td>{{ $user->personalDetail->given_name }}</td>
	                </tr>
	                <tr>
	                  <td>Family name:</td>
	                  <td>{{ $user->personalDetail->family_name }}</td>
	                </tr>
	                <tr>
	                  <td>Email address:</td>
	                  <td>{{ $user->personalDetail->email }}</td>
	                </tr>
	                <tr>
	                  <td>Gender:</td>
	                  <td>{{ $user->personalDetail->gender }}</td>
	                </tr>
	                <tr>
	                  <td>Date of birth:</td>
	                  <td>{{ Carbon\Carbon::parse($user->personalDetail->dob)->format('d/m/Y') }}</td>
	                </tr>
	                <tr>
	                  <td>Country of birth:</td>
	                  <td>{{ $country_birth[$user->personalDetail->country_birth] }}</td>
	                </tr>
	                <tr>
	                  <td>Nationality:</td>
	                  <td>{{ $nationality[$user->personalDetail->nationality] }}</td>
	                </tr>
	                <tr>
	                  <td>Passport no.:</td>
	                  <td>{{ $user->personalDetail->passport_no }}</td>
	                </tr>
	                <tr>
	                  <td>Correspondence address:</td>
	                  <td>{{ $user->personalDetail->correspondence_address }}</td>
	                </tr>
	                <tr>
	                  <td>Permanent address:</td>
	                  <td>{{ $user->personalDetail->permanent_address }}</td>
	                </tr>
	                <tr>
	                  <td>Mobile number:</td>
	                  <td>{{ $user->personalDetail->mobile_number }}</td>
	                </tr>
	                <tr>
	                  <td>Home phone no.:</td>
	                  <td>{{ $user->personalDetail->home_number }}</td>
	                </tr>
	                <tr>
	                  <td>Enrolment year:</td>
	                  <td>{{ $user->personalDetail->enrolment_year }}</td>
	                </tr>
	                <tr>
	                  <td>Funding source:</td>
	                  <td>
	                  	@if ($user->personalDetail->is_schoolarship == 1)
                        	<text>Schoolarship</text>
	                  	@endif
	                  	@if ($user->personalDetail->is_self_funded == 1)
                        	<text>Self Funded</text>
	                  	@endif
	                  </td>
	                </tr>
	                <tr>
                    	<td>Free consultation:</td>
                    	<td>{{ $user->personalDetail->free_consultation == 1?'Yes':'No' }}</td>
	                </tr>

	                <tr>
	                  <td>Disability:</td>
	                  <td>{{ $user->personalDetail->disability == 1?'Yes':'No' }}</td>
	                </tr>
	                <tr>
	                  <td>Criminal record:</td>
	                  <td>{{ $user->personalDetail->criminal_record==1?'Yes':'No' }}</td>
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
	                     	@foreach ($user->education as $value)
	                     	<tr>
	                     		<td>
	                     			{{ Carbon\Carbon::parse($value->edu_start)->format('d/m/Y') }} - {{ Carbon\Carbon::parse($value->edu_end)->format('d/m/Y') }}: {{ $value->edu_school_name }} ({{ $qualification[$value->qualification] }})
	                     		</td>
	                     	</tr>
	                     	@endforeach
	                     </tbody>
	                </table>
	                <br />

	                <p>Work experience:</p>
	                <table id="work" class="exp">
                     <tbody id="work_1103">
                     	@foreach ($user->workExperience as $value)
                         <tr>
                             <td>
                                 {{ Carbon\Carbon::parse($value->work_start)->format('d/m/Y') }} - {{ Carbon\Carbon::parse($value->work_end)->format('d/m/Y') }} : {{ $value->employer_name }} ({{ $value->work_type }})
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 {{ $value->work_description }}
                             </td>
                         </tr>
                         @endforeach
                     </tbody>
	                </table>
	                <br />
	                <p>English proficiency tests:</p>
	                <table id="english" class="exp">
                     <tbody id="prof_225">
                     	@foreach ($user->englishProficiency as $value)
                         <tr>
                             <td>
                                 {{ Carbon\Carbon::parse($value->test_date)->format('d/m/Y') }} - {{ $certificate[$value->certificate] }}
                             </td>
                         </tr>
                         @endforeach
                     </tbody>
	                </table>
	                <br />
	            	Supporting documents:
	               <ul>
	               		@foreach ($user->document as $value)
	               		<li>{{ $value->file_name }}</li>
	                  	@endforeach
	               </ul>

	        		</div>

	            <div id="step_3_header" class="section header open">
	                <br />
	                <h3 class="header-text">ADDITIONAL DETAILS</h3>
	            </div>
	            <div id="step_3" class="questionaire section block"></div>
	            </div>
	    		</div>

			   <div class="btn-bottom-apply-success">
					<button class="btn btn-blue">Print</button><br>
					<a class="btn btn-blue" href="{{ route('user.course.apply') }}">Exit</a>
				</div>

			</div><!-- /.apply-success -->
</div><!-- /.apply-page -->
	





@endsection
@section('scripts')
{{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
<script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> --}}
@endsection
