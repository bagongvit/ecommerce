<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')

    <style type="text/css">
        table
        {
            border: 2px solid skyblue;
            text-align: center;
        }

        th
        {
            background-color: skyblue;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: white;
        }

        td
        {
            color: white;
            padding: 10px;
            border: 1px solid skyblue;
        }

        .table_center
        {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>
<body>
    
    @include('admin.header')

    @include('admin.sidebar')
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
        <div class="container-fluid">

        <div class="table_center">
            <table>
                <tr>
                    <th>Customer name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Change Status</th>
                    <th>Print PDF</th>
                </tr>

                @foreach ($data as $data)

                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->rec_address }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->product->title }}</td>
                    <td>{{ $data->product->price }}</td>
                    <td>
                        <img width="150" height="150" src="products/{{ $data->product->image }}" alt="">
                    </td>
                    <td>
                        @if ( $data->status == 'in progress' )
                            <span style="color:red">{{ $data->status }}</span>
                        @elseif( $data->status == 'On the way' )
                            <span style="color:yellow">{{ $data->status }}</span>
                        @else
                        <span style="color:green">{{ $data->status }}</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-primary mb-2" href="{{ url('on_the_way', $data->id) }}">On the way</a>
                        <a class="btn btn-success" href="{{ url('delivered', $data->id) }}">Delivered</a>
                    </td>

                    <td>
                        <a class="btn btn-secondary" href="{{ url('print_pdf', $data->id) }}">Print PDF</a>
                    </td>

                </tr>

                @endforeach
            </table>
        </div>

        </div>
    </div>
    </div>
    
    @include('admin.footer')
    
    @include('admin.js')
</body>
</html>