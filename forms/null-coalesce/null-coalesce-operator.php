<?php

$areaCode = $_GET['areaCode'] ?? "00";

$phoneNumber = $_GET['phoneNumber'] ?? "0000-0000";

echo "($areaCode) $phoneNumber ";

// be aware if user submits areaCode = "", this is not empty, so it'll print "" not "00".