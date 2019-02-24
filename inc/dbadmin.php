<h2><i id="dbshow" class="fas fa-database"></i>
    <i id="dbclose" class="fas fa-window-close"></i></h2>
    <section id="db">
        <fieldset>
            <legend>Base de Donnée</legend>

            <form action="#" method="get" id="bdd">
                <div>
                    <label for="dbserv">nom du serveur</label>
                    <input type="text" name="dbserv" id="dbserv" value="localhost">
                    <label for="dbuser">username</label>
                    <input type="text" name="dbuser" id="dbuser" value="root">
                    <label for="dbpw">password</label>
                    <input type="text" name="dbpw" id="dbpw">
                    <label for="dbname">nom de la base de donnée</label>
                    <input type="text" name="dbname" id="dbname">
                    <input type="submit" value="Crée / Connecté" name='create'>
                    <p>
                        <?= $msg ?>
                    </p>
                </div>
            </form>
        </fieldset>

        <fieldset>
            <legend>Table</legend>
            <form action="#" method="post" id="tblform">
                <div>
                    <div>
                        <label for="tblname">nom</label>
                        <input type="text" name="tblename" id="tblename">
                    </div>
                    <div>
                        <label>colonnes</label>
                        <p>
                            <span id="plus"><i class="fas fa-plus-square"></i></span>
                            <span id="moins"><i class="fas fa-minus-square"></i></span>
                        </p>
                    </div>
                </div>
                <div id="newtbl"></div>
                <input type="submit" value="Crée" name="createtble">
                <p>
                    <?= $msg2 ?>
                </p>


            </form>
        </fieldset>


    </section>

    <fieldset>
        <legend>Requete</legend>
        <form action="#" method="post">
            <textarea placeholder="" rows="7" spellcheck="false" type='text' id='keyword' name="keyword" onkeyup='autocomplet()'></textarea>
            <ul id='name_list_id'></ul>
            <input type="submit" value="envoyer" name="request">
            <p>
                <?= $msg3 ?>
            </p>
        </form>
        <form action="#" method="post" id="selform">
            <label for="sel">SELECT</label>
            <input type="text" name="sel" id="sel">
            <label for="tbl">FROM</label>
            <input type="text" name="tbl" id="tbl">
            <input type="submit" value="voir" name="show">
        </form>
    </fieldset>
    <section class="liste">
        <table>
            <tr>

                <?php
                /*
                $titre = mysqli_fetch_assoc($result);
                if (!empty($titre)):;
                    foreach ($titre as $key => $value):;
                        ?>
                <th>
                    <?= $key; ?>
                </th>

                <?php endforeach;
                endif; 
                */?>
            </tr>

            <?php
            if (!empty($sel)):;
                while ($row = mysqli_fetch_assoc($result)):;
                    $newSel = explode(",", $sel);
                    ?>
            <tr>
                <?php
                for ($i = 0; $i < count($newSel); $i++):;
                    ?>
                <td>
                    <?= utf8_encode($row[$newSel[$i]]); ?>
                </td>

                <?php endfor; ?>
            </tr>
            <?php endwhile;
            endif; ?>
        </table>
    </section>
    <footer><small><a target="_blank" href="https://github.com/tykrasta/cmrDbAdmin">github</a></small></footer>