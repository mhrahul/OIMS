@extends('layouts.app')

@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header">
            Product Requisitions
        </div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">SKU</th>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Requiser</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proddata as $pd)
                    <tr>
                        <th scope="row">{{$pd->date}}</th>
                        <td>{{$pd->sku}}</td>
                        <td>{{$pd->product_name}}</td>
                        <td>{{$pd->quantity}} {{$pd->unit}}</td>
                        <td>{{$pd->reqname}}</td>
                        <td>{{$pd->status}}</td>
                        <td>
                            @if($pd->status == 'open')
                            <form method="POST" action="{{ route('product-requisition-complete-process') }}">
                                @csrf
                                <input type="hidden" value="{{$pd->id}}" name="supplier_req" />
                                <button type="submit" class="btn btn-success">complete</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection