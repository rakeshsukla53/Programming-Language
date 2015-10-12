<?php

$taskNumber=$argv[1];
$inputFile=$argv[2];
$outputFile=$argv[3];

$file = file_get_contents ($inputFile);
echo $outputFile."\n";
$finalChr = "";
echo $inputFile."\n";
$fhandleout = fopen($outputFile, 'w') or die("can't open file");
echo $taskNumber."\n";
$inLength = strlen($file);


if( $taskNumber == 2)
{
    $arr2=array('a' => 0, 'b' => 0);
    echo var_dump($arr2);
    for( $i = 0; $i < $inLength; ++$i )
    {
        $value = $file[$i];
        if(array_key_exists($value, $arr2))
            $arr2[$value]= $arr2[$value] + 1;
        else
            $arr2[$value] = 1;
    }

    echo var_dump($arr2);

    foreach( $arr2 as $key => $value)
        fwrite($fhandleout, $value);
}
else if($taskNumber == 1)
{
    for( $i = 0; $i < $inLength; ++$i )
    {
        $value = $file[$i];
        $charNumber = ord($value);  #the function ord is used to conver the character into ASCII number

        if( ($charNumber > 47) && ($charNumber < 58) )
        {
            if( ($charNumber > 47) && ($charNumber < 53) )
                $charNumber = $charNumber + 5;
            else
                $charNumber = $charNumber - 5;

        }
        else if(($charNumber > 64) && ($charNumber < 91))
        {
            if(($charNumber > 64) && ($charNumber < 78))
                $charNumber = $charNumber + 13;
            else
                $charNumber = $charNumber - 13;
        }
        else if(($charNumber > 96) && ($charNumber < 123))
        {
            if(($charNumber > 96) && ($charNumber < 110))
                $charNumber = $charNumber + 13;
            else
                $charNumber = $charNumber - 13;
        }

        $finalChr =  $finalChr.chr($charNumber);
    }
    fwrite($fhandleout, $finalChr);

}
?>

