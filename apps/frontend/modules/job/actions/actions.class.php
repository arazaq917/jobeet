<?php

/**
 * job actions.
 *
 * @package    symfony-1.4.6-template
 * @subpackage job
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->jobeet_jobs = Doctrine::getTable('JobeetJob')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->job = Doctrine::getTable('JobeetJob')-> find($request->getParameter('id'));
    $this->forward404Unless($this->job);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new JobeetJobForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new JobeetJobForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($jobeetjob = Doctrine::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object jobeetjob does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetJobForm($jobeetjob);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($jobeetjob = Doctrine::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object jobeetjob does not exist (%s).', $request->getParameter('id')));
    $this->form = new JobeetJobForm($jobeetjob);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($jobeetjob = Doctrine::getTable('JobeetJob')->find(array($request->getParameter('id'))), sprintf('Object jobeetjob does not exist (%s).', $request->getParameter('id')));
    $jobeetjob->delete();

    $this->redirect('job/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $jobeetjob = $form->save();

      $this->redirect('job/edit?id='.$jobeetjob->getid());
    }
  }
}