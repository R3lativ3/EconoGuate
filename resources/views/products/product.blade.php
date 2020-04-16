@extends('layouts.master')
@section('title','Lista')
@section('content')
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">nombre</th>
        <th scope="col">price</th>
      </tr>
    </thead>
    <tbody>
        
        @foreach($product as $post)
            <TR>
                <th>{{ $post->product_id }}</th>
                <th>{{ $post->product_name }}</th>
                <th>{{ $post->product_price }}</th>
            </TR>
        @endforeach
    </tbody>
</table>
@endsection
