@extends('layouts.dashboard.app')

@section('content')
    <div class="main_content_iner">
        <div class="container-fluid body_white_bg" style="padding: 30px;">
            <form action="{{route('product.store')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <h4>Product Information</h4>
                    <div class="col-lg-6">
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker">
                                <label class="form-label" for="#">Product name</label>
                                <input type="text" name="name" class="input_form" placeholder="Enter Product name"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker">
                                <label class="form-label" for="#">Product Category</label>
                                <select name="cat_id" class="form-select input_form" id="">
                                    <option value="">...</option>
                                    @if($categories)
                                        @foreach ($categories as $cat)
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker">
                                <label class="form-label" for="#">Product Price (&#8358;)</label>
                                <input type="text" name="price" class="input_form" placeholder="Enter Product Price"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker">
                                <label class="form-label" for="#">Product Short Description</label>
                                <textarea name="short_desc" rows="5" style="width:100%"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker">
                                <label class="form-label" for="#">Product Long Description (optional)</label>
                                <textarea name="long_desc" rows="5" style="width:100%"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker">
                                <label class="form-label" for="#">Product Weight (KG)</label>
                                <input type="text" name="weight" class="input_form" placeholder="Enter Product Weight"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker">
                                <label class="form-label" for="#">Product Image</label>
                                <input type="file" name="images[]" class="form-control" accept="image/*" multiple />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <h4>Inventory</h4>
                    <div class="col-lg-3">
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker">
                                <label class="form-label" for="#">Product quantity</label>
                                <input type="text" name="quantity" class="input_form" placeholder="Enter Product quantity"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker">
                                <label class="form-label" for="#">Unit of Measurement</label>
                                <input type="text" name="unit" class="input_form" placeholder="Enter Unit of Measurement"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker">
                                <label class="form-label" for="#">Product Vendor</label>
                                <input type="text" name="vendor" class="input_form" placeholder="Enter Vendor name"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker">
                                <label class="form-label" for="#">Barcode Number (optional)</label>
                                <input type="text" name="barcode" class="input_form" placeholder="Enter Barcode Number"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-3 text-center">
                        <button type="submit" class="btn_1">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
