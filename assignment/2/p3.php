<?php

function countOccurrencesOfIs($paragraph)
{
    static $count = 0;
    $length = custom_strlen($paragraph);
    $word = '';
    $delimiter = array(' ', '.', ',');

    for ($i = 0; $i < $length; $i++) {
        if (in_array($paragraph[$i], $delimiter)) {
            if ($word === 'is') {
                $count++;
            }
            $word = '';
        } else {
            $word .= $paragraph[$i];
        }
    }

    return $count;
}

function custom_strlen($string)
{
    $length = 0;
    while (isset($string[$length])) {
        $length++;
    }
    return $length;
}

$paragraph = "Anime is a wonderful form of entertainment that is worth watching. It offers a wide range of captivating stories, vibrant animation, and immersive worlds that can truly captivate viewers.";
$occurrencesOfIs = countOccurrencesOfIs($paragraph);
echo "The word 'is' appears " . $occurrencesOfIs . " times in the paragraph.";
?>
