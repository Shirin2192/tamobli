 ClassicEditor
    .create(document.querySelector('#content'), {
      toolbar: [
        'heading', '|',
        'bold', 'italic', 'underline', '|',
        'link', 'bulletedList', 'numberedList', '|',
        'blockQuote', 'insertTable', 'undo', 'redo'
      ],
      placeholder: 'Start writing your blog content here...'
    })
    .then(editor => {
      console.log('Editor initialized:', editor);
    })
    .catch(error => {
      console.error('Error initializing CKEditor:', error);
    });

let editContentEditor;
ClassicEditor.create(document.querySelector('#edit_content'))
  .then(editor => { editContentEditor = editor; })
  .catch(error => { console.error(error); });

  $(document).ready(function() {

  // Initialize DataTable
  $('#blogTable').DataTable({
    ajax: {
      url: '<?= base_url("BlogController/getAllBlogs") ?>',
      dataSrc: ''
    },
    columns: [
      { data: 'id' },
      { data: 'title' },
      { data: 'date' },
      { data: 'status',
        render: d => d === 'active'
          ? '<span class="badge bg-success">Active</span>'
          : '<span class="badge bg-secondary">Inactive</span>'
      },
      {
        data: 'image',
        render: d => `<img src="<?= base_url('uploads/blogs/') ?>${d}" class="img-thumbnail" width="80">`
      },
      {
        data: null,
        render: row => `
          <button class="btn btn-sm btn-info viewBtn" data-id="${row.id}"><i class="mdi mdi-eye"></i></button>
          <button class="btn btn-sm btn-warning editBtn" data-id="${row.id}"><i class="mdi mdi-pencil"></i></button>
        `
      }
    ]
  });
});

$(document).ready(function() {

  // View Modal
  $(document).on('click', '.viewBtn', function() {
    const id = $(this).data('id');

    $.ajax({
      url: '<?= base_url("BlogController/getBlogById") ?>',
      type: 'POST',
      data: { id: id },
      dataType: 'json',
      success: function(res) {
        if (res) {
          $('#view_title').text(res.title);
          $('#view_date').text(res.date);
          $('#view_status').text(res.status);
          $('#view_short_description').text(res.short_description);
          $('#view_content').html(res.content);
          $('#view_sort_order').text(res.sort_order);
          $('#view_image').attr('src', '<?= base_url("uploads/blogs/") ?>' + res.image);
          $('#viewBlogModal').modal('show');
        } else {
          alert('No data found!');
        }
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });

  // Edit Modal
  $(document).on('click', '.editBtn', function() {
    const id = $(this).data('id');

    $.ajax({
      url: '<?= base_url("BlogController/getBlogById") ?>',
      type: 'POST',
      data: { id: id },
      dataType: 'json',
      success: function(res) {
        if (res) {
          $('#edit_id').val(res.id);
          $('#edit_title').val(res.title);
          $('#edit_date').val(res.date);
          $('#edit_short_description').val(res.short_description);
          editContentEditor.setData(res.content);
          $('#edit_status').val(res.status);
          $('#edit_sort_order').val(res.sort_order);
          $('#current_image').attr('src', '<?= base_url("uploads/blogs/") ?>' + res.image);
          $('#editBlogModal').modal('show');
        } else {
          alert('Blog not found!');
        }
      },
      error: function(xhr, status, error) {
        console.error(error);
      }
    });
  });

});
