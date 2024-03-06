<?php
    $str = "The quick brown fox jumps over the lazy dog. This sentence contains 9 words. The year is 2024, and the temperature is 20 degrees Celsius. 
    There are 50 states in the United States of America. The average human heart beats around 60 to 100 times per minute. A marathon is 26.2 miles long. 
    The population of New York City is over 8 million people. The speed of light is approximately 299,792,458 meters per second. There are 7 continents on Earth.
    The human body is composed of approximately 37.2 trillion cells. The Golden Gate Bridge spans 1.7 miles across the Golden Gate Strait. The Earth revolves around the Sun once every 365.25 days. 
     A dollar bill has the number 1 printed on it. There are 206 bones in the adult human body. The Great Wall of China stretches over 13,000 miles. The human brain weighs about 3 pounds.
     There are 24 hours in a day. The periodic table contains 118 elements.";
    function F1(string $str) : string
    {
        $pattern = '/[\s\d\p{P}]/';
        $str1 = preg_replace($pattern,'',$str);
        $text = '';
        for ($i = 0; $i < strlen($str1); $i++) {
            if ($i % 2 == 0) {
                $text = $text.strtoupper($str1[$i]);
            } else {
                $text = $text.strtolower($str1[$i]);
            }
        }
        return $text;
    }
    echo F1($str);