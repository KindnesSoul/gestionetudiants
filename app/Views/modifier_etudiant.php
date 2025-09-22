<?= $this->extend('layout')?>


<?= $this->section('contenu')?>
<body>
    <section>
        <form method="post" action="<?=url_to("update_user")?>">
            <input type="hidden" name="id" value="<?= $data?>">
            
            <label for="nom" >Nom </label>
            <input type="text" id="nom" name="user_nom" />
            
            
            <label for="prenom" >Prenom </label>
            <input type="text" id="prenom" name="user_prenom" />

            <input type="submit" value="modifier">
        </form>    
        

    </section>

</body>
<?= $this->endSection()?>