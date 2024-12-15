<?php

namespace App\Http\Controllers\Admin;

use App\FileService\ImageService;
use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        //
        $popups=Report::get();
        return view('admin.report.index',compact('popups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.report.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $req = $request->all();

        if ($request->hasFile('report')) {
            $popup_image = $this->Uploadfile($request->file('report'), "report");
            $req["file"] = $popup_image;
        } else {
            return back()->withErrors(['report' => 'File is required'])->withInput();
        }
        $popup = Report::create($req);
        return redirect()->route("admin.report.index")->with("popsuccess", "Report Added");
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        return view("admin.report.edit", compact("report"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $report = Report::find($id);
        if (!$report) {
            return back()->withErrors(['report' => 'Report not found'])->withInput();
        }

        $req = $request->all();

        if ($request->hasFile('file')) {
            $this->deleteFile($report->file);

            $popup_image = $this->Uploadfile($request->file('file'), "file");

            $req["file"] = $popup_image;
        }

        $report->update($req);

        return redirect()->route("admin.report.index")->with("popsuccess", "Report Updated");
    }






    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $report = Report::find($id);

        if (!$report) {
            return back()->withErrors(['file' => 'Report not found']);
        }
        $this->deleteFile($report->file);

        $report->delete();

        return redirect()->route("admin.report.index")->with("popsuccess", "Report Deleted");
    }






    function randomString($length)
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
    }
    public function Uploadfile($file, $name)
    {
        $destinationPath = public_path() . '/uploads/';
        $randomString = $this->randomString(4);
        $imageName = $name ."_". $randomString . $file->getClientOriginalName();
        $file->move($destinationPath, $imageName);
        return $imageName;
    }

    public function deleteFile($fileName)
    {
        $filePath = public_path() . '/uploads/' . $fileName;

        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

}
