<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\ApplyCourse;
use App\Models\ApplyCoursePersonalDetail;
use App\Models\ApplyCourseEducationBackground;
use App\Models\ApplyCourseWorkExperience;
use App\Models\ApplyCourseEnglishProficiency;
use App\Models\ApplyCourseDocument;
use App\Models\ApplyCourseAdditionalDetail;
use DB, Auth, Redirect;
use Mail;
use App\Mail\ApplyCourseMail;

class ApplyCourseController extends Controller
{
    public function storePersonalDetail(Request $request) {
    	$data = $request->all();
    	$data['dob'] = isset($data['dob'])?$this->parseDate($data['dob']):'';
    	$data['is_schoolarship'] = (isset($data['is_schoolarship']) && $data['is_schoolarship']=='true')?true:false;
    	$data['is_self_funded'] = (isset($data['is_self_funded']) && $data['is_self_funded']=='true')?true:false;
    	$data['free_consultation'] = $data['free_consultation']=="true"?true:false;
    	$data['disability'] = $data['disability']=="true"?true:false;
    	$data['criminal_record'] = $data['criminal_record']=="true"?true:false;

        //Validate data
        $validate = $data;
        if (!$validate['is_schoolarship']&& !$validate['is_self_funded']){
              $validate['funding_source'] = '';
        }
        unset($validate['is_schoolarship']);
        unset($validate['is_self_funded']);
        unset($validate['permanent_address']);
        unset($validate['disability']);
        unset($validate['criminal_record']);
        unset($validate['free_consultation']);

        if (in_array('', $validate)) {
            return array_search('', $validate);
        }

    	DB::beginTransaction();
    	try {
            if ( count(Auth::user()->personalDetail()->first()) == 0 ) {
              ApplyCoursePersonalDetail::create($data);
            }else {
                return 2;
            }
    		
    		DB::commit();
    	} catch (Exception $e) {
    		DB::rollback();
    		return 0;
    	}

    	return 1;
    }

