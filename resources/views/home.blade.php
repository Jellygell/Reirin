@extends('layouts.layout1')
@section('container')
@php
$user = Auth::user();
@endphp

@if($user)
        {{-- User is authenticated --}}
        <!-- <p>Welcome, {{ $user->customer_name }}</p> -->
        <!-- <p>Email: {{ $user->email }}</p> -->
        <!-- <h1>Welcome back to ReiRinSalon</h1> -->
        <!-- <h4>Confidence has no competition. With our team’s expert guidance, we can create a personalized treatment plan just for you. ORIBEL Salon & Wellness</h4> -->
        <div class="text-center">
          <h1 class="judul display-1 mt-4 mb-5">Welcome back to ReiRinSalon, {{ $user->customer_name }}!</h1>
          <h4 class="mb-5">Confidence has no competition. With our team’s expert guidance, we can create a personalized treatment plan just for you. ReiRinSalon</h4>
        </div>
        {{-- Other user information --}}
@else
        {{-- User is not authenticated --}}
        <p>You are not logged in.</p>
        <!-- <h1>Welcome to ReiRinSalon</h1>
        <h4>Confidence has no competition. With our team’s expert guidance, we can create a personalized treatment plan just for you. ORIBEL Salon & Wellness</h4> -->
        <div class="text-center">
          <h1 class="judul display-1 mt-4 mb-5">Welcome to ReiRinSalon</h1>
          <h4 class="mb-5">Confidence has no competition. With our team’s expert guidance, we can create a personalized treatment plan just for you. ReiRinSalon</h4>
        </div>
@endif

<div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
                <div class="carousel-item active">
                        <img src="pic\banner3.png" class="d-block w-90" style="height: 500px" alt="...">
                </div>
                <div class="carousel-item">
                        <img src="pic\banner4.png" class="d-block w-100" style="height: 500px" alt="...">
                </div>
                <div class="carousel-item">
                        <img src="pic\banner2.png" class="d-block w-100" style="height: 500px" alt="...">
                </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
        </button>
</div>

<!-- test -->

<!-- <h1 class="mt-4 mb-5"><strong>Articles</strong></h1>
<div class="card mb-3 mt-5">
        <img src="pic\artikel1.webp" class="card-img-top" alt="...">
        <div class="card-body">
                <h5 class="card-title">Apa itu Blow Dry? Ini dia segala hal yang Perlu Kamu Ketahui</h5>
                <p class="card-text">Apa Itu Blow Dry? Apa itu blow dry adalah sesuatu pertanyaan yang kurang lebih sering ditanyakan dalam dunia tata rambut. Blow dry adalah...</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
</div>
<div class="card mt-5">
        <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
        <img src="pic\banner2.png" class="card-img-bottom" alt="...">
</div> -->





<!-- <h1>Our Employee</h1>
<div class="row row-cols-1 row-cols-md-2 g-4 " style="width: 650px;>
        <div class="col">
                <div class="card">
                        <img src="pic\creator.jpg" class="card-img-top" style="width: 300px;">
                        <div class="card-body">
                                <h5 class="card-title">Irene Liana</h5>
                                <p class="card-text">The founder of Reirin Salon, Irene Liana dedicated her hardwork in establishing a safe working enviournment</p>
                        </div>
                </div>
        </div>
        <div class="col">
                <div class="card">
                        <img src="pic\creator.jpg" class="card-img-top" style="width: 300px;" alt="...">
                        <div class="card-body">
                                <h5 class="card-title">Rinianti</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                </div>
        </div>
</div> -->

