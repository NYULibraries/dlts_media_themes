<?php if (!empty($pre_object)) print render($pre_object) ?>
<?php if (!empty($title_prefix)) print render($title_prefix); ?>
<?php if (!empty($title)): ?>
  <h2 <?php if (!empty($title_attributes)) print $title_attributes ?>>
    <?php if (!empty($new)): ?><span class='new'><?php print $new ?></span><?php endif; ?>
    <?php print $title ?>
  </h2>
<?php endif; ?>
<?php if (!empty($title_suffix)) print render($title_suffix); ?>
<?php if (!empty($content)): ?><?php print render($content) ?><?php endif; ?>
<?php if (!empty($post_object)) print render($post_object) ?>