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
<div class="panel-display riel clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['riel_top']): ?>
  <div class="region-riel-top span-8">
    <div class="region-inner clearfix">
      <?php print $content['riel_top']; ?>
    </div>
  </div>
  <div class="clear"></div>
  <?php endif; ?>
  <div id="wb-main" role="main">
    <div id="wb-main-in">
       <div class="region-riel-first span-6 margin-bottom-none">
         <div class="region-inner clearfix">
           <?php print $content['riel_first']; ?>
         </div>
       </div>
       <div class="region-riel-second span-2 margin-bottom-none">
         <div class="region-inner clearfix">
           <?php print $content['riel_second']; ?>
         </div>
       </div>
       <div class="clear"></div>
    </div>
  </div>
  <?php if ($content['riel_bottom']): ?>
  <div class="region-riel-bottom span-8">
    <div class="region-inner clearfix">
      <?php print $content['riel_bottom']; ?>
    </div>
  </div>
  <div class="clear"></div>
  <?php endif; ?>
</div>
<?php print $panel_suffix; ?>
