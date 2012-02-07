<?php use_helper('I18N', 'Date') ?>
<?php include_partial('main/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Main', array(), 'messages') ?></h1>

  <?php include_partial('main/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('main/form_header', array('forest_main' => $forest_main, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('main/form', array('forest_main' => $forest_main, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('main/form_footer', array('forest_main' => $forest_main, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
