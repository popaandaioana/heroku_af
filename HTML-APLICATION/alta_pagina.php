<!DOCTYPE html>
<html>

<head>

    <style>
        /* Stilizarea meniului de navigare */
        
        nav {
            background-color: #333;
            overflow: hidden;
        }
        
        nav a {
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        nav a:hover {
            background-color: #ddd;
            color: black;
        }
        /* Stilizarea sectiunilor */
        
        .section1 {
            float: right;
        }
        
        .section2 {
            float: right;
        }
        
        footer {
            background-color: #333;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="style22.css">

</head>

<body>

    <nav>

        <div class="section2">
            <a class="active" href="alta_pagina.php">Laboratoare</a>
        </div>
        <div class="section1">
            <a class="active" href="index.php">Cursuri</a>
        </div>
    </nav>
    <img src="ub.jpg" width="150" height="150" />
    <h1>
        <center> ALGORITMI FUNDAMENTALI</center>
    </h1>

    <h4>
        <center> Prof. Adrian-Marius Dumitran </center>
    </h4>
    <h5>
        <center> -Laborator-</center>
    </h5>

    <table>
        <tr>
            <td style="white-space: nowrap;"><a href="#">Laborator 1</a></td>
            <td>Parcurgeri - aplicatii</td>
        </tr>
        <tr>
            <td><a href="#">Laborator 2</a></td>
            <td>Probleme de distante in grafuri</td>
        </tr>
        <tr>
            <td>
                <a href="#">Laborator 3</a></td>
            <td>Probleme de arbori partiali de cost minim precum si alte probleme care se modeleaza sau se reduc la probleme dintre cele studiate</td>
        </tr>
        <tr>
            <td><a href="#">Laborator 4</a></td>
            <td>Probleme de optim, Retele de transport, Aplicatii</td>
        </tr>
        <tr>
            <td><a href="#">Laborator 5</a></td>
            <td>Algoritmi de tip Greedy pentru probleme de colorare</td>
        </tr>
        <tr>
            <td><a href="#">Laborator 6</a></td>
            <td>Algoritmi pe siruri de caractere</td>
        </tr>

    </table>
    <footer>
        <p>Universitatea din Bucuresti</p>
    </footer>
</body>

</html>
