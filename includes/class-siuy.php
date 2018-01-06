/*

Normalizing styles have been helped along thanks to the fine work of
Nicolas Gallagher and Jonathan Neal https://necolas.github.io/normalize.css/
*/


/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
# Normalize
# Stroke 7
# Typography
# Elements
# Forms
    ## Search form
    ## Post password form
# Links
# Navigation
    ## Menus
    ## Small menu
    ## Next and previous navigation
    ## JS-OffCanvas
    ## Slinky
# Accessibility
# Alignments
# Clearings
# Widgets
    ## Siuy posts
    ## MailChimp
    ## Calendar
    ## Link list
# Content
    ## Posts and pages
    ## Entry meta
    ## Read more link
    ## Post formats
    ## Post format chat
    ## Comments
    ## 404 Page
# Footer
    ## Widget area
# Infinite scroll
# Media
    ## Captions
    ## Galleries
--------------------------------------------------------------*/


/*--------------------------------------------------------------
# Normalize
--------------------------------------------------------------*/

html {
	-ms-text-size-adjust: 100%;
	-webkit-text-size-adjust: 100%;
	font-family: sans-serif;
}

body {
	margin: 0;
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
main,
menu,
nav,
section,
summary {
	display: block;
}

audio,
canvas,
progress,
video {
	display: inline-block;
	vertical-align: baseline;
}

audio:not([controls]) {
	display: none;
	height: 0;
}

[hidden],
template {
	display: none;
}

a {
	background-color: transparent;
}

a:active,
a:hover {
	outline: 0;
}

abbr[title] {
	border-bottom: 1px dotted;
}

b,
strong {
	font-weight: bold;
}

dfn {
	font-style: italic;
}

h1 {
	font-size: 2em;
	margin: 0.67em 0;
}

mark {
	background: #ff0;
	color: #000;
}

small {
	font-size: 80%;
}

sub,
sup {
	font-size: 75%;
	line-height: 0;
	position: relative;
	vertical-align: baseline;
}

sup {
	top: -0.5em;
}

sub {
	bottom: -0.25em;
}

img {
	border: 0;
}

svg:not(:root) {
	overflow: hidden;
}

figure {
	margin: 1em 40px;
}

hr {
	-webkit-box-sizing: content-box;
	box-sizing: content-box;
	height: 0;
}

pre {
	overflow: auto;
}

code,
kbd,
pre,
samp {
	font-family: monospace, monospace;
	font-size: 1em;
}

button,
input,
optgroup,
select,
textarea {
	color: inherit;
	font: inherit;
	margin: 0;
}

button {
	overflow: visible;
}

button,
select {
	text-transform: none;
}

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
	-webkit-appearance: button;
	cursor: pointer;
}

button[disabled],
html input[disabled] {
	cursor: default;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
	border: 0;
	padding: 0;
}

input {
	line-height: normal;
}

input[type="checkbox"],
input[type="radio"] {
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
	padding: 0;
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
	height: auto;
}

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
	-webkit-appearance: none;
}

fieldset {
	border: 1px solid #c0c0c0;
	margin: 0 2px;
	padding: 0.35em 0.625em 0.75em;
}

legend {
	border: 0;
	padding: 0;
}

textarea {
	overflow: auto;
}

optgroup {
	font-weight: bold;
}

table {
	border-collapse: collapse;
	border-spacing: 0;
}

td,
th {
	padding: 0;
}


/*--------------------------------------------------------------
# Stroke 7
--------------------------------------------------------------*/

@font-face {
	font-family: 'Pe-icon-7-stroke';
	font-style: normal;
	font-weight: normal;
	src: url('../fonts/Pe-icon-7-stroke.eot?d7yf1v');
	src: url('../fonts/Pe-icon-7-stroke.eot?#iefixd7yf1v') format('embedded-opentype'), url('../fonts/Pe-icon-7-stroke.woff?d7yf1v') format('woff'), url('../fonts/Pe-icon-7-stroke.ttf?d7yf1v') format('truetype'), url('../fonts/Pe-icon-7-stroke.svg?d7yf1v#Pe-icon-7-stroke') format('svg');
}

[class^="pe-7s-"],
[class*=" pe-7s-"] {
	-moz-osx-font-smoothing: grayscale;
	-webkit-font-smoothing: antialiased;
	font-family: 'Pe-icon-7-stroke';
	font-style: normal;
	font-variant: normal;
	font-weight: normal;
	line-height: 1;
	speak: none;
	text-transform: none;
	/* Better Font Rendering =========== */
}

.pe-7s-album:before {
	content: "\e6aa";
}

.pe-7s-arc:before {
	content: "\e6ab";
}

.pe-7s-back-2:before {
	content: "\e6ac";
}

.pe-7s-bandaid:before {
	content: "\e6ad";
}

.pe-7s-car:before {
	content: "\e6ae";
}

.pe-7s-diamond:before {
	content: "\e6af";
}

.pe-7s-door-lock:before {
	content: "\e6b0";
}

.pe-7s-eyedropper:before {
	content: "\e6b1";
}

.pe-7s-female:before {
	content: "\e6b2";
}

.pe-7s-gym:before {
	content: "\e6b3";
}

.pe-7s-hammer:before {
	content: "\e6b4";
}

.pe-7s-headphones:before {
	content: "\e6b5";
}

.pe-7s-helm:before {
	content: "\e6b6";
}

.pe-7s-hourglass:before {
	content: "\e6b7";
}

.pe-7s-leaf:before {
	content: "\e6b8";
}

.pe-7s-magic-wand:before {
	content: "\e6b9";
}

.pe-7s-male:before {
	content: "\e6ba";
}

.pe-7s-map-2:before {
	content: "\e6bb";
}

.pe-7s-next-2:before {
	content: "\e6bc";
}

.pe-7s-paint-bucket:before {
	content: "\e6bd";
}

.pe-7s-pendrive:before {
	content: "\e6be";
}

.pe-7s-photo:before {
	content: "\e6bf";
}

.pe-7s-piggy:before {
	content: "\e6c0";
}

.pe-7s-plugin:before {
	content: "\e6c1";
}

.pe-7s-refresh-2:before {
	content: "\e6c2";
}

.pe-7s-rocket:before {
	content: "\e6c3";
}

.pe-7s-settings:before {
	content: "\e6c4";
}

.pe-7s-shield:before {
	content: "\e6c5";
}

.pe-7s-smile:before {
	content: "\e6c6";
}

.pe-7s-usb:before {
	content: "\e6c7";
}

.pe-7s-vector:before {
	content: "\e6c8";
}

.pe-7s-wine:before {
	content: "\e6c9";
}

.pe-7s-cloud-upload:before {
	content: "\e68a";
}

.pe-7s-cash:before {
	content: "\e68c";
}

.pe-7s-close:before {
	content: "\e680";
}

.pe-7s-bluetooth:before {
	content: "\e68d";
}

.pe-7s-cloud-download:before {
	content: "\e68b";
}

.pe-7s-way:before {
	content: "\e68e";
}

.pe-7s-close-circle:before {
	content: "\e681";
}

.pe-7s-id:before {
	content: "\e68f";
}

.pe-7s-angle-up:before {
	content: "\e682";
}

.pe-7s-wristwatch:before {
	content: "\e690";
}

.pe-7s-angle-up-circle:before {
	content: "\e683";
}

.pe-7s-world:before {
	content: "\e691";
}

.pe-7s-angle-right:before {
	content: "\e684";
}

.pe-7s-volume:before {
	content: "\e692";
}

.pe-7s-angle-right-circle:before {
	content: "\e685";
}

.pe-7s-users:before {
	content: "\e693";
}

.pe-7s-angle-left:before {
	content: "\e686";
}

.pe-7s-user-female:before {
	content: "\e694";
}

.pe-7s-angle-left-circle:before {
	content: "\e687";
}

.pe-7s-up-arrow:before {
	content: "\e695";
}

.pe-7s-angle-down:before {
	content: "\e688";
}

.pe-7s-switch:before {
	content: "\e696";
}

.pe-7s-angle-down-circle:before {
	content: "\e689";
}

.pe-7s-scissors:before {
	content: "\e697";
}

.pe-7s-wallet:before {
	content: "\e600";
}

.pe-7s-safe:before {
	content: "\e698";
}

.pe-7s-volume2:before {
	content: "\e601";
}

.pe-7s-volume1:before {
	content: "\e602";
}

.pe-7s-voicemail:before {
	content: "\e603";
}

.pe-7s-video:before {
	content: "\e604";
}

.pe-7s-user:before {
	content: "\e605";
}

.pe-7s-upload:before {
	content: "\e606";
}

.pe-7s-unlock:before {
	content: "\e607";
}

.pe-7s-umbrella:before {
	content: "\e608";
}

.pe-7s-trash:before {
	content: "\e609";
}

.pe-7s-tools:before {
	content: "\e60a";
}

.pe-7s-timer:before {
	content: "\e60b";
}

.pe-7s-ticket:before {
	content: "\e60c";
}

.pe-7s-target:before {
	content: "\e60d";
}

.pe-7s-sun:before {
	content: "\e60e";
}

.pe-7s-study:before {
	content: "\e60f";
}

.pe-7s-stopwatch:before {
	content: "\e610";
}

.pe-7s-star:before {
	content: "\e611";
}

.pe-7s-speaker:before {
	content: "\e612";
}

.pe-7s-signal:before {
	content: "\e613";
}

.pe-7s-shuffle:before {
	content: "\e614";
}

.pe-7s-shopbag:before {
	content: "\e615";
}

.pe-7s-share:before {
	content: "\e616";
}

.pe-7s-server:before {
	content: "\e617";
}

.pe-7s-search:before {
	content: "\e618";
}

.pe-7s-film:before {
	content: "\e6a5";
}

.pe-7s-science:before {
	content: "\e619";
}

.pe-7s-disk:before {
	content: "\e6a6";
}

.pe-7s-ribbon:before {
	content: "\e61a";
}

.pe-7s-repeat:before {
	content: "\e61b";
}

.pe-7s-refresh:before {
	content: "\e61c";
}

.pe-7s-add-user:before {
	content: "\e6a9";
}

.pe-7s-refresh-cloud:before {
	content: "\e61d";
}

.pe-7s-paperclip:before {
	content: "\e69c";
}

.pe-7s-radio:before {
	content: "\e61e";
}

.pe-7s-note2:before {
	content: "\e69d";
}

.pe-7s-print:before {
	content: "\e61f";
}

.pe-7s-network:before {
	content: "\e69e";
}

.pe-7s-prev:before {
	content: "\e620";
}

.pe-7s-mute:before {
	content: "\e69f";
}

.pe-7s-power:before {
	content: "\e621";
}

.pe-7s-medal:before {
	content: "\e6a0";
}

.pe-7s-portfolio:before {
	content: "\e622";
}

.pe-7s-like2:before {
	content: "\e6a1";
}

.pe-7s-plus:before {
	content: "\e623";
}

.pe-7s-left-arrow:before {
	content: "\e6a2";
}

.pe-7s-play:before {
	content: "\e624";
}

.pe-7s-key:before {
	content: "\e6a3";
}

.pe-7s-plane:before {
	content: "\e625";
}

.pe-7s-joy:before {
	content: "\e6a4";
}

.pe-7s-photo-gallery:before {
	content: "\e626";
}

.pe-7s-pin:before {
	content: "\e69b";
}

.pe-7s-phone:before {
	content: "\e627";
}

.pe-7s-plug:before {
	content: "\e69a";
}

.pe-7s-pen:before {
	content: "\e628";
}

.pe-7s-right-arrow:before {
	content: "\e699";
}

.pe-7s-paper-plane:before {
	content: "\e629";
}

.pe-7s-delete-user:before {
	content: "\e6a7";
}

.pe-7s-paint:before {
	content: "\e62a";
}

.pe-7s-bottom-arrow:before {
	content: "\e6a8";
}

.pe-7s-notebook:before {
	content: "\e62b";
}

.pe-7s-note:before {
	content: "\e62c";
}

.pe-7s-next:before {
	content: "\e62d";
}

.pe-7s-news-paper:before {
	content: "\e62e";
}

.pe-7s-musiclist:before {
	content: "\e62f";
}

.pe-7s-music:before {
	content: "\e630";
}

.pe-7s-mouse:before {
	content: "\e631";
}

.pe-7s-more:before {
	content: "\e632";
}

.pe-7s-moon:before {
	content: "\e633";
}

.pe-7s-monitor:before {
	content: "\e634";
}

.pe-7s-micro:before {
	content: "\e635";
}

.pe-7s-menu:before {
	content: "\e636";
}

.pe-7s-map:before {
	content: "\e637";
}

.pe-7s-map-marker:before {
	content: "\e638";
}

.pe-7s-mail:before {
	content: "\e639";
}

.pe-7s-mail-open:before {
	content: "\e63a";
}

.pe-7s-mail-open-file:before {
	content: "\e63b";
}

.pe-7s-magnet:before {
	content: "\e63c";
}

.pe-7s-loop:before {
	content: "\e63d";
}

.pe-7s-look:before {
	content: "\e63e";
}

.pe-7s-lock:before {
	content: "\e63f";
}

.pe-7s-lintern:before {
	content: "\e640";
}

.pe-7s-link:before {
	content: "\e641";
}

.pe-7s-like:before {
	content: "\e642";
}

.pe-7s-light:before {
	content: "\e643";
}

.pe-7s-less:before {
	content: "\e644";
}

.pe-7s-keypad:before {
	content: "\e645";
}

.pe-7s-junk:before {
	content: "\e646";
}

.pe-7s-info:before {
	content: "\e647";
}

.pe-7s-home:before {
	content: "\e648";
}

.pe-7s-help2:before {
	content: "\e649";
}

.pe-7s-help1:before {
	content: "\e64a";
}

.pe-7s-graph3:before {
	content: "\e64b";
}

.pe-7s-graph2:before {
	content: "\e64c";
}

.pe-7s-graph1:before {
	content: "\e64d";
}

.pe-7s-graph:before {
	content: "\e64e";
}

.pe-7s-global:before {
	content: "\e64f";
}

.pe-7s-gleam:before {
	content: "\e650";
}

.pe-7s-glasses:before {
	content: "\e651";
}

.pe-7s-gift:before {
	content: "\e652";
}

.pe-7s-folder:before {
	content: "\e653";
}

.pe-7s-flag:before {
	content: "\e654";
}

.pe-7s-filter:before {
	content: "\e655";
}

.pe-7s-file:before {
	content: "\e656";
}

.pe-7s-expand1:before {
	content: "\e657";
}

.pe-7s-exapnd2:before {
	content: "\e658";
}

.pe-7s-edit:before {
	content: "\e659";
}

.pe-7s-drop:before {
	content: "\e65a";
}

