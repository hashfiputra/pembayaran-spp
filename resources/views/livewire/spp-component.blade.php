<div>
    <div class="modal fade" id="simpanSPP">
        <div class="modal-dialog">
            <div class="modal-content bg-primary">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Data SPP
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"> @livewire('spp-form') </div>
                {{-- <div class="modal-footer justify-content-between"> <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button> <button type="button" class="btn btn-outline-light">Save changes</button> </div> --}}
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->
    <div class="modal fade" id="hapusSPP">
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
            </div><!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->
    <div class="conteiner">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">SPP</h3>
                    </div>
                    <div class="card-body">
                        <div class="p-0 card-body table-responsive"> <button type="button" class="btn btn-primary"
                                data-toggle="modal" data-target="#simpanSPP"> <i class="fas fa-plus"></i>
                            </button>
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Kode SPP</th>
                                        <th>Tahun</th>
                                        <th>Nominal</th>
                                        <th>Ubah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($spp as $key)
                                    <tr>
                                        <td>{{$key->id}}</td>
                                        <td>{{$key->tahun}}</td>
                                        <td>Rp{{$key->nominal}}</td>
                                        <td>
                                            <button wire:click="selectedItem({{$key->id}},'update')"
                                                class='btn btn-info'>
                                                <i class="fas fa-pen"></i>
                                            </button>
                                            <button wire:click="selectedItem({{$key->id}},'hapus')"
                                                class='btn btn-danger'>
                                                <i class="fas fa-trash"></i>
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
