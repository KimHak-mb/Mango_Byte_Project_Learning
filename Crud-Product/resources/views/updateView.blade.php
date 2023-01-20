@extends('welcome')
@section('content')

<h1 class='m-5 d-flex justify-content-center'>Update Product</h1>
<div class="d-flex justify-content-center">
    <form action='updateData' method='get' class='w-50'>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-10">
          <input type="text" name='name' value="{{$productName}}" class="form-control" id="inputEmail3" placeholder="Product Name">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Product Price</label>
        <div class="col-sm-10">
          <input type="productPrice" name='price' value="{{$productPrice}}" class="form-control" id="inputPassword3" placeholder="Product Price">
        </div>
      </div>
      <input type="hidden" name='id' value='{{$productId}}'>
      <div class="form-group row">
        <div class="col-sm-10">
          <input type="submit" class="btn btn-primary">
        </div>
      </div>
     
    </form>

</div>

@endsection