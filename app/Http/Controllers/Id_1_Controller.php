<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInVoiceRequest;
use App\Models\Form1_MD;
use App\Models\Invoice_MD;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;
use Illuminate\Support\Str;

class Id_1_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewCreate()
    {
        return view('id1.create');
    }
    public function viewList()
    {
        $data = Invoice_MD::orderBy('created_at','Desc')->paginate(20);

        return view('id1.list', compact('data'));
    }
    public function index()
    {
        //
        return view('id1.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInVoiceRequest $request)
    {
        return "ok";
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        $str = Str::random(40);
        while (file_exists(public_path('images/' . $str . '.' . $ext))) {
            $str = Str::random(40);
        }
        ($a = $file->move('images/',  $str . '.' . $ext));
        //tạo invoice
        $new = Invoice_MD::create(['path_file' => $a->getPathname()]);
        //tạo form1
        $f1 = Form1_MD::create([
            'tieu_de' => $request->tittle,
        ]);
        $new->update(['form1_id' => $f1->id], ['id' => $new->id]);
        session()->flash('sucess', 'Thêm thành công');
        return redirect()->route('id1.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
