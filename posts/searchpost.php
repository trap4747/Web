<h2>Пошук</h2>
<form action="MP.php?page=searchpost_php" method="post">
    <div>
    <label>Марка авто</label>
    <select name="brand" class="brand">
        <option value="0">Будь-яка</option>
        <option value="1">Acura</option>
        <option value="2">Alfa Romeo</option>
        <option value="3">Aston Martin</option>
        <option value="4">Audi</option>
        <option value="5">Bentley</option>
        <option value="6">BMW</option>
        <option value="7">Bogdan</option>
        <option value="8">Brilliance</option>
        <option value="9">Buick</option>
        <option value="10">BYD</option>
        <option value="11">Cadillac</option>
        <option value="12">Chana</option>
        <option value="13">Chery</option>
        <option value="14">Chevrolet</option>
        <option value="15">Chrysler</option>
        <option value="16">Citroen</option>
        <option value="17">Dacia</option>
        <option value="18">Dadi</option>
        <option value="19">Daewoo</option>
        <option value="20">Daihatsu</option>
        <option value="21">Dodge</option>
        <option value="22">Ferrari</option>
        <option value="23">Fiat</option>
        <option value="24">Ford</option>
        <option value="25">Geely</option>
        <option value="26">GMC</option>
        <option value="27">Great Wall</option>
        <option value="28">Groz</option>
        <option value="29">Honda</option>
        <option value="30">Hummer</option>
        <option value="31">Hyundai</option>
        <option value="32">Infiniti</option>
        <option value="33">Iran Khodro</option>
        <option value="34">Isuzu</option>
        <option value="35">Iveco</option>
        <option value="36">JAC</option>
        <option value="37">Jaguar</option>
        <option value="38">Jeep</option>
        <option value="39">KIA</option>
        <option value="40">Lada</option>
        <option value="41">Lamborghini</option>
        <option value="42">Lancia</option>
        <option value="43">Land Rover</option>
        <option value="44">Landwind</option>
        <option value="45">Lexus</option>
        <option value="46">Lifan</option>
        <option value="47">Lincoln</option>
        <option value="48">Maserati</option>
        <option value="49">Maybach</option>
        <option value="50">Mazda</option>
        <option value="51">Mercedes-Benz</option>
        <option value="52">Mercury</option>
        <option value="53">MG</option>
        <option value="54">MINI</option>
        <option value="55">Mitsubishi</option>
        <option value="56">Nissan</option>
        <option value="57">Oldsmobile</option>
        <option value="58">Opel</option>
        <option value="59">Peugeot</option>
        <option value="60">Plymouth</option>
        <option value="61">Pontiac</option>
        <option value="62">Porsche</option>
        <option value="63">Proton</option>
        <option value="64">Renault</option>
        <option value="65">Rolls-Royce</option>
        <option value="66">Rover</option>
        <option value="67">Saab</option>
        <option value="68">SAIPA</option>
        <option value="69">Samsung</option>
        <option value="70">Saturn</option>
        <option value="71">Scion</option>
        <option value="72">SEAT</option>
        <option value="73">Shuanghuan</option>
        <option value="74">Skoda</option>
        <option value="75">SMA</option>
        <option value="76">Smart</option>
        <option value="77">SouEast</option>
        <option value="78">SsangYong</option>
        <option value="79">Subaru</option>
        <option value="80">Suzuki</option>
        <option value="81">Tesla</option>
        <option value="82">Toyota</option>
        <option value="83">Volkswagen</option>
        <option value="84">Volvo</option>
        <option value="85">Wartburg</option>
        <option value="86">ВАЗ</option>
        <option value="87">ГАЗ</option>
        <option value="88">ЗАЗ</option>
        <option value="89">ИЖ</option>
        <option value="90">ЛуАЗ</option>
        <option value="91">Москвич</option>
        <option value="92">РАФ</option>
        <option value="93">Ретро автомобиль</option>
        <option value="94">УАЗ</option>
        <option value="95">Інша</option>
    </select>
    </div>
    <div>
        <label>Паливо</label>
        <select name="fueltype" id="fueltype" >
            <option value="0">Будь-який</option>
            <option value="1">Бензин</option>
            <option value="2">Дизельное топливо</option>
            <option value="3">Газ/бензин</option>
            <option value="4">Гибрид</option>
            <option value="5">Газ</option>
            <option value="6">Электро</option>
            <option value="7">Другое</option>
        </select>
    </div>
    <div>
        <label>Тип кузова</label>
        <select name="carbody" id="carbody">
            <option value="0">Будь-який</option>
            <option  value="1">седан</option>
            <option  value="2">внедорожник</option>
            <option  value="3">хэтчбек</option>
            <option  value="4">универсал</option>
            <option  value="5">купе</option>
            <option  value="6">кабриолет</option>
            <option  value="7">минивен</option>
            <option  value="8">пикап</option>
            <option  value="9">другой</option>
        </select>
    </div>
    <div>
        <label>Коробка передач</label>
        <select name="transmission" id="transmission">
            <option value="0">Будь-яка</option>
            <option value="1">Механика</option>
            <option value="2">Роботизированная механика</option>
            <option value="3">Автомат</option>
            <option value="4">Вариатор</option>
            <option  value="5">другая</option>
        </select>
    </div>
    <div>
        <label>Привід</label>
        <select name="privod" id="privod">
            <option value="0">Будь-який</option>
            <option value="1">Передний</option>
            <option value="2">Полный</option>
            <option value="3">Задний</option>
        </select>
    </div>
    <span class="box_name">Ціна від</span>
    <div class="box_field">
        <input type="text" name="cost" id="cost" value="" maxlength="8" class="field_sh" />&nbsp;до&nbsp;<input type="text" name="price2" id="price2" value="" maxlength="8" class="field_sh" />
        <select name='many' id="many">
            <option value='1'>UAH</option>
            <option value="2">USD</option>
            <option value="3">EUR</option>
            <option value="4">RUB</option>
        </select>
    </div>
    <input type="submit" value="Знайти" class="inpt_but_sml" />
</form>