<?php
	/**
	 * Special shop control to forbid unwanted views.
	 * @author   blange <code@wbl-konzept.de>
	 * @category modules
	 * @package  WBL_ForbiddenViews
	 */
	class WBL_ForbiddenViews_ShopControl extends WBL_ForbiddenViews_ShopControl_parent {
		/**
		 * Config-Key for the view whitelist.
		 * @var string
		 */
		const CONFIG_KEY_VIEW_WHITELIST = 'aWBLViewWhitelist';

		/**
		 * Starts the oxid process.
		 * @author blange <code@wbl-konzept.de>
		 * @param string     $sClass      The class name.
		 * @param string     $sFunction   The function name.
		 * @param void|array $mParams     Possible parameters.
		 * @param void|array $mViewsChain Possible view chain.
		 * @return void
		 */
		protected function _process($sClass, $sFunction, $mParams = null, $mViewsChain = null) {
			if ((!$this->isAdmin()) && (empty($mViewsChain)) &&
				($aList = $this->getConfig()->getConfigParam(self::CONFIG_KEY_VIEW_WHITELIST)) &&
				(!in_array(strtolower($sClass), array_map('strtolower', $aList)))
			) {
				error_404_handler();
			} // if

			return parent::_process($sClass, $sFunction, $mParams, $mViewsChain);
		} // function
	} // class