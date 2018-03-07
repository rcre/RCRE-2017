<form role="search" method="get" id="searchform" class="" action="<?php echo home_url( '/' ); ?>">
    <div>
        <label for="s" class="screen-reader-text"><?php _e('','bonestheme'); ?></label>
        <input type="search" id="s" name="s" value="" placeholder="Type your search here..." />

        <button type="submit" id="searchsubmit" class="cta-solid-green" ><?php _e('Search','bonestheme'); ?></button>
    </div>
</form>