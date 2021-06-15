<?php
//controllers/admin/posts/delete.php

function delete($f3, $id){
    $sql = "DELETE FROM posts WHERE id=?";
    $f3->get('DB')->exec($sql, $id);
    
    $f3->reroute('./admin_post');
}