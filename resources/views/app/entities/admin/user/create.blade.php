@extends('app')


@section('css')
@stop

@section('content')
    @include("app.partials.navbarAdmin")
    <div class="container col-md-6">
        <div class="raw text-center">
            <form class="form-signin" action="{{ action("App\AdminController@postCreateUser") }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h1 class="h3 mb-3 font-weight-normal">Création d'un Utilisateur</h1>
                <div class="offset-md-2 col-md-8  ">
                    <label for="inputname" class="sr-only">Nom</label>
                    <input type="text" id="inputname" class="form-control mb-md-3" placeholder="Prénom"
                           name="first_name" required autofocus>
                    <label for="inputfirstname" class="sr-only">Prénom</label>
                    <input type="text" id="inputfirstname" class="form-control mb-md-3" name="last_name"
                           placeholder="Nom" required autofocus>
                    <label for="inputEmail" class="sr-only">Adresse mail</label>
                    <input type="email" id="inputEmail" class="form-control mb-md-3" name="email"
                           placeholder="Adresse mail" required autofocus>
                {{--<input type="email" id="inputEmail" class="form-control mb-md-3" name="email"  placeholder="Adresse mail" required autofocus>--}}
                <!--<button id="btnlogin" class="btn btn-lg btn-block btn btn-outline-info mb-md-3" type="button">Ajouter</button>-->
                    {{--<button id="btnlogin" class="btn btn-lg btn-block btn btn-outline-info" type="submit">Ajouter</button>--}}
                </div>
                <hr>
                <h1 class="h3 mb-3 font-weight-normal">Ajout des fichiers a l'utilsateur</h1>
                <div class="row">
                    <div class=" col-md-4 px-0">
                        <div class="card px-3 py-3 mr-1">
                            
                            <label for="inputname" class="sr-only">Nom</label>
                            <input type="text" id="inputname" class="form-control mb-md-3" placeholder="Nom" name="name[]"
                                   required autofocus>
                            <label for="inputfirstname" class="sr-only">Descritpion</label>
                            <textarea name="content[]" class="form-control" id="" cols="30" rows="10"></textarea>
                            <label for="inputEmail" class="sr-only">Fichier</label>
                            <input type="file" name="file[]" class="mb-3" multiple="multiple">
                            
                        </div>
                    </div>
                    <div class=" col-md-4 px-0">
                        <div class="card px-3 py-3 mr-1">
                            
                            <label for="inputname" class="sr-only">Nom</label>
                            <input type="text" id="inputname" class="form-control mb-md-3" placeholder="Nom" name="name[]"
                                   required autofocus>
                            <label for="inputfirstname" class="sr-only">Descritpion</label>
                            <textarea name="content[]" class="form-control" id="" cols="30" rows="10"></textarea>
                            <label for="inputEmail" class="sr-only">Fichier</label>
                            <input type="file" name="file[]" class="mb-3" multiple="multiple">
                        </div>
                    </div>
                    <div class=" col-md-4 px-0">
                        <div class="card px-3 py-3 mr-1">
                            
                            <label for="inputname" class="sr-only">Nom</label>
                            <input type="text" id="inputname" class="form-control mb-md-3" placeholder="Nom" name="name[]"
                                   required autofocus>
                            <label for="inputfirstname" class="sr-only">Descritpion</label>
                            <textarea name="content[]" class="form-control" id="" cols="30" rows="10"></textarea>
                            <label for="inputEmail" class="sr-only">Fichier</label>
                            <input type="file" name="file[]" class="mb-3" multiple="multiple">
                        </div>
                    </div>
                </div>
                <button id="btnlogin" class="btn btn-lg btn-block btn btn-outline-info mt-3" type="submit">
                    Ajouter
                </button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
            </form>
        </div>
    </div>
@stop

@section('js')
@stop