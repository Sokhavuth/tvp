<link href="ui/styles/admin/listing.css" rel="stylesheet"></link>
<script src='ui/scripts/admin/paginate.js'></script>

<section class='List region'>
    <div class='info'><?php echo $message ?></div>

    <div class='wrapper'>
        <?php foreach ($items as $item){ ?>
            <div class='item'>
                <div class='thumb'>
                    <a href='./<?php echo $route ?>/<?php echo $item["id"] ?>'>
                        <img src="ui/images/news.jpg" />
                        
                        <?php if($item["video"]){ ?>
                            <img class="playicon" src="ui/images/play.png" />
                        <?php } ?>
                    </a>
                </div>

                <div class='title'>
                    <a href='./<?php echo $route ?>/<?php echo $item["id"] ?>'>
                        <?php echo $item["title"] ?>
                    </a>

                    <a href='./<?php echo $route ?>/<?php echo $item["id"] ?>'>
                        <div><?php echo $item["author"] ?></div>
                    </a>
                </div>

                <div class='edit'>
                    <a href='./admin_<?php echo $route ?>_edit/<?php echo $item["id"] ?>'>
                        <img src="ui/images/edit.png" />
                    </a>
                    <a href='./admin_<?php echo $route ?>_delete/<?php echo $item["id"] ?>'>
                        <img src="ui/images/delete.png" />
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>

    <div class='paginate'>
        <a onClick='paginate("<?php $route ?>")'><img src='ui/images/load-more.png' /></div></a>
    </div>
 
</section>