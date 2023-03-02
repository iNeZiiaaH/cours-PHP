<?php
require_once 'layout/header.php';
require_once 'layout/nav.php';

var_dump($_POST);
?>
<form class="d-flex justify-content-center m-5" method="POST">
    <div class="mb-3">
        <h1>CONTACT</h1>
        <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre nom" aria-describedby="emailHelp">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre Email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" name="text" id="exampleFormControlTextarea1" placeholder="Votre message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
</form>
