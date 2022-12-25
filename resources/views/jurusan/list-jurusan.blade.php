@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Daftar Jurusan</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Jurusan</th>
                    <th scope="col">Nama Fakultas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody id="list-jurusan">
                <tr>
                    <td colspan="4" class="text-center">Loading...</td>
                </tr>
            </tbody>
        </table>
        <div id="pagination"></div>
    </div>
    <script>
        const getJurusan = async (url) => {
            const listJurusan = document.getElementById('list-jurusan');
            const response = await fetch(url)
            const data = await response.json();
            const dataJurusan = await data.data.data
            let html = '';
            await dataJurusan.map((jurusan, index) => {
                html += `
                    <tr>
                        <th scope="row">${index + 1}</th>
                        <td>${jurusan.name}</td>
                        <td>${jurusan.faculty.name}</td>
                        <td>
                            <a href="/jurusan/${jurusan.id}/edit" class="btn btn-primary">Edit</a>
                            <a href="/jurusan/${jurusan.id}/delete" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                `
            })
            listJurusan.innerHTML = html
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
                                    <a class="page-link" href="#" onClick="getJurusan('${link.url}')">
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
        getJurusan('http://localhost:8000/api/jurusan')
    </script>
@endsection

