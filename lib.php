<?php

class MyLib
{
	public static function check_str($str) {
		$chars = str_split($str, 1);
		$c = 0;
		foreach ($chars as $char) {
			if ($char == '(') $c++;
			else if ($char == ')') $c--;
			else if ($char != "\t" && $char != "\n" && $char != "\r" && $char != ' ')
				throw new Exception('InvalidArgumentException');
			if ($c < 0) return false;
		}
		return ($c == 0) ? true : false;
	}
}


