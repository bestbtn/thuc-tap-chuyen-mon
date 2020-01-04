
<div class="container-fluid">
    <!--main content-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-fw fa-file-text-o"></i> Bài viết
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
                                    <div class="col-sm-9 col-sm-offset-2" >

                                        <div class="form-group">
                                            <label for="pro_name" class="col-md-2 control-label">
                                                Tên bài viết
                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                                </span>
                                                    <input id="pro_name" type="text" name="a_name" class="form-control" placeholder=" Tên bài viết" value="{{old('a_name',isset($article->a_name) ? $article->a_name : '' )}}">
                                                </div>
                                                @if($errors->has('a_name'))
                                                    <div class="error-text">
                                                        {{$errors->first('a_name')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-2 control-label">
                                                Mô tả bài viết
                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <textarea class="summernote edi-css form-control" name="a_description" >
                                                        {{old('a_description',isset($article->a_description) ? $article->a_description : '' )}}
                                                    </textarea>
                                                </div>
                                                @if($errors->has('a_description'))
                                                    <div class="error-text">
                                                        {{$errors->first('a_description')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        {{--nội dung--}}
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">
                                                Nội dung
                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                    <textarea  class="ckeditor" class="summernote edi-css form-control" name="a_content"  id="a_content">
                                                        {{old('a_content',isset($article->a_content) ? $article->a_content : '' )}}
                                                    </textarea>

                                                </div>
                                                @if($errors->has('a_content'))
                                                    <div class="error-text">
                                                        {{$errors->first('a_content')}}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="a_title_seo" class="col-md-2 control-label">
                                                Meta Title

                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                                </span>
                                                    <input value="{{old('a_title_seo',isset($article->a_title_seo) ? $article->a_title_seo : '' )}}" id="a_title_seo" type="text" name="a_title_seo" class="form-control" placeholder="Enter Meta Title">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="meta_description" class="col-md-2 control-label">
                                                Meta Description

                                            </label>
                                            <div class="col-md-8">
                                                <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                                </span>
                                                    <input value="{{old('a_description_seo',isset($article->a_description_seo) ? $article->a_description_seo : '' )}}" id="meta_description" type="text" name="a_description_seo" class="form-control" placeholder="meta_description">
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Hình ảnh--}}
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Hình ảnh</label>
                                            <div class="col-md-8 text-center">
                                                <div class="input-group">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div  class="fileinput-new thumbnail" style="width: 250px; height: 200px;float: left">
                                                            <img  src="{{asset('theme_admin/img/none.png')}}" alt="profile" id="out_img">
                                                        </div>
                                                        <div>
                                                            <input  value="{{old('a_avatar',isset($article->a_avatar) ? $article->a_avatar : '' )}}"  style="float: left; margin-left: 10%;margin-top: 10%" type="file" name="avatar" id="input_img">
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-2 col-md-9">
                                                    <input type="submit" class="btn btn-primary" value="Lưu thông tin"> &nbsp;
                                                    <a class="btn btn-danger" href="admin_courseschedule.html"> Cancel</a>
                                                    <input type="reset" id="add-news-reset-editable" class="btn btn-default reset-styles" value="Reset">
                                                </div>
                                            </div>
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

@section('script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('a_content');
    </script>
@stop

