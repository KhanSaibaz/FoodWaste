<?php
if(!isset($_SESSION['user'])){
    header('location:loginPage.php');
}
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
    <link rel="stylesheet" href="donorstyle.css">
</head>

<body>
  <img src="static/donorPage.png" >
    <form action="" method='POST' >
        <div class="box  col-12 m-0 ml-sm-5 col-sm-6 mt-5 align-items-center text-center">
            <h1 class="my-7 mt-5">Donate</h1>
            <hr>
            <div class="row my-3">
                <div class="col-sm-3">
                    <label for="name" class="form-label" name='fname'>Food Name</label>
                </div>
                <div class="col-sm-6">
                    <input type="text" class='form-control ' placeholder="Enter Food Name" name="fname" id="fname" required>
                </div>
            </div>

            <div class="row my-3">
              <div class="col-sm-3">
                  <label for="phone" class="form-label" name='phone'>Mobile No</label>
              </div>
              <div class="col-sm-6">
                  <input type="text" class='form-control ' placeholder="Enter your mobile no" name="phone" id="phone" required>
              </div>
          </div>
          
          <div class="row my-3">
              <div class="col-sm-3">
                  <label for="quantity" class="form-label">Quantity</label>
              </div>
              <div class="col-sm-6">
                  <input type="no" class='form-control ' placeholder="Enter Quantity" name="quantity" id="quantity" required>
              </div>
          </div>


          <div class="row my-3">
            <div class="col-sm-3">
                <label for="phone" class="form-label">Expiry Date </label>
            </div>
            <div class="col-sm-6">
                <input type="date" class='form-control ' placeholder="Enter your mobile no" name="Date" id="phone" required>
            </div>
        </div>

            <div class="row my-3">
                <div class="col-sm-3">
                    <label for="city" class="form-label">City</label>
                </div>
                <div class="col-sm-6">
                    <select class="form-select" aria-label="Select City"  id="city">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
            </div>
        </div>


        <div class="row my-2">
            <div class="col-sm-3">
                <label for="address" class="form-label">Address</label>
            </div>
            <div class="col-sm-6">
                <input type="text" class='form-control ' placeholder="Enter Address" name="phone" id="phone" required>
            </div>
        </div>
        
            <br>
            <div class="text-center">
              <button type="button" class="btn btn-outline-light col-lg-3 ">Submit</button>
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