<!DOCTYPE html>
<html>
<head>
    <title>Email</title>
</head>
<body style="margin: 0">
    <div style="background:#e9e9e9;">
        <table cellpadding="0" cellspacing="0" border="0"  style="width: 600px;border:2px solid #e2e2e2;border-collapse: collapse;background:#fff;margin: auto;font-family: Arial, Helvetica, sans-serif;font-size: 14px;color:#000;">
            <tr>
                <td><img src="{{ asset('image/email/header-email.png') }}" /></td>
            </tr>
            <tr>
                <td style="padding:30px 40px 0 40px">
                    <p style="margin-top:0;font-size:16px;line-height:24px;margin-bottom:20px;color:#000000">Thank you for submitting your university application online.</p>
                    <p style="margin-top:0;font-size:16px;line-height:24px;margin-bottom:20px;color:#000000">An education consultant from theRightU will be following up with your application shortly.</p>
                    <p style="margin-top:0;font-size:16px;line-height:24px;margin-bottom:40px;color:#000000">Here is a summary of your submission</p>
                    <br/>
                    <h3>COURSES APPLIED</h3>
                    <p style="margin-top:0;font-size:13px;line-height:18px;margin-bottom:40px;color:#000000">
                        @foreach($user->applyCourse as $key => $value)
                            {{ $key+1 }}. {{ $value->name }} ({{ $value->classification }}) -
                            {{ $value->university->name }} ({{ $value->country() }})
                            <br>
                        @endforeach
                    </p>

                    <h3>PERSONAL DETAILS</h3>
                    <table style="font-size:13px;line-height:18px;margin-bottom:40px;color:#000000">
                        <tbody>
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
                            <td>
                                <a href="mailto:ninhvanhoang0207@gmail.com" target="_blank">{{ $user->personalDetail->email }}</a>
                            </td>
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
                            @if ($user->personalDetail->is_schoolarship == 1)
                            <td><u></u>Schoolarship<u></u></td>
                            @endif
                            @if ($user->personalDetail->is_self_funded == 1)
                            <td><u></u>Self-funded<u></u></td>
                            @endif
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
                        </tbody>
                    </table>

                    <h3>EDUCATION & WORK</h3>
                    <div style="font-size:13px;line-height:18px;margin-bottom:40px;color:#000000">
                        <p>Education background:</p>
                        <table>
                            <tbody>
                                @foreach ($user->education as $value)
                                <tr>
                                    <td>
                                        {{ Carbon\Carbon::parse($value->edu_start)->format('d/m/Y') }} - {{ Carbon\Carbon::parse($value->edu_end)->format('d/m/Y') }}: {{ $value->edu_school_name }} ({{ $qualification[$value->qualification] }})
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <br/>
                        <p>Work experience:</p>
                        <table>
                            <tbody>
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

                        <br/>
                        <p>English proficiency tests:</p>
                        <table>
                            <tbody>
                                @foreach ($user->englishProficiency as $value)
                                <tr>
                                    <td>
                                        {{ Carbon\Carbon::parse($value->test_date)->format('d/m/Y') }} - {{ $certificate[$value->certificate] }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br/>
                        Supporting documents:
                        <ul>
                            @foreach ($user->document as $value)
                            <li>{{ $value->file_name }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <br/>
                    <h3>ADDITIONAL DETAILS</h3>

                    <p style="margin-top:40px;font-size:16px;line-height:24px;color:#000000">We look forward to assisting you in every step of your overseas study journey.</p>
                </td>
            </tr>

            <tr>
                <td style="padding:30px 40px 0 40px">
                    <a href="#"><img src="{{ asset('image/email/logo.png') }}"></a>
                    <p style="font-size:13px;line-height:18px;margin-bottom:40px;color:#000000;">
                        Floor 15, TNR Tower, 115 Tran Hung Dao, Hoan Kiem, Ha Noi
                    </p>
                </td>
            </tr>
        </table>


    </div>
</body>
</html>