<?php require('ui/admin/header.php') ?>
<link href='ui/styles/admin/post.css' rel='stylesheet' />
<script src="ui/scripts/ckeditor/ckeditor.js"></script>
<script src="ui/scripts/admin/post.js"></script>

<section class='Main'>
    <div class='Sidebar'>
        <?php require('ui/admin/sidebar.php') ?>
    </div>
    <div class='Content'>
        <form action='./admin_post' method='post'>
            <input type='text' name='title' placeholder='ចំណងជើង' required />
            <textarea name='content' id='editor'><?php $post['content'] ?></textarea>
            <div class='wrapper'>
                <input type='text' name='thumb' required value='' />
                <select name='category' required>
                    <option>ជាតិ</option>
                    <option>អន្តរជាតិ</option>
                </select>
                
                <input type='datetime-local' value='<?php $post['date'] ?>' name='datetime' required />
                <input type='submit' value='បញ្ជូន' />
            </div>
            <input type='hidden' value='<?php $post['video'] ?>' name='entries' required />
        </form>

        <div class='form'>
            <select name='type'>
                <option>YouTube</option>
                <option>YouTubePlaylist</option>
                <option>Facebook</option>
                <option>OK</option>
                <option>Dailymotion</option>
                <option>Vimeo</option>
            </select>
            
            <input name='id' type='text' placeholder="អត្តសញ្ញាណវីដេអូ" required />
            <select name='ending'>
                <option>ចប់​ហើយ</option>
                <option>មិន​ទាន់ចប់</option>
            </select>
            <input onclick='genJson()' type="button" value="បញ្ចូល​វីដេអូ" />
        </div>

        <table class='viddata'></table>
        
    </div>
</section>
<script src="ui/scripts/ckeditor/config.js"></script>

<?php require('ui/footer.php') ?>