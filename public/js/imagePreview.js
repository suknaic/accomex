$(".avatar-edit input[type=file]").change(function () {
  var id = $(this).attr("id");
  var newimage = new FileReader();
  newimage.readAsDataURL(this.files[0]);
  newimage.onload = function (e) {
    console.log($("#imagePreview_" + id));
    $("#imagePreview_" + id).css(
      "background-image",
      "url(" + e.target.result + ")"
    );
    $("#imagePreview").hide();
    $("#imagePreview").fadeIn(650);
  };
});

$("#input-id").fileinput({
  browseClass: "btn btn-primary btn-block",
  showCaption: false,
  showRemove: false,
  showUpload: false,
  allowedFileExtensions: ["jpg", "jpeg", "gif", "png"],
  maxFileCount: 5,
});
