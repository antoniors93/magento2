<?php

function toAscii($str, $replace=array(), $delimiter='-') {
  if( !empty($replace) ) {
    $str = str_replace((array)$replace, ' ', $str);
  }

  $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
  $clean = preg_replace("/[^a-zA-Z0-9\/-|+ -]/", '', $clean);
  $clean = strtolower(trim($clean, '_'));
  $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

  return $clean;
}

function getUserToken() {
  $userData = array("username" => "admin", "password" => "Steven109");
  $ch = curl_init("http://stager.mipeque.shop/index.php/rest/V1/integration/admin/token");
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($userData));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Content-Lenght: " . strlen(json_encode($userData))));

  $token = curl_exec($ch);
  return ($token);
}

function addColorsCsv() {
  $token = getUserToken();
  $product_category = 'color_swatch';
  $csv = '/home/antonio/Descargas/scripts/color.csv';

  if (($handle = fopen($csv, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
      $post_data = array(
        'option' => array(
          "label" => $data[0],
          "value" => toAscii($data[0]),
          "isDefault" => true,
          "sortOrder" => 0,
          "storeLabels" => array(
              "storeId" => 0,
              "label" => "string",
            ),
          )
        );
        $ch = curl_init("http://stager.mipeque.shop/index.php/rest/V1/products/attributes/" . $product_category . "/options");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Authorization: Bearer " . json_decode($token)));
        curl_exec($ch);
        echo 'successfully added ' . toAscii($data[0]);
    }
    fclose($handle);
  }
}


function addMatiasCsv() {
  $token = getUserToken();
  $product_category = 'matias_swatch';
  $csv = '/home/antonio/Descargas/scripts/matias.csv';

  if (($handle = fopen($csv, "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
      $post_data = array(
        'option' => array(
          "label" => $data[0],
          "value" => toAscii($data[0]),
          "isDefault" => true,
          "sortOrder" => 0,
          "storeLabels" => array(
              "storeId" => 0,
              "label" => "string",
            ),
          )
        );
        $ch = curl_init("http://stager.mipeque.shop/index.php/rest/V1/products/attributes/" . $product_category . "/options");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "Authorization: Bearer " . json_decode($token)));
        curl_exec($ch);
        echo 'successfully added ' . toAscii($data[0]);
    }
    fclose($handle);
  }
}
