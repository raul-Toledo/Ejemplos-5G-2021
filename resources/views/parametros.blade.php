<?php use App\Http\Controllers\NeruoLink; ?>
<DOCTYPE! html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Basic html layout example</title>
  <style>
    * {
        color: #fff;
        font-size: 28px;
        font-weight: 300;
        box-sizing: border-box;
        font-family: 'Metrophobic', Arial, serif; font-weight: 400;
    }

    body {
        background-color: #323232;
        padding: 50px;
    }

    header,
    nav,
    section,
    aside,
    footer {
        text-align: center;
        background-color: #666666;
        border-radius: 5px;
        padding: 50px;
    }

    header,
    nav,
    footer {
        width: 100%;
        padding: 50px;
    }

    header {
        margin-bottom: 50px;
    }

    h1 {
        margin: 0;
    }

    nav,
    aside{
        width: 25%;
    }

    section {
        float: left;
        width: calc(50% - 100px);
        margin: 0 50px 50px 50px;
    }

    section header,
    section article,
    section footer {
        width: 100%;
        background-color: #999999;
        border-radius: 5px;
        margin: 0;
        padding: 50px;
    }

    section article {
        margin: 25px 0;
    }

    nav {
        float: left;
    }

    aside {
        float: right;
    }

    nav ul {
        list-style-type: none;
        padding: 0;
        margin-bottom: 0;
    }

    nav li {
        display: inline-block;
        margin: 0 0 0 50px;
        width: 100px;
    }

    nav li:first-child {
        margin-left: 0;
    }

    footer {
        clear: both;
    }
  </style>
</head>
<body class="hello">
  <header>
    <h1>header</h1>
  </header>
  <nav>
    nav
    <ul>
      <li><a href="{{action([NeruoLink::class, 'inicio'])}}">Inicio con Action</a></li>
      <li><a href="{{route('principal')}}"> Inicio con Route</a></li>
      <li></li>
    </ul>
  </nav>
  <section>
  @if (isset($fig))
    {{$fig}}
  @else
    NO tenemos figura
  @endif
    <header>base {{$base}}</header>
    <article>altura {{$altura}}</article>
    <footer>  @if (isset($area))
    Area {{$area}}
  @else
    {{$base*$altura}}
  @endif</footer>
  </section>
  <aside> 
    aside
  </aside>
  <footer>
    footer
  </footer>
</body>
</html>