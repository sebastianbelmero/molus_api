@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Daftar Fakultas</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Fakultas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody id="list-fakultas">
                <tr>
                    <td colspan="3" class="text-center">Loading...</td>
                </tr>
            </tbody>
        </table>
        <div id="pagination"></div>
    </div>
    <script>
        const getFakultas = async (url) => {
            const listFakultas = document.getElementById('list-fakultas');
            const response = await fetch(url)
            const data = await response.json();
            const dataFakultas = await data.data.data
            let html = '';
            await dataFakultas.map((fakultas, index) => {
                html += `
                    <tr>
                        <th scope="row">${index + 1}</th>
                        <td>${fakultas.name}</td>
                        <td>
                            <a href="/fakultas/${fakultas.id}/edit" class="btn btn-primary">Edit</a>
                            <a href="/fakultas/${fakultas.id}/delete" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                `
            })
            listFakultas.innerHTML = html
            const dataLinks = await data.data.links
            const pagination = document.getElementById('pagination');
            let htmlPagination = '';
            htmlPagination += `
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    ${
                        dataLinks.map((link, index) => {
                            return `
                                <li class="page-item ${link.active ? 'active' : ''} ">
                                    <a class="page-link" href="#" onClick="getFakultas('${link.url}')">
                                        ${link.label}
                                    </a>
                                </li>
                            `
                        })
                    }
                </ul>
            </nav>
            `
            pagination.innerHTML = htmlPagination
        }
        getFakultas('http://localhost:8000/api/fakultas')
    </script>
@endsection