.pe-7s-drawer:before {
	content: "\e65b";
}

.pe-7s-download:before {
	content: "\e65c";
}

.pe-7s-display2:before {
	content: "\e65d";
}

.pe-7s-display1:before {
	content: "\e65e";
}

.pe-7s-diskette:before {
	content: "\e65f";
}

.pe-7s-date:before {
	content: "\e660";
}

.pe-7s-cup:before {
	content: "\e661";
}

.pe-7s-culture:before {
	content: "\e662";
}

.pe-7s-crop:before {
	content: "\e663";
}

.pe-7s-credit:before {
	content: "\e664";
}

.pe-7s-copy-file:before {
	content: "\e665";
}

.pe-7s-config:before {
	content: "\e666";
}

.pe-7s-compass:before {
	content: "\e667";
}

.pe-7s-comment:before {
	content: "\e668";
}

.pe-7s-coffee:before {
	content: "\e669";
}

.pe-7s-cloud:before {
	content: "\e66a";
}

.pe-7s-clock:before {
	content: "\e66b";
}

.pe-7s-check:before {
	content: "\e66c";
}

.pe-7s-chat:before {
	content: "\e66d";
}

.pe-7s-cart:before {
	content: "\e66e";
}

.pe-7s-camera:before {
	content: "\e66f";
}

.pe-7s-call:before {
	content: "\e670";
}

.pe-7s-calculator:before {
	content: "\e671";
}

.pe-7s-browser:before {
	content: "\e672";
}

.pe-7s-box2:before {
	content: "\e673";
}

.pe-7s-box1:before {
	content: "\e674";
}

.pe-7s-bookmarks:before {
	content: "\e675";
}

.pe-7s-bicycle:before {
	content: "\e676";
}

.pe-7s-bell:before {
	content: "\e677";
}

.pe-7s-battery:before {
	content: "\e678";
}

.pe-7s-ball:before {
	content: "\e679";
}

.pe-7s-back:before {
	content: "\e67a";
}

.pe-7s-attention:before {
	content: "\e67b";
}

.pe-7s-anchor:before {
	content: "\e67c";
}

.pe-7s-albums:before {
	content: "\e67d";
}

.pe-7s-alarm:before {
	content: "\e67e";
}

.pe-7s-airplay:before {
	content: "\e67f";
}


/*--------------------------------------------------------------
# Typography
--------------------------------------------------------------*/

blockquote> p,
.post-navigation .nav-links a,
.comment-list .comment-author span.says,
.widget_rss ul li .rssSummary,
.widget_text .textwidget,
.siuy-posts-widget .entry-content,
body,
optgroup,
h1,
h2,
h3,
h4 {
	font-family: 'Cardo', Helvetica, Arial, sans-serif;
}

.post.format-chat .entry-content p,
.content-area .site-main article .entry-meta .byline,
.content-area .site-main article .entry-meta .entry-date,
budy:not(.single) .content-area .site-main article .entry-content,
.content-area .site-main article .entry-footer,
.content-area .site-main article .entry-footer> span.readmore> a,
.wp-caption-text,
.comments-area> .comments-title,
.comments-area .comment-reply-title,
.comments-area .no-comments,
.comment-notes,
.logged-in-as a,
.comment-list .comment-author,
.comment-list .comment-meta .comment-metadata time,
.comment-list .comment-meta .comment-metadata .edit-link .comment-edit-link,
.comments-area .comment-list .reply> a,
.comment-list .comment-content,
.widget-title,
.widgettitle,
.siuy-posts-widget .entry-title> a,
.siuy-posts-widget .entry-date,
.siuy-posts-widget .entry-content> a.readmore,
.mc4wp-form-fields input[name="EMAIL"],
.site-footer .widget-areas,
.site-footer .site-info,
.site-footer .site-info a,
.widget_nav_menu ul li,
.widget_rss ul li,
.widget_recent_entries ul li,
.widget_recent_comments ul li,
.widget_meta ul li,
.widget_pages ul li,
.widget_categories ul li,
.widget_archive ul li,
.widget_calendar table,
.menu a,
.c-offcanvas> .siuy-slinky-menu ul> li> a,
.site-header .site-description,
.post-navigation .nav-links a,
.page-links,
.comment-navigation,
.posts-navigation,
select,
textarea,
button,
label,
input,
h5 {
	font-family: 'Lato', Helvetica, Arial, sans-serif;
}

.site-footer h4,
.site-title {
	font-family: 'Playfair Display', Helvetica, Arial, sans-serif;
}

.comments-area> .comments-title,
.comments-area .comment-reply-title,
.comments-area .no-comments,
.comment-notes,
.logged-in-as a:first-of-type,
.siuy-posts-widget .entry-title> a,
table th,
h1,
h2,
h3,
h4,
h5,
h6 {
	color: #000000;
}

body #page .post.format-chat .entry-content>p:nth-child(even) {
	color: #ffffff;
}

input,
select,
textarea,
.comment-navigation a,
.posts-navigation a,
.site-footer .widgettitle,
.site-footer .widget-title,
.content-area .site-main article .entry-content,
.comment-list .comment-content,
.widget_rss ul li .rssSummary,
.widget_text .textwidget,
.siuy-posts-widget .entry-content,
.mc4wp-form-fields input[name="EMAIL"],
.site-footer .widget-areas .mc4wp-form-fields input,
.site-footer .widget-areas .mc4wp-form-fields button,
.wp-caption-text,
.reply> a,
.comment-list .edit-link a,
.content-area .site-main article .entry-footer,
body,
optgroup {
	color: #595959;
}

button,
input[type="button"],
input[type="reset"],
input[type="submit"],
.main-navigation .nav-menu .children li> a,
.main-navigation .nav-menu .sub-menu li> a,
.c-offcanvas> .siuy-slinky-menu ul> li.current-menu-parent> a,
.c-offcanvas> .siuy-slinky-menu ul> li.current-menu-item> a,
.c-offcanvas> .siuy-slinky-menu ul> li> a:focus,
.c-offcanvas> .siuy-slinky-menu ul> li> a:hover {
	color: #63574C;
}

.post-navigation .nav-links a,
.content-area .site-main article .entry-footer> span.readmore> a,
.siuy-posts-widget .entry-content> a.readmore,
.widget_calendar tbody td>a:not(#today),
.site-description,
.site-title> a {
	color: #ff5252;
}

.single .entry-meta .byline,
.site-footer,
.site-footer a {
	color: #878787;
}

.logged-in-as a,
#cancel-comment-reply-link,
.mc4wp-form-fields input[name="EMAIL"],
.comment-list .comment-meta .comment-metadata time,
.main-navigation .nav-menu li> a,
.siuy-posts-widget .entry-date {
	color: #d4d4d4;
}

.main-navigation .nav-menu> li:hover> a,
.main-navigation .nav-menu> li> a:hover,
.main-navigation .nav-menu> li.current-menu-parent> a,
.main-navigation .nav-menu> li.current-menu-item> a {
	color: #454545;
}

blockquote> p,
.content-area .site-main article .entry-content {
	line-height: 1.8;
}

input,
input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"],
select,
textarea,
.content-area .site-main article .entry-footer,
.wp-caption-text,
.post-navigation .nav-links a,
.comment-list .comment-meta .comment-metadata .edit-link .comment-edit-link,
.comments-area .comment-list .reply> a,
.comment-list .comment-content,
.widget_rss ul li .rssSummary,
.widget_text .textwidget,
.siuy-posts-widget .entry-content,
body,
optgroup {
	line-height: 24px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	line-height: 1.33;
}

.site-description,
.site-title,
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
	line-height: normal;
}

.wp-caption-text,
.comment-list .comment-content,
.comments-area .comment-list .reply> a,
.comment-list .comment-meta .comment-metadata .edit-link .comment-edit-link,
.comment-list .comment-meta .comment-metadata time,
.comment-list .comment-author span.says,
.comment-list .comment-author b.fn,
.comment-list .comment-author a,
.content-area .site-main article .entry-footer {
	letter-spacing: 0;
}

body:not(.single) .content-area .site-main article .entry-content,
.mc4wp-form-fields input[name="EMAIL"],
.site-footer .site-info,
.site-footer .site-info a,
.siuy-posts-widget .entry-content> a.readmore {
	letter-spacing: 1.11px;
}

.comment-navigation,
.posts-navigation,
.post-navigation .nav-links a,
.content-area .site-main article .entry-meta .entry-date,
.siuy-posts-widget .entry-date,
.siuy-posts-widget .entry-title> a,
.content-area .site-main article .entry-footer> span.readmore> a,
.content-area .site-main article .entry-meta .byline {
	letter-spacing: 2.33px;
}

.siuy-posts-widget .entry-content> a.readmore,
.siuy-posts-widget .entry-date {
	font-size: 10px;
	font-size: 0.625rem;
}

button,
input[type="button"],
input[type="reset"],
input[type="submit"],
.site-header .site-description,
.content-area .site-main article .entry-meta .byline,
.content-area .site-main article .entry-meta .entry-date,
.content-area .site-main article .entry-footer,
.wp-caption-text,
.comment-list .comment-meta .comment-metadata .edit-link .comment-edit-link,
.site-footer .site-info,
.site-footer .site-info a,
.comment-navigation,
.posts-navigation,
.main-navigation .nav-menu .children li> a,
.main-navigation .nav-menu .sub-menu li> a {
	font-size: 12px;
	font-size: 0.75rem;
}

.post-navigation .nav-links a,
.content-area .site-main article .entry-footer> span.readmore> a,
.comments-area .comment-list .reply> a,
.main-navigation .nav-menu li> a {
	font-size: 13px;
	font-size: 0.812rem;
}

.comment-list .comment-meta .comment-metadata time,
.comment-list .comment-content,
.widget-area .siuy-posts-widget .entry-title,
.widget_rss ul li .rssSummary,
.widget_text .textwidget,
.siuy-posts-widget .entry-content,
.mc4wp-form-fields input[name="EMAIL"],
.site-footer .widget-areas,
.widget_nav_menu ul li,
.widget_rss ul li,
.widget_recent_entries ul li,
.widget_recent_comments ul li,
.widget_meta ul li,
.widget_pages ul li,
.widget_categories ul li,
.widget_archive ul li,
.comments-area label:focus,
.screen-reader-text:focus,
.page-links,
input,
select,
label,
textarea,
h6 {
	font-size: 14px;
	font-size: 0.875rem;
}

kbd,
tt,
var,
pre {
	font-size: 15px;
	font-size: 0.9375rem;
}

table td,
.comments-area> .comments-title,
.comments-area .comment-reply-title,
body,
optgroup {
	font-size: 16px;
	font-size: 1rem;
}

.mc4wp-form-fields button,
table th,
.widgettitle,
.widget-title,
.c-offcanvas> .siuy-slinky-menu ul> li> a,
h5 {
	font-size: 18px;
	font-size: 1.125rem;
}

blockquote cite,
.content-area .site-main article .entry-content {
	font-size: 20px;
	font-size: 1.25rem;
}

h4 {
	font-size: 24px;
	font-size: 1.5rem;
}

.site-title {
	font-size: 30px;
	font-size: 1.87rem;
}

blockquote,
body:not(.single) .content-area .post .entry-title,
h3 {
	font-size: 36px;
	font-size: 2.25rem;
}

.single .content-area .post .entry-title,
h2 {
	font-size: 48px;
	font-size: 3rem;
}

h1 {
	font-size: 64px;
	font-size: 4rem;
}

body:(.single) .post .entry-header .entry-title,
.main-navigation .nav-menu .children li> a,
.main-navigation .nav-menu .sub-menu li> a,
.wp-caption-text,
.post-navigation .nav-links a,
.comments-area> .comments-title,
.comments-area .comment-reply-title,
.comments-area .no-comments,
.comment-notes,
.logged-in-as a,
.comment-list .comment-author span.says,
.comment-list .comment-meta .comment-metadata .edit-link .comment-edit-link,
.comments-area .comment-list .reply> a,
.comment-list .comment-content,
.widget_rss ul li .rssSummary,
.widget_text .textwidget,
.siuy-posts-widget .entry-content,
.site-footer .widget-areas,
.site-footer .site-info,
.site-footer .site-info a,
.site-header .site-description,
.comment-list .comment-meta .comment-metadata time,
.content-area .site-main article .entry-footer,
.content-area .site-main article .entry-content {
	font-weight: 400;
}

input,
.slinky-menu a span,
.widgettitle,
.widget-title,
.siuy-posts-widget .entry-date {
	font-weight: 500;
}

.post-navigation .nav-next:after,
.post-navigation .nav-previous:after,
.post-navigation .nav-links a,
.site-title,
.content-area .site-main article .entry-meta .byline,
.content-area .site-main article .entry-meta .entry-date,
.siuy-posts-widget .entry-date,
.siuy-posts-widget .entry-title> a,
.site-footer .widgettitle,
.site-footer .widget-title,
.content-area .site-main article .entry-footer> span.readmore> a,
.siuy-posts-widget .entry-content> a.readmore,
.comment-navigation,
.posts-navigation,
h1,
h5,
h6 {
	font-weight: 600;
}

.mc4wp-form-fields input[name="EMAIL"],
select {
	font-weight: bold;
}

.comment-navigation,
.posts-navigation,
.post-navigation .nav-links a,
.main-navigation .nav-menu li> a,
.content-area .site-main article .entry-meta .byline,
.content-area .site-main article .entry-meta .entry-date,
.content-area .site-main article .entry-footer> span.readmore> a,
.comments-area> .comments-title,
.comments-area .comment-reply-title,
.comments-area .no-comments,
.comment-notes,
.logged-in-as a,
.siuy-posts-widget .entry-title> a,
.siuy-posts-widget .entry-date,
.siuy-posts-widget .entry-content> a.readmore,
.mc4wp-form-fields input[name="EMAIL"] {
	text-transform: uppercase;
}

.comment-list .comment-author span.says,
dfn,
cite,
em,
i,
address,
blockquote {
	font-style: italic;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	clear: both;
	word-wrap: break-word;
}

p {
	margin-bottom: 1.9em;
}

blockquote {
	color: #2f2f2f;
}

address {
	margin: 0 0 1.5em;
}

pre {
	background: #eee;
	font-family: "Courier 10 Pitch", Courier, monospace;
	line-height: 1.6;
	margin-bottom: 1.6em;
	max-width: 100%;
	overflow: auto;
	padding: 1.6em;
	white-space: pre-wrap;
}

code,
kbd,
tt,
var {
	font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
}

abbr,
acronym {
	border-bottom: 1px dotted #666;
	cursor: help;
}

mark,
ins {
	background: #fff9c0;
	text-decoration: none;
}

big {
	font-size: 125%;
}

