<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($forest_main->getId(), 'forest_main_edit', $forest_main) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_type">
  <?php echo $forest_main->getType() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_company">
  <?php echo $forest_main->getCompany() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_logo">
  <?php echo $forest_main->getLogo() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_url">
  <?php echo $forest_main->getUrl() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_position">
  <?php echo $forest_main->getPosition() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_location">
  <?php echo $forest_main->getLocation() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $forest_main->getDescription() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_how_to_apply">
  <?php echo $forest_main->getHowToApply() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_token">
  <?php echo $forest_main->getToken() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_public">
  <?php echo get_partial('main/list_field_boolean', array('value' => $forest_main->getIsPublic())) ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_activated">
  <?php echo get_partial('main/list_field_boolean', array('value' => $forest_main->getIsActivated())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $forest_main->getEmail() ?>
</td>
