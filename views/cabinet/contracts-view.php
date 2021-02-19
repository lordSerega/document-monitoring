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

                <input type="text" data-ng-model="stage" id="stage" class="form-control">



{{id_stage}}

                <div class="mb-3">
                    <button class="btn btn-primary">Сохранить</button>
                    <button class="btn btn-danger" type="button"
                        data-ng-click="deleteContract(idContract)">Удалить</button>
                        <button class="btn btn-info" type="button"
                        >Этапы контракта</button>
                </div>


        </form>

      




        <hr>
        <h4>Этапы контракта:</h4>

        <div class="card">

            <div class="card-body">
                <legend> <i class="fas fa-unlock"></i> Этап 1 <span class="badge badge-success">В процессе</span></legend>
                <div class="mb-3">
                    <label for="dateConclusion" class="form-label"><b>Дата начала этапа</b>
                    </label>
                    <input type="date" data-ng-model="dateConclusion" id="dateConclusion" class="form-control" disabled>
                </div>
                <div class="mb-3">
                    <label for="dateConclusion" class="form-label"><b>Дата окончания этапа</b>
                    </label>
                    <input type="date" data-ng-model="dateConclusion" id="dateConclusion" class="form-control" disabled>
                </div>

                <hr>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">

                        <span class="input-group-text" id="inputGroupFileAddon01">Загузка документа</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Выберите файл...</label>
                    </div>
                </div>
                <button class="btn btn-success">Отправить документ</button>



            </div>


        </div>

        <div class="card mt-2">

            <div class="card-body">
                <legend> <i class="fas fa-lock"> </i> Этап 3 <span class="badge badge-secondary">Ожидает завершение предыдущего этапа</span></legend>

            </div>

        </div>
        <div class="card mt-2">

            <div class="card-body">
                <legend><i class="fas fa-lock"> </i> Этап 4 <span class="badge badge-secondary">Ожидает завершение предыдущего этапа</span></legend>

            </div>

        </div>
        <div class="card mt-2">

            <div class="card-body">
                <legend><i class="fas fa-lock"> </i> Этап 5 <span class="badge badge-secondary">Ожидает завершение предыдущего этапа</span></legend>

            </div>

        </div>
        <div class="card mt-2">

            <div class="card-body">
                <legend><i class="fas fa-lock"> </i> Этап 6 <span class="badge badge-secondary">Ожидает завершение предыдущего этапа</span></legend>

            </div>

        </div>
        <div class="card mt-2">

            <div class="card-body">
                <legend><i class="fas fa-lock"> </i>  Этап 7 <span class="badge badge-secondary">Ожидает завершение предыдущего этапа</span></legend>

            </div>

        </div>

    </div>


</div>