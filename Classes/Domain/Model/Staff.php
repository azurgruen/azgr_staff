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
 * Staff
 */
class Staff extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * phoneBase
     *
     * @var string
     */
    protected $phoneBase = '';

    /**
     * mailDomain
     *
     * @var string
     */
    protected $mailDomain = '';

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
     * Returns the phoneBase
     *
     * @return string $phoneBase
     */
    public function getPhoneBase()
    {
        return $this->phoneBase;
    }

    /**
     * Sets the phoneBase
     *
     * @param string $phoneBase
     * @return void
     */
    public function setPhoneBase($phoneBase)
    {
        $this->phoneBase = $phoneBase;
    }

    /**
     * Returns the mailDomain
     *
     * @return string $mailDomain
     */
    public function getMailDomain()
    {
        return $this->mailDomain;
    }

    /**
     * Sets the mailDomain
     *
     * @param string $mailDomain
     * @return void
     */
    public function setMailDomain($mailDomain)
    {
        $this->mailDomain = $mailDomain;
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

    }
}
