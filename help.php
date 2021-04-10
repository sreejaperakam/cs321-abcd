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
            <h2 id="title">Welcome to the Project ABCD Website!</strong></h2>
<h5></h5>
<p>Each of the icon on the home page represents a different type of dance. When you mouse over any of the icons, the names of the dances will be shown. Click on any of them to learn more about the dance.</p>
<p>Users have to be logged in as an admin to  <button><a class="btn btn-sm" href=  >Create a dance</a></button> , 
<td><a class="btn btn-warning btn-sm" href >Modify</a></td>
, and 
<td><a class="btn btn-danger btn-sm" href= >Delete</a></td>
 
a dance which are all in "List" page.
 Also while logged in as an Admin, users will be able to see the button <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Modify Preferences</button>
 next to 
 <button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Set Cookie</button>. </p>
<p>You can set up your favorite dance by going to "Preferences" and typing in your favorite dance of your choice and by clicking  
<button type="submit" name="submit" class="btn btn-primary btn-md align-items-center">Set Cookie</button>
 you have your favorite dance all set up in "My favorite".</p>
<br>
<p>The number of dance icons per row and the number of dances to display on the home page can be changed by the admin in "Preferences".</p>
<br>
<p>You can always click on the "A Bite Of Culture In Dances" icon to go back to the home page.            
<a href title="SILC Project ABCD"><img id="silc" src="images/about_images/abcd_logo.png"></a> 

<br>
<br>
<p>This site was updated to PHP format by the students of SILC CS320 (PHP) class.</p>
    </div>
</body>
</html>