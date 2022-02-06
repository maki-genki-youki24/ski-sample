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
<!--==============レイアウトを制御する独自のCSSを読み込み===============-->
<link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<main>

	<div class="animeLogo">
		<!-- ビデオ背景 -->	
		<div id="video-area" >
			<video id="video video-area" poster="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-3-1/img/movie.jpg" webkit-playsinline playsinline muted autoplay loop>
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
		<div style="text-align: right;">
			<h2 >おすすめスキー場</h2>
		</div>
		<div id="flex-item">
			<div id="">
				<img src="/wp-content/themes/twentytwenty-child/image/134.jpg" >
			</div>
			<div id="flex-item-child">
				<div id="pTextLeft">
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
			<h2>ゲレンデ情報</h2>
		</div>
		<div id="flex-item">
			<div id="flex-item-child">
				<div id="pTextRight">
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
			<h2 >周辺の宿泊先</h2>
		</div>
		<div id="flex-item">
			<div id="" >
				<img src="/wp-content/themes/twentytwenty-child/image/syukuhaku3.jpg" >
			</div>
			<div id="flex-item-child">
				<div id="pTextLeft">
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
			<h2>積雪情報</h2>
		</div>
		<div id="flex-item">
			<div id="flex-item-child">
				<div id="pTextRight">
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



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</main><!-- #site-content -->



<?php 
get_footer();
?>
