<!--views/login.php-->

<?php require('header.php') ?>
        
<link href='ui/styles/login.css' rel='stylesheet' />

<div class='Login'>
    <div class='title'>ចុះ​ឈ្មោះ​ចូល​ទំព័រ​គ្រប់គ្រង</div>
    <form action='./login' method='post'>
        <a>Email: </a><input type='email' name='email' required placeholder='Email' />
        <a>ពាក្យ​សំងាត់: </a><input type='password' name='password' required />
        <a></a><input type='submit' value='បញ្ជូន' />
        <a></a><div class='message'><?php echo $message ?></div>
    </form>
</div>

<?php require('footer.php') ?>