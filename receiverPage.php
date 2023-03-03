<?php 
include 'db_connection.php';
session_start();
if(!isset($_SESSION['user'])){
    header('location:loginPage.php');
}

if($_SERVER['REQUEST_METHOD']=="POST"){

}

$query = "SELECT DISTINCT LOWER(city) FROM `food_details`";
$result = mysqli_query($connection,$query);
?>

<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Oswald:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="receiverstyle.css">
        <!-- <script
            src="https://code.jquery.com/jquery-3.6.1.js"
            integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
            crossorigin="anonymous"></script>
            <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


            <script>
                $(document).ready(function(){
                $('#city').on('change',function(){
                var categorysId=$(this).val();
                $.ajax({
                method: "POST",
                url: "ajaxfile.php",
                data:{categorys:categorysId},
                dataType:"html",
                success: function(data){
                $("#packageId").html(data);
                }

                });
            });
            });

            </script> -->
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary justify-content-end">
    <div class="d-grid gap-2 d-md-block ">
        <div class="container">
        <button class="btn btn-outline-light " type="button">Account</button>
        <button class="btn btn-outline-light" type="button">Logout</button>
        </div>

    </div>
  </nav>

<img src="static/donorPage.png" >
    <form action="" method='POST' >
        <div class="box  col-12 m-0 ml-sm-5 col-sm-6 mt-5 align-items-center text-center">
            <h1 class="my-7 mt-5">Reciever</h1>
            <hr>
            <div class="row my-3">
              <div class="col-sm-3">
                  <label for="phone" class="form-label" name='phone'>Mobile no</label>
              </div>
              <div class="col-sm-6">
                  <input type="text" class='form-control ' placeholder="Enter your mobile no" name="phone" id="phone" maxlength="10" required>
              </div>
          </div>
          <div class="row my-3">

        
            <div class="row my-3 mr-0">
                <div class="col-sm-3">
                    <label for="city" class="form-label">City</label>
                </div>
                <div class="col-sm-6 ">
                    <select class="form-select" aria-label="Select City"  id="city">
                        <?php 
                             if ($count = mysqli_num_rows($result) > 0) {
                                echo '<p style="color:red;">'.print_r(mysqli_fetch_assoc($result)).'</p>';
                                while($r = mysqli_fetch_assoc($result)){
                                    echo ' <option value="'.$r.'">'.$r['city'].'Hello</option>';
                                }
                             }else{
                                echo '<p>No City Availble</p>';
                             }
                        ?>
                      </select>
            </div>
        </div>
    

    <div class="row my-3 mr-0">
            <div class="col-sm-3">
                <label for="items" class="form-label">Item  </label>
            </div>
            <div class="col-sm-6 ">
                <select class="form-select" aria-label="Select Item"  id="item">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
        </div>
    </div>
        
        
            <br>
            <div class="text-center">
              <button type="submit" class="btn btn-outline-light col-lg-3 ">Submit</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>