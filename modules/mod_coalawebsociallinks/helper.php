<?php

defined('_JEXEC') or die('Restricted access');

/**
 * @package             Joomla
 * @subpackage          CoalaWeb Social Links Module
 * @author              Steven Palmer
 * @author url          http://coalaweb.com
 * @author email        support@coalaweb.com
 * @license             GNU/GPL, see /assets/en-GB.license.txt
 * @copyright           Copyright (c) 2015 Steven Palmer All rights reserved.
 *
 * CoalaWeb Social Links is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
class CoalawebSocialLinksHelper {
    
    /* Bookmark functions */
    function getDeliciousBookmark($title, $link, $size, $linknofollow, $popup) {
        $output[] = '<li>';
        $output[] = '<a class="'.$popup.'delicious' . $size . '" href="http://del.icio.us/post?v=2&amp;url=' . $link . '&amp;title=' . $title . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Delicious") .'" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Delicious") .'</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getDiggBookmark($title, $link, $size, $linknofollow, $popup) {
        $output[] = '<li>';
        $output[] = '<a class="' . $popup . 'digg' . $size . '" href="https://digg.com/submit?phase=2&amp;url=' . $link . '&amp;title=' . $title . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Digg") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Digg") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getFacebookBookmark($link, $size, $linklong, $linknofollow, $popup, $appId) {
        $output[] = '<li>';
        $output[] = '<a class="' . $popup . 'facebook' . $size . '" href="https://www.facebook.com/dialog/share?app_id=' . $appId . '&amp;display=popup&amp;href=' . $link . '&amp;redirect_uri=' . $linklong . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Facebook") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Facebook") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getGoogleBookmark($title, $link, $size, $linknofollow, $googleIcon, $popup) {
        $output[] = '<li>';
        $output[] = '<a class="' . $popup . $googleIcon . $size . '" href="https://plus.google.com/share?url=' . $link . '&amp;title=' . $title . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Google") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Google") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getStumbleuponBookmark($title, $link, $size, $linknofollow, $popup) {
        $output[] = '<li>';
        $output[] = '<a class="' . $popup . 'stumbleupon' . $size . '"  href="https://www.stumbleupon.com/submit?url=' . $link . '&amp;title=' . $title . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Stumbleupon") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Stumbleupon") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getTwitterBookmark($title, $link, $size, $linknofollow, $via) {
        $output[] = '<li>';
        $output[] = '<a class="twitter' . $size . '" href="https://twitter.com/intent/tweet?text=' . $title . '&amp;url=' . $link . '' . $via .'" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Twitter") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Twitter") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getLinkedInBookmark($title, $link, $size, $linknofollow, $popup) {
        $output[] = '<li>';
        $output[] = '<a class="' . $popup . 'linkedin' . $size . '" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=' . $link . '&amp;title=' . $title . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "LinkedIn") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "LinkedIn") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getNewsvineBookmark($title, $link, $size, $linknofollow, $popup) {
        $output[] = '<li>';
        $output[] = '<a class="' . $popup . 'newsvine' . $size . '" href="https://www.newsvine.com/_tools/seed?popoff=0&amp;u=' . $link . '&amp;title=' . $title . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Newsvine") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Newsvine") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getRedditBookmark($title, $link, $size, $linknofollow, $popup) {
        $output[] = '<li>';
        $output[] = '<a class="' . $popup . 'reddit' . $size . '" href="http://reddit.com/submit?url=' . $link . '&amp;title=' . $title . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Reddit") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Reddit") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }
    
    function getPinterestBookmark($size, $linknofollow) {
        $output[] = '<li>';
        $output[] = '<a class="pinterest' . $size . '" href="javascript:selectPinImage()" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Pinterest") . '" ' . $linknofollow . '>' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_BOOKMARK", "Pinterest") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getEmailBookmark($title, $link, $size) {
        $output[] = '<li>';
        $output[] = '<a class="gmail' . $size . '" href="mailto:?subject=' . $title . '&amp;body=' . $link . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_EMAIL_BM", "Email") . '" >' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_EMAIL_BM", "Email") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    /* Follow Us functions */
    function getFacebookFollow($linkfacebook, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = '<a class="'. $popupFollow . 'facebook' . $size . '" href="https://' . $linkfacebook . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Facebook") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Facebook") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getGoogleFollow($linkgoogle, $size, $linknofollow, $googleIcon, $popupFollow) {
        $output[] = '<li>';
        $output[] = '<a class="' . $popupFollow . $googleIcon . $size . '" href="https://' . $linkgoogle . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Google +") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Google +") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getLinkedinFollow($linklinkedin, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = '<a class="' . $popupFollow . 'linkedin' . $size . '" href="https://' . $linklinkedin . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Linkedin") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Linkedin") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getTwitterFollow($linktwitter, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = '<a class="' . $popupFollow . 'twitter' . $size . '" href="https://' . $linktwitter . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Twitter") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Twitter") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getRssFollow($linkrss, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = '<a class="' . $popupFollow . 'rss' . $size . '" href="http://' . $linkrss . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "RSS") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "RSS") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getMyspaceFollow($linkmyspace, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = '<a class="' . $popupFollow . 'myspace' . $size . '" href="https://' . $linkmyspace . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Myspace") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Myspace") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getVimeoFollow($linkvimeo, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = '        <a class="' . $popupFollow . 'vimeo' . $size . '" href="https://' . $linkvimeo . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Vimeo") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Vimeo") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getYoutubeFollow($linkyoutube, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'youtube' . $size . '" href="https://' . $linkyoutube . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Youtube") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Youtube") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getDribbleFollow($linkdribbble, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'dribbble' . $size . '" href="https://' . $linkdribbble . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Dribbble") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Dribbble") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getDeviantartFollow($linkdeviantart, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'deviantart' . $size . '" href="https://' . $linkdeviantart . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Deviantart") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Deviantart") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getContactFollow($linkcontact, $linkTargetContact,$size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'gmail' . $size . '" href="http://' . $linkcontact . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_CONTACT_F", "Email") . '" ' . $linknofollow . 'target="_' . $linkTargetContact . '">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_CONTACT_F", "Email") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getMailFollow($linkmail, $size) {
        $output[] = '<li style="text-indent: 0px !important;">';
        $output[] = ' <a class="gmail' . $size . '" href="mailto:' . $linkmail . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_EMAIL_F", "Email") . '" rel="nofollow" >' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_EMAIL_F", "Email") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getEbayFollow($linkebay, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'ebay' . $size . '" href="http://' . $linkebay . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Ebay") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Ebay") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getTuentiFollow($linktuenti, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'tuenti' . $size . '" href="https://' . $linktuenti . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Tuenti") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Tuenti") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getBehanceFollow($linkbehance, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'behance' . $size . '" href="http://' . $linkbehance . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Behance") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Behance") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getDesignmooFollow($linkdesignmoo, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'designmoo' . $size . '" href="http://' . $linkdesignmoo . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Designmoo") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Designmoo") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getFlickrFollow($linkflickr, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'flickr' . $size . '" href="https://' . $linkflickr . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Flickr") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Flickr") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getLastfmFollow($linklastfm, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'lastfm' . $size . '" href="http://' . $linklastfm . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Last.fm") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Last.fm") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getPinterestFollow($linkpinterest, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'pinterest' . $size . '" href="https://' . $linkpinterest . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Pinterest") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Pinterest") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getTumblrFollow($linktumblr, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'tumblr' . $size . '" href="http://' . $linktumblr . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Tumblr") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Tumblr") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getInstagramFollow($linkinstagram, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'instagram' . $size . '" href="http://' . $linkinstagram . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Instagram") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Instagram") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getXingFollow($linkxing, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'xing' . $size . '" href="https://' . $linkxing . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Xing") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Xing") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getSpotifyFollow($linkspotify, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'spotify' . $size . '" href="https://' . $linkspotify . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Spotify") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Spotify") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getBloggerFollow($linkblogger, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'blogger' . $size . '" href="https://' . $linkblogger . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Blogger") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Blogger") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getTripadvisorFollow($linktripadvisor, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'tripadvisor' . $size . '" href="http://' . $linktripadvisor . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Tripadvisor") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Tripadvisor") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getAndroidFollow($linkandroid, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'android' . $size . '" href="http://' . $linkandroid . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Android") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Android") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    function getGithubFollow($linkgithub, $size, $linknofollow, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'github' . $size . '" href="http://' . $linkgithub . '" title="' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Github") . '" ' . $linknofollow . 'target="_blank">' . JText::sprintf("MOD_COALAWEBSOCIALLINKS_FOLLOW", "Github") . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    /* Follow Us Custom functions */
    function getCustomoneFollow($linkcustomone, $size, $linknofollow, $textcustomone, $popupFollow) {
        $output[] = '<li>';
        $output[] = ' <a class="' . $popupFollow . 'customone' . $size . '" href="http://' . $linkcustomone . '" title="' . $textcustomone . '" ' . $linknofollow . 'target="_blank">' . $textcustomone . '</a>';
        $output[] = '</li>';
        return implode("\n", $output);
    }

    //Create Custom style
    public static function getCustomoneStyle($themes_icon, $iconcustomone, $size) {
        $doc = JFactory::getDocument();
        $styles = ".cw-social-mod-icons-".$themes_icon ."  a.customone" . $size . " {background:url(" . JURI::base(true) . '/' .$iconcustomone . ") 0 0 no-repeat;}";
        $styles .= ".cw-social-mod-icons-".$themes_icon ." a.customone" . $size . " {background:url(" . JURI::base(true) . '/' .$iconcustomone . ") 0 0 no-repeat;}";
        $doc->AddStyledeclaration($styles);
    }

}