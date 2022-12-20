@extends('layouts.app')
@section('title','Assistancia')
@section('content')
<div class="container">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                  <div class="card-body">
                                    <blockquote class="blockquote mb-0">
                                      <p>Liste des demandes</p>
                                    </blockquote>
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">N°</th>
                                                    <th scope="col">Nom</th>
                                                    <th scope="col">Prenom</th>
                                                    <th scope="col">Objet de reclamation</th>
                                                    <th scope="col">Nom de l'entreprise</th>
                                                    <th scope="col">Date d'envoie</th>
                                                    <th scope="col">Statut</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($connexions as $connexion )
                                                <tr class="">
                                                    <td scope="row">{{$loop->index+1}}</td>
                                                    <td>{{ $connexion->nom }}</td>
                                                    <td>{{ $connexion->prenom }}</td>
                                                    <td>{{ $connexion->objet}}</td>
                                                    <td>{{ $connexion->nEntreprise}}</td>
                                                    <td>{{ $connexion->created_at}}</td>
                                                    <td>@if ($connexion->statue=='en cours')
                                                        <button class="badge bg-warning ">{{$connexion->statue}}</button>
                                                        @elseif($connexion->statue=='termine')
                                                        <button class="badge bg-success">{{$connexion->statue}}</button>
                                                        @elseif($connexion->statue=='en attente')
                                                        <button class="badge bg-primary">{{$connexion->statue}}</button>
                                                        @else
                                                        <button class="badge bg-danger">{{$connexion->statue}}</button>




                                                    @endif</td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                  </div>
                                </div>

                            </div>
                        </div>

                                    <a href="{{ route('connexion.index') }}" class="btn btn-primary">Retour a la page d'acceuil</a>
                                  </div>
                                </div>
                            </div>


                </div>

</div>
@endsection
