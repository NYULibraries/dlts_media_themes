<?php if (!empty($pre_object)) print render($pre_object) ?>
  <?php if (!empty($content)): ?><?php print render($content) ?><?php endif; ?>
<?php if (!empty($post_object)) print render($post_object) ?>
