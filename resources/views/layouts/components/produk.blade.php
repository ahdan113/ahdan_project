<div class="fashion_section">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Tas Laki-Laki & Wanita</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           @foreach($tas as $data)
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">{{ $data->merek->nama }}</h4>
                                 <p class="price_text"><span style="color: #262626;">Rp. {{ $data->harga }}</span></p>
                                 <div class="tshirt_img"><img src="{{ asset('images/tas/' . $data->foto) }}"></div>
                                 <p>{{ $data->deskripsi }}</p>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="{{ $data->link }}">Lihat Detail</a></div>
                                    
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
            
         </div>
      </div>