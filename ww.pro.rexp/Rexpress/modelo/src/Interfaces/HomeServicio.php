<?php namespace homeservicio;

interface HomeServicio {
function deleteUser($array_filter=array());
function updateUser($array_filter=array());
function createUser($array_filter=array());
function idFindUser($array_filter=array());
function all($TP);




}

?>