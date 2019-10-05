tinymce.init({
  selector: '.editor',
  theme: "modern",
  menubar: true,
  images_upload_url: 'postAcceptor.php',
  automatic_uploads: false,
  plugins: [
    'FMathEditor',
    'image',
    'imagetools',
    'code'
  ],
  toolbar: 'undo redo | bold italic | FMathEditor | image | code',
  image_title: true,
  automatic_uploads: false,
  file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    /*
      Note: In modern browsers input[type="file"] is functional without
      even adding it to the DOM, but that might not be the case in some older
      or quirky browsers like IE, so you might want to add it to the DOM
      just in case, and visually hide it. And do not forget do remove it
      once you do not need it anymore.
    */

    input.onchange = function () {
      var file = this.files[0];
      if(file) {
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function () {
          cb(reader.result, {text: 'Some text too', alt: "Some description here"});
        };

        
      }
    };

    input.click();
  }
});