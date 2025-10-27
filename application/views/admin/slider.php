<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Tamboli Admin</title>
      <?php include('common/css_files.php')?>
   </head>
   <body>
      <div class="container-scroller">
         <?php include('common/navbar.php');?>
         <div class="container-fluid page-body-wrapper">
            <?php include('common/sidebar.php');?>
            <div class="main-panel">
               <div class="content-wrapper">
                  <div class="page-header">
                     <h3 class="page-title"> Slider Management </h3>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Slider</li>
                        </ol>
                     </nav>
                  </div>
                  <!-- ADD SLIDER FORM -->
                  <div class="row">
                     <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow-sm border-0 rounded-3">
                           <div class="card-body">
                              <h4 class="card-title mb-4">Add Slider</h4>
                              <form class="forms-sample" id="heroBannerForm" enctype="multipart/form-data">
                                 <!-- Row 1: Title + Subtitle -->
                                 <div class="row">
                                    <div class="col-md-6 mb-4">
                                       <label for="title" class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control mt-1 p-2" id="title" name="title" placeholder="Enter banner title">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                       <label for="subtitle" class="form-label fw-semibold">Subtitle</label>
                                       <input type="text" class="form-control mt-1 p-2" id="subtitle" name="subtitle" placeholder="Enter banner subtitle">
                                    </div>
                                 </div>
                                 <!-- Row 2: Price + Currency Symbol -->
                                 <div class="row">
                                    <div class="col-md-6 mb-4">
                                       <label for="price" class="form-label fw-semibold">Price</label>
                                       <input type="number" step="0.01" class="form-control mt-1 p-2" id="price" name="price" placeholder="Enter price (e.g. 67000)">
                                    </div>
                                    <div class="col-md-3 mb-4">
                                       <label for="currency_symbol" class="form-label fw-semibold">Currency Symbol</label>
                                       <input type="text" class="form-control mt-1 p-2" id="currency_symbol" name="currency_symbol" value="₹" maxlength="5">
                                    </div>
                                    <div class="col-md-3 mb-4">
                                       <label for="price_suffix" class="form-label fw-semibold">Price Suffix</label>
                                       <input type="text" class="form-control mt-1 p-2" id="price_suffix" name="price_suffix" value="/-">
                                    </div>
                                 </div>
                                 <!-- Row 3: Button Text + Button Link -->
                                 <div class="row">
                                    <div class="col-md-6 mb-4">
                                       <label for="button_text" class="form-label fw-semibold">Button Text</label>
                                       <input type="text" class="form-control mt-1 p-2" id="button_text" name="button_text" placeholder="Enter button text (e.g. Book Now)">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                       <label for="button_link" class="form-label fw-semibold">Button Link</label>
                                       <input type="url" class="form-control mt-1 p-2" id="button_link" name="button_link" placeholder="Enter button URL">
                                    </div>
                                 </div>
                                 <!-- Row 4: File Upload + Status -->
                                 <div class="row">
                                    <div class="col-md-6 mb-4">
                                       <label for="image" class="form-label fw-semibold">Slider Image <span class="text-danger">*</span></label>
                                       <input type="file" class="form-control mt-1 p-2" id="image" name="image" accept="image/*">
                                       <small class="text-muted d-block mt-1"><span class="text-danger">Recommended size: 1920x1080px (JPG/WEBP/PNG)</span></small>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                       <label for="status" class="form-label fw-semibold">Status</label>
                                       <select class="form-select mt-1 p-2" id="status" name="status">
                                          <option value="active" selected>Active</option>
                                          <option value="inactive">Inactive</option>
                                       </select>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                       <label for="sort_order" class="form-label fw-semibold">Sort Order</label>
                                       <input type="number" class="form-control mt-1 p-2" id="sort_order" name="sort_order" placeholder="Enter order (e.g. 1)">
                                    </div>
                                 </div>
                                 <!-- Submit -->
                                 <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                       <button type="submit" class="btn btn-gradient-primary px-4 py-2">Save</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- SLIDER LIST TABLE -->
                  <div class="row mt-5">
                     <div class="col-12">
                        <div class="card shadow-sm border-0 rounded-3">
                           <div class="card-body">
                              <h4 class="card-title mb-4">Slider List</h4>
                              <div class="table-responsive">
                                 <table id="sliderTable" class="table table-bordered table-striped align-middle">
                                    <thead class="table-light">
                                       <tr>
                                          <th>#</th>
                                          <th>Title</th>
                                          <th>Subtitle</th>
                                          <th>Price</th>
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
               <div class="modal fade" id="viewSliderModal" tabindex="-1" aria-labelledby="viewSliderModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                     <div class="modal-content">
                        <div class="modal-header bg-gradient-primary text-white">
                           <h5 class="modal-title" id="viewSliderModalLabel"><i class="mdi mdi-eye"></i> View Slider Details</h5>
                           <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                           <table class="table table-bordered">
                              <tr>
                                 <th>Title</th>
                                 <td id="view_title"></td>
                              </tr>
                              <tr>
                                 <th>Subtitle</th>
                                 <td id="view_subtitle"></td>
                              </tr>
                              <tr>
                                 <th>Price</th>
                                 <td id="view_price"></td>
                              </tr>
                              <tr>
                                 <th>Button Text</th>
                                 <td id="view_button_text"></td>
                              </tr>
                              <tr>
                                 <th>Button Link</th>
                                 <td id="view_button_link"></td>
                              </tr>
                              <tr>
                                 <th>Status</th>
                                 <td id="view_status"></td>
                              </tr>
                              <tr>
                                 <th>Sort Order</th>
                                 <td id="view_sort_order"></td>
                              </tr>
                              <tr>
                                 <th>Image</th>
                                 <td><img id="view_image" src="" alt="Slider Image" class="img-fluid rounded shadow-sm" style="max-width: 250px;"></td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal fade" id="editSliderModal" tabindex="-1" aria-labelledby="editSliderModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                     <div class="modal-content">
                        <div class="modal-header bg-gradient-warning text-white">
                           <h5 class="modal-title" id="editSliderModalLabel"><i class="mdi mdi-pencil"></i> Edit Slider</h5>
                           <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                           <form id="editSliderForm" enctype="multipart/form-data">
                              <input type="hidden" name="id" id="edit_id">
                              <div class="row">
                                 <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">Title</label>
                                    <input type="text" class="form-control" id="edit_title" name="title">
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">Subtitle</label>
                                    <input type="text" class="form-control" id="edit_subtitle" name="subtitle">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">Price</label>
                                    <input type="number" step="0.01" class="form-control" id="edit_price" name="price">
                                 </div>
                                 <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">Button Text</label>
                                    <input type="text" class="form-control" id="edit_button_text" name="button_text">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">Button Link</label>
                                    <input type="text" class="form-control" id="edit_button_link" name="button_link">
                                 </div>
                                 <div class="col-md-3 mb-3">
                                    <label class="form-label fw-semibold">Status</label>
                                    <select class="form-select" id="edit_status" name="status">
                                       <option value="active">Active</option>
                                       <option value="inactive">Inactive</option>
                                    </select>
                                 </div>
                                 <div class="col-md-3 mb-3">
                                    <label class="form-label fw-semibold">Sort Order</label>
                                    <input type="number" class="form-control" id="edit_sort_order" name="sort_order">
                                 </div>
                              </div>
                              <div class="mb-3">
                                 <label class="form-label fw-semibold">Slider Image</label>
                                 <input type="file" class="form-control" id="edit_image" name="image">
                                 <img id="current_image" src="" class="img-thumbnail mt-2" style="max-width:200px;">
                              </div>
                              <div class="text-end">
                                 <button type="submit" class="btn btn-gradient-warning px-4">Update</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <?php include('common/footer.php')?>
            </div>
         </div>
      </div>
      <?php include('common/js_files.php')?>
      <script src="<?= base_url()?>assets/view_js/slider.js"></script>
   </body>
</html>