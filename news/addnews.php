<?php include("Connect.php");
$r = $db->query("select login, admin from users");
$flag = false;
while ($row = $r->fetch_assoc())
if($_SESSION['name'] == $row['login'] && $row['admin'] == 1)
{?>
    <h2>Додавання новини</h2>
    <form method="post"  onsubmit="return TestFullNews();"  enctype="multipart/form-data"  action="MP.php?page=addnews_php">
    <div>
        <label>Назва новини:</label>
        <p><textarea name="titnew" cols="80" rows="5" onkeyup='this.value = this.value.replace(/[^a-zA-Zа-яёА-ЯЁ0-9/,-/. ()]/g,"");'></textarea><p>
    </div>
    <div>
        <label>Текст новини:</label>
        <p><textarea name="textnew" cols="80" rows="10" onkeyup='this.value = this.value.replace(/[^a-zA-Zа-яёА-ЯЁ0-9/,-/. ()]/g,"");'></textarea><p>
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
        <input type="submit" id="submitted" name="submitted">
    </form>
<?php $flag = true;}
if(!$flag){
    echo '<meta http-equiv="refresh" content="0; url=http://localhost/Avtoportal/MP.php">';
}?>
