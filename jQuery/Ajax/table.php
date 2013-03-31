<?php
function getTableCellWithRandomNumber() {
	return "<td>" . rand(0, 9) . "</td>";
}

function getTableLine() {
	return "<tr>" . getTableCellWithRandomNumber() . getTableCellWithRandomNumber() .
	getTableCellWithRandomNumber() . getTableCellWithRandomNumber() . "</tr>";
}

function generateTable() {
	return "<table>" . getTableLine() . getTableLine() . getTableLine() .
	getTableLine() . getTableLine() . getTableLine() . "</table>";
}
?>