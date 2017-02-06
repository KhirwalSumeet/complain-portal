<script src="<?php echo base_url(); ?>resources/js/angular.min.js"></script>
<script type="text/javascript">
    var app = angular.module("complain-portal", []);
</script>
<div id="page-wrapper" ng-app="complain-portal">
    <div ng-controller="questions">
        <div class="container-fluid">
        	<form method="POST" action="">
	        	<div ng-repeat="x in questions">
		        	<label>{{x.label}}</label>
		        	<input type="text" name="{{x.id}}" required>
		        </div>
        	</form>
        </div>
            
    </div>

</div>
        <!-- /#page-wrapper -->
<script type="text/javascript">
app.controller("questions", function($scope) {
	$scope.questions=[{
		"label":"Q1",
		"type":"text",
		"id":"1"
	}];

});
</script>

