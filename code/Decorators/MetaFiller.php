<?php

class MetaFiller extends DataObjectDecorator {

	function extraStatics() {
		return array(
			'db' => array(
			
			),
		);
	}

	public function updateCMSFields(FieldSet &$fields) {

	}

	function contentControllerInit(){
	}


	// auto meta description information
	public function onAfterWrite(){
		parent::onAfterWrite ();
		LeftAndMain::ForceReload ();
	}

	public function onBeforeWrite () {
		parent::onBeforeWrite ();
		if($this->owner->ID){
			// fill in MetaDescription without any tags
			if($this->owner->record['Title']){
				$this->owner->record['Title'] = $this->owner->record['Title'];
			}

			if($this->owner->record['Content']){
				$this->owner->record['MetaDescription'] = strip_tags($this->owner->record['Content']);
			}
			// fill in MetaKeywords
			if($this->owner->record['Content']){
				$this->owner->record['MetaKeywords'] = self::calculateKeywords($this->owner->record['Content'], 4, 15);
			}
		}
	}
	/**
	* Extract Keywords
	* Returns a lowercase string with keywords ordered by occurance in content seperated with comma's
	* @var $string
	* @var $min_word_char
	* @var $keyword_amount
	* @var $exclude_words
	*/

    private function calculateKeywords($string = '', $min_word_char = 4, $keyword_amount = 15,  $exclude_words = '' ) {
         
        $keystring = '';
        $exclude_words = explode(", ", $exclude_words);
        // get rid off the htmltags
        $string = strip_tags($string);
         
        // count all words
        $initial_words_array  =  str_word_count($string, 1);
        $total_words = sizeof($initial_words_array);
         
        $new_string = $string;
         
        // strip excluded words
        foreach($exclude_words as $filter_word)    {
            $new_string = preg_replace("/\b".$filter_word."\b/i", "", $new_string); 
        }
         
        // calculate words again without the excluded words
        $words_array = str_word_count($new_string, 1);
        $words_array = array_filter($words_array, create_function('$var', 'return (strlen($var) >= '.$min_word_char.');'));
         
        $popularity = array();
        $unique_words_array = array_unique($words_array);
         
        // create density array
        foreach($unique_words_array as  $key => $word)    {
            preg_match_all('/\b'.$word.'\b/i', $string, $out);
            $count = count($out[0]);    
            $popularity[$key]['count'] = $count;
            $popularity[$key]['word'] = $word;
             
        }
         
        usort($popularity, array($this,'cmp'));
         
        // sort array form higher to lower
        krsort($popularity);
         
        // create keyword array with only words
        $keywords = array();
        foreach($popularity as $value){
                        $keywords[] = $value['word']; 
                    }
                     
        // glue keywords to string seperated by comma, maximum 15 words
        $keystring =  strtolower(implode(', ', array_slice($keywords, 0, $keyword_amount)));
         
        // return the keywords
        return $keystring;
    }
     
    /**
     * Sort array by count value
     */
    private static function cmp($a, $b) {
        return ($a['count'] > $b['count']) ? +1 : -1;
    }


}
