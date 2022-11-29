  <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="/user">Beranda</a>
                     <a href="#">Produk</a>
                     <a href="#">Pesanan</a>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="{{ asset('assets1/images/toggle-icon.png') }}"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Semua Kategori
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <!-- <a class="dropdown-item" href="#">Tas Wanita</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pencarian">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="{{ asset ('assets1/images/flag-indonesia.png') }}" width="10" alt="flag" class="mr-2 " title="indonesia"> Indonesia <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>