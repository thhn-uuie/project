<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cập nhật danh mục</title>
    @include('admin.component.head')
</head>

<body class="sidebar-mini" style="height: auto;">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    @include('admin.component.navbar')
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4">
        @include('admin.component.sidebar')
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Category</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ asset('/admin/category') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                @if ($message = Session::get('success'))

                    <div class="alert alert-success alert-block">
                    <i class="fa fa-check-circle" aria-hidden="true"></i>
                        <button type="button" class="close" data-dismiss="alert">×</button>

                        <strong>{{ $message }}</strong>

                    </div>
                @endif
                <div class="row" id="s_category">
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="title">Name Category<i style="color: red;">*</i></label>
                                            @if($category->name_category !== null)
                                                <input type="text" name="name_category" id="name" class="form-control"
                                                       value="{{ $category->name_category }}" required>
                                            @else
                                                <input type="text" name="name_category" id="name" class="form-control"
                                                       placeholder="Enter name category" required>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>Product status</h5>
                                <div class="mb-3">
                                    <select name="status" id="s_status" class="form-control">
                                        <?php $selectedStatus = $category->status ?>
                                        @if($selectedStatus == 1)
                                            <option value="{{ $selectedStatus }}"> Active</option>
                                            <option value="0"> Block</option>
                                        @else
                                            <option value="{{ $selectedStatus }}"> Block</option>
                                            <option value="1"> Active</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>


                    </div>
                    <div class="col-md-4">

                        <div class="card mb-3">
                            <div class="card-body">
                                <h5>Image</h5>
                                <div class="wrapp" id="wrapper">
                                    <div class="image">
                                        @if($category->image !== null)
                                            <img src="{{url('/public/admin/img/category') .'/'. $category->image }}"
                                                 alt="" id="img">
                                        @else
                                            <img src="" id="img">
                                        @endif
                                    </div>
                                    <div class="content">
                                        <div class="icon"><i class="fa fa-cloud-upload-alt"></i></div>
                                        <div class="text">No file chosen, yet!</div>
                                    </div>
                                    <div class="file-name">{{ $category->image }}</div>
                                </div>

                                <input type="file" id="l_image" name="file_upload" hidden>
                                <button type="button" onclick="defaultBtnActive()" id="custom-btn">Choose a file
                                </button>

                            </div>
                        </div>


                    </div>

                </div>


            </form>
        </section>
    </div>
</div>

</body>

@include('admin.component.script')

<script src="{{ asset('public/admin/js/custom.js') }}"></script>
<script>
    var image = $('.wrapp .image img');
    if (image.src !== null || image.src !== '') {
    // Nếu thuộc tính src khác null hoặc trống, thêm lớp 'active'
        $('.wrapp').addClass('active');
        $('.wrapp .content').css("display", "none");
  }
</script>
</html>