.main-navigation .nav-menu> li.current-menu-parent> a,
.main-navigation .nav-menu> li.current-menu-item> a {
	font-weight: 900;
	letter-spacing: 1.9px;
}

.main-navigation .nav-menu .children li> a,
.main-navigation .nav-menu .sub-menu li> a {
	letter-spacing: 1.71px;
	line-height: 30px;
	text-transform: capitalize;
}

.entry-meta .entry-date {
	color: #87878752;
}

body #page .content-area article .entry-title> a,
body #page .content-area article .entry-meta .byline a,
.entry-footer a {
	color: inherit;
}

.comments-area> .comments-title,
.comments-area .comment-reply-title {
	letter-spacing: 1.78px;
}

.comments-area .no-comments,
.comment-notes,
.logged-in-as a {
	font-size: 70%;
	letter-spacing: 1.78px;
}

.comment-list .comment-author span.says {
	color: #59595970;
}

.widgettitle,
.widget-title {
	color: #2F2F2F;
}

.widget_calendar tbody #today {
	color: #FFFFFF;
}

.site-footer .site-info,
.site-footer .site-info a {
	color: #A89B8E;
}

.widget_nav_menu ul li,
.widget_rss ul li,
.widget_recent_entries ul li,
.widget_recent_comments ul li,
.widget_meta ul li,
.widget_pages ul li,
.widget_categories ul li,
.widget_archive ul li {
	letter-spacing: 0.0714286em;
	line-height: 34px;
}

select {
	letter-spacing: 0.0714286em;
	line-height: 2.3;
}

.widget_calendar tfoot #next {
	text-align: right;
}

@media (max-width: 63em) and (min-width: 50.5em) {
	h1 {
		font-size: 56px;
		font-size: 3.5rem;
	}
	.single .post .entry-header .entry-title,
	h2 {
		font-size: 40px;
		font-size: 2.5rem;
	}
	blockquote,
	body:not(.single) .post .entry-header .entry-title,
	h3 {
		font-size: 29px;
		font-size: 1.812rem;
	}
	.site-title {
		font-size: 28px;
		font-size: 1.75rem;
	}
	h4 {
		font-size: 22px;
		font-size: 1.375rem;
	}
	blockquote cite,
	.content-area .site-main article .entry-content {
		font-size: 18px;
		font-size: 1.125rem;
	}
	.mc4wp-form-fields button,
	table th,
	.widgettitle,
	.widget-title,
	.c-offcanvas> .siuy-slinky-menu ul> li> a,
	h5 {
		font-size: 17px;
		font-size: 1.065rem;
	}
	.post.format-chat .entry-content>p,
	table td,
	.comments-area> .comments-title,
	.comments-area .comment-reply-title,
	body,
	optgroup {
		font-size: 14.5px;
		font-size: 0.910rem;
	}
	kbd,
	tt,
	var,
	pre {
		font-size: 14px;
		font-size: 0.875rem;
	}
	.comment-list .comment-meta .comment-metadata time,
	.comment-list .comment-content,
	.siuy-posts-widget .entry-title> a,
	.widget_rss ul li .rssSummary,
	.widget_text .textwidget,
	.siuy-posts-widget .entry-content,
	.mc4wp-form-fields input[name="EMAIL"],
	.site-footer .widget-areas,
	.widget_nav_menu ul li,
	.widget_rss ul li,
	.widget_recent_entries ul li,
	.widget_recent_comments ul li,
	.widget_meta ul li,
	.widget_pages ul li,
	.widget_categories ul li,
	.widget_archive ul li,
	.comments-area label:focus,
	.screen-reader-text:focus,
	input,
	select,
	input[type="text"],
	input[type="email"],
	input[type="url"],
	input[type="password"],
	input[type="search"],
	input[type="number"],
	input[type="tel"],
	input[type="range"],
	input[type="date"],
	input[type="month"],
	input[type="week"],
	input[type="time"],
	input[type="datetime"],
	input[type="datetime-local"],
	input[type="color"],
	textarea,
	h6 {
		font-size: 13px;
		font-size: 0.812rem;
	}
	button,
	input[type="button"],
	input[type="reset"],
	input[type="submit"],
	.site-header .site-description,
	.content-area .site-main article .entry-meta .byline,
	.content-area .site-main article .entry-meta .entry-date,
	.content-area .site-main article .entry-footer,
	.wp-caption-text,
	.comment-list .comment-meta .comment-metadata .edit-link .comment-edit-link,
	.site-footer .site-info,
	.site-footer .site-info a,
	.main-navigation .nav-menu .children li> a,
	.main-navigation .nav-menu .sub-menu li> a {
		font-size: 11px;
		font-size: 0.688rem;
	}
}

@media (max-width: 38.5em) {
	h1 {
		font-size: 40px;
		font-size: 2.5rem;
	}
	h2 {
		font-size: 36px;
		font-size: 2.25rem;
	}
	.single .post .entry-header .entry-title {
		font-size: 32px;
		font-size: 2rem;
	}
	body:not(.single) .post .entry-header .entry-title,
	h3 {
		font-size: 29px;
		font-size: 1.812rem;
	}
	.site-title {
		font-size: 28px;
		font-size: 1.75rem;
	}
	blockquote,
	h4 {
		font-size: 22px;
		font-size: 1.375rem;
	}
	blockquote cite,
	.content-area .site-main article .entry-content {
		font-size: 18px;
		font-size: 1.125rem;
	}
	.mc4wp-form-fields button,
	table th,
	.widgettitle,
	.widget-title,
	.c-offcanvas> .siuy-slinky-menu ul> li> a,
	h5 {
		font-size: 17px;
		font-size: 1.065rem;
	}
	table td,
	.comments-area> .comments-title,
	.comments-area .comment-reply-title,
	body,
	optgroup {
		font-size: 14.5px;
		font-size: 0.910rem;
	}
	.post.format-chat .entry-content>p,
	kbd,
	tt,
	var,
	pre {
		font-size: 14px;
		font-size: 0.875rem;
	}
	.comment-list .comment-meta .comment-metadata time,
	.comment-list .comment-content,
	.siuy-posts-widget .entry-title> a,
	.widget_rss ul li .rssSummary,
	.widget_text .textwidget,
	.siuy-posts-widget .entry-content,
	.mc4wp-form-fields input[name="EMAIL"],
	.site-footer .widget-areas,
	.widget_nav_menu ul li,
	.widget_rss ul li,
	.widget_recent_entries ul li,
	.widget_recent_comments ul li,
	.widget_meta ul li,
	.widget_pages ul li,
	.widget_categories ul li,
	.widget_archive ul li,
	.comments-area label:focus,
	.screen-reader-text:focus,
	input,
	select,
	input[type="text"],
	input[type="email"],
	input[type="url"],
	input[type="password"],
	input[type="search"],
	input[type="number"],
	input[type="tel"],
	input[type="range"],
	input[type="date"],
	input[type="month"],
	input[type="week"],
	input[type="time"],
	input[type="datetime"],
	input[type="datetime-local"],
	input[type="color"],
	textarea,
	h6 {
		font-size: 13px;
		font-size: 0.812rem;
	}
	button,
	input[type="button"],
	input[type="reset"],
	input[type="submit"],
	.site-header .site-description,
	.content-area .site-main article .entry-meta .byline,
	.content-area .site-main article .entry-meta .entry-date,
	.content-area .site-main article .entry-footer,
	.wp-caption-text,
	.comment-list .comment-meta .comment-metadata .edit-link .comment-edit-link,
	.site-footer .site-info,
	.site-footer .site-info a,
	.main-navigation .nav-menu .children li> a,
	.main-navigation .nav-menu .sub-menu li> a {
		font-size: 11px;
		font-size: 0.688rem;
	}
}


/*--------------------------------------------------------------
# Elements
--------------------------------------------------------------*/

html {
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}

*,
*:before,
*:after {
	-webkit-box-sizing: inherit;
	box-sizing: inherit;
	/* Inherit box-sizing to make it easier to change the property for components that leverage other behavior; see https://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
}

body {
	background: #fff;
	/* Fallback for when there is no custom background color defined. */
}

hr {
	background-color: #ccc;
	border: 0;
	height: 1px;
	margin-bottom: 1.5em;
}

ul,
ol {
	margin: 0 0 1em 0;
}

ul {
	padding-left: 0.85em;
}

ol {
	padding-left: 1.2em;
}

ul {
	list-style: disc;
}

ol {
	list-style: decimal;
}

li> ul,
li> ol {
	margin-bottom: 0;
	margin-left: 0.1em;
}

dt {
	font-weight: bold;
}

dd {
	margin: 0 1.5em 1.5em;
}

img {
	height: auto;
	max-width: 100%;
	/* Make sure images are scaled correctly. */
	/* Adhere to container width. */
}

figure {
	margin: 1em 0;
	/* Extra wide images within figure tags don't overflow the content area. */
}

table {
	border: solid 2px #ebebeb;
	margin: 0 0 1.5em;
	width: 100%;
}

table tfoot tr,
table thead tr {
	border-bottom: solid 2px #ebebeb;
}

table tbody tr {
	border-bottom: solid 1px #ebebeb;
}

tbody>tr:nth-of-type(odd) {
	background-color: #ebebeb70;
}

table tr td,
table tr th {
	border-right: solid 1px #ebebeb;
	padding: 12px;
}

blockquote {
	border-color: #edeae7;
	border-style: solid;
	border-width: 1px 0 1px 0;
	padding-right: 0.9em;
	position: relative;
}

.single blockquote:first-child,
body:not(.single-post) blockquote {
	margin: 1em 0 1.2em;
}

.single blockquote {
	margin: 2em 0 1.2em;
}

blockquote> p {
	margin-bottom: 0.95em;
	margin-top: 0.35em;
}

cite:before {
	content: "- ";
}

blockquote:after {
	bottom: 0.36em;
	color: #edeae7;
	content: "”";
	font-size: 95px;
	font-style: normal;
	line-height: 0;
	position: absolute;
	right: 0;
}

code {
	background-color: #f9f2f4;
	border-radius: 4px;
	color: #c7254e;
	font-size: 90%;
	padding: 2px 4px;
}

@media (max-width: 65em) and (min-width: 50em) {
	table tr td,
	table tr th {
		padding: 0;
	}
}

@media (max-width: 38.5em) {
	blockquote:after {
		bottom: 0;
	}
}


/*--------------------------------------------------------------
# Forms
--------------------------------------------------------------*/

button:not(.siuy-menu-toggle):not(.customize-partial-edit-shortcut-button),
input[type="button"],
input[type="reset"],
input[type="submit"] {
	-o-transition: all .23s ease;
	-webkit-transition: all .23s ease;
	border: none;
	outline: none;
	transition: all .23s ease;
}

