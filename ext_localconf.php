<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Azurgruen.AzgrStaff',
            'Team',
            [
                'Staff' => 'get',
                'Member' => 'list, show',
                'Department' => 'list, tabs'
            ],
            // non-cacheable actions
            [
                'Staff' => '',
                'Member' => '',
                'Department' => ''
            ]
        );
        
        // Register for hook to show preview of tt_content element of CType="yourextensionkey_newcontentelement" in page module
		$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem'][$pluginSignature] =		   \Azurgruen\AzgrStaff\Hooks\CustomPageLayoutView::class;

    },
    $_EXTKEY
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder