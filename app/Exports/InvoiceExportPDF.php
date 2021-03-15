<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InvoiceExportPDF implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public $data;
    public $form1;
    public $form2;
    public $form3;
    public $form4;
    public $form5;

    public function __construct($invoice, $form1, $form2, $form3, $form4, $form5)
    {
        $this->data = $invoice;
        $this->form1 = $form1;
        $this->form2 = $form2;
        $this->form3 = $form3;
        $this->form4 = $form4;
        $this->form5 = $form5;
    }
    public function view(): View
    {

        return view('id2.update', [
            'data' => $this->data,
            'form1' => $this->form1,
            'form2' => $this->form2,
            'form3' => $this->form3,
            'form4' => $this->form4,
            'form5' => $this->form5,
        ]);
    }
}
