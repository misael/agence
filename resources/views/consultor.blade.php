<!DOCTYPE html>
<html lang="en">
<head>
<title>Agence</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/maruti-style.css" />
<link rel="stylesheet" href="css/maruti-media.css" class="skin-color" />
<link rel="stylesheet" href="css/bootstrap-datepicker3.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/toastr.css" />
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1>Agence</h1>
</div>
<!--close-Header-part--> 

<!--top-Header-messaages-->
<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href=""><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->

<div id="sidebar"><a href="" class="visible-phone"><i class="icon icon-home"></i> Agence</a><ul>
    <li class="active"><a href=""><i class="icon icon-home"></i> <span>Agence</span></a> </li>
    <li><a href=""><i class="icon icon-signal"></i> <span>Proyectos</span></a> </li>
    <li><a href=""><i class="icon icon-inbox"></i> <span>Administrativos</span></a> </li>
    <li><a href=""><i class="icon icon-th"></i> <span>Comercial</span></a></li>
    <li><a href=""><i class="icon icon-fullscreen"></i> <span>Financiero</span></a></li>
    <li><a href=""><i class="icon icon-user"></i> <span>Usuario</span></a></li>
    <li><a href=""><i class="icon icon-share-alt"></i> <span>Salir</span></a></li>
  </ul>
</div>
<div id="content" style="min-height: 530px;">
  <div id="content-header">
    <div id="breadcrumb"> <a href="" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>

  <div class="container-fluid">
        <div class="widget-box">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="tab1">Por Consultor</a></li>
            
            </ul>
          </div>
          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
                <div class="span8">
                    <form class="form-inline">
                          <div class="control-group span10">
                            <div class="controls">
                               <label class="control-label label-r"><span><h5>Periodos:</h5></span></label>
                               <label class="control-label">Desde</label>
                                <input id="_desde" name="_desde" type="text" data-date="" data-date-format="dd-mm-yyyy" value="" class=" span2">
                              
                                <label class="control-label label-l">Hasta</label>
                                <input id="_hasta" name="_hasta" type="text" data-date="" data-date-format="dd-mm-yyyy" value="" class=" span2">
     
                                <a id="_buscar" href="#" class="btn">
                                  <i class="icon-search"></i> Buscar
                                </a>
                                <a id="_grafico" href="#" class="btn">
                                  <i class="icon-signal"></i> Grafico
                                </a>
                                <a id="_torta" href="#" class="btn">
                                  <i class="icon-signal"></i> Torta
                                </a>

                            </div>
                          </div>

                          <div class="control-group span6">
                            <div class="controls">
                             <label class=" "><span><h5>Consultores:</h5></span></label>
                              <select multiple id="_consultor" name="_consultor" class="label-l">
                              @foreach($user as $item)
                                <option value="{{ $item->co_usuario }}">{{ $item->no_usuario }}</option>
                              @endforeach
                              </select>
                            </div>
                          </div>
                  
                    </form> 
                </div>                
            </div>
            <div id="tab2" class="tab-pane"> 
              Clientes
            </div>
          </div>
        </div>
  </div>
  
  <div id="_div_datos" class="container-fluid" style="display:none">
      <div class="">
          
          <div id="_datos" class=" nopadding">
           
          </div>
        </div>
  </div>

  <div  id="div_pizza" class="container-fluid" style="display:none">
      <div class="widget-box ">
        
        <div class="widget-content" style="background-color:#fff;">
          <center><div class="row-fluid" >
              <div id="_pizza"  style="height: 40%; width:85%;"></div>
           
          </div></center>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Agence <a href=""></a> </div>
</div>

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/maruti.js"></script> 
<script src="js/maruti.dashboard.js"></script> 
<script src="js/maruti.chat.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/bootstrap-datepicker.min.js"></script> 
<script src="js/bootstrap-datepicker.es.min.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/toastr.js"></script>
<script src="js/Highcharts/js/highcharts.js"></script>
<script src="js/Highcharts/js/highcharts-3d.js"></script>
<script src="js/consultor.js"></script>
</body>
</html>
