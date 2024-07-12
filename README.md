biblioteca/
│
├── public/
│   ├── index.php
│  
│
├── app/
│   ├── controllers/
│   │   ├── BookController.php
│   │   └── UserController.php
│   │
│   ├── models/
│   │   ├── Book.php
│   │   └── User.php
│   │
│   ├── views/
│   │   ├── book/
│   │   │   ├── list.php
│   │   │   ├── detail.php
│   │   │   └── form.php
│   │   ├── user/
│   │   │   ├── login.php
│   │   │   ├── register.php
│   │   │   └── profile.php
│   │   └── layout.php
│   │
│   ├── core/
│   │   ├── Router.php
│   │   ├── Controller.php
│   │   ├── Model.php
│   │   └── View.php
│   │
│   ├── config/
│   │   └── config.php
│   │
│   └── helpers/
│       └── functions.php
│
└── vendor/
|   └── autoload.php
|
└── docker
|   └── nginx
|   |   └── conf.d
|   |       └── default.conf
|   └── Dockerfile
|
└── .env
|
└── composer.json
|
└── docker-compose.yml
