<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use Yajra\Datatables\Datatables;
use App\Exports\CustomerExport;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers=customer::all();
        return view('index', compact('customers'));
    }
    

    public function yajra_datatables()
    {
        
        return view('yajra_datatables');
    }


    public function get_customer()
    {
        return DataTables::of(customer::query())->make(true);
    }

    public function excel_download(){

        return Excel::download(new CustomerExport, 'customers.xlsx');
        
    }

    public function pdf_download(){

        return Excel::download(new CustomerExport, 'customers.pdf');
        
    }
}
