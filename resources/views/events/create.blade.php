@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')
   <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu Evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" accept="image/*" name="image" id="image" class="form-control-file" required="required">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Nome do evento" required="required">
        </div>
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" name="date" id="date" class="form-control" required="required">
        </div>
        <div class="form-group">
            <label for="time">Horário do Evento:</label>
            <input type="text" name="time" id="time" class="form-control" placeholder="Das 18:00 às 22:00hs" required="required">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="Cidade do evento" required="required">
        </div>
        <div class="form-group">
            <label for="locale">Local:</label>
            <input type="text" name="locale" id="locale" class="form-control" placeholder="Local do evento" required="required">
        </div>
        <div class="form-group">
            <label for="private">O Evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição do Evento:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento" required="required"></textarea>
        </div>
        <div class="form-group">
            <label for="itens">Adicione itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Ambiente Climatizado">Ambiente Climatizado
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Cadeiras">Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Mesas">Mesas
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Palco">Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Comanda Individual">Comanda Individual
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Comanda Coletiva">Comanda Coletiva
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Rodízio de Carnes">Rodízio de Carnes
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Rodízio de Massas">Rodízio de Massas
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Buffet">Buffet
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Bebida Grátis">Bebida Grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name="itens[]" value="Comida Grátis">Comida Grátis
            </div>
        </div>
        <br />
        <input type="submit" class="btn btn-primary" value="Criar Evento">

    </form>
   </div>
@endsection
