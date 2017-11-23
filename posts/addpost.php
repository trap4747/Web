<form method="POST" onsubmit="return TestFull();"  enctype="multipart/form-data" action="MP.php?page=addpost_php">
    <h2>Додати пост</h2>
    <div>
        <label>Марка авто</label>
        <select name="brand" class="brand">
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
        <label>Рік випуску</label>
        <select name="year" class="year">
            <option value="2015" >2015</option>
            <option value="2014" >2014</option>
            <option value="2013" >2013</option>
            <option value="2012" >2012</option>
            <option value="2011" >2011</option>
            <option value="2010" >2010</option>
            <option value="2009" >2009</option>
            <option value="2008" >2008</option>
            <option value="2007" >2007</option>
            <option value="2006" >2006</option>
            <option value="2005" >2005</option>
            <option value="2004" >2004</option>
            <option value="2003" >2003</option>
            <option value="2002" >2002</option>
            <option value="2001" >2001</option>
            <option value="2000" >2000</option>
            <option value="1999" >1999</option>
            <option value="1998" >1998</option>
            <option value="1997" >1997</option>
            <option value="1996" >1996</option>
            <option value="1995" >1995</option>
            <option value="1994" >1994</option>
            <option value="1993" >1993</option>
            <option value="1992" >1992</option>
            <option value="1991" >1991</option>
            <option value="1990" >1990</option>
            <option value="1989" >1989</option>
            <option value="1988" >1988</option>
            <option value="1987" >1987</option>
            <option value="1986" >1986</option>
            <option value="1985" >1985</option>
            <option value="1984" >1984</option>
            <option value="1983" >1983</option>
            <option value="1982" >1982</option>
            <option value="1981" >1981</option>
            <option value="1980" >1980</option>
            <option value="1979" >1979</option>
            <option value="1978" >1978</option>
            <option value="1977" >1977</option>
            <option value="1976" >1976</option>
            <option value="1975" >1975</option>
            <option value="1974" >1974</option>
            <option value="1973" >1973</option>
            <option value="1972" >1972</option>
            <option value="1971" >1971</option>
            <option value="1970" >1970</option>
            <option value="1969" >1969</option>
            <option value="1968" >1968</option>
            <option value="1967" >1967</option>
            <option value="1966" >1966</option>
            <option value="1965" >1965</option>
            <option value="1964" >1964</option>
            <option value="1963" >1963</option>
            <option value="1962" >1962</option>
            <option value="1961" >1961</option>
            <option value="1960" >1960</option>
            <option value="1959" >1959</option>
            <option value="1958" >1958</option>
            <option value="1957" >1957</option>
            <option value="1956" >1956</option>
            <option value="1955" >1955</option>
            <option value="1954" >1954</option>
            <option value="1953" >1953</option>
            <option value="1952" >1952</option>
            <option value="1951" >1951</option>
            <option value="1950" >1950</option>
            <option value="1949" >1949</option>
            <option value="1948" >1948</option>
            <option value="1947" >1947</option>
            <option value="1946" >1946</option>
            <option value="1945" >1945</option>
            <option value="1944" >1944</option>
            <option value="1943" >1943</option>
            <option value="1942" >1942</option>
            <option value="1941" >1941</option>
            <option value="1940" >1940</option>
            <option value="1939" >1939</option>
            <option value="1938" >1938</option>
            <option value="1937" >1937</option>
            <option value="1936" >1936</option>
            <option value="1935" >1935</option>
            <option value="1934" >1934</option>
            <option value="1933" >1933</option>
            <option value="1932" >1932</option>
            <option value="1931" >1931</option>
            <option value="1930" >1930</option>
            <option value="1929" >1929</option>
            <option value="1928" >1928</option>
            <option value="1927" >1927</option>
            <option value="1926" >1926</option>
            <option value="1925" >1925</option>
            <option value="1924" >1924</option>
        </select>

    </div>
    <div>
        <label>Пробіг(км)</label>
        <input type="text" name="probeg" id="probeg" onkeyup='this.value = this.value.replace(/[^0-9]/g,"");'>
    </div>
    <div>
        <label>Об'єм двигуна</label>
        <input type="text" name="ob_dvigatel" id="ob_dvigatel" onkeyup='this.value = this.value.replace(/[^0-9/.]/g,"");'>
    </div>
    <div>
        <label>Паливо</label>
        <select name="fueltype" id="fueltype" >
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
            <option value="1">Передний</option>
            <option value="2">Полный</option>
            <option value="3">Задний</option>
        </select>
    </div>
    <div>
        <label>Кількість дверей</label>
        <input type="text" name="quantity_door" id="quantity_door" onkeyup='this.value = this.value.replace(/[^0-9]/g,"");'>
    </div>
    <div>
        <label>Колір</label>
        <input type="text" name="col" id="col" onkeyup='this.value = this.value.replace(/[^a-zA-Zа-яёА-ЯЁ]/g,"");'>
    </div>
    <div>
        <label>Комплектація:</label>
        <p><textarea name="complect" id="complect" cols="80" rows="5" onkeyup='this.value = this.value.replace(/[^a-zA-Zа-яёА-ЯЁ0-9/,-/. ()]/g,"");'></textarea><p>
    </div>
    <div>
        <label>Додатково:</label>
        <p><textarea name="dop" cols="80" id="dop" rows="5" onkeyup='this.value = this.value.replace(/[^a-zA-Zа-яёА-ЯЁ0-9/,-/. ()]/g,"");'></textarea><p>
    </div>
    <div>
        <label>Ціна</label>
        <input type="text" name="cost" id="cost" onkeyup='this.value = this.value.replace(/[^0-9/.]/g,"");'>
        <select name='many' id="many">
            <option value='1'>UAH</option>
            <option value="2">USD</option>
            <option value="3">EUR</option>
            <option value="4">RUB</option>
        </select>
    </div>
    <div>
        <style>
            .thumb {
                height: 75px;
                border: 1px solid #000;
                margin: 10px 5px 0 0;

            }
        </style>

        <input type="file" id="files" name="files[]" multiple  />
        <output id="list"></output>

        <script type="text/javascript">
            function handleFileSelect(evt) {
                var files = evt.target.files;

                for (var i = 0, f; f = files[i]; i++) {
                    if (!f.type.match('image.*')) {
                        continue;
                    }

                    var reader = new FileReader();

                    reader.onload = (function(theFile) {
                        return function(e) {
                            var span = document.createElement('span');
                            span.innerHTML = ['<img class="thumb" src="', e.target.result,
                                '" title="', theFile.name, '"/>'].join('');
                            document.getElementById('list').insertBefore(span, null);

                        };
                    })(f);
                    reader.readAsDataURL(f);
                }
            }

            document.getElementById('files').addEventListener('change', handleFileSelect, false);
            </script>
    </div>
    <input type="submit" name="send-request" value="Додати">
</form>
