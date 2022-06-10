@extends('Layout.profile')

  <body>
    <!-- Container -->
    <div class="container p-5">
      <div class="header text-center">
        <h3 class="fw-bold">Edit Data Kos</h3>
        <h5>Edit Informasi Terkait Kos Anda</h5>
      </div>

      <div class="container-lg shadow mt-5 p-5 justify-content-center text-center" style="border-radius: 8px">
        <h5 class="text-center pb-3 fw-bolder">Data Penyewa Kos</h5>
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">No. Telepon</th>
              <th scope="col">Email</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          @forelse ($datas as $item)
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>{{$item->Nama_penghuni}}</td>
                <td>{{$item->No_telepon_penghuni}}</td>
                <td>{{$item->Email_penghuni}}</td>
                <td>
                  @if ($item->Penghuni_Id == '-')
                      
                  @else
                  <form  action="/pemilik-kos/data-kos/penghuni/{{$item->Penghuni_Id}}" method="post" >
                    @method('DELETE')
                    @csrf
                    <button style="float: right; margin-left:5px;" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus penghuni ini?')" class="btn btn-outline-warning">
                      Hapus
                    </button>
                  </form>
                  <button  type="button" class="btn btn-warning">
                    <a style="color: black" href="{{url('/pendaftaran-indekos/edit/'. $item->Penghuni_Id)}}" class="link-a">
                      Edit
                    </a>
                  </button>
                  @endif
                  
                </td>
              </tr>
              
            </tbody>
          
          @empty
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>-</td>
              <td>-</td>
              {{-- <td>A13</td> --}}
              {{-- <td><button type="button" class="btn btn-outline-warning">Hapus</button> <button type="button" class="btn btn-warning">Edit</button></td> --}}
            </tr>
            
          </tbody>
          @endforelse
      </table>
      </div>



      <div class="container-lg shadow mt-5 p-5 justify-content-center" style="border-radius: 8px">
        <h5 class="text-center pb-3 fw-bolder">Informasi Kos</h5>
        <!-- No.1 -->
        <div class="container-lg shadow-sm mt-3 p-4 justify-content-center" style="border-radius: 16px">
          <div class="row justify-content-start">
            <div class="col fw-bolder fs-5">Data Kos</div>
            <div class="col text-end ">
              <form  action="/pemilik-kos/data-kos/{{$datas[0]->Id_kos}}" method="post">
                @method('DELETE')
                @csrf
                <button style="float: right; margin-left:5px;" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus indekos ini?')" class="btn btn-outline-warning">
                  Hapus
                </button>
              </form>
              <button  type="button" class="btn btn-warning">
                <a style="color: black" href="{{url('/pendaftaran-indekos/edit/'. $datas[0]->Id_kos)}}" class="link-a">
                  Edit
                </a>
              </button>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Button Back To Home -->
    <div class="d-grid gap-2 col-6 mx-auto">
      <a href="{{url('/pemilik-kos/homepage')}}" class="btn btn-outline-warning justify-content-center" type="button" style="border-radius: 8px">Kembali Ke Beranda</a>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
