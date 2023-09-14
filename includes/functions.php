<?php
include_once("connection.php");
// getting all news
function get_all_news()
{
    global $con;
    $sql = "select * from news ";
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        // $news_id = $row['id'];
        $news_title = $row['news_title'];
        $news_description = $row['news_description'];
        $news_image = $row['news_image'];
        // $cat_title = $row['cat_title'];
        echo "<div class='m-03 bg-orange'>
        <div class='module-content'>							
        			<a href='#'><h2>$news_title</h2></a>
                	<p>$news_description </p>
                    <a href='#' class='btn btn-primary bg-info'>Edit</a>
                    <a href='# ' class='btn btn-secondary'>view more</a>
                    <img src='../admin/news_image/$news_image' class='card-img-top' alt='...' style='height:100px ;'>	
                    </div>
                    </div>";
    }
}