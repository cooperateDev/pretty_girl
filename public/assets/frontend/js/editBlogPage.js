$(document).ready(function(){
	// Image preview
    const chooseFile = document.getElementById("choose-file");
    const imgPreview = document.getElementById("img-preview");

    chooseFile.addEventListener("change", function () {
      getImgData();
    });

    function getImgData() {
      const files = chooseFile.files[0];
      if (files) {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(files);
        fileReader.addEventListener("load", function () {
          imgPreview.innerHTML = '<img src="' + this.result + '" />';
        });    
      }
    }

    // $('.create-btn').on('click', function() {
    //   var formData = new FormData();
    //   var files = $('input[type=file]');
    //   for (var i = 0; i < files.length; i++) {
    //     if (files[i].value == "" || files[i].value == null) {
    //         return false;
    //     }
    //     else {
    //         formData.append(files[i].name, files[i].files[0]);
    //     }
    //   }
    //   var formSerializeArray = $(".form").serializeArray();
    //   for (var i = 0; i < formSerializeArray.length; i++) {
    //     formData.append(formSerializeArray[i].name, formSerializeArray[i].value)
    //   }
    //   $.ajax({
    //     type: 'POST',
    //     data: formData,
    //     contentType: false,
    //     processData: false,
    //     cache: false,
    //     url: basic_url + '/blog/create',
    //     success: function (response) {
    //       if (response.Success == true) {
    //           return true;
    //       }
    //       else {
    //           return false;
    //       }
    //     },
    //     error: function () {
    //       return false;
    //     },
    //     failure: function () {
    //       return false;
    //     }
    //    });
    // });
});