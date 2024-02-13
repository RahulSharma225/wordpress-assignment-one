<?php
function assignmentone_theme_setup()
{
    register_nav_menus(
        array(
            "header" => "Header Menu"
        )
    );
}

add_action("after_setup_theme", "assignmentone_theme_setup")
    ?>