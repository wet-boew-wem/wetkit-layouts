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
<div class="panel-display sutherland clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <div id="wb-main" role="main">
    <div id="wb-main-in">
      <?php if ($content['sutherland_top']): ?>
      <div class="region-sutherland-top span-8 margin-bottom-none">
        <div class="region-inner clearfix">
        <?php print $content['sutherland_top']; ?>
        </div>
      </div>
      <div class="clear"></div>
      <?php endif; ?>
      <div id="gcwu-content">
        <div class="region-sutherland-first span-3">
          <div class="region-inner clearfix">
            <?php print $content['sutherland_first']; ?>
          </div>
        </div>
        <div class="region-sutherland-second span-3">
          <div class="region-inner clearfix">
            <?php print $content['sutherland_second']; ?>
          </div>
        </div>
      </div>
      <div id="wb-aside" class="region-sutherland-third span-2">
        <div class="region-inner clearfix">
          <?php print $content['sutherland_third']; ?>
        </div>
      </div>
      <div class="clear"></div>
      <?php if ($content['sutherland_bottom']): ?>
      <div class="region-sutherland-bottom span-8 margin-bottom-none">
        <div class="region-inner clearfix">
          <?php print $content['sutherland_bottom']; ?>
        </div>
      </div>
      <div class="clear"></div>
      <?php endif; ?>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php print $panel_suffix; ?>
