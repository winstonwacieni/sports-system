<?php
include ('../includes/connection.php');

if(isset($_POST['save'])){
    $news_title = $_POST['news_title'];
    $news_description = $_POST['news_description'];
    $cat_title = $_POST['cat_title'];
    
   
    // accessing image
    $news_image = $_FILES['news_image']['name'];
    
    // storing images
    $temp_image = $_FILES['news_image']['tmp_name'];
    
    // check if fields are empty
    if($news_title=='' || $news_description=='' || $cat_title=='' ||  $news_image==''  ){
        echo"<script>alert('please fill all fields')</script>";
        echo (mysqli_error($con));
        exit;
    }else{
move_uploaded_file($temp_image,"./news_image/$news_image");


//inserting to database
$sql="INSERT INTO news (news_title,news_description,cat_title,news_image) values ('$news_title','$news_description','$cat_title','$news_image')";
$result=mysqli_query($con,$sql);
if($result){
    echo"<script>alert('News Published successfully')</script>";
}else{
    echo(mysqli_error($con));
    echo"<script>alert('Error occured,News not Published')</script>";
   }
    }
}
?>

<!-- add news form -->
<div class="container mt-3 ">
        <h1 class="text-center">News</h1>
        <form action=" " enctype="multipart/form-data" method="POST">
            <!-- title -->
            <div class="form-outline w-50 mb-4  m-auto">
                <label for="" class="form-label">News Title</label>
                <input class="form-control" type="text" name="news_title" id="news_title" placeholder="Enter News_title" autocomplete="off">
            </div>
            <!-- News Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="" class="form-label">News_description</label>
                <!-- <input class="form-control" type="text" name="news_description" id="news_description" placeholder="Enter News_description" autocomplete="off"> -->
                <textarea class="form-control" name="news_description" id="news_description" cols="80" rows="10" autocomplete="off" ></textarea>
            </div>
            <!-- Type of News -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="cat_title" id="" class="form-select">
                <option value="">Select a Category</option>
                    <?php
                    $sql="select * from Categories";
                    $result=mysqli_query($con,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $cat_title =$row['cat_title'];
                        $cat_id = $row['id'];
                        echo "<option value='$cat_title'>$cat_title</option>";
                    }
                    ?>
                </select>
            </div>
            <!-- image -->
            <div class="form-outline mb-4 w-50 m-auto">
            <label for="" class="form-label">Headline Image</label>
                <input class="form-control" type="file" name="news_image" id="news_image"  autocomplete="off">
            </div>
            <!-- <div class="form-outline mb-4 w-50 m-auto">
            <label for="" class="form-label">Team Photo</label>
                <input class="form-control" type="file" name="team_image" id="team_image"  autocomplete="off">
            </div> -->
            <!-- submit -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input class="btn btn-info mb-2 px-3C" type="submit" name="save" value="Save">
            </div>
        </form>
    </div>
    