form button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
	background: -webkit-gradient(linear, right top, left top, color-stop(50%, #EDEAE7), color-stop(50%, #d6cfc7));
	background: -webkit-linear-gradient(right, #EDEAE7 50%, #d6cfc7 50%);
	background: -o-linear-gradient(right, #EDEAE7 50%, #d6cfc7 50%);
	background: linear-gradient(to left, #EDEAE7 50%, #d6cfc7 50%);
	background-position: right bottom;
	background-size: 200% 100%;
	height: 4.2em;
	min-width: 8.4em;
	padding: 5px 30px;
}

button:active,
button:focus,
input[type="button"]:active,
input[type="button"]:focus,
input[type="reset"]:active,
input[type="reset"]:focus,
input[type="submit"]:active,
input[type="submit"]:focus,
button:hover,
input[type="button"]:hover,
input[type="reset"]:hover,
input[type="submit"]:hover {
	background-position: left bottom;
}

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
input[type="number"],
input[type="tel"],
input[type="range"],
input[type="date"],
input[type="month"],
input[type="week"],
input[type="time"],
input[type="datetime"],
input[type="datetime-local"],
input[type="color"] {
	-moz-appearance: none;
	-o-transition: all 0.3s ease;
	-webkit-appearance: none;
	-webkit-transition: all 0.3s ease;
	appearance: none;
	border: 1px solid #EBEBEB;
	max-width: 100%;
	padding: 5px 18px;
	transition: all 0.3s ease;
}

textarea {
	-o-transition: all 0.3s ease;
	-webkit-transition: all 0.3s ease;
	border: 1px solid #EBEBEB;
	padding: 25px 18px;
	resize: vertical;
	transition: all 0.3s ease;
	width: 100%;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
input[type="search"]:focus,
input[type="number"]:focus,
input[type="tel"]:focus,
input[type="range"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="week"]:focus,
input[type="time"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="color"]:focus,
textarea:focus {
	border-color: #1D1F24;
	color: #111;
	outline: none;
}

select {
	-moz-appearance: none;
	-webkit-appearance: none;
	appearance: none;
	background-color: transparent;
	background-image: -webkit-linear-gradient(45deg, transparent 50%, #979797 50%), -webkit-linear-gradient(315deg, #979797 50%, transparent 50%), -webkit-linear-gradient(left, #ffffff00, #ffffff00);
	background-image: -o-linear-gradient(45deg, transparent 50%, #979797 50%), -o-linear-gradient(315deg, #979797 50%, transparent 50%), -o-linear-gradient(left, #ffffff00, #ffffff00);
	background-image: linear-gradient(45deg, transparent 50%, #979797 50%), linear-gradient(135deg, #979797 50%, transparent 50%), linear-gradient(to right, #ffffff00, #ffffff00);
	background-position: calc(99.8% - 3.5px) calc(1em+ 2px), calc(99.9% - 0px) calc(1em+ 2px), 100% 0;
	background-repeat: no-repeat;
	background-size: 5px 5px, 5px 5px, 2.5em 2.5em;
	border-bottom-color: #979797;
	border-bottom-style: solid;
	border-radius: 0;
	border-width: 0 0 1px 0;
	outline: none;
	padding: 0 0 15px;
	width: 100%;
}

input[type="checkbox"] {
	-moz-appearance: none !important;
	-o-transition: all 0.3s ease;
	-webkit-appearance: none !important;
	-webkit-transition: all 0.3s ease;
	appearance: none !important;
	border: solid 1px #a89b8e;
	cursor: pointer;
	height: 20px;
	margin-right: 3px;
	margin-top: -4px;
	outline: none;
	position: relative;
	transition: all 0.3s ease;
	vertical-align: middle;
	width: 20px !important;
}

input[type="checkbox"]:checked {
	background-color: #a89b8e;
}

input[type="checkbox"]:checked::before {
	-ms-transform: translateX(20%);
	-webkit-transform: translateX(20%);
	color: #fff;
	content: '\2714';
	font-size: 15px;
	line-height: 1.33;
	position: absolute;
	transform: translateX(20%);
	width: 100%;
}

input[type="checkbox"]+label {
	-webkit-clip-path: inherit;
	clip-path: inherit;
	cursor: pointer;
	position: relative !important;
}


/*--------------------------------------------------------------
## Search Form
--------------------------------------------------------------*/

.search-form {
	-ms-flex-align: end;
	-webkit-box-align: end;
	align-items: flex-end;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	padding-bottom: 8px;
}

.search-form label {
	-ms-flex-positive: 1;
	-webkit-box-flex: 1;
	flex-grow: 1;
}

.search-form label input[type="search"] {
	height: 3.6em;
	width: 100%;
}

.search-form label input[type="search"]:focus {
	background-color: #f9f9f9;
	border-color: #f0edea;
}

.search-form input[type="submit"] {
	padding: 0.9em 1em;
}


/*--------------------------------------------------------------
## Post password form
--------------------------------------------------------------*/

.post-password-form input[type="password"] {
	height: 3.65em;
}


/*--------------------------------------------------------------
# Links
--------------------------------------------------------------*/

a {
	-moz-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
	color: #878787;
	position: relative;
	text-decoration: none;
	transition: all 0.5s ease;
}

.comment-list .comment-meta .comment-metadata time,
.entry-meta a .entry-date {
	-o-transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
	transition: all 0.5s ease;
}

.logged-in-as a:hover,
.reply a:hover,
.comment-navigation a:hover,
.posts-navigation a:hover,
.entry-meta a:hover .entry-date,
.content-area .site-main article .entry-meta .byline a:hover,
.site-main article .entry-footer .comments-link a:hover,
.site-main article .entry-footer .tags-links a:hover,
.site-main article .entry-footer .cat-links a:hover,
.edit-link a:hover,
.comment-list .comment-meta .comment-metadata time:hover,
.comment-list .edit-link a:hover,
.comment-list .comment-author a,
#cancel-comment-reply-link:hover,
.comment-content a,
.entry-content a {
	color: #ff5252;
}

.logged-in-as a:hover:before,
.comment-content a:hover:after,
#cancel-comment-reply-link:hover:before,
.reply a:hover:after,
.comment-list .comment-meta .comment-metadata time:hover:before,
.comment-navigation a:hover:before,
.posts-navigation a:hover:before,
.entry-meta a:hover:before,
.entry-footer .comments-link a:hover:before,
.entry-footer .tags-links a:hover:before,
.entry-footer .cat-links a:hover:before,
.edit-link a:hover:before,
.comment-list .comment-author a:hover:before,
.entry-content a:hover:after {
	max-width: 100%;
	width: 100%;
}

.logged-in-as a:before,
.comment-content a:after,
#cancel-comment-reply-link:before,
.reply a:after,
.comment-list .comment-meta .comment-metadata time:before,
.comment-navigation a:before,
.posts-navigation a:before,
.entry-meta a:before,
.entry-footer .comments-link a:before,
.entry-footer .tags-links a:before,
.entry-footer .cat-links a:before,
.edit-link a:before,
.comment-list .comment-author a:before,
.entry-content a:after {
	-moz-transition: max-width 0.5s;
	-o-transition: max-width 0.5s;
	-webkit-transition: max-width 0.5s;
	border-bottom: 1px solid #ff5252;
	bottom: 0;
	color: #ff5252;
	content: attr(data-hover);
	left: 0;
	max-width: 0;
	overflow: hidden;
	position: absolute;
	transition: max-width 0.5s;
	z-index: 0;
}

.comment-content a>img,
.entry-content a>img {
	margin-bottom: -8px;
	z-index: 2;
}

.comment-navigation .nav-previous a:before,
.posts-navigation .nav-previous a:before {
	left: auto;
	right: 0;
}

a:visited {
	text-decoration: underline;
}

a:focus {
	outline: 0;
}


/*--------------------------------------------------------------
# Navigation
--------------------------------------------------------------*/

.site-header {
	display: grid;
	grid-template-columns: 0 minmax(auto, 300px) 1fr 0;
	margin: 0 auto;
	max-width: 1230px;
	min-height: 76px;
	padding: 0 15px;
}

.site-header .site-description {
	margin: 19px 0 0 10px;
}

.site-header .site-branding {
	-ms-flex-align: center;
	-webkit-box-align: center;
	align-items: center;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}

#site-navigation .customize-partial-edit-shortcut {
	right: 0;
}

.site-title {
	margin: 0;
}

@media (max-width: 21em) {
	.site-header .site-branding {
		-ms-flex-align: left;
		-ms-flex-direction: column;
		-ms-flex-pack: center;
		-webkit-box-align: left;
		-webkit-box-direction: normal;
		-webkit-box-orient: vertical;
		-webkit-box-pack: center;
		align-items: left;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		flex-direction: column;
		justify-content: center;
	}
	.site-header .site-title {
		margin-bottom: 0;
	}
	.site-header .site-description {
		margin: 0;
	}
}


/*--------------------------------------------------------------
## Menus
--------------------------------------------------------------*/

#site-navigation> #primary-menu,
#site-navigation .menu-main-menu-container {
	-ms-flex-pack: end;
	-webkit-box-pack: end;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: flex-end;
}

.main-navigation ul {
	display: none;
	float: right;
	list-style: none;
	margin: 0;
	padding-left: 0;
}

.main-navigation ul ul {
	-o-transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
	-webkit-transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
	background-color: #edeae7;
	border: 1px solid #edeae7;
	opacity: 0;
	padding: 9px 0 13px;
	position: absolute;
	transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
	visibility: hidden;
	width: 179px;
	z-index: 10;
}

.main-navigation ul.nav-menu>li> ul {
	-ms-transform: translateY(-2em);
	-webkit-transform: translateY(-2em);
	right: 0;
	top: 100%;
	transform: translateY(-2em);
}

.main-navigation ul.children>li> ul,
.main-navigation ul.sub-menu>li> ul {
	-ms-transform: translateX(-2em);
	-webkit-transform: translateX(-2em);
	left: 100%;
	top: -16px;
	transform: translateX(-2em);
}

.main-navigation ul ul>li {
	padding: 0 18px;
}

.main-navigation .nav-menu li> a {
	-o-transition: color 170ms ease-in-out, background-color 170ms ease-in-out;
	-webkit-transition: color 170ms ease-in-out, background-color 170ms ease-in-out;
	background-color: transparent;
	letter-spacing: 1.7px;
	transition: color 170ms ease-in-out, background-color 170ms ease-in-out;
}

.main-navigation .nav-menu>li> a {
	-ms-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	top: 50%;
	transform: translateY(-50%);
}

.main-navigation ul ul li {
	display: block;
	width: 100%;
}

.main-navigation ul>li:hover> ul,
.main-navigation ul>li:focus> ul {
	-o-transition-delay: 0s, 0s, 0.3s;
	-webkit-transition-delay: 0s, 0s, 0.3s;
	opacity: 1;
	transition-delay: 0s, 0s, 0.3s;
	visibility: visible;
	z-index: 10;
	/* shows sub-menu */
}

.main-navigation ul.nav-menu>li:hover> ul,
.main-navigation ul.nav-menu>li:focus> ul {
	-ms-transform: translateY(7px);
	-webkit-transform: translateY(7px);
	margin-right: -10px;
	right: 0;
	transform: translateY(7px);
}

.main-navigation ul.children>li:hover> ul,
.main-navigation ul.children>li:focus> ul,
.main-navigation ul.sub-menu>li:hover> ul,
.main-navigation ul.sub-menu>li:focus> ul {
	-ms-transform: translateX(0%);
	-webkit-transform: translateX(0%);
	left: 100%;
	margin-left: 13px;
	top: -16px;
	transform: translateX(0%);
}

.main-navigation li {
	float: left;
	margin-top: 5px;
	position: relative;
}

.main-navigation a {
	display: block;
	position: relative;
	text-decoration: none;
}

.main-navigation .nav-menu> li.page_item_has_children> a:after,
.main-navigation ul ul> li.page_item_has_children> a:after,
.main-navigation .nav-menu> li.menu-item-has-children> a:after,
.main-navigation ul ul> li.menu-item-has-children> a:after {
	-ms-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	border-left: 4px solid transparent;
	border-right: 4px solid transparent;
	border-top: 4px dashed;
	border-top: 4px solid\9;
	content: '';
	display: inline-block;
	height: 0;
	margin-left: 2px;
	position: absolute;
	right: -15px;
	top: 50%;
	transform: translateY(-50%);
	vertical-align: middle;
	width: 0;
}

.main-navigation ul ul> li.page_item_has_children> a:after,
.main-navigation ul ul> li.menu-item-has-children> a:after {
	-ms-transform: rotate(-90deg) translateY(-40%);
	-webkit-transform: rotate(-90deg) translateY(-40%);
	right: 0;
	top: 40%;
	transform: rotate(-90deg) translateY(-40%);
}


/*--------------------------------------------------------------
## Small menu
--------------------------------------------------------------*/

.siuy-menu-toggle {
	padding: 0;
}

.siuy-menu-toggle,
.main-navigation.toggled ul {
	background: transparent !important;
	border: none;
	display: block;
	outline: none;
	padding-right: 0;
}

.hamburger-nav-icon {
	display: grid;
	float: right;
	grid-gap: 1.5px;
	margin: 0.188em 0 0 0.438em;
	width: 2.228em;
}

.hamburger-nav-icon:before {
	background: transparent;
	content: "";
	display: block;
	height: 0.875em;
	position: absolute;
	width: 1.125em;
}

.siuy-menu-toggle .icon-bar {
	-moz-border-radius: 3px;
	-o-transition: all .3s ease-in-out;
	-webkit-border-radius: 3px;
	-webkit-transition: all .3s ease-in-out;
	background-color: #D4D4D4;
	border-radius: 3px;
	display: block;
	height: 0.265em;
	transition: all .3s ease-in-out;
	width: 100%;
}

.siuy-menu-toggle .icon-bar:nth-child(3) {
	width: 1.58em;
}

.siuy-menu-toggle.is-active .icon-bar:nth-child(3),
.siuy-menu-toggle:hover .icon-bar:nth-child(3) {
	width: 100%;
}

.hamburger-nav-icon> .icon-bar+ .icon-bar {
	margin-top: 0.188em;
}

@media screen and (min-width: 63.5em) {
	.main-navigation {
		clear: both;
		display: grid;
		height: 100%;
		width: 100%;
	}
	#site-navigation .siuy-menu-toggle {
		display: none;
	}
	.main-navigation ul {
		display: block;
	}
	.main-navigation .nav-menu> li {
		height: 100%;
		margin-left: 30px;
	}
	.main-navigation .nav-menu> li.page_item_has_children,
	.main-navigation .nav-menu> li.menu-item-has-children {
		padding-right: 25.15px;
	}
	.main-navigation .nav-menu> li:last-child {
		margin-right: 0;
	}
	#site-navigation ul.nav-menu>li>ul.children:before,
	#site-navigation ul.nav-menu>li>ul.sub-menu:before {
		-ms-transform: rotate(-315deg);
		-webkit-transform: rotate(-315deg);
		border-width: 1px 0 0 1px;
		right: 47px;
		top: -9px;
		transform: rotate(-315deg);
	}
	#site-navigation ul.nav-menu>li>ul.children:before,
	#site-navigation ul.nav-menu>li>ul.sub-menu:before,
	.main-navigation ul.children>li> ul:before,
	.main-navigation ul.sub-menu>li> ul:before {
		background-color: #edeae7;
		border-color: #edeae7;
		border-style: solid;
		content: "";
		height: 16px;
		position: absolute;
		width: 16px;
	}
	.main-navigation ul.children>li:hover> ul:before,
	.main-navigation ul.children>li.focus> ul:before,
	.main-navigation ul.sub-menu>li:hover> ul:before,
	.main-navigation ul.sub-menu>li.focus> ul:before {
		-ms-transform: rotate(-45deg);
		-webkit-transform: rotate(-45deg);
		border-width: 1px 0 0 1px;
		left: -9px;
		top: 21px;
		transform: rotate(-45deg);
	}
}

@media screen and (max-width: 63.5em) {
	.main-navigation {
		-ms-flex-pack: end;
		-webkit-box-pack: end;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		justify-content: flex-end;
	}
}


/*--------------------------------------------------------------
## Next and previous navigation
--------------------------------------------------------------*/

.site-main .comment-navigation,
.site-main .posts-navigation,
.site-main .post-navigation {
	margin: 0 0 1.5em;
	overflow: hidden;
}

.post-navigation {
	padding-bottom: 40px;
}

.comment-navigation .nav-previous,
.posts-navigation .nav-previous {
	float: left;
	width: 50%;
}

.comment-navigation .nav-next,
.posts-navigation .nav-next {
	float: right;
	text-align: right;
	width: 50%;
}

.post-navigation .nav-links {
	display: grid;
	grid-gap: 30px;
	grid-template-columns: 1fr 1fr;
}

.post-navigation .nav-next:only-of-type {
	grid-column: 2/-1;
}

.post-navigation .nav-next,
.post-navigation .nav-previous {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	overflow: hidden;
	position: relative;
}

.post-navigation .nav-next a,
.post-navigation .nav-previous a {
	-o-transition: .01s .23s ease-out all;
	-webkit-transition: .01s .23s ease-out all;
	display: inline-block;
	height: 100%;
	overflow: hidden;
	padding: 14px;
	position: relative;
	transition: .01s .23s ease-out all;
	width: 100%;
	z-index: 2;
}

.post-navigation .nav-next a {
	text-align: right;
}

.post-navigation .nav-next a:before,
.post-navigation .nav-previous a:before {
	-o-transition: .3s ease-in all;
	-webkit-transition: .3s ease-in all;
	background: #edeae7;
	border: none;
	content: '';
	height: 100%;
	max-width: 49%;
	position: absolute;
	top: 0;
	transition: .3s ease-in all;
	width: 49%;
	z-index: -1;
}

.post-navigation .nav-next a:after,
.post-navigation .nav-next:after,
.post-navigation .nav-previous:after,
.post-navigation .nav-previous a:after {
	-ms-transform: translate3D(0, -50%, 0);
	-webkit-transform: translate3D(0, -50%, 0);
	display: inline-block;
	font-size: 20px;
	position: absolute;
	top: 50%;
	transform: translate3D(0, -50%, 0);
}

.comment-navigation .nav-previous a:after,
.posts-navigation .nav-previous a:after,
.post-navigation .nav-previous:after,
.post-navigation .nav-previous a:after {
	content: "\e686";
	font-family: 'Pe-icon-7-stroke';
}

.comment-navigation .nav-next a:after,
.posts-navigation .nav-next a:after,
.post-navigation .nav-next a:after,
.post-navigation .nav-next:after {
	content: "\e684";
	font-family: 'Pe-icon-7-stroke';
}

.post-navigation .nav-previous a:before,
.post-navigation .nav-next a:after {
	left: 0;
}

.post-navigation .nav-previous:after,
.post-navigation .nav-previous a:after,
.post-navigation .nav-next a:before,
.post-navigation .nav-previous a:after {
	right: 0;
}

.post-navigation .nav-next:hover a,
.post-navigation .nav-previous:hover a {
	color: #ff525224;
}

.post-navigation .nav-next:hover a:before {
	left: auto;
	right: 100%;
	width: 25%;
}

.post-navigation .nav-previous:hover a:before {
	left: 100%;
	right: auto;
	width: 25%;
}

.post-navigation .nav-next:hover a:after,
.post-navigation .nav-previous:hover a:after {
	color: transparent;
}

.post-navigation .nav-previous:after {
	-o-transition: .15s .25s ease right, .5s .05s ease color;
	-webkit-transition: .15s .25s ease right, .5s .05s ease color;
	color: #ff5252;
	right: -30%;
	transition: .15s .25s ease right, .5s .05s ease color;
}

.post-navigation .nav-next:after {
	-o-transition: .15s .25s ease left, .5s .05s ease color;
	-webkit-transition: .15s .25s ease left, .5s .05s ease color;
	color: #ff5252;
	left: -30%;
	transition: .15s .25s ease left, .5s .05s ease color;
}

.post-navigation .nav-previous:hover:after {
	right: 50%;
}

.post-navigation .nav-next:hover:after {
	left: 50%;
}

.comment-navigation .nav-previous a,
.posts-navigation .nav-previous a {
	margin-left: 30px;
}

.comment-navigation .nav-next a,
.posts-navigation .nav-next a {
	margin-right: 30px;
}

.comment-navigation .nav-next a:after,
.posts-navigation .nav-next a:after,
.comment-navigation .nav-previous a:after,
.posts-navigation .nav-previous a:after {
	font-size: 19px;
	position: absolute;
}

.comment-navigation .nav-next a:after,
.posts-navigation .nav-next a:after {
	right: -30px;
}

.comment-navigation .nav-previous a:after,
.posts-navigation .nav-previous a:after {
	left: -30px;
}


/*--------------------------------------------------------------
## JS-OffCanvas
--------------------------------------------------------------*/

body.has-offcanvas--visible {
	overflow: hidden;
}

.c-offcanvas> .siuy-slinky-menu ul> li> a {
	-o-transition: color 170ms ease-in-out;
	-webkit-transition: color 170ms ease-in-out;
	color: #a89b8e;
	transition: color 170ms ease-in-out;
}

.c-offcanvas,
.c-offcanvas-content-wrap {
	-webkit-backface-visibility: hidden;
	-webkit-transform: translate3d(0, 0, 0);
	backface-visibility: hidden;
	transform: translate3d(0, 0, 0);
}

.c-offcanvas,
.c-offcanvas-content-wrap,
.c-offcanvas-bg.c-offcanvas-bg--reveal,
.c-offcanvas-bg.c-offcanvas-bg--push {
	-o-transition: transform 300ms cubic-bezier(0.4, 0, 0.6, 1);
	-webkit-transition: -webkit-transform 300ms cubic-bezier(0.4, 0, 0.6, 1);
	transition: -webkit-transform 300ms cubic-bezier(0.4, 0, 0.6, 1);
	transition: transform 300ms cubic-bezier(0.4, 0, 0.6, 1);
	transition: transform 300ms cubic-bezier(0.4, 0, 0.6, 1), -webkit-transform 300ms cubic-bezier(0.4, 0, 0.6, 1);
}

.c-offcanvas.is-open {
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
	visibility: visible;
}

.c-offcanvas-content-wrap {
	background: inherit;
	overflow: hidden;
	position: relative;
	z-index: 3;
}

.c-offcanvas {
	background: #fff;
	display: block;
	max-height: none;
	min-height: 100%;
	overflow: hidden;
	overflow-x: hidden;
	overflow-y: auto;
	position: fixed;
	top: 0;
}

.c-offcanvas--opening {
	-o-transition-timing-function: cubic-bezier(0.4, 0, 0.6, 1);
	-webkit-transition-timing-function: cubic-bezier(0.4, 0, 0.6, 1);
	transition-timing-function: cubic-bezier(0.4, 0, 0.6, 1);
}

.c-offcanvas.is-closed {
	-webkit-box-shadow: none;
	box-shadow: none;
	max-height: 100%;
	overflow: hidden;
	visibility: hidden;
}

.c-offcanvas.is-scrollable {
	overflow-y: auto;
}

.c-offcanvas--overlay {
	z-index: 6;
}

.c-offcanvas--reveal {
	z-index: 2;
}

.c-offcanvas-bg {
	-o-transition: background-color 400ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;
	-webkit-transition: background-color 400ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;
	background-color: transparent;
	height: 100%;
	left: -100%;
	position: fixed;
	top: 0;
	transition: background-color 400ms cubic-bezier(0.23, 1, 0.32, 1) 0ms;
	width: 100%;
	z-index: 5;
}

.c-offcanvas-bg.is-animating,
.c-offcanvas-bg.is-open {
	background-color: #FFFFFF78;
	left: 0;
	visibility: visible;
}

.c-offcanvas-bg.is-closed {
	visibility: hidden;
}

.c-offcanvas--left {
	-webkit-transform: translate3d(-18.8em, 0, 0);
	height: 100%;
	transform: translate3d(-18.8em, 0, 0);
	width: 18.8em;
}

.c-offcanvas--right {
	-webkit-transform: translate3d(18.8em, 0, 0);
	height: 100%;
	right: 0;
	transform: translate3d(18.8em, 0, 0);
	width: 18.8em;
}

.c-offcanvas--top {
	-webkit-transform: translate3d(0, -12.5em, 0);
	height: 12.5em;
	left: 0;
	min-height: auto;
	right: 0;
	top: 0;
	transform: translate3d(0, -12.5em, 0);
	width: 100%;
}

.c-offcanvas--bottom {
	-webkit-transform: translate3d(0, 12.5em, 0);
	bottom: 0;
	height: 12.5em;
	left: 0;
	min-height: auto;
	right: 0;
	top: auto;
	transform: translate3d(0, 12.5em, 0);
	width: 100%;
}

.c-offcanvas-content-wrap {
	z-index: 3;
}

.c-offcanvas-content-wrap--reveal.c-offcanvas-content-wrap--left.is-open {
	-webkit-transform: translate3d(18.8em, 0, 0);
	transform: translate3d(18.8em, 0, 0);
}

.c-offcanvas-content-wrap--reveal.c-offcanvas-content-wrap--right.is-open {
	-webkit-transform: translate3d(-18.8em, 0, 0);
	transform: translate3d(-18.8em, 0, 0);
}

.c-offcanvas--reveal {
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
	z-index: 0;
}

.c-offcanvas-bg.c-offcanvas-bg--reveal.c-offcanvas-bg--left.is-open {
	-webkit-transform: translate3d(18.8em, 0, 0);
	transform: translate3d(18.8em, 0, 0);
}

.c-offcanvas-bg.c-offcanvas-bg--reveal.c-offcanvas-bg--right.is-open {
	-webkit-transform: translate3d(-18.8em, 0, 0);
	transform: translate3d(-18.8em, 0, 0);
}

.c-offcanvas--push {
	z-index: 6;
}

.c-offcanvas--push--opening {
	-o-transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
	-webkit-transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
	transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
}

.c-offcanvas-content-wrap {
	z-index: 3;
}

.c-offcanvas-content-wrap--push.c-offcanvas-content-wrap--left.is-open {
	-webkit-transform: translate3d(18.8em, 0, 0);
	transform: translate3d(18.8em, 0, 0);
}

.c-offcanvas-content-wrap--push.c-offcanvas-content-wrap--right.is-open {
	-webkit-transform: translate3d(-18.8em, 0, 0);
	transform: translate3d(-18.8em, 0, 0);
}

.c-offcanvas-bg.c-offcanvas-bg--push.c-offcanvas-bg--left.is-open {
	-webkit-transform: translate3d(18.8em, 0, 0);
	transform: translate3d(18.8em, 0, 0);
}

.c-offcanvas-bg.c-offcanvas-bg--push.c-offcanvas-bg--right.is-open {
	-webkit-transform: translate3d(-18.8em, 0, 0);
	transform: translate3d(-18.8em, 0, 0);
}

.c-offcanvas.is-hidden {
	visibility: hidden;
}

.c-offcanvas> .siuy-slinky-menu> ul> li:focus,
.c-offcanvas> .siuy-slinky-menu> ul> li:active,
.c-offcanvas> .siuy-slinky-menu> ul> li> a:focus,
.c-offcanvas> .siuy-slinky-menu> ul> li> a:active,
.c-offcanvas.is-open {
	-webkit-box-shadow: none !important;
	box-shadow: none !important;
	outline: none !important;
}

.c-offcanvas,
.c-offcanvas .slinky-menu {
	background-color: #e1dad2;
}

.c-offcanvas .slinky-theme-default .next::after,
.c-offcanvas .slinky-theme-default .back::before {
	-moz-mask: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCI+ICAgIDxwYXRoIGQ9Ik0xMi4yMTkgMi4yODFMMTAuNzggMy43MiAxOC4wNjIgMTFIMnYyaDE2LjA2M2wtNy4yODIgNy4yODEgMS40MzggMS40MzggOS05IC42ODctLjcxOS0uNjg3LS43MTl6IiAvPjwvc3ZnPg==) no-repeat 50% 50%;
	-webkit-mask: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCI+ICAgIDxwYXRoIGQ9Ik0xMi4yMTkgMi4yODFMMTAuNzggMy43MiAxOC4wNjIgMTFIMnYyaDE2LjA2M2wtNy4yODIgNy4yODEgMS40MzggMS40MzggOS05IC42ODctLjcxOS0uNjg3LS43MTl6IiAvPjwvc3ZnPg==) no-repeat 50% 50%;
	-webkit-mask-size: 1em;
	background: none;
	background-color: #A89B8E;
	mask: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCI+ICAgIDxwYXRoIGQ9Ik0xMi4yMTkgMi4yODFMMTAuNzggMy43MiAxOC4wNjIgMTFIMnYyaDE2LjA2M2wtNy4yODIgNy4yODEgMS40MzggMS40MzggOS05IC42ODctLjcxOS0uNjg3LS43MTl6IiAvPjwvc3ZnPg==) no-repeat 50% 50%;
	opacity: 1;
}

.c-offcanvas .slinky-theme-default .back:hover {
	background-color: transparent !important;
}

@media (max-width: 21em) {
	.c-offcanvas-bg.c-offcanvas-bg--push.c-offcanvas-bg--right.is-open,
	.c-offcanvas-content-wrap--push.c-offcanvas-content-wrap--right.is-open,
	.c-offcanvas-bg.c-offcanvas-bg--reveal.c-offcanvas-bg--right.is-open,
	.c-offcanvas-content-wrap--reveal.c-offcanvas-content-wrap--right.is-open,
	.c-offcanvas--left {
		-webkit-transform: translate3d(-14.8em, 0, 0);
		transform: translate3d(-14.8em, 0, 0);
	}
	.c-offcanvas-bg.c-offcanvas-bg--push.c-offcanvas-bg--left.is-open,
	.c-offcanvas-content-wrap--push.c-offcanvas-content-wrap--left.is-open,
	.c-offcanvas-bg.c-offcanvas-bg--reveal.c-offcanvas-bg--left.is-open,
	.c-offcanvas-content-wrap--reveal.c-offcanvas-content-wrap--left.is-open,
	.c-offcanvas--right {
		-webkit-transform: translate3d(14.8em, 0, 0);
		transform: translate3d(14.8em, 0, 0);
	}
	.c-offcanvas--right,
	.c-offcanvas--left {
		width: 14.8em;
	}
}


/*--------------------------------------------------------------
# Slinky
--------------------------------------------------------------*/

.slinky-menu {
	-webkit-transform: translateZ(0);
	overflow: hidden;
	transform: translateZ(0);
}

.slinky-menu> ul {
	-webkit-transform: translateZ(0);
	left: 0;
	position: relative;
	transform: translateZ(0);
}

.slinky-menu ul,
.slinky-menu li {
	list-style: none;
	margin: 0;
}

.slinky-menu ul {
	width: 100%;
}

.slinky-menu a {
	-ms-flex-align: center;
	-webkit-box-align: center;
	align-items: center;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}

.slinky-menu a span {
	-ms-flex: 1;
	-webkit-box-flex: 1;
	flex: 1;
	line-height: 2.67;
}

.slinky-menu li ul {
	display: none;
	left: 100%;
	position: absolute;
	top: 0;
}

.slinky-menu .header {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
}

.slinky-menu .header .title {
	-ms-flex: 1;
	-ms-flex-order: 1;
	-webkit-box-flex: 1;
	-webkit-box-ordinal-group: 2;
	flex: 1;
	line-height: 1.4;
	margin: 0;
	order: 1;
}

.slinky-theme-default {
	background: #f6f7f8;
}

.slinky-theme-default .title {
	color: #333;
	padding: 1em;
}

.slinky-theme-default a {
	padding: 0 2.8em;
}

.slinky-theme-default .next::after,
.slinky-theme-default .back::before {
	-o-transition: 200ms;
	-webkit-transition: 200ms;
	background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCI+ICAgIDxwYXRoIGQ9Ik0xMi4yMTkgMi4yODFMMTAuNzggMy43MiAxOC4wNjIgMTFIMnYyaDE2LjA2M2wtNy4yODIgNy4yODEgMS40MzggMS40MzggOS05IC42ODctLjcxOS0uNjg3LS43MTl6IiAvPjwvc3ZnPg==) center no-repeat;
	background-size: 1em;
	content: '';
	height: 1em;
	opacity: 0.25;
	transition: 200ms;
	width: 1em;
}

