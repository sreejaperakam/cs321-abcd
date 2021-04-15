<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 25px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
<div class="wrapper">
        <div class="container-fluid">
            <?php
               // Include header and nav bar files
               require_once "header.php";
               require_once "nav_bar.php";
            ?>
            <h2 id="title">Favorite Dance</h2><br>
<?php
$cookie_name = "fav_dance";
 $favoriteDanceName = "Kuchipudi";

if(!isset($_COOKIE[$cookie_name])) {
     echo "Your favorite dance is not set, go to preferences and enter your favorite dance.";
     echo "Default is Kuchipudi.";
     echo "Your favorite dance is not set. You can set your favorite dance in preferences.";
     echo "Using the system default.";
     $fav_status = "COOKIE_NOT_FOUND";
     $favoriteDanceName = "Kuchipudi";
} 
/*else{
    echo "$_COOKIE[$cookie_name]";
    $result = $link->query("SELECT * FROM dances WHERE name =" .$_COOKIE[$cookie_name]);

    echo $result;
    if ( $result->num_rows == 0 ) {
        echo "That dance doesn't exist. Please input another dance.";
    }
    else {
        $favoriteDanceName = $_COOKIE[$cookie_name];
        header('location: display_the_dance.php?name='.$favoriteDanceName);
    }

    $favoriteDanceName = $_COOKIE[$cookie_name];
    $fav_status = "COOKIE_N_DANCE_ARE_FOUND";
    $sql_query = "SELECT `name` FROM dances WHERE `name` = '$favoriteDanceName'";
    $mysqli_result = $link->query($sql_query);

    // If the dance doesn't exist, we will get EMPTY result_set
    $num_rows = mysqli_num_rows($mysqli_result);
    if ( $num_rows == 0) {
        echo "Your favorite dance doesn't exist in the database";
        echo "Using the system default.";
        $fav_status = "DANCE_NOT_FOUND";
        $favoriteDanceName = "Kuchipudi";
    } 
} */
else{
    $favoriteDanceName = $_COOKIE[$cookie_name];
    $fav_status = "COOKIE_N_DANCE_ARE_FOUND";
    $sql_query = "SELECT `id` FROM dances WHERE `name` = '$favoriteDanceName'";
    //echo "$sql_query";
    $mysqli_result = $link->query($sql_query);
 //print_r($mysqli_result);
    // If the dance doesn't exist, we will get EMPTY result_set
    $num_rows = mysqli_num_rows($mysqli_result);
    if ($num_rows>0) {
        $row = mysqli_fetch_array($mysqli_result, MYSQLI_ASSOC);
                
            // Retrieve individual field value
            $id = $row['id'];
            echo $id;
    }
    if ( $num_rows == 0) {
    
        echo "Your favorite dance doesn't exist in the database";
        echo "Using the system default.";
        $fav_status = "DANCE_NOT_FOUND";
        $favoriteDressName = "Kuchipudi";
    } 
}
// By the time we come here, we will have either system default or correct preferrence from cookie
header('Location: read.php?id='.$id);

?>
    </div>
</body>
</html>