// MEXER
function mostraMsg(){
    if(confirm("Deseja realmente apagar isso?")){
        // PHP code
        var htmlString="<?php header('Location: ../delete_gasto.php'); ?>";
        alert("Deletado");
    }else{

    }

}