.slinky-theme-default .next::after {
	margin-left: 1em;
}

.slinky-theme-default .back::before {
	-ms-transform: scaleX(-1);
	-webkit-transform: scaleX(-1);
	padding: 1em 0em;
	transform: scaleX(-1);
}

.slinky-theme-default .next:hover::after,
.slinky-theme-default .back:hover::before {
	opacity: 0.75;
}

.slinky-theme-default .next:active::after,
.slinky-theme-default .back:active::before {
	opacity: 1;
}

.siuy-slinky-menu.slinky-menu ul {
	padding-left: 0;
}

.siuy-slinky-menu {
	margin-top: 32%;
}


/*--------------------------------------------------------------
# Accessibility
--------------------------------------------------------------*/


/* Text meant only for screen readers. */

.comments-area label,
.screen-reader-text {
	-webkit-clip-path: inset(50%);
	border: 0;
	clip: rect(1px, 1px, 1px, 1px);
	clip-path: inset(50%);
	height: 1px;
	margin: -1px;
	overflow: hidden;
	padding: 0;
	position: absolute !important;
	width: 1px;
	word-wrap: normal !important;
	/* Many screen reader and browser combinations announce broken words as they would appear visually. */
}

.comments-area label:focus,
.screen-reader-text:focus {
	-webkit-box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
	-webkit-clip-path: none;
	background-color: #f1f1f1;
	border-radius: 3px;
	box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
	clip: auto !important;
	clip-path: none;
	color: #21759b;
	display: block;
	font-size: 0.875rem;
	font-weight: bold;
	height: auto;
	left: 5px;
	line-height: normal;
	padding: 15px 23px 14px;
	text-decoration: none;
	top: 5px;
	width: auto;
	z-index: 100000;
	/* Above WP toolbar. */
}


