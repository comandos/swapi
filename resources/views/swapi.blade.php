@extends('layouts/swapi')

@section('content')
    <div id="app" :api="setApiUrl('{{ url('/api')}}')">
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <router-link class="navbar-brand" :to="{name: 'home'}">SWAPI</router-link>
            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <router-link class="nav-link" :to="{name: 'people'}">People</router-link>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <router-view></router-view>
        </div>
    </div>
@endsection
