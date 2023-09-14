<?php
include_once("../includes/connection.php");
include_once("../includes/functions.php");
?>
<button class="btn btn-info"><a href="index.php">BACK</a></button>
<button class="btn btn-info"><a href="index.php?addnews">Add News</a></button>
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-address-book    "></i>News</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="row">
    <div class="col-md-10 ">
        <div class="row">
            <?php
            //fetch news
            get_all_news();

            ?>
        </div>
    </div>
</div>
<!-- js code -->
<!-- <script src="../includes/jquery-3.2.1.min.js"></script>
    <script>
            $('.message button').click(function(){
                $('form').animate({height:"toggle",opacity:"toggle"},"slow");
            });
        </script> -->