/* Do not show the outline on the skip link target. */

#content[tabindex="-1"]:focus {
	outline: 0;
}


/*--------------------------------------------------------------
# Alignments
--------------------------------------------------------------*/

.alignleft {
	display: inline;
	float: left;
	margin-right: 1.5em;
}

.alignright {
	display: inline;
	float: right;
	margin-left: 1.5em;
}

.aligncenter {
	clear: both;
	display: block;
	margin-left: auto;
	margin-right: auto;
}


/*--------------------------------------------------------------
# Clearings
--------------------------------------------------------------*/

.clear:before,
.clear:after,
.entry-content:before,
.entry-content:after,
.comment-content:before,
.comment-content:after,
.site-header:before,
.site-header:after,
.site-content:before,
.site-content:after,
.site-footer:before,
.site-footer:after {
	content: "";
	display: table;
	table-layout: fixed;
}

.clear:after,
.entry-content:after,
.comment-content:after,
.site-header:after,
.site-content:after,
.site-footer:after {
	clear: both;
}


/*--------------------------------------------------------------
# Widgets
--------------------------------------------------------------*/

.widget {
	margin: 0 0 1.8em;
	/* Make sure select elements fit in widgets. */
}

#secondary .widget:after {
	background: rgba(226, 226, 226, 1);
	background: -webkit-gradient(left top, right top, color-stop(0%, rgba(226, 226, 226, 1)), color-stop(29%, rgba(235, 235, 235, 1)), color-stop(77%, rgba(235, 235, 235, 1)), color-stop(100%, rgba(255, 255, 255, 0)));
	background: -webkit-linear-gradient(left, rgba(226, 226, 226, 1) 0%, rgba(235, 235, 235, 1) 29%, rgba(235, 235, 235, 1) 77%, rgba(255, 255, 255, 0) 100%);
	background: -o-linear-gradient(left, rgba(226, 226, 226, 1) 0%, rgba(235, 235, 235, 1) 29%, rgba(235, 235, 235, 1) 77%, rgba(255, 255, 255, 0) 100%);
	background: -webkit-gradient(linear, left top, right top, from(rgba(226, 226, 226, 1)), color-stop(29%, rgba(235, 235, 235, 1)), color-stop(77%, rgba(235, 235, 235, 1)), to(rgba(255, 255, 255, 0)));
	background: linear-gradient(to right, rgba(226, 226, 226, 1) 0%, rgba(235, 235, 235, 1) 29%, rgba(235, 235, 235, 1) 77%, rgba(255, 255, 255, 0) 100%);
	content: "";
	display: table;
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#ffffff00', GradientType=1);
	height: 1px;
	margin-top: 1.7em;
	width: 100%;
}

#secondary .widget:only-of-type:after,
#secondary .widget:last-of-type:after {
	background: rgba(226, 226, 226, 0);
	margin-top: 0;
}

.widget select {
	margin-bottom: 0.55em;
	max-width: 100%;
}

#secondary .widgettitle,
#secondary .widget-title {
	margin-bottom: 1.7em;
	margin-top: 0;
}


/*--------------------------------------------------------------
## Siuy posts
--------------------------------------------------------------*/

.siuy-posts-widget> article {
	margin-bottom: 3.15em;
}

.siuy-posts-widget .entry-content> *:first-of-type,
.siuy-posts-widget .entry-thumb {
	margin-bottom: 0.78em;
}

.siuy-posts-widget .entry-meta {
	margin-bottom: 0.6em;
}

.siuy-posts-widget .entry-header>.entry-meta {
	margin-top: -0.5em;
}

.siuy-posts-widget> article:last-of-type,
.siuy-posts-widget .entry-content> p:empty {
	margin-bottom: 0;
}

.siuy-posts-widget .entry-title {
	margin-bottom: 0.4em;
}

.siuy-posts-widget .entry-header>.entry-title+.entry-meta,
.siuy-posts-widget .entry-title,
.siuy-posts-widget .entry-content> *:first-of-type,
.siuy-posts-widget .entry-content {
	margin-top: 0;
}

.siuy-posts-widget .entry-header>.entry-title:first-of-type {
	margin-top: -0.48em;
}

.siuy-posts-widget .entry-content> a.readmore:after {
	display: none;
}


/*--------------------------------------------------------------
## MailChimp
--------------------------------------------------------------*/

.mc4wp-form-fields {
	max-width: 487px;
	position: relative;
}

.mc4wp-form-fields>p {
	max-width: 380px;
}

.mc4wp-form-fields input[name="EMAIL"] {
	-webkit-box-shadow: none;
	background-color: transparent;
	border-left: none;
	border-radius: 0;
	border-right: none;
	border-top: none;
	box-shadow: none;
	outline: none;
	padding-bottom: 18px;
	padding-left: 0;
	width: 100%;
}

.mc4wp-form-fields input[name="EMAIL"]:focus,
.mc4wp-form-fields input[name="EMAIL"]:hover {
	-webkit-box-shadow: none;
	box-shadow: none;
	outline: none;
}

.mc4wp-form-fields button:before {
	font-size: 30px;
	position: absolute;
	right: 0;
}

.mc4wp-form-fields button {
	background: transparent;
	border-color: transparent;
	margin-left: -30px;
	padding: 0;
	vertical-align: middle;
}

.mc4wp-form-fields input[name="EMAIL"]+button {
	bottom: 10px;
	height: 1.5em;
	line-height: 0.5;
	margin-bottom: 10px;
	min-width: auto;
	padding: 0 35px 0 0;
	position: absolute;
	right: 0;
}


/*--------------------------------------------------------------
## Calendar
--------------------------------------------------------------*/

.widget_calendar caption {
	background-color: #1D1F24;
	color: #fff;
	padding: 5px;
}

.widget_calendar .calendar_wrap {
	border: 1px solid #979797;
	margin-bottom: 2.15em;
}

.widget_calendar table {
	margin-bottom: 0;
}

.widget_calendar td {
	padding: 2px 5px;
}

.widget_calendar tbody td,
.widget_calendar th {
	border-right: 1px solid #979797;
}

.widget_calendar tbody td:last-child,
.widget_calendar th:last-child {
	border-right: 0;
}

.widget_calendar tbody td {
	text-align: center;
}

.widget_calendar tfoot,
.widget_calendar tbody tr {
	border-top: 1px solid #979797;
}

.widget_calendar tbody .pad {
	background-color: #e8e8e8;
	background-image: url("data:image/svg+xml,%3Csvg width='6' height='6' viewBox='0 0 6 6' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23979797' fill-opacity='0.4' fill-rule='evenodd'%3E%3Cpath d='M5 0h1L0 6V5zM6 5v1H5z'/%3E%3C/g%3E%3C/svg%3E");
}

.widget_calendar tbody #today {
	background-color: #ff5252;
}


/*--------------------------------------------------------------
## Link list
--------------------------------------------------------------*/

.widget_nav_menu ul.sub-menu,
.widget:not(.widget_text) ul.children,
.widget_nav_menu ul.nav-menu,
.widget:not(.widget_text) ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

.widget:not(.widget_text) li:last-child {
	margin-bottom: 0;
}

.widget:not(.widget_text) ul.children> li,
.widget.widget_nav_menu ul> li,
.widget:not(.widget_text)> ul> li:not(.recentcomments) {
	-ms-flex-flow: row wrap;
	-ms-flex-pack: justify;
	-webkit-box-direction: normal;
	-webkit-box-orient: horizontal;
	-webkit-box-pack: justify;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	flex-flow: row wrap;
	justify-content: space-between;
	margin-bottom: 5px;
	position: relative;
}

.widget.widget_nav_menu ul.sub-menu,
.widget:not(.widget_text) ul.children {
	-ms-flex-positive: 1;
	-ms-flex-preferred-size: 100%;
	-webkit-box-flex: 1;
	border-left: 1px solid #dee5ea;
	flex-basis: 100%;
	flex-grow: 1;
	page-break-after: always;
}

.widget.widget_nav_menu ul.sub-menu li,
.widget:not(.widget_text) ul.children li {
	padding-left: 14px;
}

.widget.widget_nav_menu ul.sub-menu li::before,
.widget:not(.widget_text) ul.children li::before {
	-ms-transform: none;
	-webkit-transform: none;
	background-color: #dee5ea;
	border: 0;
	color: transparent;
	content: '';
	display: block;
	height: 1px;
	left: 0;
	position: absolute;
	top: 14px;
	transform: none;
	width: 8px;
}

#secondary .widget_archive>ul>li>a:before,
#secondary .widget_recent_comments>ul>li:before,
#secondary .widget_categories>ul>li>a:before,
#secondary .widget_pages>ul>li>a:before {
	font-family: 'Pe-icon-7-stroke';
	font-weight: 600;
	margin-left: -9px;
	margin-right: 3px;
}

#secondary .widget_pages>ul>li>a:before {
	content: "\e62e";
}

#secondary .widget_categories>ul>li>a:before {
	content: "\e653";
}

#secondary .widget_recent_comments>ul>li:before {
	content: "\e668";
}

#secondary .widget_archive>ul>li>a:before {
	content: "\e674";
}


/*--------------------------------------------------------------
# Content
--------------------------------------------------------------*/

.container {
	margin: 0 auto;
	max-width: 1230px;
	padding: 0 15px;
}

#masthead+#content:before {
	background: rgba(235, 235, 235, 1);
	background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(10%, rgba(235, 235, 235, 1)), color-stop(90%, rgba(235, 235, 235, 1)), color-stop(100%, rgba(255, 255, 255, 0)));
	background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(235, 235, 235, 1) 10%, rgba(235, 235, 235, 1) 90%, rgba(255, 255, 255, 0) 100%);
	background: -o-linear-gradient(left, rgba(255, 255, 255, 0) 0%, rgba(235, 235, 235, 1) 10%, rgba(235, 235, 235, 1) 90%, rgba(255, 255, 255, 0) 100%);
	background: -webkit-gradient(linear, left top, right top, from(rgba(255, 255, 255, 0)), color-stop(10%, rgba(235, 235, 235, 1)), color-stop(90%, rgba(235, 235, 235, 1)), to(rgba(255, 255, 255, 0)));
	background: linear-gradient(to right, rgba(255, 255, 255, 0) 0%, rgba(235, 235, 235, 1) 10%, rgba(235, 235, 235, 1) 90%, rgba(255, 255, 255, 0) 100%);
	content: "";
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ebebeb', endColorstr='#ebebeb', GradientType=1);
	height: 1px;
	left: 0;
	position: absolute;
	width: 100%;
}

body.post-template-page-templatestemplate-fluid-php #content.container.site-content,
body.single-post.no-sidebar #content.container.site-content,
body.archive.no-sidebar #content.container.site-content,
body.blog.no-sidebar #content.container.site-content {
	max-width: 825px;
}

.right-sidebar #content.site-content {
	grid-template-areas: 'content sidebar';
}

.left-sidebar #content.site-content {
	grid-template-areas: 'sidebar content';
}

#content.site-content> .content-area {
	grid-area: content;
	position: relative;
}

#content.site-content> .widget-area {
	grid-area: sidebar;
	position: relative;
}

@media screen and (min-width: 50.5em) {
	#content.site-content {
		margin-bottom: 7.7em;
		margin-top: 4.65em;
	}
	#masthead+#content:before {
		margin-top: -4.65em;
	}
	.left-sidebar #content.site-content,
	.right-sidebar #content.site-content {
		display: grid;
		grid-gap: 0 60px;
	}
	.right-sidebar #content.site-content {
		grid-template-columns: 1fr minmax(284px, 284px);
	}
	.left-sidebar #content.site-content {
		grid-template-columns: minmax(284px, 284px) 1fr;
	}
	.left-sidebar #content.site-content> .content-area:after,
	.right-sidebar #content.site-content> .content-area:after {
		background: rgba(226, 226, 226, 1);
		content: '';
		height: 100%;
		pointer-events: none;
		position: absolute;
		top: 0;
		width: 1px;
	}
	.left-sidebar #content.site-content> .content-area:after,
	.right-sidebar #content.site-content> .content-area:after {
		background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(226, 226, 226, 1)), color-stop(29%, rgba(235, 235, 235, 1)), color-stop(95%, rgba(235, 235, 235, 1)), color-stop(100%, rgba(255, 255, 255, 0)));
		background: -webkit-linear-gradient(top, rgba(226, 226, 226, 1) 0%, rgba(235, 235, 235, 1) 29%, rgba(235, 235, 235, 1) 95%, rgba(255, 255, 255, 0) 100%);
		background: -o-linear-gradient(top, rgba(226, 226, 226, 1) 0%, rgba(235, 235, 235, 1) 29%, rgba(235, 235, 235, 1) 95%, rgba(255, 255, 255, 0) 100%);
		background: -webkit-gradient(linear, left top, left bottom, from(rgba(226, 226, 226, 1)), color-stop(29%, rgba(235, 235, 235, 1)), color-stop(95%, rgba(235, 235, 235, 1)), to(rgba(255, 255, 255, 0)));
		background: linear-gradient(to bottom, rgba(226, 226, 226, 1) 0%, rgba(235, 235, 235, 1) 29%, rgba(235, 235, 235, 1) 95%, rgba(255, 255, 255, 0) 100%);
		filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#ffffff00', GradientType=0);
	}
	.right-sidebar #content.site-content> .content-area:after {
		right: 0;
	}
	.left-sidebar #content.site-content> .content-area:after {
		left: 0;
	}
}

@media screen and (max-width: 65.5em) and (min-width: 50.5em) {
	.right-sidebar #content.site-content,
	.left-sidebar #content.site-content {
		grid-gap: 0 40px;
	}
	.right-sidebar #content.site-content {
		grid-template-columns: 1fr minmax(220px, 220px);
	}
	.left-sidebar #content.site-content {
		grid-template-columns: minmax(220px, 220px) 1fr;
	}
}

