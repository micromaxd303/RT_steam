<?php \Core\View::renderHeader();?>
    <section class="columns is-full is-centered is-vertical catalog">
        <section class="column is-8 filter">
            <div class="columns is-multiline">
                <div class="column is-full form-title">
                    <h1>Редактирование компании</h1>
                </div>

                <div class="column is-two-thirds form">
                    <form method="POST" action="update" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="<?=$company->id?>">
                        <div class="form-control">
                            <label for="name_company">Название компании</label>
                            <input type="text" name="name_company" id="name_company" placeholder="Введите компанию" autocomplete="off" value="<?=$company->name_company?>">
                        </div>


                        <div class="form-control">
                            <label for="description_game">Описание компании</label>
                            <textarea type="text" name="description_company" id="description_company" placeholder="История компании"><?=$company->description_company?></textarea>
                        </div>

                        <div class="form-control">
                            <div class="file is-info is-small has-name"  id="file-js-example">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="logotype" value="<?=$company->logotype_company?>">
                                    <span class="file-cta">
                                              <span class="file-logotype">
                                                <i class="fas fa-upload"></i>
                                              </span>
                                              <span class="file-label">
                                                Выбрать файл
                                              </span>
                                            </span>
                                    <span class="file-name">
                                              <?=$company->logotype_company?>
                                            </span>
                                </label>
                            </div>
                        </div>

                        <div class="form-control">
                            <div class="buttons">
                                <button class="button is-success is-light">Обновить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </section>
<?php \Core\View::renderFooter();?>