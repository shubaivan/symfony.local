<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 18.11.14
 * Time: 11:35
 */

namespace Iphpsand\PhotoBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;

class PhotoAdmin extends Admin
{
    protected function configureListFields(ListMapper $listMapper)
    {
        return $listMapper->addIdentifier('title')->add ('date');
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        return $formMapper->add('title')->add ('date')->add('photo', 'iphp_file');
    }
}

