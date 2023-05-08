tinymce.init({
	selector: "textarea",
	plugins: "code",
	toolbar: "undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link code image_upload",
	menubar:false,
    statusbar: false,
	content_style: ".mce-content-body {font-size:15px;font-family:Arial,sans-serif;}",
	height: 200
});