@extends('layouts.app')
@section('content')
    <main class="py-4">
        <div class="container">
            @if ($errors->any())
                <h4 style="color:red">{{ $errors->first() }}</h4>
            @endif
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Pavadinimas</th>
                        <th>Kaina</th>
                        <th>Porcijos svoris</th>
                        <th>Mėsos kiekis porcijoje</th>
                        <th>Apibūdinimas</th>
                    </tr>
                    @foreach ($menus as $menu)
                        <tr>
                            <td>{{ $menu->title }}</td>
                            <td>{{ $menu->price }}</td>
                            <td>{{ $menu->weight }}</td>
                            <td>{{ $menu->meat }}</td>
                            <td>{!! $menu->about !!}</td>
                            <td>
                                <form action={{ route('menu.destroy', $menu->id) }} method="POST">
                                    <a class="btn btn-success" href={{ route('menu.edit', $menu->id) }}>Redaguoti</a>
                                    @csrf @method('delete')
                                    <input type="submit" class="btn btn-danger" value="Trinti" />
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                <div>
                    <a href="{{ route('menu.create') }}" class="btn btn-success">Pridėti</a>
                </div>
            </div>
        </div>
        @yield('content')
    </main>
@endsection
