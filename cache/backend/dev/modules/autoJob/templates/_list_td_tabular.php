<td class="sf_admin_text sf_admin_list_td_company">
  <?php echo $jobeetjob->getcompany() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_position">
  <?php echo link_to($jobeetjob->getposition(), 'jobeet_job_edit', $jobeetjob) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_location">
  <?php echo $jobeetjob->getlocation() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_url">
  <?php echo $jobeetjob->geturl() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_is_activated">
  <?php echo get_partial('job/list_field_boolean', array('value' => $jobeetjob->getis_activated())) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $jobeetjob->getemail() ?>
</td>
