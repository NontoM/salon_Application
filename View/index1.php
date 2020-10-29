<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <title>YIYO</title>
</head>
<style>
/*body{
    background-color: #d281b5;
}*/
.navbar{
    /*border-bottom: 1px solid  #36a1d4;*/
}
.navbar.navbar-3 .navbar-toggler-icon {
background-image: url('https://mdbootstrap.com/img/svg/hamburger1.svg?color=36a1d4');
}
.navbar-nav{
float:right;
border: 1px solid #36a1d4;
padding: 10px;
margin-top:20px;
}
.container{
    background-color: #36a1d4;
}

html,
body {
	height: 100%;
	font-family: "Roboto", sans-serif;
	-webkit-font-smoothing: antialiased;
	font-smoothing: antialiased;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	margin: 0;
	color: #322429;
	font-weight: 700;
}

h1 {
	font-size: 70px;
}

h2 {
	font-size: 36px;
}

h3 {
	font-size: 30px;
}

h4 {
	font-size: 24px;
}

h5 {
	font-size: 18px;
}

h6 {
	font-size: 16px;
}

p {
	font-size: 15px;
	color: #6a6a6a;
	line-height: 2;
}

img {
	max-width: 100%;
}

input:focus,
select:focus,
button:focus,
textarea:focus {
	outline: none;
}

a:hover,
a:focus {
	text-decoration: none;
	outline: none;
}

ul,
ol {
	padding: 0;
	margin: 0;
}

/*---------------------
Helper CSS
 -----------------------*/

.section-title {
	text-align: center;
	margin-bottom: 65px;
}

.section-title h2 {
	font-size: 72px;
}

.section-title p {
	padding: 25px 30px 10px;
	margin-bottom: 0;
}

.set-bg {
	background-repeat: no-repeat;
	background-size: cover;
	background-position: top center;
}

.spad {
	padding-top: 110px;
	padding-bottom: 110px;
}

.text-white h1,
.text-white h2,
.text-white h3,
.text-white h4,
.text-white h5,
.text-white h6,
.text-white p,
.text-white span,
.text-white li,
.text-white a {
	color: #fff;
}

/*---------------------
Commom elements
 -----------------------*/

/* buttons */

.site-btn {
	display: inline-block;
	border: none;
	padding: 21px 44px;
	min-width: 156px;
	font-size: 16px;
	background: #ff000a;
	color: #fff;
	line-height: normal;
	cursor: pointer;
	text-transform: uppercase;
	text-align: center;
}

.site-btn:hover {
	color: #fff;
}

.site-btn.sb-light {
	background: #fff;
	color: #241e1e;
}

.site-btn.sb-big {
	font-weight: 700;
	font-family: "Lato", sans-serif;
	padding: 21px 48px;
}

/* Preloder */

#preloder {
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	z-index: 999999;
	background: #000;
}

.loader {
	width: 40px;
	height: 40px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin-top: -13px;
	margin-left: -13px;
	border-radius: 60px;
	animation: loader 0.8s linear infinite;
	-webkit-animation: loader 0.8s linear infinite;
}

@keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
		transform: rotate(0deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
	50% {
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg);
		border: 4px solid #673ab7;
		border-left-color: transparent;
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
}

