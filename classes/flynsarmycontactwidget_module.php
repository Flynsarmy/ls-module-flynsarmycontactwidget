<?php

	class FlynsarmyContactWidget_Module extends Core_ModuleBase
	{
		/**
		 * Creates the module information object
		 * @return Core_ModuleInfo
		 */
		protected function createModuleInfo()
		{
			return new Core_ModuleInfo(
				"Simple Contact Widget",
				"Provides a widget for LemonStands Contact module",
				"Flynsarmy" );
		}
	}
?>