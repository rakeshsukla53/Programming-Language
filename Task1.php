<?php

$taskNumber=$argv[1];
$inputFile=$argv[2];
$outputFile=$argv[3];

$file = file_get_contents ($inputFile);
$fhandleout = fopen($outputFile, 'w') or die("File cannot be opened");
$inLength = strlen($file);  #length of the input characters
$finalOutput= "";  # final output creation

if( $taskNumber == 1)
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

        $finalOutput=  $finalOutput.chr($charNumber);
    }
    fwrite($fhandleout, $finalOutput);

}
else if($taskNumber == 2)
{
    $arr2 = array('a' => 'b', 'c' => 'd', 'e' => 'f', 'g' => 'h', 'i' => 'j', 'k'=>'l', 'm'=>'n');
    for( $i = 0; $i < $inLength; ++$i )
    {
        $value = $file[$i];
        if (array_key_exists($value, $arr2)) {
            $finalOutput= $finalOutput.($arr2[$value]);
        }
        else {
            $finalOutput= $finalOutput.($value);
        }
    }
    fwrite($fhandleout, $finalOutput);

//    foreach( $arr2 as $key => $key)
//        fwrite($fhandleout, $value);
}
?>

