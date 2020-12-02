@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
       <div class="col-md-8">
           <div class="card">
               <div class="card-header">Sukurkime restoraną:</div>
               <div class="card-body">
                   <form action="{{ route('restaurant.store') }}" method="POST">
                       @csrf
                       <div class="form-group">
                            <label for="">Pavadinimas: </label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Žmonių kiekis telpantis restorane: </label>
                            <input type="number" name="customers" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Darbuotojų kiekis: </label>
                            <input type="number" name="employees" class="form-control">
                        </div>
                       <div class="form-group">
                           <label>Šalis: </label>
                           <select name="menu_id" id="" class="form-control">
                                <option value="" selected disabled>Pasirinkite patiekalą</option>
                                @foreach ($menus as $menu)
                                <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                                @endforeach
                           </select>
                       </div>
                       <button type="submit" class="btn btn-primary">Submit</button>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection