<?php

include 'FileHandle.php';
session_set_save_handler(new FileHandle('Notion'));
session_start();