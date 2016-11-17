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
 * MemberController
 */
class MemberController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * memberRepository
     *
     * @var \Azurgruen\AzgrStaff\Domain\Repository\MemberRepository
     * @inject
     */
    protected $memberRepository = null;
    
    /**
     * $staffRepository
     *
     * @var \Azurgruen\AzgrStaff\Domain\Repository\StaffRepository
     * @inject
     */
    protected $staffRepository = null;

    /**
     * action list
     *
     * @param Azurgruen\AzgrStaff\Domain\Model\Member
     * @return void
     */
    public function listAction()
    {
	    $query = $this->memberRepository->createQuery();
	    if (!empty($this->settings['staff']) && !empty($this->settings['department'])) {
		    $query->matching(
				$query->logicalAnd(
			        $query->equals('staff', $this->settings['staff']),
			        $query->contains('department', $this->settings['department'])
		        )
		    );
	    } elseif (!empty($this->settings['staff'])) {
	        $query->matching(
		        $query->equals('staff', $this->settings['staff'])
	        );
	    } elseif (!empty($this->settings['department'])) {
	        $query->matching(
		        $query->contains('department', $this->settings['department'])
	        );
	    }
		
	    $query->setOrderings(['last_name' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING]);
	    $members = $query->execute();
	    //$members = $this->memberRepository->findAll();
        //$members = $this->memberRepository->findByFirstName('Anton');
        //\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($this->settings);
        $this->view->assign('members', $members);
    }
    
    /**
     * action show
     *
     * @param Azurgruen\AzgrStaff\Domain\Model\Member
     * @return void
     */
    public function showAction(\Azurgruen\AzgrStaff\Domain\Model\Member $member)
    {
        $this->view->assign('member', $member);
    }
}
