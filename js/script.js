function updateFileName(input) {
  var fileName = input.files[0].name;
  var fileNameDisplay = document.getElementById('file-name');
  fileNameDisplay.innerText = fileName;
}
