<div class="footer-col">
  <h4><?= e($title); ?> &mdash;</h4>
  <?php foreach ($links as $link): ?>
    <?php
      $label = is_array($link) ? ($link['label'] ?? '') : $link;
      $href = is_array($link) ? ($link['href'] ?? '#') : '#';
      $target = is_array($link) && !empty($link['external']) ? ' target="_blank" rel="noopener noreferrer"' : '';
    ?>
    <a href="<?= e($href); ?>"<?= $target; ?>><?= e($label); ?></a>
  <?php endforeach; ?>
</div>