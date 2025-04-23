<td colspan="6">
  <?php echo __('%%is_activated%% <small>%%JobeetCategory%%</small> - %%company%% (<em>%%email%%</em>) is looking for a %%position%% (%%location%%)', array('%%is_activated%%' => get_partial('job/list_field_boolean', array('value' => $jobeetjob->getis_activated())), '%%JobeetCategory%%' => $jobeetjob->getJobeetCategory(), '%%company%%' => $jobeetjob->getcompany(), '%%email%%' => $jobeetjob->getemail(), '%%position%%' => link_to($jobeetjob->getposition(), 'jobeet_job_edit', $jobeetjob), '%%location%%' => $jobeetjob->getlocation()), 'messages') ?>
</td>
