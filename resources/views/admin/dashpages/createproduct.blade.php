<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin_resource/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin_resource/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin_resource/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin_resource/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin_resource/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin_resource/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin_resource/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin_resource/assets/images/favicon.png" />

    <style type = "text/css">

        label
        {
            display: inline-block;
            padding-top: 20px;
        }
        .text_color
        {
            width: 300px;

        }

    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->





        @include('admin.partials.sidebar')






      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->




        @include('admin.partials.navbar')



        <!-- partial -->


    <div class="main-panel">
     <div class="content-wrapper">
        <div class="container pt-5">
            <h1>New Product</h1>
            <div class="row">
                <div class="col-sm-4">
                    <form method="Post" action="/store_product" enctype="multipart/form-data">
                        @csrf

                        <div>
                        <label for="">Title</label>
                        <input class= "text_color" type="text" name="title" class="form-control" placeholder="Write a Title" required="" value={{old('title')}}>
                        </div>

                        <div>
                        <label for="">Description</label>
                        <input class= "text_color" type="text" name="description" class="form-control"
                        placeholder="Write a Description" required="" value={{old('description')}}>
                        </div>



                        <div>
                            <label for="">Catagory</label>
                            <select class = "text_color" name = "catagory" required="">
                                <option value="" selected>Select a catagory</option>
                                <option value="shirt">Shirt</option>
                                <option value="pant">Pant</option>
                            </select>
                        </div>

                        <div>
                        <label for="">Quantity</label>
                        <input class= "text_color" type="number"
                        min="0" name="quantity" class="form-control" placeholder="Give Quantity" required=""
                        value={{old('quantity')}}>
                        </div>

                        <div>
                        <label for="">Price</label>
                        <input class= "text_color" type="number" name="price" class="form-control" placeholder="Put Price" required=""
                        value={{old('price')}}>
                        </div>

                        <div>
                            <label for="">Image</label>
                            <input type = "file" class = "form-control" name= "image" >
                        </div>

                        <button class="btn btn-info mt-4">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin_resource/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin_resource/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin_resource/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin_resource/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin_resource/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin_resource/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin_resource/assets/js/off-canvas.js"></script>
    <script src="admin_resource/assets/js/hoverable-collapse.js"></script>
    <script src="admin_resource/assets/js/misc.js"></script>
    <script src="admin_resource/assets/js/settings.js"></script>
    <script src="admin_resource/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin_resource/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
