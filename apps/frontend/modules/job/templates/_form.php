<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('job/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getid() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
  <input type="hidden" name="sf_method" value="PUT" />
<?php endif; ?>

<?php echo link_to(
  'Delete',
  'job/delete?id='.$form->getObject()->getId(),
  array('method' => 'delete', 'confirm' => 'Are you sure?')
) ?>

   <table>
     <tfoot>
       <tr>
         <td colspan="2">
           &nbsp;<a href="<?php echo url_for('job/index') ?>">Back to list</a>
           <?php if (!$form->getObject()->isNew()): ?>
             &nbsp;<?php echo link_to('Delete', 'job/delete?id='.$form->getObject()->getid(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
           <?php endif; ?>
           <input type="submit" value="Save" />
         </td>
       </tr>
     </tfoot>
     <tbody>
       <?php echo $form ?>
     </tbody>
   </table>
 </form>
