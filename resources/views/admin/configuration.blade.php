<x-admin-layout>
    <style>
        trix-editor {
            height: 19.5rem !important;
            overflow-y: auto !important;
        }
    </style>
    <div class="py-3">
        <div class="row h-100">
            <div class="col-lg-5">
                <div class="card border-0 shadow">
                    <div class="card-header p-3 text-uppercase fs-6 fw-bold bg-light border-0 shadow-sm">Konfigurasi</div>
                    <div class="card-body">
                        <form action="{{ route('update.config', $config->id) }}" method="post" id="formUpdateConfig">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <p class="text-center fw-bold">Defini Tempu Eleisaun</p>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="date_start" name="date_start" min="{{ date("Y-m-d") }}" value="{{ date_format(new DateTime($config->start), "Y-m-d") }}" required>
                                            <label for="date_start" id="label_date_start">Data Hahu</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input type="date" class="form-control" id="date_end" name="date_end" min="{{ date("Y-m-d") }}" value="{{ date_format(new DateTime($config->end), "Y-m-d") }}" required>
                                            <label for="date_end" id="label_date_end">Data Remata</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input type="time" class="form-control" id="time_start" name="time_start" value="{{ date_format(new DateTime($config->start), "H:i") }}" required>
                                            <label for="time_start" id="label_time_start">Oras Hahu</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input type="time" class="form-control" id="time_end" name="time_end" value="{{ date_format(new DateTime($config->end), "H:i")}}" required>
                                            <label for="time_end" id="label_time_end">Oras Remata</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <p class="text-center fw-bold">Seluk Tan</p>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="event_name" name="event_name" placeholder="Nama Acara" value="{{ $config->event_name }}" required>
                                    <label for="event_name" id="label_event_name">Naran Eventu</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Lokasi Acara" value="{{ $config->location }}" required>
                                    <label for="location" id="label_location">Lokalizasaun Eventu</label>
                                </div>
                            </div>
                        </form>
                        <div class="my-2" id="errorConfig"></div>
                    </div>
                    <div class="card-footer border-0 shadow-sm text-center">
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <button type="button" class="btn btn-success btn-rounded shadow m-2" onclick="$('#formUpdateConfig')[0].reset()"><i class="bi bi-clock-history"></i>&nbsp; Reset </button>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-primary btn-rounded shadow m-2" data-id="{{ $config->id }}" id="btn-up-conf"><i class="bi bi-arrow-clockwise"></i>&nbsp; Renova Konfigurasaun </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg">
                <div class="card border-0 shadow">
                    <div class="card-header p-3 text-uppercase fs-6 fw-bold bg-light border-0 shadow-sm">Defini Avizu</div>
                    <div class="card-body">
                        <form action="{{ route('update.announcement', $config->id) }}" method="post" id="formUpdateAnnouncement">
                            @method('put')
                            @csrf
                            <div class="mb-2">
                                <label for="announcement" class="form-label fw-bold">Avizu</label>
                                <input id="announcement" type="hidden" name="announcement" value="{{ $config->announcement }}">
                                <trix-editor input="announcement"></trix-editor>
                            </div>
                        </form>
                        <div class="my-2" id="errorAnnoun"></div>
                    </div>
                    <div class="card-footer border-0 shadow-sm text-center">
                        <button type="button" class="btn btn-outline-primary btn-rounded shadow m-2" data-id="{{ $config->id }}" id="btn-up-ann"><i class="bi bi-clipboard-check"></i>&nbsp; Update Avizu </button>
                    </div>
                </div>
            </div>
        </div>
        @if (auth()->guard('admin')->user()->is_super == 1)
        <div class="row h-100 g-0 justify-content-center py-2">
            <div class="col-lg">
                <div class="card border-0 shadow">
                    <div class="card-header p-3 text-uppercase fs-6 fw-bold bg-light border-0 shadow-sm">Reset Dadus Hotu</div>
                    <div class="card-body">
                        <div class="row h-100 justify-content-between p-3 text-center">
                            <div class="col-auto">
                                <p class="text-center fw-bold fs-6">Dadus Eleitor</p>
                                <button type="button" class="btn btn-danger btn-rounded m-1 btn-reset-user" data-url="{{ route('reset.user') }}">Reset Dadus Eleitor</button>
                            </div>
                            <div class="col-auto">
                                <p class="text-center fw-bold fs-6">Dadus Kandidatu</p>
                                <button type="button" class="btn btn-danger btn-rounded m-1 btn-reset-candidate" data-url="{{ route('reset.candidate') }}">Reset Dadus Kandidatu</button>
                            </div>
                            <div class="col-auto">
                                <p class="text-center fw-bold fs-6">Dadus Kontajem Votus</p>
                                <button type="button" class="btn btn-danger btn-rounded m-1 btn-reset-vote" data-url="{{ route('reset.vote') }}">Reset Dadus Eleisaun</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
</x-admin-layout>