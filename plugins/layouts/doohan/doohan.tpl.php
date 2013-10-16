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
<div class="panel-display doohan clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['doohan_top']): ?>
  <div class="region-doohan-top span-8">
    <div class="region-inner clearfix">
      <?php print $content['doohan_top']; ?>
    </div>
  </div>
  <div class="clear"></div>
  <?php endif; ?>
  <div id="wb-main" role="main">
    <div id="wb-main-in">
      <div class="region-doohan-first span-6">
        <div class="region-inner clearfix">
          <?php print $content['doohan_first']; ?>
        </div>
      </div>
      <div class="clear"></div>
      <div class="region-doohan-second span-4">
        <div class="region-inner clearfix">
          <?php print $content['doohan_second']; ?>
        </div>
      </div>
      <div class="region-doohan-third span-2">
        <div class="region-inner clearfix">
          <?php print $content['doohan_third']; ?>
        </div>
      </div>
      <div class="clear"></div>
      <div class="region-doohan-content-footer span-6">
        <div class="region-inner clearfix">
          <?php print $content['doohan_content_footer']; ?>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div id="wb-sec">
    <div id="wb-sec-in">
      <div class="region-doohan-third span-2 row-start">
        <div class="region-inner clearfix">
          <nav role="navigation">
            <h2 id="wb-side-nav"><?php print t('Secondary Menu'); ?></h2>
            <div class="wb-sec-def">
              <?php print $content['doohan_fourth']; ?>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <?php if ($content['doohan_bottom']): ?>
  <div class="region-doohan-bottom span-8">
    <div class="region-inner clearfix">
      <?php print $content['doohan_bottom']; ?>
    </div>
  </div>
  <div class="clear"></div>
  <?php endif; ?>
</div>
<?php print $panel_suffix; ?>
