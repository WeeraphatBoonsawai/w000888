<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Product Form - Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Product</h2>
                </div>
                <br>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('product.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        <br>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
         
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>product_name:</strong>
                        <input type="text" name="product_name" value="{{ $product->product_name}}" class="form-control" placeholder="product_name">
                            @error('product_name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

              
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>product_desc:</strong>
                        <input type="text" name="product_desc" value="{{ $product->product_desc }}" class="form-control" placeholder="product_desc">
                                @error('product_desc')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>product_image:</strong>
                        <input type="text" name="product_img_url" value="{{ $product->product_img_url }}" class="form-control" placeholder="product image">
                                @error('product_img_url')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
       

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Product Category</strong>
                        <select name="product_type_id" id="product_type_id" class="form-control">
                            <option>Select option</option>
                            @foreach ($product_types as $key => $value)
                            <option value="{{$key}}" {{($key == $product->product_type_id) ? 'selected' : ''}}>
                                {{$value}}
                            </option>
                            @endforeach
                        </select>
                        @error('product_type_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Product Brand</strong>
                        <select name="brand_id" id="brand_id" class="form-control">
                            <option>Select option</option>
                            @foreach ($brands as $key => $value)
                            <option value="{{$key}}" {{($key == $product->brand_id) ? 'selected' : ''}}>
                                {{$value}}
                            </option>
                            @endforeach
                        </select>
                        @error('brand_id')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                



                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>