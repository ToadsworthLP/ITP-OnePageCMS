<?php


abstract class DBConfig
{
    const HOST = "127.0.0.1";
    const PORT = 3306;
    const DATABASE = "de-press";
    const USER = "de-press";
    const PASSWORD = "17647d7db769f2d9ccbd418ace75f3e1";
    const CHARSET = "utf8mb4";

    const PDO_OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
}