<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>


<?php if ($tabs): ?>
  <div class="tabs">
    <?php print render($tabs); ?>
  </div>
<?php endif; ?>
<?php if ($action_links): ?>
  <ul class="action-links">
    <?php print render($action_links); ?>
  </ul>
<?php endif; ?>

<div id="content" class="default">
  <?php print render($page['content']); ?>
</div>
