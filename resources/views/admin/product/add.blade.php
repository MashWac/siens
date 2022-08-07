@extends('layouts.admin')

@section('content')
    @if($data['formtype']=='add')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{url('insert-prod')}}" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="row">
                    <div class="col-md-6">
                        <label for="prodname">Product Name:</label>
                        <input type="text" class="form-control" name="prodname">
                    </div>
                    <div class="col-md-12">
                        <label for="proddescr">Product Description:</label>
                        <textarea class="form-control" name="proddescr" id="descript"> </textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="prodname">Category:</label>
                        <input type="text" class="form-control"name="prodcate" id="product-category" list="categoryselect">
                                <datalist id="categoryselect">
                                    @foreach($data['category'] as $item):?>
                                    <option value="<?=$item['category_id']?>"><?="category-".$item['category_name']?><option>
                                    @endforeach
                                </datalist>
                    </div>
                    <div class="col-md-6">
                        <label for="prodprice">Unit Price:</label>
                        <input type="number" class="form-control" name="prodprice">
                    </div>
                    <div class="col-md-6">
                        <label for="prodquan">Product Quantity:</label>
                        <input type="number" class="form-control" name="prodquan">
                    </div>

                    <div class="col-md-12">
                        <label for="prodimage">Product Image:</label>
                        <input type="file" id="img"  name="prodimage">
                    </div>
                    <div class="col-md-6" id="selectedBanner">

                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
            @else
            <div class="card">
                <div class="card-header">
                    <h4>Edit Product</h4>
                </div>
                <div class="card-body">
            
                <form action="{{url('update-prod/'.$data['product']->product_id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label for="prodname">Product Name:</label>
                        <input type="text" class="form-control" name="prodname" value="{{ $data['product']->product_name }}">
                    </div>
                    <div class="col-md-12">
                        <label for="proddescr">Product Description:</label>
                        <textarea class="form-control" name="proddescr">{{ $data['product']->product_description }} </textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="prodname">Category:</label>
                        <input type="text" class="form-control"name="prodcate" id="product-category" list="categoryselect" value="{{$data['product']->category}}">
                                <datalist id="categoryselect">
                                    @foreach($data['category'] as $item):?>
                                    <option value="<?=$item['category_id']?>"><?="category-".$item['category_name']?><option>
                                    @endforeach
                                </datalist>
                    </div>
                    <div class="col-md-6">
                        <label for="prodprice">Unit Price:</label>
                        <input type="number" class="form-control" name="prodprice" value="{{$data['product']->unit_price}}">
                    </div>
                    <div class="col-md-6">
                        <label for="prodquan">Product Quantity:</label>
                        <input type="number" class="form-control" name="prodquan" value="{{$data['product']->available_stock}}">
                    </div>

                    <div class="col-md-12">
                        <label for="prodimage">Product Image:</label>
                        <input type="file" id="img"  name="prodimage" value="">
                    </div>
                    <div class="col-md-6">
                        <h4>Current Image</h4> 
                        @if($data['product']->product_image)
                        <img src="{{asset('assets/uploads/products/'.$data['product']->product_image)}}" alt="Product Image" height='400px' width='350px'>
                        @endif
                    </div>
                    <div class="col-md-6" >
                        <h4>New Image</h4> 
                        <div id="selectedBanner">
                        
                        </div>

                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
            @endif

        </div>
    </div>
@endsection