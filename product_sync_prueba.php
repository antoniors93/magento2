<?php // transform script for product import
error_reporting(0);
ini_set('display_errors',1);
//error_reporting(E_ALL);
ini_set('max_execution_time', -1);
ini_set('memory_limit', -1);
include('includes/lookup_functions.inc');

if (($handle = fopen("/home/antonio/Descargas/oceansuk.csv", "r")) !== FALSE) {

// Get headers
	if (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
		$user_CSV[0] = array('sku','store_view_code','attribute_set_code','product_type','categories','product_websites','name','description','short_description','weight','product_online','tax_class_name','visibility','price','special_price','special_price_from_date','special_price_to_date','url_key','meta_title','meta_keywords','meta_description','created_at','updated_at','qty','base_image','base_image_label', 'small_image', 'small_image_label', 'thumbnail_image', 'thumbnail_image_label', 'swatch_image','swatch_image_label','additional_images','related_skus','configurable_variations','additional_attributes');
	}


	$i = 0;
	$skus_array = array();	//sku store
	$namestore = ''; //last product title
	$url_count = 1;	//last url char

	// Get the rest
	while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {

		$i++;
		if($last_data[1] !== $data[1] && $url_count !== 1 && $url_count !== 2){	//grouped products
			$user_CSV[$i] = write_to_csv($i, $last_data, $namestore, $url_count, 1, $skus_array);
			$i++;
		}
		//simple poducts
		$user_CSV[$i] = write_to_csv($i, $data, $namestore, $url_count, 0, $skus_array);
		$last_data = $data;
		}
}
	fclose($handle);

function write_to_csv($i, $data, &$namestore, &$url_count, $group, &$skus_array){

	if($data[1] !== $namestore && $url_count !== 1){ //clearing stores when product changes
		$url_count = 1;
		$skus_array = array();
	}

	$namestore = $data[1];
	$url = toAscii($data[1]) . '-' . $url_count;
	$url_count ++;

	//import and save images/url
	$image_url = $data[7];
	$img = '/var/www/magento2/pub/media/import/' . toAscii($data[0]) . '.jpg';
	//copy($image_url, $img);
	$primary_image = '/' . toAscii($data[0]) . '.jpg';

	//transform categories
	$array_category = explode ( ' > ' , $data[4] );
	$array_category = rtrim( $array_category[2] );
	$category = 'Default Category/' . $array_category;

	//search and asign colors
	$color_code = explode ( '-' , $data[0] );
	$color_pattern = array('0299', '0399', 'D499', 'D599');
	$result = implode('', array_intersect($color_code, $color_pattern));
	$visibility = 'Not Visible Individually';


		switch ($result) {
			case '0299':
				$attribute_value = 'color=BLACK';
			break;
			case '0399':
				$attribute_value = 'color=COFFEE';
			break;
			case 'D499':
				$attribute_value = 'color=MOCHA';
			break;
			case 'D599':
				$attribute_value = 'color=LATTE';
			break;
			default:
				if(end($color_code)=='BLK'){
					$attribute_value = 'color=BLACK';
				}else if(end($color_code)=='NAT'){
					$attribute_value = 'color=NATURE';
				}else{
					$visibility = 'Catalog, Search';
				}
		}

//configurable variations store
array_push($skus_array, 'sku=' . $data[0] . ',' . $attribute_value);

	if($group == 1){

		 array_pop($skus_array);

	$user_CSV = array(
		$data[0] . '-G', // 1. SKU
		'', // 2 STORE VIEW CODE
		'Default',  // 3 ATTRIBUTE SET CODE
		'configurable',  // 4 PRODUCT TYPE
		$category,  // 5 CATEGORIES
		'base', // 6 PRODUCT WEBSITES
		$data[1], // 7 NAME
		$data[2], // 8 DESCRIPTION
		'', // 9 SHORT DESC
		'',  // 10 WEIGHT
		1,  // 11 PRODUCT ONLINE
		'Taxable Goods', // 12 Tax class name
		'Catalog, Search', // 13 VISIBILITY
		'', // 14PRICE
		'', // 15 SPECIAL PRICE
		'', // 16 SPF
		'', // 17 SP
		toAscii($data[1]) . '-grouped', // 18 URL KEY
		$data[1], // 19 META TITLE
		$data[1], // 20 META KEYWORDS
		$data[1], // 21 META DESC
		date("Y-m-d H:i:s"), // 22 CREATED
		date("Y-m-d H:i:s"), // 23 UPDATED
		'', // 25 qty
		$primary_image, // Base image
		toAscii($data[1]) . ' imagen', // Base iamge label
		$primary_image, // Small image
		toAscii($data[1]) . ' imagen', // Small image label
		$primary_image, // Thumbnail
		toAscii($data[1]) . ' imagen', // Thumbnail label
		$primary_image, //swatch_image
		toAscii($data[1]) . ' imagen', //swatch_image_label
		'',, // Additional images
		'', // related_skus',
		implode('|', $skus_array), // Configurable variations
		'', // Small image label
	);
	 //echo($i);
	// print_r($user_CSV);
	return($user_CSV);
}



	$user_CSV = array(
		$data[0], // 1. SKU
		'', // 2 STORE VIEW CODE
		'Default',  // 3 ATTRIBUTE SET CODE
		'simple',  // 4 PRODUCT TYPE
		$category,  // 5 CATEGORIES
		'base', // 6 PRODUCT WEBSITES
		$data[1], // 7 NAME
		$data[2], // 8 DESCRIPTION
		'', // 9 SHORT DESC
		'',  // 10 WEIGHT
		1,  // 11 PRODUCT ONLINE
		'Taxable Goods', // 12 Tax class name
		$visibility, // 13 VISIBILITY
		str_replace(' EUR' , '' , $data[10]), // 14PRICE
		'', // 15 SPECIAL PRICE
		'', // 16 SPF
		'', // 17 SP
		$url, // 18 URL KEY
		$data[1], // 19 META TITLE
		$data[1], // 20 META KEYWORDS
		$data[1], // 21 META DESC
		date("Y-m-d H:i:s"), // 22 CREATED
		date("Y-m-d H:i:s"), // 23 UPDATED
		10, // 25 qty
		$primary_image, // Base image
		toAscii($data[1]) . ' imagen', // Base iamge label
		$primary_image, // Small image
		toAscii($data[1]) . ' imagen', // Small image label
		$primary_image, // Thumbnail
		toAscii($data[1]) . ' imagen', // Thumbnail label
		$primary_image, //swatch_image
		toAscii($data[1]) . ' imagen', //swatch_image_label
		'', // Additional images
		'', // related_skus',
		'', // Configurable variations
		$attribute_value, // Small image label
	);
	return($user_CSV);

}

function generate_file($user_CSV){

	// print_r($user_CSV);
	$fp = fopen('/home/antonio/Descargas/magento_upload.csv', 'w');
	foreach ($user_CSV as $line) {
	// though CSV stands for "comma separated value"
	// in many countries (including France) separator is ";"
		fputcsv($fp, $line, ',');
	}

	fclose($fp);
}
generate_file($user_CSV);
?>
