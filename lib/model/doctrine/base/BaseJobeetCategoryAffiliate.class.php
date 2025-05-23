<?php

/**
 * BaseJobeetCategoryAffiliate
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property integer $affiliate_id
 * @property JobeetCategory $JobeetCategory
 * @property JobeetAffiliate $JobeetAffiliate
 * 
 * @method integer                 getcategory_id()     Returns the current record's "category_id" value
 * @method integer                 getaffiliate_id()    Returns the current record's "affiliate_id" value
 * @method JobeetCategory          getJobeetCategory()  Returns the current record's "JobeetCategory" value
 * @method JobeetAffiliate         getJobeetAffiliate() Returns the current record's "JobeetAffiliate" value
 * @method JobeetCategoryAffiliate setcategory_id()     Sets the current record's "category_id" value
 * @method JobeetCategoryAffiliate setaffiliate_id()    Sets the current record's "affiliate_id" value
 * @method JobeetCategoryAffiliate setJobeetCategory()  Sets the current record's "JobeetCategory" value
 * @method JobeetCategoryAffiliate setJobeetAffiliate() Sets the current record's "JobeetAffiliate" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobeetCategoryAffiliate extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('jobeet_category_affiliate');
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('affiliate_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('JobeetCategory', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'foreignKeyName' => 'category_affiliate_category_fk'));

        $this->hasOne('JobeetAffiliate', array(
             'local' => 'affiliate_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'foreignKeyName' => 'category_affiliate_affiliate_fk'));
    }
}