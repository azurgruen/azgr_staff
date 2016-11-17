<?php
return [
    'ctrl' => [
        'title'	=> 'LLL:EXT:azgr_staff/Resources/Private/Language/locallang_db.xlf:tx_azgrstaff_domain_model_member',
        'label' => 'last_name',
        'label_alt' => 'first_name',
        'label_alt_force' => true,
        'default_sortby' => 'ORDER BY last_name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => 1,
		'versioningWS' => 2,
        'versioning_followPages' => true,

        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
        'enablecolumns' => [
			'disabled' => 'hidden',
			'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'first_name,last_name,jobtitle,phone,email,profile_picture,staff,department,',
        'iconfile' => 'EXT:azgr_staff/Resources/Public/Icons/member.png'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, first_name, last_name, jobtitle, phone, email, profile_picture, staff, department',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, first_name, last_name, jobtitle, phone, email, profile_picture, staff, department, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages'
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_azgrstaff_domain_model_member',
                'foreign_table_where' => 'AND tx_azgrstaff_domain_model_member.pid=###CURRENT_PID### AND tx_azgrstaff_domain_model_member.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],
        'endtime' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => [
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ],
            ],
        ],

	    'first_name' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_staff/Resources/Private/Language/locallang_db.xlf:tx_azgrstaff_domain_model_member.first_name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'last_name' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_staff/Resources/Private/Language/locallang_db.xlf:tx_azgrstaff_domain_model_member.last_name',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'jobtitle' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_staff/Resources/Private/Language/locallang_db.xlf:tx_azgrstaff_domain_model_member.jobtitle',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'phone' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_staff/Resources/Private/Language/locallang_db.xlf:tx_azgrstaff_domain_model_member.phone',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'email' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_staff/Resources/Private/Language/locallang_db.xlf:tx_azgrstaff_domain_model_member.email',
	        'config' => [
			    'type' => 'input',
			    'size' => 30,
			    'eval' => 'trim'
			],
	        
	    ],
	    'profile_picture' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_staff/Resources/Private/Language/locallang_db.xlf:tx_azgrstaff_domain_model_member.profile_picture',
	        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			    'profile_picture',
			    [
			        'appearance' => [
			            'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference'
			        ],
			        'foreign_types' => [
			            '0' => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ],
			            \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
			                'showitem' => '
			                --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
			                --palette--;;filePalette'
			            ]
			        ],
			        'maxitems' => 1
			    ],
			    $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
	        
	    ],
	    'staff' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_staff/Resources/Private/Language/locallang_db.xlf:tx_azgrstaff_domain_model_member.staff',
	        'config' => [
			    'type' => 'select',
			    'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_azgrstaff_domain_model_staff',
			    'minitems' => 0,
			    'maxitems' => 1,
			],
	        
	    ],
	    'department' => [
	        'exclude' => 1,
	        'label' => 'LLL:EXT:azgr_staff/Resources/Private/Language/locallang_db.xlf:tx_azgrstaff_domain_model_member.department',
	        'config' => [
			    'type' => 'select',
			    //'renderType' => 'selectSingle',
			    'foreign_table' => 'tx_azgrstaff_domain_model_department',
			    'foreign_table_where' => 'AND staff=###REC_FIELD_staff###',
			    //'foreign_field' => 'staff',
			    'MM' => 'tx_azgrstaff_member_department_mm',
                'MM_opposite_field' => 'member',
			    'minitems' => 0,
			    'maxitems' => 99,
			],
	        
	    ],
        
/*
        'department' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
*/
    ],
];
