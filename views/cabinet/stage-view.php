<h1>ИНФОРМАЦИЯ ОБ ЭТАПЕ !!!!!!!</h1>


<div class="card">
    <div class="card-body">
        <form action="" class="form-horizontal" name="contractsInfo" data-ng-submit="saveContracts()">
            <input type="hidden" id="idContract" data-ng-model="idContract">
            <legend class="text-primary"> <i class="fas fa-edit fa-cog"></i> Редактирование этапа</legend>
            <div class="form-group">
                <div class="mb-3">
                    <label for="stageCode" class="form-label"><b>Код этапа</b> </label>
                    <input type="text" data-ng-model="stageCode" id="stageCode" class="form-control" disabled>
                </div>

                <div class="mb-3">
                    <label for="stageNumber" class="form-label"><b>Порядковый номер этапа</b>
                    </label>
                    <input type="text" data-ng-model="stageNumber" id="stageNumber" class="form-control" disabled>
                </div>

                <div class="mb-3">
                    <label for="stageBegin" class="form-label"><b>Дата начала этапа</b>
                    </label>
                    <input type="date" data-ng-model="stageBegin" id="stageBegin" class="form-control">
                </div>


                <div class="mb-3">
                    <label for="stageEnd" class="form-label"><b>Дата окончания этапа</b>
                    </label>
                    <input type="date" data-ng-model="stageEnd" id="stageEnd" class="form-control">
                </div>



                <div class="mb-3">
                    <button class="btn btn-primary">Сохранить</button>
                    <button class="btn btn-danger" type="button"
                        data-ng-click="deleteContract(idContract)">Удалить</button>

                </div>


        </form>




        <hr>
        <h4>Документ загрузка</h4>

        <form action="" class="form-horizontal" name="doc" data-ng-submit="doc()" enctype="multipart/form-data">
            <input type="hidden" id="idContract" data-ng-model="idContract">

            <div class="form-group">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile04"
                            aria-describedby="inputGroupFileAddon04">
                        <label class="custom-file-label" for="inputGroupFile04">Выбрать файл</label>
                    </div>

                </div>

                <script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>




                <div class="mb-3">
                    <button class="btn btn-primary">Загрузить</button>

                </div>
            </div>


        </form>



        <hr>

        <h4>Документ скачивание</h4>











    </div>


</div>