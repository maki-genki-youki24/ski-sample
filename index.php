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
<!-- <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-3-1/css/6-3-1.css"> -->
<main>
<div class="">
	<div class="animeLogo">
		<!-- ビデオ背景 -->	
		<div id="video-area">
			<video id="video" poster="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-3-1/img/movie.jpg" webkit-playsinline playsinline muted autoplay loop>
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
		</div><!-- video-area -->	
	</div><!-- animeLogo -->



</div>	<!-- container -->








</main><!-- #site-content -->



<?php get_footer();?>
