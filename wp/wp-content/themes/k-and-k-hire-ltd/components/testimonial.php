<div class="section section-inverted">
    <div class="section-content">
        <div class="l-container">
            <h2>TESTIMONIALS</h2>
        </div>
    </div>
    <div class="testimonial">
        <div class="l-container">
            <div class="testimonial-inner">
                <div class="swiper-container" id="js-testimonial-slider">
                    <div class="swiper-wrapper">
                        <?php foreach($testimonials as $testimonial): ?>
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <div class="testimonial-inner">
                                    <blockquote>
                                        <p><?php echo $testimonial['title']; ?></p>
                                    </blockquote>
                                    <div class="testimonial-content">
                                        <span class="testimonial-name"><?php echo $testimonial['name']; ?></span>
                                        <div class="testimonial-job"><?php echo $testimonial['job']; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <a href="#" class="testimonial-button testimonial-button-prev">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a href="#" class="testimonial-button testimonial-button-next">
                    <i class="fas fa-chevron-right"></i>
                </a>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>