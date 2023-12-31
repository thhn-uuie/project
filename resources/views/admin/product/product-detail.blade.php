<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chi tiết sản phẩm</title>
    @include('admin.component.head')
    <link rel="stylesheet" href="{{ asset('/public/admin/plugins/summernote/summernote-bs4.min.css') }}">
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
            <div class="tb">
            @if ($message = Session::get('success'))

                <div class="alert alert-success alert-block">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                    <button type="button" class="close" data-dismiss="alert">×</button>

                    <strong>{{ $message }}</strong>

                </div>

            @endif
            </div>
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex">
                        <a href="{{ url('/admin/product/update',['id' => $product_item->id]) }}" id="sua" class="btn btn-primary mr-2">Cập nhật</a>
                        <form method="POST" action="{{ route('admin.product.delete', ['id' => $product_item->id]) }}" onsubmit="return confirm('Bạn chắc chắn muốn xóa?')">
                            @csrf
                            <button type="submit" class="btn btn-primary">Xóa</button>
                        </form>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ url('/admin/product') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row product-info">

                                    <div class="col-sm-4">
                                        <div id="image">
                                            <?php $galleryProduct = \App\Models\Gallery::where('id_product', $product_item->id)->get();?>
                                            <div class="img1">
                                                <a href="{{ url('public/admin/img/product') . '/' . $galleryProduct->first()->image }}" target="_blank">
                                                    <img role="presentation" alt=""
                                                         src="{{ url('public/admin/img/product') . '/' . $galleryProduct->first()->image }}">
                                                </a>

                                            </div>
                                            <div class="owl-img">
                                                <div class="owl-carousel owl-theme " id="owl-img">
                                                    <?php $items = $galleryProduct->slice(1); ?>
                                                    @foreach($items as $i)
                                                    <div class="item">
                                                        <a href="{{ url('public/admin/img/product') . '/' . $i->image }}" target="_blank">
                                                            <img
                                                                src="{{ url('public/admin/img/product') . '/' . $i->image }}"
                                                                alt="">
                                                        </a>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <h1 class="h2" id="product-name">{{ $product_item->name_product }}</h1>
                                        <div class="sub-info">
                                            <p class="tittle">Mô tả sản phẩm</p>
                                            <p id="description">{!! $product_item->description  !!} </p>
                                        </div>
                                        <div class="sub-info">
                                            <p class="tittle">Giá tiền</p>
                                            <p id="price">{{ $product_item->price }}đ</p>
                                        </div>

                                        <div class="sub-info">
                                            <p class="tittle">Danh mục sảm phẩm</p>
                                            <p id="category">{{$product_item->category->name_category}}</p>
                                        </div>

                                        <div class="sub-info">
                                            <p class="tittle">Trạng thái</p>
                                            @if( $product_item->status == 1)
                                                <p id="status">Hoạt động</p>
                                            @else
                                                <p id="status">Không hoạt động</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</div>
@include('admin.component.script')
<script type="text/javascript">

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    $("#owl-img").owlCarousel({
        dots: true,
        nav: false,
        items: 3,
    });
</script>
</body>

</html>
