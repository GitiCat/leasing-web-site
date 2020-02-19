<?php if ($_SERVER["REQUEST_METHOD"] == "post")
    var_dump($_POST);
?>

<div class="container contacts">
    <div class="block b-line-2">
        <form action="" method="POST">
            <div class="data">
                <label for="name">Имя</label>
                <div class="input-block">
                    <i class="material-icons">person</i>
                    <input type="text" id="name" value="">
                </div>
                <div class="error">* обязательное поле</div>
            </div>
            <div class="data">
                <label for="email">Электронная почта</label>
                <div class="input-block">
                    <i class="material-icons">alternate_email</i>
                    <input type="text" id="email" value="">
                </div>
                <div class="error">* обязательное поле</div>
            </div>
            <div class="data">
                <textarea name="message" id="message" value=""></textarea>
                <div class="error">* обязательное поле</div>
            </div>
            <input type="submit" value="Отправить">
        </form>
    </div>
    <div class="block b-line-2">
        <div class="title">
            <h1>Контакты</h1>
        </div>
        <div class="descriptor">
            <div class="contact">
                <a href="tel:89859929993">8 (985) 992-99-93</a>
                <a href="mail:vsemenichev@mvs-finance.ru">vsemenichev@mvs-finance.ru</a>
                <p>Генеральный директор</p>
            </div>
            <div class="contact">
                <a href="tel:89698885579">8 (969) 888-55-79</a>
                <a href="mail:avalkov@mvs-finance.ru">avalkov@mvs-finance.ru</a>
                <p>Руководитель направления по работе с партнерами</p>
            </div>
        </div>
    </div>
</div>