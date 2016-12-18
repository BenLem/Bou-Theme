<?php

include 'parsedown.php';

function latest_posts() {
  if( ! Registry::has('latest_posts')) {
    if($article = Registry::get('article')) {
      Registry::set('original_article', $article);
    }
  }

  if( ! $posts = Registry::get('latest_posts')) {
    $posts = Post::where('status', '=', 'published')
             ->sort('created', 'desc')->get();
    Registry::set('latest_posts', $posts = new Items($posts));
  }

  if($result = $posts->valid()) {
    Registry::set('article', $posts->current());
    $posts->next();
  } else {
    $posts->rewind();
    Registry::set('article', Registry::get('original_article'));
    Registry::set('latest_posts', false);
  }

  return $result;
}

function relative_time($date) {
    
    if(is_numeric($date)) $date = '@' . $date;

	$user_timezone = new DateTimeZone(Config::app('timezone'));
	$date = new DateTime($date, $user_timezone);

	// get current date in user timezone
	$now = new DateTime('now', $user_timezone);

	$elapsed = $now->format('U') - $date->format('U');

	if($elapsed <= 1) {
		return 'Just now';
	}

	$times = array(
		31104000 => 'an{s}',
		2592000 => 'mois',
		604800 => 'semaine{s}',
		86400 => 'jour{s}',
		3600 => 'heure{s}',
		60 => 'minute{s}',
		1 => 'seconde{s}'
	);

    foreach ($times as $seconds => $title) {
        $rounded = $elapsed / $seconds;
        
		if($rounded >= 1) {
            $rounded = round($rounded);
            
            if ($rounded == 1) {
                $title = str_replace('{s}', '', $title);
            } else {
                $title = str_replace('{s}', 's', $title);
            }
            return "Il y a ".$rounded." ".$title;
        }
    }
}

function reading_time() {
	$mycontent = article_html();
	$word = str_word_count(strip_tags($mycontent));
	$m = floor($word / 190);
	$s = floor($word % 190 / (190 / 60));
	
	if($m >= 1) {
		
	return $est = $m . ' minute' . ($m == 1 ? '' : 's');
	}
	
	elseif($s <= 59) {
		
	return $est = $s . ' seconde' . ($s == 1 ? '' : 's');
	}
}