<div class="text-center container py-5">
<h1 class="mt-4 mb-5 judul display-1">Our Treatments</h1>
<h4 class="mb-5">Kami berdedikasi untuk memberikan standar pelayanan yang optimal dengan terus meningkatkan kualitas terapis kami. Upaya terus dilakukan guna menjamin pelayanan terbaik yang dapat kami berikan.</h4>
<div class="row row-cols-1 row-cols-md-2 g-5 mt-3">
  <div class="col">
    <div class="card border-dark align-items-center">
      <!-- <img src="https://salonoribel.com/wp-content/uploads/2022/04/Asset-5@2x.pngp" class="card-img-top"
        alt="Hollywood Sign on The Hill" /> -->
        <img src="pic\hair treatment.png" class="d-block w-35 mt-5" style="height: 170px" alt="...">
      <div class="card-body align-items-center">
        <h3 class="card-title text-center judul display-6">Hair Salon Treatment</h5>
        <hr class="hr hr-blurry" style="border-color:black; weight: 10px;" />
        <p class="card-text mb-5" style="margin-left: 100px; margin-right: 100px;">
                Dapatkan treatment rambut yang sehat, berkilau dan lembut
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-dark align-items-center">
      <!-- <img src="https://salonoribel.com/wp-content/uploads/2022/04/Asset-5@2x.pngp" class="card-img-top"
        alt="Hollywood Sign on The Hill" /> -->
        <img src="pic\body_treatment.svg" class="d-block w-35 mt-5" style="height: 170px" alt="...">
      <div class="card-body align-items-center">
        <h3 class="card-title text-center judul display-6">Body Treatment</h3>
        <hr class="hr hr-blurry" style="border-color:black; weight: 10px;" />
        <p class="card-text mb-5" style="margin-left: 100px; margin-right: 100px;">
                Perawatan badan dengan terapis yang sudah bersertifikasi dan pengalaman
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-dark align-items-center">
      <!-- <img src="https://salonoribel.com/wp-content/uploads/2022/04/Asset-5@2x.pngp" class="card-img-top"
        alt="Hollywood Sign on The Hill" /> -->
        <img src="pic\nail_art.png" class="d-block w-35 mt-5" style="height: 170px" alt="...">
      <div class="card-body align-items-center">
        <h3 class="card-title text-center judul display-6">Nail Art</h3>
        <hr class="hr hr-blurry" style="border-color:black; weight: 10px;" />
        <p class="card-text mb-5" style="margin-left: 100px; margin-right: 100px;">
                Perawatan ini sangat baik untuk menjaga kesehatan kuku, kutikula dan kulit Anda
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-dark align-items-center">
      <!-- <img src="https://salonoribel.com/wp-content/uploads/2022/04/Asset-5@2x.pngp" class="card-img-top"
        alt="Hollywood Sign on The Hill" /> -->
        <img src="pic\face_treatment.png" class="d-block w-35 mt-5" style="height: 170px" alt="...">
      <div class="card-body align-items-center">
        <h3 class="card-title text-center judul display-6">Face Treatment</h3>
        <hr class="hr hr-blurry" style="border-color:black; weight: 10px;" />
        <p class="card-text mb-5" style="margin-left: 100px; margin-right: 100px;">
                Perawatan wajah yang memiliki beragam manfaat bagi kesehatan kulit wajah
        </p>
      </div>
    </div>
  </div>
</div>
</div>

<!-- <div style="color: #000; background-color: #f3f2f2;"> -->
<!-- <section style="color: #000; background-color: #f3f2f2;"> -->
  <div class="container py-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h1 class="mb-5 judul display-1">Testimonials</h1>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card border-dark">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold">Putri Kusuma</h5>
            <h6 class="font-weight-bold my-3">Mahasiswi</h6>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star-half-alt fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>"Saya sangat puas dengan potong rambut dan creambath di Salon Reirin. Para ahli potong rambutnya sangat berbakat, dan creambath membuat rambut saya lembut dan sehat."
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card border-dark">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(15).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold">Adinda Saraswati</h5>
            <h6 class="font-weight-bold my-3">Guru</h6>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>"Layanan meni-pedi di Salon Reirin membuat saya merasa seperti seorang ratu. Pelayanan teliti dan pijatan kaki yang menyegarkan. Saya akan merekomendasikan kepada teman-teman saya!"
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-0">
        <div class="card border-dark">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(17).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" />
            </div>
            <h5 class="font-weight-bold">Rara Fitria</h5>
            <h6 class="font-weight-bold my-3">Perawat</h6>
            <ul class="list-unstyled d-flex justify-content-center">
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="fas fa-star fa-sm text-info"></i>
              </li>
              <li>
                <i class="far fa-star fa-sm text-info"></i>
              </li>
            </ul>
            <p class="mb-2">
              <i class="fas fa-quote-left pe-2"></i>"Pelayanan potong rambut dan creambath di Salon Reirin luar biasa. Ahli potong rambut mendengarkan keinginan saya, dan creambath membuat rambut saya berkilau. Sangat direkomendasikan!"
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- </section>
</div> -->

<!-- <h1>Promo and Subscription!</h1>
<div class="row row-cols-1 row-cols-md-2 g-4 " style="width: 650px;">
        <div class="col">
                <div class="card">
                        <img src="pic\creator.jpg" class="card-img-top" style="width: 300px;">
                        <div class="card-body">
                                <h5 class="card-title">Irene Liana</h5>
                                <p class="card-text">The founder of Reirin Salon, Irene Liana dedicated her hardwork in establishing a safe working enviournment</p>
                        </div>
                </div>
        </div>
        <div class="col">
                <div class="card">
                        <img src="pic\creator.jpg" class="card-img-top" style="width: 300px;" alt="...">
                        <div class="card-body">
                                <h5 class="card-title">Rinianti</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                </div>
        </div>
