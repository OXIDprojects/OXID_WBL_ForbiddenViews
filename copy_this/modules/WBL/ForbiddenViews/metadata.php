<?php
	/**
	 * Module-Metadata for the forbidden views.
	 * @author blange <code@wbl-konzept.de>
	 * @category modules
	 * @package WBL_ForbiddenViews
	 * @subpackage oxAutoload
	 * @version SVN: $Id$
	 */
	$sMetadataVersion          = '1.0';
	$aWBLForbiddenViewsFiles   = array();
	$aWBLForbiddenViewsClasses = array(
		'oxshopcontrol' => 'WBL_ForbiddenViews_ShopControl'
	);

	foreach ($aWBLForbiddenViewsClasses as $sClass) {
		// OXID needs the slash
		$aWBLForbiddenViewsFiles[$sClass] = str_replace('_', '/', $sClass) . '.php';
	} // foreach

	$aModule = array(
		'author'      => 'WBL Konzept',
		'description' => array(
			'de' => 'Spezielle Logik um Views zu deaktivieren, die nicht genutzt werden.',
			'en' => 'Special Logics to forbid not used views.'
		),
		'email'    => 'code@wbl-konzept.de',
		'extend'   => $aWBLForbiddenViewsClasses,
		'files'    => $aWBLForbiddenViewsFiles,
		'id'       => 'WBL_ForbiddenViews',
		'settings' => array(
			array(
				'group' => 'WBL_ForbiddenViews_GENERAL',
				'name'  => 'aWBLViewWhitelist',
				'type'  => 'arr',
				'value' => array()
			)
		),
		'title'     => 'WBL ForbiddenViews',
		'thumbnail' => 'wbl_logo.jpg',
		'url'       => 'http://wbl-konzept.de',
		'version'   => '1.0.0'
	);
