<?= $this->extend('layout')?>


<?= $this->section('contenu')?>
<body>
    <section>
        <form method="post" action="<?=url_to("create_user")?>">
            
            <label for="nom" >Nom </label>
            <input type="text" id="nom" name="user_nom" />
            
            
            <label for="prenom" >Prenom </label>
            <input type="text" id="prenom" name="user_prenom" />

            <button>Valider</button>
        </form>    
        

    </section>

</body>
<?= $this->endSection()?>