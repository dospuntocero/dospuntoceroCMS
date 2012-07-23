<?php
/**
 * Page Class ConvertionRate
 *
 * @author Francisco
 */
class ConvertionRate extends Object{
    /**
 * Returns the convertion rate betweeen two currencies
 * @param $from String
 * @param $to String
 * @return Float
 */
    public function Convertion($from = 'CLP', $to = 'USD', $amount = 1){
        $url = 'http://finance.yahoo.com/d/quotes.csv?e=.csv&f=sl1d1t1&s='. $from . $to .'=X';
        $handle = @fopen($url, 'r');
        if ($handle) {
            $result = fgets($handle, 600);
            fclose($handle);
        }
        $allData = explode(',',$result);
        $Value = $allData[1];
        return $Value * $amount;
    }
}
