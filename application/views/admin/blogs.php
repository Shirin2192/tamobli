<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tamboli Admin - Blogs</title>
    <?php include('common/css_files.php')?>
  </head>

  <body>
    <div class="container-scroller">
      <?php include('common/navbar.php'); ?>
      <div class="container-fluid page-body-wrapper">
        <?php include('common/sidebar.php'); ?>

        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Blogs </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                </ol>
              </nav>
            </div>

            <!-- ADD BLOG FORM -->
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card shadow-sm border-0 rounded-3">
                  <div class="card-body">
                    <h4 class="card-title mb-4">Add Blog</h4>

                    <form class="forms-sample" id="blogForm" enctype="multipart/form-data">
                      <!-- Row 1 -->
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <label for="title" class="form-label fw-semibold">Blog Title <span class="text-danger">*</span></label>
                          <input type="text" class="form-control mt-1 p-2" id="title" name="title" placeholder="Enter blog title">
                        </div>

                        <div class="col-md-6 mb-4">
                          <label for="date" class="form-label fw-semibold">Publish Date <span class="text-danger">*</span></label>
                          <input type="date" class="form-control mt-1 p-2" id="date" name="date">
                        </div>
                      </div>

                      <!-- Row 2 -->
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <label for="short_description" class="form-label fw-semibold">Short Description</label>
                          <textarea class="form-control mt-1 p-2" id="short_description" name="short_description" rows="3" placeholder="Enter short summary"></textarea>
                        </div>
                      </div>

                      <!-- Row 3 -->
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <label for="content" class="form-label fw-semibold">Blog Content <span class="text-danger">*</span></label>
                          <textarea class="form-control mt-1 p-2" id="content" name="content" rows="6" placeholder="Enter blog content"></textarea>
                        </div>
                      </div>

                      <!-- Row 4 -->
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <label for="image" class="form-label fw-semibold">Feature Image <span class="text-danger">*</span></label>
                          <input type="file" class="form-control mt-1 p-2" id="image" name="image" accept="image/*">
                          <small class="text-muted"><span class="text-danger">Recommended size: 800x600px (WEBP/JPG/PNG)</span></small>
                        </div>

                        <div class="col-md-3 mb-4">
                          <label for="status" class="form-label fw-semibold">Status</label>
                          <select class="form-select mt-1 p-2 select2" id="status" name="status">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                          </select>
                        </div>

                        <div class="col-md-3 mb-4">
                          <label for="sort_order" class="form-label fw-semibold">Sort Order</label>
                          <input type="number" class="form-control mt-1 p-2" id="sort_order" name="sort_order" placeholder="Enter display order">
                        </div>
                      </div>

                      <!-- Submit -->
                      <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                          <button type="submit" class="btn btn-gradient-primary px-4 py-2">Save Blog</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- BLOG LIST TABLE -->
           <div class="row mt-5">
              <div class="col-12">
                <div class="card shadow-sm border-0 rounded-3">
                  <div class="card-body">
                    <h4 class="card-title mb-4">Blog List</h4>
                    <div class="table-responsive">
                      <table id="blogTable" class="table table-bordered table-striped align-middle">
                        <thead class="table-light">
                          <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Sort Order</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- Dynamic Rows via AJAX -->
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
          <!-- View Blog Modal -->
          <div class="modal fade" id="viewBlogModal" tabindex="-1" aria-labelledby="viewBlogModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header bg-gradient-primary text-white">
                  <h5 class="modal-title"><i class="mdi mdi-eye"></i> View Blog Details</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                  <table class="table table-bordered">
                    <tr><th>Title</th><td id="view_title"></td></tr>
                    <tr><th>Date</th><td id="view_date"></td></tr>
                    <tr><th>Status</th><td id="view_status"></td></tr>
                    <tr><th>Short Description</th><td id="view_short_description"></td></tr>
                    <tr><th>Content</th><td id="view_content"></td></tr>
                    <tr><th>Sort Order</th><td id="view_sort_order"></td></tr>
                    <tr>
                      <th>Feature Image</th>
                      <td><img id="view_image" src="" class="img-fluid rounded shadow-sm" style="max-width: 300px;"></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- Edit Blog Modal -->
        <div class="modal fade" id="editBlogModal" tabindex="-1" aria-labelledby="editBlogModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header bg-gradient-warning text-white">
                <h5 class="modal-title"><i class="mdi mdi-pencil"></i> Edit Blog</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                <form id="editBlogForm" enctype="multipart/form-data">
                  <input type="hidden" id="edit_id" name="id">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label fw-semibold">Blog Title</label>
                      <input type="text" class="form-control" id="edit_title" name="title">
                    </div>
                    <div class="col-md-6 mb-3">
                      <label class="form-label fw-semibold">Publish Date</label>
                      <input type="date" class="form-control" id="edit_date" name="date">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-semibold">Short Description</label>
                    <textarea class="form-control" id="edit_short_description" name="short_description" rows="3"></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-semibold">Blog Content</label>
                    <textarea class="form-control" id="edit_content" name="content" rows="6"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label class="form-label fw-semibold">Feature Image</label>
                      <input type="file" class="form-control" id="edit_image" name="image">
                      <img id="current_image" src="" class="img-thumbnail mt-2" style="max-width:200px;">
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-label fw-semibold">Status</label>
                      <select class="form-select select2" id="edit_status" name="status">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                      </select>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label class="form-label fw-semibold">Sort Order</label>
                      <input type="number" class="form-control" id="edit_sort_order" name="sort_order">
                    </div>
                  </div>
                  <div class="text-end">
                    <button type="submit" class="btn btn-gradient-warning px-4">Update Blog</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
          <?php include('common/footer.php'); ?>
        </div>
      </div>
    </div>
    <?php include('common/js_files.php'); ?>
    <script src="<?= base_url()?>assets/view_js/blogs.js"></script>
  </body>
</html>