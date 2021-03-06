@extends('layouts.app')

@section('js')
@endsection

@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header">Create Product</div>

        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form method="POST" action="{{ route('create-product-process') }}">
                @csrf
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">SKU</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="sku">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="proname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Unit</label>
                    <div class="col-sm-10">
                        <select class="custom-select form-control form-control-sm" id="unit" name="unit">
                            <option value="" selected>Choose...</option>
                            <option value="kg">KG</option>
                            <option value="ltr">Liter</option>
                            <option value="pcs">Pcs</option>
                        </select>
                    </div>
                </div>                

                <div class="form-group row">
                    <div class="col-md-12 offset-md-10">
                        <button type="submit" class="btn btn-primary"> Submit </button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>


@endsection