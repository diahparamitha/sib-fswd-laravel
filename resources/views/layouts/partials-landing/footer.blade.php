<!-- copyright section start -->
<div class="copyright_section">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-sm-12">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a></p>
         </div>
         <div class="col-lg-6 col-sm-12">
            <div class="footer_social_icon">
               <ul>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="{{ asset ('js/jquery.min.js')}}"></script>
<script src="{{ asset ('js/popper.min.js')}}"></script>
<script src="{{ asset ('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset ('js/jquery-3.0.0.min.js')}}"></script>
<script src="{{ asset ('js/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{ asset ('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset ('js/custom.js')}}"></script>

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
   $('.table').DataTable({
      columnDefs: [{
         targets: 'sort-role',
         orderable: true
      }],
      order: [[1, 'asc']], // Kolom indeks 6 (Role) akan diurutkan secara default
      lengthMenu: [3, 5, 10], // Ubah jumlah baris yang ditampilkan
      language: {
         searchPlaceholder: 'Cari...',
         sSearch: '',
         emptyTable: 'Tidak ada data yang tersedia',
         zeroRecords: 'Tidak ada data yang cocok',
         info: 'Menampilkan halaman _PAGE_ dari _PAGES_',
         infoEmpty: 'Tidak ada data yang tersedia',
         infoFiltered: '(disaring dari total _MAX_ data)',
         paginate: {
            first: 'Awal',
            last: 'Akhir',
            next: '&raquo;',
            previous: '&laquo;'
         }
      }
   });
});
</script>