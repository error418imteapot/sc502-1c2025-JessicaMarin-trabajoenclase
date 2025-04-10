<?php
session_start();
session_unset();
session_destroy();
header('Location: /Semana11/index.html');