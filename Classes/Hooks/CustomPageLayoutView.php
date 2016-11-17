<?php
namespace Azurgruen\AzgrStaff\Hooks;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use \TYPO3\CMS\Backend\View\PageLayoutViewDrawItemHookInterface;
use \TYPO3\CMS\Backend\View\PageLayoutView;

/**
 * Contains a preview rendering for the page module of CType="yourextensionkey_newcontentelement"
 */
class CustomPageLayoutView implements PageLayoutViewDrawItemHookInterface
{

   /**
   * Preprocesses the preview rendering of a content element.
   *
   * @param PageLayoutView $parentObject Calling parent object
   * @param boolean $drawItem Whether to draw the item using the default functionalities
   * @param string $headerContent Header content
   * @param string $itemContent Item content
   * @param array $row Record row of tt_content
   * @return void
   */
  public function preProcess(PageLayoutView &$parentObject, &$drawItem, &$header, &$item, array &$row) {
    if ($row['CType'] !== 'list' && $row['list_type'] !== 'azgrstaff_team') return;
	
	//$drawItem = true;
    //$header = '<strong>' . $header . '</strong><br>';
    //$item = '<br><br>';
    //$item .= $parentObject->thumbCode($row, 'tt_content', 'tx_demo_portrait');
  }
}