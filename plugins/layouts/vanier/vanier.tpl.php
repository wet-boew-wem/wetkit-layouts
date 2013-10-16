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
  <div class="region-vanier-top span-8">
      <?php print $content['vanier_top']; ?>
  </div>
  <div class="clear"></div>
  <?php endif; ?>
  <div id="wb-main" role="main">
    <div id="wb-main-in">
      <div class="grid-12">
        <div class="region-vanier-content-banner span-8">
            <?php print $content['vanier_content_banner']; ?>
        </div>
        <div class="region-vanier-content-listings span-4">
            <?php print $content['vanier_content_listings']; ?>
        </div>
        <div class="clear"></div>
        <div class="region-vanier-spotlight-1 span-4">
            <?php print $content['vanier_spotlight_1']; ?>
        </div>
        <div class="region-vanier-spotlight-2 span-4">
            <?php print $content['vanier_spotlight_2']; ?>
        </div>
        <div class="region-vanier-spotlight-3 span-4">
            <?php print $content['vanier_spotlight_3']; ?>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <?php if ($content['vanier_bottom']): ?>
  <div class="region-vanier-bottom span-8">
      <?php print $content['vanier_bottom']; ?>
  </div>
  <div class="clear"></div>
  <?php endif; ?>
</div>
<?php print $panel_suffix; ?>
