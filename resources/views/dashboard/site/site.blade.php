@extends('welcome')

@section('content')
    <style>
        .tail {
            padding: 8px 8px;
        }

        .input-box {
            position: relative;
            height: 76px;
            max-width: 900px;
            width: 100%;
            background: #fff;
            margin: 0 20px;
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .input-box i,
        .input-box .button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .input-box i {
            left: 20px;
            font-size: 30px;
            color: #707070;
        }

        .input-box input {
            height: 100%;
            width: 100%;
            outline: none;
            font-size: 18px;
            font-weight: 400;
            border: none;
            padding: 0 155px 0 65px;
            background-color: transparent;
        }

        .input-box .button {
            right: 20px;
            font-size: 16px;
            font-weight: 400;
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 6px;
            background-color: #4070f4;
            cursor: pointer;
        }

        .input-box .button:active {
            transform: translateY(-50%) scale(0.98);
        }

        /* Responsive */
        @media screen and (max-width: 500px) {
            .input-box {
                height: 66px;
                margin: 0 8px;
            }

            .input-box i {
                left: 12px;
                font-size: 25px;
            }

            .input-box input {
                padding: 0 112px 0 50px;
            }

            .input-box .button {
                right: 12px;
                font-size: 14px;
                padding: 8px 18px;
            }
        }
        @media screen and (min-width:426px) and (max-width: 500px){
            .btn-add{
                padding: 0 10px;
                width: 100%;
            }
        }

        @media screen and (max-width:425px){
            .btn-add{
                padding: 0 10px;
                width: 100%;
            }
        }
    </style>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-sitemap menu-icon"></i>
                </span> Sites
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="row" style="margin-bottom: 20px; display: flex; justify-content:center; align-items:center;">
            <form action="{{ route('site.index') }}" method="get" accept-charset="UTF-8" role="search">
                <div class="input-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Rechercher un site..." name="search"
                        value="{{ request()->search }}" />
                    <button class="button">Rechercher</button>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 20px;">
                            <h4 class="card-title">Liste des Sites</h4>

                            <button type="button" data-bs-toggle="modal" data-bs-target="#modal-ajout"
                                class="btn btn-add btn-gradient-primary">+ Ajouter un site</button>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Nom du site </th>
                                        <th> Localistion de la latitude </th>
                                        <th> Localistion de la longitude</th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                @foreach ($sites as $site)
                                    <tbody>
                                        <tr>
                                            <td>
                                                {{ $site->nom_site }}
                                            </td>
                                            <td> {{ $site->local_latitude_site }} </td>
                                            <td>
                                                {{ $site->local_longitude_site }}
                                            </td>
                                            <td>
                                                {{-- <button class="page-title-icon bg-primary text-white me-2 tail" type="button" style="border: none;">
                                                    <i class="mdi mdi-content-copy"></i>
                                                </button> --}}
                                                <a href="#edit{{ $site->id }}"
                                                    class="page-title-icon bg-primary text-white me-2 tail" type="button"
                                                    data-bs-toggle="modal" style="border: none;">
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </a>
                                                <a href="#delete{{ $site->id }}" type="button" data-bs-toggle="modal"
                                                    class="page-title-icon bg-danger text-white me-2 tail"
                                                    style="border: none;">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                                @include('dashboard.site.action')
                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                        <div style="margin-top: 20px;"></div>
                        @if (count($sites) > 0)
                            {{ $sites->links() }}
                        @else
                            <div class="d-flex justify-content-center align-items-center">
                                <p class="card-description">Pas de site.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/todolist.js') }}"></script>
    <!-- End custom js for this page -->

    {{-- Modal boite d'Ajout --}}
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal fade" id="modal-ajout" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Ajout d'un site</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('site.store') }}" method="POST" class="forms-sample">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Nom du site</label>
                                <input type="text" class="form-control @error('nom_site') is-invalid @enderror"
                                    id="exampleInputUsername1" placeholder="Nom du site" name="nom_site"
                                    value="{{ old('nom_site') }}">
                                @error('nom_site')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Localisation latitude</label>
                                <input type="number" id="floatInput" name="local_latitude" step="any" class="form-control @error('local_latitude') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="Localisation latitude" value="{{ old('local_latitude') }}">
                                @error('local_latitude')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Localisation longitude</label>
                                <input type="number" id="floatInput" name="local_longitude" step="any" class="form-control @error('local_longitude') is-invalid @enderror" id="exampleInputEmail1"
                                    placeholder="Localisation longitude" value="{{ old('local_longitude') }}">
                                @error('local_longitude')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary">Enregister</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- Fin du Modal boite d'Ajout --}}
@endsection
