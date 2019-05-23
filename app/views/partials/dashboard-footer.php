</div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo $host?>public/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo $host?>public/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $host?>public/js/main.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
