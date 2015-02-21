<?php
/**
 * Single Product title
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

// edited by wai

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

$pName = the_title( '' , '' , false );;
$nameArray = explode(" / ", $pName);

$nameType = $nameArray[0];
$nameArea = $nameArray[1];
$nameSpeed = $nameArray[2];
// $nameSpeed2 = 'Normal';

$pSlug = get_page($page_id)->post_name;
$slugArray = explode("-", $pSlug);
$slugType = $slugArray[0];
$slugArea = $slugArray[1];
$slugSpeed = $slugArray[2];

$iconType = "fa fa-inbox";
$iconArea = "fa fa-bullseye";
$iconSpeed = "fa fa-paper-plane-o";

if($slugType === "enveloppe"){
	$iconType = "fa fa-envelope-o";
} else if($slugType === "sac"){
	$iconType = "fa fa-briefcase";
} else if($slugType === "sacshopping"){
	$iconType = "fa fa-suitcase";
} else if($slugType === "petiteboite"){
	$iconType = "fa fa-cube";
} else if($slugType === "carton"){
	$iconType = "fa fa-archive";
} else if($slugType === "specialdimension"){
	$iconType = "fa fa-arrows-alt";
}

if($slugArea === "paris"){
	$iconArea = "fa fa-bullseye";
} else if($slugArea === "banlieue"){
	$iconArea = "fa fa-circle-o";
}

if($slugSpeed === "8h"){
	$iconSpeed = "fa fa-paper-plane";
} else if($slugSpeed === "2h"){
	$iconSpeed = "fa fa-plane";
} else if($slugSpeed === "1h"){
	$iconSpeed = "fa fa-rocket";
}


if($nameSpeed === "8h"){
	$nameSpeed2 = 'Normal';
} else if($nameSpeed === "2h"){
	$nameSpeed2 = 'Rapid';
} else if($nameSpeed === "1h"){
	$nameSpeed2 = 'Flash';
} else if($nameSpeed === "８時間"){
	$nameSpeed2 = 'ノーマル';
} else if($nameSpeed === "２時間"){
	$nameSpeed2 = 'ラピッド';
} else if($nameSpeed === "１時間"){
	$nameSpeed2 = 'フラッシュ';
} 



?>
	<div data-hash="product-price">
		<div class="container">
			<section id="price" class="row">

				<div class="col-sm-10 col-sm-offset-1 price-block">
					<div class="selected-options col-sm-6">
						<div class="selected-option col-sm-12">
							<div class="icon-s">
								<i class="<?php echo $iconType; ?> fa-3x visible-xs"></i>
								<i class="<?php echo $iconType; ?> fa-3x visible-sm"></i>
								<i class="<?php echo $iconType; ?> fa-4x visible-md"></i>
								<i class="<?php echo $iconType; ?> fa-4x visible-lg"></i>
							</div>
							<div class="text-s">
								<h5>TYPE</h5>
								<p><?php echo $nameType; ?></p>
							</div>
						</div>
						<div class="selected-option col-sm-12">
							<div class="icon-s">
								<i class="<?php echo $iconArea; ?> fa-3x visible-xs"></i>
								<i class="<?php echo $iconArea; ?> fa-3x visible-sm"></i>
								<i class="<?php echo $iconArea; ?> fa-4x visible-md"></i>
								<i class="<?php echo $iconArea; ?> fa-4x visible-lg"></i>
							</div>
							<div class="text-s">
								<h5>AREA</h5>
								<p><?php echo $nameArea; ?></p>
							</div>
						</div>
						<div class="selected-option col-sm-12">
							<div class="icon-s">
								<i class="<?php echo $iconSpeed; ?> fa-3x visible-xs"></i>
								<i class="<?php echo $iconSpeed; ?> fa-3x visible-sm"></i>
								<i class="<?php echo $iconSpeed; ?> fa-4x visible-md"></i>
								<i class="<?php echo $iconSpeed; ?> fa-4x visible-lg"></i>
							</div>
							<div class="text-s">
								<h5>SPEED</h5>
								<p><?php echo $nameSpeed2 ?></p>
							</div>
						</div>
					</div>




