<?php 
	include '../common/common.php';

	function estilizeAllPages($color){
		estilizeAutores($color);

		estilizeContato($color);

		estilizeDashboard($color);

		estilizeGlobal($color);

		estilizeIdentidadevisual($color);

		estilizeIndex($color);

		estilizeMasterPage($color);

		estilizeMenuDashboard($color);

		estilizeNoticia($color);

		estilizeRodape($color);

		estilizeSobre($color);

		estilizeUltimasNoticias($color);
	}

	function estilizeAutores($color){
		$file = "../css/autores-style.css";

		$content = "/************************************/
					/* Autores.html 					*/
					/************************************/
					h1{
						font-size: 2em;
						margin: 30px 0px 0px 30px;
						color: #". $color .";
					}

					.article{
						text-align: justify;
					}

					/************************************/
					/* box-autor-left & box-autor-right */
					/************************************/
					.box-autor-left, .box-autor-right{
						width: 88.5%;
						margin: 10px 0 10px 30px;
						background-color: #f9f9f9;

						border: 1px solid #e1e1e1;
						border-radius: 4px;
						-moz-border-radius: 4px;
						-webkit-border-radius: 4px;
					}

					.box-autor-left{
						padding: 1em 1.5em 1em 0.5em;
					}

					.box-autor-right{
						padding: 1em 0.5em 1em 1.5em;
					}

					.box-autor-left h2, .box-autor-right h2{
						color: #". $color .";
					}

					.box-autor-left .article, .box-autor-right .article{
						width: 80%;
						color: #666;
						margin-top: 0.2em;
						line-height: 1.2em;
					}

					.box-autor-left h2, .box-autor-left .article{
						margin-left: 21%;
					}

					.box-autor-right h2, .box-autor-right .article{
						margin-right: 21%;
					}



					/************************************/
					/* box-autor     					*/
					/************************************/
					.box-autor-left .img-rounded{
						margin-right: 10px;
					}

					.box-autor-right .img-rounded{
						margin-left: 10px;
					}";

		subscribeFile($file, $content);
	}

	function estilizeContato($color){
		$file = "../css/contate-nos-style.css";

		$content = "/*****************************/
					/* #Contate-nos              */
					/*****************************/
					section{
						color: #666;
						font-size: 1em;
					}

					h1{
						font-size: 2em;
						margin: 30px 0px 0px 30px;
					}

					p{
						margin: 0px 0px 30px 30px;	
					}";

		subscribeFile($file, $content);
	}

	function estilizeDashboard($color){
		$file = "../css/dashboard-style.css";

		$content = "/*****************************/
					/* .container-dashboard      */
					/*****************************/
					.container-dashboard{
						width: 98%;
						margin-top: 10px;
						margin-left: 10px;

						background-color: #ffffff;

						border: 1px solid #c1c1c1;
						border-radius: 4px;
						-moz-border-radius: 4px;
						-webkit-border-radius: 4px;

						box-shadow: 0px 0px 50px -15px #b1b1b1;
					   	-webkit-box-shadow: 0px 0px 50px -15px #b1b1b1;
					   	-moz-box-shadow: 0px 0px 50px -15px #b1b1b1;
					}

					.container-dashboard .header{
						padding: 10px 10px 10px 20px;
						border-bottom: 1px groove #". $color .";
					}

					.container-dashboard .body{
						padding: 20px 20px 20px 20px;
					}

					/*****************************/
					/* form input submit         */
					/*****************************/
					form input[type=submit]{
						margin-top: 30px;
						float: right;

						height: 3.5em;
						width: 14.5em;

						border: 1px solid #efefef;
						border-radius: 2px;
						-webkit-border-radius: 2px;
						-moz-border-radius: 2px;

						color: #ffffff;
						background-color: #". $color .";
					}

					form input[type=submit]:hover{
						cursor: pointer;
						border: 1px solid #a1a1a1;
					}";

		subscribeFile($file, $content);
	}

	function estilizeGlobal($color){
		$file = "../css/global.css";

		$content = "/*****************************/
					/* Global                    */
					/*****************************/
					*{
						margin: 0;
						padding: 0;
						font-family: sans-serif, arial;
					}

					html, body {
					   height: 100%;
					   overflow: auto;
					   background-color: #f5f5f5;
					}

					iframe{
						border: none;
					}

					iframe::-webkit-scrollbar {  
					    display: none;
					}

					h1,h2,h3,h4,h5,h6{
						color: #". $color .";
					}

					p{
						font-weight: 200;
					}

					a{
						text-decoration: none;
					}

					a:hover{
						text-decoration: underline;
					}

					nav a:hover{
						text-decoration: none;
					}

					img{
						border: 1px solid #c1c1c1;
						border-radius: 4px;
						-moz-border-radius: 4px;
						-webkit-border-radius: 4px;
					}

					img:hover{
						border: 1px solid #a1a1a1;
					}

					.clear-left{
						clear: left;
					}

					.clear-right{
						clear: right;
					}

					.float-left{
						float: left;
					}

					.float-right{
						float: right;
					}

					.row-for-float{
						overflow: hidden;
					}

					.clearfix {
						display: inline-block;
					}
					 
					.clearfix:after {
						content: ' ';
						display: block;
						height: 0;
						clear: both;
						font-size: 0;
						visibility: hidden;
					}

					/************************************/
					/* img-rounded   					*/
					/************************************/
					.img-rounded {
						border-radius: 80px;
						-webkit-border-radius: 80px;
						-moz-border-radius: 80px;
					}

					/*****************************/
					/* Header                    */
					/*****************************/
					header{
						width: 100%;
						height: 60px;
						position: fixed;
					}

					header iframe{
						width: 100%;
						height: 60px;

						border-bottom: 1px solid #efefef;

						box-shadow: 0px 0px 50px -15px #b1b1b1;
					   	-webkit-box-shadow: 0px 0px 50px -15px #b1b1b1;
					   	-moz-box-shadow: 0px 0px 50px -15px #b1b1b1;
					}

					/*****************************/
					/* #container-main           */
					/*****************************/
					#container-main{
						width: 80%;
						margin: auto;
						height: auto;
						position: center;

						display: -webkit-box;
						display: -moz-box;           
						display: -ms-flexbox;
						display: -webkit-flex;
						display: flex;			
					}

					/*****************************/
					/* section                   */
					/*****************************/
					section{
						width: 75%;
						margin-top: 75px;

						border: 1px solid #efefef;
						-webkit-border-radius: 4px;
						-moz-border-radius: 4px;
						border-radius: 4px;

						box-shadow: 0px 0px 50px -15px #b1b1b1;
					   	-webkit-box-shadow: 0px 0px 50px -15px #b1b1b1;
					   	-moz-box-shadow: 0px 0px 50px -15px #b1b1b1;

					   	background: #ffffff;
					}

					/*****************************/
					/* aside                     */
					/*****************************/
					aside{
						width: 24.5%;
						height: 900px;
						margin-top: 75px;		
						margin-left: 15px;	
					}

					aside iframe{
						width: 100%;
						height: 900px;

						border: 1px solid #efefef;
						-webkit-border-radius: 4px;
						-moz-border-radius: 4px;
						border-radius: 4px;

						box-shadow: 0px 0px 50px -15px #b1b1b1;
					   	-webkit-box-shadow: 0px 0px 50px -15px #b1b1b1;
					   	-moz-box-shadow: 0px 0px 50px -15px #b1b1b1;

					   	background: #ffffff;
					}

					/*****************************/
					/* footer                    */
					/*****************************/
					footer{
						clear: both;
						margin-top: 15px;
						
						background: #". $color .";
					}

					footer iframe{
						width: 100%;	

						border-top: 1px solid #efefef;

						box-shadow: 0px 0px 50px -15px #b1b1b1;
					   	-webkit-box-shadow: 0px 0px 50px -15px #b1b1b1;
					   	-moz-box-shadow: 0px 0px 50px -15px #b1b1b1;
					}

					/*****************************/
					/* Input                     */
					/*****************************/
					input[type=text], 
					input[type=password], 
					textarea {  
						outline: none;
					  	border: 1px solid #efefef;
					  	-webkit-transition: all 0.30s ease-in-out;
					  	-moz-transition: all 0.30s ease-in-out;
					  	-ms-transition: all 0.30s ease-in-out;
					  	-o-transition: all 0.30s ease-in-out;
					}

					/*****************************/
					/* .formulario               */
					/*****************************/
					.formulario{
						width: 92%;
						margin-left: 30px;
						display: inline-block;
					}

					.formulario fieldset{
						border: 0px solid #ffffff;
					}

					.formulario fieldset label{
						font-weight: bold;
						display: block;
						margin: 10px 0px 2px 0px;
					}

					.formulario fieldset input,
					.formulario fieldset select,
					.formulario fieldset textarea{
						width: 100%;
						padding: 6px 0px 6px 0px;
						
						border-radius: 4px;
						-moz-border-radius: 4px;
						-webkit-border-radius: 4px;
						border: solid 1px #E5E5E5;
					}

					.formulario fieldset textarea{	
						height: 100px;
					}

					/*****************************/
					/* .btn-form                 */
					/*****************************/
					.btn-form{
						width: 100%;
						height: 2.2em;
						margin-top: 5px;
						color: #ffffff;
						background-color: #". $color .";
					}

					.btn-form:hover{
						cursor: pointer;
						border: 1px solid #a1a1a1;
					}

					/*****************************/
					/* Dashboard                 */
					/*****************************/
					#menu-dashboard{
						width: 18%;
						height: 900px;
						margin-top: 60px;	
					}

					#menu-dashboard iframe{
						width: 100%;
						height: 100%;
					}

					#container-dashboard{
						width: 82%;
						margin-top: 60px;
					}

					#footer-dashboard iframe{
						margin-top: 0px;
					}";

		subscribeFile($file, $content);
	}

	function estilizeIdentidadevisual($color){
		$file = "../css/identidadevisual-style.css";

		$content = "/******************************/
					/* #container-nome            */
					/******************************/
					#container-nome{
						height: 230px;
					}

					/*****************************/
					/* .formulario               */
					/*****************************/
					#container-nome label{
						font-weight: bold;
						display: block;
						margin: 10px 0px 2px 0px;
					}

					#input-other-color,
					#container-nome input[type='text']{
						width: 100%;
						padding: 6px 0px 6px 0px;
						
						border-radius: 4px;
						-moz-border-radius: 4px;
						-webkit-border-radius: 4px;
						border: solid 1px #E5E5E5;
					}


					/*******************************/
					/* #container-identidade-visual*/
					/*******************************/
					#container-identidade-visual{
						height: 500px;
					}

					/*****************************/
					/* form display-color        */
					/*****************************/
					form .container:not(#first-container){
						margin-left: 10px; 
					}

					form .container{
						width: 18.9%;
						float: left;
						border: 1px solid #a1a1a1;
					}

					form .container .display-color{	
						height: 300px;
						border-bottom: 1px solid #a1a1a1;
					}

					form .container .display-color:hover{
						cursor: pointer;
					}



					/*****************************/
					/* display-color             */
					/*****************************/
					#display-default-color{
						background-color: #72b2ee; /*Não alterar no builder*/
					}

					#display-red-color{
						background-color: #ff0000;
					}

					#display-green-color{
						background-color: #00ff00;
					}

					#display-yellow-color{
						background-color: #ffff00;
					}

					#display-other-color{
						margin-left: 10px;
					}

					#input-other-color{
						width: 80%;
						margin-top: 75%;
					}";

		subscribeFile($file, $content);
	}

	function estilizeIndex($color){
		$file = "../css/index-style.css";

		$content = "section h1{
						display: none;
					}

					/*****************************/
					/* p                         */
					/*****************************/
					p{
						text-align: justify;
					}

					/*****************************/
					/* a                         */
					/*****************************/
					.nivel-um a{
						font-size: 1.4em;
						color: #". $color .";
					}

					.nivel-dois a{
						font-size: 1.3em;
						color: #". $color .";
					}

					.nivel-tres a{
						font-size: 1.2em;
						color: #". $color .";
					}

					.nivel-quatro a{
						font-size: 1.1em;
						color: #". $color .";
					}

					/*****************************/
					/* p                         */
					/*****************************/
					p{
						font-size: 1em;
						color: #666;
					}
					/*****************************/
					/* row                       */
					/*****************************/
					.row-for-float{
						width: 92.5%;
						margin: 10px 0 0 30px;
					}

					/*****************************/
					/* .nivel-um                 */
					/*****************************/
					.nivel-um{
						width: 92.5%;
						margin: 30px 0 0 30px;
					}

					.nivel-um img{
						width: 100%;
					}

					/*****************************/
					/* .nivel-dois               */
					/*****************************/
					.nivel-dois{
						float: left;
						width: 37.5%;
					}

					.nivel-dois img{
						width: 100%;
					}

					/*****************************/
					/* .nivel-tres               */
					/*****************************/
					.nivel-tres{
						width: 60%;
						margin: 0 0 10px 39.1%;
						overflow: hidden;
					}

					.nivel-tres img{
						float: left;
					}

					.nivel-tres .nivel-tres-texto{
						margin-left: 52.5%;
					}

					/*****************************/
					/* .nivel-quatro             */
					/*****************************/
					.nivel-quatro{	
						width: 23.8%;
						margin-bottom: 10px;
					}

					.nivel-quatro img{
						width: 100%;
					}

					.nivel-quatro{
						float: left;
						overflow: hidden;
					}

					.row-for-float .dois,
					.row-for-float .tres,
					.row-for-float .quatro{
						margin-left: 11px;
					}";

		subscribeFile($file, $content);
	}

	function estilizeMasterPage($color){
		$file = "../css/master-page-style.css";

		$content = "/*****************************/
					/* Navbar                    */
					/*****************************/
					#navbar{
						height: 60px;
						overflow: hidden;

						background-color: #". $color .";
					}

					img{
						margin-top: 5px;
						margin-left: 10%;
					}

					/*****************************/
					/* Menu                      */
					/*****************************/
					nav{
						margin-left: 10%;
					}

					nav ul {
						background: gray;
						list-style: none;
						width: 100%;
					}

					nav li {
						float: left;
						width: auto;
						position: relative;
					}

					nav ul li:first-child{
						background: #ffffff;
					}

					nav ul li:first-child a{
						color: #". $color .";
					}

					nav a {
						color: #ffffff;
						display: block;
						font: bold 1.1em sans-serif;
						padding: 19px 25px 19px;
						text-align: center;

						-webkit-transition: all 0.15s ease-in-out;
					  	-moz-transition: all 0.15s ease-in-out;
					  	-ms-transition: all 0.15s ease-in-out;
					  	-o-transition: all 0.15s ease-in-out;
					}

					nav li:hover a:not(#item-home){
						color: #". $color .";

						background: #ffffff;
					}

					/*****************************/
					/* Form                      */
					/*****************************/
					#container-form{
						display: inline-block;
						width: auto;
						float: right;

						margin-top: 15px;
						margin-right: 10%;
					}

					input[type=text], input[type=password]{
						font-size: 0.9em;
						width: 11em;
						height: 1.9em;

						border: 1px solid #efefef;
						-webkit-border-radius: 2px;
						-moz-border-radius: 2px;
						border-radius: 2px;
					}

					input[type=submit]{
						height: 2.2em;
						width: 6em;
						border: 1px solid #efefef;
						border-radius: 2px;
						-webkit-border-radius: 2px;
						-moz-border-radius: 2px;
					}

					input[type=submit]:hover{
						cursor: pointer;
						border: 1px solid #a1a1a1;
					}	";

		subscribeFile($file, $content);
	}

	function estilizeMenuDashboard($color){
		$file = "../css/menu-dashboard-style.css";

		$content = "/*****************************/
					/* #container-menu           */
					/*****************************/
					#container-menu{
						width: 100%;
						height: 100%;
						position: fixed;
						background-color: #". $color .";
					}

					/*****************************/
					/* panel-identificacao       */
					/*****************************/
					#panel-identificacao{
						padding: 20px 0px 25px 5px;
						border-bottom: 1px solid #ffffff;
					}

					#panel-identificacao img{
						margin-left: 20%;
					}

					.welcome{
						color: #ffffff;
						display: inline-block;
						margin: 5px 0px 0px 10px;
					}

					/*****************************/
					/* nav                       */
					/*****************************/
					nav ul{
						margin: 0;
					    padding: 0;
						list-style-type: none;
					}

					nav ul li{
						padding-top: 10px;
						padding-left: 20px;
						padding-bottom: 10px;
					}

					nav ul li a{
						font-weight: 600;
						color: #fcfcfc;
					}

					nav ul li:hover{
						cursor: pointer;
						background-color: #f0f0f0;
					}

					nav ul li:hover a{
						color: #". $color .";
					}";

		subscribeFile($file, $content);
	}

	function estilizeNavegabilidade($color){
		$file = "../css/navegabilidade-style.css";

		$content = "/*****************************/
					/*  form                     */
					/*****************************/
					form label{
						font-weight: bold;
					}

					form .float-left div,
					form .float-right div div{
						margin-bottom: 20px;
					}

					form .float-right div div{
						display: inline-block;
						margin-left: 50px;
					}

					/*****************************/
					/*  #opcoes-position         */
					/*****************************/
					#opcoes-position{
						margin-right: 60%;
					}";
	}

	function estilizeNoticia($color){
		$file = "../css/noticia-style.css";

		$content = "/*****************************/
					/* noticia.html              */
					/*****************************/
					h1{
						margin-bottom: 1px;
						font-size: 2.5em;
					}

					h2{
						color: #666;
						margin-bottom: 10px;
						font-size: 1.1em;
					}

					p{	
						color: #666;
						text-align: justify;
						margin-bottom: 5px;
					}

					img{
						margin-right: 10px;
						float: left;
					}

					/*****************************/
					/* #container-noticia        */
					/*****************************/
					#container-noticia{
						width: 92.5%;
						margin: 30px 0 30px 30px;
					}

					";

		subscribeFile($file, $content);
	}

	function estilizeRodape($color){
		$file = "../css/rodape-style.css";

		$content = "/*****************************/
					/* #footer                    */
					/*****************************/
					div#footer{
						width: 100%;
						height: 100%;

						background: #". $color .";
					}

					#container{
						width: 80%;
						height: 100%;
						margin-left: 10%;
					}

					#time{
						width: 10%;
						float: left;
						list-style: none;
						margin-top: 15px;
						display: inline-block;
					}

					#time h1{
						color: #666;
						margin-bottom: 10px;
						display: inline-block;
						font-size: 18px;	
					}

					ul{
						list-style: none;
					}

					li{
						color: #666;
						font-size: 12px;	
					}

					#redes-sociais{
						float: right;
						width: 15%;
						height: 10%;

						margin-top: 6%;
					}

					img:hover{
						cursor: pointer;
					}

					#selos{
						float: left;
						margin-left: 30%;
						margin-top: 6%;
						position: inline-block;
					}

					#selos a img{
						border:0;
						width:88px;
						height:31px
					}";

		subscribeFile($file, $content);
	}

	function estilizeSobre($color){
		$file = "../css/sobre-style.css";

		$content = "/*****************************/
					/* noticia.html              */
					/*****************************/
					h1{
						font-size: 2em;
						margin-bottom: 10px;
					}

					p{	
						color: #666;
						text-align: justify;
						margin-bottom: 5px;
					}

					#img-um{
						float: right;
						margin-left: 10px;
					}

					#img-dois{
						float: left;
						margin-right: 10px;
					}

					#img-tres{
						margin-top: 10px;
						width: 100%;
					}

					/*****************************/
					/* #container-noticia        */
					/*****************************/
					#container-sobre{
						width: 92.5%;
						margin: 30px 0 30px 30px;
					}

					";

		subscribeFile($file, $content);
	}

	function estilizeUltimasNoticias($color){
		$file = "../css/ultimas-noticias-style.css";

		$content = "/*****************************/
					/* #aside                    */
					/*****************************/
					#aside{
						width: 100%;
						height: 100%;
						position: fixed;
						background-color: #f9f9f9;
					}

					/*****************************/
					/* .noticia-aside            */
					/*****************************/
					.noticia-aside{
						margin: 10px 10px;
					}

					.noticia-aside img{
						width: 100%;
					}

					img:hover{
						border: 1px solid #a1a1a1;
					}

					.noticia-aside a{
						font-size: 1.2em;
						color: #". $color .";
					}

					.noticia-aside p{
						color: #666;
						line-height: 18px;
					}";

		subscribeFile($file, $content);
	}
?>