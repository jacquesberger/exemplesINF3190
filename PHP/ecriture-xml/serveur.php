<?php
  $data = new DOMDocument();
  $data->load("data.xml");
  $data->getElementsByTagName("name")->item(0)->nodeValue = $_REQUEST["name"];
  $data->getElementsByTagName("age")->item(0)->nodeValue = $_REQUEST["age"];
  $data->save("data.xml");

  echo "OK";
?>
