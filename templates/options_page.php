<div class="wrap">
<?php $option = get_option("epages_api_url_confirmed"  , 'epages') ?>
<?php if (( $option !== "epages") && (!empty($option))) { ?>
  <div class="wrap">
    <div class="epages-verified-shop-text"><i class="fa fa-check-circle fa-4x"></i><span><b>
      <?php _e('Congratulations! Your online shop is now connected to your WordPress website.' , 'epages'); ?></b></span></div>
  </div>
  <br>
  <p><?php _e('You can now add your online shop to any WordPress page or post. Just click <strong>Add shop to the page</strong>.'  , 'epages'); ?><br>
  <?php _e('Now click <strong>Edit shop</strong> to edit the product and appearance settings for your shop for this page or post. You can change these settings at any time.'  , 'epages'); ?></p>
  <p><strong><?php _e('Have a question? Visit our ', 'epages') ?><a href="<?php _e('https://www.online-help-center.com/customer/portal/articles/2561815-how-do-i-use-the-wordpress-plugin-', 'epages') ?>" target=\"_blank\"><?php _e('Help Centre', 'epages') ?></a></strong></p>

  <div id="setting-error-tgmpa" class="updated settings-error notice">
  <h4><strong> <?php _e('Your API URL is: ' , 'epages'); ?> <em><?php echo get_option("epages_api_url" , 'epages') ?></b></em></strong></h4>
  <p><strong><a target="_blank" href="<?php echo get_option("epages_mbo_url") ?>"><?php _e('To shop administration' , 'epages'); ?></a>
    | <a class="dismiss-notice" href="/wp-admin/edit.php?post_type=page" target="_parent"><?php _e('Add shop to the page' , 'epages'); ?></a></strong></p><p></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>
  <div class="md-8 pull-right">
  <form method="post" action="options.php">
    <?php settings_fields("epages_options_page"); ?>
    <input type="hidden" name="epages_api_url" value="">
    <input type="hidden" name="epages_api_url_confirmed" value="0">
    <?php submit_button( __('Disconnect shop' , 'epages')) ?>
  </form>
</div></div>
<?php } else { ?>
  <h2><?php _e('Connect your online shop with the plugin.'  , 'epages'); ?></h2>
  <p><b><?php _e('There are just a few steps left to start selling on your Wordpress site.' , 'epages'); ?></b></p>
  <ol>
    <li>
      <b><a href="https://www.epages.com/" target="_blank"><?php _e('Create your free online shop' , 'epages'); ?></a></b>
      <?php _e('If you already have an ePages online shop, move on to the next step.' , 'epages'); ?>
    </li>
    <li><?php _e('Enter your API URL here. ' , 'epages'); ?><a href="<?php _e('http://www.epages.com/downloads/pdf/epages-wordpress-plugin-setup-EN.pdf', 'epages') ?>" target="_blank"><?php _e('Learn more' , 'epages'); ?></a> <?php _e('how to retrieve the URL.' , 'epages'); ?></li>
  </ol>


  <form method="post" action="options.php">
    <?php settings_fields("epages_options_page"); ?>
    <input type="text" name="epages_api_url" size=60
      value="<?php echo get_option("epages_api_url") ?>">

    <?php if ($shop_id_validated && !$valid_shop_id) { ?>
      <span class="epages-shop-form-failure"><?php _e('Invalid API URL' , 'epages'); ?></span>
    <?php } submit_button( __('Save' , 'epages')) ?>
  </form>

<?php } ?>
