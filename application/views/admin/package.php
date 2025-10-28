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
                     <h3 class="page-title"> Package </h3>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Package</li>
                        </ol>
                     </nav>
                  </div>
                  <!-- ADD SLIDER FORM -->
                  <div class="row">
                     <div class="col-12 grid-margin stretch-card">
                        <div class="card shadow-sm border-0 rounded-3">
                           <div class="card-body">
                              <h4 class="card-title mb-4">Add Package</h4>
                              <form class="forms-sample" id="PackageForm" enctype="multipart/form-data">
                                 <div class="row">
                                    <!-- Category -->
                                    <div class="col-md-6 mb-4">
                                       <label for="fk_category_id" class="form-label fw-semibold">Select Category <span class="text-danger">*</span></label>
                                       <select class="form-select mt-1 p-2 select2" id="fk_category_id" name="fk_category_id">
                                          <option value="">Select Category</option>
                                          <option value="1">Hajj</option>
                                          <option value="2">Umrah</option>
                                          <option value="3">Ramzan Umrah</option>
                                       </select>
                                    </div>

                                    <!-- Title -->
                                    <div class="col-md-6 mb-4">
                                       <label for="title" class="form-label fw-semibold">Title <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control mt-1 p-2" id="title" name="title" placeholder="Enter Package Title">
                                    </div>

                                    <!-- Slug -->
                                    <div class="col-md-6 mb-4">
                                       <label for="slug" class="form-label fw-semibold">Slug <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control mt-1 p-2" id="slug" name="slug" placeholder="Enter Slug (unique)">
                                    </div>

                                    <!-- Package Type -->
                                    <div class="col-md-6 mb-4">
                                       <label for="package_type" class="form-label fw-semibold">Package Type</label>
                                       <input type="text" class="form-control mt-1 p-2" id="package_type" name="package_type" placeholder="e.g., Super Deluxe, Economy">
                                    </div>

                                    <!-- Duration -->
                                    <div class="col-md-6 mb-4">
                                       <label for="duration" class="form-label fw-semibold">Duration</label>
                                       <input type="text" class="form-control mt-1 p-2" id="duration" name="duration" placeholder="e.g., 15 Days / 43 Days">
                                    </div>

                                    <!-- Departure Date -->
                                    <div class="col-md-6 mb-4">
                                       <label for="departure_date" class="form-label fw-semibold">Departure Date</label>
                                       <input type="text" class="form-control mt-1 p-2" id="departure_date" name="departure_date" placeholder="e.g., 18 May - 23 May 2026">
                                    </div>

                                    <!-- From Location -->
                                    <div class="col-md-6 mb-4">
                                       <label for="from_location" class="form-label fw-semibold">From Location</label>
                                       <input type="text" class="form-control mt-1 p-2" id="from_location" name="from_location" placeholder="e.g., Mumbai">
                                    </div>

                                    <!-- Makkah Hotel -->
                                    <div class="col-md-6 mb-4">
                                       <label for="makkah_hotel" class="form-label fw-semibold">Makkah Hotel</label>
                                       <input type="text" class="form-control mt-1 p-2" id="makkah_hotel" name="makkah_hotel" placeholder="Enter Makkah Hotel Name">
                                    </div>

                                    <!-- Madinah Hotel -->
                                    <div class="col-md-6 mb-4">
                                       <label for="madinah_hotel" class="form-label fw-semibold">Madinah Hotel</label>
                                       <input type="text" class="form-control mt-1 p-2" id="madinah_hotel" name="madinah_hotel" placeholder="Enter Madinah Hotel Name">
                                    </div>

                                    <!-- Meals -->
                                    <div class="col-md-6 mb-4">
                                       <label for="meals" class="form-label fw-semibold">Meals</label>
                                       <input type="text" class="form-control mt-1 p-2" id="meals" name="meals" placeholder="e.g., Indian Cuisine (Breakfast, Lunch, Dinner)">
                                    </div>

                                    <!-- Transport -->
                                    <div class="col-md-6 mb-4">
                                       <label for="transport" class="form-label fw-semibold">Transport</label>
                                       <input type="text" class="form-control mt-1 p-2" id="transport" name="transport" placeholder="e.g., A/C Buses">
                                    </div>

                                    <!-- Visa + Flight Info -->
                                    <div class="col-md-6 mb-4">
                                       <label for="visa_flight_info" class="form-label fw-semibold">Visa & Flight Info</label>
                                       <input type="text" class="form-control mt-1 p-2" id="visa_flight_info" name="visa_flight_info" placeholder="e.g., Round Trip + Umrah Visa">
                                    </div>

                                    <!-- Pricing -->
                                    <div class="col-12">
                                       <h6 class="fw-semibold mt-3 mb-3 border-bottom pb-2">Package Pricing (Per Person)</h6>
                                    </div>

                                    <div class="col-md-3 mb-4">
                                       <label for="price_quint" class="form-label fw-semibold">5 Bed (Quint)</label>
                                       <input type="number" step="0.01" class="form-control mt-1 p-2" id="price_quint" name="price_quint" placeholder="e.g., 67000">
                                    </div>
                                    <div class="col-md-3 mb-4">
                                       <label for="price_quad" class="form-label fw-semibold">4 Bed (Quad)</label>
                                       <input type="number" step="0.01" class="form-control mt-1 p-2" id="price_quad" name="price_quad" placeholder="e.g., 72000">
                                    </div>
                                    <div class="col-md-3 mb-4">
                                       <label for="price_triple" class="form-label fw-semibold">3 Bed (Triple)</label>
                                       <input type="number" step="0.01" class="form-control mt-1 p-2" id="price_triple" name="price_triple" placeholder="e.g., 78000">
                                    </div>
                                    <div class="col-md-3 mb-4">
                                       <label for="price_twin" class="form-label fw-semibold">2 Bed (Twin)</label>
                                       <input type="number" step="0.01" class="form-control mt-1 p-2" id="price_twin" name="price_twin" placeholder="e.g., 83000">
                                    </div>

                                    <!-- Label -->
                                    <div class="col-md-6 mb-4">
                                       <label for="label" class="form-label fw-semibold">Label</label>
                                       <input type="text" class="form-control mt-1 p-2" id="label" name="label" placeholder="e.g., Popular / New / Featured">
                                    </div>

                                    <!-- Image -->
                                    <div class="col-md-6 mb-4">
                                       <label for="image" class="form-label fw-semibold">Image <span class="text-danger">*</span></label>
                                       <input type="file" class="form-control mt-1 p-2" id="image" name="image" accept="image/*">
                                       <small class="text-muted d-block mt-1"><span class="text-danger">Recommended size: 1920x1080px (JPG/WEBP/PNG)</span></small>
                                    </div>

                                    <!-- Status -->
                                    <div class="col-md-6 mb-4">
                                       <label for="status" class="form-label fw-semibold">Status</label>
                                       <select class="form-select mt-1 p-2 select2" id="status" name="status">
                                          <option value="Active" selected>Active</option>
                                          <option value="Inactive">Inactive</option>
                                       </select>
                                    </div>

                                    <!-- Description Section -->
                                    <div class="col-12 mt-4">
                                       <h6 class="fw-semibold mb-3 border-bottom pb-2">Package Details</h6>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                       <label for="short_description" class="form-label fw-semibold">Short Description</label>
                                       <textarea class="form-control mt-1 p-2" id="short_description" name="short_description" rows="2" placeholder="Enter short summary..."></textarea>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                       <label for="description" class="form-label fw-semibold">Full Description</label>
                                       <textarea class="form-control mt-1 p-2" id="description" name="description" rows="4" placeholder="Enter full package overview..."></textarea>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                       <label for="inclusions" class="form-label fw-semibold">Inclusions</label>
                                       <textarea class="form-control mt-1 p-2" id="inclusions" name="inclusions" rows="3" placeholder="List of inclusions..."></textarea>
                                    </div>

                                    <div class="col-md-12 mb-4">
                                       <label for="exclusions" class="form-label fw-semibold">Exclusions</label>
                                       <textarea class="form-control mt-1 p-2" id="exclusions" name="exclusions" rows="3" placeholder="List of exclusions..."></textarea>
                                    </div>

                                    <!-- <div class="col-md-12 mb-4">
                                       <label for="itinerary" class="form-label fw-semibold">Itinerary</label>
                                       <textarea class="form-control mt-1 p-2" id="itinerary" name="itinerary" rows="4" placeholder="Enter daily schedule or summary..."></textarea>
                                    </div> -->

                                    <div class="col-md-12 mb-4">
                                       <label for="terms_conditions" class="form-label fw-semibold">Terms & Conditions</label>
                                       <textarea class="form-control mt-1 p-2" id="terms_conditions" name="terms_conditions" rows="3" placeholder="Enter package terms & conditions..."></textarea>
                                    </div>
                                 </div>
                                 <h5>Detailed Itineraries</h5>
                                    <div id="itinerary_container">
                                        <div class="itinerary-item mb-3 border rounded p-3">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <label>Day Label</label>
                                                    <input type="text" name="day_label[]" class="form-control" placeholder="Day 01 – 06">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Title</label>
                                                    <input type="text" name="itinerary_title[]" class="form-control" placeholder="Departure & Arrival in Makkah">
                                                </div>
                                                <div class="col-md-4">
                                                    <label>Details</label>
                                                    <textarea name="itinerary_details[]" class="form-control" rows="3" placeholder="Enter day details..."></textarea>
                                                </div>
                                                <div class="col-md-2 d-flex align-items-end">
                                                    <button type="button" class="btn btn-danger remove-itinerary"><i class="mdi mdi-delete"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" id="add_itinerary" class="btn btn-primary mt-2"><i class="mdi mdi-plus"></i> Add More Days</button>


                                 <!-- Submit -->
                                 <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                       <button type="submit" class="btn btn-gradient-primary px-4 py-2">Save Package</button>
                                    </div>
                                 </div>
                              </form>

                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Package LIST TABLE -->
                  <div class="row mt-5">
                     <div class="col-12">
                        <div class="card shadow-sm border-0 rounded-3">
                           <div class="card-body">
                              <h4 class="card-title mb-4">Package List</h4>
                              <div class="table-responsive">
                                 <table id="PackageTable" class="table table-bordered table-striped align-middle">
                                    <thead class="table-light">
                                       <tr>
                                          <th>#</th>
                                          <th>Category</th>
                                          <th>Title</th>
                                          <th>Slug</th>
                                          <th>Days</th>
                                          <th>Makkah Hotel</th>
                                          <th>Madinah Hotel</th>
                                          <th>Price (₹)</th>
                                          <th>Label</th>
                                          <th>Image</th>
                                          <th>Status</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <!-- Filled dynamically -->
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
               <div class="modal fade" id="editPackageModal" tabindex="-1" aria-labelledby="editPackageModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                     <div class="modal-content">
                        <div class="modal-header bg-gradient-warning text-white">
                           <h5 class="modal-title" id="editPackageModalLabel"><i class="mdi mdi-pencil"></i> Edit Package</h5>
                           <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                           <form id="editPackageForm" enctype="multipart/form-data">
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
      <script>
            // Initialize CKEditor (ClassicEditor) for textareas
    const editors = ['#description', '#inclusions', '#exclusions', '#itinerary', '#terms_conditions'];
    editors.forEach(selector => {
        ClassicEditor
            .create(document.querySelector(selector), {
                toolbar: {
                    items: [
                        'heading', '|',
                        'bold', 'italic', 'underline', '|',
                        'link', 'bulletedList', 'numberedList', '|',
                        'undo', 'redo'
                    ]
                },
                placeholder: "Type here..."
            })
            .catch(error => {
                console.error(`CKEditor initialization failed for ${selector}:`, error);
            });
    });
      </script>
      <script>
$(document).ready(function() {
    $('#add_itinerary').click(function() {
        let newItem = `
        <div class="itinerary-item mb-3 border rounded p-3">
            <div class="row">
                <div class="col-md-2">
                    <input type="text" name="day_label[]" class="form-control" placeholder="Day 07 – 10">
                </div>
                <div class="col-md-4">
                    <input type="text" name="itinerary_title[]" class="form-control" placeholder="Visit Mina & Arafat">
                </div>
                <div class="col-md-4">
                    <textarea name="itinerary_details[]" class="form-control" rows="3" placeholder="Enter day details..."></textarea>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="button" class="btn btn-danger remove-itinerary"><i class="mdi mdi-delete"></i></button>
                </div>
            </div>
        </div>`;
        $('#itinerary_container').append(newItem);
    });

    $(document).on('click', '.remove-itinerary', function() {
        $(this).closest('.itinerary-item').remove();
    });
});
</script>

   </body>
</html>