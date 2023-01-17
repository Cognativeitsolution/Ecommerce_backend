<?php

namespace App\Http\Controllers;

use PDF;
use Session;
use Validator;
use App\Models\Job;
use App\Models\Career;
use App\Models\Degree;
use App\Models\Experience;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $record = cache()->remember('jobs-listing', 60 * 60, function(){
            return Job::select('id','name','short_description','slug','location','created_at')
                ->where('status',1)->orderBy('jobs.id','DESC')
                ->paginate(15);
        });

        if($record != false){
            return view('jobs', compact('record') );
        }else{
            abort(404);
        }
    }
    public function job_detail($slug){

        $job = Job::where('status', 1)
            ->with('meta:job_id,meta_keywords,meta_description')
            ->whereSlug($slug)->first();

        if($job != false){
            Session::put('job_id', $job->id);
            return view('job_details', compact('job') );
        }else{
            abort(404);
        }

    }
    public function apply_job(){
        $experiences = Experience::select('id', 'name')->get();
        $degrees = Degree::select('id', 'name')->get();
        return view('apply_job', compact('experiences', 'degrees'));
    }

    public function thank_you(){
        return view('thank_you');
    }

    public function success_apply_job(Request $request){
        
        $request->validate([
            'name'  => 'required',
            'email' => ['required', 'email', 'unique:careers'],
            'phone_number'  => 'required|numeric',
            'file' => 'required|mimes:pdf,doc,docx|max:2048',
            //'file' => 'required|mimes:pdf|max:2048',
        ]);

        if($request->session()->has('job_id'))
        {
            $job_id = Session::get('job_id') ;
        }else{
            abort(404);
        }

        $pdf = $request->file->extension() == "pdf" ? 1 : 0 ;

        $random = rand(5,999999999) ;
        $fileName = $random.'.'.$request->file->extension();

        //$fileName = time().'.'.$request->file->extension();
        $request->file->move(public_path('files'), $fileName);

        if( $pdf == 0 ){

            $domPdfPath = base_path('vendor/dompdf/dompdf');
            \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
            \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');

            //Load word file
            $Content = \PhpOffice\PhpWord\IOFactory::load(public_path('files/'.$fileName));

            //Save it into PDF
            $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content,'PDF');

            $fileName = $random.".pdf";
            $PDFWriter->save(public_path('files/'.$fileName));

        }

        $data = [
            'job_id' => $job_id,
            'name'  => $request->name,
            'email'  => $request->email,
            'phone_number'  => $request->phone_number,
            'resume'        => $fileName,
            'experience_id'        => $request->experience,
            'degree_id'        => $request->degree,
            'major_field'  => $request->major_field,
            'details'  => $request->details,
            'profile_link'  => $request->profile_link,
        ];

        Career::create($data);
        Session::forget(['job_id']);

        return redirect()->route('thank_you')->with('success','Thanks for Apply We will contact you soon!');
    }




}
