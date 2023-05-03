@extends('layouts.dashboard.app')

@section('content')
    <div class="main_content_iner">
        <div class="container-fluid body_white_bg" style="padding: 30px;">
            <form action="{{route('category.store')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <h4>Category Information</h4>
                    <div class="col-lg-8">
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker">
                                <label class="form-label" for="#">Category name</label>
                                <input type="text" name="name" class="input_form" placeholder="Enter Category name"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker">
                                <label class="form-label" for="#">Category Image</label>
                                <input type="file" name="image" class="form-control input_form"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-md-3 text-end">
                        <button type="submit" class="btn_1">Submit</button>
                    </div>
                </div>
            </form>
            <div class="row justify-content-center mt-5">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>All Categories</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form Active="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search content here..."/>
                                            </div>
                                            <button type="submit">
                                                <i class="ti-search"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="QA_table">
                            <table class="table lms_table_active">
                                <thead>
                                    <tr>
                                        <th scope="col">S/N</th>
                                        <th scope="col"></th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Number of Products</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($categories)
                                        @foreach ($categories as $key=>$cat)
                                            <tr>
                                                <th scope="row">
                                                    <a href="#" class="question_content">{{$key+1}}</a>
                                                </th>
                                                <td>
                                                    <div class="flex-shrink-0">
                                                        <img src="/storage/category/{{$cat->image}}" alt="{{$cat->slug}}" weight="30" height="30">
                                                    </div>
                                                </td>
                                                <td>{{$cat->name}}</td>
                                                <td>{{$cat->slug}}</td>
                                                <td>{{count($cat->product)}}</td>
                                                <td>
                                                    <a href="#" class="status_btn">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
