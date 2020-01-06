
<div class="container-fluid">
    <!--main content-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-fw fa-file-text-o"></i> Thêm sản phẩm
                    </h4>
                    <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel"></i>
                                </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="course_form" action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="col-sm-8" style="width: 55%">

                                        <div class="form-group">
                                            <label for="pro_name" class="col-md-3 control-label">
                                                Tên sản phẩm
                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                                </span>
                                                    <input id="pro_name" type="text" name="pro_name" class="form-control" placeholder=" Tên sản phẩm" value="{{old('pro_name',isset($product->pro_name) ? $product->pro_name : '' )}}">
                                                </div>
                                                @if($errors->has('pro_name'))
                                                    <div class="error-text">
                                                        {{$errors->first('pro_name')}}
                                                    </div>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">
                                                Mô tả
                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <textarea class="summernote edi-css form-control" name="pro_description" >
                                                        {{old('pro_description',isset($product->pro_description) ? $product->pro_description : '' )}}
                                                    </textarea>
                                                </div>
                                                @if($errors->has('pro_description'))
                                                    <div class="error-text">
                                                        {{$errors->first('pro_description')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        {{--nội dung--}}
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">
                                                Nội dung
                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <textarea  class="ckeditor" name="pro_content"  id="pro_content" >
                                                        {{old('pro_content',isset($product->pro_content) ? $product->pro_content : '' )}}
                                                    </textarea>

                                                </div>
                                                @if($errors->has('pro_content'))
                                                    <div class="error-text">
                                                        {{$errors->first('pro_content')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pro_title_seo" class="col-md-3 control-label">
                                                Meta Title

                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                                </span>
                                                    <input value="{{old('pro_title_seo',isset($product->pro_title_seo) ? $product->pro_title_seo : '' )}}" id="pro_title_seo" type="text" name="pro_title_seo" class="form-control" placeholder="Enter Meta Title">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="meta_description" class="col-md-3 control-label">
                                                Meta Description

                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                                </span>
                                                    <input value="{{old('pro_description_seo',isset($product->pro_description_seo) ? $product->pro_description_seo : '' )}}" id="meta_description" type="text" name="pro_description_seo" class="form-control" placeholder="meta_description">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4" style="width: 45%">
                                        {{--chọn loại sản phẩm--}}
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="rooms">
                                                Loại sản phẩm
                                            </label>
                                            <div class="col-md-7">
                                                <select class="form-control" name="pro_category_id" id="rooms">
                                                    <option value="">--- chọn loại sản phẩm ---</option>
                                                    @if(isset($categories))
                                                        @foreach($categories as $category)
                                                    <option value="{{$category->id}}" {{old('pro_category_id',isset($product->pro_category_id) ? $product->pro_category_id :'') == $category->id ? "selected='selected'": ''}}>{{$category->c_name}}</option>
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
                                        {{--giá sản phẩm--}}
                                        <div class="form-group">
                                            <label for="pro_price" class="col-md-3 control-label">
                                                Giá sản phẩm
                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                                </span>
                                                    <input value="{{old('pro_price',isset($product->pro_price) ? $product->pro_price : '' )}}" id="pro_price" type="number" name="pro_price" class="form-control" placeholder="Giá sản phẩm">
                                                </div>
                                                @if($errors->has('pro_price'))
                                                    <div class="error-text">
                                                        {{$errors->first('pro_price')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        {{--% khuyến mãi--}}
                                        <div class="form-group">
                                            <label for="pro_sale" class="col-md-3 control-label">
                                                %    khuyến mãi
                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                                </span>
                                                    <input  value="{{old('pro_sale',isset($product->pro_sale) ? $product->pro_sale : '' )}}" id="pro_sale" type="number" name="pro_sale" class="form-control" placeholder="% khuyến mãi">
                                                </div>
                                            </div>
                                        </div>

                                        {{--số lượng sản phẩm--}}
                                        <div class="form-group">
                                            <label for="pro_number" class="col-md-3 control-label">
                                                Số lượng
                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-usd" aria-hidden="true"></i>
                                                                </span>
                                                    <input id="pro_number" type="number" value="{{old('pro_number',isset($product->pro_number) ? $product->pro_number : '' )}}" name="pro_number" class="form-control" placeholder="số lượng sản phẩm" >
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Hình ảnh--}}
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">Hình ảnh</label>
                                            <div class="col-md-7 text-center">
                                                <div class="input-group">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div  class="fileinput-new thumbnail" style="width: 250px; height: 200px;float: left">
                                                            <img  src="{{asset('theme_admin/img/none.png')}}" alt="profile" id="out_img">
                                                        </div>
                                                        <div>
                                                            <input  value="{{old('pro_avatar',isset($product->pro_avatar) ? $product->pro_avatar : '' )}}"  style="float: left; margin-left: 10%;margin-top: 10%" type="file" name="avatar" id="input_img">
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-7">
                                            <input type="submit" class="btn btn-primary" value="Lưu thông tin"> &nbsp;
                                            <a class="btn btn-danger" href="admin_courseschedule.html"> Cancel</a>
                                            <input type="reset" id="add-news-reset-editable" class="btn btn-default reset-styles" value="Reset">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



