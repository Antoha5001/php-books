<?php

	function getOption($arr){
		$option = "";

		foreach ($arr as $k => $v){

			$k === "selected" ? $changed = "selected": $changed = "";

			$option .= "<option $changed value='$k'>$v</option>\n";
		}

		return $option;
	}
	function br(){
		echo "<br/>";
	}

	function dumper($obj){
		echo "<pre>".htmlspecialchars(getDumper($obj))."</pre>";
	}

	function getDumper($obj, $padding = ""){

//		switch ($obj){
//			case is_array($obj) : $type = "Array[".count($obj)."]"; break;
//			case is_object($obj) : $type = "Object"; break;
//			case gettype($obj) == 'boolean' : $obj ? $type="true" : $type="false"; break;
//			default: return "\"$obj\"";
//		}

		if (is_array($obj)) {
			$type = "Array[".count($obj)."]";
		} elseif (is_object($obj)){
			$type = "Object";
		} elseif (gettype($obj) == 'boolean'){
			$obg ? $type="true" : $type="false";
		} else {
			return "\"$obj\"";
		}

		$buf = $type;
		$padding .= "	";

		foreach ($obj as $k => $v){
			if($k === "GLOBALS") continue;
			$buf.= "\n$padding$k:".getDumper($v, $padding)."";
		}
		return $buf;
	}

	$arr = [
		'barnaul' => "Барнаул",
		'moscow' => "Москва",
		'selected' => "Новосибирск"
	];
