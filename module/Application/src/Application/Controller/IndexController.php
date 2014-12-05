<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Entity\User;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    /**
     * @return ViewModel
     */
    public function indexAction()
    {
        $objectManager = $this
            ->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');

        $user = new User();
        $user->fullName = 'Marco Pivetta';

        $objectManager->persist($user);
        $objectManager->flush();

        $repo = $objectManager->getRepository('Application\Entity\User');
        $user2 = $repo->findOneByFullName('Marco Pivetta');
        
        var_dump($user2);
        die(var_dump($user->id));

        return new ViewModel();
    }
}
