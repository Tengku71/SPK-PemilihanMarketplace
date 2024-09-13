<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ url('bootstrap5/css/bootstrap.min.css') }}" rel="stylesheet">
  <script src="{{ url('bootstrap5/js/bootstrap.bundle.min.js') }}"></script>
  <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-info py-3 sticky-top mb-5">
    <div class="container-fluid d-flex justify-content-between">
      <a class="navbar-brand text-light fw-bold fs-4 fs-md-3 pb-3" href="#">SPK Pemilihan Marketplace</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <ul class="navbar-nav gap-4">
          <li class="nav-item">
            <button class="nav-link text-light fs-5 fw-medium" onclick="scrollToSection('#beranda')">Beranda</button>
          </li>
          <li class="nav-item">
            <button class="nav-link text-light fs-5 fw-medium" onclick="scrollToSection('#tentang')">Tentang</button>
          </li>
          <li class="nav-item">
            <button class="nav-link text-light fs-5 fw-medium" onclick="scrollToSection('#fitur')">Fitur</button>
          </li>
          <li class="nav-item btn btn-primary px-2 py-0 rounded-5">
            <a class="nav-link btn btn-primary rounded-5 text-light fs-5 fw-medium" href="{{ url('login') }}">Mulai Sekarang</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="pb-2"></div>
  <div class="container-fluid text-center row justify-content-center fw-bold my-5 g-0" id="beranda">
    <div class="fs-2 p-0">Selamat Datang di</div>
    <div class="text-info fs-2 p-0">SPK Pemilihan Marketplace</div>
    <div class="w-75 mt-5 fs-5">Memilih marketplace yang tepat untuk kebutuhan Anda dapat menjadi tugas yang menantang. Sistem Pendukung Keputusan (SPK) kami menggunakan metode Simple Additive Weighting (SAW) untuk membantu Anda membuat keputusan yang lebih baik dan lebih cepat.</div>
  </div>
  <div class="py-5"></div>
  <div class="py-5"></div>
  <div class="container-fluid g-0 bg-light py-5" id="tentang">
    <div class="fs-3 p-0 fw-bold text-center mb-5">Mengapa Memilih SPK Pemilihan Marketplace?</div>
    <div class="d-flex flex-md-row flex-column justify-content-md-around align-items-center mt-3 gap-5 gap-md-3 px-3">
      <div class="col-6 col-md-3 text-center text-md-start">
        <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center gap-2 mb-2">
          <div class="bg-info-subtle rounded-3 px-2 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-card-checklist text-secondary" viewBox="0 0 16 16">
              <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
              <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
            </svg>
          </div>
          <div class="d-flex flex-column align-items-center">
            <p class="m-0 fs-5 fw-medium">Analisis Terperinci</p>
          </div>
        </div>
        <p class="fs-5 fw-normal">Evaluasi marketplace berdasarkan berbagai kriteria yang Anda tentukan.</p>
      </div>
      <div class="col-6 col-md-3 text-center text-md-start">
        <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center gap-2 mb-2">
          <div class="bg-info-subtle rounded-3 px-2 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-list-stars text-secondary" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5"/>
              <path d="M2.242 2.194a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.256-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194z"/>
            </svg>
          </div>
          <div class="d-flex flex-column align-items-center">
            <p class="m-0 fs-5 fw-medium">Rekomendasi yang Akurat</p>
          </div>
        </div>
        <p class="fs-5 fw-normal">Hasilkan rekomendasi berdasarkan peringkat tertinggi berdasarkan bobot yang Anda tetapkan.</p>
      </div>
      <div class="col-6 col-md-3 text-center text-md-start">
        <div class="d-flex flex-column flex-md-row justify-content-center justify-content-md-start align-items-center gap-2 mb-2">
          <div class="bg-info-subtle rounded-3 px-2 py-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-patch-check text-secondary" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
            <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"/>
          </svg>
          </div>
          <div class="d-flex flex-column align-items-center">
            <p class="m-0 fs-5 fw-medium">Pemilihan yang Tepat</p>
          </div>
        </div>
        <p class="fs-5 fw-normal">Memastikan Anda memilih marketplace yang paling sesuai dengan kebutuhan Anda.</p>
      </div>
    </div>
  </div>

  <div class="py-5"></div>
  <div class="py-5"></div>

  <div class="container-fluid g-0 py-5" id="fitur">
    <div class="fs-3 p-0 fw-bold text-center mb-4">Fitur - Fitur</div>
    <div class="d-flex align-items-center flex-column flex-md-row justify-content-md-around gap-md-0 gap-4 px-4" style="height: 60vh">
      <div class="bg-light d-flex justify-content-center flex-column align-items-center py-3 px-4 col-md-3 col-9 h-100 gap-2 rounded-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-clipboard2-data" viewBox="0 0 16 16">
          <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5z"/>
          <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5z"/>
          <path d="M10 7a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm4-3a1 1 0 0 0-1 1v3a1 1 0 1 0 2 0V9a1 1 0 0 0-1-1"/>
        </svg>
        <p class="fs-5 fw-medium">Evaluasi Kriteria</p>
        <p class="fs-5 fw-normal">Menganalisis marketplace berdasarkan berbagai faktor seperti kelengkapan produk, desain antarmuka, tanggapan pelayanan, proses transaksi dan diskon.</p>
      </div>
      <div class="bg-light d-flex align-items-center justify-content-center flex-column align-items-center py-3 px-4 col-md-3 col-9 h-100 gap-2 rounded-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
          <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
          <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
          <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
        </svg>
        <p class="fs-5 fw-medium">Laporan Detail</p>
        <p class="fs-5 fw-normal">Menghasilkan laporan detail untuk membantu dalam proses pengambilan keputusan Anda.</p>
      </div>
      <div class="bg-light d-flex justify-content-center flex-column align-items-center py-3 px-4 col-md-3 col-9 h-100 gap-2 rounded-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
          <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1q.01.775.056 1.469c.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.5.5 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667q.045-.694.056-1.469z"/>
        </svg>
        <p class="fs-5 fw-medium">Perangkingan</p>
        <p class="fs-5 fw-normal">Bandingkan dan rangking marketplace berdasarkan total nilai dari kriteria yang diberikan.</p>
      </div>
    </div>
  </div>

  <div class="py-5"></div>
  <div class="py-5"></div>
  <div class="py-5 d-md-none"></div>
  <div class="py-5 d-md-none"></div>
  <div class="py-5 d-md-none"></div>
  <div class="py-5 d-md-none"></div>
  <div class="py-5 d-md-none"></div>
  <div class="py-5 d-md-none"></div>
  <div class="py-5 d-md-none"></div>
  <div class="py-5 d-md-none"></div>
  <div class="py-5 d-md-none"></div>

  <div class="container-fluid g-0 bg-light px-md-3 px-4 py-4 d-flex justify-content-between" id="footer">
    <div class="col">
      <p class="fs-2 fw-medium">SPK Pemilihan Marketplace</p>
      <div class="row">
        <p class="col-md-1 col fs-5 fw-medium pe-0">Email :</p>
        <p class="col fs-5 fw-normal ps-md-0">spkpemilihanmarketplace@gmail.com</p>
      </div>
      <p class="fs-5 fw-normal m-0">&#169; Tengku Dimas Aditya</p>
    </div>
    <div class="ms-md-5 mt-5 col-3 d-md-flex justify-content-md-end">
      <a class="link-underline link-underline-opacity-0" href="https://instagram.com/dimas_417" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram text-dark" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
        </svg>
      </a>
      <a class="link-underline link-underline-opacity-0" href="https://github.com/Tengku71" target="_blank">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github text-dark" viewBox="0 0 16 16">
          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
        </svg>
      </a>
    </div>
  </div>

  <script>
    function scrollToSection(sectionId) {
      const section = document.querySelector(sectionId);
      if (section) {
        section.scrollIntoView({ behavior: 'smooth', block: 'center' });
      }
    }
  </script>
</body>
</html>