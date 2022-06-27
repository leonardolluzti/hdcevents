@extends('layouts.main')

@section('title', $event->title)

@section('content')
    <div class="col-md-10 offset-mf-1">
        <div class="row">
            <h1>{{ $event->title }}</h1>
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <p class="card-date"><ion-icon name="calendar-outline"></ion-icon> {{ date('d/m/Y', strtotime($event->date)) }}</p>
                <p class="event-time"><ion-icon name="alarm-outline"></ion-icon> {{ $event->time }}</p>
                @if($event->private == 1)
                <p class="event-private"><ion-icon name="list-circle-outline"></ion-icon> Evento Privado</p>
                @else
                <p class="event-private"><ion-icon name="list-circle-outline"></ion-icon> Evento Público</p>
                @endif
                <p class="event-city"><ion-icon name="map-outline"></ion-icon> {{ $event->city }}</p>
                <p class="event-locale"><ion-icon name="location-outline"></ion-icon> {{ $event->locale }}</p>
                <p class="event-participants"><ion-icon name="people-outline"></ion-icon>{{ count($event->users) }} Participantes {{-- $event->participants --}}</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon>{{ $eventOwner['name'] }}</p>
                @if(!$hasUserJoined)
                    <form action="/events/join/{{ $event->id }}" method="POST">
                    @csrf
                    <a href="/events/join/{{ $event->id }}"
                        class="btn btn-primary"
                        id="event-submit"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        Confirmar Presença</a>
                    </form>
                @else
                    <p class="already-joined-msg">Você já está participando deste evento!</p>
                @endif
                <h3>O evento conta com:</h3>
                <ul id="itens-list">
                    @foreach($event->itens as $item)
                    <li><ion-icon name="checkmark-circle"></ion-icon><span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </div>
            <div id="description-container" class="col-md-12">
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{ $event->description }}</p>
            </div>
        </div>
    </div>

@endsection
