window.onload = (event) => {
	const data = 'title="' + document.title + '"&url="' + window.location.href + '"';

	let request = new XMLHttpRequest();
	request.open("POST", 'http://localhost:8800/backend/index.php', true);
	request.setRequestHeader("Content-type", "application/x-www-form-urlencoded", true);
	request.send(data);
	console.log(data);
};