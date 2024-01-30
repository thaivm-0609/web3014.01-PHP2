@extends('layouts.admin')
@section('content')

    @auth 
    <!-- user đăng nhập rồi -->
    <span>username</span>
    @endauth

    @guest 
    <!-- khách -->
    <button>Đăng nhập</button>
    @endguest

    <h1>{{$test}}</h1>
    <a href="<?= route('login')?>">Login</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Mô tả</th>
            <th>Số lượng</th>
            <th>Giá</th>
            <th>Action</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{$product['id']}} </td>
                <td>{{$product['ten_san_pham']}}</td>
                <td>{{$product['mo_ta']}}</td>
                <td>{{$product['so_luong'] }}</td>
                <td>{{$product['gia']}}</td>
                <td>
                    <button><a href="{{route('products/'.$product['id'].'/edit')}}">Edit</a></button>
                    <button><a>Delete</a></button>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
