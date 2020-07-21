<div class="landing" style="background-image: url(<?php echo $image; ?>)">
    <div class="l-container">
        <div class="landing-content">
            <h2 class="landing-title"><?php echo $title; ?></h2>
            <p class="landing-description"><?php echo $description?></p>
            <?php if(isset($button) || !empty($button)): ?>
            <?php echo importTemplate('./components/button', [
                'url'  => $button['button_url'],
                'text' => $button['button_text']
            ]); ?>
            <?php endif; ?>
        </div>
    </div>
</div>