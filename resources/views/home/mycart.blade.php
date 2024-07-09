<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')

    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin: 60px;
        }

        .order_deg {
            width: 300px; /* Lebar form */
            margin-right: 50px; /* Jarak antara form dan tabel */
        }

        .order_deg form {
            display: flex;
            flex-direction: column; /* Susun elemen secara vertikal */
        }

        .div_gap {
            margin-bottom: 15px; /* Jarak antara elemen form */
        }

        label {
            margin-bottom: 5px; /* Jarak antara label dan input */
        }

        table {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        th {
            border: 2px solid black;
            text-align: center;
            color: white;
            font-size: 20px;
            font-weight: bold;
            background-color: black;
        }

        td {
            border: 1px solid skyblue;
        }

        .cart_value {
            text-align: center;
            margin-top: 70px;
            padding: 18px;
        }

        .product-image {
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

    </style>
</head>
<body>
    <div class="hero_area">
        <!-- header section starts -->
        @include('home.header')
    </div>

    <div class="div_deg">
        <div class="order_deg">
            <form action="{{ url('confirm_order') }}" method="Post">
                @csrf
                <div class="div_gap">
                    <label>Receiver Name</label>
                    <input type="text" name="name" value="{{ Auth::user()->name }}">
                </div>

                <div class="div_gap">
                    <label>Receiver Address</label>
                    <textarea name="address">{{ Auth::user()->address }}</textarea>
                </div>

                <div class="div_gap">
                    <label>Receiver Phone</label>
                    <input type="text" name="phone" value="{{ Auth::user()->phone }}">
                </div>

                <div class="div_gap">
                    <input class="btn btn-primary" type="submit" value="Checkout">
                </div>
            </form>
        </div>

        <table>
            <tr>
                <th>Product Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Remove</th>
            </tr>

            <?php
            $value = 0;
            ?>

            @foreach ($cart as $cart)
            <tr>
                <td>{{ $cart->product->title }}</td>
                <td>Rp {{ number_format($cart->product->price, 0, ',', '.') }}</td>
                <td>
                    <img class="product-image" width="150" src="/products/{{ $cart->product->image }}" alt="">
                </td>
                <td>
                    <a class="btn btn-danger" href="{{ url('delete_cart', $cart->id) }}">Remove</a>
                </td>
            </tr>

            <?php
            $value += $cart->product->price;
            ?>
            @endforeach

            <!-- Total row -->
            <tr>
                <td colspan="3" style="text-align: right; font-weight: bold;">Total Price</td>
                <td style="text-align: center; font-weight: bold;">Rp {{ number_format($value, 0, ',', '.') }}</td>
            </tr>
        </table>
    </div>

    @include('home.footer')
</body>
</html>
