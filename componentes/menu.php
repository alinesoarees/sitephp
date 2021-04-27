
<nav id="nav">
    <ul>
        <?php  foreach($MENU as $item) { ?>
            <li><a href="<?php echo $item['link']; ?>"><?php echo $item['titulo']; ?></a></li>
        <?php } ?>

        
    </ul>   
</nav>