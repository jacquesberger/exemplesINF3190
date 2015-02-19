<?php
  $data = new DOMDocument();
  $data->load("data.xml");
  $data->getElementsByTagName("name")->item(0)->nodeValue = $_POST["name"];
  $data->getElementsByTagName("age")->item(0)->nodeValue = $_POST["age"];
  $data->save("data.xml");

  echo "OK";
?>
