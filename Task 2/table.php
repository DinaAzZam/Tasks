<?php
// dynamic table
// dynamic rows
// dynamic columns
// check if gender of user == m ==> male
// check if gender of user == f ==> female

    $users = [
        (object)[
            'id' => 1,
            'name' => 'ahmed',
            "gender" => (object)[
                'gender' => 'm'
            ],
            'hobbies' => [
                'football', 'swimming', 'running'
            ],
            'activities' => [
                "school" => 'drawing',
                'home' => 'painting'
            ],
        ],
        (object)[
            'id' => 2,
            'name' => 'mohamed',
            "gender" => (object)[
                'gender' => 'm'
            ],
            'hobbies' => [
                'swimming', 'running',
            ],
            'activities' => [
                "school" => 'painting',
                'home' => 'drawing'
            ],
        ],
        (object)[
            'id' => 3,
            'name' => 'menna',
            "gender" => (object)[
                'gender' => 'f'
            ],
            'hobbies' => [
                'running',
            ],
            'activities' => [
                "school" => 'painting',
                'home' => 'drawing'
            ],
        ],  
    ];
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
        
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>