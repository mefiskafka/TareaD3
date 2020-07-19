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

    <style>
        .bar {
            fill: steelblue;
        }

        .highlight {
            fill: orange;
        }

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
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
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Grafico
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
        <h1 class="h2">Grafico de Barras Verticales * Tarea II *</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>

        </div>
      </div>

      <div class="my-4 w-100">
        <svg class="Fondo" width="850" height="600"></svg>
      </div>
      
 
<script>

  var svg = d3.select("svg"),
      margin = 200,
      width = svg.attr("width") - margin,
      height = svg.attr("height") - margin;

  svg.append("text")
     .attr("transform", "translate(100,0)")
     .attr("x", 50)
     .attr("y", 50)
     .attr("font-size", "24px")
     .text("Análisis sobre llamadas de violencia recibidas en Línea Mujeres")

  var x = d3.scaleBand().range([0, width]).padding(0.4),
      y = d3.scaleLinear().range([height, 0]);

  var g = svg.append("g")
          .attr("transform", "translate(" + 100 + "," + 100 + ")");

  d3.csv("data.csv", function(error, data) {
      if (error) {
          throw error;
      }

      x.domain(data.map(function(d) { return d.year; }));
      y.domain([0, d3.max(data, function(d) { return d.population; })]);


      g.append("g")
       .attr("transform", "translate(0," + height + ")")
       .call(d3.axisBottom(x))
       .append("text")
       .attr("y", height - 350)
       .attr("x", width - 300)
       .attr("text-anchor", "end")
       .attr("stroke", "black")
       .text("Años");

       g.append("g")
       .append('text') 
       .attr('x', 400)
       .attr('y', 50)
       .text('Crecimiento de 2% de llamadas en 2020,');          

       g.append("g")
       .append('text') 
       .attr('x', 400)
       .attr('y', 65)
       .text('este incremento se manifestó en las'); 
       
       
       g.append("g")
       .append('text') 
       .attr('x', 400)
       .attr('y', 80)
       .text('fechas de inicio del covid-19');        

      g.append("g")
       .call(d3.axisLeft(y).tickFormat(function(d){
           return + d;
       }).ticks(10))
       .append("text")
       .attr("transform", "rotate(-90)")
       .attr("y", 6)
       .attr("dy", "-5.1em")
       .attr("text-anchor", "end")
       .attr("stroke", "black")
       .text("Número de llamadas");

      g.selectAll(".bar")
       .data(data)
       .enter().append("rect")
       .attr("class", "bar")
       .on("mouseover", onMouseOver) //Add listener for the mouseover event
       .on("mouseout", onMouseOut)   //Add listener for the mouseout event
       .attr("x", function(d) { return x(d.year); })
       .attr("y", function(d) { return y(d.population); })
       .attr("width", x.bandwidth())
       .transition()
       .ease(d3.easeLinear)
       .duration(400)
       .delay(function (d, i) {
           return i * 50;
       })
       .attr("height", function(d) { return height - y(d.population); });
  });
  
  //mouseover event handler function
  function onMouseOver(d, i) {
      d3.select(this).attr('class', 'highlight');
      d3.select(this)
        .transition()     // adds animation
        .duration(400)
        .attr('width', x.bandwidth() + 5)
        .attr("y", function(d) { return y(d.population) - 10; })
        .attr("height", function(d) { return height - y(d.population) + 10; });

      g.append("text")
       .attr('class', 'val') 
       .attr('x', function() {
           return x(d.year);
       })
       .attr('y', function() {
           return y(d.population) - 15;
       })
       .text(function() {
           return [' +' +d.population];  // Value of the text
       });


    
  }

  //mouseout event handler function
  function onMouseOut(d, i) {
      // use the text label class to remove label on mouseout
      d3.select(this).attr('class', 'bar');
      d3.select(this)
        .transition()     // adds animation
        .duration(400)
        .attr('width', x.bandwidth())
        .attr("y", function(d) { return y(d.population); })
        .attr("height", function(d) { return height - y(d.population); });

      d3.selectAll('.val')
        .remove()
  }

</script>


      
      <h2>Vista de Archivo Violencia_Contra_La_Mujer.csv</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>No.</th>
              <th>2016</th>
              <th>2017</th>
              <th>2018</th>
              <th>2019</th>
              <th>2020</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>279</td>
              <td>994</td>
              <td>751</td>
              <td>269</td>
              <td>317</td>
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