</div> -->

<div class="container py-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h1 class="judul display-1 mb-5">Our Employee</h1>
      </div>
    </div>

    <div class="row text-center" style="display:inline-blok;">
      @foreach ($employee as $emp)
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card border-dark">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" /> -->
                <img src="{{$emp->employee_img}}" class="rounded-circle shadow-1-strong" width="100" height="100" alt="...">
            </div>
            <h5 class="font-weight-bold">{{ $emp->employee_name }}</h5>
            <h6 class="font-weight-bold my-3">{{ $emp->employee_role }}</h6>
            <p class="mb-2">
              <!-- <i class="fas fa-quote-left pe-2"></i>"Saya sangat puas dengan potong rambut dan creambath di Salon Reirin. Para ahli potong rambutnya sangat berbakat, dan creambath membuat rambut saya lembut dan sehat. Terima kasih, Reirin!" -->
            </p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

<!-- <h2>Employees</h2> -->
<!-- <ul>
        @foreach ($employee as $emp)
                <li>{{ $emp->employee_name }}</li>
        @endforeach
</ul> -->

<!-- test
<h2>Promotions</h2>
<ul>
        @foreach ($promo as $pr)
                <li>{{ $pr->promo_name }}</li>
                <p>{{ $pr->promo_desc}}</p>
        @endforeach
</ul> -->

<div class="container py-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center">
        <h1 class="judul display-1 mb-5">Promotions</h1>
      </div>
    </div>

    <div class="row text-center" style="display:inline-blok;">
      <ul>
      @foreach ($promo as $pr)
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="card border-dark">
          <div class="card-body py-4 mt-2">
            <div class="d-flex justify-content-center mb-4">
              <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                class="rounded-circle shadow-1-strong" width="100" height="100" /> -->
                <img src="{{$pr->promo_img}}" class="card-img-top" alt="...">
            </div>
            <h5 class="font-weight-bold">{{ $pr->promo_name }}</h5>
            <h6 class="font-weight-bold my-3">{{ $pr->promo_desc}}</h6>
            <p class="mb-2">
              <!-- <i class="fas fa-quote-left pe-2"></i>"Saya sangat puas dengan potong rambut dan creambath di Salon Reirin. Para ahli potong rambutnya sangat berbakat, dan creambath membuat rambut saya lembut dan sehat. Terima kasih, Reirin!" -->
            </p>
          </div>
        </div>
      </div>
      @endforeach
      </ul>
    </div>
  </div>


<div class="row d-flex justify-content-center">
  <div class="col-md-10 col-xl-8 text-center">
    <h1 class="judul display-1 mb-5">Articles</h1>
  </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card border-dark h-100">
      <img src="pic\artikel2.webp" class="card-img-top"
        alt="..." />
      <div class="card-body">
        <p class="text-muted">Selasa, 19 Desember 2023</p>
        <h4 class="card-title">Penyebab & Rekomendasi Shampo untuk Rambut Rusak jadi Sehat Berkilau!</h4>
        <p class="card-text">
        Sejak lahir, rambut muncul dengan kekuatan alaminya. Kemudian tumbuh menjadi remaja hingga dewasa, keberadaan rambut ini tergantung dari...
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 1 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-dark h-100">
      <img src="pic\artikel1.webp" class="card-img-top"
        alt="..." />
      <div class="card-body">
        <p class="text-muted">Selasa, 19 Desember 2023</p>
        <h4 class="card-title font-weight-bold">Apa itu Blow Dry? Ini dia segala hal yang Perlu Kamu Ketahui</h4>
        <p class="card-text">Apa Itu Blow Dry? Apa itu blow dry adalah sesuatu pertanyaan yang kurang lebih sering ditanyakan dalam dunia tata rambut. Blow dry adalah...
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 2 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-dark h-100">
      <img src="pic\artikel3.webp" class="card-img-top"
        alt="..." />
      <div class="card-body">
        <p class="text-muted">Selasa, 19 Desember 2023</p>
        <h4 class="card-title">Kursus Gunting Rambut: 5 Keuntungan yang Wajib Kamu Tahu!</h4>
        <p class="card-text">
        Kursus gunting rambut adalah salah satu kursus yang sedang ngetren belakangan ini. Selain harganya yang bervariasi, pengajar kursus...
        </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>

@endsection