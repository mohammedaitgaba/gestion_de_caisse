@extends('layouts.app')
@section('add_transaction')
<div class="transaction">
    
    <section class="transaction__posts">
        <div class="transaction__add">
            <form  method="POST" enctype="multipart/form-data">

                @csrf
                @method('POST')

                <label for="title">Date</label>
                <input type="date" id="title" name="date"  placeholder="Equipment title">
                <label for="description">Libelle</label>
                <input type="text" id="description" name="libelle" placeholder="Equipment description">
                <label for="image">Caisse : </label>

                <select name="caisse" id="">
                    <option value="recette" >Recette</option>
                    <option value="depense ">Dépense</option>
                </select>
                <label for="image">Montant : </label>
                <input type="number" step=".01"  name="montant" id="image">
                <input type="submit" id="submit" value="Add transaction">
            </form>
        </div>
    </section>
    
</div> 
@endsection