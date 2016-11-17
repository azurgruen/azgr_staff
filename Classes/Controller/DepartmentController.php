<?php
namespace Azurgruen\AzgrStaff\Controller;

/***
 *
 * This file is part of the "Mitarbeiter" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016
 *
 ***/

/**
 * DepartmentController
 */
class DepartmentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
	
	/**
     * staffRepository
     *
     * @var \Azurgruen\AzgrStaff\Domain\Repository\DepartmentRepository
     * @inject
     */
    protected $departmentRepository = null;
	
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $departments = $this->departmentRepository->findAll();
        $this->view->assign('departments', $departments);
    }
    
    /**
     * action tabs
     *
     * @return void
     */
    public function tabsAction()
    {
        $query = $this->departmentRepository->createQuery();
	    if (!empty($this->settings['staff'])) {
	        $query->matching(
		        $query->equals('staff', $this->settings['staff'])
	        );
	    }
	    $query->setOrderings(['name' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING]);
	    $departments = $query->execute();
	    //$members = $this->memberRepository->findAll();
        //$members = $this->memberRepository->findByFirstName('Anton');
        //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->settings);
        $this->view->assign('departments', $departments);
    }
}
