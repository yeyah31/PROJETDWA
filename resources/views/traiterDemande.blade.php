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
                                      <p>Liste des demandes de reclamations</p>
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
                                                <form action="{{route('traiter.admin.home')}}" method="POST">
                                                    @csrf
                                                @foreach ($connexions as $connexion )
                                                <tr class="">
                                                    <td scope="row">{{$loop->index+1}}</td>
                                                    <td>{{ $connexion->nom }}</td>
                                                    <td>{{ $connexion->prenom }}</td>
                                                    <td>{{ $connexion->objet}}</td>
                                                    <td>{{ $connexion->nEntreprise}}</td>
                                                    <td>{{ $connexion->created_at}}</td>
                                                    <td>


                                                        <select name="select" id="select" >


                                                        <option value="en attente">en attente   </option>
                                                        <option value="en cour ">en cour   </option>
                                                        <option value="termine ">termine   </option>
                                                        <option value="annuler">annuler  </option>

                                                    </select>

                                                       </td>
                                                    <td>

                                                        <button type="submit" class="btn btn-success" href="route{{('contac.home')}}">Traiter la demande</button>   </form>
                                                        <form class="d-inline" action="{{ route('destroy.home') }}" method="POST">
                                                            @csrf
                                                           @method('delete')
                                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                                        </form>
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

                                    <a href="{{ route('admin.home') }}" class="btn btn-primary">Retour a la page d'acceuil</a>
                                  </div>
                                </div>
                            </div>


                </div>

</div>
@endsection
