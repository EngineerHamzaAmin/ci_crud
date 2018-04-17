<?php include_once('header.php'); ?>

    <div class="container">
        <h3>View All Posts</h3>
        <?php  if($msg = $this->session->flashdata("msg")): ?>
        <?php echo $msg; ?>
        <?php endif; ?>

        <?php echo anchor('welcome/create', 'ADD POST', array('class' => 'btn btn-primary')); ?>
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Creation Date</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($posts as $post):?>
            <tr>
                <td><?= $post->title ?></td>
                <td><?= $post->description ?></td>
                <td><?= $post->date_created ?></td>
                <td>
                    <?php echo anchor("welcome/view/{$post->id}", 'View', array('class' => 'label label-info')); ?>
                    <?php echo anchor("welcome/update/{$post->id}", 'Update', array('class' => 'label label-success')); ?>
                    <?php echo anchor("welcome/delete/{$post->id}", 'Delete', ['class' => 'label label-danger',
                        'onclick'=>"return confirm('Do you really want to delete this post!');"]); ?>

                </td>
            </tr>
            <?php endforeach;?>

            </tbody>
        </table>

    </div>
<br><br>
    <?php include_once('footer.php'); ?>