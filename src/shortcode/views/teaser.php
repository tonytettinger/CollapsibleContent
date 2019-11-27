<div class="teaser--container">  
<div class="teaser--visible-message" data-show-icon="<?php echo $attributes['show_icon']; ?>" data-hide-icon="<?php echo $attributes['hide_icon']; ?>">
    <span class="<?php echo $attributes['show_icon']; ?>" aria-hidden="true"><span class="screen-reader-text">Click here to reveal text</span></span><?php echo esc_html_e($attributes['question']); ?>
</div>
<div class="teaser--hidden-content" style="display: none;"><?php echo $hidden_content; ?></div>
</div>