@media screen and (max-width: 50.5em) {
	#content.site-content {
		margin-bottom: 4.65em;
		margin-top: 2.85em;
	}
	#masthead+#content:before {
		margin-top: -2.85em;
	}
}


/*--------------------------------------------------------------
## Posts and pages
--------------------------------------------------------------*/

.page-header .page-title {
	margin-top: 0;
}

.sticky {
	display: block;
}

.hentry {
	margin: 0 0 1.5em;
}

.updated:not(.published) {
	display: none;
}

.page-content,
.entry-content,
.entry-summary {
	margin: 0.5em 0 0;
}

.byline+ .posted-on {
	margin-left: 33px;
}

.page-links {
	clear: both;
	margin: 0 0 1.5em;
}

.posted-on {
	font-size: 0;
	visibility: hidden;
}

.posted-on> a {
	display: inline-block;
	line-height: 1.2;
	visibility: visible;
	z-index: 2;
}

.content-area .page .entry-header>.entry-title:first-child,
.content-area .post .entry-header>.entry-title:first-child {
	-moz-margin-before: 0;
	-webkit-margin-before: 0;
	margin-top: 0;
}

.single-post .site-main> #comments,
.page #comments:before,
.content-area .site-main> article {
	margin-bottom: 55px;
}

.page #comments:before,
.content-area .site-main> article.post:after {
	background: rgba(226, 226, 226, 1);
	content: "";
	display: table;
	height: 1px;
	margin-top: 45px;
	width: 100%;
}

.page.single-post #comments:before,
.page.page-template-template-fluid #comments:before,
.post-template-template-fluid .content-area .site-main> article.post:after,
.no-sidebar .content-area .site-main> article.post:after {
	background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255, 255, 255, 1)), color-stop(15%, rgba(235, 235, 235, 1)), color-stop(85%, rgba(235, 235, 235, 1)), color-stop(100%, rgba(255, 255, 255, 0)));
	background: -webkit-linear-gradient(left, rgba(255, 255, 255, 1) 0%, rgba(235, 235, 235, 1) 15%, rgba(235, 235, 235, 1) 85%, rgba(255, 255, 255, 0) 100%);
	background: -o-linear-gradient(left, rgba(255, 255, 255, 1) 0%, rgba(235, 235, 235, 1) 15%, rgba(235, 235, 235, 1) 85%, rgba(255, 255, 255, 0) 100%);
	background: -webkit-gradient(linear, left top, right top, from(rgba(255, 255, 255, 1)), color-stop(15%, rgba(235, 235, 235, 1)), color-stop(85%, rgba(235, 235, 235, 1)), to(rgba(255, 255, 255, 0)));
	background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(235, 235, 235, 1) 15%, rgba(235, 235, 235, 1) 85%, rgba(255, 255, 255, 0) 100%);
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff00', GradientType=1);
}

.page.left-sidebar #comments:before,
.page.right-sidebar #comments:before,
.left-sidebar .content-area .site-main> article.post:after,
.right-sidebar .content-area .site-main> article.post:after {
	background: -webkit-gradient(left top, right top, color-stop(0%, rgba(226, 226, 226, 1)), color-stop(29%, rgba(235, 235, 235, 0)), color-stop(85%, rgba(235, 235, 235, 1)), color-stop(100%, rgba(255, 255, 255, 0)));
	background: -webkit-linear-gradient(left, rgba(226, 226, 226, 1) 0%, rgba(235, 235, 235, 1) 29%, rgba(235, 235, 235, 1) 85%, rgba(255, 255, 255, 0) 100%);
	background: -o-linear-gradient(left, rgba(226, 226, 226, 1) 0%, rgba(235, 235, 235, 1) 29%, rgba(235, 235, 235, 1) 85%, rgba(255, 255, 255, 0) 100%);
	background: -webkit-gradient(linear, left top, right top, from(rgba(226, 226, 226, 1)), color-stop(29%, rgba(235, 235, 235, 1)), color-stop(85%, rgba(235, 235, 235, 1)), to(rgba(255, 255, 255, 0)));
	background: linear-gradient(to right, rgba(226, 226, 226, 1) 0%, rgba(235, 235, 235, 1) 29%, rgba(235, 235, 235, 1) 85%, rgba(255, 255, 255, 0) 100%);
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#ffffff00', GradientType=1);
}

body:not(.single-post) .content-area .site-main> article.post.format-link:after,
body:not(.single-post) .content-area .site-main> article.post.format-status:after,
body:not(.single-post) .content-area .site-main> article.post.format-aside:after,
body:not(.single-post) .content-area .site-main> article.post:last-of-type:after {
	background: transparent;
}

.content-area .site-main> article .entry-content> *:last-child {
	margin-bottom: 0;
}

.content-area .site-main> article .entry-thumb {
	margin-bottom: 44px;
}

.content-area .site-main> article .entry-footer {
	margin-top: 33px;
}

.content-area .site-main> article .entry-footer> span {
	margin-right: 15px;
}

.content-area .site-main> article .entry-footer> span:last-of-type {
	margin-right: 0;
}

.entry-content twitterwidget.twitter-tweet {
	max-width: 500px !important;
	width: 100% !important;
}


/*--------------------------------------------------------------
## Entry meta
--------------------------------------------------------------*/

.content-area .edit-link:before,
.content-area .comments-link:before,
.content-area .cat-links:before,
.content-area .tags-links:before,
.content-area .posted-on:before,
.content-area .entry-meta .byline:before {
	display: inline-block;
	font-family: 'Pe-icon-7-stroke';
	font-weight: 600;
	letter-spacing: 0;
	margin-right: 3px;
	position: relative;
	vertical-align: top;
	visibility: visible;
}

.content-area .posted-on:before,
.content-area .entry-meta .byline:before {
	font-size: 19px;
}

.content-area .entry-meta .byline:before {
	content: "\e605";
}

.content-area .posted-on:before {
	color: #87878752;
	content: "\e66b";
}

.content-area .tags-links:before {
	content: "\e60c";
}

.content-area .cat-links:before {
	content: "\e653";
}

.content-area .comments-link:before {
	content: "\e668";
}

.content-area .edit-link:before {
	content: "\e62c";
}


/*--------------------------------------------------------------
## Read more link
--------------------------------------------------------------*/

.content-area .site-main> article .entry-footer> span.readmore {
	display: block;
	margin-top: 33px;
}

article .entry-footer> span.readmore>a {
	-o-transition: .01s .23s ease-out all;
	-webkit-transition: .01s .23s ease-out all;
	display: inline-block;
	height: 50px;
	overflow: hidden;
	padding: 14px;
	position: relative;
	text-align: center;
	transition: .01s .23s ease-out all;
	width: 190px;
	z-index: 2;
}

.content-area .site-main article .entry-footer> span.readmore> a:hover {
	color: #ff525224;
}

article .entry-footer> span.readmore>a:before {
	-o-transition: .3s ease-in all;
	-webkit-transition: .3s ease-in all;
	background: #edeae7;
	content: '';
	height: 100%;
	left: 0;
	position: absolute;
	top: 0;
	transition: .3s ease-in all;
	width: 49%;
	z-index: -1;
}

article .entry-footer> span.readmore>a:hover:before {
	left: 100%;
	width: 25%;
}

.content-area .readmore-icon,
.content-area .readmore-icon-after {
	height: 100%;
	position: absolute;
	right: 0;
	top: 0;
	width: 100%;
}

.content-area .readmore-icon-after:after,
.content-area .readmore-icon:after {
	-ms-transform: translate3D(0, -50%, 0);
	-webkit-transform: translate3D(0, -50%, 0);
	content: "\e684";
	display: inline-block;
	font-family: 'Pe-icon-7-stroke';
	font-size: 30px;
	position: relative;
	top: 25.5px;
	transform: translate3D(0, -50%, 0);
}

.content-area span.readmore .readmore-icon:after {
	-ms-transform: translate3D(0, -50%, 0) translateX(-50%);
	-webkit-transform: translate3D(0, -50%, 0) translateX(-50%);
	right: -50%;
	transform: translate3D(0, -50%, 0) translateX(-50%);
}

.content-area span.readmore>a:hover .readmore-icon:after {
	color: transparent;
}

.content-area .readmore-icon-after:after {
	-o-transition: .15s .25s ease left, .5s .05s ease color;
	-webkit-transition: .15s .25s ease left, .5s .05s ease color;
	color: #ff5252;
	left: -60%;
	transition: .15s .25s ease left, .5s .05s ease color;
}

.site-main article span.readmore a:hover>.readmore-icon-after:after {
	left: 0;
}


/*--------------------------------------------------------------
## Post formats
--------------------------------------------------------------*/

body:not(.single-post) .content-area .format-standard.post-password-required .entry-title,
body:not(.single-post) .content-area .format-image .entry-title,
body:not(.single-post) .content-area .format-chat .entry-title,
body:not(.single-post) .content-area .format-link .entry-title,
body:not(.single-post) .content-area .format-status .entry-title,
body:not(.single-post) .content-area .format-aside .entry-title,
body:not(.single-post) .content-area .format-video .entry-title,
body:not(.single-post) .content-area .format-audio .entry-title,
body:not(.single-post) .content-area .format-gallery .entry-title,
body:not(.single-post) .content-area .sticky h2.entry-title {
	margin-left: 1.5em;
}

.single-post .content-area .format-standard.post-password-required .entry-title,
.single-post .content-area .format-image .entry-title,
.single-post .content-area .format-chat .entry-title,
.single-post .content-area .format-link .entry-title,
.single-post .content-area .format-status .entry-title,
.single-post .content-area .format-aside .entry-title,
.single-post .content-area .format-video .entry-title,
.single-post .content-area .format-audio .entry-title,
.single-post .content-area .format-gallery .entry-title,
.single-post .content-area .sticky h2.entry-title {
	margin-left: 1.2em;
}

.single-post .content-area .post-password-required .entry-title:before,
.single-post .content-area .format-image .entry-title:before,
.single-post .content-area .format-chat .entry-title:before,
.single-post .content-area .format-link .entry-title:before,
.single-post .content-area .format-status .entry-title:before,
.single-post .content-area .format-aside .entry-title:before,
.single-post .content-area .format-video .entry-title:before,
.single-post .content-area .format-audio .entry-title:before,
.single-post .content-area .format-gallery .entry-title:before {
	line-height: 1.6;
}

.content-area .format-link:before,
.content-area .post-password-required .entry-title:before,
.content-area .format-image .entry-title:before,
.content-area .format-chat .entry-title:before,
.content-area .format-link .entry-title:before,
.content-area .format-status .entry-title:before,
.content-area .format-aside .entry-title:before,
.content-area .format-video .entry-title:before,
.content-area .format-audio .entry-title:before,
.content-area .format-gallery .entry-title:before,
.content-area .sticky h2.entry-title:before {
	color: #edeae7;
	font-family: 'Pe-icon-7-stroke';
	font-size: 35px;
	left: 0;
	position: absolute;
}

.content-area .sticky h2.entry-title:before {
	content: "\e69b";
}

.content-area .post-password-required .entry-title:before {
	content: "\e63f";
}

.content-area .format-image .entry-title:before {
	content: "\e6bf";
}

.content-area .format-audio .entry-title:before {
	content: "\e630";
}

.content-area .format-video .entry-title:before {
	content: "\e6a5";
}

.content-area .format-chat .entry-title:before {
	content: "\e66d";
}

.content-area .format-gallery .entry-title:before {
	content: "\e67d";
}

.content-area .format-link:before {
	color: #595959;
	content: "\e641";
	font-size: 4.5em;
	font-weight: 600;
	line-height: 0;
	right: 0;
	top: 0;
}

.content-area .format-link .entry-title {
	margin-left: 0;
	position: relative;
}

.content-area .format-link {
	margin-top: 4.5em;
	padding: 3.4em 1em 1.5em;
	text-align: center;
}

.content-area .format-status,
.content-area .format-aside {
	padding: 1.5em 1em;
}

