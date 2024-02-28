<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.2/dist/jquery.min.js"></script>

    {{-- <link href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css"
        integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <script src="https://cdn.datatables.net/2.0.0/js/dataTables.min.js"></script> --}}
</head>
<body>
    <div class="container mt-5">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal">
            Add Data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id='form' onsubmit="return false;" method="POST">
                            <input type="hidden" name="hid" id="hid" value="">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="firstname" name="firstname"
                                    placeholder="firstname" value="">
                                @csrf
                                <label for="floatingInput">Firstname</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                    placeholder="lastname" value="">
                                <label for="floatingPassword">Lastname</label>
                            </div>
                            <div class="mt-1 mb-1">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male"
                                        value="male">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="female">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>
                            <div class="mt-2 mb-2">
                                <label for="">Status:</label>
                                <select class="form-select" aria-label="Default select example" id="status"
                                    name="status">
                                    <option selected>Select one</option>
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div>
                            <div class="mt-2 mb-2">
                                <label for="">Cities:</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="cities" id="Ahmedabad"
                                        value="Ahmedabad">
                                    <label class="form-check-label">Ahmedabad</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="cities" id="Baroda"
                                        value="Baroda">
                                    <label class="form-check-label">Baroda</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="cities" id="Surat"
                                        value="Surat">
                                    <label class="form-check-label">Surat</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="cities" id="Jamnagar"
                                        value="Jamnagar">
                                    <label class="form-check-label">Jamnagar</label>
                                </div>
                            </div>
                            <div class="mt-2 mb-2">
                                <label for="customRange1" class="form-label">Age:</label>
                                <input type="range" class="form-range" id="age" name="age" value="">
                            </div>
                            <div class="form-floating mt-2 mb-2">
                                <textarea class="form-control" placeholder="Textarea" id="textarea" name="textarea" value=""></textarea>
                                <label for="floatingTextarea">Textarea</label>
                            </div>
                            <label for="GFG_Color" class="form-label">
                                Color Picker:
                            </label>
                            <input type="color" class="m-auto form-control form-control-color" id="color"
                                name="color" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <table id="table" class="table table-hover">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Gender</th>
                    {{-- <th>Status</th> --}}
                    <th>Cities</th>
                    <th>Age</th>
                    <th>Textarea</th>
                    <th>Color</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $("#form").submit(function() {
                $.ajax({
                    type:'POST',
                    url: '/add',
                    cache: false,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: new FormData(this),
                    success: function(data) {
                        $('#modal').modal('hide');
                        $('#form').trigger("reset");
                        $('#table').DataTable().ajax.reload();
                        $("#hid").val("");
                    }
                });
            });

            $("#modal").on("hidden.bs.modal", function() {
                $('#form').trigger("reset");
            });

            $('#table').DataTable({
                destroy: true,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                ajax: {
                    url: '/list',
                },
                columns: [{
                        data: "firstname"
                    },
                    {
                        data: "lastname"
                    },
                    {
                        data: "gender"
                    },
                    // {
                    //     data: "status"
                    // },
                    {
                        data: "cities"
                    },
                    {
                        data: "age"
                    },
                    {
                        data: "textarea"
                    },
                    {
                        data: "color"
                    },
                    {
                        data: "action",
                        "orderable": false
                    }
                ]
            });
            $(document).on("click","#edit",function(){
                var id = $(this).attr("data-id");
                console.log(id);
                $.ajax({
                    type:"GET",
                    url:'/edit',
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                    data:{
                        id:id
                    },
                    success:function(response){
                    console.log(response);
                    $('#modal').modal('show');
                    $('#hid').val(response.id);
                    $("#firstname").val(response.firstname);
                    $("#lastname").val(response.lastname);
                    $('input[type="radio"]').filter('[value=' + response.gender + ']').prop("checked", true);
                    $("#status").val(response.status);
                    $('input[type="checkbox"]').filter('[value=' + response.cities + ']').prop("checked", true);
                    $("#age").val(response.age);
                    $("#textarea").val(response.textarea);
                    $("#color").val(response.color);
        }
                });
            });

            $(document).on("click","#delete",function(){
                var id = $(this).attr("data-id");
                console.log(id);
                $.ajax({
                    type:"POST",
                    url:'/delete',
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                    data:{
                        id:id
                    },
                    success:function(response){
                    $('#table').DataTable().ajax.reload();
                    }
                });
            });
        });
    </script>
</body>
</html>