<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link
      rel="stylesheet"
      href="./vendor/bootstrap/css/bootstrap.css"
    />
    <link rel="stylesheet" href="./css/header.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="stylesheet" href="./css/cabinet.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link
      href="http://fonts.googleapis.com/css?family=Lato:400,700"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />
    <script type="text/javascript">
      var counter = 1;
      setInterval(function () {
        document.getElementById("slide-" + counter + "-home").checked = true;
        counter++;
        if (counter > 3) {
          counter = 1;
        }
      }, 5000);
    </script>
    <script src="./js/cabinet-popup.js"></script>
    <script src="./vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.js"></script>
    <script src="./js/page-animation.js"></script>
    <script
      src="https://kit.fontawesome.com/fc56662415.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- Header -->
    @extends('template.header')
    @section('header')
    @endsection
    <!--?----------------------------------- Home Page ------------------------------------------------>
    <section id="background-img">
      <div class="logo-container">
        <div class="background-logo">
          <h2 class="cabinet-title">KABINET</h2>
          <img src="images/logo-dinakara.png" />
          <h2 class="cabinet-name">DINAKARA</h2>
        </div>
      </div>
      <!-- Text Container  -->
      <div class="text-container">
        <div class="slides">
          <!--- Dot Button -->
          <input type="radio" name="radio-btn" id="slide-1-home" />
          <input type="radio" name="radio-btn" id="slide-2-home" />
          <input type="radio" name="radio-btn" id="slide-3-home" />
          <!-- Slide 1 -->
          <div class="slide-home first">
            <h2>Himpunan Mahasiswa Fisika</h2>
            <h2>Institut Teknologi Sepuluh Nopember</h2>
            <p>
              Himpunan Mahasiswa Fisika Institut Teknologi Sepuluh Nopember
              merupakan organisasi mahasiswa yang bergerak dalam bidang
              keprofesian yang berada dalam lingkup Keluarga Mahasiswa Institut
              Teknologi Sepuluh Nopember atau KM ITS yang berpedoman pada
              Konstitusi Dasar KM ITS
            </p>
          </div>
          <!-- Slide 2 -->
          <div class="slide-home">
            <h2>Visi</h2>
            <h2>HIMASIKA</h2>
            <p>
              Menjadi Himasika ITS yang progresif dan berdasar kekeluargaan
              serta terciptanya kader yang bersinergi baik di dalam maupun luar
              Himasika
            </p>
          </div>
          <!-- Slide 3 -->
          <div class="slide-home">
            <h2>Misi</h2>
            <h2>HIMASIKA</h2>
            <p>
              1. Menjalin komunikasi yang kolaboratif dengan stakeholder dan
              mitra Himasika <br /><br />
              2. Menjadikan Himasika sebagai rumah bagi anggotanya <br />
              <br />
              3. Menjadikan Himasika sebagai organisasi dengan tata kelola yang
              terstruktur <br /><br />
            </p>
          </div>
        </div>
        <!-- Automatic Navigation -->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
        </div>
        <!-- Manual Navigation -->
        <div class="navigation-manual">
          <label for="slide-1-home" class="manual-btn btn1"></label>
          <label for="slide-2-home" class="manual-btn btn2"></label>
          <label for="slide-3-home" class="manual-btn btn3"></label>
        </div>
      </div>
    </section>
    <!--?---------------------------------- Cabinet Page --------------------------------------------->
    <section id="cabinet-section">
      <div class="departement-title" id="departement-title">
        <h2>Departemen Dinakara</h2>
      </div>
      <!------------------------------------------------ List 1 ---------------------------------------------->
      <div class="cabinet-list">
        <button
          class="cabinet bph"
          id="bph"
          onclick="openPopup('popupbph');getBlur()"
        >
          <div>
            <img src="./images/BPH.png" />
            <h6>BPH</h6>
          </div>
        </button>
      </div>
      <div class="description-list">
        <div>Badan Pengurus Harian</div>
      </div>
      <!------------------------------------------------ List 2 ---------------------------------------------->
      <div class="cabinet-list">
        <button
          class="cabinet adkesma"
          id="adkesma"
          onclick="openPopup('popupadkesma');getBlur()"
        >
          <div>
            <img src="./images/ADKESMA.png" />
            <h6>ADKESMA</h6>
          </div>
        </button>
        <button
          class="cabinet hublu"
          id="hublu"
          onclick="openPopup('popuphublu');getBlur()"
        >
          <div>
            <img src="./images/HUBLU.png" />
            <h6>HUBLU</h6>
          </div>
        </button>
        <button
          class="cabinet dagri"
          id="dagri"
          onclick="openPopup('popupdagri');getBlur()"
        >
          <div>
            <img src="./images/DAGRI.png" />
            <h6>DAGRI</h6>
          </div>
        </button>
        <button
          class="cabinet ristek"
          id="ristek"
          onclick="openPopup('popupristek');getBlur()"
        >
          <div>
            <img src="./images/RISTEK.png" />
            <h6>RISTEK</h6>
          </div>
        </button>
      </div>
      <div class="description-list">
        <div>Advokasi Kesejahteraan Mahasiswa</div>
        <div>Hubungan Luar</div>
        <div>Dalam Negeri</div>
        <div>Riset dan Teknologi</div>
      </div>
      <!------------------------------------------------ List 3 ---------------------------------------------->
      <div class="cabinet-list">
        <button
          class="cabinet medfo"
          id="medfo"
          onclick="openPopup('popupmedfo');getBlur()"
        >
          <div>
            <img src="./images/MEDFO.png" />
            <h6>MEDFO</h6>
          </div>
        </button>
        <button
          class="cabinet kwu"
          id="kwu"
          onclick="openPopup('popupkwu');getBlur()"
        >
          <div>
            <img src="./images/KWU.png" />
            <h6>KWU</h6>
          </div>
        </button>
        <button
          class="cabinet psdm"
          id="psdm"
          onclick="openPopup('popuppsdm');getBlur()"
        >
          <div>
            <img src="./images/PSDM.png" />
            <h6>PSDM</h6>
          </div>
        </button>
        <button
          class="cabinet kader"
          id="kader"
          onclick="openPopup('popupkader');getBlur()"
        >
          <div>
            <img src="./images/KADER.png" />
            <h6>KADER</h6>
          </div>
        </button>
      </div>
      <div class="description-list">
        <div>Media Informasi</div>
        <div>Kewirausahaan</div>
        <div>Pengembangan Sumber Daya Mahasiswa</div>
        <div>Kaderisasi</div>
      </div>
    </section>
    <section id="popup-section">
      <!----------------------------------------- POP UP ---------------------------------------------------->
      <div class="popup-cabinet" id="popupbph">
        <div class="close-btn-container">
          <span id="close-btn" onclick="closePopup('popupbph');getBlur()"
            >x</span
          >
        </div>
        <div>
          <h5>Badan Pengurus Harian</h5>
          <p>
            Badan Pengurus Harian merupakan badan yang melakukan fungsi
            monitoring, kontrol, koordinasi, pengembangan dan peningkatan sistem
            manajemen administrasi dan keuangan, serta bertanggung jawab terkait
            komunikasi guna membangun hubungan di internal maupun di eksternal
            HIMASIKA ITS.
          </p>
        </div>
      </div>
      <div class="popup-cabinet" id="popupadkesma">
        <div class="close-btn-container">
          <span id="close-btn" onclick="closePopup('popupadkesma');getBlur()"
            >x</span
          >
        </div>
        <div>
          <h5>Advokasi Kesejahteraan Mahasiswa</h5>
          <p>
            ADKESMA (Advokasi Kesejahteraan Mahasiswa) adalah Departemen yang
            hadir untuk menaungi dan melayani kebutuhan mahasiswa dalam bidang
            advokasi baik akademik maupun finansial, serta bantuan sosial.
            Departemen Adkesma akan senantiasa berusaha menunjang kesejahteraan
            mahasiswa agar dapat menjalankan proses perkuliahan dengan baik di
            Departemen Fisika ITS.
          </p>
        </div>
      </div>
      <div class="popup-cabinet" id="popuphublu">
        <div class="close-btn-container">
          <span id="close-btn" onclick="closePopup('popuphublu');getBlur()"
            >x</span
          >
        </div>
        <div>
          <h5>Hubungan Luar</h5>
          <p>
            Hublu merupakan singkatan dari hubungan luar. Definisi departemen
            hublu adalah departemen yang memiliki tugas dan tanggung jawab untuk
            menjalin hubungan relasi, baik dari stakeholder internal maupun
            eksternal.
          </p>
        </div>
      </div>
      <div class="popup-cabinet" id="popupdagri">
        <div class="close-btn-container">
          <span id="close-btn" onclick="closePopup('popupdagri');getBlur()"
            >x</span
          >
        </div>
        <div>
          <h5>Dalam Negeri</h5>
          <p>
            DAGRI merupakan Departemen Dalam Negeri yang membidangi urusan
            internal HIMASIKA ITS, serta mewadahi anggota dalam kegiatan
            internal dan pengembangan minat bakat anggotanya.
          </p>
        </div>
      </div>
      <div class="popup-cabinet" id="popupristek">
        <div class="close-btn-container">
          <span id="close-btn" onclick="closePopup('popupristek');getBlur()"
            >x</span
          >
        </div>
        <div>
          <h5>Riset dan Teknologi</h5>
          <p>
            Departemen Ristek adalah departemen yang memberikan wawasan dan
            informasi dalam bidang keprofesian serta menaungi optimalisasi
            potensi di bidang keilmiahan kepada mahasiswa Fisika ITS.
          </p>
        </div>
      </div>
      <div class="popup-cabinet" id="popupmedfo">
        <div class="close-btn-container">
          <span id="close-btn" onclick="closePopup('popupmedfo');getBlur()"
            >x</span
          >
        </div>
        <div>
          <h5>Media Informasi</h5>
          <p>
            MEDFO adalah Departemen Media Informasi di mana bertujuan untuk
            mengoptimalkan publikasi informasi, mengelola seluruh kanal media
            HIMASIKA ITS.
          </p>
        </div>
      </div>
      <div class="popup-cabinet" id="popupkwu">
        <div class="close-btn-container">
          <span id="close-btn" onclick="closePopup('popupkwu');getBlur()"
            >x</span
          >
        </div>
        <div>
          <h5>Kewirausahaan</h5>
          <p>
            Departemen kewirausahaan yang berfokus untuk optimalisasi pemasukan
            dana guna membantu keperluan Himasika ITS dan mengoptimalisasi
            potensi anggota di bidang kewirausahaan.
          </p>
        </div>
      </div>
      <div class="popup-cabinet" id="popuppsdm">
        <div class="close-btn-container">
          <span id="close-btn" onclick="closePopup('popuppsdm');getBlur()"
            >x</span
          >
        </div>
        <div>
          <h5>Pengembangan Sumber Daya Mahasiswa</h5>
          <p>
            PSDM Himasika ITS bertugas dan bertanggung jawab atas pemberian
            pelatihan serta optimalisasi potensi anggota di bidang manajerial
            organisasi dan kegiatan. Selain itu, PSDM Himasika ITS juga bertugas
            untuk mengawasi, mendata dan memetakan potensi anggotanya.
          </p>
        </div>
      </div>
      <div class="popup-cabinet" id="popupkader">
        <div class="close-btn-container">
          <span id="close-btn" onclick="closePopup('popupkader');getBlur()"
            >x</span
          >
        </div>
        <div>
          <h5>Kaderisasi</h5>
          <p>
            Kaderisasi merupakan suatu departemen yang melaksanakan,
            merencanakan, dan mendampingi mahasiswa baru dalam suatu proses yang
            menghasilkan kader-kader baru Himasika ITS yang akan menjadi penerus
            estafet kepengurusan Himasika ITS.
          </p>
        </div>
      </div>
    </section>

    <!-- Footer -->
    @extends('template.footer')
    @section('footer')
    @endsection
  
  </body>
</html>
