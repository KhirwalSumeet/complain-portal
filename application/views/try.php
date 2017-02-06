<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Fullscreen Form Interface</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="http://localhost/complain-portal/resources/form/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="http://localhost/complain-portal/resources/form/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="http://localhost/complain-portal/resources/form/css/component.css" />
		<link rel="stylesheet" type="text/css" href="http://localhost/complain-portal/resources/form/css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="http://localhost/complain-portal/resources/form/css/cs-skin-boxes.css" />
		<script src="http://localhost/complain-portal/resources/form/js/modernizr.custom.js"></script>
		<script src="http://localhost/complain-portal/resources/js/angular.min.js"></script>
		<script type="text/javascript">
		    var app = angular.module("complain-portal", []);
		</script>
	</head>
	<body>
		<div class="container"  ng-app="complain-portal">

			<div class="fs-form-wrap" id="fs-form-wrap" ng-controller="questions">
				<div class="fs-title">
					<h1>Project Worksheet</h1>
					<div class="codrops-top">
						<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/NotificationStyles/"><span>Previous Demo</span></a>
						<a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=19520"><span>Back to the Codrops Article</span></a>
						<a class="codrops-icon codrops-icon-info" href="#"><span>This is a demo for a fullscreen form</span></a>
					</div>
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off">
					<ol id="fs-fields" class="fs-fields">
						<!-- <li>
							<label class="fs-field-label fs-anim-upper" for="q1">23</label>
							<input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="Dean Moriarty" required/>
						</li> -->
						<!-- <li>
							<label class="fs-field-label fs-anim-upper" for="q4">Describe how you imagine your new website</label>
							<textarea class="fs-anim-lower" id="q4" name="q4" placeholder="Describe here"></textarea>
						</li> -->
						<!-- <li>
							<label class="fs-field-label fs-anim-upper" for="q5">What's your budget?</label>
							<input class="fs-mark fs-anim-lower" id="q5" name="q5" type="number" placeholder="1000" step="100" min="100"/>
						</li> -->
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit">Send answers</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

			<!-- Related demos -->
			<div class="related">
				<p>If you enjoyed this demo you might also like:</p>
				<a href="http://tympanus.net/Development/MinimalForm/">
					<img src="img/relatedposts/minimalform1-300x162.png" />
					<h3>Minimal Form Interface</h3>
				</a>
				<a href="http://tympanus.net/Development/ButtonComponentMorph/">
					<img src="img/relatedposts/MorphingButtons-300x162.png" />
					<h3>Morphing Buttons Concept</h3>
				</a>
			</div>

		</div><!-- /container -->
		<script type="text/javascript">
			app.controller("questions", function($scope) {
				var scripts=["http://localhost/complain-portal/resources/form/js/classie.js",
				"http://localhost/complain-portal/resources/form/js/selectFx.js",
				"http://localhost/complain-portal/resources/form/js/fullscreenForm.js"];
				$scope.questions=[{
					"label":"Q1",
					"type":"text"
				},
				{
					"label":"Q2",
					"type":"text"
				}];
				questions();
				function questions(){
					for(i=0;i<$scope.questions.length;i++){
						if($scope.questions[i]["type"]=="text")
							text($scope.questions[i]["label"],i+1)
					}
					for(i=0;i<scripts.length;i++)
						loadScripts(scripts[i]);
					execWrap();
				}
				function text(label,no){
					var li = document.createElement("LI");
					var lab = document.createElement("LABEL");
					lab.className="fs-fields-label fs-anim-upper";
					lab.setAttribute("for","q"+no);
					var input = document.createElement("INPUT");
					input.className="fs-anim-lower ";
					input.setAttribute("type", "text");
					input.setAttribute("id", "q"+no);
					input.setAttribute("name", "q"+no);
					input.setAttribute("placeholder", "Enter");
					// var textnode= document.createTextNode('<label class="fs-field-label fs-anim-upper" for="q'+no+'">'+label+'</label><input class="fs-anim-lower" id="q'+no+'" name="q'+no+'" type="text" placeholder="" required/>');
					var text= document.createTextNode(label);
					lab.appendChild(text);
					li.appendChild(lab);
					li.appendChild(input);
					document.getElementById("fs-fields").appendChild(li); 

				};
				function loadScripts(url){
					var xhrObj = new XMLHttpRequest();
					// open and send a synchronous request
					xhrObj.open('GET', url, false);
					xhrObj.send('');
					// add the returned content to a newly created script tag
					var se = document.createElement('script');
					se.type = "text/javascript";
					se.text = xhrObj.responseText;
					document.getElementsByTagName('head')[0].appendChild(se);
				}
				function execWrap(){
					var formWrap = document.getElementById( 'fs-form-wrap' );

					[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
						new SelectFx( el, {
							stickyPlaceholder: false,
							onChange: function(val){
								document.querySelector('span.cs-placeholder').style.backgroundColor = val;
							}
						});
					} );

					new FForm( formWrap, {
						onReview : function() {
							classie.add( document.body, 'overview' ); // for demo purposes only
						}
					} );
				}
			});
		</script>
		
	</body>
</html>