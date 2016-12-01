@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            
               <!-- load bootstrap -->
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
           

                <div class="page-header">
            <h1><span class="glyphicon glyphicon-flash"></span> Pharmacy Fly!</h1>
        </div>    

        <!-- Table-to-load-the-data Part -->
            <table class="table table-striped">
                <thead>
                    <tr>
                       
 
                        <th>Medicine Name</th>
                        <th>Medicine Quantity</th>
                        <th>Medicine Price</th>
                        <th>Order Discount</th>
                        <th>Remarks</th>
                        <th>Sell Date</th>
                        
                    </tr>
                </thead>
                <tbody>

           


                    @foreach ($medicines_orders as $val)
                    <tr>

                        
                        <td>{{$val->medicineCode}}</td>
                        <td>{{$val->medQty}}</td>
                        <td>{{$val->medtotPrice}}</td>
                        <td>{{$val->discount}}</td>
                        <td>{{$val->remarks}}</td>
                        <td>{{$val->created_at}}</td>
                        
                        
                        <td> 
                                                  
                            <a href="{{ url('/edit-order-data/').'/'.$val->id }}" button class="btn btn-success">Edit</a>  
                            <a href="{{ url('/delete-order/').'/'.$val->id }}"    button class="btn btn-success">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
  
    

@endsection