<?php
    if(!isset($url) || empty($url)) {
        $url = '#';
    }
?>

<a href="<?php echo $url; ?>" class="button"><?php echo $text; ?></a>