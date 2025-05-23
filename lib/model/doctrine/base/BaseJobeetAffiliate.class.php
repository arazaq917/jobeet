<?php

/**
 * BaseJobeetAffiliate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $url
 * @property string $email
 * @property string $token
 * @property boolean $is_active
 * @property Doctrine_Collection $JobeetCategories
 * @property Doctrine_Collection $CategoryAffiliates
 * 
 * @method string              geturl()                Returns the current record's "url" value
 * @method string              getemail()              Returns the current record's "email" value
 * @method string              gettoken()              Returns the current record's "token" value
 * @method boolean             getis_active()          Returns the current record's "is_active" value
 * @method Doctrine_Collection getJobeetCategories()   Returns the current record's "JobeetCategories" collection
 * @method Doctrine_Collection getCategoryAffiliates() Returns the current record's "CategoryAffiliates" collection
 * @method JobeetAffiliate     seturl()                Sets the current record's "url" value
 * @method JobeetAffiliate     setemail()              Sets the current record's "email" value
 * @method JobeetAffiliate     settoken()              Sets the current record's "token" value
 * @method JobeetAffiliate     setis_active()          Sets the current record's "is_active" value
 * @method JobeetAffiliate     setJobeetCategories()   Sets the current record's "JobeetCategories" collection
 * @method JobeetAffiliate     setCategoryAffiliates() Sets the current record's "CategoryAffiliates" collection
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobeetAffiliate extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('jobeet_affiliate');
        $this->hasColumn('url', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('token', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 0,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('JobeetCategory as JobeetCategories', array(
             'refClass' => 'JobeetCategoryAffiliate',
             'local' => 'affiliate_id',
             'foreign' => 'category_id'));

        $this->hasMany('JobeetCategoryAffiliate as CategoryAffiliates', array(
             'local' => 'id',
             'foreign' => 'affiliate_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}