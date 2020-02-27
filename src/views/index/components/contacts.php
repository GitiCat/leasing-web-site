<div class="container contacts" id="contacts">
    <div class="block b-line-2">
        <form action="form.php" method="POST" novalidate id="feedback">
            <div class="data">
                <label for="name">Имя</label>
                <div class="input-block">
                    <i class="material-icons">person</i>
                    <input type="text" 
                        name="uname" 
                        id="name" 
                        value=""
                        autocomplete="off"
                        required>
                </div>
                <div class="error-message">
                    <div class="error">* обязательное поле</div>
                </div>
            </div>
            <div class="data">
                <label for="email">Электронная почта</label>
                <div class="input-block">
                    <i class="material-icons">alternate_email</i>
                    <input type="text" 
                        name="email" 
                        id="email" 
                        value="" 
                        autocomplete="off"
                        required>
                </div>
                <div class="error-message">
                    <div class="error">* обязательное поле</div>
                    <div class="valid">* введен не валидный адрес</div>
                </div>
            </div>
            <div class="data">
                <div class="input-block">
                    <textarea name="message" id="message" value="" required></textarea>
                </div>
                <div class="error-message">
                    <div class="error">* обязательное поле</div>
                </div>
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