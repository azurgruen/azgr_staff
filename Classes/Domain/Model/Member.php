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
 * Member
 */
class Member extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * firstName
     *
     * @var string
     */
    protected $firstName = '';

    /**
     * lastName
     *
     * @var string
     */
    protected $lastName = '';

    /**
     * jobtitle
     *
     * @var string
     */
    protected $jobtitle = '';

    /**
     * phone
     *
     * @var string
     */
    protected $phone = '';

    /**
     * email
     *
     * @var string
     */
    protected $email = '';

    /**
     * profilePicture
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $profilePicture = null;

    /**
     * staff
     *
     * @var \Azurgruen\AzgrStaff\Domain\Model\Staff
     */
    protected $staff = null;

    /**
     * department
     *
     * @var \Azurgruen\AzgrStaff\Domain\Model\Department
     */
    protected $department = null;

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

    }

    /**
     * Returns the firstName
     *
     * @return string firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets the firstName
     *
     * @param string $firstName
     * @return void
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns the lastName
     *
     * @return string lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets the lastName
     *
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns the jobtitle
     *
     * @return string jobtitle
     */
    public function getJobtitle()
    {
        return $this->jobtitle;
    }

    /**
     * Sets the jobtitle
     *
     * @param $jobtitle
     * @return string jobtitle
     * @return void
     */
    public function setJobtitle($jobtitle)
    {
        $this->jobtitle = $jobtitle;
    }

    /**
     * Returns the phone
     *
     * @return string phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets the phone
     *
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * Returns the profilePicture
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference profilePicture
     */
    public function getProfilePicture()
    {
        return $this->profilePicture;
    }

    /**
     * Sets the profilePicture
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $profilePicture
     * @return void
     */
    public function setProfilePicture(\TYPO3\CMS\Extbase\Domain\Model\FileReference $profilePicture)
    {
        $this->profilePicture = $profilePicture;
    }

    /**
     * Returns the staff
     *
     * @return \Azurgruen\AzgrStaff\Domain\Model\Staff staff
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
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the department
     *
     * @return \Azurgruen\AzgrStaff\Domain\Model\Department $department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets the department
     *
     * @param \Azurgruen\AzgrStaff\Domain\Model\Department $department
     * @return void
     */
    public function setDepartment(\Azurgruen\AzgrStaff\Domain\Model\Department $department)
    {
        $this->department = $department;
    }
}
