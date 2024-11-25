<?php
// File download headers
header('Content-Type: audio/x-mpegurl');
header('Content-Disposition: attachment; filename="StarFlix.m3u"');

// M3U file content
echo "#EXTM3U\n";
echo "#EXTINF:-1,Star Flix\n";
echo "https://ur.link/starflix\n";
?>
