<?php
get_header();
?>

<div class="contact prefooter">
    <div class="prefooter--atropos atropos">
            <div class="atropos-scale">
                <div class="atropos-rotate">
                    <div class="atropos-inner">
                        <div class="container">
                            <h3 class="prefooter-title" data-atropos-offset="2">Wanna play?</h3>
                        </div>
                        <div class="container">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/prefooter-img.png" alt="" class="prefooter-img" loading="lazy" data-atropos-offset="2">
                            <div class="prefooter-content" data-atropos-offset="6">
                                <?php echo do_shortcode('[ninja_form id=1]'); ?>
                                <!-- <form action="#" data-atropos-offset="6">
                                    <h4 class="prefooter-form-label" data-atropos-offset="6">hit us up.</h4>
                                    <div>
                                        <label for="name">Name:</label>
                                        <input type="text" name="name" id="name">
                                    </div>
                                    <div>
                                        <label for="email">Email:</label>
                                        <input type="email" name="email" id="email">
                                    </div>
                                    <div>
                                        <label for="subject">Subject:</label>
                                        <input type="text" name="subject" id="subject">
                                    </div>
                                    <div>
                                        <label for="message">Message:</label>
                                        <textarea name="message" id="message"></textarea>
                                    </div>
                                    <div>
                                        <input type="submit" value="Send">
                                    </div>
                                </form> -->
                            </div>
                        </div>
                        <div class="stripes">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/stripes-green.png" alt="" loading="lazy">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/stripes-green.png" alt="" loading="lazy">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/stripes-green.png" alt="" loading="lazy">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/stripes-green.png" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
