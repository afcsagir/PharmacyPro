
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
               <!-- load bootstrap -->
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
           

                <div class="page-header">
            <h1><span class="glyphicon glyphicon-flash"></span> Pharmacy Fly!</h1>
        </div>    
          
                
        
            

        <!-- FORM STARTS HERE -->
        <form method="POST" action="{{url('/medicine-post')}}" name=""  novalidate>
                  {{ csrf_field() }}


                      

            <div class="form-group">
                <label for="name">Medicine Name</label>
                <input type="text" id="medicineName" class="form-control" name="medicineName" placeholder="ID is Important" value="{{ (isset($getMedData->medicineName)) ? $getMedData->medicineName : '' }}">
                <input type="hidden" name="hiddenId" id="hiddenId" value="{{ (isset($getMedData->id)) ? 1 : 2}}">
            </div>
            <div class="form-group">
                <label for="name">Medicine Type</label>
                <input type="text" id="medicineType" class="form-control" name="medicineType" placeholder="Description Is Important" value="{{ (isset($getMedData->medicineType)) ? $getMedData->medicineType : '' }}">
            </div>
            <div class="form-group">
                <label for="name">Medicine Price</label>
                <input type="text" id="medPrice" class="form-control" name="medPrice" placeholder="Code Is Important" value="{{ (isset($getMedData->medPrice)) ? $getMedData->medPrice : '' }}">
            </div>  
            
            <div class="form-group">
                <label for="name">Medicine Stock</label>
                <input type="text" id="medStock" class="form-control" name="medStock" placeholder="Code Is Important" value="{{ (isset($getMedData->medStock)) ? $getMedData->medStock : '' }}">
            </div>  

            

            <button type="submit" class="btn btn-success">Go Pharmacy Go!</button>

        </form>

    </div>
</div>
  
    

@endsection