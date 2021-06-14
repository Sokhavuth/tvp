<?php require('views/admin/partials/header.php') ?>
<link href='public/styles/admin/user.css' rel='stylesheet' />
<script src="public/scripts/ckeditor/ckeditor.js"></script>

<section class='Main'>
    <div class='Sidebar'>
        <?php require('views/admin/partials/sidebar.php') ?>
    </div>
    <div class='Content'>
        <form action='./admin_post' method='post'>
            <input type='text' name='title' placeholder='ចំណងជើង' required />
            <textarea name='text' id='editor'>dd</textarea>
        </form>
    </div>
</section>
<script src="public/scripts/ckeditor/config.js"></script>
<?php require('views/partials/footer.php') ?>