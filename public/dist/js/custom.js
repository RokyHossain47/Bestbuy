$(function () {
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});

// Products
$(document).ready(function () {
  $('.product-image-thumb').on('click', function () {
    var $image_element = $(this).find('img')
    $('.product-image').prop('src', $image_element.attr('src'))
    $('.product-image-thumb.active').removeClass('active')
    $(this).addClass('active')
  })
})

$(function () {
  $("#example1").DataTable({
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
    "responsive": true, 
    "lengthChange": true, 
    "autoWidth": false
  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": false,
    "info": true,
    "autoWidth": true,
    "responsive": true,
  });
});


$(function () {
  $('#summernote').summernote({
    height: 250,   //set editable area's height
    codemirror: { // codemirror options
      
      theme: 'monokai'
    }
  });
})
$(function () {
  $('#summernote2').summernote({
    height: 100,   //set editable area's height
    codemirror: { // codemirror options
      
      theme: 'monokai'
    }
  });
})

// image
$(".imgAdd").click(function(){

  $(this).closest(".row").find('.imgAdd').before('<div class="col imgUp"><div class="imagePreview"></div><label class="btn btn-success btn-primary1">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
});
// $(".imgAdd").click(function(){
// alert('ok');
// //   $(this).closest(".row").find('.imgAdd').before('<div class="col imgUp"><div class="imagePreview"></div><label class="btn btn-success btn-primary1">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
//  });
$(document).on("click", "i.del" , function() {
// 	to remove card
  $(this).parent().remove();
// to clear image
  // $(this).parent().find('.imagePreview').css("background-image","url('')");
});
$(function() {
    $(document).on("change",".uploadFile", function()
    {
    		var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
            uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
            }
        }
      
    });
    
});