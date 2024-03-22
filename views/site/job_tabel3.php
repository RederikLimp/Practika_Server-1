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

<div><form style="background-color: lightgray;" method="post"><H3>Добавление новых сотрудников деканата</H3>

<div style="margin-left: 62px;">
<li style="list-style-type: none"><input type="text" placeholder="Имя" class="form_input"></li>
<li style="list-style-type: none"><input type="text" placeholder="Фамилия" class="form_input"></li>
<li style="list-style-type: none"><input type="text" placeholder="Отчество" class="form_input"></li>
</div>
<label for="">Кафедра</label>
<select name="" id="">
  <option value="">Выберете кафедру</option>
  <!-- Вывод данных -->
  <?php
        foreach ($dep as $item) {
          echo '<option value="' . $item->id . '">' . $item["Название кафедры"] . '</option>';
        }
        ?>
        <!-- досюда -->
</select>
<div style="margin-left: 62px;">
<li style="list-style-type: none"><input type="text" placeholder="Логин" class="form_input"></li>
  <li style="list-style-type: none"><input type="text" placeholder="Пароль" class="form_input"></li>
 </form></background-color: white;>
 <button class="form_button">Создать</button>

</form></div>

</div>
