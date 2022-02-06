<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<!-- マテリアルアイコン　読み込み -->
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone" rel="stylesheet">
<!--==============スライドショーレイアウトを制御する独自のCSSを読み込み===============-->
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<!-- Animate.css を導入 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">



<main>

<div id="splash">
<div id="splash_logo">
  <!-- <svg version="1.1" id="mask" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="1856.5px" height="321.8px" viewBox="0 0 1856.5 321.8" style="enable-background:new 0 0 1856.5 321.8;"
   xml:space="preserve"> -->
   <svg version="1.0" id="mask" xmlns="http://www.w3.org/2000/svg"
 width="1280.000000pt" height="853.000000pt" viewBox="0 0 1280.000000 853.000000"
 preserveAspectRatio="xMidYMid meet">

   <g transform="translate(0.000000,853.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M6323 8219 c-150 -19 -274 -138 -348 -335 -29 -80 -37 -91 -73 -112
-57 -32 -151 -136 -207 -228 -26 -44 -48 -80 -49 -81 -1 -1 -52 15 -114 37
-227 80 -411 98 -682 65 -197 -23 -186 -20 -223 -75 -17 -27 -34 -50 -37 -50
-3 0 -3 27 -2 61 l4 61 -55 -7 -56 -7 -6 38 c-4 22 -8 45 -11 52 -9 31 -242
119 -489 185 -191 51 -225 57 -390 67 -87 5 -182 17 -225 28 -176 46 -175 46
-223 9 -98 -75 -204 -97 -303 -63 -44 15 -55 25 -102 96 -80 118 -135 175
-204 209 -73 37 -85 37 -174 10 -168 -52 -264 -128 -304 -241 -11 -30 -11 -39
0 -52 14 -18 148 -62 157 -52 12 11 -50 65 -93 82 l-43 16 15 36 c8 20 16 38
18 40 8 7 87 -39 124 -72 20 -18 57 -46 82 -61 24 -15 67 -46 95 -68 68 -54
127 -79 177 -75 l41 2 23 -59 c29 -75 29 -82 2 -81 -14 1 -24 -6 -26 -16 -2
-11 3 -18 11 -18 16 0 103 53 152 93 l30 25 62 -23 c34 -12 84 -38 112 -59
l51 -36 10 26 c6 14 10 31 11 37 0 7 9 -19 19 -58 18 -68 22 -73 115 -163 l96
-92 32 16 c57 29 56 28 35 110 -10 42 -18 79 -16 83 2 4 18 4 36 -1 30 -8 32
-11 32 -52 0 -23 7 -64 16 -90 l17 -48 44 108 c24 60 48 113 53 118 5 4 25
-17 46 -48 20 -31 47 -59 58 -62 12 -2 56 -13 100 -23 l78 -19 -6 45 c-3 24
-2 42 3 39 11 -7 31 -87 31 -124 0 -26 8 -34 58 -63 31 -17 76 -47 100 -65 49
-37 304 -287 457 -446 70 -74 130 -124 200 -170 113 -74 146 -106 171 -163
l18 -40 8 60 c5 33 8 89 6 125 -3 61 -8 72 -78 185 -41 66 -120 190 -175 275
-123 188 -148 230 -141 230 3 0 35 -38 71 -85 78 -99 135 -151 178 -161 30 -6
30 -6 9 -23 l-21 -16 49 -100 48 -100 1 84 1 85 46 -95 c48 -100 95 -179 105
-179 4 0 11 44 16 98 l9 97 15 -35 c14 -31 14 -39 1 -75 -20 -54 -19 -247 2
-342 13 -60 26 -86 75 -152 32 -44 76 -108 97 -143 45 -75 48 -78 97 -78 34 0
38 3 44 30 3 17 9 30 12 30 16 0 72 -177 69 -215 l-3 -40 -39 53 c-21 29 -73
79 -116 112 -46 35 -90 79 -109 109 -33 51 -109 127 -118 117 -7 -7 25 -101
54 -160 14 -27 19 -45 11 -40 -7 4 -48 32 -91 62 -43 30 -79 53 -81 51 -5 -6
14 -150 25 -192 6 -21 25 -55 43 -75 29 -32 36 -50 49 -132 29 -170 50 -428
43 -535 -9 -146 -10 -149 -67 -175 -27 -13 -46 -26 -43 -29 3 -3 35 -15 70
-28 36 -12 91 -36 121 -55 72 -43 162 -124 169 -153 3 -13 -2 -48 -12 -80 -11
-35 -14 -59 -8 -63 5 -4 63 -43 129 -88 178 -120 266 -194 323 -270 29 -38 52
-72 52 -76 0 -10 -130 -103 -177 -127 -34 -17 -60 -21 -136 -21 l-94 0 -6 74
c-6 82 -36 162 -73 197 -13 12 -26 21 -28 18 -7 -8 -36 -227 -36 -274 0 -26
-3 -45 -8 -43 -48 20 -161 92 -166 105 -4 9 -2 71 4 137 14 158 -4 254 -54
295 -13 11 -17 11 -20 0 -13 -40 -14 -101 -4 -160 10 -61 8 -74 -16 -155 -26
-87 -26 -89 -8 -114 10 -14 44 -42 74 -62 53 -35 56 -39 68 -100 19 -97 29
-110 128 -161 163 -84 373 -141 566 -153 53 -3 117 -15 153 -27 l62 -21 20 25
c41 53 122 97 226 124 111 29 247 90 430 195 68 39 161 88 207 110 80 37 85
42 134 117 28 43 59 94 69 113 10 19 19 37 21 39 2 2 30 -21 63 -52 32 -31 54
-58 48 -60 -5 -1 5 -41 25 -92 20 -50 39 -104 42 -121 7 -31 20 -42 168 -138
l27 -18 9 34 10 33 14 -35 c8 -19 18 -44 22 -54 8 -22 5 -25 76 73 l54 74 13
-29 c19 -46 16 -55 -41 -114 l-55 -55 15 -65 c25 -113 43 -140 90 -140 10 0
28 -10 41 -22 13 -12 25 -20 27 -17 2 2 1 31 -2 63 -7 59 -7 59 -49 75 -49 17
-51 21 -24 45 35 32 161 63 161 40 0 -4 -16 -27 -37 -52 -30 -37 -34 -46 -21
-53 49 -28 59 -44 68 -117 10 -76 27 -119 61 -150 20 -19 20 -19 -17 -51 -20
-18 -61 -48 -91 -69 l-55 -36 32 -26 31 -26 -80 -68 c-44 -38 -105 -83 -135
-102 -30 -18 -105 -68 -168 -112 -62 -43 -148 -98 -192 -121 -43 -24 -153 -92
-244 -153 -91 -60 -187 -121 -215 -134 -27 -14 -156 -102 -287 -195 -224 -159
-239 -172 -259 -218 -22 -51 -26 -71 -14 -71 3 0 45 21 92 46 47 26 80 39 72
30 -27 -33 -151 -86 -201 -86 l-47 0 -6 51 c-5 37 -15 60 -38 87 -68 77 -158
325 -138 380 12 31 5 56 -53 197 -91 221 -114 263 -182 333 -83 87 -136 181
-206 367 -11 29 -11 29 -49 -55 -39 -87 -88 -176 -122 -219 -37 -47 -26 -73
57 -140 89 -70 146 -141 169 -210 19 -58 58 -116 125 -186 46 -47 82 -127 65
-143 -3 -4 -35 9 -70 28 l-64 35 -178 -36 c-98 -20 -180 -32 -181 -27 -8 21
51 90 102 118 51 29 54 33 59 79 3 27 17 72 32 100 14 28 22 51 18 51 -3 0
-34 -18 -67 -39 -51 -33 -72 -40 -129 -44 l-68 -5 6 42 c4 22 9 50 11 61 3 11
-14 -17 -36 -62 -22 -46 -44 -83 -48 -83 -28 1 -52 46 -52 99 0 47 -13 59
-169 152 -78 47 -93 60 -112 102 -22 46 -22 48 -6 101 22 70 21 104 -4 161
-21 47 -21 48 -2 74 11 14 42 37 69 51 43 22 54 35 87 99 20 41 35 76 32 79
-9 9 -199 -143 -304 -243 -93 -90 -244 -265 -270 -313 -10 -19 -6 -18 90 4 56
13 109 24 119 24 11 0 23 -15 34 -44 16 -42 110 -191 158 -249 l23 -28 38 31
c32 28 37 29 37 12 0 -22 38 -173 45 -180 3 -3 23 9 46 27 l41 33 -20 -38
c-11 -22 -43 -78 -71 -127 -27 -48 -47 -87 -44 -87 3 0 48 27 100 61 90 58
136 79 176 79 18 0 17 -2 -2 -34 -13 -20 -21 -50 -21 -75 0 -50 -37 -167 -81
-252 -17 -34 -29 -62 -27 -63 2 -2 18 -8 36 -16 33 -13 34 -13 78 36 l45 49
-5 -62 c-4 -44 -16 -84 -41 -133 -19 -38 -35 -72 -35 -76 0 -3 14 -3 30 1 30
7 30 7 30 -40 0 -43 -1 -46 -22 -40 -68 20 -64 28 -44 -86 16 -89 34 -127 77
-163 l32 -27 33 31 32 32 27 -88 c21 -69 35 -96 64 -126 l38 -37 -226 -169
c-262 -195 -462 -351 -646 -502 -71 -59 -188 -149 -260 -200 -161 -116 -296
-222 -291 -228 7 -7 185 101 277 170 2340 1719 2291 1684 4014 2883 220 153
567 398 770 543 204 146 417 297 475 336 94 64 261 187 675 496 347 260 526
556 474 790 -17 76 -23 77 -120 34 -75 -34 -128 -90 -301 -319 -75 -99 -167
-214 -205 -256 -160 -179 -367 -348 -698 -570 -114 -76 -200 -143 -260 -202
-77 -75 -93 -86 -111 -78 -16 7 -31 0 -78 -39 -85 -70 -102 -72 -149 -16 -31
36 -46 46 -71 46 l-31 1 38 30 37 31 -41 49 c-23 28 -43 48 -45 47 -1 -2 1
-20 5 -41 l9 -37 -40 0 -40 0 3 42 c4 49 2 50 -154 69 l-100 12 -33 74 c-24
52 -41 76 -58 83 -44 16 -176 38 -176 28 0 -5 12 -44 26 -87 l26 -78 -23 -44
c-50 -100 -63 -113 -143 -148 -79 -35 -121 -37 -160 -8 -17 13 -18 17 -2 69 9
31 16 58 16 61 0 3 -27 -4 -61 -14 -33 -10 -69 -19 -78 -19 -17 0 -186 198
-178 207 3 2 37 -2 76 -8 63 -11 80 -10 126 5 30 9 56 20 59 24 2 4 -60 6
-137 4 l-142 -3 -70 140 -69 141 -22 -27 -21 -27 -57 34 c-31 19 -56 37 -56
40 0 3 41 57 91 120 83 104 96 116 133 123 22 5 42 10 44 12 2 2 -4 30 -13 64
l-17 60 -42 -29 c-22 -17 -113 -95 -201 -174 -88 -80 -161 -143 -164 -141 -6
7 45 77 79 110 17 16 30 37 30 48 0 26 -53 101 -128 179 -63 66 -66 68 -104
62 l-38 -7 0 99 c0 76 -5 109 -20 142 -10 23 -23 42 -28 42 -5 0 -20 -48 -34
-107 -34 -148 -53 -151 -45 -7 6 95 15 151 41 229 5 17 0 23 -29 34 -20 7 -66
39 -103 71 l-67 59 -8 -37 c-5 -20 -6 -69 -4 -108 l5 -72 -49 21 c-27 12 -51
28 -54 37 -3 9 -30 46 -61 81 -31 35 -83 100 -116 144 -33 44 -64 81 -68 83
-10 4 -71 -133 -90 -203 -15 -52 -23 -65 -66 -97 -46 -36 -52 -37 -104 -31
-30 3 -57 7 -59 10 -3 2 5 16 17 31 46 58 189 264 235 336 63 99 125 162 212
215 39 23 85 51 103 63 98 61 307 21 507 -96 76 -46 80 -47 120 -36 l41 11 94
-94 c52 -52 116 -106 142 -121 27 -16 113 -44 195 -66 82 -21 204 -54 273 -74
138 -39 283 -71 375 -81 59 -7 61 -8 135 -86 54 -57 84 -81 108 -85 17 -4 32
-7 32 -8 0 0 -9 -32 -19 -71 -11 -38 -16 -73 -13 -76 4 -4 33 -14 65 -23 l58
-17 52 28 c28 15 81 57 118 93 60 59 67 71 82 132 10 37 17 98 17 135 0 61 -4
74 -38 129 -52 86 -61 94 -96 95 -53 1 -62 11 -115 114 -54 106 -111 174 -172
205 -25 13 -69 21 -140 25 -148 9 -176 32 -304 245 -76 126 -89 140 -134 138
-67 -2 -130 50 -232 193 -82 116 -132 162 -231 211 -158 80 -295 105 -490 93
l-108 -7 0 34 c0 33 1 33 39 30 38 -4 40 -2 86 63 26 36 46 67 44 69 -2 2 -98
35 -214 74 -115 39 -266 94 -335 122 -120 49 -123 50 -70 45 30 -3 117 -21
193 -40 76 -19 167 -38 203 -41 l64 -7 0 174 c0 193 -14 280 -56 367 -62 127
-252 204 -441 181z m1252 -4245 c13 -5 14 -8 3 -15 -21 -14 -48 -10 -48 6 0
16 17 19 45 9z"/>
<path d="M6404 6084 c-32 -25 -61 -47 -62 -49 -2 -2 19 -37 47 -78 49 -74 50
-76 37 -108 -22 -53 17 -121 87 -150 27 -11 32 -10 48 10 31 38 19 99 -26 136
-28 23 -52 121 -56 228 -1 31 -5 57 -9 57 -4 0 -33 -21 -66 -46z"/>
<path d="M7060 5350 c-16 -30 7 -75 39 -75 33 0 48 27 35 62 -12 36 -57 44
-74 13z"/>
<path d="M4230 4876 c-104 -29 -160 -76 -160 -133 0 -21 5 -23 54 -23 l53 0 7
-52 7 -52 34 102 c19 56 41 115 50 132 24 46 25 45 -45 26z"/>
<path d="M4956 4731 c-11 -17 6 -41 29 -41 28 0 38 12 29 34 -7 17 -49 22 -58
7z"/>
<path d="M4263 4511 c2 -125 3 -132 27 -156 l26 -25 3 109 c2 112 -8 162 -42
189 -14 12 -15 1 -14 -117z"/>
<path d="M4467 4614 c-12 -13 -8 -92 10 -157 9 -34 18 -64 20 -66 2 -3 14 6
28 19 31 29 39 69 28 146 -8 59 -8 59 -43 62 -20 2 -39 0 -43 -4z"/>
<path d="M5152 4440 c3 -111 8 -142 24 -173 l20 -39 16 24 c23 36 38 87 38
132 0 50 -37 132 -75 166 l-27 25 4 -135z"/>
<path d="M4738 4533 l-37 -18 28 -72 c16 -40 41 -93 56 -120 l28 -47 21 27 20
27 52 -51 52 -52 11 39 c19 68 15 78 -43 117 -52 35 -54 37 -49 74 4 31 0 42
-19 60 -33 31 -76 37 -120 16z"/>
<path d="M4076 4436 c-8 -65 -7 -178 2 -236 l7 -45 14 50 c8 28 17 53 21 58 7
9 35 -112 52 -229 11 -78 11 -80 -15 -118 -32 -46 -41 -91 -34 -160 5 -49 34
-126 47 -126 4 0 15 27 25 61 l19 61 46 -52 c43 -50 47 -52 88 -49 23 3 42 1
42 -3 0 -5 -4 -8 -9 -8 -31 0 -175 -169 -158 -186 12 -12 64 12 115 54 57 46
72 45 72 -5 0 -30 4 -29 56 13 25 20 47 34 50 31 3 -3 -2 -32 -11 -65 l-17
-59 30 -58 29 -58 30 54 c41 71 64 141 70 213 6 56 5 59 -15 54 -15 -4 -26 1
-37 18 -8 13 -15 25 -15 27 0 2 18 12 40 22 22 10 40 21 40 25 0 3 -40 18 -89
33 -99 30 -96 26 -107 134 -4 35 0 94 10 151 9 50 16 97 16 102 0 6 -22 10
-50 10 -37 0 -50 4 -50 15 0 8 -21 29 -47 46 -91 62 -163 131 -212 204 l-48
73 -7 -52z"/>
<path d="M4335 4438 c3 -13 24 -59 45 -103 l39 -80 65 -18 c35 -9 67 -17 71
-17 11 0 -54 79 -134 162 -76 81 -97 94 -86 56z"/>
<path d="M7980 4341 c-19 -10 -54 -25 -77 -31 -50 -15 -54 -25 -15 -33 15 -3
51 -22 80 -41 l52 -36 0 42 c0 24 3 60 6 81 7 42 3 44 -46 18z"/>
<path d="M4989 2057 l-4 -137 58 0 c31 0 57 4 57 8 0 17 -39 119 -73 192 l-35
75 -3 -138z"/>
<path d="M3670 366 c-19 -7 -62 -13 -96 -14 -73 -2 -170 -31 -240 -71 -44 -26
-52 -35 -56 -65 -4 -35 -3 -36 47 -50 27 -8 93 -26 146 -41 l95 -28 112 32
c62 17 140 44 175 59 61 28 173 109 164 119 -3 2 -67 -21 -142 -52 -75 -31
-142 -54 -149 -52 -6 2 22 37 61 77 40 41 72 74 70 75 -34 27 -127 32 -187 11z"/>
</g>
</svg>
<!--/splash-logo--></div>
<!--/splash--></div>



