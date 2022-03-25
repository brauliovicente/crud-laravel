@extends('layouts.app')

@section('title','Criação')

@section('content')
    <nav class="container">
            <section style="display: flex; justify-content: space-between; margin-top: 50px;">
                <h1>Cadastrar jogos </h1>
                <a  href="{{route('jogos-index')}}" class="btn btn-success">Listar jogos</a>
            </section>
            
            <form action="{{route('jogos-store')}}" method="POST">
                @csrf
                <hr>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite um nome...">
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Digite uma Categoria para o jogo...">
                </div>
                <div class="mb-3">
                    <label for="ano_criacao" class="form-label">Ano de criação:</label>
                    <input type="number" class="form-control" name="ano_criacao" id="ano_criacao" placeholder="Ano de criação...">
                </div>

               <div class="mb-3">
                    <label for="valor" class="form-label">Valor:</label>
                    <input type="text" class="form-control" name="valor" id="valor" placeholder="Valor do jogo">
              </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary" name="submit" value="Enviar">
                </div>
            </form>
    </nav>

@endsection