<?php include_once('header.php'); ?>

    <div class="container">
        <h3>View Post</h3><br><br>


        <h4> <?php echo $post->title; ?></h4>
        <p><?php echo $post->description; ?></p>
        <p><?php echo $post->date_created; ?></p>
        <?php echo anchor('welcome','Back',['class'=>'btn btn-primary']); ?>

    </div>
    <br>
    <br>
<?php include_once('footer.php'); ?>
