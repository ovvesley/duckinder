<?php
function convert_image_to_blob($image)
{
    return addslashes(file_get_contents($image));
}


?>