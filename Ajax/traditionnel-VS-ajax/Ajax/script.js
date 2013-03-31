var request = null;

function createRequestObject() {
	try {
		request = new XMLHttpRequest();
	} catch (err) {
		alert("Error creating XMLHttpRequest object!");
		request = null;
	}
}

function refreshTable() {
	if (request === null) {
		createRequestObject();
	}
	
	var url = "tableonly.php";
	request.open("GET", url, true);
	request.onreadystatechange = updatePage;
	request.send(null);
}

function updatePage() {
	if (request.readyState == 4) {
		var tableContainer = document.getElementById("fortable");
		tableContainer.innerHTML = request.responseText;
	}
}