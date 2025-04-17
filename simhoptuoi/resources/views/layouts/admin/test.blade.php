<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tiny.cloud/1/zeg7epfda1ack9sqgv09w6zypoe46rdvh77lrxvsy75js007/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
  <textarea>
    Welcome to TinyMCE!
  </textarea>
  <script>
      tinymce.init({
          selector: 'textarea',
          plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
          tinycomments_mode: 'embedded',
          tinycomments_author: 'Author name',
          image_title: true,
          automatic_uploads: true,
          file_picker_types: 'image',
          mergetags_list: [
              { value: 'First.Name', title: 'First Name' },
              { value: 'Email', title: 'Email' },
          ],
          ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
          file_picker_callback: (cb, value, meta) => {
              const input = document.createElement('input');
              input.setAttribute('type', 'file');
              input.setAttribute('accept', 'image/*');

              input.addEventListener('change', (e) => {
                  const file = e.target.files[0];

                  const reader = new FileReader();
                  reader.addEventListener('load', () => {
                      /*
                        Note: Now we need to register the blob in TinyMCEs image blob
                        registry. In the next release this part hopefully won't be
                        necessary, as we are looking to handle it internally.
                      */
                      const id = 'blobid' + (new Date()).getTime();
                      const blobCache =  tinymce.activeEditor.editorUpload.blobCache;
                      const base64 = reader.result.split(',')[1];
                      const blobInfo = blobCache.create(id, file, base64);
                      blobCache.add(blobInfo);

                      /* call the callback and populate the Title field with the file name */
                      cb(blobInfo.blobUri(), { title: file.name });
                  });
                  reader.readAsDataURL(file);
              });

              input.click();
          },
      });
  </script>
</body>
</html>
