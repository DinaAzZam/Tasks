@extends('dashboard.layouts.app')
@section('title','Create Product')
@section('content')
@include('dashboard.includes.display_error_message')
<div class="col-12">
    <form action="{{route('dashboard.products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col-6">
                <input class="form-control" type="text" name="name_en" id="" placeholder="Name in English" value="{{old('name_en')}}">
            </div>
            <div class="col-6">
                <input class="form-control" type="text" name="name_ar" id="" placeholder="Name in Arabic" value="{{old('name_ar')}}">
            </div>
        </div>
        <div class="form-row my-2">
            <div class="col-4">
                <input class="form-control" type="number" name="code" id="" placeholder="Code" value="{{old('code')}}">
            </div>
            <div class="col-4">
                <input class="form-control" type="number" name="price" id="" placeholder="Price" value="{{old('price')}}">
            </div>
            <div class="col-4">
                <input class="form-control" type="number" name="quantity" id="" placeholder="Quantity" value="{{old('quantity')}}">
            </div>
        </div>
        <div class="form-row">
            <div class="col-4">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option @selected(old('status') === "1") value="1">Active</option>
                    <option @selected(old('status') === "0")  value="0">Not Active</option>
                </select>
            </div>
            <div class="col-4">
                <label for="subcategory_id">SubCategory</label>
                <select name="subcategory_id" id="subcategory_id" class="form-control">
                    @foreach ($subcategories as $sub)
                        <option @selected(old('subcategory_id') === "$sub->id")  value="{{ $sub->id }}">{{ $sub->name_en }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-4">
                <label for="brand_id">Brand ID</label>
                <select name="brand_id" id="brand_id" class="form-control">
                    @foreach ($brands as $brand)
                        <option @selected(old('brand_id') === "$brand->id") value="{{$brand->id}}">{{$brand->name_en}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row my-2">
            <div class="col-6">
                <textarea name="details_en" id="" cols="30" rows="10" class="form-control" placeholder="Details in English">{{old('details_en')}}</textarea>
            </div>
            <div class="col-6">
                <textarea name="details_ar" id="" cols="30" rows="10" class="form-control" placeholder="Details in Arabic">{{old('details_ar')}}</textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="col-12">
                <label for="image">Upload Product Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
        </div>
        <div class="form-row my-2">
            <div class="col-3">
                <button class="btn btn-outline-primary rounded btn-sm">Create</button>
            </div>
        </div>
    </form>
</div>
@endsection
