<dl class="qa--container">  
<dt class="qa-question" data-show-icon="<?php echo $attributes['show_icon']; ?>" data-hide-icon="<?php echo $attributes['hide_icon']; ?>">
    <span class="<?php echo $attributes['show_icon']; ?>" aria-hidden="true"><span class="screen-reader-text">Click here to reveal text</span></span><?php echo esc_html_e($attributes['question']); ?>
</dt>
<dd class="qa-answer" style="display: none;"><?php echo $hidden_content; ?></dd>
</dl>