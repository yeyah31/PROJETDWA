@extends('layouts.app')

@section('content')
<style>
    body{
        background-image: url('/images/lara.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <div class="container">
                            @if ($message = Session::get('success'))
                            <div class="p-4 mb-3 bg-green-40 rounded">
                              <p class="text-green-80">{{ $message }}</p>
                          </div>
                                            @endif
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Formulaire pour client</h4>
                                            <form action="{{route('store.home')}}" method="POST" >
                                                @csrf
                                                <div class="row">

                                                <div class="col-12 col-md-6">
                                                    <div class="mb-3">
                                                        <label for="nom" class="form-label">Nom</label>
                                                        <input type="text" class="form-control @error('nom') is-invalid

                                                        @enderror" name="nom" id="nom" value="{{old('nom')}}"/>



                                                    </div>
                                                    @error('nom')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="mb-3">
                                                        <label for="prenom" class="form-label">Prenom</label>
                                                        <input type="text" class="form-control @error('prenom') is-invalid

                                                        @enderror"  name="prenom" id="prenom" value="{{old('prenom')}}">
                                                    </div>
                                                    @error('prenom')
                                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="row">

                                                    <div class="col-12">
                                                        <div class="mb-3">

                                                            <label for="objet" class="form-label">Objet</label>
                                                            <textarea class="form-control @error('objet') is-invalid

                                                            @enderror" name="objet" id="objet" rows="3" value="{{old('objet')}}"></textarea>
                                                        </div>
                                                        @error('objet')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="nEntreprise" class="form-label">Nom de l'entreprise</label>
                                                            <input class="form-control @error('nEntreprise') is-invalid

                                                            @enderror" name="nEntreprise" id="nEntreprise" value="{{old('nEntreprise')}}">



                                                        </div>
                                                        @error('nEntreprise')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                                    </div>
                                                   <!-- <div class="col-12 col-md-6">
                                                        <div class="mb-3">
                                                            <label for="date" class="form-label">Date d'envoie</label>
                                                            <input type="datetime-local" class="form-control" name="date-envoie">
                                                        </div>
                                                    </div>-->
                                                    <div class="col-12">
                                                        <button type="reset" class="btn btn-secondary">Vider</button>
                                                        <button type="submit" class="btn btn-primary" >Enregistrer </button>
                                                        <button type="submit" class="btn btn-success" >
                                                            <a href="{{route('clients.home')}}" style="color:white; text-decoration:none">Voir mes demandes
                                                         </a> </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div></div>
</div>
        </div>

        </div>
    </div>
</div>
@endsection
