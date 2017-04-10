<div id="mainTextWrap">
    <div id="mainText">
        <table width="100%" cellspacing="30" align="center">
            <tr>
                <td>
                    <h2 align="center">Контакты:</h2>
                    <h3>Адрес:</h3>
                    Деревная Глыбов, ул. Советская, дом 2
                    <hr>
                    <h3>Телефон:</h3>
                    МТС:  +375 (29) 734-79-52
                    <br>МТС:  +375 (29) 738-95-94
                    <br>Life: +375 (25) 714-10-34
                    <hr>
                    <h3>Контактное лицо:</h3>
                    Котёл Пётр Григорьевич
                </td>
                <td>
                <h2>Форма обратной связи:</h2>
                    <form name="MyForm" action="templates/mail.php" method="post">
                        <p><input class="input" name="name" type="text" placeholder="Ваше имя*" style="width:50%" /></p>

                        <p><input class="input" name="email" type="text" placeholder="Электронная почта*" style="width:50%" /></p>

                        <p><input class="input" name="sub" type="text" placeholder="Тема сообщения" style="width:50%" /></p>

                        <p>Текст сообщения:<br /><textarea name="body" cols="1" rows="5" placeholder="Напишите здесь ваше сообщение" style="width:50%" /></textarea></p>
                        <p><input id="submit" value="Отправить" type="submit" /></p>
                    </form>
                </td>
            </tr>
        </table>
        
    </div>
</div>

