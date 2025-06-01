<?php 
// echo $myname;
// echo $course;
// foreach ($course as $val) {
//    echo '<h1>'.$val->c_id.' '.$val->c_name.'</h1><br>';
// }
// if (!empty($course)) {
//     echo '<table>';
//     echo '<tr><th>Course ID</th><th>Course Name</th></tr>';
//     foreach ($course as $val) {
//         echo '<tr><td>' . $val->c_id . '</td><td>' . $val->c_name . '</td></tr>';
//     }
//     echo '</table>';
// } else {
//     echo 'No courses found.';
// }

// foreach ($course_id as $val)
// {
// 	echo '<h1>#'.$val->c_id.' '.$val->c_name.'</h1><br>';
// }



?>
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

<div class="container mt-5">
    <div class="row">
        <div class="col">

            <div class="d-flex flex-row mb-3">
        <a href="<?php echo base_url("index.php/Test/display") ?>" class="btn btn-primary">اضافة كورس</a>
        <form method="post" action="<?php echo base_url("index.php/Test/confirm_delete_all") ?>">
                <input type="hidden" name="confirm" value="yes">
                <button type="submit" class="btn btn-danger" >حذف جميع الكورسات</button>
         </form>
            </div>

            <?php if (!empty($course)): ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Course ID</th>
                            <th>Course Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($course as $val): ?>
                            <tr>
                                <td><?php echo $val->c_id; ?></td>
                                <td><?php echo $val->c_name; ?></td>
                                <td><a href="<?php echo base_url("index.php/Test/details_course/{$val->c_id}") ?>" class="btn btn-info">تفاصيل</a></td>
                                <td><a href="<?php echo base_url("index.php/Test/edit_course/{$val->c_id}") ?>" class="btn btn-warning">تعديل</a></td>
                                <td><a href="<?php echo base_url("index.php/Test/delete_course/{$val->c_id}") ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this course?')">حذف</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No courses found.</p>
            <?php endif; ?>
        </div>
        

        </div>
    </div>
</div>

<!-- Include Bootstrap JS and Popper.js (required for some Bootstrap features) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
