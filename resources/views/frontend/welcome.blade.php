<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        h1{
            background: green;
            color: white;
            text-align: center;
            padding: 10px 0px;
        }
        .add{
            margin-left: 38%;
            margin-top: 10%;
            display: inline-block;
            background: black;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            cursor: pointer;
        }
        .view{
            margin-left: 3%;
            display: inline-block;
            background: black;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>This is welcome Page</h1> 
    <a href="{{ Route('addproduct') }}" class="add">Add Product</a>
    <a href="{{ Route('showproduct') }}" class="view">View Product</a>
</body>
</html>