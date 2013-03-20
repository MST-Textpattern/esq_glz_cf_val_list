//<?php

function esq_glzcfvallist($atts, $thing=NULL) {
	extract(lAtts(array('fieldname' => '', 'delimiter' => ','), $atts));
	$output = '';
	foreach(safe_column('value', 'custom_fields', 'name = "'.safe_field('name', 'txp_prefs', 'val = "'.$fieldname.'"').'" order by id asc') as $val) {
		$output .= $val.$delimiter;
	}
	return substr($output, 0, strlen($output) - strlen($delimiter));
}