.content-area .format-link,
.content-area .format-status,
.content-area .format-aside {
	-o-border-image: -o-linear-gradient(#edeae7, rgba(0, 0, 0, 0)) 1 100%;
	-o-border-image: -o-linear-gradient(top, #edeae7, rgba(0, 0, 0, 0)) 1 100%;
	-webkit-border-image: -webkit-gradient(linear, 0 0, 0 100%, from(#edeae7), to(rgba(0, 0, 0, 0))) 1 100%;
	-webkit-border-image: -webkit-linear-gradient(#edeae7, rgba(0, 0, 0, 0)) 1 100%;
	-webkit-border-image: -webkit-linear-gradient(top, #edeae7, rgba(0, 0, 0, 0)) 1 100%;
	-webkit-border-image: -webkit-gradient(linear, left top, left bottom, from(#edeae7), to(rgba(0, 0, 0, 0))) 1 100%;
	background: -webkit-gradient(linear, left top, left bottom, from(rgba(237, 234, 231, 1)), color-stop(7%, rgba(237, 234, 231, 1)), color-stop(43%, rgba(255, 255, 255, 0)), to(rgba(255, 255, 255, 0)));
	background: linear-gradient(to bottom, rgba(237, 234, 231, 1) 0%, rgba(237, 234, 231, 1) 7%, rgba(255, 255, 255, 0) 43%, rgba(255, 255, 255, 0) 100%);
	background: -webkit-linear-gradient(top, rgba(237, 234, 231, 1) 0%, rgba(237, 234, 231, 1) 7%, rgba(255, 255, 255, 0) 43%, rgba(255, 255, 255, 0) 100%);
	background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(237, 234, 231, 1)), color-stop(7%, rgba(237, 234, 231, 1)), color-stop(43%, rgba(255, 255, 255, 0)), color-stop(100%, rgba(255, 255, 255, 0)));
	background: #fff;
	background: -o-linear-gradient(top, rgba(237, 234, 231, 1) 0%, rgba(237, 234, 231, 1) 7%, rgba(255, 255, 255, 0) 43%, rgba(255, 255, 255, 0) 100%);
	border-image: -webkit-gradient(linear, left top, left bottom, from(#edeae7), to(rgba(0, 0, 0, 0))) 1 100%;
	border-image: linear-gradient(to bottom, #edeae7, rgba(0, 0, 0, 0)) 1 100%;
	border-style: solid;
	border-width: 0 1px 0 1px;
	filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#edeae7', endColorstr='transparent', GradientType=0);
	position: relative;
}

.content-area .site-main> article.post.format-status:after,
.content-area .site-main> article.post.format-aside:after {
	position: absolute;
}

.content-area .format-status:before,
.content-area .format-aside:before {
	font-family: 'Pe-icon-7-stroke';
	font-size: 3em;
	line-height: 1;
	opacity: 0.5;
	position: absolute;
	right: 0.2em;
	top: 0.2em;
}

.content-area .format-aside:before {
	content: "\e61a";
}

.content-area .format-status:before {
	content: "\e628";
}


/*--------------------------------------------------------------
## Post format chat
--------------------------------------------------------------*/

.post.format-chat .entry-content {
	-ms-flex-direction: column;
	-webkit-box-direction: normal;
	-webkit-box-orient: vertical;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	flex-direction: column;
}

.post.format-chat .entry-content>p {
	max-width: 80%;
	padding: 0.5em 1em;
	position: relative;
}

.post.format-chat .entry-content>p:nth-child(odd) {
	background-color: #edeae7;
	border-radius: 0.3em 0.3em 0.3em 0;
	margin: 1em auto 1em 0.5em;
}

.post.format-chat .entry-content>p:nth-child(even) {
	background-color: #ff5252;
	border-radius: 0.3em 0.3em 0 0.3em;
	margin: 1em 0.5em 1em auto;
}

.post.format-chat .entry-content>p:before,
.post.format-chat .entry-content>p:after {
	bottom: 0;
	content: "";
	position: absolute;
}

.post.format-chat .entry-content>p:after {
	border-radius: 0 0 1em 1em;
	height: 1.5em;
	width: 1.5em;
}

.post.format-chat .entry-content>p:nth-child(odd):after {
	left: -1.5em;
}

.post.format-chat .entry-content>p:nth-child(even):after {
	right: -1.5em;
}

.post.format-chat .entry-content>p:before {
	height: 1em;
	width: 1em;
}

.post.format-chat .entry-content>p:nth-child(odd):before {
	background-color: #edeae7;
	border-radius: 0 0 0 1em;
	left: -1em;
}

.post.format-chat .entry-content>p:nth-child(even):before {
	background-color: #ff5252;
	border-radius: 0 0 1em 0;
	right: -1em;
}


/*--------------------------------------------------------------
## 404 Page
--------------------------------------------------------------*/

.error-404.not-found .widget-title,
.error-404.not-found .widgettitle {
	margin-top: 0;
}

.error-404.not-found .page-content {
	display: grid;
	grid-gap: 1em 5em;
	grid-template-areas: "desc-404 recent-entries-404" "search-404 recent-entries-404" "archive-404 categories-404" "tags-404 categories-404";
	grid-template-columns: 1fr 1fr;
	grid-template-rows: -webkit-max-content;
	grid-template-rows: max-content;
}

.error-404.not-found .page-content>p:first-of-type {
	grid-area: desc-404;
	margin: 0;
}

.error-404.not-found .page-content>.search-form {
	-ms-flex-align: start;
	-webkit-box-align: start;
	align-items: flex-start;
	grid-area: search-404;
}

.error-404.not-found .page-content>.widget_recent_entries {
	grid-area: recent-entries-404;
}

.error-404.not-found .page-content>.widget_archive {
	grid-area: archive-404;
}

.error-404.not-found .page-content>.widget_categories {
	grid-area: categories-404;
}

.error-404.not-found .page-content>.widget_tag_cloud {
	grid-area: tags-404;
}


/*--------------------------------------------------------------
## Comments
--------------------------------------------------------------*/

.comment-content a {
	word-wrap: break-word;
}

.comments-area #commentform {
	display: grid;
	grid-column-gap: 10px;
	grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
}

.comments-area #commentform p {
	margin-bottom: 0;
}

.comment-subscription-form,
.comments-area #commentform .form-submit,
.comments-area #commentform .comment-form-comment,
.comments-area #commentform .comment-notes {
	grid-column: 1/-1;
}

.bypostauthor {
	display: block;
}

.comments-area> .comments-title {
	margin-bottom: 50px;
}

.comments-area> .comments-title+ .comment-list+ .no-comments {
	margin-top: 50px;
}

.comments-area .comment-list {
	list-style: none;
	margin-left: 0;
	padding-left: 0;
}

.comments-area .children {
	list-style: none;
	margin-left: 0;
}

.comments-area .children> li {
	position: relative;
}

.comments-area .children> li> article {
	padding-right: 40px;
}

.comments-area .children> li:after {
	background-color: #EBEBEB;
	content: '';
	height: 95%;
	pointer-events: none;
	position: absolute;
	right: 0;
	top: 0;
	width: 2px;
}

.comments-area .children> li> article:after {
	background-color: #D8D8D8;
	border-radius: 50%;
	content: '';
	height: 10px;
	pointer-events: none;
	position: absolute;
	right: -4px;
	top: 0;
	width: 10px;
	z-index: 10;
}

.comments-area .comment-list .comment {
	margin-bottom: 58px;
}

.comments-area .comment-list .comment-author {
	-ms-flex-align: start;
	-ms-flex-pack: justify;
	-webkit-box-align: start;
	-webkit-box-pack: justify;
	align-items: flex-start;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	justify-content: space-between;
}

.comments-area .comment-list .comment-author .says {
	margin-left: 8px;
}

.comments-area .comment-list .comment-author> img {
	border-radius: 50%;
}

.comments-area .comment-list> li> article> .comment-content {
	background-color: #F9F9F9;
	padding: 20px 30px;
}

.comments-area .comment-list .comment-content> p:first-of-type {
	margin-top: 0;
}

.comments-area .comment-list .comment-content> p:last-of-type {
	margin-bottom: 0;
}

.comments-area .comment-list .comment-meta {
	-ms-flex-align: start;
	-ms-flex-direction: row;
	-ms-flex-pack: justify;
	-webkit-box-align: start;
	-webkit-box-direction: normal;
	-webkit-box-orient: horizontal;
	-webkit-box-pack: justify;
	align-items: flex-start;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	flex-direction: row;
	justify-content: space-between;
}

.comments-area .comment-list .comment-meta .comment-metadata .edit-link {
	margin-left: 15px;
}

.comments-area .comment-list .reply {
	clear: both;
	display: block;
	margin-bottom: 58px;
	margin-top: 14px;
	position: relative;
	text-align: right;
}

.comments-area .comment-list .reply> a {
	position: relative;
}

.comments-area .comment-list .reply:before {
	content: "\e6ac";
	font-family: 'Pe-icon-7-stroke';
	font-weight: 600;
	margin-right: 5px;
	pointer-events: none;
}

@media screen and (min-width: 50.5em) {
	.right-sidebar .content-area .site-main {
		margin-left: 0;
		margin-right: 4em;
		position: relative;
	}
	.left-sidebar .content-area .site-main {
		margin-left: auto;
		margin-left: 4em;
		margin-right: 0;
	}
}

@media screen and (max-width: 65.5em) and (min-width: 50.5em) {
	.right-sidebar .content-area .site-main {
		margin-right: 2.65em;
	}
	.left-sidebar .content-area .site-main {
		margin-left: 2.65em;
	}
}

@media (max-width: 38.5em) {
	.post .entry-footer {
		display: grid;
	}
	.post .entry-meta>span {
		display: block;
	}
	.posted-on> a {
		line-height: 2.4;
	}
	.byline+ .posted-on {
		margin-left: 0;
	}
	.post-navigation .nav-links {
		grid-template-columns: 1fr;
	}
	.single-post .post-password-required .entry-title:before,
	.single-post .content-area .format-image .entry-title:before,
	.single-post .content-area .format-chat .entry-title:before,
	.single-post .content-area .format-link .entry-title:before,
	.single-post .content-area .format-status .entry-title:before,
	.single-post .content-area .format-aside .entry-title:before,
	.single-post .content-area .format-video .entry-title:before,
	.single-post .content-area .format-audio .entry-title:before,
	.single-post .content-area .format-gallery .entry-title:before {
		line-height: 1.2;
	}
	.error-404.not-found .page-content {
		grid-template-areas: "desc-404 esc-404" "recent-entries-404 recent-entries-404" "search-404 search-404" "archive-404 archive-404" "categories-404 categories-404" "tags-404 tags-404";
	}
}

@media screen and (min-width: 37.5em) {
	.comments-area .comment-list .comment-author .fn {
		margin-left: 38px;
	}
	.comments-area .comment-list .comment-content {
		margin-left: 140px;
		margin-top: -65px;
	}
}


/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/

.site-footer {
	background-color: #EDEAE7;
}

.site-footer h4 {
	-moz-margin-before: 0.5em;
	-webkit-margin-before: 0.5em;
}

.site-footer .site-info {
	border-top: 1px solid #e1dad2;
	padding: 25px 0;
}


/*--------------------------------------------------------------
## Widget area
--------------------------------------------------------------*/

.site-footer .widget-areas {
	display: grid;
	grid-gap: 14px;
	grid-template-rows: auto;
	padding-bottom: 2.5em;
	padding-top: 80px;
}

.site-footer .widget-areas.widget-col-3 {
	grid-template-columns: 1fr 2fr 3.1fr;
}

.site-footer .widget-areas.widget-col-2 {
	grid-template-columns: 1fr 2fr;
}

.site-footer .widget-areas:empty,
.site-footer .widget-areas:blank {
	padding-bottom: 0;
	padding-top: 0;
}

.site-footer .widget-areas .mc4wp-form-fields p+input[name="EMAIL"] {
	margin-top: 2.55em;
}

.site-footer .widget-areas .mc4wp-form-fields input[name="EMAIL"] {
	border-bottom: 1px solid #979797;
}

.site-footer .mc4wp-form-fields::-webkit-input-placeholder {
	color: #595959;
}

.site-footer .mc4wp-form-fields::-moz-placeholder {
	color: #595959;
}

.site-footer .mc4wp-form-fields:-ms-input-placeholder {
	color: #595959;
}

.site-footer .mc4wp-form-fields:-moz-placeholder {
	color: #595959;
}

.site-footer .widgettitle,
.site-footer .widget-title {
	margin-bottom: 1.58em;
	margin-top: 0;
}

.site-footer .widget_categories>ul {
	-webkit-column-gap: 36px;
	column-gap: 36px;
	margin-top: -6px;
}

.site-footer .widget-areas.widget-col-2 .column:first-of-type .widget_categories>ul,
.site-footer .widget-areas.widget-col-3 .column:nth-child(2) .widget_categories>ul {
	-webkit-column-count: 2;
	column-count: 2;
}

.site-footer .widget-areas.widget-col-2 .column:last-of-type .widget_categories>ul,
.site-footer .widget-areas.widget-col-3 .column:nth-child(3) .widget_categories>ul {
	-webkit-column-count: 3;
	column-count: 3;
}

.site-footer .widget-areas.widget-col-1 .column .widget_categories>ul {
	-webkit-column-count: 5;
	column-count: 5;
}

@media (max-width: 65.5em) {
	.site-footer .widget-areas.widget-col-1 .column .widget_categories>ul,
	.site-footer .widget-areas.widget-col-2 .column:last-of-type .widget_categories>ul,
	.site-footer .widget-areas.widget-col-3 .column:nth-child(3) .widget_categories>ul,
	.site-footer .widget-areas.widget-col-2 .column:first-of-type .widget_categories>ul,
	.site-footer .widget-areas.widget-col-3 .column:nth-child(2) .widget_categories>ul,
	.site-footer .widget-areas .column .widget_categories>ul {
		-webkit-column-count: 3;
		column-count: 3;
	}
	.site-footer .widget-areas .column {
		grid-column: 1/-1;
	}
}

@media (max-width: 45.5em) {
	.site-footer .widget-areas.widget-col-1 .column .widget_categories>ul,
	.site-footer .widget-areas.widget-col-2 .column:last-of-type .widget_categories>ul,
	.site-footer .widget-areas.widget-col-3 .column:nth-child(3) .widget_categories>ul,
	.site-footer .widget-areas.widget-col-2 .column:first-of-type .widget_categories>ul,
	.site-footer .widget-areas.widget-col-3 .column:nth-child(2) .widget_categories>ul,
	.site-footer .widget-areas .column .widget_categories>ul {
		-webkit-column-count: 2;
		column-count: 2;
	}
}


/*--------------------------------------------------------------
# Infinite scroll
--------------------------------------------------------------*/


/* Globally hidden elements when Infinite Scroll is supported and in use. */

.infinite-scroll .posts-navigation,
.infinite-scroll.neverending .site-footer {
	display: none;
	/* Theme Footer (when set to scrolling) */
}


/* When Infinite Scroll has reached its end we need to re-display elements that were hidden (via .neverending) before. */

.infinity-end.neverending .site-footer {
	display: block;
}


/*--------------------------------------------------------------
# Media
--------------------------------------------------------------*/

.page-content .wp-smiley,
.entry-content .wp-smiley,
.comment-content .wp-smiley {
	border: none;
	margin-bottom: 0;
	margin-top: 0;
	padding: 0;
}


/* Make sure embeds and iframes fit their containers. */

embed,
iframe,
object {
	max-width: 100%;
}


/* Make sure logo link wraps around logo image. */

.custom-logo-link {
	display: inline-block;
}


/*--------------------------------------------------------------
## Captions
--------------------------------------------------------------*/

.wp-caption {
	margin-bottom: 1.5em;
	max-width: 100%;
}

.wp-caption img[class*="wp-image-"] {
	display: block;
	margin-left: auto;
	margin-right: auto;
}

.wp-caption .wp-caption-text {
	margin: 0.8075em 0;
}

.wp-caption-text {
	text-align: left;
}


/*--------------------------------------------------------------
## Galleries
--------------------------------------------------------------*/

.gallery {
	display: grid;
	display: -ms-grid;
	grid-gap: 25px;
	margin-bottom: 1.5em;
}

.gallery-item {
	display: inline-block;
	text-align: center;
	width: 100%;
}

.gallery.gallery-columns-2 {
	-ms-grid-columns: repeat(2, 1fr);
	grid-template-columns: repeat(2, 1fr);
}

.gallery.gallery-columns-3 {
	-ms-grid-columns: repeat(3, 1fr);
	grid-template-columns: repeat(3, 1fr);
}

.gallery-columns-4 {
	-ms-grid-columns: repeat(4, 1fr);
	grid-template-columns: repeat(4, 1fr);
}

.gallery-columns-5 {
	-ms-grid-columns: repeat(5, 1fr);
	grid-template-columns: repeat(5, 1fr);
}

.gallery-columns-6 {
	-ms-grid-columns: repeat(6, 1fr);
	grid-template-columns: repeat(6, 1fr);
}

.gallery-columns-7 {
	-ms-grid-columns: repeat(7, 1fr);
	grid-template-columns: repeat(7, 1fr);
}

.gallery-columns-8 {
	-ms-grid-columns: repeat(8, 1fr);
	grid-template-columns: repeat(8, 1fr);
}

.gallery-columns-9 {
	-ms-grid-columns: repeat(9, 1fr);
	grid-template-columns: repeat(9, 1fr);
}

.gallery-caption {
	display: block;
}
