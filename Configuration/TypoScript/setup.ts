
plugin.tx_azgrstaff_team {
  view {
    templateRootPaths.0 = EXT:azgr_staff/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_azgrstaff_team.view.templateRootPath}
    partialRootPaths.0 = EXT:azgr_staff/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_azgrstaff_team.view.partialRootPath}
    layoutRootPaths.0 = EXT:azgr_staff/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_azgrstaff_team.view.layoutRootPath}
  }
  settings {
	dummyProfileImage = EXT:azgr_staff/Resources/Public/Images/dummy-profile.png
    dummyProfileImage = {$plugin.tx_azgrstaff_team.settings.dummyProfileImage}
  }
  persistence {
    storagePid = {$plugin.tx_azgrstaff_team.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_azgrstaff._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
