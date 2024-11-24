<?php
@extends('layouts.app')

@section('content')
    <h1>Assinaturas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Aluno</th>
                <th>Academia</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($assinaturas as $assinatura)
                <tr>
                    <td>{{ $assinatura->id }}</td>
                    <td>{{ $assinatura->aluno->nome }}</td>
                    <td>{{ $assinatura->academia->nome }}</td>
                    <td>
                        <a href="{{ route('assinaturas.edit', $assinatura) }}">Editar</a>
                        <form action="{{ route('assinaturas.destroy', $assinatura) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection