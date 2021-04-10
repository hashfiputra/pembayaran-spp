<div>
    <div>
        <div class="modal fade" id="simpanSiswa">
            <div class="modal-dialog">
                <div class="modal-content bg-primary">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            Data Siswa
                        </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @livewire('siswa-form')
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="modal fade" id="hapusSiswa">
            <div class="modal-dialog modal-sm">
                <div class="modal-content bg-danger">
                    <div class="modal-body align-self-center">
                        <h5>Yakin untuk hapus?</h5>
                    </div>
                    <div class="modal-footer justify-content-between" top-border="red">
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Batal
                        </button>
                        <button type="button" class="btn btn-primary" wire:click='hapus'>
                            Hapus
                        </button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="container">
            <div class="row justify-content-center"> 
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">
                                Siswa
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="p-0 card-body table-responsive">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#simpanSiswa">
                                    <i class="fas fa-user-plus"></i>
                                </button>
                                <a class="btn btn-info" href="siswaUser">
                                    Buat data akun siswa
                                </a>
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>NISN</th>
                                            <th>NIS</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Alamat</th>
                                            <th>No. Telepon</th>
                                            <th>SPP</th>
                                            <th>Ubah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($siswa as $key)
                                        <tr>
                                            <td>{{$key->nisn}}</td>
                                            <td>{{$key->nis}}</td>
                                            <td>{{$key->nama}}</td>
                                            <td>{{$key->id_kelas}}</td>
                                            <td>{{$key->alamat}}</td>
                                            <td>{{$key->no_tlp}}</td>
                                            <td>{{$key->id_spp}}</td>
                                            <td>
                                                <button wire:click="selectedItem({{$key->id}},'update')" class='btn btn-info'>
                                                    <i class="fas fa-user-edit"></i>
                                                </button>
                                                <button wire:click="selectedItem({{$key->id}},'hapus')" class='btn btn-danger'>
                                                    <i class="fas fa-user-minus"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
