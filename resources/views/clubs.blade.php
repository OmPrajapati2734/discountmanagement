<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clubs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
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
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h3>Club Management</h3>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=" url('')">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Club</a>
                </li>
            </ul>
        </div>
    </nav>

    <br>
    <div class="container-fluid">
        <h2>Club Form</h2>
        <br>


        <form class="form-inline my-2">
            <input class="form-control w-40" id="club_search" type="search" placeholder="Search" aria-label="Search">

        </form>
        <br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary align-item-right" data-bs-toggle="modal" id="add_club">
            Add Club
        </button>
        <br>
        <div class="modal fade" id="clubmodal" tabindex="-1" aria-labelledby="addclubmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Add Club Data</h5>

                        </div>
                    </div>
                    <form id="clubform">
                        <div class="modal-body">
                            <p>All <span>(*)</span>Fields are required
                            <p>
                            <ul id="save_msgList"></ul>

                            <div class="mb-3 mt-3">
                                <label for="group_id">Group Id: <span>*</span> </label>
                                <input type="number" class="form-control" id="group_id" name="group_id"
                                    value="">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="business_name">Business Name: <span>*</span></label>
                                <input type="text" class="form-control" id="business_name"
                                    placeholder="Enter business_name" name="business_name" value=""
                                    autocomplete="off">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="club_name">Club Name: <span>*</span></label>
                                <input type="text" class="form-control" id="club_name" placeholder="Enter club_name"
                                    name="club_name" value="">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="club_number">Club Number: <span>*</span></label>
                                        <input type="number" class="form-control" id="club_number"
                                            placeholder="Enter club_number" name="club_number" value="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3 ">
                                        <label for="club_state">Club State: <span>*</span></label>
                                        <input type="text" class="form-control" id="club_state"
                                            placeholder="Enter club_state" name="club_state" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="club_description">Club Description: <span>*</span></label>
                                <input type="text" class="form-control" id="club_description"
                                    placeholder="Enter club_state" name="club_description" value="">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="club_slug">Club Slug: <span>*</span></label>
                                        <input type="text" class="form-control" id="club_slug"
                                            placeholder="Enter club_slug" name="club_slug" value="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <label for="website_title">Web site Title: <span>*</span></label>
                                        <input type="text" class="form-control" id="website_title"
                                            placeholder="Enter website_title" name="website_title" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="website_link">Website Link: <span>*</span></label>
                                <input type="text" class="form-control" id="website_link"
                                    placeholder="Enter club_slug" name="website_link" value="">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="club_logo">Club Logo: <span>*</span></label>
                                    <input type="file" class="form-control" id="club_logo"
                                        onchange="document.getElementById('logo-preview').src = window.URL.createObjectURL(this.files[0])"
                                        name="club_logo" value="">
                                    <img src="" id="logo-preview" width="100px" height="70px">
                                </div>
                                <div class="col">
                                    <label for="club_banner">Club Banner: <span>*</span></label>
                                    <input type="file" class="form-control" id="club_banner"
                                        placeholder="Enter club_banner"
                                        onchange="document.getElementById('banner-preview').src = window.URL.createObjectURL(this.files[0])"
                                        name="club_banner" value="">
                                    <img src="" id="banner-preview" width="100px" height="70px">
                                </div>
                                <br>
                                <br>
                            </div>
                            <br>
                            <div class="justify-content-right">
                                <button type="submit" id="Add_club" class="btn btn-primary Add_club">Save
                                    Changes</button>
                                <button type="submit" id="resetbtn" class="btn btn-primary resetbtn">Reset
                                    Button</button>
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>

                </div>
            </div>
        </div>
        <br>

        <!-- edit --!>
          <div class="modal fade" id="editclubmodal" tabindex="-1" aria-labelledby="editclubmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Club Data</h5>
                        </div>
                    </div>

                    <form  id="editclubform" >
                    <div class="modal-body">
                        <div class="mb-3 mt-3">
                            <label>Club Id:</label>
                            <input type="number" class="form-control" id="c_id" name="c_id" readonly value="">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="group_id">Group Id: <span>*</span></label>
                            <input type="number" class="form-control" id="group_id_edit" name="group_id_edit" value="">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="business_name">Business Name: <span>*</span></label>
                            <input type="text" class="form-control" id="business_name_edit"
                                placeholder="Enter business_name" name="business_name_edit" value=""
                                autocomplete="off">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="club_name">Club Name: <span>*</span></label>
                            <input type="text" class="form-control" id="club_name_edit" placeholder="Enter club_name"
                                name="club_name_edit" value="">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="club_number">Club Number: <span>*</span></label>
                                    <input type="number" class="form-control" id="club_number_edit"
                                        placeholder="Enter club_number" name="club_number_edit" value="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 ">
                                    <label for="club_state">Club State: <span>*</span></label>
                                    <input type="text" class="form-control" id="club_state_edit"
                                        placeholder="Enter club_state" name="club_state_edit" value="">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="club_description">Club Description: <span>*</span></label>
                            <input type="text" class="form-control" id="club_description_edit"
                                placeholder="Enter club_state" name="club_description_edit" value="">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="club_slug">Club Slug: <span>*</span></label>
                                    <input type="text" class="form-control" id="club_slug_edit"
                                        placeholder="Enter club_slug" name="club_slug_edit" value="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="website_title">Web site Title: <span>*</span></label>
                                    <input type="text" class="form-control" id="website_title_edit"
                                        placeholder="Enter website_title" name="website_title_edit" value="">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="website_link">Website Link: <span>*</span></label>
                            <input type="text" class="form-control" id="website_link_edit"
                                placeholder="Enter club_slug" name="website_link_edit" value="">
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="club_logo">Club Logo: <span>*</span></label>
                                <input type="file" class="form-control" accept=".png, .jpeg, .jpg" id="club_logo_edit"
                                    placeholder="Enter club_logo_edit" name="club_logo_edit" value="">
                                    <div class='' id='logopreview'>
                                    </div>
                                </div>
                            <div class="col">
                                <label for="club_banner">Club Banner: <span>*</span></label>
                                <input type="file" class="form-control" accept=".png, .jpeg, .jpg"
                                    id="club_banner_edit"  onchange="document.getElementById('banner-preview').src = window.URL.createObjectURL(this.files[0])" placeholder="Enter club_banner" name="club_banner_edit" value="">
                                    <div class='' id='bannerpreview'>
                                    </div>
                                </div>
                        </div>
                    <br>
                    
                    </div>
                    <div class="d-grid gap-2 mr-3 justify-content-md-end">
                        <button type="submit" id="update_club" class="mb-3 btn btn-primary update_club">Update</button>
                    </div>
                </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
        <div class="row container-fluid">
            <div class="col-md-12">

                <div id="success_message"></div>

                <div class="card">
                    <div class="card-header">
                        <h4>Club Data</h4>
                    </div>
                    <div class="card-body">
                        <table id="clubData" class="table table-bordered table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>group_id</th>
                                    <th>business_name</th>
                                    <th>club_number</th>
                                    <th>club_name</th>
                                    <th>club_state</th>
                                    <th>club_description</th>
                                    <th>club_slug</th>
                                    <th>website_title</th>
                                    <th>website_link</th>
                                    <th>club_logo</th>
                                    <th>club_banner</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            
                        </table>
                        
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
    <script>
        $(document).ready(function() {
            $('#searchclub').hide();
            fetchclub();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('body').on('keyup', '#club_search', function(e) {
                e.preventDefault();
                let value = $(this).val();
                let logo = $('#club_logo').attr('src', club_logo);
                let banner = $('#club_banner').attr('src', club_banner);
                // console.log($value);
                $.ajax({
                    method: 'GET',
                    url: `search/${value}`,
                    success: function(clubs) {
                        $('tbody').html('');
                        console.log(clubs);
                        $.each(clubs, function(key, item) {
                            $('tbody').append('<tr>\
                                            <td>' + item.id + '</td>\
                                            <td>' + item.group_id + '</td>\
                                            <td>' + item.business_name + '</td>\
                                            <td>' + item.club_number + '</td>\
                                             <td>' + item.club_name + '</td>\
                                             <td>' + item.club_state + '</td>\
                                             <td>' + item.club_description + '</td>\
                                             <td>' + item.club_slug + '</td>\
                                             <td>' + item.website_title + '</td>\
                                             <td>' + item.website_link + '</td>\
                                             <td>' + logo + '</td>\
                                             <td>' + banner + '</td>\
                                             <td><button type="button" id="editbtn" value="' + item.id + '" class="btn btn-primary editbtn btn-sm"><i class="bi bi-pencil-square"></i></button></td>\
                                             <td><button type="button" id="deletebtn" value="' + item.id + '" class="btn btn-danger deletebtn btn-sm"><i class="bi bi-trash3-fill"></i></button></td>\
                                             \</tr>');
                            fetchclub();
                        });
                    },
                    error: function(response) {
                        console.log(response);
                    }
                });
            });

            function fetchclub() {
                $.ajax({
                    type: "GET",
                    url: "/fetch-club",
                    dataType: "json",
                    success: function(clubs) {
                        // console.log(clubs);
                        $('tbody').html("");
                        $.each(clubs.clubs, function(key, item) {
                            $('tbody').append('<tr>\
                                                   <td>' + item.id + '</td> \
                                                   <td>' + item.group_id + '</td>\
                                                   <td>' + item.business_name + '</td>\
                                                    <td>' + item.club_number + '</td>\
                                                    <td>' + item.club_name + '</td>\
                                                    <td>' + item.club_state + '</td>\
                                                  <td>' + item.club_description + '</td>\
                                                  <td>' + item.club_slug + '</td>\
                                                  <td>' + item.website_title + '</td>\
                                                <td>' + item.website_link + '</td>\
                                                   <td> <img src="/' + item.club_logo + '" width="100px" height="100px" id="logo">  </td>\
                                                 <td> <img src="/' + item.club_banner + '" width="100px" height="100px" id="banner"></td>\
                                                 <td>' + '<button type="button" value="' + item.id + '" id="editbtn" class="btn btn-primary editbtn btn-sm"><i class="bi bi-pencil-square"></i></button></td>\
                                                 <td><button type="button" value="' + item.id +
                                '" id="deletebtn" class="btn btn-danger deletebtn btn-sm"><i class="bi bi-trash3-fill"></i></button></td>\
                                                                                                                                    \</tr>'
                            );
                        });
                    }
                });
            }




            $('#add_club').on('click', function(e) {
                $('#clubmodal').modal('show');
                $('.error').html('');

            })

            $('#clubform').on('submit', function(e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/clubs",
                    data: new FormData(this),
                    processData: false,
                    cache: false,
                    contentType: false,
                    async: false,
                    dataType: "JSON",
                    success: function(response) {
                        console.log(response);
                        swal("Good job!", "Data Added Successfully!", "success")
                        $('#clubmodal').modal('hide');
                        $('#clubmodal').find('input').val('');
                        $('#banner').attr('src', response[1]);
                        $('#logo').attr('src', response[0]);
                        fetchclub();
                    },
                    error: function(response) {
                        $('#errormsg').html('');
                        $.each(response.responseJSON.errors, function(field_name, error) {
                            $(document).find('[name=' + field_name + ']').after(
                                '<span class="text-strong text-danger error">' +
                                error +
                                '</span>')
                            $('.Add_club').val('adding');
                            fetchclub();
                        })
                    }
                });
            });

            $('#resetbtn').on('click', function(e) {
                $('#clubform').trigger("reset");
                $('#clubform').get(0).reset();
                e.preventDefault();
                $('#clubform').get(0).reset();
            });

            $(document).on('click', '.editbtn', function(e) {
                e.preventDefault();
                $('#logopreview').html('');
                $('#bannerpreview').html('');
                var id = $(this).val();
                $('#editclubmodal').modal('show');

                $('#logopreview').on('change', function(e) {
                    $('#logopreview').html('');
                    $('#bannerpreview').html('');
                });

                let logo;
                let banner;

                $.ajax({
                    method: "GET",
                    url: "/edit-club/" + id,
                    datatype: "json",
                    success: function(data) {
                        $('#c_id').val(id);
                        $('#group_id_edit').val(data.group_id);
                        $('#business_name_edit').val(data.business_name);
                        $('#club_name_edit').val(data.club_name);
                        $('#club_number_edit').val(data.club_number);
                        $('#club_state_edit').val(data.club_state);
                        $('#club_description_edit').val(data.club_description);
                        $('#club_slug_edit').val(data.club_slug);
                        $('#website_title_edit').val(data.website_title);
                        $('#website_link_edit').val(data.website_link);
                        $('#club_logo_edit').val();
                        $('#club_banner_edit').val();
                        $('#logopreview').append('<img src="' + data.club_logo +
                            '" alt="logoimage">');
                        $('#bannerpreview').append('<img src="' + data.club_banner +
                            '" alt="bannerimage">');
                        // $("#club_logo_edit").attr('src', );
                        // $('#club_banner_edit').attr('src', );

                        logo = $('#club_logo_edit').attr('src');
                        banner = $('#club_banner_edit').attr('src');


                        console.log(data);
                    }
                });


                $('#club_logo_edit').on('change', function(e) {
                    console.log(e);
                    console.log("logo : ",logo);
                    console.log("banner : ",banner);

                    $('#logopreview').empty('');
                    $('#logopreview').append('<img src="uploads/logo/"' + logo + '>');
                });

            });



            $('#editclubform').on('submit', function(e) {
                e.preventDefault();
                var id = $('#c_id').val();
                // alert(id)
                // $(this).text('Updating..');
                // var club_data = {
                //     'id': $('#c_id').val(),
                //     'group_id': $('#group_id_edit').val(),
                //     'business_name': $('#business_name_edit').val(),
                //     'club_name': $('#club_name_edit').val(),
                //     'club_number': $('#club_number_edit').val(),
                //     'club_state': $('#club_state_edit').val(),
                //     'club_description': $('#club_description_edit').val(),
                //     'club_slug': $('#club_slug_edit').val(),
                //     'website_title': $('#website_title_edit').val(),
                //     'website_link': $('#website_link_edit').val(),
                //     'club_logo': $('#club_logo_edit').val(),
                //     'club_banner': $('#club_banner_edit').val(),
                // }
                // console.log(club_data);


                $.ajax({
                    type: "PUT",
                    url: `update-club/${id}`,
                    data: new FormData(this),
                    processData: false,
                    cache: false,
                    contentType: false,
                    async: false,
                    dataType: "JSON",
                    success: function(response) {
                        console.log(response);
                        swal("Good job!", "Data Updated Successfully!", "success")
                        $('#editclubmodal').modal('hide');
                        $('#editclubmodal').find('input').val('');
                        fetchclub();
                    }
                });
            });

            $(document).on('click', '.deletebtn', function(e) {
                e.preventDefault();

                // $(this).text('Deleting..');
                var id = $(this).val();

                swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this Data!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                    function() {
                        $.ajax({
                            type: "DELETE",
                            url: "/delete-club/" + id,
                            dataType: "json",
                            success: function(response) {
                                // console.log(response);
                                swal("Deleted!", "Data has been deleted.",
                                    'success');
                                fetchclub();
                            }
                        });

                    });
            });


        });
    </script>
</body>
</html>
