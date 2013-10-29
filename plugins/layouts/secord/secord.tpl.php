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
<div class="panel-display secord clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <div id="wb-main" role="main">
    <div id="wb-main-in">
      <div class="grid-12">
        <div class="region-secord-top-left span-8 margin-bottom-none">
          <div class="region-inner clearfix">
            <?php print $content['secord_top_left']; ?>
          </div>
        </div>
        <div class="span-4">
          <div class="region-secord-top-right-2 span-4 margin-bottom-none">
            <div class="region-inner clearfix">
              <?php print $content['secord_top_right_1']; ?>
            </div>
          </div>
        </div>
        <div class="clear"></div>
        <div class="wb-wrapper-content">
          <div class="equalize">
            <div class="region-secord-mid-left span-4 margin-bottom-large">
              <div class="region-inner clearfix">
                <?php print $content['secord_mid_left']; ?>
              </div>
            </div>
            <div class="region-secord-mid-center span-4 margin-bottom-large">
              <div class="region-inner clearfix">
                <?php print $content['secord_mid_center']; ?>
              </div>
            </div>
            <div class="region-secord-mid-right span-4 margin-bottom-large">
              <div class="region-inner clearfix">
                <?php print $content['secord_mid_right']; ?>
              </div>
            </div>
          </div>
          <div class="clear"></div>
          <div class="region-secord-bottom-left span-4 margin-bottom-none">
            <div class="region-inner clearfix">
              <?php print $content['secord_bottom_left']; ?>
            </div>
          </div>
          <div class="region-secord-bottom-center span-4 margin-bottom-none">
            <div class="region-inner clearfix">
              <?php print $content['secord_bottom_center']; ?>
            </div>
          </div>
          <div class="region-secord-bottom-right span-4 margin-bottom-none">
            <div class="region-inner clearfix">
              <?php print $content['secord_bottom_right']; ?>
            </div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php print $panel_suffix; ?>
