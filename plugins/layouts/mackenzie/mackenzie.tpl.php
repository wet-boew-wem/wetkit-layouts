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
<div class="panel-display mackenzie clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <div id="wb-main" role="main">
    <div id="wb-main-in">
      <div class="region-mackenzie-header span-8 margin-top-small">
        <div class="region-inner clearfix">
          <?php print $content['mackenzie_header']; ?>
        </div>
      </div>
      <div class="span-2 float-right margin-bottom-none">
        <div class="region-inner clearfix">
          <?php print $content['mackenzie_sidebar_first']; ?>
        </div>
      </div>
      <div class="span-6 margin-top-none margin-bottom-medium">
        <div class="span-6 margin-top-none margin-bottom-medium">
          <div class="region-inner clearfix">
            <?php print $content['mackenzie_banner_top']; ?>
          </div>
        </div>
        <div class="span-6 equalize indent-none">
          <div class="span-2 row-start">
            <?php print $content['mackenzie_section_first']; ?>
          </div>
          <div class="span-2">
            <?php print $content['mackenzie_section_second']; ?>
          </div>
          <div class="span-2 row-end">
            <?php print $content['mackenzie_section_third']; ?>
          </div>
        </div>
        <div class="span-6 equalize indent-none">
          <div class="span-2 row-start">
            <?php print $content['mackenzie_section_fourth']; ?>
            </div>
          <div class="span-2">
            <?php print $content['mackenzie_section_fifth']; ?>
          </div>
          <div class="span-2 row-end">
            <?php print $content['mackenzie_section_sixth']; ?>
          </div>
        </div>
        <div class="span-6">
          <div class="region-inner clearfix">
            <?php print $content['mackenzie_banner_bottom']; ?>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="span-8">
        <div class="region-inner clearfix">
          <?php print $content['mackenzie_footer']; ?>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php print $panel_suffix; ?>
