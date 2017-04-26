<?php
class Config {
	public static function get($path = null) {
		if($path) {
			$cfg = $GLOBALS['cfg'];
			$path = explode('/', $path); //No String uz Array
			//print_r($path);
			foreach($path as $elem) {
				if(isset($cfg[$elem])) {
					$cfg = $cfg[$elem]; // Lai pieklutu apakselementiem
				} else {
					return false; // Nepareizs cels
				}
			}

			return $cfg;
		}

		return false;
	}
}