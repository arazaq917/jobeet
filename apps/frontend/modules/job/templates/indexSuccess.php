<h1>Jobeet jobs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>Type</th>
      <th>Company</th>
      <th>Logo</th>
      <th>Url</th>
      <th>Position</th>
      <th>Location</th>
      <th>Description</th>
      <th>How to apply</th>
      <th>Token</th>
      <th>Is public</th>
      <th>Is activated</th>
      <th>Email</th>
      <th>Expires at</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
     <?php foreach ($jobeetjobs as $jobeetjob): ?>
     <tr>
       <td><a href="<?php echo url_for('job/show?id='.$jobeetjob->getid()) ?>"><?php echo $jobeetjob->getid() ?></a></td>
       <td><?php echo $jobeetjob->getcategory_id() ?></td>
       <td><?php echo $jobeetjob->gettype() ?></td>
       <td><?php echo $jobeetjob->getcompany() ?></td>
       <td><?php echo $jobeetjob->getlogo() ?></td>
       <td><?php echo $jobeetjob->geturl() ?></td>
       <td><?php echo $jobeetjob->getposition() ?></td>
       <td><?php echo $jobeetjob->getlocation() ?></td>
       <td><?php echo $jobeetjob->getdescription() ?></td>
       <td><?php echo $jobeetjob->gethow_to_apply() ?></td>
       <td><?php echo $jobeetjob->gettoken() ?></td>
       <td><?php echo $jobeetjob->getis_public() ?></td>
       <td><?php echo $jobeetjob->getis_activated() ?></td>
       <td><?php echo $jobeetjob->getemail() ?></td>
       <td><?php echo $jobeetjob->getexpires_at() ?></td>
       <td><?php echo $jobeetjob->getcreated_at() ?></td>
       <td><?php echo $jobeetjob->getupdated_at() ?></td>
     </tr>
     <?php endforeach; ?>
   </tbody>
</table>

  <a href="<?php echo url_for('job/new') ?>">New</a>
