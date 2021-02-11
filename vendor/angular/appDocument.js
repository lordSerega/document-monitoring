var app = angular.module("contracts", ["ngRoute"]);

app.config(function($routeProvider, $locationProvider){
    $routeProvider
    .when("/:id", {
        templateUrl:"/views/document.tpl.php"

    });
    $locationProvider.html5Mode(true);
});



app.controller('contractsController', function($scope, $http, $window){

    $scope.addContract = function() {

        var stageCount = angular.element("#stage").val();
        var stageArr = [];
        for (let i = 1; i<=stageCount;i++){

            var stageNameInfo = "#stageName"+i;
            var dateBegin1Info = "#dateBegin"+i;
            var dateEndInfo = "#dateEnd"+i;
            $scope.stageName = angular.element(stageNameInfo).val();
            $scope.dateBegin = angular.element(dateBegin1Info).val();
            $scope.dateEnd = angular.element(dateEndInfo).val();


            stageArr.push = ({
                name: $scope.stageName,
                dateBegin: $scope.dateBegin,
                dateEnd: $scope.dateEnd
            }
            )

        }
        $scope.stageArr = stageArr;

     
        $scope.nameDp = angular.element("#nameDp").val();
        $scope.contractNumber = angular.element("#contractNumber").val();
        $scope.contractTitle = angular.element("#contractTitle").val();
        $scope.contractDate = angular.element("#contractDate").val();

        $http({
            method: "POST",
            url: "http://localhost/cabinet/document/addContract",
            data: $.param({
                nameDp: $scope.nameDp,
                contractNumber: $scope.contractNumber,
                contractTitle: $scope.contractTitle,
                contractDate: $scope.contractDate,
                stage: $scope.stageArr
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(result){
        
           
        }) 

    }




    
});