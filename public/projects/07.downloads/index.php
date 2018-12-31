	<!DOCTYPE html>
	<html>
<head>
<meta charset="utf-8">


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
<script>
$(document).ready(function ()
{
        $(".container").addClass( "jumbotron" );
});    
</script>
<style>
    .butn
    {
        display: block;
        width: 300px;
    }
</style>
</head>



<body ng-app="" >

<header >

</header>
<div class=" center">
	<div class="jumbotron">
		<h1 class="text-center">Downloads</h1>

        <div  class="center-block butn  btn-group-vertical">
            <button ng-click="js_tab = 0" ng-class="{ active: js_tab === 0 }" class="btn btn-primary" >0.BASH - a helper script written in bash</button>

            <button ng-click="js_tab = 2" ng-class="{ active: js_tab === 2 }" class="btn btn-primary" >Engineers thesis - written part</button>

            <button ng-click="js_tab = 1" ng-class="{ active: js_tab === 1 }" class="btn btn-primary" >Masters thesis - written part</button>

        </div>


		</div>
	</div>
</div>
    

<div style="font-size: 200% "  class=" row-fluid" data-ng-init="js_tab=3">
    <div class=" pagination-center text-center col-md-12">


        <div class="panel" ng-show="js_tab === 0">
            <ng-include
                    src="'do_pobrania/bb.html'">
            </ng-include>
        </div>

    <div class="panel" ng-show="js_tab === 2">
        <ng-include
        src="'do_pobrania/et.html'">
        </ng-include>
    </div>

    <div class="panel" ng-show="js_tab === 1">
        <ng-include
        src="'do_pobrania/mt.html'">
        </ng-include>
    </div>

    
</div>

</body>
</html>

