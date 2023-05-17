<form action="database/addSerie.php" method="post">

    <div>
        <label for="nomeSerie">Nome serie tv</label>
        <input type="text" name="nomeSerie" id="nomeSerie">
    </div>

    <div>
        <label for="locandina">Locandina</label>
        <input type="text" name="locandina" id="locandina">
    </div>

    <div>
        <label for="rating">rating</label>
        <input type="decimal" name="rating" id="rating">
    </div>

    <div>
        <label for="language">language</label>
        <input type="text" name="language" id="language">
    </div>

    <div>
        <label for="summary">summary</label>
        <textarea name="summary" id="summary" cols="30" rows="10">

        </textarea>
    </div>

    <div>
        <input type="submit" value="Add serie tv">
    </div>


</form>

<div>
    <img src="" id="foto">
</div>


<script>

    const URL = 'https://api.tvmaze.com/singlesearch/shows?q=';
    const NOME_SERIE = document.getElementById('nomeSerie');
    const LOCANDINA = document.getElementById('locandina');
    const language = document.getElementById('language');
    const summary = document.getElementById('summary');
    const rating = document.getElementById('rating');
    
    NOME_SERIE.onblur = function(){
        fetch(URL + NOME_SERIE.value)
            .then(res => res.json())
            .then(serie => {
                console.log(serie);
                LOCANDINA.value = serie.image.original;
                language.value = serie.language;
                summary.value = serie.summary
                rating.value = serie.rating.average   

                document.getElementById('foto').src = serie.image.medium;


            })


    }


    




</script>


