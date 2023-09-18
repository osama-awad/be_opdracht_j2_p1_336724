<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <?php var_dump($data) ?>  -->

    <form action="<?= URLROOT ?>/instructeur/overzichtvoertuigen_wijzig_save/<?= $data['voertuigId'] . "/" . $data['instructerId'] ?>" method="POST">
        <label for="type">
            Type
            <input type="text" name="type" id="type" value="<?= $data["voertuigInfo"][0]->Type?>">
        </label>
        <label for="typeVoertuig">
            typevoertuig
            <select name="typeVoertuig" id="typeVoertuig">
                <?php foreach ($data['typevoertuigen'] as $type) :

                ?>
                    <option value="<?= $type->Id ?>" <?=$type->Id == $data['voertuigInfo'][0]->TypeVoertuigId ? "selected" : ""?>><?php echo  $type->TypeVoertuig ?></option>
                <?php endforeach ?>
            </select>
        </label>
        <label for=" kenteken">
            kenteken
            <input type="text" name="kenteken" id="kenteken" value="<?= $data["voertuigInfo"][0]->Kenteken ?>">
        </label>
        <label for="brandstof">
            Brandstof
            <select name="brandstof" id="brandstof">
                <option value="diesel" <?= $data["voertuigInfo"][0]->Brandstof =="Diesel" ? "selected" : "" ?>>diesel</option>
                <option value="benzine" <?= $data["voertuigInfo"][0]->Brandstof =="Benzine" ? "selected" : "" ?>>benzine</option>
                <option value="elektrisch" <?= $data["voertuigInfo"][0]->Brandstof =="Elektrisch" ? "selected" : "" ?>>elektrisch</option>
            </select>
        </label>
        <label for="bouwjaar">
        bouwjaar
            <input disabled type="date" name="bouwjaar" id="bouwjaar" value="<?= $data['voertuigInfo'][0]->Bouwjaar ?>">
        </label>
        <label for="instructeur">
            instructeur
            <select name="instructeur" id="instructeur">
                <?php foreach ($data['instructeurs'] as $instructeur) :

                ?>
                    <option value="<?= $instructeur->Id ?>"<?= $instructeur->Id == $data ['instructerId'] ? "selected" : "" ?>><?php echo  $instructeur->Voornaam . " " .  $instructeur->Tussenvoegsel . " " . $instructeur->Achternaam ?></option>
                <?php endforeach ?>
            </select>
        </label>
        <button type="submit">Send </button>
    </form>
</body>

</html>