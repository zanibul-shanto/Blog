<?php require "./includes/header.php"; ?>
<?php require "./config/config.php"; ?>


<?php 

        $posts = $conn->query("SELECT * FROM posts");
        $posts->execute();
        $rows = $posts->fetchAll(PDO::FETCH_OBJ);

        $categories = $conn->query("SELECT * FROM categories");
        $categories->execute();
        $category = $categories->fetchAll(PDO::FETCH_OBJ);

?>


            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                 
                <?php foreach($rows as $row) : ?>

                <?php //echo 'hello'. $_SESSION['username']; ?>
                    <!-- Post preview-->
                    <div class="post-preview">
                        <a href="http://localhost/Blog/posts/post.php?post_id=<?php echo $row->id; ?>">
                            <h2 class="post-title"> <?php echo $row->title;?> </h2>
                            <h3 class="post-subtitle"> <?php echo $row-> subtitle;?> </h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!"> <?php echo $row->user_name; ?> </a>
                            <?php echo date('M', strtotime($row->created_at)) . ', ' . date('d', strtotime($row->created_at)) . ', ' . date('Y', strtotime($row->created_at)); ?>
                        </p>

                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />

                    <?php endforeach; ?>

                    <!-- Pager-->
                    
                </div>
            </div>

            <div class="row gx-4 gx-lg-5 justify-content-center">

                <?php foreach ($category as $cat): ?>          

                    <div class="col-md-6 ">
                        <a href="http://localhost/Blog/categories/category.php?cat_id=<?php echo $row->id; ?>">  
                            <div class="alert alert-dark bg-dark text-center text-white" role="alert">
                                <?php echo $cat->name; ?> 

                            </div>   
                        </a>      
                    </div>
                <?php endforeach; ?>

            </div>
        
<?php require "./includes/FOOTER.php"; ?>