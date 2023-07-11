var uploadForm = document.getElementById('upload-form');
var imageInput = document.getElementById('image-input');
var preview = document.getElementById('preview');

imageInput.addEventListener('change', function() {
  var file = imageInput.files[0];
  if (file) {
    var reader = new FileReader();
    reader.onload = function() {
      var image = new Image();
      image.src = reader.result;
      image.className = 'uploaded-logo';
      preview.innerHTML = '';
      preview.appendChild(image);
    };
    reader.readAsDataURL(file);
  } else {
    preview.innerHTML = '';
  }
});