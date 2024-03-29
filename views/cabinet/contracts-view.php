<div class="card">
    <div class="card-body">
        <form action="" class="form-horizontal" name="contractsInfo" data-ng-submit="saveContracts()">
            <input type="hidden" id="idContract" data-ng-model="idContract">
            <legend class="text-primary"> <i class="fas fa-edit fa-cog"></i> Редактирование контракта</legend>
            <div class="form-group">
                <div class="mb-3">
                    <label for="dpName" class="form-label"><b>Название отделения</b> </label>
                    <input type="text" data-ng-model="dpName" id="dpName" class="form-control" disabled>
                </div>

                <div class="mb-3">
                    <label for="numberContract" class="form-label"><b>Номер контракта</b>
                    </label>
                    <input type="text" data-ng-model="numberContract" id="numberContract" class="form-control"
                        placeholder="Введите номер контракта">
                </div>
                <div class="mb-3">
                    <label for="nameContract" class="form-label"><b>Предмет контракта</b> </label>
                    <input type="text" id="nameContract" data-ng-model="nameContract" class="form-control"
                        placeholder="Введите предмет контракта">
                </div>

                <div class="mb-3">
                    <label for="dateConclusion" class="form-label"><b>Дата заключения контракта</b>
                    </label>
                    <input type="date" data-ng-model="dateConclusion" id="dateConclusion" class="form-control">
                </div>


                <div class="mb-3">
                    <button class="btn btn-primary">Сохранить</button>
                    <button class="btn btn-danger" type="button"
                        data-ng-click="deleteContract(idContract)">Удалить</button>
                
                </div>


        </form>

        

      




        <hr>
        <h4>Этапы контракта:</h4>



        <table id="table_id" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Код</th>
                                            <th>Номер этапа</th>
                                            <th>Дата начала</th>
                                            <th>Дата завершения</th>
                                            <th>Статус</th>
                                            <th>Действие</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody>

                                  
                                        
                                        <tr ng-repeat="stage in stages">
                                            <td>{{stage.id_stage}}</td>
                                            <td>{{stage.number_stage}}</td>
                                            <td>{{stage.dtSt_begin}}</td>
                                            <td>{{stage.dtSt_end}}</td>
                                            <td class="" id="stat">{{stage.status}}</td>
                                            
                                            <td><a data-ng-click="getInfoByStage(stage.id_stage)"  href="stage{{stage.id_stage}}"   
                                             class="btn btn-primary " role="button" aria-pressed="true">Подробнее</a></td>
                                        
                                        
            
                                        </tr>
        

                                    </tbody>
                                    
                                </table>

                            
    

     


    </div>


</div>