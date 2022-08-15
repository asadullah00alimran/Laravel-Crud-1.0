<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
<!-- Bootstrap CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <a href="{{ Route('welcome') }}" class="btn btn-dark m-5">Home</a>
        <a href="{{ Route('addproduct') }}" class="btn btn-dark">Add Product</a>
        <table class="table">
            <tr>
                <th>#sl No</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Category</th>
                <th>Sub Category</th>
                <th>Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <?php $sl = 1; ?>
            @foreach($product as $data)
                <tr>
                    <td>{{ $sl }}</td>
                    <td>{{ $data->pname }}</td>
                    <td>{{ $data->pdes }}</td>
                    <td>{{ $data->pcat }}</td>
                    <td>{{ $data->subcat }}</td>
                    <td>{{ $data->price }}</td>
                    <td>
                        @if($data->status == 1)
                            <a href="{{ Route('statusupdate',$data->id) }}" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>
                        @else
                            <a href="{{ Route('statusupdate',$data->id) }}" class="btn btn-dark btn-sm"><i class="fa-solid fa-xmark"></i></a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ Route('editproduct',$data->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete{{$data->id}}"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
                

                <div class="modal" tabindex="-1" id="delete{{$data->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Confirmation Message</h5>
                                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                            </div>
                            <div class="modal-body">
                                <p>Are You Want to Delete ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
                                <a href="{{ Route('delete',$data->id) }}" type="button" class="btn btn-danger">Delete</a>
                            </div>  
                        </div>
                    </div>
                </div>

                <?php $sl++; ?>
            @endforeach

        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</body>
</html>