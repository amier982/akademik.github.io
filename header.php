<head>
    <style type="text/css">
        body {
            margin: 0px;
            padding: 0px;
            background-image: url(46.jpg);
            background-size: cover;
            opacity: 0.7;
        }

        .logo {
            float: left;
            background-color: #238e00;
            width: 20%;
            box-shadow: 3px 2px 10px black;
        }

        nav {
            height: 43px;
            overflow: hidden;
            background-color: blue;
            float: top;
            width: 100%;
            box-shadow: -13px -5px 11px black;
        }

        nav ul {
            display: inline;
        }

        nav ul li {
            display: inline-block;
            cursor: pointer;
            padding: 12px;
            transition: background-color 0.3s;
        }

        nav li a {
            text-transform: uppercase;
            text-decoration: none;
            color: #ffffff;
            font-size: 20px;
            font-weight: 300;
            padding: 20px;
        }

        nav>ul>li ul {
            background-color: #04863e;
            position: absolute;
            margin-top: 11px;
            z-index: -1;
            margin-left: -46px;
            border-radius: 0px 0px 15px 15px;
            text-align: center;
            width: 226px;
            padding: 4px;
            visibility: hidden;
            transition: visibility 0.3s;
        }

        nav>ul>li ul>li {
            margin: 12px;
            display: inline-block;
            cursor: pointer;
        }

        nav ul li:hover ul {
            visibility: visible;
        }

        nav ul li:hover {
            background-color: red;
        }
    </style>
</head>

<body>

    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="getdata.php">Cari Data</a></li>
            <li><a href="form.php">Tambah Data</a></li>
            <li><a href=""></a></li>
            <li>
                <a href="http://ecampus.pelitabangsa.ac.id/pb/login.jsp;jsessionid=FF72028132397AA19F4674327065E92D.worker_b">Universitas Pelita bangsa</a>

        </ul>
        </li>
        </ul>
    </nav>
</body>