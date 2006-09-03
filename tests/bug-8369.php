<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 foldmethod=marker */
// $Id$

require_once 'MP3/Playlist.php';

$playlist = new MP3_Playlist('/home/firman/songs', '', 'http://example.com');
$playlist->make('m3u');
$playlist->send('test');

/*
 * Local variables:
 * mode: php
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */
?>