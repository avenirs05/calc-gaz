<!doctype html>
<html>
  <head>
    <title>Конвертер единиц концентрации газов</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">		
		
		<link rel="stylesheet" href="//static.tildacdn.com/css/tilda-grid-3.0.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="//tilda.ws/project182183/tilda-blocks-2.12.css?t=1516376065" type="text/css" media="all" />
		<link rel="stylesheet" href="//static.tildacdn.com/css/tilda-animation-1.0.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="//static.tildacdn.com/css/tooltipster.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="//static.tildacdn.com/css/tilda-slds-1.4.min.css" type="text/css" media="all" /><link rel="stylesheet" href="//static.tildacdn.com/css/tilda-zoom-2.0.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="//static.tildacdn.com/css/tilda-slides-1.0.min.css" type="text/css" media="all" />
 
    <link href="style-calc.css" rel="stylesheet">
		


  </head>

  <body> 

		<div id="converter-wrapper" class="t-container">
			<h1 class="text-center">Конвертер единиц концентрации газов</h1>
			<form class="form-conv" method="post" action="gas.php">
			    
		    <label class="col-sm-3 col-form-label">Наименование вещества 
		    	<span class="star-color">*</span> :
		    </label>
		    
		    <div id="substance-wrap">
		      <select id="substance-select">
		        <option>Выберите вещество ...</option>
		        <option id="azot">Азот (N2)</option>
		        <option id="ammiak">Аммиак (NH3)</option>
		        <option id="acetilen">Ацетилен (C2H2)</option>
		        <option id="aceton">Ацетон (C3H6O)</option>
		        <option id="benzol">Бензол (C6H6)</option>
		        <option id="butan">Бутан (C4H10)</option>
		        <option id="vodorod">Водород (H2)</option>
		        <option id="geksan">Гексан (C6H14)</option>
		        <option id="dioksid-azota">Диоксид азота (NO2)</option>
		        <option id="dioksid-ugleroda">Диоксид углерода (CO2)</option>
		        <option id="izobutan">Изобутан ((CH3)3CH)</option>
		        <option id="kislorod">Кислород (O2)</option>
		        <option id="ksilol">Ксилол (C8H10)</option>			        
		        <option id="metan">Метан (CH4)</option>
		        <option id="metanol">Метанол (CH3OH)</option>
		        <option id="ozon">Озон (O3)</option>
		        <option id="oksid-sery">Оксид серы (SO2)</option>
		        <option id="oksid-ugleroda">Оксид углерода (CO)</option>
		        <option id="oktan">Октан (C8H18)</option>
		        <option id="pentan">Пентан (C5H12)</option>
		        <option id="propan">Пропан (C3H8)</option>
		        <option id="serovodorod">Сероводород (H2S)</option>
		        <option id="sin-kislota">Синильная кислота (HCN)</option>
		        <option id="stirol">Стирол (C8H8)</option>
		        <option id="toluol">Толуол (C6H5CH3)</option>
		        <option id="fenol">Фенол (C6H5OH)</option>
		        <option id="formaldegid">Формальдегид (CH2O)</option>
		        <option id="ftor">Фтор (F2)</option>
		        <option id="ftorovodorod">Фтороводород (HF)</option>
		        <option id="hlor">Хлор (Cl2)</option>
		        <option id="hlorovodorod">Хлороводород (HCl)</option>
		        <option id="etan">Этан (C2H6)</option>
		        <option id="etanol">Этанол (C2H5OH)</option>
		        <option id="etilen">Этилен (C2H4)</option>      
		      </select>
		    </div>
			  
			  <div id="measuring-wrap">	
		      <div class="calc-form-check">
		        <label class="calc-form-check-label">
		          <input id="ppm-radio" class="calc-form-check-input" type="radio" name="measuring" checked> ppm
		        </label>
		      </div>
		      <div class="calc-form-check">
		        <label class="calc-form-check-label">
		          <input id="mg-m3-radio" class="calc-form-check-input" type="radio" name="measuring"> мг/м<sup>3</sup>
		        </label>
		      </div>
		      <div class="calc-form-check">
		        <label class="calc-form-check-label">
		          <input id="percent-vol-radio" class="calc-form-check-input" type="radio" name="measuring"> % об. д.
		        </label>
		      </div>
		      <div class="calc-form-check">
		        <label class="calc-form-check-label">
		          <input id="nkpr-radio" class="calc-form-check-input" type="radio" name="measuring"> % НКПР
		        </label>
		      </div>			   
			  </div>

			  <div id="calc-meaning-wrap">
			    <label>Значение 
			    	<span class="star-color">*</span> :
			    </label>
			    <div>
			      <input id="entered-amount" type="text" name="value" required="">
			    </div>
			  </div>

		    <div id="calc-btns-wrap">
		      <button id="calc-btn-reset" type="reset">Сброс</button>
		      <button id="calc-btn-convert" type="button">Конвертировать</button>
		    </div>

		    <div id="calc-table-wrap">
		      <table>
		        <thead>
		          <tr>
		            <th>Единица измерения</th>
		            <th>Значение</th>
		          </tr>
		        </thead>
		        <tbody class="result-convert">
		          <tr>
		            <td>ppm</td>
		            <td id="ppm-amount">—</td>
		          </tr>
		          <tr>
		            <td>мг/м<sup>3</sup></td>
		            <td id="ppm-amount">—</td>
		          </tr>
		          <tr>
		            <td>% об. д.</td>
		            <td id="ppm-amount">—</td>
		          </tr>
		          <tr>
		            <td>% НКПР</td>
		            <td id="ppm-amount">—</td>
		          </tr>
		        </tbody>
		      </table>
		    </div>
			  
			</form>
		</div>
	

	<!-- <script src="jquery-3.1.1.min.js"></script> -->
	<script src="//static.tildacdn.com/js/bootstrap.min.js"></script>
	<script src="//static.tildacdn.com/js/jquery-1.10.2.min.js"></script>
	<script src="main.js"></script>
	<script src="script.js"></script>
	</body>
	
	</html>

