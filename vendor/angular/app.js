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

        //этап 1
        $scope.stageName1 = angular.element("#stageName1").val();
        $scope.dateBegin1 = angular.element("#dateBegin1").val();
        $scope.dateEnd1 = angular.element("#dateEnd1").val();

                //этап 2
                $scope.stageName2 = angular.element("#stageName2").val();
                $scope.dateBegin2 = angular.element("#dateBegin2").val();
                $scope.dateEnd2 = angular.element("#dateEnd2").val();
                 //этап 3
                 $scope.stageName3 = angular.element("#stageName3").val();
                 $scope.dateBegin3 = angular.element("#dateBegin3").val();
                 $scope.dateEnd3 = angular.element("#dateEnd3").val();
                        //этап 4
                        $scope.stageName4 = angular.element("#stageName4").val();
                        $scope.dateBegin4 = angular.element("#dateBegin4").val();
                        $scope.dateEnd4 = angular.element("#dateEnd4").val();
                               //этап 5
                 $scope.stageName5 = angular.element("#stageName5").val();
                 $scope.dateBegin5 = angular.element("#dateBegin5").val();
                 $scope.dateEnd5 = angular.element("#dateEnd5").val();
                        //этап 6
                        $scope.stageName6 = angular.element("#stageName6").val();
                        $scope.dateBegin6  = angular.element("#dateBegin6").val();
                        $scope.dateEnd6 = angular.element("#dateEnd6").val();
                                       //этап 6
                                       $scope.stageName7 = angular.element("#stageName7").val();
                                       $scope.dateBegin7  = angular.element("#dateBegin7").val();
                                       $scope.dateEnd7 = angular.element("#dateEnd7").val();
                                                      //этап 8
                        $scope.stageName8 = angular.element("#stageName8").val();
                        $scope.dateBegin8 = angular.element("#dateBegin8").val();
                        $scope.dateEnd8 = angular.element("#dateEnd8").val();

                                       //этап 9
                                       $scope.stageName9 = angular.element("#stageName9").val();
                                       $scope.dateBegin9  = angular.element("#dateBegin9").val();
                                       $scope.dateEnd9 = angular.element("#dateEnd9").val();

                                                      //этап 10
                        $scope.stageName10 = angular.element("#stageName10").val();
                        $scope.dateBegin10  = angular.element("#dateBegin10").val();
                        $scope.dateEnd10 = angular.element("#dateEnd10").val();

                                       //этап 11
                                       $scope.stageName11 = angular.element("#stageName11").val();
                                       $scope.dateBegin11  = angular.element("#dateBegin11").val();
                                       $scope.dateEnd11 = angular.element("#dateEnd11").val();
        
                                                      //этап 12
                        $scope.stageName12 = angular.element("#stageName12").val();
                        $scope.dateBegin12  = angular.element("#dateBegin12").val();
                        $scope.dateEnd12 = angular.element("#dateEnd12").val();



        $http({
            method: "POST",
            url: "http://localhost/cabinet/contracts/addContract",
            data: $.param({
                nameDp: $scope.nameDp,
                contractNumber: $scope.contractNumber,
                contractTitle: $scope.contractTitle,
                contractDate: $scope.contractDate,
                stageName1: $scope.stageName1,
                dateBegin1: $scope.dateBegin1,
                dateEnd1: $scope.dateEnd1,
                stageName2: $scope.stageName2,
                dateBegin2: $scope.dateBegin2,
                dateEnd2: $scope.dateEnd2,
                stageName3: $scope.stageName3,
                dateBegin3: $scope.dateBegin3,
                dateEnd3: $scope.dateEnd3,
                stageName4: $scope.stageName4,
                dateBegin4: $scope.dateBegin4,
                dateEnd4: $scope.dateEnd4,
                stageName5: $scope.stageName5,
                dateBegin5: $scope.dateBegin5,
                dateEnd5: $scope.dateEnd5,
                stageName6: $scope.stageName6,
                dateBegin6: $scope.dateBegin6,
                dateEnd6: $scope.dateEnd6,
                stageName7: $scope.stageName7,
                dateBegin7: $scope.dateBegin7,
                dateEnd7: $scope.dateEnd7,
                stageName8: $scope.stageName8,
                dateBegin8: $scope.dateBegin8,
                dateEnd8: $scope.dateEnd8,
                stageName9: $scope.stageName9,
                dateBegin9: $scope.dateBegin9,
                dateEnd9: $scope.dateEnd9,
                stageName10: $scope.stageName10,
                dateBegin10: $scope.dateBegin10,
                dateEnd10: $scope.dateEnd10,
                stageName11: $scope.stageName11,
                dateBegin11: $scope.dateBegin11,
                dateEnd11: $scope.dateEnd11,
                stageName12: $scope.stageName12,
                dateBegin12: $scope.dateBegin12,
                dateEnd12: $scope.dateEnd12
            }),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        }).then(function(result){

           
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



