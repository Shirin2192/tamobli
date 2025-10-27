 $(document).ready(function() {
        // Initialize DataTable
        let sliderTable = $('#sliderTable').DataTable({
          processing: true,
          serverSide: true,
          ajax: {
            url: "<?= base_url('admin/slider/fetch_data') ?>", // your CI controller method
            type: "POST"
          },
          columns: [
            { data: "id" },
            { data: "title" },
            { data: "subtitle" },
            { data: "price" },
            { 
              data: "image",
              render: function(data) {
                return `<img src="<?= base_url('uploads/slider/') ?>${data}" width="100" class="rounded shadow-sm"/>`;
              }
            },
            { 
              data: "status",
              render: function(data) {
                return data === 'active' 
                  ? '<span class="badge bg-success">Active</span>' 
                  : '<span class="badge bg-secondary">Inactive</span>';
              }
            },
            { data: "sort_order" },
            {
              data: null,
              render: function(row) {
                return `
                  <button class="btn btn-sm btn-warning edit-btn" data-id="${row.id}">Edit</button>
                  <button class="btn btn-sm btn-danger delete-btn" data-id="${row.id}">Delete</button>`;
              }
            }
          ]
        });
      });