
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
               <!-- load bootstrap -->
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
           

                <div class="page-header">
            <h1><span class="glyphicon glyphicon-flash"></span> Pharmacy Order!</h1>
        </div>    
          
                
        
            

        <!-- FORM STARTS HERE -->
        <form method="POST" action="{{url('/order-post')}}" name=""  novalidate>
                  {{ csrf_field() }}


                      

            <div class="form-group">
                <label for="name">Medicine Code</label>
                <input type="text" id="medicineCode" class="form-control" name="medicineCode" placeholder="ID is Important" value="{{ (isset($getOrdData->medicineCode)) ? $getOrdData->medicineCode : '' }}">
                <input type="hidden" name="hiddenId" id="hiddenId" value="{{ (isset($getOrdData->id)) ? 1 : 2}}">
            </div>
            <div class="form-group">
                <label for="name">Medicine Quantity</label>
                <input type="text" id="medQty" class="form-control" name="medQty" placeholder="Code Is Important" value="{{ (isset($getOrdData->medQty)) ? $getOrdData->medQty : '' }}">
            </div> 
            <div class="form-group">
                <label for="name">Medicine Price</label>
                <input type="text" id="medtotPrice" class="form-control" name="medtotPrice" placeholder="Code Is Important" value="{{ (isset($getOrdData->medtotPrice)) ? $getOrdData->medtotPrice : '' }}">
            </div>  
              <div class="form-group">
                <label for="name">Order Discount</label>
                <input type="text" id="discount" class="form-control" name="discount" placeholder="Code Is Important" value="{{ (isset($getOrdData->discount)) ? $getOrdData->discount : '' }}">
            </div>  
            <div class="form-group">
                <label for="name">Remarks</label>
                <input type="text" id="remarks" class="form-control" name="remarks" placeholder="Description Is Important" value="{{ (isset($getOrdData->remarks)) ? $getOrdData->remarks : '' }}">
            </div>
            <div class="form-group">
                <label for="name">Sell Date</label>
                <input type="text" id="sellDate" class="form-control" name="sellDate" placeholder="Code Is Important" value="{{ (isset($getOrdData->sellDate)) ? $getOrdData->sellDate : '' }}">
            </div>  
            
           
            

            <button type="submit" class="btn btn-success">Go Order Go!</button>

        </form>

    </div>
</div>
  
    

@endsection