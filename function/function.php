<?php
function getConn() {
    return new PDO("mysql:host=localhost;dbname=martin_coiffure;charset=utf8", "root", "");
}