@extends('layouts.app')
@section('update_transaction')
<div class="transaction">
    <section class="transaction__header">
        @if($errors->any())
            <h4 style="color: red">{{$errors->first()}}</h4>
        @endif
    </section>
    <section class="transaction__posts">
        <div class="transaction__add">
            <form action="/transactions/{{ $transaction->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label for="title">Date</label>
                <input type="date" id="title" name="date" value="{{ $transaction->date }}" placeholder="Equipment title">
                <label for="description">Libelle</label>
                <input type="text" id="description" value="{{ucfirst($transaction->libelle)}}" name="libelle" placeholder="Equipment description">
                <label for="image">Caisse : </label>
                <select name="caisse" id="">
                    <option value="recette" @if($transaction->caisse_type === 'recette') selected @endif>Recette</option>
                    <option value="depense" @if($transaction->caisse_type === 'depense') selected @endif>Dépense</option>
                </select>
                <label for="image">Montant : </label>
                <input type="number" step=".01" value="{{$transaction->caisse}}" name="montant" id="image">
                <input type="submit" id="submit" value="Update transaction">
            </form>
        </div>
    </section>
</div>
@endsection