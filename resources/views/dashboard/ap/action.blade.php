{{-- Modal boite de modification  --}}
{{-- <div class="modal-dialog modal-dialog-centered"> --}}
<div class="modal fade" id="edit{{ $ap->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modification d'un ap</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('ap.update', $ap->id) }}" method="POST" class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nom de l'ap</label>
                        <input type="text" class="form-control @error('nom_ap') is-invalid @enderror"
                            id="exampleInputUsername1" placeholder="Nom de l'ap" name="nom_ap"
                            value="{{ $ap->nom_ap }}">
                        {{-- @error('nom_ap')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">SSID</label>
                        <input type="text" class="form-control @error('ssid') is-invalid @enderror"
                            id="exampleInputUsername1" placeholder="Nom de l'ap" name="ssid"
                            value="{{ $ap->ssid }}">
                        {{-- @error('ssid')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Adresse de l'ap</label>
                        <input type="text" class="form-control @error('adresse_ap') is-invalid @enderror"
                            id="exampleInputUsername1" placeholder="Nom de l'ap" name="adresse_ap"
                            value="{{ $ap->adresse_ap }}">
                        {{-- @error('adresse_ap')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Adresse masque de l'ap</label>
                        <input type="text" class="form-control @error('masque') is-invalid @enderror"
                            id="exampleInputUsername1" placeholder="Nom de l'ap" name="masque"
                            value="{{ $ap->masque_ap }}">
                        {{-- @error('masque')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Adresse mac de l'ap</label>
                        <input type="text" class="form-control @error('adresse_mac') is-invalid @enderror"
                            id="exampleInputUsername1" placeholder="Adresse mac de l'ap" name="adresse_mac"
                            value="{{ $ap->adresse_mac }}">
                        {{-- @error('adresse_mac')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Azimuth</label>
                        <input type="number" class="form-control @error('azimuth') is-invalid @enderror"
                            id="exampleInputUsername1" placeholder="Nom de l'ap" name="azimuth"
                            value="{{ $ap->azimuth }}">
                        {{-- @error('azimuth')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Hauteur de l'ap</label>
                        <input type="number" class="form-control @error('hauteur') is-invalid @enderror"
                            id="exampleInputUsername1" placeholder="Nom de l'ap" name="hauteur"
                            value="{{ $ap->hauteur }}">
                        {{-- @error('hauteur')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect3">Associé au site</label>
                        <select name="nom_site"
                            class="form-control form-control-sm @error('nom_site') is-invalid @enderror"
                            id="exampleFormControlSelect3">
                            <option>{{ $ap->site->nom_site }}</option>
                            @foreach ($sites as $site)
                                @if ($site->nom_site == $ap->site->nom_site)
                                @else
                                    <option>{{ $site->nom_site }}</option>
                                @endif
                            @endforeach
                        </select>
                        {{-- @error('nom_site')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
{{-- </div> --}}
{{-- Fin du Modal boite de modification --}}


{{-- Modal boite de confirmation  --}}
{{-- <div class="modal-dialog modal-dialog-centered"> --}}
<div class="modal fade" id="delete{{ $ap->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Suppression d'un ap</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Êtes vous sûr de vouloir supprimer cet ap?
            </div>
            <form action="{{ route('ap.delete', $ap->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Oui, je suis sûr!</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- </div> --}}
{{-- Fin du Modal boite de confirmation --}}
