<?php
function renderCard($info = array(
    "name" => "Jorge",
    "username" => "jorjao",
    "image" => "images/pato-login.gif",
    "text" => "Some quick example text to build on the card title and make up the bulk of the card's content.",
)) {
    echo ("
  <div class='card m-5 p-4 matchCard'>
        <h6>$info[username]</h6>
        <h5>@ $info[name]</h5>
        <img class='card-img-top' src='$info[image]' alt='Card image cap'>
        <div class='card-body'>
        <hr>
        <div class='d-flex justify-content-center m-3'>                 
            <button class='btn btn-danger m-2 btn-lg'> <i class='fa fa-heart'></i></button>
            <button class='btn btn-secondary m-2 btn-lg'> <i class='fa fa-thumbs-down'></i> </button> 
        </div>            
             <p class='card-text'>$info[text]</p>
         </div>
         </div>
    </div>
    ");
}
