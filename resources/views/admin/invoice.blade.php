<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2, h3 {
            margin: 10px 0;
        }
        img {
            display: block;
            margin: 20px auto;
        }
        .details {
            text-align: left;
        }
        .details h3, .details h2 {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <center>
            <h1>Order Details</h1>
        </center>
        <div class="details">
            <h3>Customer Name: {{ $data->name }}</h3>
            <h3>Customer Address: {{ $data->rec_address }}</h3>
            <h3>Customer Phone: {{ $data->phone }}</h3>
            <h2>Product Title: {{ $data->product->title }}</h2>
            <h2>Price: {{ $data->product->price }}</h2>
        </div>
        <center>
            <img height="250" width="300" src="products/{{ $data->product->image }}" alt="Product Image">
        </center>
    </div>
</body>
</html>
