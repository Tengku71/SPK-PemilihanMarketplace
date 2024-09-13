@extends('layouts.dashboard')

@section('title')
  Dashboard
@endsection

@section('content')
  <div class="content col bg-info">
    <div class="mb-2 mt-2 d-flex align-items-center ">
      <div class="d-flex col-7 col-md-11 align-items-center">
        <h3 class="ms-4 me-2 text-light fw-bold d-inline fs-3 d-none d-md-block">Sistem Pendukung Keputusan Pemilihan Marketplace</h3>
        <h3 class="ms-4 me-2 text-light fw-bold d-inline fs-5 d-md-none">Pemilihan Marketplace</h3>
        <div class="" type="button" data-bs-toggle="modal" data-bs-target="#penjelasan">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-question-lg bg-light rounded-circle p-1 btn" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.475 5.458c-.284 0-.514-.237-.47-.517C4.28 3.24 5.576 2 7.825 2c2.25 0 3.767 1.36 3.767 3.215 0 1.344-.665 2.288-1.79 2.973-1.1.659-1.414 1.118-1.414 2.01v.03a.5.5 0 0 1-.5.5h-.77a.5.5 0 0 1-.5-.495l-.003-.2c-.043-1.221.477-2.001 1.645-2.712 1.03-.632 1.397-1.135 1.397-2.028 0-.979-.758-1.698-1.926-1.698-1.009 0-1.71.529-1.938 1.402-.066.254-.278.461-.54.461h-.777ZM7.496 14c.622 0 1.095-.474 1.095-1.09 0-.618-.473-1.092-1.095-1.092-.606 0-1.087.474-1.087 1.091S6.89 14 7.496 14"/>
          </svg>
        </div>
      </div>
      <div class="dropdown-center col-md-1 col-0 offset-2 offset-md-0">
        <a class="link-underline link-underline-opacity-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
          </svg>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg bg-none col-1 d-block d-md-none me-5">
        <div class="container-fluid">
          <a class="" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
          </a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav position-absolute bg-light px-2 align-items-center" style="right: 1%;">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('dashboard') }}">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('perhitungan') }}">Perhitungan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('edit/bobot') }}">Edit Bobot</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <!-- Modal -->
    <div class="modal fade container-fluid w-100 h-100" id="penjelasan" tabindex="-1"> 
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="penjelasan">Penjelasan</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Menu Dashboard berisi alternatif yang akan dinilai oleh user, nilai kriteria yang sekarang merupakan nilai default yang dimana nilai tiap pitoritas sebagai berikut. Kelengkapan Produk: 25%, Desain Antarmuka: 10%, Pelayanan: 20%, Proses Transaksi: 20%, Diskon: 25% Dan semua kriteria berkategori benefit</p>
            <p>Menu Perhitungan berisi angka yang akan menentukan hasil penilaian dari user</p>
            <p>Menu Edit, user dapat mengubah nilai dari prioritas/bobot kriteria</p>
          </div>
        </div>
      </div>
    </div>
    <div class="ms-4 me-4 pt-3 bg-light rounded-3 shadow me-2 mb-3 px-3 bg-body-tertiary" style="height: 87vh;">
      <div class="ps-1 row align-items-center">
        <div class="col-md-2 col-2 pe-0">
          <a href="{{ url('tambah-alter') }}" class="btn btn-success text-light d-none d-md-block">Tambah Alternatif</a>
          <a href="{{ url('tambah-alter') }}" class="btn btn-success d-md-none">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus text-light" viewBox="0 0 16 16">
              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
            </svg>
          </a>
        </div>
        <form action="{{ url('dashboard/cari')}}" class="col-md-5 col-7 row align-items-center" method="GET">
          <div class="col-md-10 col-8">
            <input type="text" name="cari" placeholder="Cari Alternatif .." class="form-control pb-2 py-2" value="{{ old('cari') }}">
          </div>
          <div class="col-md-1 col-1">
            <button type="submit" class="btn btn-info text-light">Cari</button>
          </div>
        </form>
        <div class="col-md-2 d-none d-md-block">
          <a href="{{ url('dashboard') }}" class="btn btn-info text-light">Refresh</a>
        </div>
        <div class="d-flex col-md-3 justify-content-end">
          <form method="GET" class="d-flex gap-2" action="{{ url('dashboard') }}">
            <div class="form-group">
              <select name="sortOrder" class="form-select py-2" id="sortOrder" onchange="this.form.submit()">
                <option value="desc" {{ request('sortOrder') == 'desc' ? 'selected' : '' }}>Tertinggi</option>
                <option value="asc" {{ request('sortOrder') == 'asc' ? 'selected' : '' }}>Terendah</option>
              </select>
            </div>
            <div class="form-group">
              <select name="per_page" class="form-select py-2" id="per_page" onchange="this.form.submit()">
                <option value="7" {{ request('per_page') == 7 ? 'selected' : '' }}>7</option>
                <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10</option>
                <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25</option>
                <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50</option>
              </select>
            </div>
        </form>
      </div>
      </div>
      <div class="mx-1 pt-2 gap-2 overflow-auto z-n1" style="height: 71vh;">
        <table class="table text-center border rounded-3 align-items-center ">
          <thead class="sticky-top">
              <tr>
                  <th class="col-1">No.</th>
                  <th class="col">Alternatif</th>
                  <th class="col">Rekomendasi/Preferensi</th>
                  <th class="col-2">Aksi</th>
              </tr>
          </thead>
          @php
              $i = $alts->firstItem();
          @endphp
          <tbody>
          @foreach ($alts as $alt)
            <tr>
              <td>{{ $loop->iteration + ($alts->currentPage() - 1) * $alts->perPage() }}</td>
              <td>{{ $alt->a }}</td>
              <td>
                <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: {{ $pfs[$alt->id]->v*100 ?? 'N/A' }}%">{{ $pfs[$alt->id]->v*100 ?? 'N/A' }}%</div>
                </div>
              </td>
              <td>
                <div class="d-flex gap-1 justify-content-center">
                  <a href='{{ "dashboard/$alt->id/edit" }}' class="btn btn-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                    </svg>
                  </a>
                  <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $alt->id }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-dash" viewBox="0 0 16 16">
                      <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
                    </svg>
                  </button>
                    <!-- Modal -->
                  <div class="modal fade" id="deleteModal{{ $alt->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $alt->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="deleteModal{{ $alt->id }}">Apakah {{ $alt->a }} Akan di Hapus?</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                          <form action="{{ url("dashboard/$alt->id") }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Iya</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <div class="fs-5">
        {{ $alts->links('vendor.pagination.bootstrap-5') }}
      </div>
    </div>
@endsection
