<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- csrf token meta for ajax-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- sweetalert2-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- BS4 & Jquery-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>Ajax CRUD</title>
</head>
<body>
    
   <div style="padding: 30px;">
       <div class="container">
           <h2 style="color: red;">
               <marquee behavior="" direction="">Laravel 8 AJAX CRUD Application</marquee>
           </h2>
        <div class="row">
            <div class="col-sm-8">
              <div class="card">
                  <div class="card-header">
                      All Teacher
                  </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Title</th>
                            <th scope="col">Institute</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!--
                            <tr>
                            <th scope="row">John Doe</th>
                            <td>Udemy Teacher</td>
                            <td>Udemy</td>
                            <td>
                                <button class="btn btn-md bg-success mr-2"><i class="fa-solid fa-square-pen"></i></button>
                                <button class="btn btn-md bg-danger"><i class="fa-solid fa-trash"></i></button>
                            </td>
                          </tr>
                          -->
                        </tbody>
                      </table>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-header">
                    <span id="addTeacher">Add New Teacher</span>
                    <span id="updateTeacher">Update Teacher</span>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" id="name">
                          <span class="text-danger" id="nameError"></span>
                        </div>
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input type="text" class="form-control" id="title">
                          <span class="text-danger" id="titleError"></span>
                        </div>
                        <div class="form-group">
                            <label for="institute">Institute</label>
                            <input type="text" class="form-control" id="institute">
                            <span class="text-danger" id="instituteError"></span>
                          </div>
                          <input type="hidden" name="" id="id">
                        <button id="addButton" type="button" onclick="addData()" class="btn btn-primary">Add</button>
                        <button id="updateButton" type="button" onclick ="updateTeacher()" class="btn btn-primary">Update</button>
                      </form>
                </div>
              </div>
            </div>
          </div>
    
       </div>
   </div>

   <script>
       $("#addTeacher").show();
       $("#updateTeacher").hide();
       $("#addButton").show();
       $("#updateButton").hide();

       //sweetalert2
       var alertMsg = Swal.mixin({
            toast: true,
            position: 'top-end',
            icon: 'success',
            showConfirmButton: false,
            timer: 1500
          })

       $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
    //get data using ajax
    function allData(){
        $.ajax({
            type: 'GET',
            url: 'teacher/all',
            dataType: 'json',
            success: function(response){
                var data = "";

                $.each(response, function(index, value) { 
                     data = data + "<tr>"
                     data = data + "<td>"+value.id+ "</td>"
                     data = data + "<td>"+value.name+ "</td>"
                     data = data + "<td>"+value.title+ "</td>"
                     data = data + "<td>"+value.institute+ "</td>"
                     data = data + "<td>"
                     data = data + "<button class='btn btn-md bg-success mr-2' onclick='editTeacher("+value.id+")'><i class='fa-solid fa-square-pen'></i></button>"
                     data = data + "<button class='btn btn-md bg-danger' onclick='deleteTeacher("+value.id+")'><i class='fa-solid fa-trash'></i></button>"
                     data = data + "</td>"
                     data = data + "</tr>"
                });
                $("tbody").html(data);
                //html(): return value
                //html(data): set value
            }

        })
    }

    allData();
  
  //clear input field
    function clearData(){
      $("#name").val('');
      $("#title").val('');
      $("#institute").val('');

      $("#nameError").text('')
      $("#titleError").text('')
      $("#instituteError").text('')
    }
 
    //post data using ajax
    function addData(){
      var name = $("#name").val();
      var title = $("#title").val();
      var institute = $("#institute").val();

      $.ajax({
        type: "POST",
        dataType: 'json',
        data: {name: name, title: title, institute: institute},
        url: "/teacher/add",
        success: function(data){
          clearData();
          //firing sweetalert2          
          alertMsg.fire({
            title: 'Data added successfully'
          })

          allData();
        },
        error: function(err){
          $("#nameError").text(err.responseJSON.errors.name)
          $("#titleError").text(err.responseJSON.errors.title)
          $("#instituteError").text(err.responseJSON.errors.institute)
        //  console.log(err.responseJSON.errors.name);
        //  console.log(err.responseJSON.errors.title);
        //  console.log(err.responseJSON.errors.institute);
        }
      });
    }

    //edit data using ajax
    function editTeacher(id){
      $.ajax({
        type: 'GET',
        dataType: 'json',
        url: "teacher/edit/"+id,
        success: function(data){
          $("#addTeacher").hide();
          $("#updateTeacher").show();
          $("#addButton").hide();
          $("#updateButton").show();

          $("#id").val(data.id);
          $("#name").val(data.name);
          $("#title").val(data.title);
          $("#institute").val(data.institute);

          $("#nameError").text('')
          $("#titleError").text('')
          $("#instituteError").text('')
          
          //console.log(data);
        }
      })
    }

    //update data using ajax
    function updateTeacher(){
      var id = $("#id").val();
      var name = $("#name").val();
      var title = $("#title").val();
      var institute = $("#institute").val();

      $.ajax({
        type: "POST",
        dataType: 'json',
        data : {name: name, title: title, institute: institute},
        url: "/teacher/update/"+id,
        success: function(data){
          clearData();
          $("#addTeacher").show();
          $("#updateTeacher").hide();
          $("#addButton").show();
          $("#updateButton").hide();
          
           //firing sweetalert2          
           alertMsg.fire({
            title: 'Data updated successfully'
          })

          allData();
        },
        error: function(err){
          $("#nameError").text(err.responseJSON.errors.name)
          $("#titleError").text(err.responseJSON.errors.title)
          $("#instituteError").text(err.responseJSON.errors.institute)
        }
      });
    }

    //Delete data using ajax

    function deleteTeacher(id){
      Swal.fire({
        //
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      //
      if (result.isConfirmed) {
        $.ajax({
          type: 'GET',
          dataType: 'json',
          url: "/teacher/delete/"+id,
          success: function(data){
            clearData();
              $("#addTeacher").show();
              $("#updateTeacher").hide();
              $("#addButton").show();
              $("#updateButton").hide();
              
              //firing sweetalert2          
              alertMsg.fire({
                title: 'Deleted successfully'
              })

              allData();
          }
        })
      }
})
    }

   </script>

</body>
</html>