    public function storeEducationAndWork(Request $request) {
        $data = $request->all();
        $message;
        if (!Auth::check()) {
            return -1;
        }

        DB::beginTransaction();
        try {
            ApplyCourseEducationBackground::where('user_id', Auth::user()->id)->delete();
            ApplyCourseWorkExperience::where('user_id', Auth::user()->id)->delete();
            ApplyCourseEnglishProficiency::where('user_id', Auth::user()->id)->delete();

            //Insert Education background
            foreach (isset($data['edu_start'])?$data['edu_start']:[] as $key => $value) {
                if (($data['edu_qualification'][$key] == -1) && ($value == null || $value == '') && ($data['edu_end'][$key] == null || $data['edu_end'][$key] == '' ) && ($data['edu_school_name'][$key] == null || $data['edu_school_name'][$key] == '' )){

                    continue;
                }

                if ($value == null || $value == '') {
                    DB::rollback();

                    return 'Education start is empty';
                }

                if ($data['edu_end'][$key] == null || $data['edu_end'][$key] == '' ) {
                    DB::rollback();

                    return 'Education end is empty';
                }

                if ($data['edu_school_name'][$key] == null || $data['edu_school_name'][$key] == '' ){
                    DB::rollback();

                    return 'Name of school is empty';
                }

                if ($data['edu_qualification'][$key] == -1){
                    DB::rollback();

                    return 'Please choose qualification';
                }

                $edu = array(
                    'user_id'       =>  Auth::user()->id,
                    'edu_start'     =>  $this->parseDate($value),
                    'edu_end'       =>  $this->parseDate($data['edu_end'][$key]),
                    'edu_school_name'=> $data['edu_school_name'][$key],
                    'qualification' =>  $data['edu_qualification'][$key],
                );
                ApplyCourseEducationBackground::create($edu);
            }

            //Insert Work Experience
            foreach (isset($data['work_start'])?$data['work_start']:[] as $key => $value) {
                if (($data['work_type'][$key] == -1) && ($value == null || $value == '') && ($data['work_end'][$key] == null || $data['work_end'][$key] == '' ) && ($data['employer_name'][$key] == null || $data['employer_name'][$key] == '' )){

                    continue;
                }

                if ($value == null || $value == '') {
                    DB::rollback();

                    return 'Start work is empty';
                }

                if ($data['work_end'][$key] == null || $data['work_end'][$key] == '' ) {
                    DB::rollback();

                    return 'End work is empty';
                }

                if ($data['employer_name'][$key] == null || $data['employer_name'][$key] == '' ){
                    DB::rollback();

                    return 'Name of employer is empty';
                }

                if ($data['work_type'][$key] == -1){
                    DB::rollback();

                    return 'Please choose style of work';
                }

                $work = array(
                    'user_id'       =>  Auth::user()->id,
                    'work_start'    =>  $this->parseDate($value),
                    'work_end'      =>  $this->parseDate($data['work_end'][$key]),
                    'employer_name' =>  $data['employer_name'][$key],
                    'work_type'     =>  $data['work_type'][$key],
                    'work_description'=> isset($data['work_description'][$key])?$data['work_description'][$key]:'',
                );

                ApplyCourseWorkExperience::create($work);
            }

            //Insert English proficiency tests
            foreach (isset($data['test_date'])?$data['test_date']:[] as $key => $value) {
                if ( ($data['certificate'][$key] == -1) && ($value == null || $value == '') && ($data['reference_no'][$key] == null || $data['reference_no'][$key] == '' ) ){

                    continue;
                }

                if ($value == null || $value == '') {
                    DB::rollback();

                    return 'Test Date is empty';
                }

                if ($data['certificate'] == -1) {
                    DB::rollback();

                    return 'Please choose certificate';
                }

                if ($data['reference_no'][$key] == null || $data['employer_name'][$key] == '' ){
                    DB::rollback();

                    return 'Reference is empty';
                }

                $english = array(
                    'user_id'       =>  Auth::user()->id,
                    'test_date'     =>  $this->parseDate($value),
                    'certificate'   =>  $data['certificate'][$key],
                    'reference_no'  =>  $data['reference_no'][$key],
                );

                ApplyCourseEnglishProficiency::create($english);
            }

            DB::commit();    
        } catch (Exception $e) {
            DB::rollback();

            return 0;            
        }
        return 1;
    }

    public function storeDocument(Request $request) {
        $user_id = Auth::user()->id;
        $files = $request->file_info;

        DB::beginTransaction();
        try {
            $upload_files = $this->doUploadFile($user_id, $files);

            ApplyCourseAdditionalDetail::where('user_id', $user_id)->delete();
            $additional_detail = array(
                'user_id'               =>  $user_id,
                'personal_statement'    =>  $request->personal_statement,
                'question1'             =>  $request->question1=='true',
                'question2'             =>  $request->question2=='true',
                'answer1'               =>  $request->answer1,
                'answer2'               =>  $request->answer2,
            );
            ApplyCourseAdditionalDetail::create($additional_detail);

            DB::commit();

        } catch (Exception $e) {
            DB::rollback();

            return 0;
        }

        return 1;
    }

    public function storeVerification (Request $request) {
        $user_id = Auth::user()->id;
        $verification = ApplyCourseAdditionalDetail::where('user_id', $user_id)->first();
        if (count($verification)) {
            $data = array(
                'verification' => $request->verification,
            );
            ApplyCourseAdditionalDetail::where('user_id', $user_id)->update($data);
        }
    }

    public function submit() {
        $user_id = Auth::user()->id;
        ApplyCourse::where('user_id', $user_id)->where('receive_status', 0)->update(['received' => Carbon::now(), 'receive_status'=>1]);
    }

    public function confirmation(Request $request, $send_mail=0) {
        $user;

        if (!Auth::check()) {
            return Redirect::route('login');
        }

        $user = Auth::user();
        $country_birth = $this->countryBirth();
        $nationality = $this->nationality();
        $qualification = $this->qualification();
        $certificate = $this->certificate();

        $data = array(
            'user'          =>  $user,
            'country_birth' =>  $country_birth,
            'nationality'   =>  $nationality,
            'qualification' =>  $qualification,
            'certificate'   =>  $certificate,
        );

        if ($send_mail == 1)
            Mail::to($user->personalDetail->email)->send(new ApplyCourseMail($data));
        
        return view('user.confirmation', compact(['user', 'country_birth', 'nationality', 'qualification', 'certificate']));
    }

