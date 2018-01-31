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
			<h2>Конвертер единиц концентрации газов</h2>
			<form>	    
				<div id="calc-substance-section" class="calc-section">						
					<div class="calc-headers">
						<b>Наименование вещества</b>
					</div>			
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
					    <option id="dioksidazota">Диоксид азота (NO2)</option>
					    <option id="dioksidugleroda">Диоксид углерода (CO2)</option>
					    <option id="izobutan">Изобутан (C4H10)</option>
					    <option id="kislorod">Кислород (O2)</option>
					    <option id="ksilol">Ксилол (C8H10)</option>			        
					    <option id="metan">Метан (CH4)</option>
					    <option id="metanol">Метанол (CH3OH)</option>
					    <option id="ozon">Озон (O3)</option>
					    <option id="oksidsery">Оксид серы (SO2)</option>
					    <option id="oksidugleroda">Оксид углерода (CO)</option>
					    <option id="oktan">Октан (C8H18)</option>
					    <option id="pentan">Пентан (C5H12)</option>
					    <option id="propan">Пропан (C3H8)</option>
					    <option id="serovodorod">Сероводород (H2S)</option>
					    <option id="sinkislota">Синильная кислота (HCN)</option>
					    <option id="stirol">Стирол (C8H8)</option>
					    <option id="toluol">Толуол (C7H8)</option>
					    <option id="fenol">Фенол (C6H5OH)</option>
					    <option id="formaldegid">Формальдегид (H2CO)</option>
					    <option id="ftor">Фтор (F2)</option>
					    <option id="ftorovodorod">Фтороводород (HF)</option>
					    <option id="hlor">Хлор (Cl2)</option>
					    <option id="hlorovodorod">Хлороводород (HCl)</option>
					    <option id="etan">Этан (C2H6)</option>
					    <option id="etanol">Этанол (C2H5OH)</option>
					    <option id="etilen">Этилен (C2H4)</option>      
					  </select>
					</div>
				</div>
				  
				<div id="calc-measuring-section" class="calc-section">
					<div class="calc-headers">
						<b>Единицы измерения</b>
					</div>	  
				  <div id="measuring-list-wrap">	
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
				</div>

			  <div id="calc-meaning-section" class="calc-section">
			  	<div class="calc-headers">
			  		<b>Введите значение</b>
			  	</div>		   
			    <div>
			      <input id="entered-amount" type="text" name="value" required="">
			    </div>
			  </div>

		    <div id="calc-btns-section" class="calc-section">
		      <button id="calc-btn-reset" type="reset">Сброс</button>			    
		      <button id="calc-btn-convert" type="button">Конвертировать</button>			      
		    </div>				
		    <div id="calc-table-section" class="calc-section">
		      <table>
		        <tbody>
		        	<tr id="header-tr">
		        	  <td>Единица измерения</td>
		        	  <td id="meaning-in-table">Значение</td>
		        	</tr>
		          <tr>
		            <td>ppm</td>
		            <td id="ppm-amount">—</td>
		          </tr>
		          <tr>
		            <td>мг/м<sup>3</sup></td>
		            <td id="mg-m3-amount">—</td>
		          </tr>
		          <tr>
		            <td>% об. д.</td>
		            <td id="percent-vol-amount">—</td>
		          </tr>
		          <tr>
		            <td>% НКПР</td>
		            <td id="nkpr-amount">—</td>
		          </tr>
		        </tbody>
		      </table>
		    </div>			  
			</form>
		</div>
	
	<script src="//static.tildacdn.com/js/jquery-1.10.2.min.js"></script>
	<script src="//static.tildacdn.com/js/bootstrap.min.js"></script>
	<script src="data.js"></script>
	<script src="main.js"></script>	
	
	</body>	
	</html>

