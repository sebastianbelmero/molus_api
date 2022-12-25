### Fakultas
```
http://localhost:8000/api/fakultas
```
##### Result
```json
{
  "status": "success",
  "data": {
    "current_page": 1,
    "data": [
      {
        "id": 1,
        "name": "Fakultas Ilmu Komputer dan Teknologi Informasi",
        "created_at": "2022-12-25T21:16:10.000000Z",
        "updated_at": "2022-12-25T21:16:10.000000Z",
        "majors": [
          {
            "id": 1,
            "name": "Ilmu Komputer",
            "faculty_id": 1,
            "created_at": "2022-12-25T21:16:10.000000Z",
            "updated_at": "2022-12-25T21:16:10.000000Z"
          },
          {
            "id": 2,
            "name": "Teknologi Informasi",
            "faculty_id": 1,
            "created_at": "2022-12-25T21:16:10.000000Z",
            "updated_at": "2022-12-25T21:16:10.000000Z"
          }
        ]
      }
    ],
    "first_page_url": "http://192.168.98.67:8000/api/fakultas?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http://192.168.98.67:8000/api/fakultas?page=1",
    "links": [
      { "url": null, "label": "&laquo; Previous", "active": false },
      {
        "url": "http://192.168.98.67:8000/api/fakultas?page=1",
        "label": "1",
        "active": true
      },
      { "url": null, "label": "Next &raquo;", "active": false }
    ],
    "next_page_url": null,
    "path": "http://192.168.98.67:8000/api/fakultas",
    "per_page": 10,
    "prev_page_url": null,
    "to": 1,
    "total": 1
  }
}
```

### Jurusan
```
http://localhost:8000/api/jurusan
```

##### Result
```json
{
  "status": "success",
  "data": {
    "current_page": 1,
    "data": [
      {
        "id": 1,
        "name": "Ilmu Komputer",
        "faculty_id": 1,
        "created_at": "2022-12-25T21:16:10.000000Z",
        "updated_at": "2022-12-25T21:16:10.000000Z",
        "faculty": {
          "id": 1,
          "name": "Fakultas Ilmu Komputer dan Teknologi Informasi",
          "created_at": "2022-12-25T21:16:10.000000Z",
          "updated_at": "2022-12-25T21:16:10.000000Z"
        }
      },
      {
        "id": 2,
        "name": "Teknologi Informasi",
        "faculty_id": 1,
        "created_at": "2022-12-25T21:16:10.000000Z",
        "updated_at": "2022-12-25T21:16:10.000000Z",
        "faculty": {
          "id": 1,
          "name": "Fakultas Ilmu Komputer dan Teknologi Informasi",
          "created_at": "2022-12-25T21:16:10.000000Z",
          "updated_at": "2022-12-25T21:16:10.000000Z"
        }
      }
    ],
    "first_page_url": "http://192.168.98.67:8000/api/jurusan?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http://192.168.98.67:8000/api/jurusan?page=1",
    "links": [
      { "url": null, "label": "&laquo; Previous", "active": false },
      {
        "url": "http://192.168.98.67:8000/api/jurusan?page=1",
        "label": "1",
        "active": true
      },
      { "url": null, "label": "Next &raquo;", "active": false }
    ],
    "next_page_url": null,
    "path": "http://192.168.98.67:8000/api/jurusan",
    "per_page": 10,
    "prev_page_url": null,
    "to": 2,
    "total": 2
  }
}
```

### Post
```
http://localhost:8000/api/post
```

