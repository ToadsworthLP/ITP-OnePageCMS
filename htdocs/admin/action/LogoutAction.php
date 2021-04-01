<?php
include_once "admin/utility/AccountUtility.php";

AccountUtility::logout();
header("Location: admin.php?page=".AdminPages::LOGIN);