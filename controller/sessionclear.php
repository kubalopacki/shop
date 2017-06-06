<?php

session_destroy();

redirect($_SERVER["HTTP_REFERER"], 303);
