<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Azurgruen.AzgrStaff',
            'Team',
            'Mitarbeiter'
        );

        $pluginSignature = str_replace('_', '', $extKey) . '_team';
        
        $GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses']['AzgrStaffWizicon'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($extKey) . 'Classes/Helper/AzgrStaffWizicon.php';
        
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$pluginSignature] = 'layout,select_key,recursive';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $extKey . '/Configuration/FlexForms/flexform_team.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, 'Configuration/TypoScript', 'Mitarbeiter');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_azgrstaff_domain_model_staff', 'EXT:azgr_staff/Resources/Private/Language/locallang_csh_tx_azgrstaff_domain_model_staff.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_azgrstaff_domain_model_staff');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_azgrstaff_domain_model_member', 'EXT:azgr_staff/Resources/Private/Language/locallang_csh_tx_azgrstaff_domain_model_member.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_azgrstaff_domain_model_member');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_azgrstaff_domain_model_department', 'EXT:azgr_staff/Resources/Private/Language/locallang_csh_tx_azgrstaff_domain_model_department.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_azgrstaff_domain_model_department');

    },
    $_EXTKEY
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder