<form action="" method="post">

    <div>
        <label for="nomeSerie">Nome serie tv</label>
        <input type="text" name="nomeSerie" id="nomeSerie">
    </div>


    <div>
        <label for="locandina">Locandina</label>
        <input type="text" name="locandina" id="locandina">
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
    const LOCANDINA = document.getElementById('locandina');
    const NOME_SERIE = document.getElementById('nomeSerie');
    
    NOME_SERIE.onblur = function(){
        fetch(URL + NOME_SERIE.value)
            .then(res => res.json())
            .then(serie => {
                console.log(serie);
                LOCANDINA.value = serie.image.original
                document.getElementById('foto').src= serie.image.original


            })


    }


    




</script>


