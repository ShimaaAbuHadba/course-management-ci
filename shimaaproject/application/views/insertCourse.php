<!DOCTYPE html>
<html>
<head>
    <title>Course Information</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <style>
        /* Add custom styles for the girl color scheme */
        body {
            background-color: #f8e1e5; /* Light pink background */
        }
        .container {
            background-color: #ffffff; /* White container background */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #ff69b4; /* Hot pink text color */
        }
        th, td {
            color: #ff69b4; /* Hot pink table header and data color */
        }
    </style>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>اضافـــــــــــــة كورس</h2>
        </div>
    </div>
</div>

<form method="post" action="<?php echo base_url("index.php/Test/displayy") ?>">
<div class="row">
  <div class="col-lg-8">
    <strong>Course Name:</strong>
    <input type="text" name="name" class="form-control" placeholder="Name">
  </div>
  <div class="col-lg-8">
    <strong>Details:</strong>
    <textarea name="details" class="form-control" placeholder="Details"></textarea>
  </div>
  <div class="col-lg-8">
    <br/>
   <input type="submit" name="submit" value="اضافة">
  </div>
</div>
</form>


</div>


<!-- Include Bootstrap JS and Popper.js (required for some Bootstrap features) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
