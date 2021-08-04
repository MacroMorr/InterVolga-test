<?php
$arr1 = array('first', 'last', 'blue', 'green', 'first', 'blue', 'red', 'yellow', 'hard', 'easy', 'first', 'last', 'blue', 'green', 'first', 'blue', 'red', 'yellow', 'hard', 'easy', 'first', 'last', 'blue', 'green', 'first', 'blue', 'red', 'yellow', 'hard', 'easy', 'first', 'last', 'blue', 'green', 'first', 'blue', 'red', 'yellow', 'hard', 'easy', 'first', 'last', 'blue', 'green', 'first', 'blue', 'red', 'yellow', 'hard', 'easy', 'first', 'last', 'blue', 'green', 'first', 'blue', 'red', 'yellow', 'hard', 'easy', 'first', 'last', 'blue', 'green', 'first', 'blue', 'red', 'yellow', 'hard', 'easy', 'first', 'last', 'blue', 'green', 'first', 'blue', 'red', 'yellow', 'hard', 'easy', 'first', 'last', 'blue', 'green', 'first', 'blue', 'red', 'yellow', 'hard', 'easy', 'first', 'last', 'blue', 'green', 'first', 'blue', 'red', 'yellow', 'hard', 'easy',);
$arr2 = $arr1;
$num = 0;
for ($i=0; $i < count($arr1); $i++)
{
    for ($ii=0; $ii < count($arr2); $ii++)
    {
        if ($arr1[$i] == $arr2[$ii])
        {
            if ( $i != $ii )
            {
                echo '<p>' . $arr1[$i] . ' - ' . $i . '<br>' . $arr2[$ii] . ' - ' . $ii . '</p><br>';
                $num++;

            }
        }
    }
}

