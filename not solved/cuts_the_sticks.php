$fp = fopen("php://stdin", "r");
function cutSticks($sticks)
{
    $len = count($sticks);
    for ($j = 0; $j <= 3; $j++)
    {
        $min = min($sticks);
        $count = 0;

        for ($i = 0; $i < $len; $i++)
        {
            if (isset($sticks[$i]))
            {
                $sticks[$i] -= $min;
                $count++;
                if ($sticks[$i] <= 0)
                {
                    unset($sticks[$i]);
                }
            }
        }

        echo $count . "\n";
    }
}

$len = fgets($fp);
$sticks = explode(" ", fgets($fp));
cutSticks($sticks);