<div id="particles-js"></div>
	<div id="wrapper">
		<div class="animeLogo">
			<!-- ビデオ背景 -->	
			<div id="video-area" >
				<!-- <video id="video video-area" poster="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-3-1/img/movie.jpg" webkit-playsinline playsinline muted autoplay loop> -->
				<video id="video video-area" src="/wp-content/themes/twentytwenty-child/image/Mountains.mp4" webkit-playsinline playsinline muted autoplay loop>
					<!--
						poster：動画ファイルが利用できない環境で代替表示される画像
						webkit-playsinline：iOS 9までのSafari用インライン再生指定
						playsinline：iOS 10以降のSafari用インライン再生指定
						muted：音声をミュートさせる
						autoplay：動画を自動再生させる
						loop：動画をループさせる
						controls：コントロールバーを表示する
					-->
					<source src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-3-1/video/movie.mp4" type="video/mp4">
					<source src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-3-1/video/movie.ogv" type="video/ogv">
					<source src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-3-1/video/movie.webm" type="video/webm">
					<p>動画を再生できる環境ではありません。</p>
				</video>
				<!-- アニメロゴ -->
				<div class="animeLogoString">
					<div> 
						<h1 id="moveLogo"><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger" >SURF&SNOW</span></span></h1>
					</div>
					<div>
						<h4 id="moveLogoSub"><span class="bgextendSub bgLRextendSubTrigger"><span class="bgappearSubTrigger" >スキー&スノボを楽しむための情報サイト</span></span></h4>
					</div>
				</div><!-- アニメロゴ -->		
			</div>	
		</div><!-- animeLogo -->

		<h2 style="text-align: center;">New Gallery</h2>
		<ul class="slider">
			<li><img src="/wp-content/themes/twentytwenty-child/image/110.jpg" alt=""></li>
			<li><img src="/wp-content/themes/twentytwenty-child/image/102.jpeg" alt=""></li>
			<li><img src="/wp-content/themes/twentytwenty-child/image/105.jpg" alt=""></li>
			<li><img src="/wp-content/themes/twentytwenty-child/image/106.jpg" alt=""></li>
			<li><img src="/wp-content/themes/twentytwenty-child/image/109.jpg" alt=""></li>
			<li><img src="/wp-content/themes/twentytwenty-child/image/107.jpg" alt=""></li>
		</ul><!--/slider-->

		<section class="sectionTop">
			<div style="text-align: right; " class="backInLeftTrigger">
				<h2 >おすすめスキー場</h2>
			</div>
			<div id="flex-item">
				<div id="">
					<img src="/wp-content/themes/twentytwenty-child/image/134.jpg" >
				</div>
				<div id="flex-item-child">
					<div id="pTextLeft" class="backInRightTrigger">
						<p>SURF&SNOWでは</p>
						<p>各地のおすすめスキー場を</p> 
						<p>紹介しています。</p>
						<br>
						<p>各スキー場の口コミや</p>
						<p>イベントなども紹介して</p>
						<p>います。</p>
					</div>				
				</div>
			</div>
		</section>

		<section class="sectionTop">
			<div style="text-align: left;">
				<h2 class="backInRightTrigger ">ゲレンデ情報</h2>
			</div>
			<div id="flex-item">
				<div id="flex-item-child">
					<div id="pTextRight" class="backInLeftTrigger">
						<p>SURF&SNOWでは</p>
						<p>各地のスキー場の</p> 
						<p>ゲレンデ情報を</p>
						<p>配信しています。</p>
						<br>
						<p>各スキー場の口コミや</p>
						<p>イベントなども紹介して</p>
						<p>います。</p>
					</div>				
				</div>
				<div id="" >
					<img src="/wp-content/themes/twentytwenty-child/image/ski.jpg" >
				</div>
			</div>
		</section>

		<section class="sectionTop">
			<div style="text-align: right;">
				<h2 class="backInLeftTrigger ">周辺の宿泊先</h2>
			</div>
			<div id="flex-item">
				<div id="" >
					<img src="/wp-content/themes/twentytwenty-child/image/syukuhaku3.jpg" >
				</div>
				<div id="flex-item-child">
					<div id="pTextLeft" class="backInRightTrigger">
						<p>SURF&SNOWでは</p>
						<p>各地のスキー場の</p> 
						<p>周辺の宿泊先情報を</p>
						<p>配信しています。</p>
						<br>
						<p>各スキー場の口コミや</p>
						<p>イベントなども紹介して</p>
						<p>います。</p>
					</div>				
				</div>
			</div>
		</section>

		<section class="sectionTop">
			<div style="text-align: left;">
				<h2 class="backInRightTrigger">積雪情報</h2>
			</div>
			<div id="flex-item">
				<div id="flex-item-child">
					<div id="pTextRight" class="backInLeftTrigger">
						<p>SURF&SNOWでは</p>
						<p>各地のスキー場の</p> 
						<p>積雪情報を</p>
						<p>配信しています。</p>
						<br>
						<p>各スキー場の口コミや</p>
						<p>イベントなども紹介して</p>
						<p>います。</p>
					</div>				
				</div>
				<div id="" >
					<img src="/wp-content/themes/twentytwenty-child/image/sekisetu2.jpg" >
				</div>
			</div>
		</section>	
	</div><!--/wrapper-->
<!-- スライドショー -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- 雪が降る演出 -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="/wp-content/themes/twentytwenty-child/assets/js/snow.js"></script>
<!-- h2ロゴのアニメーション読み込み -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<!-- 最初の読み込み画面 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>
</main><!-- #site-content -->



<?php 
get_footer();
?>
