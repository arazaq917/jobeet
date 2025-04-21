<table>
   <tbody>
     <tr>
       <th>Id:</th>
       <td><?php echo $jobeetjob->getid() ?></td>
     </tr>
     <tr>
       <th>Category:</th>
       <td><?php echo $jobeetjob->getcategory_id() ?></td>
     </tr>
     <tr>
       <th>Type:</th>
       <td><?php echo $jobeetjob->gettype() ?></td>
     </tr>
     <tr>
       <th>Company:</th>
       <td><?php echo $jobeetjob->getcompany() ?></td>
     </tr>
     <tr>
       <th>Logo:</th>
       <td><?php echo $jobeetjob->getlogo() ?></td>
     </tr>
     <tr>
       <th>Url:</th>
       <td><?php echo $jobeetjob->geturl() ?></td>
     </tr>
     <tr>
       <th>Position:</th>
       <td><?php echo $jobeetjob->getposition() ?></td>
     </tr>
     <tr>
       <th>Location:</th>
       <td><?php echo $jobeetjob->getlocation() ?></td>
     </tr>
     <tr>
       <th>Description:</th>
       <td><?php echo $jobeetjob->getdescription() ?></td>
     </tr>
     <tr>
       <th>How to apply:</th>
       <td><?php echo $jobeetjob->gethow_to_apply() ?></td>
     </tr>
     <tr>
       <th>Token:</th>
       <td><?php echo $jobeetjob->gettoken() ?></td>
     </tr>
     <tr>
       <th>Is public:</th>
       <td><?php echo $jobeetjob->getis_public() ?></td>
     </tr>
     <tr>
       <th>Is activated:</th>
       <td><?php echo $jobeetjob->getis_activated() ?></td>
     </tr>
     <tr>
       <th>Email:</th>
       <td><?php echo $jobeetjob->getemail() ?></td>
     </tr>
     <tr>
       <th>Expires at:</th>
       <td><?php echo $jobeetjob->getexpires_at() ?></td>
     </tr>
     <tr>
       <th>Created at:</th>
       <td><?php echo $jobeetjob->getcreated_at() ?></td>
     </tr>
     <tr>
       <th>Updated at:</th>
       <td><?php echo $jobeetjob->getupdated_at() ?></td>
     </tr>
   </tbody>
 </table>
 
 <hr />
 
 <a href="<?php echo url_for('job/edit?id='.$jobeetjob->getid()) ?>">Edit</a>
 &nbsp;
 <a href="<?php echo url_for('job/index') ?>">List</a>