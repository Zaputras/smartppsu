   <!-- Bootstrap core JavaScript-->
   <script src="assets/vendor/jquery/jquery.min.js"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

   <!-- Core plugin JavaScript-->
   <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

   <!-- Custom scripts for all pages-->
   <script src="assets/js/sb-admin-2.min.js"></script>
   <script src="assets/js/loginform.js"></script>


   <!-- Script Date Picker -->
   <script>
       $(function() {
           $("#tgl_lahir").datepicker({
               dateFormat: 'dd/mm/yy',
               changeMonth: true,
               changeYear: true,
               minDate: "-50Y",
               maxDate: "3Y",
               yearRange: "c-50:c3"
           }).val();
       });

       function myFunction() {
           var x = document.getElementById("password");
           if (x.type === "password") {
               x.type = "text";
           } else {
               x.type = "password";
           }
       }
   </script>

   </body>