##### Result
```json
{
  "status": "success",
  "data": {
    "current_page": 1,
    "data": [
      {
        "id": 1,
        "user_id": 39,
        "title": "Post 1",
        "image": "https://picsum.photos/200/300",
        "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
        "active": 1,
        "created_at": "2022-12-25T21:16:15.000000Z",
        "updated_at": "2022-12-25T21:16:15.000000Z",
        "post_likes_count": 8,
        "post_saveds_count": 9,
        "post_comments_count": 8,
        "user": {
          "id": 39,
          "name": "Mahasiswa 37",
          "email": "mahasiswa37@gmail.com",
          "nim": "191402037",
          "email_verified_at": null,
          "role_id": 3,
          "active": 1,
          "created_at": "2022-12-25T21:16:12.000000Z",
          "updated_at": "2022-12-25T21:16:12.000000Z"
        },
        "user_profile": {
          "id": 37,
          "user_id": 39,
          "gender": "P",
          "birthdate": "1995-12-25",
          "address": "Jl. Moen Crossing No. 11",
          "phone": "0858030761893",
          "major_id": 2,
          "entry_year": "2008",
          "graduation_year": "2016",
          "job": "Printing Machine Operator",
          "photo": "https://randomuser.me/api/portraits/men/83.jpg",
          "created_at": "2022-12-25T21:51:57.000000Z",
          "updated_at": "2022-12-25T21:51:57.000000Z",
          "major": {
            "id": 2,
            "name": "Teknologi Informasi",
            "faculty_id": 1,
            "created_at": "2022-12-25T21:16:10.000000Z",
            "updated_at": "2022-12-25T21:16:10.000000Z"
          }
        }
      },
      {
        "id": 2,
        "user_id": 46,
        "title": "Post 2",
        "image": "https://picsum.photos/200/300",
        "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
        "active": 1,
        "created_at": "2022-12-25T21:16:15.000000Z",
        "updated_at": "2022-12-25T21:16:15.000000Z",
        "post_likes_count": 9,
        "post_saveds_count": 11,
        "post_comments_count": 15,
        "user": {
          "id": 46,
          "name": "Mahasiswa 44",
          "email": "mahasiswa44@gmail.com",
          "nim": "191402044",
          "email_verified_at": null,
          "role_id": 3,
          "active": 1,
          "created_at": "2022-12-25T21:16:12.000000Z",
          "updated_at": "2022-12-25T21:16:12.000000Z"
        },
        "user_profile": {
          "id": 44,
          "user_id": 46,
          "gender": "L",
          "birthdate": "2004-12-25",
          "address": "Jl. Gilberto Junction No. 95",
          "phone": "0834956129632",
          "major_id": 1,
          "entry_year": "2013",
          "graduation_year": "2021",
          "job": "Opticians",
          "photo": "https://randomuser.me/api/portraits/men/40.jpg",
          "created_at": "2022-12-25T21:51:57.000000Z",
          "updated_at": "2022-12-25T21:51:57.000000Z",
          "major": {
            "id": 1,
            "name": "Ilmu Komputer",
            "faculty_id": 1,
            "created_at": "2022-12-25T21:16:10.000000Z",
            "updated_at": "2022-12-25T21:16:10.000000Z"
          }
        }
      },
      {
        "id": 3,
        "user_id": 16,
        "title": "Post 3",
        "image": "https://picsum.photos/200/300",
        "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
        "active": 1,
        "created_at": "2022-12-25T21:16:15.000000Z",
        "updated_at": "2022-12-25T21:16:15.000000Z",
        "post_likes_count": 8,
        "post_saveds_count": 10,
        "post_comments_count": 10,
        "user": {
          "id": 16,
          "name": "Mahasiswa 14",
          "email": "mahasiswa14@gmail.com",
          "nim": "191402014",
          "email_verified_at": null,
          "role_id": 3,
          "active": 1,
          "created_at": "2022-12-25T21:16:11.000000Z",
          "updated_at": "2022-12-25T21:16:11.000000Z"
        },
        "user_profile": {
          "id": 14,
          "user_id": 16,
          "gender": "L",
          "birthdate": "1998-12-25",
          "address": "Jl. Graciela Stravenue No. 93",
          "phone": "0813159041039",
          "major_id": 1,
          "entry_year": "2013",
          "graduation_year": "2019",
          "job": "Shipping and Receiving Clerk",
          "photo": "https://randomuser.me/api/portraits/men/75.jpg",
          "created_at": "2022-12-25T21:51:57.000000Z",
          "updated_at": "2022-12-25T21:51:57.000000Z",
          "major": {
            "id": 1,
            "name": "Ilmu Komputer",
            "faculty_id": 1,
            "created_at": "2022-12-25T21:16:10.000000Z",
            "updated_at": "2022-12-25T21:16:10.000000Z"
          }
        }
      },
      {
        "id": 4,
        "user_id": 30,
        "title": "Post 4",
        "image": "https://picsum.photos/200/300",
        "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
        "active": 1,
        "created_at": "2022-12-25T21:16:15.000000Z",
        "updated_at": "2022-12-25T21:16:15.000000Z",
        "post_likes_count": 10,
        "post_saveds_count": 13,
        "post_comments_count": 9,
        "user": {
          "id": 30,
          "name": "Mahasiswa 28",
          "email": "mahasiswa28@gmail.com",
          "nim": "191402028",
          "email_verified_at": null,
          "role_id": 3,
          "active": 1,
          "created_at": "2022-12-25T21:16:11.000000Z",
          "updated_at": "2022-12-25T21:16:11.000000Z"
        },
        "user_profile": {
          "id": 28,
          "user_id": 30,
          "gender": "L",
          "birthdate": "1998-12-25",
          "address": "Jl. Armand Crest No. 88",
          "phone": "0866554883210",
          "major_id": 2,
          "entry_year": "2012",
          "graduation_year": "2019",
          "job": "Wholesale Buyer",
          "photo": "https://randomuser.me/api/portraits/men/84.jpg",
          "created_at": "2022-12-25T21:51:57.000000Z",
          "updated_at": "2022-12-25T21:51:57.000000Z",
          "major": {
            "id": 2,
            "name": "Teknologi Informasi",
            "faculty_id": 1,
            "created_at": "2022-12-25T21:16:10.000000Z",
            "updated_at": "2022-12-25T21:16:10.000000Z"
          }
        }
      },
      {
        "id": 5,
        "user_id": 38,
        "title": "Post 5",
        "image": "https://picsum.photos/200/300",
        "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
        "active": 1,
        "created_at": "2022-12-25T21:16:15.000000Z",
        "updated_at": "2022-12-25T21:16:15.000000Z",
        "post_likes_count": 10,
        "post_saveds_count": 9,
        "post_comments_count": 9,
        "user": {
          "id": 38,
          "name": "Mahasiswa 36",
          "email": "mahasiswa36@gmail.com",
          "nim": "191402036",
          "email_verified_at": null,
          "role_id": 3,
          "active": 1,
          "created_at": "2022-12-25T21:16:12.000000Z",
          "updated_at": "2022-12-25T21:16:12.000000Z"
        },
        "user_profile": {
          "id": 36,
          "user_id": 38,
          "gender": "P",
          "birthdate": "2004-12-25",
          "address": "Jl. Kovacek Inlet No. 64",
          "phone": "0868112418555",
          "major_id": 1,
          "entry_year": "2013",
          "graduation_year": "2020",
          "job": "Teller",
          "photo": "https://randomuser.me/api/portraits/men/27.jpg",
          "created_at": "2022-12-25T21:51:57.000000Z",
          "updated_at": "2022-12-25T21:51:57.000000Z",
          "major": {
            "id": 1,
            "name": "Ilmu Komputer",
            "faculty_id": 1,
            "created_at": "2022-12-25T21:16:10.000000Z",
            "updated_at": "2022-12-25T21:16:10.000000Z"
          }
        }
      },
      {
        "id": 6,
        "user_id": 8,
        "title": "Post 6",
        "image": "https://picsum.photos/200/300",
        "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
        "active": 1,
        "created_at": "2022-12-25T21:16:15.000000Z",
        "updated_at": "2022-12-25T21:16:15.000000Z",
        "post_likes_count": 14,
        "post_saveds_count": 7,
        "post_comments_count": 16,
        "user": {
          "id": 8,
          "name": "Mahasiswa 6",
          "email": "mahasiswa6@gmail.com",
          "nim": "191402006",
          "email_verified_at": null,
          "role_id": 3,
          "active": 1,
          "created_at": "2022-12-25T21:16:10.000000Z",
          "updated_at": "2022-12-25T21:16:10.000000Z"
        },
        "user_profile": {
          "id": 6,
          "user_id": 8,
          "gender": "L",
          "birthdate": "1997-12-25",
          "address": "Jl. Madisyn Ramp No. 57",
          "phone": "0884865974133",
          "major_id": 1,
          "entry_year": "2008",
          "graduation_year": "2019",
          "job": "Dragline Operator",
          "photo": "https://randomuser.me/api/portraits/men/49.jpg",
          "created_at": "2022-12-25T21:51:57.000000Z",
          "updated_at": "2022-12-25T21:51:57.000000Z",
          "major": {
            "id": 1,
            "name": "Ilmu Komputer",
            "faculty_id": 1,
            "created_at": "2022-12-25T21:16:10.000000Z",
            "updated_at": "2022-12-25T21:16:10.000000Z"
          }
        }
      },
      {
        "id": 7,
        "user_id": 51,
        "title": "Post 7",
        "image": "https://picsum.photos/200/300",
        "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
        "active": 1,
        "created_at": "2022-12-25T21:16:15.000000Z",
        "updated_at": "2022-12-25T21:16:15.000000Z",
        "post_likes_count": 12,
        "post_saveds_count": 12,
        "post_comments_count": 9,
        "user": {
          "id": 51,
          "name": "Mahasiswa 49",
          "email": "mahasiswa49@gmail.com",
          "nim": "191402049",
          "email_verified_at": null,
          "role_id": 3,
          "active": 1,
          "created_at": "2022-12-25T21:16:12.000000Z",
          "updated_at": "2022-12-25T21:16:12.000000Z"
        },
        "user_profile": {
          "id": 49,
          "user_id": 51,
          "gender": "L",
          "birthdate": "1997-12-25",
          "address": "Jl. Hadley Hill No. 12",
          "phone": "0813349966723",
          "major_id": 2,
          "entry_year": "2014",
          "graduation_year": "2016",
          "job": "Agricultural Inspector",
          "photo": "https://randomuser.me/api/portraits/men/99.jpg",
          "created_at": "2022-12-25T21:51:57.000000Z",
          "updated_at": "2022-12-25T21:51:57.000000Z",
          "major": {
            "id": 2,
            "name": "Teknologi Informasi",
            "faculty_id": 1,
            "created_at": "2022-12-25T21:16:10.000000Z",
            "updated_at": "2022-12-25T21:16:10.000000Z"
          }
        }
      },
      {
        "id": 8,
        "user_id": 22,
        "title": "Post 8",
        "image": "https://picsum.photos/200/300",
        "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
        "active": 1,
        "created_at": "2022-12-25T21:16:15.000000Z",
        "updated_at": "2022-12-25T21:16:15.000000Z",
        "post_likes_count": 11,
        "post_saveds_count": 7,
        "post_comments_count": 9,
        "user": {
          "id": 22,
          "name": "Mahasiswa 20",
          "email": "mahasiswa20@gmail.com",
          "nim": "191402020",
          "email_verified_at": null,
          "role_id": 3,
          "active": 1,
          "created_at": "2022-12-25T21:16:11.000000Z",
          "updated_at": "2022-12-25T21:16:11.000000Z"
        },
        "user_profile": {
          "id": 20,
          "user_id": 22,
          "gender": "P",
          "birthdate": "1998-12-25",
          "address": "Jl. Ryan Estate No. 91",
          "phone": "0818100619521",
          "major_id": 1,
          "entry_year": "2008",
          "graduation_year": "2016",
          "job": "Poet OR Lyricist",
          "photo": "https://randomuser.me/api/portraits/men/26.jpg",
          "created_at": "2022-12-25T21:51:57.000000Z",
          "updated_at": "2022-12-25T21:51:57.000000Z",
          "major": {
            "id": 1,
            "name": "Ilmu Komputer",
            "faculty_id": 1,
            "created_at": "2022-12-25T21:16:10.000000Z",
            "updated_at": "2022-12-25T21:16:10.000000Z"
          }
        }
      },
      {
        "id": 9,
        "user_id": 20,
        "title": "Post 9",
        "image": "https://picsum.photos/200/300",
        "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
        "active": 1,
        "created_at": "2022-12-25T21:16:15.000000Z",
        "updated_at": "2022-12-25T21:16:15.000000Z",
        "post_likes_count": 9,
        "post_saveds_count": 8,
        "post_comments_count": 10,
        "user": {
          "id": 20,
          "name": "Mahasiswa 18",
          "email": "mahasiswa18@gmail.com",
          "nim": "191402018",
          "email_verified_at": null,
          "role_id": 3,
          "active": 1,
          "created_at": "2022-12-25T21:16:11.000000Z",
          "updated_at": "2022-12-25T21:16:11.000000Z"
        },
        "user_profile": {
          "id": 18,
          "user_id": 20,
          "gender": "P",
          "birthdate": "2001-12-25",
          "address": "Jl. Heller Cliff No. 90",
          "phone": "0845207664412",
          "major_id": 2,
          "entry_year": "2014",
          "graduation_year": "2016",
          "job": "Private Sector Executive",
          "photo": "https://randomuser.me/api/portraits/men/31.jpg",
          "created_at": "2022-12-25T21:51:57.000000Z",
          "updated_at": "2022-12-25T21:51:57.000000Z",
          "major": {
            "id": 2,
            "name": "Teknologi Informasi",
            "faculty_id": 1,
            "created_at": "2022-12-25T21:16:10.000000Z",
            "updated_at": "2022-12-25T21:16:10.000000Z"
          }
        }
      },
      {
        "id": 10,
        "user_id": 49,
        "title": "Post 10",
        "image": "https://picsum.photos/200/300",
        "description": "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.",
        "active": 1,
        "created_at": "2022-12-25T21:16:15.000000Z",
        "updated_at": "2022-12-25T21:16:15.000000Z",
        "post_likes_count": 9,
        "post_saveds_count": 12,
        "post_comments_count": 14,
        "user": {
          "id": 49,
          "name": "Mahasiswa 47",
          "email": "mahasiswa47@gmail.com",
          "nim": "191402047",
          "email_verified_at": null,
          "role_id": 3,
          "active": 1,
          "created_at": "2022-12-25T21:16:12.000000Z",
          "updated_at": "2022-12-25T21:16:12.000000Z"
        },
        "user_profile": {
          "id": 47,
          "user_id": 49,
          "gender": "P",
          "birthdate": "2000-12-25",
          "address": "Jl. Santina Turnpike No. 11",
          "phone": "0887212371882",
          "major_id": 1,
          "entry_year": "2008",
          "graduation_year": "2019",
          "job": "Loading Machine Operator",
          "photo": "https://randomuser.me/api/portraits/men/35.jpg",
          "created_at": "2022-12-25T21:51:57.000000Z",
          "updated_at": "2022-12-25T21:51:57.000000Z",
          "major": {
            "id": 1,
            "name": "Ilmu Komputer",
            "faculty_id": 1,
            "created_at": "2022-12-25T21:16:10.000000Z",
            "updated_at": "2022-12-25T21:16:10.000000Z"
          }
        }
      }
    ],
    "first_page_url": "http://192.168.98.67:8000/api/posts?page=1",
    "from": 1,
    "last_page": 30,
    "last_page_url": "http://192.168.98.67:8000/api/posts?page=30",
    "links": [
      { "url": null, "label": "&laquo; Previous", "active": false },
      {
        "url": "http://192.168.98.67:8000/api/posts?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": "http://192.168.98.67:8000/api/posts?page=2",
        "label": "2",
        "active": false
      },
      {
        "url": "http://192.168.98.67:8000/api/posts?page=3",
        "label": "3",
        "active": false
      },
      {
        "url": "http://192.168.98.67:8000/api/posts?page=4",
        "label": "4",
        "active": false
      },
      {
        "url": "http://192.168.98.67:8000/api/posts?page=5",
        "label": "5",
        "active": false
      },
      {
        "url": "http://192.168.98.67:8000/api/posts?page=6",
        "label": "6",
        "active": false
      },
      {
        "url": "http://192.168.98.67:8000/api/posts?page=7",
        "label": "7",
        "active": false
      },
      {
        "url": "http://192.168.98.67:8000/api/posts?page=8",
        "label": "8",
        "active": false
      },
      {
        "url": "http://192.168.98.67:8000/api/posts?page=9",
        "label": "9",
        "active": false
      },
      {
        "url": "http://192.168.98.67:8000/api/posts?page=10",
        "label": "10",
        "active": false
      },
      { "url": null, "label": "...", "active": false },
      {
        "url": "http://192.168.98.67:8000/api/posts?page=29",
        "label": "29",
        "active": false
      },
      {
        "url": "http://192.168.98.67:8000/api/posts?page=30",
        "label": "30",
        "active": false
      },
      {
        "url": "http://192.168.98.67:8000/api/posts?page=2",
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "next_page_url": "http://192.168.98.67:8000/api/posts?page=2",
    "path": "http://192.168.98.67:8000/api/posts",
    "per_page": 10,
    "prev_page_url": null,
    "to": 10,
    "total": 300
  }
}

```


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
