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
 * StaffController
 */
class StaffController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * staffRepository
     *
     * @var \Azurgruen\AzgrStaff\Domain\Repository\StaffRepository
     * @inject
     */
    protected $staffRepository = null;

    /**
     * action get
     *
     * @return void
     */
    public function getAction()
    {

    }
}
