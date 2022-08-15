<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

    <!-- Bootstrap CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        h1{
            background: green;
            color: white;
            text-align: center;
            padding: 5px 0px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row my-2">
            <h1>Edit Product Page</h1>
            <div class="col-md-8 offset-md-2">
                <form action="{{ Route('update',$product->id) }}" method="POST">
                    @csrf
                    <div class="my-2 pname form-group">
                        <label for="pname">Product Name</label>
                        <input type="text" class="form-control" name="pname" value="{{ $product->pname }}">
                    </div>
                    <div class="my-2 pdes form-group">
                        <label for="pdes">Product Description</label>
                        <input type="text" class="form-control" name="pdes" value="{{ $product->pdes }}">
                    </div>
                    <div class="my-2 pcat form-group">
                        <label for="pcat">Product Category</label>
                        <input type="text" class="form-control" name="pcat" value="{{ $product->pcat }}">
                    </div>
                    <div class="my-2 subcat form-group">
                        <label for="subcat">Sub Category</label>
                        <input type="text" class="form-control" name="subcat" value="{{ $product->subcat }}">
                    </div>
                    <div class="my-2 price form-group">
                        <label for="price">Product Price</label>
                        <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                    </div>
                    <div class="my-2 status form-group">
                        <label for="status">Product Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="0">------------Select Status----------</option>
                            <option value="1" @if($product->status == 1)selected @endif>Available</option>
                            <option value="0" @if($product->status == 0)selected @endif>Not Available</option>
                        </select>
                    </div>
                    <div class="my-2 add-product form-group">
                        <button class="btn btn-success form-control">Edit Product</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
</body>
</html>