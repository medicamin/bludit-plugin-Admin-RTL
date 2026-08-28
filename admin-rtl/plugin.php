<?php

class pluginBluditAdminRTL extends Plugin
{
	public function init()
	{
		$this->dbFields = array();
	}

	private function loadRTL()
	{
		$pluginFolder = basename(dirname(__FILE__));
		$url = HTML_PATH_PLUGINS . $pluginFolder . '/rtl.css';

		echo '<link rel="stylesheet" href="' . $url . '">' . PHP_EOL;
	}

	public function adminHead()
	{
		$this->loadRTL();
	}

	public function loginHead()
	{
		$this->loadRTL();
	}
}
