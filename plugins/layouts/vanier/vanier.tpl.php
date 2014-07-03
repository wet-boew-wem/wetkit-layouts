<?php
/**
 * @file
 * Implementation to present a Panels based layout.
 *
 * Available variables:
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout.
 * - $css_id: unique id if present.
 * - $panel_prefix: prints a wrapper when this template is used in a context,
 *   such as when rendered by Display Suite or other module.
 * - $panel_suffix: closing element for the $prefix.
 */
$panel_prefix = isset($panel_prefix) ? $panel_prefix : '';
$panel_suffix = isset($panel_suffix) ? $panel_suffix : '';
?>
<?php print $panel_prefix; ?>
<div class="panel-display vanier clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['vanier_top']): ?>
  <div class="region-vanier-top">
      <?php print $content['vanier_top']; ?>
  </div>
  <?php endif; ?>

      <div class="row">
        <?php if ($content['vanier_content_banner']): ?>
        <div class="region-vanier-content-banner col-md-8">
            <?php print $content['vanier_content_banner']; ?>
        </div>
        <?php endif; ?>
        <?php if ($content['vanier_content_listings']): ?>
        <div class="region-vanier-content-listings col-md-4">
            <?php print $content['vanier_content_listings']; ?>
        </div>
        <?php endif; ?>
      </div>
      <div class="row">
        <?php if ($content['vanier_spotlight_1']): ?>
        <div class="region-vanier-spotlight-1 col-md-4">
            <?php print $content['vanier_spotlight_1']; ?>
        </div>
        <?php endif; ?>
        <?php if ($content['vanier_spotlight_2']): ?>
        <div class="region-vanier-spotlight-2 col-md-4">
            <?php print $content['vanier_spotlight_2']; ?>
        </div>
        <?php endif; ?>
        <?php if ($content['vanier_spotlight_3']): ?>
        <div class="region-vanier-spotlight-3 col-md-4">
            <?php print $content['vanier_spotlight_3']; ?>
        </div>
        <?php endif; ?>
      </div>

  <?php if ($content['vanier_bottom']): ?>
  <div class="region-vanier-bottom">
      <?php print $content['vanier_bottom']; ?>
  </div>
  <?php endif; ?>
</div>
<?php print $panel_suffix; ?>
