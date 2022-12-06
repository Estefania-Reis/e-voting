<x-admin-layout>
    <div class="py-3">
        <div class="row h-100 g-0">
            <div class="col-lg-12">
                <div class="card border-0 shadow">
                    <div class="card-header p-3 text-uppercase fs-6 fw-bold bg-light border-0 shadow-sm">Master Dadus Eleitor</div>
                    <div class="card-body">
                        <div class="row h-100 justify-content-between p-3">
                            <div class="col-auto">
                                <button type="button" class="btn btn-success btn-rounded shadow m-1 btn-open-modal" data-bs-toggle="modal" data-bs-target="#modalDataUser"><i class="bi bi-plus-square"></i> Adisiona Dadus</button>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-dark btn-rounded shadow m-1 btn-reload-table"><i class="bi bi-arrow-clockwise"></i> Reload Tabela</button>
                            </div>
                        </div>
                        <div class="table-responsive px-3">
                            <table class="table table-striped table-hover align-middle" id="userTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NRE</th>
                                        <th>Naran</th>
                                        <th>Ativu</th>
                                        <th>Data Moris</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Asaun</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row h-100 g-0 justify-content-center">
            <div class="col-lg">
                <div class="card border-0 shadow">
                    <div class="card-header p-3 text-uppercase fs-6 fw-bold bg-light border-0 shadow-sm">Update Massal</div>
                    <div class="card-body">
                        <div class="row h-100 justify-content-between p-3 text-center">
                            <div class="col-auto">
                                <p class="text-center fw-bold fs-6">Ativa Konta Eleitor Hotu</p>
                                <button type="button" class="btn btn-danger btn-rounded m-1 btn-active">Aktifkan Semua</button>
                            </div>
                            <div class="col-auto">
                                <p class="text-center fw-bold fs-6">Desativa Konta Eleitor Hotu</p>
                                <button type="button" class="btn btn-outline-danger btn-rounded m-1 btn-inactive">Desativa Hotu</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalDataUser" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content border-0">
                <div class="modal-header border-0 shadow-sm bg-light">
                    <h5 class="modal-title text-uppercase fw-bold" id="modalDataUserLabel">Dadus Eleitor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg">
                            <form action="{{ route('user.index') }}" method="post" id="formDataUser">
                                @csrf
                                <x-form-user :profile="$profile"></x-form-user>
                                <div class="m-3">
                                    <div class="form-check form-switch form-switch-lg">
                                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active">
                                        <label class="form-check-label px-3 py-2" for="is_active" id="label_is_active">Desativa</label>
                                    </div>
                                </div>
                            </form>
                            <div class="my-2" id="errorMessage"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 shadow bg-light">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Taka</button>
                    <button type="button" class="btn btn-primary btn-simpan-edit d-none" id="btn-simpan-edit" data-username="">Salva Mudansa</button>
                    <button type="button" class="btn btn-primary btn-simpan" id="btn-simpan">Adisiona Dadus</button>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>