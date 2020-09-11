@extends('layouts.master')

@section('content')

<div class="container-fluid my-5 col-lg-6 col-10 bg-light border p-3" >
    
   

    <a href="{{route('product.index')}}"><button class="btn btn-primary pull-right "><i class="fa fa-plus pr-2"></i>Creat product</button></a>

    <section class=mt-5>
        <form  method="POST" action="">
            @csrf

                <div class="form-group ">
                    <label >Product Name:</label>
                    <input type="text" class="form-control"  name="product_name" placeholder="product name">
                </div>
                <div class="form-group">
                    <label >Product Category:</label>
                    <select class="form-control" id="product_category">
                    <option name="mobile">mobile</option>
                    <option name="cloth">cloth</option>
                    <option></option>
                    </select>
                </div>
            
                <div class="form-group">
                    <label >Product Price:</label>
                    <input type="text" class="form-control" name="product_price" placeholder="product price">
                </div>

                <div class="form-group">
                <label for="exampleFormControlTextarea1">Product Description:</label>
                <textarea type="discription" class="form-control" name="product_description" placeholder="discription" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
   
</div>
    
@endsection


