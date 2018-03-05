<?php
# $Id: inc_rss_reader.php,v 1.19 2012/08/03 16:17:13 d Exp $
# 
# #####################################################################
# CHANGES:
# 2011-08-18 JA We now use curl to get the rss feed, which allows us to avoid using fopen
# 2010-09-15 DG added strip_tags RSS item title and desc.
# 2010-09-15 DG replace title <strong> tag by 
#           <span class='rss_title'> to allow better styling.
#
# #####################################################################
# Author: Ivaylo B. Georgiev, ivaylo@metadot.com
# Copyright: Metadot
#
# This file contains a function, which will fetch and display an RSS feed
# with html code of LI elements.
#
# Each LI element will have
# the RSS item's 'title' attribute on top as a link with url coming from the
# the RSS item's 'link' attribute. Below that link is the RSS item's 'description'
# attribute, truncated to the first $description_max_length characters.
#
# The resulting html is memcached for 10 minutes. If memcache is not
# running, then the function will still work but much slower.
#
# If there is no rss entries, or rss url is invalid, the function will return
# "No data or invalid url".
#
# If memcache is not operational, a warning will be diplayed in the HTML source code of the page.
# If the RSS feed HTML fragment is cached, the RSS feed will display 3 periods
# where the post is truncated just before the "read more" words and 4 otherwise.
#
# ** Example of blog post displayed when it IS in cached:
#
# XYZ feature has been released
# We are glad to announce XYZ feature has been released... read more
#
# ** Example of blog post displayed when it IS NOT cached:
#
# XYZ feature has been released
# We are glad to announce XYZ feature has been released.... read more
# (Notice the 4 periods instead of 3).
#
#
#######################################################################
#
# Return list of LI elements - one per each rss item
#
# Parameters:
#   url - url of the rss feed
#   url_see_all - url of the page fro where rss feed get the data (such as blog's url). could be empty.
#   num_items - number of rss items to be included in the list
#   description_max_length - the max length of the description
#   memcacheId - string id of the memcached html
#   expireInSec - number of seconds until memcache expires
#
# Example usage:
#   echo getRssHtml("http://www.daskeyboard.com/blog/?feed=rss", 3, 100, "daskeyboard_rss_html", 600);
#
function getRssHtml($url, $url_see_all, $num_items, $description_max_length, $memcacheId, $expireInSec) {
	error_reporting(0); # suppress all error messages. comment this when developing.
	$rss_html = NULL;

	// we eval to make sure the script does not die if there is an error

	eval ("\$memcache = new Memcache;");

	if($memcache != NULL){
		$memcache_ok = $memcache->connect("127.0.0.1",11211); # You might need to set "localhost" to "127.0.0.1"
	} else {
		$memcache_ok = false;
	}

	if ($memcache_ok) {
		$rss_html = $memcache->get($memcacheId);
	} else {
		echo "<!-- WARNING: not using memcache. Use it for maximum RSS speed -->";
	}
	if ($rss_html == NULL) {
		try {
			$doc = new DOMDocument();
		        $doc->loadXML(get_data($url));
			$arrFeeds = array();
			$i = 0;
			foreach ($doc->getElementsByTagName('item') as $node) {
				$itemRSS = array (
						'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
						'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
						'link' => $node->getElementsByTagName('link')->item(0)->nodeValue
				);
				$arrFeeds[$i] = $itemRSS;
				$i++;
			}
			$rss_html = generateRssHtml($arrFeeds, $num_items, $description_max_length, false);
			if (($memcache_ok) && (count($arrFeeds) > 0)) {
				$memcache->set($memcacheId, generateRssHtml($arrFeeds, $num_items, $description_max_length, true), 0, 600); # cache will expire in 10 minutes
			}
		} catch(Exception $ee) {
			$rss_html .= "<li>Error while processing RSS</li>\n";
		}
	}
	if ($url_see_all <> "") {
		$rss_html .= "<div style='float:right;'><a href='$url_see_all' target='_blank'>see&nbsp;all</a></div>\n";
	}
	error_reporting(E_ALL);
	return $rss_html;
}

#
# Called from getRssHtml.
# Return list of LI elements based on the data in $arrFeeds.
# If $is_cached is not set (means data is not memcached),
# we add additional dot before "read more" link.
#
function generateRssHtml($arrFeeds, $num_items, $description_max_length, $is_cached) {
	if (count($arrFeeds) > 0) {
		$rss_html = '';
		$dot = $is_cached ? "" : ".";
		for ($i = 0; $i < $num_items; $i++) {
			$link = $arrFeeds[$i]['link'];
			$title = strip_tags($arrFeeds[$i]['title']);
			$desc = substr(strip_tags($arrFeeds[$i]['desc']),0,$description_max_length);
			$rss_html .= "\n<li><a href='$link' target='_blank'><span class='rss_title'>$title</span></a><br />";
			if($description_max_length > 0){
				$rss_html .= "$desc...$dot <a href='$link' target='_blank'>read&nbsp;more</a></li>\n";
			}
	 }
		return $rss_html;
	} else {
		return "<li>No data or invalid url</li>\n";
	}
}

/* gets the data from a URL */
function get_data($url)
{
        $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
        $data = curl_exec($ch);
	curl_close($ch);
        return $data;
}

?>
