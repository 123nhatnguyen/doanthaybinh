@extends('admin.layout')

@section('content')
@if( Session::has('message'))
<h3>{{ Session::get('message')}}</h3>
@endif
<div class="row">
    <div class="col-lg3">
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Create new</a>
    </div>
</div>
<div class="alert alert-success">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Hoverable Table</h4>
                    <p class="card-description"> Add class <code>.table-hover</code> </p>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Ảnh</th>
                                <th>Name</th>
                                <th>Desc</th>
                                <th>Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($productsList as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td><img src="{{ asset($product->img) }}" alt="" srcset=""></td>
                                <td>{{ $product->name }}</td>
                                <td class=" text-bg-primary text-wrap"> {{ $product->desc }} <i class="mdi mdi-arrow-down"></i>
                                </td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a class="badge badge-danger" href="{{ route('admin.products.edit', $product->id) }}">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection