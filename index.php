<?php
$count = 1;
$path = __DIR__ . DIRECTORY_SEPARATOR . "data/0";
if($fh = opendir(($path))) {
  while(($entry = readdir($fh)) !== false)
  {
    $count++;
    // print_r($entry . "<br>");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Agrocast
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/papaparse@5.3.1/papaparse.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
  integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
  crossorigin=""/>

</head>

<body class="g-sidenav-show  bg-gray-200">
  <!-- <div class="circle"></div> -->
  <!-- <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 ps bg-white" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="./assets/img/logo.png" class="navbar-brand-img h-100" alt="main_logo" style="min-width: 12rem; min-height: 4rem; top: 0;">
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark active bg-gradient-primary" href="./pages/dashboard.html">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="./pages/tables.html">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link text-dark " href="./pages/sign-in.html">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Log Out</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="./pages/sign-up.html">
            <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Reports</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
              
              <a class="btn bg-danger mt-0 w-100" href="" type="button" style="color: #fff;"><i class="material-icons opacity-10">login</i> Log Out</a>
      </div>
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-0 w-100" href="" type="button">Visit Home page</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg "> -->
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Agrocast</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
           

              
              

              <select class="in" name="Taluka" id="dis">
                <optgroup label="Gujrat">
                <optgroup label="Ahmedabad">
                <option value="1">Ahmedabad</option>
                <option value="2">Bavla</option>
                <option value="3">Daskroi</option>
                <option value="4">Detroj-Rampura</option>
                <option value="5">Dhandhuka</option>
                <option value="6">Dholera</option>
                <option value="7">Dholka</option>
                <option value="8">Mandal</option>
                <option value="9">Sanand</option>
                <option value="10">Viramgam</option>
                </optgroup>
                <optgroup label="Anand">
                <option value="11">Anand</option>
                <option value="12">Anklav</option>
                <option value="13">Borsad</option>
                <option value="14">Khambhat</option>
                <option value="15">Petlad</option>
                <option value="16">Sojitra</option>
                <option value="17">Tarapur</option>
                <option value="18">Umreth</option>
                </optgroup>
                <optgroup label="Banas Kantha">
                <option value="19">Amirgadh</option>
                <option value="20">Bhabhar</option>
                <option value="21">Danta</option>
                <option value="22">Dantiwada</option>
                <option value="23">Deesa</option>
                <option value="24">Deodar</option>
                <option value="25">Dhanera</option>
                <option value="26">Kankrej</option>
                <option value="27">Lakhani</option>
                <option value="28">Palanpur</option>
                <option value="29">Suigam</option>
                <option value="30">Tharad</option>
                <option value="31">Vadgam</option>
                <option value="32">Vav</option>
                </optgroup>

                <optgroup label="Bharuch">
                <option value="33">Bharuch</option>
                <option value="34">Amod</option>
                <option value="35">Ankleshwar</option>
                <option value="36">Hansot</option>
                <option value="37">Jambusar</option>
                <option value="38">Jhagadia</option>
                <option value="39">Netrang</option>
                <option value="40">Vagra</option>
                <option value="41">Valia</option>
                </optgroup>

                <optgroup label="Dahod">
                <option value="42">Dahod</option>
                <option value="43">Devgadh Baria</option>
                <option value="44">Dhanpur</option>
                <option value="45">Fatepura</option>
                <option value="46">Garbada</option>
                <option value="47">Limkheda</option>
                <option value="48">Sanjeli</option>
                <option value="49">Jhalod</option>
                <option value="50">Singvad</option>
                </optgroup>
                
                <optgroup label="Gandhinagar">
                <option value="51">Gandhinagar</option>
                <option value="52">Dehgam</option>
                <option value="53">Kalol</option>
                <option value="54">Mansa</option>
                </optgroup>

                <optgroup label="Jamnagar">
                <option value="55">Jamnagar</option>
                <option value="56">Dhrol</option>
                <option value="57">Jamjodhpur</option>
                <option value="58">Jodiya</option>
                <option value="59">Kalavad</option>
                <option value="60">Lalpur</option>
                </optgroup>

                <optgroup label="Junagadh">
                <option value="61">Junagadh</option>
                <option value="62">Bhesana</option>
                <option value="63">Junagadh Rural</option>
                <option value="64">Keshod</option>
                <option value="65">Malia</option>
                <option value="66">Manavadar</option>
                <option value="67">Mangrol</option>
                <option value="68">Mendarda</option>
                <option value="69">Vanthali</option>
                <option value="70">Visavadar</option>
                </optgroup>

                <optgroup label="Kachchh">
                <option value="71">Abdasa</option>
                <option value="72">Anjar</option>
                <option value="73">Bhachau</option>
                <option value="74">Bhuj</option>
                <option value="75">Gandhidham</option>
                <option value="76">Lakhpat</option>
                <option value="77">Mandvi</option>
                <option value="78">Mundra</option>
                <option value="79">Nakhatrana</option>
                <option value="80">Rapar</option>
                </optgroup>

                <optgroup label="Kheda">
                <option value="81">Kheda</option>
                <option value="82">Galteshwar</option>
                <option value="83">Kapadvanj</option>
                <option value="84">Kathlal</option>
                <option value="85">Mahudha</option>
                <option value="86">Matar</option>
                <option value="87">Mehmedabad</option>
                <option value="88">Nadiad</option>
                <option value="89">Thasra</option>
                <option value="90">Vaso</option>
                </optgroup>

                <optgroup label="Mahesana">
                <option value="91">Mahesana</option>
                <option value="92">Becharaji</option>
                <option value="93">Jotana</option>
                <option value="94">Kadi</option>
                <option value="95">Kheralu</option>
                <option value="96">Satlasana</option>
                <option value="97">Unjha</option>
                <option value="98">Vadnagar</option>
                <option value="99">Vijapur</option>
                <option value="100">Visnagar</option>
                <option value="101">Gojariya</option>
                </optgroup>


                <optgroup label="Narmada">
                <option value="102">Dediapada</option>
                <option value="103">Garudeshwar</option>
                <option value="104">Nandod</option>
                <option value="105">Sagbara</option>
                <option value="106">Tilakwada</option>
                </optgroup>

                <optgroup label="Navsari">
                <option value="107">Navsari</option>
                <option value="108">Vansda</option>
                <option value="109">Chikhli</option>
                <option value="110">Gandevi</option>
                <option value="111">Jalapore</option>
                <option value="112">Khergam</option>
                </optgroup>


                <optgroup label="Panch Mahals">
                <option value="113">Ghoghamba</option>
                <option value="114">Godhra</option>
                <option value="115">Halol</option>
                <option value="116">Jambughoda</option>
                <option value="117">Kalol</option>
                <option value="118">Morwa Hadaf</option>
                <option value="119">Shehera</option>
                </optgroup>


                <optgroup label="Patan">
                <option value="120">Patan</option>
                <option value="121">Chanasma</option>
                <option value="122">Harij</option>
                <option value="123">Radhanpur</option>
                <option value="124">Sami</option>
                <option value="125">Sankheswar</option>
                <option value="126">Santalpur</option>
                <option value="127">Sarasvati</option>
                <option value="128">Sidhpur</option>
                  </optgroup>

                <optgroup label="Porbandar">
                <option value="129">Porbandar</option>
                <option value="130">Kutiyana</option>
                <option value="131">Ranavav</option>
                </optgroup>

                <optgroup label="Rajkot">
                <option value="132">Rajkot</option>
                <option value="133">Dhoraji</option>
                <option value="134">Gondal</option>
                <option value="135">Jamkandorna</option>
                <option value="136">Jasdan</option>
                <option value="137">Jetpur</option>
                <option value="138">Kotada Sangani</option>
                <option value="139">Lodhika</option>
                <option value="140">Paddhari</option>
                <option value="141">Upleta</option>
                <option value="142">Vinchchiya</option>
                </optgroup>

                <optgroup label="Sabar Kantha">
                <option value="143">Himatnagar</option>
                <option value="144">Idar</option>
                <option value="145">Khedbrahma</option>
                <option value="146">Poshina</option>
                <option value="147">Prantij</option>
                <option value="148">Talod</option>
                <option value="149">Vadali</option>
                <option value="150">Vijaynagar</option>
                </optgroup>

                <optgroup label="Surat">
                <option value="151">Surat</option>
                <option value="152">Bardoli</option>
                <option value="153">Choryasi</option>
                <option value="154">Kamrej</option>
                <option value="155">Mahuva</option>
                <option value="156">Mandvi</option>
                <option value="157">Mangrol</option>
                <option value="158">Olpad</option>
                <option value="159">Palsana</option>
                <option value="160">Umarpada</option>
                </optgroup>

                <optgroup label="Surendranagar">
                <option value="161">Chotila</option>
                <option value="162">Chuda</option>
                <option value="163">Dasada</option>
                <option value="164">Dhrangadhra</option>
                <option value="165">Lakhtar</option>
                <option value="166">Limbdi</option>
                <option value="167">Muli</option>
                <option value="168">Sayla</option>
                <option value="169">Thangadh</option>
                <option value="170">Wadhwan</option>
                </optgroup>

                <optgroup label="Dang">
                <option value="171">Ahwa</option>
                <option value="172">Subir</option>
                <option value="173">Waghai</option>
                </optgroup>

                <optgroup label="Vadodara">
                <option value="174">Vadodara</option>
                <option value="175">Dabhoi</option>
                <option value="176">Desar</option>
                <option value="177">Karjan</option>
                <option value="178">Padra</option>
                <option value="179">Savli</option>
                <option value="180">Sinor</option>
                <option value="181">Vaghodia</option>
              </optgroup>
              
              
              <optgroup label="Valsad">
                  <option value="182">Valsad</option>
                <option value="183">Dharampur</option>
                <option value="184">Kaprada</option>
                <option value="185">Pardi</option>
                <option value="186">Umbergaon</option>
                <option value="187">Vapi</option>
                </optgroup>

                <optgroup label="Tapi">
                <option value="188">Nizar</option>
                <option value="189">Songadh</option>
                <option value="190">Uchhal</option>
                <option value="191">Valod</option>
                <option value="192">Vyara</option>
                <option value="193">Kukarmunda</option>
                <option value="194">Dolvan</option>
                </optgroup>

                <optgroup label="Devbhumidwarka">
                <option value="195">Bhanvad</option>
                <option value="196">Kalyanpur</option>
                <option value="197">Khambhalia</option>
                <option value="198">Okhamandal</option>
                </optgroup>


                <optgroup label="Morbi">
                <option value="199">Halvad</option>
                <option value="200">Maliya</option>
                <option value="201">Morbi</option>
                <option value="202">Tankara</option>
                <option value="203">Wankaner</option>
                </optgroup>

                <optgroup label="Aravalli">
                <option value="204">Bayad</option>
                <option value="205">Bhiloda</option>
                <option value="206">Dhansura</option>
                <option value="207">Malpur</option>
                <option value="208">Meghraj</option>
                <option value="209">Modasa</option>
                </optgroup>


                <optgroup label="Chhota Udepur">
                <option value="210">Chhota Udepur</option>
                <option value="211">Bodeli</option>
                <option value="212">Jetpur Pavi</option>
                <option value="213">Kavant</option>
                <option value="214">Nasvadi</option>
                <option value="215">Sankheda</option>
                  </optgroup>


                <optgroup label="Amreli">
                <option value="216">Amreli</option>
                <option value="217">Babra</option>
                <option value="218">Bagasara</option>
                <option value="219">Dhari</option>
                <option value="220">Jafrabad</option>
                <option value="221">Khambha</option>
                <option value="222">Kunkavav Vadia</option>
                <option value="223">Lathi</option>
                <option value="224">Lilia</option>
                <option value="225">Rajula</option>
                <option value="226">Savarkundla</option>
                </optgroup>


                <optgroup label="Girsomnath">
                <option value="227">Gir Gadhada</option>
                <option value="228">Kodinar</option>
                <option value="229">Sutrapada</option>
                <option value="230">Talala</option>
                <option value="231">Una</option>
                <option value="232">Patan Veraval</option>
                </optgroup>


                <optgroup label="Mahisagar">
                <option value="233">Balasinor</option>
                <option value="234">Kadana</option>
                <option value="235">Khanpur</option>
                <option value="236">Lunawada</option>
                <option value="237">Santrampur</option>
                <option value="238">Virpur</option>
                </optgroup>

                <optgroup label="Bhavnagar">
                <option value="239">Bhavnagar</option>
                <option value="240">Gariadhar</option>
                <option value="241">Ghogha</option>
                <option value="242">Jesar</option>
                <option value="243">Mahuva</option>
                <option value="244">Palitana</option>
                <option value="245">Sihor</option>
                <option value="246">Talaja</option>
                <option value="247">Umrala</option>
                <option value="248">Vallabhipur</option>
                </optgroup>

                <optgroup label="Botad">
                <option value="249">Botad</option>
                <option value="250">Barwala</option>
                <option value="251">Gadhada</option>
                <option value="252">Ranpur</option>
                </optgroup>
                </optgroup>
              </select>

              <select class="in" name="type" id="type">
                <option value="min">Min Temp</option>
                <option value="max">Max Temp</option>
                <option value="rain">Rainfall</option>
              </select>

              <select class="in" name="period" id="per">
                <option value="" disabled >Date</option>
                <option value="" selected>Today</option>
                <option value="">yesterday</option>
                <option value="">last week</option>
                <option value="">last year</option>
              </select>

              <input class="in" id="date" type="date" placeholder="DD-MM-YYYY" min="1997-01-01" max="2020-02-15" value="">
              
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      
 
      <div class="row mt-4">
        <div class="col-lg-6 col-md-6 mt-4 mb-4">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-bars" class="chart-canvas" height="300" width="300"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Last Week Data</h6>
              <p class="text-sm ">Gujrat, Ahemdabad</p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated few mins ago </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 mt-4 mb-4">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 "> Last Year Data </h6>
              <p class="text-sm "> Gujrat, Ahemdabad </p>
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> updated few mins ago </p>
              </div>
            </div>
          </div>
        </div>
        

        <div id="map"></div>

      

      
      </div>
      
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                by
                <a class="font-weight-bold" target="_blank">Agrocast</a>
                
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
               
                <li class="nav-item">
                  <a href="http://www.agrocastanalytics.com/#content4-28" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="http://www.agrocastanalytics.com/#team1-1g" class="nav-link text-muted" target="_blank">Team</a>
                </li>
                <li class="nav-item">
                  <a href="http://www.agrocastanalytics.com/index.html#form1-c" class="nav-link pe-0 text-muted" target="_blank">Get in Touch</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <script src="./assets/js/talukas.js"></script>
    <script src="./assets/js/leaf.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  
  <script type="text/javascript">



$('#per').on('change',function(){

   $('#date').val('');
});
$('#date').on('change',function(){

$('#per').val('');
});


var IDv = '1';
var Temptype;
var tempselect = '6';
// --------------# taluka wise
$("#dis").on('change', function taluka(){
  IDv = $('#dis').val();       
  console.log(IDv);
  return IDv;
});



// --------------# Temp Type
  // min = 6
  // max = 5
  // rain = 4

$('#type').on('change', function temp(){
  Temptype = $('#type').val();
  if(Temptype == "max")
  {
    tempselect = '5';
  }
  if(Temptype == "rain")
  {
    tempselect = '4';
  }
  if(Temptype == "min")
  {
   tempselect = '6';
  }
  // console.log(tempselect);
});


// --------------# Date Period




// --------------# Date 




  $.ajax({
  url: './data/0/2020_01_30/data', 
  dataType: 'text',
}).done(successFunction);





function successFunction(data) {

  const dataFile = Papa.parse(data, {
  delimiter: " ",
  header: false,
  skipEmptyLines: true
})
  console.log(dataFile);
  

const csvData = [];
for(i = 0; i < dataFile.data.length; i++ )
{
  csvData.push(dataFile.data[i].csvData);
}
alert(dataFile.data[2][1])

  // id = 0
  // year = 1
  // Month = 2
  // day = 3
  // rainfall = 4
  // minTemp = 5
  // MaxTemp = 6

$('#type, #dis').on('change', function(){

  console.log(dataFile.data[IDv-1][tempselect])

});
}


    // chart 1 (green) 
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 80, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });



    // chart 2 (blue) 
    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Min Temp",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500, 200, 100, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>