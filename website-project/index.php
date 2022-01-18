<?php require_once('conn.php'); ?>
<?php include('head.php') ?>   

        <?php 
            if(isset($_POST['post'])) {
                $text = $_POST['postText'];
                $author = $_POST['auth'];
                $ins_query = "INSERT INTO post (post_text, author) VALUES('$text', '$author');";
                $insertion = mysqli_query($conn, $ins_query);
            }
            if(isset($_POST['delete'])) {
                $id = $_POST['del'];
                $del_query = "DELETE FROM post WHERE post.id = $id;";
                $deletion = mysqli_query($conn, $del_query);
            }
            
        ?>

        <div class="jumbotron">
            <h1>POSTS</h1>
            <?php
                $post_query = 'SELECT * FROM post';
                $retval = mysqli_query($conn, $post_query);
                $data_array = mysqli_fetch_all($retval, MYSQLI_ASSOC);
            ?>
            <?php foreach($data_array as $data) : ?>
                    <div class="container"> 
                        <small> <?php echo $data['time'] ?></small>
                        <p>
                            <b><?php echo $data['post_text']?></b> <br>
                            <small><i><?php echo $data['author'].'~'.$data['id']?></i></small>
                        </p>
                    </div>
            <?php endforeach?>
        </div>
<br>
        <div class="container">
            <form action="index.php" class="input-group" method="post">
                <input type="textarea" name="postText" id="post" placeholder="Enter text to be posted">
                <input type="text" name="auth" id="author" placeholder="Author"> 
                <input type="submit" name="post" class="btn btn-primary" value="Upload">
            </form>
            
        </div>

<br>        
        <div class="container">
            <form action="index.php" class="input-group" method="post">
                <input type="text" name="del" id="del" placeholder="Enter ID to delete">
                <input type="submit" value="Delete" class="btn btn-danger" name="delete">
            </form>
        </div>    

<?php include('foot.php') ?>        