@-webkit-keyframes loader {
	0% {
		-webkit-transform: rotate(0deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
	50% {
		-webkit-transform: rotate(180deg);
		border: 4px solid #673ab7;
		border-left-color: transparent;
	}
	100% {
		-webkit-transform: rotate(360deg);
		border: 4px solid #f44336;
		border-left-color: transparent;
	}
}

/*------------------
Header section
 ---------------------*/

.header-section {
	position: absolute;
	width: 100%;
	left: 0;
	top: 0;
	padding: 0 53px;
	background: rgba(0, 0, 0, 0.7);
	z-index: 999;
}

.header-section.header-bg-2 {
	background: rgba(34, 34, 34, 0.83);
}

.header-nav {
	text-align: right;
	padding-top: 35px;
}

.site-logo {
	float: left;
	display: inline-block;
	padding: 39px 0;
}

.main-menu {
	display: inline-block;
	padding-right: 30px;
}

.main-menu li {
	display: inline-block;
	position: relative;
}

.main-menu li a {
	display: block;
	font-size: 16px;
	color: #ffffff;
	font-family: "Lato", sans-serif;
	padding: 0 1px 5px;
	border-bottom: 2px solid transparent;
	margin-right: 45px;
	-webkit-transition: 0.3s;
	transition: 0.3s;
}

.main-menu li a:hover,
.main-menu li a.active {
	border-bottom: 2px solid #ff000a;
}

.main-menu li:hover>.sub-menu {
	visibility: visible;
	opacity: 1;
	margin-top: 20px;
}

.main-menu .sub-menu {
	position: absolute;
	list-style: none;
	width: 220px;
	left: 0;
	top: 100%;
	text-align: left;
	padding: 20px 0;
	visibility: hidden;
	opacity: 0;
	margin-top: 50px;
	background: #fff;
	z-index: 99;
	-webkit-transition: all 0.4s;
	transition: all 0.4s;
	-webkit-box-shadow: 2px 7px 20px rgba(0, 0, 0, 0.15);
	box-shadow: 2px 7px 20px rgba(0, 0, 0, 0.15);
}

.main-menu .sub-menu::before {
	position: absolute;
	content: "";
	left: 15px;
	top: -7px;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
	border-bottom: 7px solid #fff;
}

.main-menu .sub-menu:after {
	position: absolute;
	content: "";
	width: 100%;
	height: 20px;
	left: 0;
	top: -20px;
}

.main-menu .sub-menu li {
	display: block;
}

.main-menu .sub-menu li a {
	display: block;
	color: #000;
	margin-right: 0;
	padding: 5px 20px;
	border-bottom: none;
}

.main-menu .sub-menu li a:hover {
	color: #ff000a;
}

.header-right {
	display: inline-block;
}

.header-right a {
	color: #fff;
	font-size: 16px;
	font-family: "Lato", sans-serif;
	display: inline-block;
}

.header-right .register {
	border: 2px solid #fff;
	min-width: 130px;
	text-align: center;
	padding: 8px 15px;
	margin-left: 25px;
}

.slicknav_menu {
	display: none;
}

/* ----------------
Hero section
 -------------------*/

.hero-section {
	height: 824px;
	padding-top: 325px;
}

.hero-warp {
	padding: 27px 48px 31px;
	background: rgba(34, 36, 43, 0.83);
}

.main-search-form {
	font-family: "Lato", sans-serif;
}

.main-search-form p {
	font-size: 12px;
	color: #b6b6b6;
	font-style: italic;
	margin-bottom: 0;
}

.search-type .st-item {
	display: inline-block;
}

.search-type .st-item input {
	position: absolute;
	visibility: hidden;
	opacity: 0;
	z-index: -1;
}

.search-type .st-item input:checked+label {
	padding: 11px 30px;
	background: #ff000a;
}

.search-type .st-item input:checked+label:after {
	bottom: -15px;
	opacity: 1;
	-webkit-transition: all 0.2s ease 0.3s;
	transition: all 0.2s ease 0.3s;
}

.search-type label {
	position: relative;
	font-family: "Lato", sans-serif;
	font-weight: 700;
	color: #fff;
	padding: 11px 10px;
	margin-right: 15px;
	margin-bottom: 15px;
	cursor: pointer;
	text-align: center;
	-webkit-transition: all 0.4s;
	transition: all 0.4s;
}

.search-type label:after {
	position: absolute;
	content: "";
	bottom: -25px;
	left: calc(50% - 4px);
	border-left: 4px solid transparent;
	border-right: 4px solid transparent;
	border-bottom: 7px solid #fff;
	opacity: 0;
}

.search-input {
	position: relative;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	margin-bottom: 23px;
}

.search-input input {
	width: calc(100% - 156px);
	height: 71px;
	padding-left: 47px;
	color: #3a3a3a;
	font-style: italic;
	border: none;
}

.search-input.si-v-2 input {
	width: calc(100% - 384px);
}

.search-input.si-v-2 .sb-light {
	margin-left: 25px;
	min-width: 203px;
}

/* ----------------
Intro section
 -------------------*/

.intro-first {
	margin-bottom: 98px;
}

.about-text h3 {
	margin-bottom: 30px;
}

.about-text h2 {
	font-size: 72px;
	line-height: 1;
	margin-bottom: 35px;
}

.about-text p {
	margin-bottom: 25px;
}

.readmore-btn {
	display: inline-block;
	font-size: 18px;
	font-weight: 700;
	color: #ff000a;
	border-bottom: 1px solid #ff000a;
	line-height: 1;
}

.readmore-btn:hover {
	color: #ff000a;
}

/* ----------------
Hero section
 -------------------*/

.property-section {
	padding-bottom: 52px;
}

.property-section .section-title {
	margin-bottom: 90px;
}

.property-item {
	margin-bottom: 55px;
}

.property-item img {
	min-width: 100%;
}

.property-item .pi-image {
	position: relative;
	margin-bottom: 35px;
}

.property-item .pi-badge {
	position: absolute;
	left: 0;
	top: 0;
	min-width: 87px;
	padding: 13px 10px 0;
	height: 50px;
	text-align: center;
	font-size: 18px;
	font-weight: 700;
	color: #fff;
}

.property-item .pi-badge.new {
	background: #ff000a;
}

.property-item .pi-badge.offer {
	background: #ffba00;
}

.property-item h3 {
	margin-bottom: 10px;
}

.property-item h5 {
	margin-bottom: 25px;
}

.property-item p {
	margin-bottom: 20px;
}

/* ----------------
Loan section
 -------------------*/

.loan-section {
	padding: 0 54px;
}

.loan-warp {
	background: #22242b;
	padding: 95px 0 110px;
}

.loan-form {
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	max-width: 878px;
	margin: 0 auto;
}

.loan-form input {
	width: 100%;
	height: 61px;
	padding: 10px 25px;
	color: #3a3a3a;
	font-size: 16px;
	font-style: italic;
	border: none;
	margin-right: 30px;
}

/* ----------------
Footer section
 -------------------*/

.footer-section {
	padding: 110px 0 0;
	background: #22242b;
}

.footer-widger {
	margin-bottom: 60px;
}

.footer-widger h2 {
	font-size: 18px;
	font-weight: 500;
	padding-top: 65px;
	margin-bottom: 33px;
}

.footer-widger ul {
	list-style: none;
}

.footer-widger ul li a {
	font-size: 16px;
	display: inline-block;
	margin-bottom: 13px;
	opacity: 0.7;
}

.about-widget {
	margin-right: 41px;
	border-right: 2px solid #45484e;
}

.about-widget img {
	margin-bottom: 40px;
}

.about-widget .aw-text {
	max-width: 260px;
}

.about-widget .aw-text p {
	padding-right: 15px;
	margin-bottom: 35px;
}

.copyright {
	text-align: right;
	font-size: 12px;
	text-transform: uppercase;
	color: #676767;
	font-family: "Lato", sans-serif;
	padding: 5px 0 35px;
}

/* ----------------
Other Pages
 -------------------*/

.page-top-section {
	height: 410px;
	padding: 152px 15px 0;
}

.page-top-warp {
	max-width: 1280px;
	margin: 0 auto;
}

/* ----------------
About page
 -------------------*/

.sell-section {
	padding: 0 54px;
}

.sell-section .section-title {
	margin-bottom: 100px;
}

.sell-item {
	text-align: center;
	margin-bottom: 40px;
}

.sell-item .si-icon {
	width: 71px;
	height: 71px;
	margin-bottom: 33px;
	border-radius: 50%;
	background: #ff000a;
	display: -webkit-inline-box;
	display: -ms-inline-flexbox;
	display: inline-flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
}

.sell-item .si-icon span {
	font-size: 24px;
	font-weight: 700;
}

.sell-item h3 {
	font-family: "Lato", sans-serif;
	font-weight: 900;
	margin-bottom: 20px;
}

.sell-item p {
	opacity: 0.7;
}

.agents-section {
	padding-bottom: 80px;
}

.agents-section .section-title {
	margin-bottom: 70px;
}

.agent-item {
	text-align: center;
	margin-bottom: 30px;
}

.agent-item .ai-text {
	padding: 0 5px;
}

.agent-item img {
	min-width: 100%;
	margin-bottom: 35px;
}

.agent-item h4 {
	margin-bottom: 20px;
}

.agent-item p {
	margin-bottom: 25px;
}

/* ----------------
Blog page
 -------------------*/

.blog-item {
	margin-bottom: 58px;
}

.blog-item img {
	min-width: 100%;
}

.blog-item .blog-date {
	font-size: 16px;
	font-weight: 700;
	color: #6a6a6a;
	margin-bottom: 5px;
}

.blog-item h4 {
	margin-bottom: 20px;
}

.blog-item .blog-text {
	padding: 24px 22px 30px;
	background: #f5f8fa;
}

.blog-item.feature-blog {
	background: #f5f8fa;
}

.blog-item.feature-blog .blog-text {
	padding-top: 60px;
}

.blog-item.feature-blog h4 {
	margin-bottom: 30px;
}

.site-pagination {
	padding-top: 20px;
}

.site-pagination a {
	display: inline-block;
	color: #6a6a6a;
	font-size: 15px;
	text-align: center;
	padding: 4px 0;
	margin-right: 3px;
}

.site-pagination a.active {
	color: #fff;
	background: #ff000a;
	padding: 4px 5px;
}

/* -------------------
 Search Result Page
 ----------------------*/

.search-result-map {
	height: 100%;
	background: #ddd;
	position: relative;
}

.search-result-map iframe {
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
}

.search-results {
	padding: 55px 64px 90px;
}

.search-results .property-item h5 {
	margin-bottom: 8px;
}

.search-results .filter-btn {
	list-style: none;
	margin-bottom: 70px;
}

.search-results .filter-btn li {
	display: inline-block;
	margin-right: 38px;
	font-family: "Lato", sans-serif;
	padding: 15px;
	font-size: 16px;
	font-weight: 700;
	text-transform: uppercase;
	color: #322429;
	cursor: pointer;
}

.search-results .filter-btn li.active {
	color: #ff000a;
}

.search-results .load-more {
	min-width: 205px;
}

.property-item .pi-metas {
	margin-bottom: 20px;
}

.property-item .pi-meta {
	display: inline-block;
	position: relative;
	font-size: 15px;
	color: #6a6a6a;
	padding-right: 15px;
	margin-right: 14px;
	margin-bottom: 10px;
}

.property-item .pi-meta:last-child {
	margin-right: 0;
	padding-right: 0;
}

.property-item .pi-meta:last-child:after {
	display: none;
}

.property-item .pi-meta:after {
	position: absolute;
	content: "|";
	right: 0;
	top: 0;
	font-size: 15px;
	color: #6a6a6a;
}

/* ---------------------
Single Property Page
 ------------------------*/

.single-property .sp-image {
	position: relative;
	margin-bottom: 50px;
}

.single-property .sp-badge {
	position: absolute;
	left: 0;
	top: 0;
	min-width: 87px;
	padding: 13px 10px 0;
	height: 50px;
	text-align: center;
	font-size: 18px;
	font-weight: 700;
	color: #fff;
}

.single-property .sp-badge.new {
	background: #ff000a;
}

.single-property .sp-badge.offer {
	background: #ffba00;
}

.single-property .pi-metas {
	padding-top: 20px;
}

.single-property .pi-meta {
	display: inline-block;
	position: relative;
	font-size: 15px;
	color: #584d51;
	padding-right: 15px;
	margin-right: 14px;
	margin-bottom: 10px;
	font-weight: 700;
}

.single-property .pi-meta:last-child {
	margin-right: 0;
	padding-right: 0;
}

.single-property .pi-meta:last-child:after {
	display: none;
}

.single-property .pi-meta:after {
	position: absolute;
	content: "|";
	right: 0;
	top: 0;
	font-size: 15px;
	color: #584d51;
	font-weight: 700;
}

.property-header {
	margin-bottom: 45px;
	margin-bottom: 35px;
}

.property-header h3 {
	margin-bottom: 10px;
}

.property-header h5 {
	font-weight: 500;
	color: #6a6a6a;
}

.property-header p {
	line-height: 1;
	margin-bottom: 0;
}

.property-info-bar {
	padding: 11px 29px 13px;
	margin-bottom: 40px;
	border-top: 2px solid #dfe5e8;
	background: #f5f8fa;
}

.offer-btn {
	display: inline-block;
	text-align: center;
	min-width: 260px;
	padding: 15px 44px;
	font-size: 18px;
	font-weight: 700;
	text-transform: none;
	color: #322429;
	border: 2px solid #475069;
	background: #fff;
}

.offer-btn:hover {
	color: #322429;
}

.property-text h4 {
	margin-bottom: 25px;
}

.property-text p {
	margin-bottom: 35px;
}

.property-feature .pf-box {
	margin-bottom: 30px;
}

.property-feature .pf-box h6 {
	margin-bottom: 5px;
}

.property-feature .pf-box p {
	font-size: 16px;
	margin-bottom: 0;
}

.video-item {
	position: relative;
	margin-top: 10px;
	margin-bottom: 61px;
}

.video-item .video-play {
	position: absolute;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	width: 110px;
	height: 56px;
	left: calc(50% - 55px);
	top: calc(50% - 28px);
	border-radius: 24px;
	font-size: 17px;
	color: #ff000a;
	background: #fff;
}

.loan-calculator {
	padding: 53px 37px 44px;
	background: #f5f8fa;
}

.loan-calculator h4 {
	margin-bottom: 35px;
}

.loan-calculator input {
	width: 100%;
	height: 56px;
	padding: 0 23px;
	color: #3a3a3a;
	font-size: 14px;
	border: none;
	margin-bottom: 28px;
}

.loan-calculator .loan-cal-result {
	text-align: center;
	font-size: 18px;
	font-weight: 700;
	padding: 20px 15px;
	margin-bottom: 28px;
	line-height: 1;
	background: #fff;
}

.agent-widget {
	margin-bottom: 37px;
}

.agent-widget img {
	min-width: 100%;
}

.agent-widget h4 {
	margin-bottom: 10px;
}

.agent-widget h6 {
	color: #6a6a6a;
	margin-bottom: 25px;
}

.agent-widget p {
	margin-bottom: 30px;
}

.agent-widget .aw-text {
	padding: 35px 26px 45px;
	text-align: center;
	background: #f5f8fa;
}

.map-widget {
	position: relative;
	height: 407px;
}

.map-widget iframe {
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
}

/* ----------------
Contact Page
 ---------------------*/

.contact-section {
	padding: 100px 0;
}

.contact-section .section-title {
	margin-bottom: 50px;
}

.contact-text {
	padding-right: 95px;
}

.contact-info-box {
	text-align: center;
	padding-top: 60px;
}

.contact-info-box .ci-icon {
	display: -webkit-inline-box;
	display: -ms-inline-flexbox;
	display: inline-flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	justify-content: center;
	width: 107px;
	height: 107px;
	margin-bottom: 26px;
	border-radius: 50%;
	background: #000000;
}

.contact-info-box .ci-icon span {
	font-size: 36px;
	font-weight: 700;
	color: #fff;
}

.contact-info-box h4 {
	margin-bottom: 15px;
}

.contact-form {
	padding: 61px 33px;
	margin-top: 50px;
	background: #f5f8fa;
	text-align: center;
}

.contact-form input,
.contact-form textarea {
	width: 100%;
	height: 56px;
	padding: 0 23px;
	font-size: 14px;
	color: #3a3a3a;
	border: none;
	margin-bottom: 28px;
	background: #fff;
}

.contact-form textarea {
	height: 233px;
	padding: 20px 23px 10px;
	resize: none;
	margin-bottom: 35px;
}

.contact-form .site-btn {
	min-width: 335px;
}

/* ----------------
Responsive
 ---------------------*/

@media (min-width: 1200px) {
	.container {
		max-width: 1176px;
	}
}

/* Medium screen : 992px. */

@media only screen and (min-width: 992px) and (max-width: 1199px) {
	.section-title h2,
	.about-text h2 {
		font-size: 65px;
	}
	.main-menu li a {
		margin-right: 20px;
	}
	.about-widget {
		margin-right: 15px;
	}
	.search-result-map {
		height: 600px;
	}
	.search-results {
		padding: 55px 30px 90px;
	}
	.offer-btn {
		min-width: 205px;
	}
	.contact-text {
		padding-right: 40px;
	}
	.blog-item.feature-blog .blog-text {
		padding-top: 15px;
		padding-bottom: 15px;
	}
	.blog-item.feature-blog h4 {
		margin-bottom: 15px;
	}
}

/* Tablet :768px. */

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.header-section {
		padding: 0 15px;
	}
	.main-menu {
		padding-right: 15px;
	}
	.main-menu li a {
		margin-right: 15px;
	}
	.header-right .register {
		min-width: 110px;
		margin-left: 10px;
	}
	.about-text {
		margin-top: 40px;
	}
	.hero-warp {
		padding: 25px 30px 29px;
	}
	.search-type label {
		margin-right: 5px;
	}
	.search-type .st-item input:checked+label {
		padding: 11px 15px;
	}
	.section-title h2,
	.about-text h2 {
		font-size: 55px;
	}
	.loan-form {
		display: block;
		text-align: center;
		padding: 0 50px;
	}
	.loan-form input {
		margin-bottom: 30px;
	}
	.about-widget {
		border-right: none;
	}
	.about-widget .aw-text {
		max-width: 100%;
	}
	.footer-widger h2 {
		padding-top: 0;
	}
	.page-top-section {
		height: auto;
		padding-bottom: 80px;
	}
	.sell-section {
		padding: 0 20px;
	}
	.search-result-map {
		height: 600px;
	}
	.sidebar {
		padding-top: 50px;
	}
	.contact-text {
		padding-right: 0;
	}
}

/* Large Mobile :480px. */

@media only screen and (max-width: 767px) {
	.header-section {
		padding: 0 15px;
	}
	.site-logo {
		padding: 26px 0;
	}
	.header-nav {
		display: none;
	}
	.slicknav_menu {
		padding: 0;
		display: block;
		background: transparent;
	}
	.slicknav_menu .header-right-warp {
		padding: 10px 0;
		padding-right: 10px;
		border-bottom: 1px solid #111;
		text-align: right;
	}
	.slicknav_menu .header-right .login {
		border-bottom: none;
	}
	.slicknav_menu .header-right .register {
		margin-left: 0;
	}
	.slicknav_menu .header-right a:hover {
		background: transparent;
		color: #fff;
	}
	.slicknav_btn {
		background: #616161;
		margin-top: 29px;
	}
	.slicknav_nav {
		background: #22242b;
		margin-bottom: 30px;
	}
	.slicknav_nav a {
		margin: 0;
		padding: 10px 20px;
		border-bottom: 1px solid #111;
	}
	.slicknav_nav a:hover {
		color: #ff000a;
		border-radius: 0;
		background: #0b0e25;
	}
	.slicknav_nav .slicknav_row {
		padding: 10px 20px;
		margin: 0;
	}
	.slicknav_row a {
		border-bottom: none;
	}
	.slicknav_nav .slicknav_row:hover {
		border-radius: 0;
		background: #0b0e25;
	}
	.slicknav_parent.slicknav_open {
		background: #0b0e25;
		color: #ff000a;
	}
	.hero-section {
		height: auto;
		padding-top: 250px;
		padding-bottom: 100px;
	}
	.hero-warp {
		padding: 25px 20px 29px;
	}
	.about-text {
		margin-top: 40px;
	}
	.search-type label {
		margin-right: 5px;
	}
	.search-type .st-item input:checked+label {
		padding: 11px;
	}
	.search-input {
		display: block;
	}
	.search-input input,
	.search-input.si-v-2 input {
		width: 100%;
		padding: 0 20px;
		margin-bottom: 20px;
	}
	.section-title h2,
	.about-text h2 {
		font-size: 45px;
	}
	.loan-section {
		padding: 0 15px;
	}
	.loan-form {
		display: block;
		text-align: center;
		padding: 0 15px;
	}
	.loan-form input {
		margin-bottom: 30px;
	}
	.about-widget {
		border-right: none;
	}
	.about-widget .aw-text {
		max-width: 100%;
	}
	.footer-widger h2 {
		padding-top: 0;
	}
	.copyright {
		text-align: center;
	}
	.page-top-section {
		height: auto;
		padding-bottom: 80px;
	}
	.search-input.si-v-2 {
		margin-bottom: 0;
	}
	.search-input.si-v-2 .site-btn {
		margin: 0 25px 25px 0;
	}
	.search-results {
		padding: 55px 30px 90px;
	}
	.search-results .filter-btn li {
		margin-right: 10px;
	}
	.search-result-map {
		height: 500px;
	}
	.sidebar {
		padding-top: 50px;
	}
	.contact-text {
		padding-right: 0;
	}
	.sell-section {
		padding: 0 15px;
	}
}

/* Small Mobile :320px. */

@media only screen and (max-width: 479px) {
	.section-title h2,
	.about-text h2 {
		font-size: 38px;
	}
	.search-type label:after {
		display: none;
	}
	.section-title p {
		padding: 25px 0 10px;
	}
	.about-widget {
		margin-right: 0;
	}
	.site-btn.sb-big {
		padding: 21px 25px;
	}
	.search-results {
		padding: 55px 15px 90px;
	}
	.search-results .filter-btn li {
		margin-right: 0;
	}
	.property-info-bar {
		padding: 11px 15px 13px;
	}
	.loan-calculator {
		padding: 30px 15px 25px;
	}
	.contact-form {
		padding: 50px 20px;
	}
	.contact-form .site-btn {
		min-width: auto;
	}
}
</style>
<body>
<!--Navbar-->
<nav class="navbar navbar-light navbar-3">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#">Y!YO</a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent15"
    aria-controls="navbarSupportedContent15" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent15">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Customer Support</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <!-- Links -->
  </div>
  <!-- Collapsible content -->
</nav>
<!--/.Navbar-->

<section class="hero-section set-bg" data-setbg="img/hero-bg.jpg">
		<div class="container">
			<div class="hero-warp">
				<form class="main-search-form">
					<div class="search-type">
						<div class="st-item">
							<input type="radio" name="st" id="buy" checked>
							<label for="buy">Buy</label>
						</div>
						<div class="st-item">
							<input type="radio" name="st" id="rent">
							<label for="rent">Rent</label>
						</div>
						<div class="st-item">
							<input type="radio" name="st" id="sell">
							<label for="sell">Sell</label>
						</div>
						<div class="st-item">
							<input type="radio" name="st" id="property">
							<label for="property">Property Value</label>
						</div>
						<div class="st-item">
							<input type="radio" name="st" id="agents">
							<label for="agents">Agents</label>
						</div>                                                           
					</div>
					<div class="search-input">
						<input type="text" placeholder="Search by state, postcode or suburb">
						<button class="site-btn">Search</button>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
				</form>
			</div>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- Intro Section end -->
	<section class="intro-section spad">
		<div class="container">
			<div class="section-title">
				<h2>Sell Faster. Save Thousands.</h2>
			</div>
			<div class="row intro-first">
				<div class="col-lg-6 order-lg-2">
					<img src="img/about/1.jpg" alt="">
				</div>
				<div class="col-lg-6 order-lg-1">
					<div class="about-text">
						<h3>We charge 2% total. No hidden fees or upfront costs.</h3>
						<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl a, auctor euismod purus. Morbi pretium interdum vestibulum. Fusce nec eleifend ipsum. Sed non blandit tellus.</p>
						<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<img src="img/about/2.jpg" alt="">
				</div>
				<div class="col-lg-6 ">
					<div class="about-text">
						<h3>How Much Can You Save? We work for you, not commission.</h3>
						<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl a, auctor euismod purus. Morbi pretium interdum vestibulum. Fusce nec eleifend ipsum. Sed non blandit tellus.</p>
						<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro Section end -->

	<!-- Property Section -->
	<section class="property-section">
		<div class="container">
			<div class="section-title">
				<h2>Recently Add Homes</h2>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="property-item">
						<div class="pi-image">
							<img src="img/property/1.jpg" alt="">
							<div class="pi-badge new">New</div>
						</div>
						<h3>$469,000</h3>
						<h5>3 Bedrooms Townhouse</h5>
						<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora.</p>
						<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="property-item">
						<div class="pi-image">
							<img src="img/property/2.jpg" alt="">
							<div class="pi-badge offer">Offer</div>
						</div>
						<h3>$369,000</h3>
						<h5>3 Bedrooms Townhouse</h5>
						<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora.</p>
						<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="property-item">
						<div class="pi-image">
							<img src="img/property/3.jpg" alt="">
							<div class="pi-badge new">New</div>
						</div>
						<h3>$560,000</h3>
						<h5>3 Bedrooms Townhouse</h5>
						<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora.</p>
						<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Property Section end -->

	<!-- Loan Section end -->
	<section class="loan-section">
		<div class="loan-warp">
			<div class="container">
				<div class="section-title text-white">
					<h2>See If You Qualify for a Mortgage</h2>
					<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl a, auctor euismod purus. Morbi pretium interdum vestibulum. Fusce nec eleifend ipsum. Sed non blandit tellus. </p>
				</div>
				<form class="loan-form">
					<input type="text" placeholder="Your income">
					<input type="text" placeholder="Amount needed">
					<button class="site-btn">Submit</button>
				</form>
			</div>
		</div>
	</section>
	<!-- Loan Section end -->

	<!-- Stories Section end -->
	<section class="stories-section spad">
		<div class="container">
			<div class="row ">
				<div class="col-lg-5 order-lg-2">
					<img class="w-100" src="img/about/3.jpg" alt="">
				</div>
				<div class="col-lg-7 order-lg-1">
					<div class="about-text">
						<h2>Seller Success Stories</h2>
						<p>Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora. Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Ut gravida mattis magna, non varius lorem sodales nec. In libero orci, ornare non nisl a, auctor euismod purus. Morbi pretium interdum vestibulum. Fusce nec eleifend ipsum. Sed non blandit tellus. </p>
						<a href="#" class="readmore-btn">Find out more</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Stories Section end -->

	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row text-white">
				<div class="col-lg-4">
					<div class="footer-widger">
						<div class="about-widget">
							<div class="aw-text">
								<img src="img/footer-logo.png" alt="">
								<p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae massa. Proin vulputate cong ue rutrum. Fusce lobortis a enim eget tempus. </p>
								<a href="#" class="site-btn">we are hiring</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">
						<h2>Company</h2>
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Clients</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Carrers</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">
						<h2>For Buyers</h2>
						<ul>
							<li><a href="#">Buy with us</a></li>
							<li><a href="#">Papers</a></li>
							<li><a href="#">Clients</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Homes</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">
						<h2>For Sellers</h2>
						<ul>
							<li><a href="#">Seel With us</a></li>
							<li><a href="#">What do You Need</a></li>
							<li><a href="#">Clients</a></li>
							<li><a href="#">Testimonials</a></li>
							<li><a href="#">Guideline</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">
						<h2>For Renters</h2>
						<ul>
							<li><a href="#">Rent with us</a></li>
							<li><a href="#">Guidelines</a></li>
							<li><a href="#">Apartments</a></li>
							<li><a href="#">Flats</a></li>
							<li><a href="#">Houses</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>