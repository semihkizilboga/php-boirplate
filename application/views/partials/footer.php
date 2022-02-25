<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="static/public/vendor/jquery/jquery.min.js"></script>
<script src="static/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="static/public/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="static/public/js/admin.min.js"></script>

<!-- Page level plugins -->
<script src="static/public/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="static/public/js/demo/chart-area-demo.js"></script>
<script src="static/public/js/demo/chart-pie-demo.js"></script>
<script type="text/javascript" src="static/public/vendor/datatables/pdfmake.min.js"></script>
<script type="text/javascript" src="static/public/vendor/datatables/vfs_fonts.js"></script>
<script type="text/javascript" src="static/public/vendor/datatables/dataTables.min.js"></script>
<script type="text/javascript" src="static/public/vendor/datatables/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            dom: 'Bfrtip',
            language: {
                "url": "static/public/vendor/datatables/tr.json"
            },
            buttons: ['copy', 'excel', 'pdf'] 

        });
    });
</script>
</body>

</html>