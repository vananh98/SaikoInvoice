<?php

namespace App\Http\Controllers;

use App\Models\Form2_MD;
use App\Models\Form3_MD;
use App\Models\Invoice_MD;
use Illuminate\Http\Request;

class id_2_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Invoice_MD::paginate(20);
        return view('id2.index', compact('data'));
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
    public function store(Request $request)
    {
        //
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
        return view('id2.update');
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
    //form2
    public function getDVBH(Request $request)
    {
        $data =  Form2_MD::where('don_vi_ban_hang', 'like', '%' . $request->char . '%')->select('don_vi_ban_hang')->distinct()->limit(10)->get();
        return response()->json($data);
    }
    public function getMST(Request $request)
    {
        $data =  Form2_MD::where('ma_so_thue', 'like', '%' . $request->char . '%')->select('ma_so_thue')->distinct()->limit(10)->get();
        return response()->json($data);
    }
    public function getDC(Request $request)
    {
        $data =  Form2_MD::where('dia_chi', 'like', '%' . $request->char . '%')->select('dia_chi')->distinct()->limit(10)->get();
        return response()->json($data);
    }
    public function getDT(Request $request)
    {
        $data =  Form2_MD::where('dien_thoai', 'like', '%' . $request->char . '%')->select('dien_thoai')->distinct()->limit(10)->get();
        return response()->json($data);
    }
    public function getSTK(Request $request)
    {
        $data =  Form2_MD::where('so_tai_khoan', 'like', '%' . $request->char . '%')->select('so_tai_khoan')->distinct()->limit(10)->get();
        return response()->json($data);
    }
    public function getNH(Request $request)
    {
        $data =  Form2_MD::where('ngan_hang', 'like', '%' . $request->char . '%')->select('ngan_hang')->distinct()->limit(10)->get();
        return response()->json($data);
    }
    //form 3
    public function getBuyer(Request $request)
    {
        $data =  Form3_MD::where('ho_ten_nguoi_mua', 'like', '%' . $request->char . '%')->select('ho_ten_nguoi_mua')->distinct()->limit(10)->get();
        return response()->json($data);
    }

    public function getCPN(Request $request)
    {
        $data =  Form3_MD::where('ten_don_vi', 'like', '%' . $request->char . '%')->select('ten_don_vi')->distinct()->limit(10)->get();
        return response()->json($data);
    }
    public function getTax(Request $request)
    {
        $data =  Form3_MD::where('ma_so_thue', 'like', '%' . $request->char . '%')->select('ma_so_thue')->distinct()->limit(10)->get();
        return response()->json($data);
    }
    public function getADD(Request $request)
    {
        $data = Form3_MD::where('dia_chi', 'like', '%' . $request->char . '%')->select('dia_chi')->distinct()->limit(10)->get();
        return response()->json($data);
    }
    public function getPM(Request $request)
    {
        $data =  Form3_MD::where('hinh_thuc_thanh_toan', 'like', '%' . $request->char . '%')->select('hinh_thuc_thanh_toan')->distinct()->limit(10)->get();
        return response()->json($data);
    }
    public function getAccNo(Request $request)
    {
        $data =  Form3_MD::where('so_tai_khoan', 'like', '%' . $request->char . '%')->select('so_tai_khoan')->distinct()->limit(10)->get();
        return response()->json($data);
    }
}
