<?php

namespace lib\filter;

/**
 * 全部的拦截器
 */
class Filter {
	/**
	 * 拦截全部
	 */
	// public static $all = function ($data){
	// // $app->send("mnbvc");
	// // var_dump($data);
	// };
	public static function all(&$app) {
		return function ($data) use (&$app) {
			// $app->send("mnbvc");
			return true;
		};
	}
	
}