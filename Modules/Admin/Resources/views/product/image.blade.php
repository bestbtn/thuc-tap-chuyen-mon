@extends('admin::layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <i class="fa fa-fw fa-file-text-o"></i> Thêm ảnh theo sản phẩm
                        </h4>
                        <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12" >
                                <form id="course_form" action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <div class="col-md-12" style="margin-top: 2%">
                                            {{--chọn loại sản phẩm--}}
                                            <div class="form-group" style="margin: 2% 0 2% 0">
                                                <label class="col-md-3 control-label" for="rooms">
                                                    Sản phẩm
                                                </label>
                                                <div class="col-md-7">
                                                    <select class="form-control" name="image_product_id" id="rooms">
                                                        <option value="">--- chọn sản phẩm ---</option>
                                                        @if(isset($products))
                                                            @foreach($products as $product)
                                                                <option value="{{$product->id}}" {{old('pro_category_id',isset($product->pro_category_id) ? $product->pro_category_id :'') == $product->id ? "selected='selected'": ''}}>
                                                                    {{$product->pro_name}}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    @if($errors->has('pro_category_id'))
                                                        <div class="error-text">
                                                            {{$errors->first('pro_category_id')}}
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                            {{-- Hình ảnh--}}
                                            <div class="form-group" style="margin: 2% 0 2% 0">
                                                <label class="col-md-3 control-label">Hình ảnh</label>
                                                <div class="col-md-4 text-center">
                                                    <div class="input-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div  class="fileinput-new thumbnail" style="width: 250px; height: 200px;float: left">
                                                                <img  src="{{asset('theme_admin/img/none.png')}}" alt="profile" id="out_img">
                                                            </div>
                                                            <div>
                                                                <input  value="{{old('pro_avatar',isset($product->pro_avatar) ? $product->pro_avatar : '' )}}"
                                                                        style="float: left; margin-left: 10%;margin-top: 10%" type="file" name="avatar[]" multiple="true" id="input_img">
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    <div class="panel-footer">
                                        <input  type="submit" class="btn btn-primary center-block" value="Lưu thông tin">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
