<?php

namespace App\Observers;

use App\Models\Form1_MD;
use App\Models\Form2_MD;
use App\Models\Form3_MD;
use App\Models\Form4_MD;
use App\Models\Form5_MD;
use App\Models\Invoice_MD;

class InvoiceObserver
{
    /**
     * Handle the invoice_ m d "created" event.
     *
     * @param  \App\Invoice_MD  $invoiceMD
     * @return void
     */
    public function created(Invoice_MD $invoiceMD)
    {
        $f2 = Form2_MD::create([]);
        $f3 = Form3_MD::create([]);
        $f4 =  Form4_MD::create([]);
        $f5 = Form5_MD::create([]);
        $invoiceMD->update(['form5_id' => $f5->id, 'form4_id' => $f4->id, 'form3_id' => $f3->id, 'form2_id' => $f2->id], ['id' => $invoiceMD->id]);
    }

    /**
     * Handle the invoice_ m d "updated" event.
     *
     * @param  \App\Invoice_MD  $invoiceMD
     * @return void
     */
    public function updated(Invoice_MD $invoiceMD)
    {
        //
    }

    /**
     * Handle the invoice_ m d "deleted" event.
     *
     * @param  \App\Invoice_MD  $invoiceMD
     * @return void
     */
    public function deleted(Invoice_MD $invoiceMD)
    {
        //
    }

    /**
     * Handle the invoice_ m d "restored" event.
     *
     * @param  \App\Invoice_MD  $invoiceMD
     * @return void
     */
    public function restored(Invoice_MD $invoiceMD)
    {
        //
    }

    /**
     * Handle the invoice_ m d "force deleted" event.
     *
     * @param  \App\Invoice_MD  $invoiceMD
     * @return void
     */
    public function forceDeleted(Invoice_MD $invoiceMD)
    {
        //
    }
}
