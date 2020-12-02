@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Sukurkime dienos patiekalą:</div>
                    <div class="card-body">
                        <form action="{{ route('menu.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Pavadinimas: </label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Kaina: </label>
                                <input type="number" step="0.01" name="price" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Porcijos svoris: </label>
                                <input type="number" step="1" name="weight" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Mėsos kiekis porcijoje: </label>
                                <input type="number" step="1" name="meat" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Aprašymas: </label>
                                <textarea id="mce" name="about" rows=10 cols=100 class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
