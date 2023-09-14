<?php
include_once("../includes/connection.php");
if (isset($_POST["insert_game"])) {
    $game_title = $_POST['game_title'];
    $select_query = "select * from games where game_title= ('$game_title')";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script>alert('Game already exists') </script>";
    } else {
        $sql = "INSERT into games (game_title) values ('$game_title')";
        $result = mysqli_query($con, $sql);
        // success message
        if ($result) {
            echo "<script>alert('Game added succesfully') </script>";
        }
    }
}
?>
<!-- Button trigger modal -->
<button class="btn btn-info"><a href="index.php">BACK</a></button>
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-address-book    "></i>Add Game</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="" method="post" class="mb-2 my-2">
    <div class="input-group w-50 mb-3">
        <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="game_title" placeholder="Enter Sport Name" autocomplete="off">
    </div>
    <div class="input-group w-10 mb-2 m-auto">
        <input type="submit" class="bg-info border-0 p-2 my-2" name="insert_game" value="Save">

    </div>
</form>

<!-- Modal -->
<!-- <button class="btn btn-info"><a href="index.php">BACK</a></button>
<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-address-book    "></i>Add Game</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" class="mb-2">
                <div class="input-group w-90 mb-3">
                    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
                    <input type="text" class="form-control" name="game_title" placeholder="Enter Sport Name" autocomplete="off">
                </div>
                <div class="input-group w-10 mb-2 m-auto">
                    <input type="submit" class="bg-info border-0 p-2 my-2" name="insert_game" value="Save">
                    <!-- <button class="bg-info p-3 border-0">Insert category</button> -->
</div>
</form>
</div>
</div>
</div> -->

</form>