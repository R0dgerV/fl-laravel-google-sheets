# Задание фриланса

###### Требуется создать консольную команду в Laravel 5.8 для импорта данных в google sheets через Google API, и дальнейших их изменений по средствам Google API.

Консольная команда должна делать следующее (принимать на вход параметры в зависимости от этого выполнять те или иные действия). 

1. параметр --create - из данных создавать Google Sheets с набором листов (Users, Test, Result) + импорт из GoogleDatas::createData на лист Result
2. параметр --update - изменять данные по id на листах Google Sheets, созданных ранее по команде --create. Изменение данных по id из GoogleDatas::updateData на листe Result

Данные находятся в seed database/seeds/GoogleDatas, базу подключать не требуется, можно прямо оттуда брать.
кол-во данных должно быть не менее 5000.
вставка должна быть (без апострофа в начале, т.е. если вставите дату она автоматически определись как дата)

в итоге дожно получится следущее.
1. Вы даете ссылка на google Sheets документ
2. Я захожу, вы запускаете добавления новых данных (импорт должен быть без ошибок, т.е. правельное отобожаение дат и цифр)
3. Я фиксирую результат.
4. Потом Вы запускаете обновление данных.
5. Я фиксирую результат, если все ок Вы мне код, я Вам деньги

