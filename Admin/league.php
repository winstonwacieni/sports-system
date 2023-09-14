<?php
include_once("../includes/connection.php");
if (isset($_POST["insert_league"])) {
    $league_title = $_POST['league_title'];
    $select_query = "select * from league where league_title= ('$league_title')";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script>alert('League already exists') </script>";
    } else {
        $sql = "INSERT into league (league_title) values ('$league_title')";
        $result = mysqli_query($con, $sql);
        // success message
        if ($result) {
            echo "<script>alert('League added succesfully') </script>";
        }
    }
}
?>
<!-- Button trigger modal -->
<button class="btn btn-info"><a href="index.php">BACK</a></button>
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-address-book    "></i>Add League</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="" method="post" class="mb-2 my-2">
    <div class="input-group w-50 mb-3">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="league_title" placeholder="insert league name" autocomplete="off">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info border-0 p-2 my-2" name="insert_league" value="Save">
    </div>
</form>

<!-- Modal -->
