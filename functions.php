<?php

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