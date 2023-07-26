<?php 
session_unset();
session_destroy();

header("Location: /Web-Dealer/login");