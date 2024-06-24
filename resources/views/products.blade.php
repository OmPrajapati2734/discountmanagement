<!DOCTYPE html>
<html lang="en">

<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
        < script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js" >
    </script> 
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .error {
            color: red;
        }

        span {
            color: red;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <h2>Product Form</h2>


        <form class="form-inline my-2"  id="searchform" method="GET">
            <input class="form-control w-40" id="search" class="search" type="search" placeholder="Search"
                aria-label="Search">
            <br>
            
        </form>
        <br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productmodal">
            <i class="bi bi-bag-plus"></i>
            Add Product
        </button>

        <!-- ADD Modal -->
        <div class="modal fade" id="productmodal" tabindex="-1" aria-labelledby="productmodalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productmodalLabel">Product Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <ul id="save_msgList"></ul>

                    <div class="modal-body">
                        <h2>Add Products Details</h2>

                        <div class="form-group mb-3">
                            <label for="club_id">Club Id: <span>*</span></label>
                            <input type="number" class="form-control" id="club_id" name="club_id">
                        </div>
                        <div class="form-group mb-3">
                            <label for="title">Title: <span>*</span></label>
                            <input type="text" class="form-control" id="title" placeholder="Enter Title"
                                name="title">
                        </div>
                        <div class="form-group mb-3">
                            <label for="product_title">Product Title: <span>*</span></label>
                            <input type="text" class="form-control" id="product_title"
                                placeholder="Enter product_title" name="product_title">
                        </div>
                        <div class="form-group mb-3">
                            <label for="type">Type: <span>*</span></label>
                            <input type="text" class="form-control" id="type" placeholder="Enter type"
                                name="type">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary add_product" id="addproduct">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editmodalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit & Update Product Data</h5>
                        </div>
                    </div>

                    <div class="modal-body">
                        <ul id="update_msgList"></ul>

                        <div class="form-group mb-3">
                            <label for="p_id">Prodcut Id: <span>*</span></label>
                            <input type="number" class="form-control" readonly id="product_id_edit"
                                name="product_id_edit" value="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="club_id">Club Id: <span>*</span></label>
                            <input type="number" class="form-control" id="club_id_edit" name="club_id_edit"
                                value="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="title">Title: <span>*</span></label>
                            <input type="text" class="form-control" id="title_edit" name="title_edit"
                                value="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="product_title">Product Title: <span>*</span></label>
                            <input type="text" class="form-control" id="product_title_edit"
                                name="product_title_edit" value="">
                        </div>
                        <div class="form-group mb-3">
                            <label for="type">Type: <span>*</span></label>
                            <input type="text" class="form-control" id="type_edit" name="type_edit"
                                value="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary update_product">Update</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Discount Modal -->
        <div class="modal fade" id="discountmodal" tabindex="-1" aria-labelledby="discountmodalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productmodalLabel">Discount Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <ul id="save_msgList"></ul>

                    <div id="discountmodal" class="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Product Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Confirm to Delete Data ?</h4>
                    <input type="hidden" id="deleteing_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary delete_product">Yes Delete</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">

                <div id="success_message"></div>

                <div class="card">
                    <div class="card-header">
                        <h4>
                            Product Data
                        </h4>
                    </div>
                    <div class="card-body">
                        <center>
                        <table id="datatable" class="table table-bordered">
                            <thead >
                                <tr>
                                    <th>ID</th>
                                    <th>Club_id</th>
                                    <th>Title</th>
                                    <th>Product Title</th>
                                    <th>Type</th>
                                    <th colspan="3">Action</th>
                                </tr>
                            </thead>
                            <tbody id="data">

                            </tbody>
                        </table>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            fetchproduct();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function fetchproduct() {
                $.ajax({
                    type: "GET",
                    url: "/fetch-product",
                    dataType: "json",
                    success: function(response) {
                        console.log(response.products);
                        $('tbody').html("");
                        $.each(response.products, function(key, item) {
                            $('tbody').append('<tr>\
                                <td>' + item.id + '</td>\
                                <td>' + item.club_id + '</td>\
                                <td>' + item.title + '</td>\
                                <td>' + item.product_title + '</td>\
                                 <td>' +item.type +'</td>\
                                 <td><button type="button" value="' + item.id + '" class="btn btn-primary editbtn btn-sm"><i class="bi bi-pencil-square"></i></button></td>\
                                 <td><button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm"><i class="bi bi-trash3-fill"></i></button></td>\
                                 <td><button type="button" value="' + item.id + '" class="btn btn-info discountbtn btn-sm"><i class="bi bi-bag-check-fill"></i></button></td>\
                                   \</tr>'
                                );
                        });

                    }
                });
            }

            $('body').on('keyup','#search', function(e) {
                e.preventDefault();
                let value = $(this).val();
                // console.log($value);
                $.ajax({
                    method : 'GET',
                    url: `search/${value}`,
                    
                    success: function(product) {
                    $('tbody').html('');
                    console.log(product); 
                    $.each(product ,function(key,item){

                        if(product !== ''){
                            $('tbody').append('<tr>\
                                <td>' + item.id + '</td>\
                                <td>' + item.club_id + '</td>\
                                <td>' + item.title + '</td>\
                                <td>' + item.product_title + '</td>\
                                 <td>' + item.type +'</td>\
                                 <td><button type="button" value="' + item.id + '" class="btn btn-primary editbtn btn-sm"><i class="bi bi-pencil-square"></i></button></td>\
                                 <td><button type="button" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm"><i class="bi bi-trash3-fill"></i></button></td>\
                                 <td><button type="button" value="' + item.id + '" class="btn btn-info discountbtn btn-sm"><i class="bi bi-bag-check-fill"></i></button></td>\
                                   \</tr>'
                         ); 
                        }
                        
                    });
                    },
                    error:function(response){
                        $('tbody').append('<tr rowspan="7">\ No Record Found \</tr>'
                        ); 
                    }
                });
            });

            $(document).on('click', '.add_product', function(e) {
                e.preventDefault();
                $('span').html('');
                // $(this).text("Adding Data..");

                var product_data = {
                    'club_id': $('#club_id').val(),
                    'title': $('#title').val(),
                    'product_title': $('#product_title').val(),
                    'type': $('#type').val(),
                }
                console.log(product_data);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/products",
                    data: product_data,
                    response: 'not get data',
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        swal("Good job!", "Data Added Successfully!", "success")
                        $('#productmodal').modal('hide');
                        $('#productmodal').find('input').val('');
                        $('.add_product').val('add');
                        $('span').html('');
                        fetchproduct();
                    },
                    error: function(response) {
                        $('#errormsg').html('');
                        $.each(response.responseJSON.errors, function(field_name, error) {
                            $(document).find('[name=' + field_name + ']').after(
                                '<span class="text-strong text-danger">' + error +
                                '</span>')
                            $('.add_product').val('add');
                            fetchproduct();

                        })
                    }
                });
            });

            $(document).on('click', '.editbtn', function(e) {
                e.preventDefault();

                var product_id = $(this).val();
                $('#editmodal').modal('show');
                // alert(product_id)

                $.ajax({
                    method: "GET",
                    url: `/edit-product/${product_id}`,
                    datatype: "JSON",
                    success: function(response) {
                        console.log(response.Data);
                        $('#product_id_edit').val(response.Data.id);
                        $('#club_id_edit').val(response.Data.club_id);
                        $('#title_edit').val(response.Data.title);
                        $('#product_title_edit').val(response.Data.product_title);
                        $('#type_edit').val(response.Data.type);

                    }
                });
            });

            $(document).on('click', '.update_product', function(e) {
                e.preventDefault();
                $(this).text('Updating..');
                var id = $('#product_id_edit').val();
                // alert(id);

                var product_data = {
                    'id': $('#product_id_edit').val(),
                    'club_id': $('#club_id_edit').val(),
                    'title': $('#title_edit').val(),
                    'product_title': $('#product_title_edit').val(),
                    'type': $('#type_edit').val(),
                }

                console.log(product_data);

                $.ajax({
                    type: "PUT",
                    url: "/update-product/" + id,
                    data: product_data,
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                        swal("Good job!", "Data Updated Successfully!", "success")
                        $('#editmodal').modal('hide');
                        $('#productmodal').find('input').val('');
                        $('.update_product').val('uodate');
                        fetchproduct();
                    }
                });
            });

            $(document).on('click', '.deletebtn', function(e) {
                e.preventDefault();

                var id = $(this).val();

                swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this imaginary file!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                    function() {
                        $.ajax({
                            type: "DELETE",
                            url: "/delete-product/" + id,
                            dataType: "json",
                            success: function(response) {
                                // console.log(response);
                                swal("Deleted!",
                                    "Your imaginary file has been deleted.",
                                    "success");
                                fetchproduct();
                            }
                        });

                    });
            });

            $(document).on('click', '.discountbtn', function(e) {
                $('#discountmodal').modal('show');
                $.ajax({
                    type: 'post',
                    url: '/discount',
                    success: function(data) {
                           $('#discountmodal').append('<p>' + data.min_amount+ '</p>')                     
                    }
                });

            });
        });
    </script>
</body>

</html>
