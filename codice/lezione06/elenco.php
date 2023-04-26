<?php include "header.php"; ?>
<?php include "provaCanzone.php"; ?>

<div class="container">

    
    <table class="table table-danger">
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    CANTANTE
                </th>
                <th>
                    CANZONE
                </th>
            </tr>
        </thead>
        
        <tbody>
            <?php foreach ($discografia as $song) {; ?>
                
                <?= $song->toHtml() ?>
                
                <?php } ?>
            </tbody>
            
        </table>
    </div>

    <?php include "footer.php"; ?>