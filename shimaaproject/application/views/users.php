
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.72.0">
    <title>Users Information</title>


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
<body >
    <div class="container text-center mt-5" >
        <h1 class="display-6 mt-5"><mark>Users Information</mark> </h1>
        <?php 
            if (!empty($users)) {
                echo '<table class="table mt-5">';
                echo '<thead class="table-light">';
                echo '<tr><th scope="col">#</th><th scope="col">Usernames</th></tr>';
                echo '</thead>';
                echo '<tbody>';
                foreach ($users as $val) {
                    echo '<tr><td scope="row">' . $val->user_id . '</td><td>' . $val->user_name . '</td></tr>';
                }
                echo '</tbody>';
                echo '</table>';
            } else {
                echo 'No Information found.';
            }

        ?>
    </div>


</body>

</html>