<!DOCTYPE html>
<!--[if IE 7]>         <html class="lt-ie9 lt-ie8" lang="sv" xml:lang="sv" xmlns= "http://www.w3.org/1999/xhtml"> <![endif]-->
<!--[if IE 8]>         <html class="lt-ie9" lang="sv" xml:lang="sv" xmlns= "http://www.w3.org/1999/xhtml"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="sv" xml:lang="sv" xmlns= "http://www.w3.org/1999/xhtml"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<meta name="google" content="notranslate">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Language" content="sv">

	<!-- css -->
	<style>
	html, body, .fixed {
		width: 100%;
		height: 100%;
		min-width: 700px;
	}
	body {
		margin: 0;
		padding: 0;
		background-color: #7ec0ee;
	}
		/**
		* 1: Pink, #DEA5A4
		* 2: Red, #FF6961
		* 3: Orange, #FFB347
		* 4: Yellow, #FDFD96
		* 5: Green, #03C03C
		* 6: Light blue, #AEC6CF
		* 7: Indigo: #779ECB
		* 8: Purple: #966FD6
		*/

		@-webkit-keyframes shimmer {
			0%, 100% {
				background-color: #DEA5A4;
			}
			6% {
				background-color: #FF6961;
			}
			12% {
				background-color: #FF6961;
			}
			18% {
				background-color: #FFB347;
			}
			25% {
				background-color: #FFB347;
			}
			31% {
				background-color: #FDFD96;
			}
			37% {
				background-color: #FDFD96;
			}
			44% {
				background-color: #03C03C;
			}
			50% {
				background-color: #03C03C;
			}
			56% {
				background-color: #AEC6CF;
			}
			63% {
				background-color: #AEC6CF;
			}
			69% {
				background-color: #779ECB;
			}
			75% {
				background-color: #779ECB;
			}
			81% {
				background-color: #966FD6;
			}
			87% {
				background-color: #966FD6;
			}
			93% {
				background-color: #DEA5A4;
			}
		}

	.fixed {
		position: fixed;
		width: 100%;
		height: 100%;
		overflow: hidden;
		top: 0;
		left: 0;
	}

		#rainbow {
			width: 50%;
			height: 0;
			padding-top: 50%;
			border-radius: 50000px;
			position: absolute;
			left: 50%;
			top: 75%;
			margin-top: -20%;
			margin-left: -25%;
		}

		#rainbow div {
				height: 96%;
				width: 96%;
				position: absolute;
				top: 2%;
				left: 2%;

				border-radius: 100%;
		}
			.rainbow {
				-webkit-animation: shimmer 4s linear infinite; 
			}

			#rainbow > div {
				width: 100%; 
				height: 100%;
				top: 0;
				left: 0;
					-webkit-animation-delay: -4000ms;

			}
				#rainbow > div > div {
					-webkit-animation-delay: -3750ms;
				}
				#rainbow > div > div > div {
					-webkit-animation-delay: -3500ms;
				}
				#rainbow > div > div > div > div {
					-webkit-animation-delay: -3250ms;
				}
				#rainbow > div > div > div > div > div {
					-webkit-animation-delay: -3000ms;
				}
				#rainbow > div > div > div > div > div > div {
					-webkit-animation-delay: -2750ms;
				}
				#rainbow > div > div > div > div > div > div > div {
					-webkit-animation-delay: -2500ms;
				}
				#rainbow > div > div > div > div > div > div > div > div {
					-webkit-animation-delay: -2250ms;
				}
				#rainbow > div > div > div > div > div > div > div > div > div {
					-webkit-animation-delay: -2000ms;
				}
				#rainbow > div > div > div > div > div > div > div > div > div > div {
					-webkit-animation-delay: -1750ms;
				}
				.sky {
					background-color: #7ec0ee;
				}

		#ground {
			width: 100%;
			height: 25%;
			position: absolute;
			top: 75%;
			background-color: green;
		}
			#ground:before {
				height: 30px;
				width: 100%;
				top: -1px;
				left: 0;
				position: absolute;
				background-color: red;
				content: "";
				background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…IgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
				background: -moz-linear-gradient(top, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0) 100%);
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.4)), color-stop(100%,rgba(0,0,0,0)));
				background: -webkit-linear-gradient(top, rgba(0,0,0,0.4) 0%,rgba(0,0,0,0) 100%);
				background: -o-linear-gradient(top, rgba(0,0,0,0.4) 0%,rgba(0,0,0,0) 100%);
				background: -ms-linear-gradient(top, rgba(0,0,0,0.4) 0%,rgba(0,0,0,0) 100%);
				background: linear-gradient(to bottom, rgba(0,0,0,0.4) 0%,rgba(0,0,0,0) 100%);
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#66000000', endColorstr='#00000000',GradientType=0 );
			}

	</style>
	<!-- js -->

</head>
<body>
	<!-- content -->
	<div class="fixed">
		<div id="rainbow">
			<div class="rainbow">
				<div class="rainbow">
					<div class="rainbow">
						<div class="rainbow">
							<div class="rainbow">
								<div class="rainbow">
									<div class="rainbow">
										<div class="rainbow">
											<div class="rainbow">
												<div class="sky"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="ground"></div>
	</div>

</body>
</html>