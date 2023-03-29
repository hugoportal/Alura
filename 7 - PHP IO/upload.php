<?php

var_dump($_FILES['arquivo']);

// is_uploaded_file()
var_dump(move_uploaded_file($_FILES['arquivo']['tmp_name'], __DIR__ . '/a.jpg'));