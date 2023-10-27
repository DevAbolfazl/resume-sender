<?php

const DB_HOST = 'localhost';
const DB_NAME = 'resume_sender';
const DB_USER = 'root';
const DB_PASS = '';

$db_conn = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);