<?php
namespace Azurgruen\AzgrStaff\Domain\Model;

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
 * Department
 */
class Department extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * staff
     *
     * @var \Azurgruen\AzgrStaff\Domain\Model\Staff
     */
    protected $staff = null;

    /**
     * member
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Azurgruen\AzgrStaff\Domain\Model\Member>
     */
    protected $member = null;

    /**
     * Returns the name
     *
     * @return string name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the staff
     *
     * @return \Azurgruen\AzgrStaff\Domain\Model\Staff $staff
     */
    public function getStaff()
    {
        return $this->staff;
    }

    /**
     * Sets the staff
     *
     * @param \Azurgruen\AzgrStaff\Domain\Model\Staff $staff
     * @return void
     */
    public function setStaff(\Azurgruen\AzgrStaff\Domain\Model\Staff $staff)
    {
        $this->staff = $staff;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->member = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Member
     *
     * @param \Azurgruen\AzgrStaff\Domain\Model\Member $member
     * @return void
     */
    public function addMember(\Azurgruen\AzgrStaff\Domain\Model\Member $member)
    {
        $this->member->attach($member);
    }

    /**
     * Removes a Member
     *
     * @param \Azurgruen\AzgrStaff\Domain\Model\Member $memberToRemove The Member to be removed
     * @return void
     */
    public function removeMember(\Azurgruen\AzgrStaff\Domain\Model\Member $memberToRemove)
    {
        $this->member->detach($memberToRemove);
    }

    /**
     * Returns the member
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Azurgruen\AzgrStaff\Domain\Model\Member> $member
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Sets the member
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Azurgruen\AzgrStaff\Domain\Model\Member> $member
     * @return void
     */
    public function setMember(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $member)
    {
        $this->member = $member;
    }
}
