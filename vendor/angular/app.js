var app = angular.module("contracts", ["ngRoute"]);

app.config(function($routeProvider, $locationProvider){
    $routeProvider
    .when("/:id", {
        templateUrl:"/views/cabinet/contracts-view.php"

    });
    $locationProvider.html5Mode(true);
});



app.controller('contractsController', function($scope, $http, $window){

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


            stageArr[i] = [{
                name: $scope.stageName,
                dateBegin: $scope.dateBegin,
                dateEnd: $scope.dateEnd
            }
            ]

        }
        $scope.stageArr = stageArr;

        console.log($scope.stageArr);

        $scope.nameDp = angular.element("#nameDp").val();
        $scope.contractNumber = angular.element("#contractNumber").val();
        $scope.contractTitle = angular.element("#contractTitle").val();
        $scope.contractDate = angular.element("#contractDate").val();

        $http({
            method: "POST",
            url: "http://localhost/cabinet/contracts/addContract",
            data: $.param({
                nameDp: $scope.nameDp,
                contractNumber: $scope.contractNumber,
                contractTitle: $scope.contractTitle,
                contractDate: $scope.contractDate,
                stage: $scope.stageArr
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(result){
            // TODO: написать и вызвать метод получения всех продуктов
           
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
            if(result.data.success){
                $window.location.href='/cabinet/';
            }

        })

    }


    $scope.deleteContract = function(idContract) {


        $http({
            method: "POST",
            url: "http://localhost/cabinet/contracts/deleteContract",
            data: $.param({
                idContract: idContract
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then (function(result){
            if(result.data.success){
                $window.location.href='/cabinet/';
            } else ("Ошибка удаления!");

        })


    }


});



