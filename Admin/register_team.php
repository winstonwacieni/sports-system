<?php
include ('../includes/connection.php');
if(isset($_POST['register'])){
    $Team_name = $_POST['Team_name'];
    $Team_Location = $_POST['Team_Location'];
    $game_title = $_POST['game_title'];
    $league_title = $_POST['league_title'];
   
    // accessing image
    $logo_image = $_FILES['logo_image']['name'];
    $team_image = $_FILES['team_image']['name'];
    // storing images
    $temp_image = $_FILES['logo_image']['tmp_name'];
    $temp_image = $_FILES['team_image']['tmp_name'];
    // check if fields are empty
    if($Team_name=='' || $Team_Location=='' ||$game_title==''|| $league_title==''||  $logo_image=='' || $team_image=='' ){
        echo"<script>alert('please fill all fields')</script>";
        echo (mysqli_error($con));
        exit;
    }else{
move_uploaded_file($temp_image1,"./Team_img/$logo_image");
move_uploaded_file($temp_image2,"./Team_img/$team_image");

//inserting to database
$sql="INSERT INTO Teams (Team_name,Team_location,game_title,league_title,logo_image,team_image) values ('$Team_name','$Team_Location','$game_title','$league_title','$logo_image','$team_image')";
$result=mysqli_query($con,$sql);
if($result){
    echo"<script>alert('Team Registered successfully')</script>";
}else{
    echo(mysqli_error($con));
    echo"<script>alert('Error occured,Team not Registered')</script>";
}
    }
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Registration</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
</head>

<body class="bg-light">
    <div class="container mt-3 ">
        <h1 class="text-center">Team Registration</h1>
       <button class="btn btn-info"><a href="index.php">BACK</a></button>
        <form action=" " enctype="multipart/form-data" method="POST">
            <!-- title -->
            <div class="form-outline w-50 mb-4  m-auto">
                <label for="" class="form-label">Team Name</label>
                <input class="form-control" type="text" name="Team_name" id="Team_name" placeholder="Enter Team name" autocomplete="off">
            </div>
            <!-- Location -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="" class="form-label">Team Location</label>
                <input class="form-control" type="text" name="Team_Location" id="Team_Location" placeholder="Enter Team Location" autocomplete="off">
            </div>
            <!-- Game They Play -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="game_title" id="" class="form-select">
                <option value="">Select a Game</option>
                    <?php
                    $sql="select * from games";
                    $result=mysqli_query($con,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $game_title =$row['game_title'];
                        $game_id = $row['id'];
                        echo "<option value='$game_title'>$game_title</option>";
                    }
                    ?>
                </select>
            </div>
            <!-- League level -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="league_title" id="" class="form-select">
                <option value="">Select a league</option>
                <?php
                    $sql="select * from league";
                    $result=mysqli_query($con,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $league_title =$row['league_title'];
                        $league_id = $row['id'];
                        echo "<option value='$league_title'>$league_title</option>";
                    }
                    ?>
                </select>
            </div>
            <!-- logo images -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="" class="form-label">Team Logo</label>
                <input class="form-control" type="file" name="logo_image" id="logo_image"  autocomplete="off">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="" class="form-label">Team Photo</label>
                <input class="form-control" type="file" name="team_image" id="team_image"  autocomplete="off">
            </div>
            <!-- submit -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input class="btn btn-info mb-2 px-3C" type="submit" name="register" value="Save">
            </div>
        </form>
    </div>

</body>

</html>