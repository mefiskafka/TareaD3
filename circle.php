<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Tarea UNIR</title>
    <!-- <script src="https://d3js.org/d3.v3.min.js"></script> -->
    <script src = "https://d3js.org/d3.v4.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  <style>
    .circulo{
     border: solid 1px #000000;
      //stroke-dasharray: 1000;
      //stroke-dashoffset: 1000;
      //animation: stroke 2s ease-out forwards;
    }

  </style>

  </head>
  <body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Tarea de UNIR - <strong> Luis Alfonso Gómez Zúñiga</strong></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Tareas <span class="sr-only">(current)</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="layers"></span>
              tarea II
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="circle.php">
              <span data-feather="layers"></span>
              Tarea III
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <span data-feather="layers"></span>
              Tarea V
            </a>
          </li>   
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Proximas Tareas</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>

      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Grafico de Barras Circulares >> Tarea III << </h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>

        </div>
      </div>
      <div class="cell code_cell rendered selected">
      <div class="my-4 w-100">
      <svg id="one" width="760" height="760" font-family="sans-serif" font-size="10" text-anchor="middle"></svg>
      </div>
      </div>
 
<script>


var svg =d3.select("#one"),
width =+svg.attr("width"),
height =+svg.attr("height"),
format = d3.format(",d"),
color = d3.scaleOrdinal(d3.schemeCategory20c);
//console.log(color);
var pack=d3.pack().size([width,height]).padding(1.5);
d3.csv("covid19.csv",function(t){
    if(t.value=+t.value,t.value)return t},
    function(t,e){if(t)throw t;
    var n=d3.hierarchy({children:e}).sum(function(t){return t.value})
    .each(function(t){if(e=t.data.id){
        var e,n=e.lastIndexOf(".");
        t.id=e,t.package=e.slice(0,n),
        t.class=e.slice(n+1)}}),
    a=(d3.select("body").append("div")
        .style("position","absolute")
        .style("z-index","10")
        .style("visibility","hidden")
        .text("a"),svg.selectAll(".node")
        .data(pack(n).leaves())
        .enter().append("g")
        .attr("class","node")
        .attr("transform",function(t){return"translate("+t.x+","+t.y+")"}));
    a.append("circle").attr("id",function(t){return t.id})
        .attr("r",function(t){return t.r})
        .style("fill",function(t){return color(t.package)})
        ,a.append("clipPath")
        .attr("id",function(t){return"clip-"+t.id})
        .append("use")
        .attr("xlink:href",function(t){return"#"+t.id})
        .attr("id","circle"),
    a.append("svg:title")
        .text(function(t){return t.value}),
    a.append("text")
        .attr("clip-path",
        function(t){return"url(#clip-"+t.id+")"})
        .selectAll("tspan")
        .data(function(t){return t.class.split(/(?=[A-Z][^A-Z])/g)})
        .enter()
        .append("tspan")
        .attr("x",0)
        .attr("y",function(t,e,n){return 13+10*(e-n.length/2-.5)})
        .text(function(t){return t})
    });
    d3.selectAll('circle').classed('circulo', true);

</script>


      
      <h3>Grafica de burbuja  <br/>Principales estados de México, con casos de covid confirmados</h3><br/>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Se realiza un gráfico de burbujas dimencionar los casos de covid-19 en mexico, 
                el tamaño de cada burbuja representa el número de <strong>casos confirmados 
                </strong> por estados del país.</td>

            </tr>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
 
        <!-- <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>   -->
        <script src="dashboard.js"></script></body>
</html>