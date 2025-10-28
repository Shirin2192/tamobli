<script src="<?= base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?= base_url();?>assets/vendors/chart.js/chart.umd.js"></script>
    <script src="<?= base_url();?>assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/select2/select2.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?= base_url();?>assets/js/off-canvas.js"></script>
    <script src="<?= base_url();?>assets/js/misc.js"></script>
    <script src="<?= base_url();?>assets/js/settings.js"></script>
    <script src="<?= base_url();?>assets/js/todolist.js"></script>
    <script src="<?= base_url();?>assets/js/jquery.cookie.js"></script>
      <script src="<?= base_url();?>assets/js/file-upload.js"></script>
    <script src="<?= base_url();?>assets/js/typeahead.js"></script>
    <script src="<?= base_url();?>assets/js/select2.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?= base_url();?>assets/js/dashboard.js"></script>

    <!-- DataTables JS -->
     <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <!-- CKEditor 5 CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.0.0/classic/ckeditor.js"></script>
    <script>
$(document).ready(function() {
    // Initialize all select boxes with the 'select2' class
    $('.select2').select2({
        placeholder: "Select an option",
        allowClear: true,
        width: '100%' // ensures it fits the parent container
    });
});
</script>
<script>
  var frontend = "<?php base_url();?>";
</script>
