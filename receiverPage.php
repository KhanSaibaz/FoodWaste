<?php
include 'db_connection.php';
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="receiverstyle.css">
</head>

<body>

    <form action="/action_page.php">
        <div class="container">
            <h1 class="my-3">Search for Food Items</h1>
            <hr>
            <div class="row my-2">
                <div class="col-sm-3">
                    <label for="phone" class="form-label">Mobile No</label>
                </div>
                <div class="col-sm-6">
                    <input type="text" class='form-control ' placeholder="Enter your mobile no" name="phone" id="phone" required>
                </div>
            </div>
            <div class="row my-2">
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
                <label for="items" class="form-label">Items</label>
            </div>
            <div class="col-sm-6">
                <select class="form-select" id="items" aria-label="Select Items">
                    <option selected>Open this select </option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
        </div>
            <br>
            <div class="col">
                <button type="submit" class="registerbtn">Submit</button>
            </div>
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