<?php
require_once "php/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
    <title>Telephone directory</title>
</head>
<body>
    <div class="catalog">
        <form action="php/remove.php" method="post" class="remove__form">
            <ul class="catalog__item">
                <li class="catalog__items">
                    <div><p class="item">ФИО</p></div>
                    <div><p class="item">Телефон</p></div>
                    <div><p class="item">Организация</p></div>
                </li>
                <?php
                foreach ($telephone_directory as $value_directory){
                ?> 
                <li class="catalog__items">
                    <div class="fio">
                        <p class="item__title"><?=$value_directory["secondName"]?></p>
                        <p class="item__title"><?=$value_directory["firstName"]?></p>
                        <p class="item__title"><?=$value_directory["lastName"]?></p>
                    </div>
                    <div><p class="item"><?=$value_directory["telephone"]?></p></div>
                    <div><p class="item"><?=$value_directory["organization"]?></p></div>
                    <input type="hidden" name="remove__item" value="<?=$value_directory["id"]?>">
                    <input class="catalog__button" type="submit" name="remove__button" value="Удалить">
                    <a href="#openModal<?=$value_directory["id"]?>" class="catalog__button">Редактировать</a>
                    <div id="openModal<?=$value_directory["id"]?>"  class="modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Редактирование</h3>
                                    <a href="#close" title="Close" class="close">×</a>
                                </div>
                                <div class="modal-body"> 
                                    <form action="php/edit.php?id=<?=$value_directory["id"]?>" method="post" class="edit__form">
                                        <input type="hidden" name="id" value="<?=$value_directory["id"]?>">
                                        <div class="edit__column">
                                            <label for="title" class="title">Фамилия</label>
                                            <input type="text" name="secondName" value="<?=$value_directory["secondName"]?>" class="form__item">
                                        </div>
                                        <div class="edit__column">
                                            <label for="title" class="title">Имя</label>
                                            <input type="text" name="firstName" value="<?=$value_directory["firstName"]?>" class="form__item">
                                        </div>   
                                        <div class="edit__column">
                                            <label for="title" class="title">Отчество</label>
                                            <input type="text" name="lastName" value="<?=$value_directory["lastName"]?>" class="form__item">
                                        </div> 
                                        <div class="edit__column">
                                            <label for="title" class="title">Телефон</label>
                                            <input type="text" name="telephone" value="<?=$value_directory["telephone"]?>" class="form__item">
                                        </div> 
                                        <div class="edit__column">
                                            <label for="title" class="title">Организация</label>
                                            <input type="text" name="organization" value="<?=$value_directory["organization"]?>" class="form__item">
                                        </div>    
                                        <input class="from__button" type="submit" name="edit__button" value="Редактировать">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#openModalAdd" class="catalog__button">Добавить</a>
                    <div id="openModalAdd" class="modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title">Добавление</h3>
                                    <a href="#close" title="Close" class="close">×</a>
                                </div>
                                <div class="modal-body">    
                                <form action="php/add.php" method="post" class="edit__form">
                                        <div class="edit__column">
                                            <label for="title" class="title">Фамилия</label>
                                            <input type="text" name="secondName" class="form__item">
                                        </div>
                                        <div class="edit__column">
                                            <label for="title" class="title">Имя</label>
                                            <input type="text" name="firstName" class="form__item">
                                        </div>   
                                        <div class="edit__column">
                                            <label for="title" class="title">Отчество</label>
                                            <input type="text" name="lastName" class="form__item">
                                        </div> 
                                        <div class="edit__column">
                                            <label for="title" class="title">Телефон</label>
                                            <input type="text" name="telephone" class="form__item">
                                        </div> 
                                        <div class="edit__column">
                                            <label for="title" class="title">Организация</label>
                                            <input type="text" name="organization" class="form__item">
                                        </div>    
                                        <input class="from__button" type="submit" name="add__button" value="Добавить">
                                    </form>
                                    <!-- Первый раз делал модальное окно, не знаю как вывести данные в одном окне -->
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php
                }
                ?>  
            </ul>
        </form>
    </div>
</body>
</html>