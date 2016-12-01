<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function laravelForm(Request $request)
    {
        # code...
        return view('laravel_example_form');
    
    }
     public function newMedicine()
    {
        return view('medicine_form');
       
    }
    public function getMedicineData(Request $request)
    {
        # code...
        //dd($request);

      // medicineName
      // medicineType
       //medPrice
       //medStock

       // step1 value in 
        $medicineName =$request->medicineName;
        $medicineType = $request->medicineType;
        $medPrice = $request->medPrice;
        $medStock = $request->medStock;
        $hiddenId  = $request->hiddenId;
        //$packVol = $request->packVol;
        //$hiddenId  = $request->hiddenId;


     
        
        $insert_medicine = array(
            'medicineName' => $medicineName,
            'medicineType' => $medicineType,
            'medPrice' => $medPrice,
            'medStock' => $medStock,
            //'pckg_volum' => $packVol,



        );

       
        
         if ($hiddenId ==1) {
              DB::table('medicines')->where('id',$hiddenId)->update($insert_medicine);
            } 
          else{
                DB::table('medicines')->insert($insert_medicine);
            }

   

  

      return redirect('/showMedicine');

    }
    


    
      public function showMedicine()
    {

        $medicines = DB::table('medicines')->get();
        //dd($medicines);
        //return view('tags',compact('tags'));
        return view('show_medicine')->with('medicines', $medicines);
        //exit("i amin package_form");
    } 
    
    public function editMedicineData($medicineId)
    {
        # code...
            //d($packageId);

            $getMedData = DB::table('medicines')->where('id', $medicineId)->first();

            //dd($getPakData->pckg_code);

            return view('medicine_form')->with('getMedData', $getMedData);
    }



    /* @For post Data Receiving method is Request $request,
        For get  Data sending method is just varriable name $var

        */


    
     public function deleteMedicine($medicineId)
    {        
        $getMedList = DB::table('medicines')->where('id',$medicineId)->first();        

        DB::table('medicines')->where('id',$medicineId)->delete();
        
        return redirect('/showMedicine');
    }
     public function newOrder()
    {
        return view('order_form');
       
    }
     public function getOrderData(Request $request)
    {
        # code...
        //dd($request);

      // medicineName
      // medicineType
       //medPrice
       //medStock

       //

       // step1 value in 
        $medicineCode =$request->medicineCode;
        $medQty = $request->medQty;
        $medtotPrice = $request->medtotPrice;
        $discount = $request->discount;
        $remarks = $request->remarks;
        $sellDate = $request->sellDate;
        $hiddenId  = $request->hiddenId;
        


     
        
        $insert_medicine_order = array(
            'medicineCode' => $medicineCode,
            'medQty' => $medQty,
            'medtotPrice' => $medtotPrice,
            'discount' => $discount,
            'remarks' => $remarks,
            'remarks' => $remarks,
            //'pckg_volum' => $packVol,



        );
        
         if ($hiddenId ==1) {
              DB::table('medicines_orders')->where('id',$hiddenId)->update($insert_medicine_order);
            } 
          else{
                DB::table('medicines_orders')->insert($insert_medicine_order);
            }

   

  

      return redirect('/show-order');
    }
     public function showOrder()
    {

        $medicines_orders = DB::table('medicines_orders')->get();
        //return view('tags',compact('tags'));
        return view('show-order')->with('medicines_orders', $medicines_orders);
        //exit("i amin package_form");
    } 

     public function editOrderData($orderId)
    {
        # code...
            //dd($orderId);

            $getOrdData = DB::table('medicines_orders')->where('id', $orderId)->first();

            //dd($getPakData->pckg_code);

            return view('order_form')->with('getOrdData', $getOrdData);
    }



    /* @For post Data Receiving method is Request $request,
        For get  Data sending method is just varriable name $var

        */


    
     public function deleteOrder($orderId)
    {        
        $getMedList = DB::table('medicines_orders')->where('id',$orderId)->first();        

        DB::table('medicines_orders')->where('id',$orderId)->delete();
        
        return redirect('/show-order');
    }
    
}
