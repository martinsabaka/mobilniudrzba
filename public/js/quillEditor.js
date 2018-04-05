/* 	QuillJS editor */

	var toolbarOptions = [
	  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
	  ['blockquote', 'code-block'],

	  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
	  [{ 'script': 'sub'}, { 'script': 'super' }],             // outdent/indent
	  [{ 'direction': 'rtl' }],                         // text direction

	  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

	  [{ 'color': [] }, { 'background': [] }],          
	  ['link', 'image', 'video'],

	  ['clean']                                         // remove formatting button
	];
	var quill = new Quill('#editor', {
		modules: {
			toolbar: toolbarOptions
		},
	    theme: 'snow'
	});