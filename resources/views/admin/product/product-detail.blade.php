<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrative – TH true MILK</title>
    <link rel="icon" href="https://www.thmilk.vn/wp-content/themes/wp-th/favicon.png" type="image/png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../../public/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../../public/admin/css/adminlte.min.css">
    <link rel="stylesheet" href="../../../public/admin/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="../../../public/admin/css/custom.css">
</head>

<body class="sidebar-mini" style="height: auto;">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <div class="navbar-nav pl-2">
                <ol class="breadcrumb p-0 m-0 bg-white">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
                        <img src="../../../public/admin/img/avatar5.png" class="img-circle elevation-2" width="40" height="40" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                        <h4 class="h4 mb-0"><strong>Mohit Singh</strong></h4>
                        <div class="mb-3">example@example.com</div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-cog mr-2"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-lock mr-2"></i> Change Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-danger">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <!-- <img src="https://www.thmilk.vn/wp-content/themes/wp-th/assets/images/logo.png?>" alt="logo"> -->
                <span class="brand-text">TH True Milk</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
								with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="dashboard.html" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="categories.html" class="nav-link">
                                <i class="nav-icon fas fa-file-alt"></i>
                                <p>Category</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="products.html" class="nav-link">
                                <i class="nav-icon fas fa-tag"></i>
                                <p>Products</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="orders.html" class="nav-link">
                                <i class="nav-icon fas fa-shopping-bag"></i>
                                <p>Orders</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="users.html" class="nav-link">
                                <i class="nav-icon  fas fa-users"></i>
                                <p>Users</p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid my-2">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <a id="sua" class="btn btn-primary">Sửa</a>
                            <a href="products.html" class="btn btn-primary">Xóa</a>
                        </div>
                        <div class="col-sm-6 text-right">
                            <a href="products.html" class="btn btn-primary">Back</a>
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
                                <div class="card-header pt-3">
                                    <div class="row product-info">
                                        <div class="col-sm-12">
                                            <h1 class="h4 mb-3" id="product-name">Dummy Product Title</h1>
                                        </div>
                                        <div class="col-sm-3">
                                            <!-- <div class="card mb-3"> -->
                                            <!-- <div class="card-body"> -->
                                            <h5>Image</h5>
                                            <div id="image">
                                                <img src="../../../public/admin/img/product-1.jpg" width="80%">
                                                <!-- </div> -->
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5>Thông tin</h5>

                                            <p id="id">ID: 1</p>
                                            <p id="price">Price: $73</p>
                                            <p id="category">Category: saydtuh</p>
                                            <p id="description">Description: gf7yfcuryuncbuiyyrjcbuyrcuy8 eyr3
                                                hjfhioyt9 hi7t9fiou </p>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Status</h5>
                                            <div class="mb-3" id="status">
                                                <select name="status" id="status" class="form-control">
                                                    <option value="">Active</option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="">
                        <div class="row" id="s_product">
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="title">Name Product<i style="color: red;">*</i></label>
                                                    <input type="text" name="title" id="title" class="form-control"
                                                        placeholder="Title" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="price">Price<i style="color: red;">*</i></label>
                                                    <input type="text" name="price" id="price" class="form-control"
                                                        placeholder="Price" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="description">Description</label>
                                                    <br>
                                                    <textarea name="description" id="description" cols="30" rows="10"
                                                        class="summernote" placeholder="Description"
                                                        style="width: 100%;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <button type="submit" class="btn btn-primary">Sửa</button>
                                </div>


                            </div>
                            <div class="col-md-4">
                            <div class="card mb-3">
									<div class="card-body">
										<h5>Image</h5>
										<div class="wrapp" id="wrapper">
											<div class="image">
												<img src="" alt="" id="img">
											</div>
											<div class="content">
												<div class="icon"><i class="fa fa-cloud-upload-alt"></i></div>
												<div class="text">No file chosen, yet!</div>
											</div>
											<div class="file-name">File name here</div>
										</div>

										<input type="file" id="l_image" name="image" hidden>
										<button type="button" onclick="defaultBtnActive()" id="custom-btn">Choose a file</button>

									</div>
								</div>
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <h5>Product status</h5>
                                        <div class="mb-3">
                                            <select name="s_status" id="s_status" class="form-control">
                                                <option value="1">Active</option>
                                                <option value="0">Block</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <h5>Product category</h5>
                                        <div class="mb-3">
                                            <select name="category" id="category" class="form-control">
                                                <option value="">Electronics</option>
                                                <option value="">Clothes</option>
                                                <option value="">Furniture</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </form>
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>

    <script src="../../../public/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../../public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../../public/admin/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- Summernote -->
    <script src="../../../public/admin/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="../../../public/admin/js/demo.js"></script>
    <script src="../../../public/admin/js/custom.js"></script>

    <script>
        // Lấy tham chiếu đến phần tử <a> có id là "sua"
        const suaLink = document.querySelector('#sua');

        // Lấy tham chiếu đến phần tử <div> có id là "s_product"
        const sProductDiv = document.querySelector('#s_product');

        // Gán sự kiện click cho phần tử <a>
        suaLink.addEventListener('click', () => {
            // Trượt xuống phần tử <div> s_product
            sProductDiv.scrollIntoView({ behavior: 'smooth' });
        });
        
    </script>
</body>

</html>