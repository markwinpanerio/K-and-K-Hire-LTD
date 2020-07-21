<section class="section<?php echo isset($invert_background) || $invert_background ? ' section-inverted' : ''; ?>">
    <div class="section-content">
        <div class="l-container">
            <h2><?php echo $title; ?></h2>
            <?php if(isset($description) || !empty($description)): ?>
                <?php foreach($description as $description_item): ?>
                    <?php echo $description_item; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <?php if(isset($full_image) || !empty($full_image)): ?>
        <div class="section-fullimage">
            <img src="<?php echo $full_image; ?>" alt="">
        </div>
        <?php endif; ?>
    </div>
    <?php if(isset($card) || !empty($card)): ?>
        <div class="card">
            <div class="l-container">
                <div class="row card-inner">                
                    <?php foreach($card as $card_item): ?>
                        <div class="col-lg-4 col-sm-12 card-item">
                            <article class="card-article">
                                <div class="card-image" style="background-image: url(<?php echo $card_item['image']; ?>)"></div>
                                <h2><?php echo $card_item['title']; ?></h2>
                                <p><?php echo $card_item['description']; ?></p>
                            </article>
                            <?php if(isset($card_item['button']) || !empty($card_item['button'])): ?>
                                <?php echo importTemplate('./components/button', [
                                    'url'  => $card_item['button']['button_url'],
                                    'text' => $card_item['button']['button_text']
                                ])?>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>    
</section>