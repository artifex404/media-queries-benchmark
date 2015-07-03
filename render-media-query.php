<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 03/07/15
 * Time: 12:03
 */

function generateCSS() {

	$content = "";
	for ($i=0; $i <= 99999; $i++) {

$content .= "@media (min-width: 700px) {
	.block {
		font-family: Arial;
		font-size: 20px;
		line-height: 30px;
		text-align: left;
	}
}
";

	}

	return $content;

}

function generateCSSCombined() {

	$content = "@media (min-width: 700px) {";
	for ($i=0; $i <= 99999; $i++) {

$content .= "
	.block {
		font-family: Arial;
		font-size: 20px;
		line-height: 30px;
		text-align: left;
	}
";

	}

	$content .= "}";

	return $content;

}

$contents = generateCSS();

file_put_contents("styles-media-queries.css", $contents);


$contents_combined = generateCSSCombined();

file_put_contents("styles-combined.css", $contents_combined);