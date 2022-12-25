@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Daftar Posts</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">User</th>
                    <th scope="col">Title</th>
                    <th scope="col">Likes</th>
                    <th scope="col">Comments</th>
                    <th scope="col">Saveds</th>
                </tr>
            </thead>
            <tbody id="list-jurusan">
                <tr>
                    <td colspan="6" class="text-center">Loading...</td>
                </tr>
            </tbody>
        </table>
        <div id="pagination"></div>
    </div>
    <script>
        const getPosts = async (url) => {
            const listPosts = document.getElementById('list-jurusan');
            const response = await fetch(url)
            const data = await response.json();
            const dataPosts = await data.data.data
            let html = '';
            await dataPosts.map((post, index) => {
                html += `
                    <tr>
                        <th scope="row">${index + 1}</th>
                        <td>${post.user.name}</td>
                        <td>${post.title}</td>
                        <td>${post.post_likes_count}</td>
                        <td>${post.post_comments_count}</td>
                        <td>${post.post_saveds_count}</td>
                    </tr>
                `
            })
            listPosts.innerHTML = html
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
                                    <a class="page-link" href="#" onClick="getPosts('${link.url}')">
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
        getPosts('http://localhost:8000/api/posts')
    </script>
@endsection
