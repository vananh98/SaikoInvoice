<?php

namespace App\Http\Controllers;

use App\Models\Form1_MD;
use App\Models\Form2_MD;
use App\Models\Form3_MD;
use App\Models\Form4_MD;
use App\Models\Form5_MD;
use App\Models\Invoice_Items_MD;
use App\Models\Invoice_MD;
use Illuminate\Http\Request;
use PDF;

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
        $data = Invoice_MD::find($id);
        return view('id2.update', compact('data'));
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
        // dd($request->all());
        $invoice = Invoice_MD::find($id);
        //update form1
        $updateForm1 = Form1_MD::find($invoice->form1_id);
        $updateForm1->update([
            'tieu_de' => $request->form1_tieude,
            'noi_dung' => $request->form1_mauso,
            'mau_so' => $request->form1_noidung,
            'ky_hieu' => $request->form1_kyhieu,
            'so' => $request->form1_so,
            'ngay_thang_nam' => $request->form1_ngay . '-' . $request->form1_thang . '-' . $request->form1_nam
        ]);
        //update form 2
        $updateForm2 = Form2_MD::find($invoice->form2_id);
        $updateForm2->update([
            'don_vi_ban_hang' => $request->form2_dvbh,
            'ma_so_thue' => $request->form2_mst,
            'dia_chi' => $request->form2_diachi,
            'dien_thoai' => $request->form2_dienthoai,
            'so_tai_khoan' => $request->form2_stk,
            'ngan_hang' => $request->form2_nh
        ]);
        //update form 3
        $updateForm3 = Form3_MD::find($invoice->form3_id);
        $updateForm3->update([
            'ho_ten_nguoi_mua' => $request->form3_nmh,
            'ten_don_vi' => $request->form3_dv,
            'ma_so_thue' => $request->form3_mst,
            'dia_chi' => $request->form3_diachi,
            'hinh_thuc_thanh_toan' => $request->form3_paymethod,
            'so_tai_khoan' => $request->form3_stk,
            'ghi_chu' => $request->form3_note
        ]);
        //update form 4
        $updateForm4 = Form4_MD::find($invoice->form4_id);
        $updateForm4->update([
            'cong_tien_hang' => $request->form4_congtienhang,
            'thue_suat_gtgt' => $request->form4_thuegtgt,
            'tien_thue_gtgt' => $request->form4_tienthuegtgt,
            'tong_cong_tien_thanh_toan' => $request->form4_tongtienthanhtoan,
            'so_tien_viet_bang_chu' => $request->form4_tienchu
        ]);
        //update form invoice_details
        if (!($request->form4_tenhang == NULL)) {
            for ($i = 0; $i <= count($request->form4_tenhang) - 1; $i++) {
                $updateInvoiceDetail = Invoice_Items_MD::create([
                    'form4_id' => $invoice->form4_id,
                    'ten_hang_hoa_dich_vu' => $request->form4_tenhang[$i],
                    'don_vi_tinh' => $request->form4_dvt[$i],
                    'so_luong' => $request->form4_soluong[$i],
                    'don_gia' => $request->form4_dongia[$i],
                    'thanh_tien' => $request->form4_thanhtien[$i]
                ]);
            }
        } else {
            $updateInvoiceDetail = 1;
        }
        //update form 5
        $updateform5 = Form5_MD::find($invoice->form5_id);
        $updateform5->update([
            'nguoi_chuyen_doi' => $request->form5_nguoichuyen,
            'nguoi_mua_hang' => $request->form5_nguoimua,
            'nguoi_ban_hang' => $request->form5_ngban,
            'ngay_chuyen_doi' => $request->form5_ngaychuyen
        ]);

        $invoiceDetails = Invoice_Items_MD::where('form4_id', $invoice->form4_id)->get();
        if (($updateForm1 && $updateForm2) && ($updateForm3 && $updateForm4) && ($updateform5 && $updateInvoiceDetail)) {
            if ($request->save) {
                return back();
            }
            if ($request->save_export) {
                $pdf = PDF::loadview('pdf.pdf', compact('updateForm1', 'updateForm2', 'updateForm3', 'updateForm4', 'updateform5', 'updateInvoiceDetail'));
                return $pdf->download('invoice.pdf');
            }
        } else {
            return back()->with('failed', "Tạo mới lỗi");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function exportPDF()
    {
        return view('pdf.pdf');
    }
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
    public function getTH(Request $request)
    {
        $data =  Invoice_Items_MD::where('ten_hang_hoa_dich_vu', 'like', '%' . $request->char . '%')->select('ten_hang_hoa_dich_vu')->distinct()->limit(10)->get();
        return response()->json($data);
    }
}
