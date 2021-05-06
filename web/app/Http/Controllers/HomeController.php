<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Table1;
use App\Models\Table2;
use App\Models\Table3;

class HomeController extends Controller
{
    public function index(Request $request) {
        $objRequest = Table1::with('table2', 'table3')
                            ->orderBy('date_price', 'DESC')
                            ->groupBy('id');

        if ($request->product_type) {
            $objRequest->where('product_type', $request->product_type);
        }

        if ($request->product_name) {
            $objRequest->where('product_name', $request->product_name);
        }

        $products = $objRequest->get();

        $products_type = Table1::select('product_type')
                                ->orderBy('product_type', 'ASC')
                                ->get();
        
        return view('home', compact('products', 'products_type'));
    }

    public function upload() {
        return view('upload');
    }

    public function store(Request $request) {
        if ($request->hasFile('file')) {
            $filename = $request->file->store('uploads');

            $row = 0;
            $import = fopen($filename, 'r');
            while ($data = fgetcsv($import)) {
                $row++;
                //skip header row
                if ($row == 1) {
                    continue;
                }

                // Process csv row 
                $product = Table1::where('product_name', $row[1])
                                 ->first();

                $sale = Table3::create([
                    'number_week' => $row[0],
                    'product_name' => $row[1],
                    'product_type' => $row[2],
                    'qty_sale' => $row[3]
                ]);                
            }
        }
    }
}
