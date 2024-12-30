<?php
require 'functions.php';
require 'consts.php';
require 'styles.php';
require 'classes/NextMovie.php';

$next_movie = NextMovie::get_and_create_next_movie(API_URL);

$data = $next_movie->get_data();


render_template('head', ['title' => $data['title']]);
render_template('main', array_merge($data, ['until_message' => $next_movie->get_until_message()]));
