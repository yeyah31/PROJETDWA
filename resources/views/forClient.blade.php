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
                                      <p>Liste de mes  demandes</p>
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
                                                @foreach ($client as $client )
                                                <tr class="">
                                                    <td scope="row">{{$loop->index+1}}</td>
                                                    <td>{{ $client->nom }}</td>
                                                    <td>{{ $client->prenom }}</td>
                                                    <td>{{ $client->objet}}</td>
                                                    <td>{{ $client->nEntreprise}}</td>
                                                    <td>{{ $client->created_at}}</td>
                                                    <td>@if ($client->statue=='en cours')
                                                        <button class="badge bg-warning ">{{$client->statue}}</button>
                                                        @elseif($client->statue=='termine')
                                                        <button class="badge bg-success">{{$client->statue}}</button>
                                                        @elseif($client->statue=='en attente')
                                                        <button class="badge bg-primary">{{$client->statue}}</button>
                                                        @else
                                                        <button class="badge bg-danger">{{$client->statue}}</button>




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

                                    <a href="{{url('home')}}" class="btn btn-primary">Retour a la page d'acceuil</a>
                                  </div>
                                </div>
                            </div>


                </div>

</div>
@endsection
