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
<div class="panel-display pearson clearfix" <?php if (!empty($css_id)): print "id=\"$css_id\""; endif; ?>>
  <?php if ($content['pearson_top']): ?>
  <div class="region-pearson-top span-8">
    <div class="region-inner clearfix">
      <?php print $content['pearson_top']; ?>
    </div>
  </div>
  <div class="clear"></div>
  <?php endif; ?>
  <div id="wb-main" role="main">
    <div id="wb-main-in">
      <div class="region-pearson-first">
        <div class="region-inner clearfix">
          <?php print $content['pearson_first']; ?>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div id="wb-sec">
    <div id="wb-sec-in">
      <div class="region-pearson-second">
        <div class="region-inner clearfix">
          <nav role="navigation">
            <h2 id="wb-side-nav"><?php print t('Secondary Menu'); ?></h2>
            <?php if ($content['pearson_second']): ?>
              <div class="wb-sec-def">
                <?php print $content['pearson_second']; ?>
              </div>
            <?php endif; ?>
            <?php if ($content['pearson_third']): ?>
              <div class="wb-sec-def-other">
                <?php print $content['pearson_third']; ?>
              </div>
            <?php endif; ?>

          </nav>
        </div>
      </div>
    </div>
  </div>
  <?php if ($content['pearson_bottom']): ?>
  <div class="region-pearson-bottom span-8">
    <div class="region-inner clearfix">
      <?php print $content['pearson_bottom']; ?>
    </div>
  </div>
  <div class="clear"></div>
  <?php endif; ?>
</div>
<?php print $panel_suffix; ?>
