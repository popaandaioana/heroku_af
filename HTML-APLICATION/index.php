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
            padding: 10px;
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
        <center> -Curs-</center>
    </h5>
    <table>
        <tr>
            <td style="white-space: nowrap;"><a href="#">Curs 1</a></td>
            <td>Organizare, Aplicatii ale grafurilor, Graf orientat/neorientat, Drumuri/Circuite, Lanturi/Cicluri, Graf partial, Subgraf, Multigraf, Conexitate, Egalitate, Izomorfism, Grafuri standard, Graf bipartit</td>
        </tr>
        <tr>
            <td><a href="#">Curs 2</a></td>
            <td>Reprezentari ale grafurilor, BFS, DFS, Sortare topologica</td>
        </tr>
        <tr>
            <td>
                <a href="#">Curs 3</a></td>
            <td>Arbori partiali, APCM, Grafuri ponderate, Kruskal, Aplicatii - clustering</td>
        </tr>
        <tr>
            <td><a href="#">Curs 4</a></td>
            <td>Algoritmul lui Prim, Multimi disjuncte, Paduri de multimi disjuncte, Drumuri minime in grafuri ponderate, Dijkstra</td>
        </tr>
        <tr>
            <td><a href="#">Curs 5</a></td>
            <td>Bellman-Ford, Drumuri minime de sursa unica in grafuri aciclice</td>
        </tr>
        <tr>
            <td><a href="#">Curs 6</a></td>
            <td>Floyd-Warshall, Inchiderea tranzitiva a unui graf orinetat</td>
        </tr>
        <tr>
            <td><a href="#">Curs 7</a></td>
            <td>Fluxuri maxime in retelele de transport, Ford-Fulkerson, Graf rezidual, Taietura in retea, Taietura minima</td>
        </tr>
        <tr>
            <td><a href="#">Curs 8</a></td>
            <td>Edmonds-Karp</td>
        </tr>
        <tr>
            <td><a href="#">Curs 9</a></td>
            <td>Cuplaje, Graf bipartit, P-colorari, Algoritm de determinare a unui cuplaj maxim, Constructia unui graf orientat din secventa de grade, Drumuri arc-disjuncte, Aplicatii cuplaje</td>
        </tr>
        <tr>
            <td><a href="#">Curs 10</a></td>
            <td>Grafuri euleriene, Algoritmul lui Hierholzer, Lanturi euleriene, Grafuri de Bruijn, Grafuri planare</td>
        </tr>
        <tr>
            <td><a href="#">Curs 11</a></td>
            <td>Grafuri Hamiltoniene, Cicluri Hamiltonian</td>
        </tr>
        <tr>
            <td style="white-space: nowrap;"><a href="#">Curs 12</a></td>
            <td>Distante de editare</td>
        </tr>

    </table>
    <footer>
        <p>Universitatea din Bucuresti</p>
    </footer>
</body>

</html>
