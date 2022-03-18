<?php
# Автоматическая закгурзка
spl_autoload_register(function ($classname){
    require_once 'core/' . $classname . '.php';
});
# Логическая функциональность