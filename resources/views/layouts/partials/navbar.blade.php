<nav class="navbar  navbar-inverse navbar-fixed-top">
    <div class="container container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand text-uppercase" href="#">
                Unimos
            </a>
        </div>
        <!-- /.navbar-header -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            @if (! Auth::guest())
                <ul class="nav navbar-nav">
                    <li class="{{ Request::segment(1) == "professor" ? "active" : "" }}"> <a href="{{ url('/professor') }}">Professor </a></li>
                    @role('superadministrator')
                    <li class="{{ Request::segment(1) == "administrator" ? "active" : "" }}"><a href="{{ url('/administrator') }}">admin</a></li>
                    @endrole
                    <li class="{{ Request::segment(1) == "unidadeensino" ? "active" : "" }}"><a href="{{ url('/unidadeensino') }}">Unidade de Ensino</a></li>
                    <li class="{{ Request::segment(1) == "articulador" ? "active" : "" }}"><a href="{{ url('/articulador') }}">Articulador</a></li>
                    <li class="{{ Request::segment(1) == "contratante" ? "active" : "" }}"><a href="{{ route('articulador.index') }}">Contratante</a></li>
                    <li class="{{ Request::segment(1) == "Espacos" ? "active" : "" }}"><a href="{{ route('espaco.index') }}">Espaços</a></li>
                    <li class="{{ Request::segment(1) == "Espacos" ? "active" : "" }}"><a href="{{ url('/paypal') }}">Paypal</a></li>
                    <li class="{{ Request::segment(1) == "roles" ? "active" : "" }}"><a href="{{ url('/roles') }}">roles</a></li>
                    <li class="{{ Request::segment(1) == "addRoleUnidade" ? "active" : "" }}"><a href="{{ url('/addRoleUnidade') }}">Add role Unidade</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Perfis <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="{{ Request::segment(1) == "unidadeensino" ? "active" : "" }}"><a href="{{ route('unidadeensino.index') }}">Unidade de Ensino</a></li>
                            <li class="{{ Request::segment(1) == "articulador" ? "active" : "" }}"><a href="{{ route('unidadeensino.index') }}">Articulador</a></li>
                            <li class="{{ Request::segment(1) == "contratante" ? "active" : "" }}"><a href="{{ route('contratante.profile') }}">Contratante</a></li>
                            <li class="{{ Request::segment(1) == "professor" ? "active" : "" }}"><a href="{{ route('professor.profile') }}">Professor</a></li>





                        </ul>
                    </li>
                </ul>
                @endif

                        <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Cadastre-se</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>

                @if (! Auth::guest())

                @endif
        </div>
    </div>
</nav>
