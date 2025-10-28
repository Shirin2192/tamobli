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
                     <h3 class="page-title"> Package Category </h3>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Package Category</li>
                        </ol>
                     </nav>
                  </div>
                  <!-- ADD SLIDER FORM -->
                  <div class="row">
                     <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow-sm border-0 rounded-3">
                           <div class="card-body">
                              <h4 class="card-title mb-4">Add Package Category</h4>
                              <form class="forms-sample" id="PackageCategoryForm" enctype="multipart/form-data">
                                 <!-- Row 1: Title + Subtitle -->
                                 <div class="row">
                                    <div class="col-md-6 mb-4">
                                       <label for="category_name" class="form-label fw-semibold">Category Name <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control mt-1 p-2" id="category_name" name="category_name" placeholder="Enter banner category_name">
                                    </div>                                   
                                    
                                    <div class="col-md-6 mb-4">
                                       <label for="image" class="form-label fw-semibold">Slider Image <span class="text-danger">*</span></label>
                                       <input type="file" class="form-control mt-1 p-2" id="image" name="image" accept="image/*">
                                       <small class="text-muted d-block mt-1"><span class="text-danger">Recommended size: 1920x1080px (JPG/WEBP/PNG)</span></small>
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
                              <h4 class="card-title mb-4">Category List</h4>
                              <div class="table-responsive">
                                 <table id="PackageCategoryTable" class="table table-bordered table-striped align-middle">
                                    <thead class="table-light">
                                       <tr>
                                          <th>#</th>
                                          <th>Category Name</th>
                                          <th>Image</th>
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
                                 <th>Category Name</th>
                                 <td id="view_category"></td>
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
               <div class="modal fade" id="editPackageCategoryModal" tabindex="-1" aria-labelledby="editPackageCategoryModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                     <div class="modal-content">
                        <div class="modal-header bg-gradient-warning text-white">
                           <h5 class="modal-title" id="editSliderModalLabel"><i class="mdi mdi-pencil"></i> Edit Package Category</h5>
                           <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                           <form id="editPackageCategoryForm" enctype="multipart/form-data">
                              <input type="hidden" name="id" id="edit_id">
                              <div class="row">
                                 <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">Category Name</label>
                                    <input type="text" class="form-control" id="edit_category_name" name="edit_category_name">
                                 </div>                              
                             
                                 <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">Slider Image</label>
                                    <input type="file" class="form-control" id="edit_image" name="image">
                                    <img id="current_image" src="" class="img-thumbnail mt-2" style="max-width:200px;">
                                 </div>
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
      <script src="<?= base_url()?>assets/view_js/package_category.js"></script>
   </body>
</html>