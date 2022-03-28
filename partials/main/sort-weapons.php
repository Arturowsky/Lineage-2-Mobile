<form action="" method="post" class="mb-3">
    <select name="SelectOptions[]" class="p-1 me-2" style="font-family: Poppins, sans-serif;">
        <option value="" disabled selected>Sortuj według</option>
        <option value="obrazenia">Zadawanych obrażeń</option>
        <option value="celnosc">Celność broni</option>
    </select>

    <input type="submit" name="submit" value="Zastosuj" style="font-family: Poppins, sans-serif;" class="py-1 px-3 btn btn-primary">
</form>

<?php
$SelectOptions = ["obrazenia", "celnosc"];
if(isset($_POST['submit'])){
    if(!empty($_POST['SelectOptions'])) {
    foreach($_POST['SelectOptions'] as $selected){
        echo '<div class="alert delete-alert alert-success alert-dismissible fade show" role="alert">
        <strong>Posortowano.</strong> Wybrano ' .  $selected  . ' </div>'; 
    }    
    
    } else {
    echo '<div class="alert delete-alert alert-danger" role="alert">
    Nie wybrano opcji sortowania. Wybierz co chcesz zrobić i następnie kliknij <strong>Zastosuj</strong>
    </div>';
    }
}
?>