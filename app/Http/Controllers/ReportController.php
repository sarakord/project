<?php

namespace App\Http\Controllers;

use App\Http\Requests\createReportRequest;
use App\Http\Requests\editReportRequest;
use App\Report;
use App\Slider;
use App\Gallery;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function index()
    {
        return view('report/index', ['report' => Report::get()]);
    }


    public function create()
    {
        return view('report.insert');
    }


    public function store(createReportRequest $request)
    {
        $report = new Report();
        $report->title = $request->title;
        $report->brief = $request->brief;
        $report->description = $request->description;
        $file = $request->file('image');
        if (!empty($file)) {
            $image = time() . $file->getClientOriginalName();
            $file->move('images/report', $image);
            $report->image = $image;
        }
        $report->save();
        return redirect()->route('report.index');
    }


    public function show($id)
    {
        $report=Report::where('id' , $id)->first();
        $slider=Slider::get();
        return view('pages.report',['slider'=>$slider , 'report'=>$report]);
    }


    public function edit(Report $report)
    {
        return view('report.edit', ['report' => $report]);
    }


    public function update(editReportRequest $request, $id)
    {
        $report = Report::findorfail($id);
        $report->title = $request->title;
        $report->brief = $request->brief;
        $report->description = $request->description;
        $file = $request->file('image');
        if (!empty($file)) {
            $imageDelete = $report->image;
            unlink('images/report/' . $imageDelete);
            $image = time() . $file->getClientOriginalName();
            $file->move('images/report', $image);
            $report->image = $image;
        }
        $report->save();
        return redirect()->route('report.index');
    }


    public function destroy(Report $report)
    {
        $image = $report->image;
        unlink('images/report/' . $image);
        $report->forceDelete();
        return back();
    }


    public function main()
    {
        $slider = Slider::get();
        $report = Report::paginate(4);
        $gallery=Gallery::paginate(4);
        return view('index', ['report' => $report, 'slider' => $slider, 'gallery'=>$gallery]);
    }

    public function news()
    {
        $slider=Slider::get();
        return view('pages.allreport',['slider'=>$slider , 'report'=>Report::get()]);
    }
}
