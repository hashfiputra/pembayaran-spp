<div>
    <div class="conteiner">
        <div class="row justify-content-center">
            <div class="card card-primary" style="width: 90%">
                <div class="card-header">
                    <h3 class="card-title">Laporan Pembayaran</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <hr>
                        <table class="table table-hover text-nowrap table-bordered">
                            <thead>
                                <tr>
                                    <th>NISN</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>SPP</th>
                                    <th>Tahun</th>
                                    <th>Bulan</th>
                                </tr>
                            </thead>
                            <tbody> @foreach ($dataPembayaran as $key) <tr>
                                    <td>{{$key->nisn}}</td>
                                    <td>{{$key->nama}}</td>
                                    <td>{{$key->nama_kelas}}</td>
                                    <td>Rp{{$key->nominal}}</td>
                                    <td>{{$key->tahun_dibayar}}</td>
                                    <td>{{$key->bulan_dibayar}}</td>
                                </tr> @endforeach </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
