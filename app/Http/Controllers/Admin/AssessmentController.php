<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FreeAssessment as Assessment;
use Carbon\Carbon;
use Excel;

class AssessmentController extends Controller
{
    public function __construct() {
        $this->middleware('admin');
    }

    public function index() {
        $title = 'Assessment | List';

    	$assessments = Assessment::all();

    	return view('admin.assessment.index', compact(['assessments', 'title']));
    }

    public function show($id) {
        $title = 'Assessment | Detail';

    	$assessment = Assessment::where('id', $id)->firstOrFail();
        $assessment->status = 1;
        $assessment->save();

    	return view('admin.assessment.show', compact(['assessment', 'title']));
    }

    public function remove($id) {
    	$assessment = Assessment::where('id', $id)->delete();

    	\Session::flash('success', 'Remove item success');

    	return \Redirect::route('admin.assessment.list');
    }

    public function exportToExcel(Request $request) {
        $assessments = new Assessment;
        $fromDate = '';
        $toDate = '';
        if ($request->fromDate) {
            $fromDate = Carbon::createFromFormat('d/m/Y', $request->fromDate)->format('Y-m-d');
            $assessments = $assessments->where('created_at', '>=', $fromDate);
        }
        if ($request->toDate) {
            $toDate = Carbon::createFromFormat('d/m/Y', $request->toDate)->format('Y-m-d');
            $assessments = $assessments->where('created_at', '<=', $toDate.' 23:59:59');
        }

        $assessments = $assessments->get($this->selectedField());

        if ($assessments->count()) {
            $assessments->filter(function ($item) {
                $item->registered_at = $item->created_at->format('d/m/Y H:i:s');
                unset($item->created_at);
                // $item->forget('created_at');
                return $item;
            });
            // $assessments = $assessments->forget($item->created_at);
            // dd($assessments);
            $this->doExport($assessments, $request->fromDate, $request->toDate);
        } else echo "Không có dữ liệu";
    }

    //Export data to xls
    public function doExport($assessments, $fromDate = '', $toDate = '') {
        Excel::create('ds_dang_ky_tu_van_du_hoc_'.time(), function($excel) use($assessments, $fromDate, $toDate) {
            $excel->sheet('ds_dang_ky_tu_van_du_hoc', function($sheet) use($assessments, $fromDate, $toDate) {
                //Configure
                $sheet->setOrientation('landscape');
                $sheet->setFontFamily('Times New Roman');
                $sheet->setFontSize(12);
                $sheet->setAutoSize(false);
                $range = count($assessments) + 5;
                $sheet->setBorder('A5:I'.$range);
                $sheet->setWidth(array(
                    'A'     =>  5,
                    'B'     =>  20,
                    'C'     =>  30,
                    'D'     =>  20,
                    'E'     =>  30,
                    'F'     =>  10,
                    'G'     =>  30,
                    'H'     =>  30,
                    'I'     =>  20,
                ));
                //Insert text
                $sheet->appendRow(1, array(
                    'DANH SÁCH BẢN ĐĂNG KÝ TƯ VẤN DU HỌC',
                    ));
            
                if ($fromDate == '') 
                    $fromDate = explode(' ', $assessments[0]->registered_at)[0];
                if ($toDate == '') 
                    $toDate = Carbon::now()->format('d/m/Y');

                $sheet->appendRow(3, array(
                    'Từ ngày: '.$fromDate.' - '.$toDate
                ));

                $sheet->appendRow(5, array(
                    'STT',
                    'Họ và tên',
                    'E-mail',
                    'Điện thoại',
                    'Khóa học đã hoàn thành',
                    'Điểm trung bình',
                    'Môn học quan tâm',
                    'Quốc gia',
                    'Ngày đăng ký',
                    ));
                 /*
                //Set style row and column
                */
                 $sheet->cell('A5:I'.$range, function($cell) {
                    $cell->setAlignment('center');
                    $cell->setValignment('center');
                    $cell->setFont([
                        'size'   => 12,
                        'bold'   => false,
                        ]);
                });

                 $sheet->cell('A1:I5', function($cell) {
                    $cell->setFont(array(
                        'bold'       =>  true
                    ));
                });

                //Set wrap text
                $sheet->getStyle('A5:I'.$range)->getAlignment()->setWrapText(true);
                
                $sheet->fromArray($assessments, null, 'A6',false,false);
            });
        })->download('xls');
    }

    public function selectedField() {
        return array(
            'id', 'name', 'email', 'phone', 'course_completed', 'avg_score', 'course_interest', 'countries', 'created_at'
        );
    }
}
