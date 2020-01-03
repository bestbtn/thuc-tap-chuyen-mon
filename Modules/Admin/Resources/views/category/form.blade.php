<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    <div class="form-body" style="padding: 20px">
        <div class="form-group">
            <label class="col-md-3 control-label" for="trainer1">
                Tên danh mục
                <span>*</span>
            </label>
            <div class="col-md-6">
                <div class="input-group">
                      <span class="input-group-addon">
                            <i class="fa fa-fw fa-file-text-o"></i>
                      </span>
                    <input value="{{old('c_name',isset($category->c_name) ? $category->c_name : '' )}}" type="text" name="name" id="trainer1"
                           class="form-control" placeholder="Nhập tên danh mục">
                </div>
                @if($errors->has('name'))
                    <div class="error-text">
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>


        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="trainer1">
                Meta title

            </label>
            <div class="col-md-6">
                <div class="input-group">
                     <span class="input-group-addon">
                           <i class="fa fa-fw fa-file-text-o"></i>
                     </span>
                    <input value="{{old('c_title_seo',isset($category->c_title_seo)?$category->c_title_seo:'')}}" type="text" name="title" id="trainer1"
                           class="form-control " placeholder=" Meta title" >
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-3 control-label" for="trainer1">
                Meta description

            </label>
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-addon">
                           <i class="fa fa-fw fa-file-text-o"></i>
                    </span>
                    <input value="{{old('c_description',isset($category->c_description)?$category->c_description:'')}}" type="text" name="description"
                           id="trainer1" class="form-control" placeholder=" Meta description">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Hình ảnh</label>
            <div class="col-md-7 text-center">
                <div class="input-group">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div  class="fileinput-new thumbnail" style="width: 250px; height: 200px;float: left">
                            <img  src="{{asset('theme_admin/img/none.png')}}" alt="profile" id="out_img">
                        </div>
                        <div>
                            <input  value="{{old('c_avatar',isset($category->c_avatar) ? $category->c_avatar : '' )}}"  style="float: left; margin-left: 10%;margin-top: 10%" type="file" name="avatar" id="input_img">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <input type="submit" class="btn btn-success" value="Lưu thông tin">
                <input type="button" class="btn btn-danger" value="Hủy">
            </div>
        </div>
    </div>
</form>
