<input type="file" id="files" name="files[]" multiple />
<output id="list"></output>

<script>
  function handleFileSelect(evt) {
    var files = evt.target.files; // FileList object

    // files is a FileList of File objects. List some properties.
    var output = [];
    for (var i = 0, f; f = files[i]; i++) {
      output.push('<li><strong>', escape(f.name), '</strong> (', f.type || 'n/a', ') - ',
                  f.size, ' bytes, last modified: ',
                  f.lastModifiedDate.toLocaleDateString(), '</li>');
    }
    elementFinal = '<ul>' + output.join('') + '</ul>';
    console.log(elementFinal)
    document.getElementById('list').innerHTML = elementFinal
  }

  document.getElementById('files').addEventListener('change', handleFileSelect, false);
</script>