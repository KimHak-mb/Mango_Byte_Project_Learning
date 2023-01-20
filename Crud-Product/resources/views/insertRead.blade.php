<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/table.css">
  @vite('public/css/table.css')
</head>
<body>

@extends('welcome')
@section('content')
<!-- Button trigger modal -->
<h1 class='m-3 d-flex justify-content-center'>Product Lists</h1>
<div class="mr-3 d-flex justify-content-end">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      + Add Product
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add new product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="insertData" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <input type="text" placeholder='Enter Product Name' class='form-control' name='productName' id=''>
            </div>
            <div class="mb-2">
                <input type="text" placeholder='Enter Product Price' class='form-control' name='productPrice' id=''>
            </div>
            <div class="mb-2">
                <input type="file" class='form-control' name='image' id=''>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>

<div class='m-3'>


  <table class="table table-striped border">
  <thead class="bg-primary">
      <tr>
          <th scope="col">Id</th>
          <th scope="col">Product Name</th>
          <th scope="col">Product Price</th>
          <th scope="col">Product Image</th>
          <th scope="col">Action</th>
      </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
      <tr>
        <form action="updateDelete" method="get">
          <td class="filterable-cell pt-4"><input type="hidden" name="id" value="{{$item['Id']}}">{{$item['Id']}}</td>
          <td class="filterable-cell pt-4"><input type="hidden" name="name" value="{{$item['productName']}}">{{$item['productName']}}</td>
          <td class="filterable-cell pt-4"><input type="hidden" name="price" value="{{$item['productPrice']}}">{{$item['productPrice']}}</td>
          <td class="filterable-cell">
            <img src="images/{{$item['productImage']}}" width='100px'>
          </td>
          <td class="filterable-cell pt-4">
            <input type="submit" class="btn btn-outline-primary" name="update" value="Update">
            <input type="submit" class="btn btn-outline-danger" value="Delete">
          </td>
        </form>
      </tr>
      @endforeach
  </tbody>
  </table>

  @endsection
</div>


</body>
</html>
