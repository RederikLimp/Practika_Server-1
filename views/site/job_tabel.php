<h1 style="    text-align: center;
    margin: 0;
    height: 50px;
    background-color: white;">Админ Системы</h1>

    <div style="
    display: flex;
    flex-wrap: nowrap;
    flex-direction: row;
    align-content: center;
    justify-content: space-around;
    align-items: center;
"  >

<div><form style="background-color: lightgray;" method="post"><H3>Добавить новую кафедру</H3>
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
<li style="list-style-type: none"><input name='kafedra' type="text" placeholder="Кафедра" class="form_input"></li>
<button class="form_button">Прикрепить</button>
</form></div>

</div>
