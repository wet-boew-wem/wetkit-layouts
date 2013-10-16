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
<div id="wb-main" role="main">
  <div id="wb-main-in">
    <?php print $panel_prefix; ?>
    <div class="panel-display payette clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
      <div class="grid-12">
        <div class="region-payette-top-left span-8 margin-bottom-none">
          <div class="region-inner clearfix">
            <?php print $content['payette_top_left']; ?>
          </div>
        </div>
        <div class="region-payette-top-right span-4 margin-bottom-none">
          <div class="region-inner clearfix">
            <?php print $content['payette_top_right']; ?>
          </div>
        </div>
        <div class="clear"></div>
        <div class="region-payette-mid-left span-4 margin-bottom-none">
          <div class="region-inner clearfix">
            <?php print $content['payette_mid_left']; ?>
          </div>
        </div>
        <div class="region-payette-mid-center span-4 margin-bottom-none">
          <div class="region-inner clearfix">
            <?php print $content['payette_mid_center']; ?>
          </div>
        </div>
        <div class="region-payette-mid-right span-4 margin-bottom-none">
          <div class="region-inner clearfix">
            <?php print $content['payette_mid_right']; ?>
          </div>
        </div>
        <div class="clear"></div>
        <div class="region-payette-bottom-left span-4 margin-bottom-none">
          <div class="region-inner clearfix">
            <?php print $content['payette_bottom_left']; ?>
          </div>
        </div>
        <div class="region-payette-bottom-center span-4 margin-bottom-none">
          <div class="region-inner clearfix">
            <?php print $content['payette_bottom_center']; ?>
          </div>
        </div>
        <div class="region-payette-bottom-right span-4 margin-bottom-none">
          <div class="region-inner clearfix">
            <?php print $content['payette_bottom_right']; ?>
          </div>
        </div>
        <div class="clear"></div>
      </div>
  </div>
  <?php print $panel_suffix; ?>
  <div class="clear"></div>
</div>
