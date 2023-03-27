<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class AdminInvoiceController extends Controller
{
    public function index()
    {
        $arr['invoices'] = Invoice::all();

        return view('admin.invoice.index')->with($arr);
    }

    public function paid_invoice ()
    {
        $arr['invoices'] = Invoice::where('status','PAID')->get();
        return view('admin.invoice.paid_invoice')->with($arr);
    }
    public function upaid_invoice()
    {
        $arr['invoices'] = Invoice::where('status','UNPAID')->get();
        return view('admin.invoice.unpaid_invoice')->with($arr);
    }
    public function invoice_edit( Invoice $invoice)
    {
        $arr['invoice'] = $invoice;
        
        return view('admin.invoice.edit')->with($arr);
    }
    public function invoice_update(Request $request, Invoice $invoice)
    {
        $invoice->status = $request->invoice_status;
        $invoice->update();
        return redirect() -> route('admin.invoice.invoice_edit',$invoice->id)->with('success','Succesfully Update');

    }

}
