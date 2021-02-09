var app = angular.module("contracts", ["ngRoute"]);

app.config(function($routeProvider, $locationProvider){
    $routeProvider
    .when("/:id", {
        templateUrl:"/views/cabinet/contracts-view.php"

    });
    $locationProvider.html5Mode(true);
});



app.controller('contractsController', function($scope, $http){

    $scope.getInfoByContractID = function(id) {
        $http({
            method: "GET",
            url:  "http://localhost/cabinet/contracts/getContracts",
            params: {id: id}
        }).then(function(result){
            window.scrollTo(0, 100);

            $scope.idContract = result.data.idContract;
           
            $scope.dpName= result.data.departmentName;
            $scope.numberContract= result.data.numberContract;
            $scope.nameContract= result.data.nameContract;
            $scope.dateConclusion= new Date(result.data.dateConclusion);
        })
    }

    $scope.saveContracts = function() {

        $scope.numberContract = angular.element("#numberContract").val();
        $scope.nameContract = angular.element("#nameContract").val();
        $scope.dateConclusion = angular.element("#dateConclusion").val();

        $http({
            method: "POST",
            url: "http://localhost/cabinet/contracts/saveContracts",
            data: $.param({
                idContract: $scope.idContract,
                numberContract: $scope.numberContract,
                nameContract: $scope.nameContract,
                dateConclusion: $scope.dateConclusion
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then (function(result){
            consile.log(result);

        })

    }


});