    public function parseDate($date) {
    	$date = str_replace('/', '-', $date);
    	$date = Carbon::parse($date)->format('Y-m-d');

    	return $date;
    }

    public function getFile() {
        $user_id = Auth::user()->id;
        $files = ApplyCourseDocument::where('user_id', $user_id)->get(['file_name','url']);

        return $files;
    }

    public function uploadFile(Request $request) {
        //Khoi tao 
        $temp_folder = 'file/temp/apply';
        $file = $request->file;
        $new_name = rand(1,1000).time().'.'.$file->getClientOriginalExtension();
        $file->move($temp_folder,$new_name);
        return $new_name;
    }

    public function removeFile(Request $request){
        $name = $request->name;
        $real_folder = 'file/apply/'.Auth::user()->id;
        $data = ApplyCourseDocument::where('url',$real_folder.'\\'.$name)->first();
        if(count($data) != 0)
            return json_encode($data);

        return -1;
    }

    public function doUploadFile($id,$files){
        //Khoi tao thu muc
        $temp_folder = 'file/temp/apply';
        $real_folder = 'file/apply/'.$id;
        // $old_images = array();
        if (!is_dir($real_folder)) {
            mkdir(public_path($real_folder), 755, true);         
        }
        //Luu anh vao server
        try {
            if (!isset($files) || $files == null)
                $files = array();
            foreach ($files as $key => $value) {
                $temp = explode(",", $value);
                $is_oldFile = $temp[0];//0-newfile, 1-oldfile
                $file_server_name = $temp[1];
                $file_name = $temp[2];

                if ($file_server_name != "undefined") {
                    if($is_oldFile == 0){
                        $current_path = $temp_folder.'/'.$file_server_name;
                        $new_path = $real_folder.'/'.$file_server_name;
                        $move = rename($current_path, $new_path);

                        if (!$move)
                            return false;

                        ApplyCourseDocument::create([
                            'user_id'   =>  $id,
                            'file_name' =>  $file_name,
                            'url'       =>  $real_folder.'\\'.$file_server_name,
                            ]);
                    }else{
                        ApplyCourseDocument::where('url',$real_folder.'\\'.$file_server_name)->delete();
                    }
                }
            }//end foreach
        } catch (Exception $e) {
            // dd($e);
            return false;
        }
        return true;
    }

    public function countryBirth() {
        return $str = [
                '195'=>'Singapore',
                '27'=> 'Brunei',
                '115'=>'Cambodia',
                '46'=>'China',
                '99'=>'Indonesia',
                '124'=>'Laos',
                '155'=>'Malaysia'
            ];
    }

    public function nationality() {
        return [
            '159'=>'Singaporean',
            '28'=>'Bruneian',
            '31'=>'Burmese',
            '33'=>'Cambodian',
            '40'=>'Chinese',
            '62'=>'Filipino',
            '83'=>'Indonesian',
            '98'=>'Laotian',
            '109'=>'Malaysian'
        ];
    }

    public function qualification() {
        return [
            '2'=>"GCE 'O' Levels",
            '3'=>"GCE 'A' Levels",
            '4'=>"Polytechnic Diploma",
            '5'=>"Private Diploma",
            '6'=>"International Baccaleaurate",
            '7'=>"Sijil Tinggi Persekolahan Malaysia",
            '9'=>"Bachelor's",
            '10'=>"Master",
            '8'=>"Other",
        ];
    }

    public function certificate() {
        return [
            "IELTS",
            "TOEFL iBT (internet based)",
            "TOEFL PBT (paper based)",
            "PTE Academic",
            "Cambridge English Advanced (CAE)",
            "Pearson Test of English (PTE)",
            "Occupational English Test"
        ];
    }
}
