/////////////////////////////////////////////////////////////////////
//// 動きのきっかけの起点となるロゴアニメーションを定義
/////////////////////////////////////////////////////////////////////
function BgFadeAnime() {
  // 背景色が伸びて出現（左から右）メインロゴ
  jQuery(".bgLRextendTrigger").each(function () {
    //bgLRextendTriggerというクラス名が
    var elemPos = jQuery(this).offset().top - 50; //要素より、50px上の
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight) {
      jQuery(this).addClass("bgLRextend"); // 画面内に入ったらbgLRextendというクラス名を追記
    } else {
      jQuery(this).removeClass("bgLRextend"); // 画面外に出たらbgLRextendというクラス名を外す
    }
  });
  // 背景色が伸びて出現（左から右）サブロゴ
  jQuery(".bgLRextendSubTrigger").each(function () {
    //bgLRextendTriggerというクラス名が
    var elemPos = jQuery(this).offset().top - 50; //要素より、50px上の
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight) {
      jQuery(this).addClass("bgLRextendSub"); // 画面内に入ったらbgLRextendというクラス名を追記
    } else {
      jQuery(this).removeClass("bgLRextendSub"); // 画面外に出たらbgLRextendというクラス名を外す
    }
  });

  // 文字列を囲う子要素/メインロゴ
  jQuery(".bgappearTrigger").each(function () {
    //bgappearTriggerというクラス名が
    var elemPos = jQuery(this).offset().top - 50; //要素より、50px上の
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight) {
      jQuery(this).addClass("bgappear"); // 画面内に入ったらbgappearというクラス名を追記
    } else {
      jQuery(this).removeClass("bgappear"); // 画面外に出たらbgappearというクラス名を外す
    }
  });
  // 文字列を囲う子要素/サブロゴ
  jQuery(".bgappearSubTrigger").each(function () {
    //bgappearTriggerというクラス名が
    var elemPos = jQuery(this).offset().top - 50; //要素より、50px上の
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight) {
      jQuery(this).addClass("bgappearSub"); // 画面内に入ったらbgappearというクラス名を追記
    } else {
      jQuery(this).removeClass("bgappearSub"); // 画面外に出たらbgappearというクラス名を外す
    }
  });
}

// 画面をスクロールをしたら動かしたい場合の記述
jQuery(window).scroll(function () {
  BgFadeAnime(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
jQuery(window).on("load", function () {
  BgFadeAnime(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

///////////////////////////////////////////////////////
////スライド
///////////////////////////////////////////////////////
jQuery(".slider").slick({
  autoplay: true, //自動的に動き出すか。初期値はfalse。
  infinite: true, //スライドをループさせるかどうか。初期値はtrue。
  speed: 500, //スライドのスピード。初期値は300。
  slidesToShow: 3, //スライドを画面に3枚見せる
  slidesToScroll: 1, //1回のスクロールで1枚の写真を移動して見せる
  prevArrow: '<div class="slick-prev"></div>', //矢印部分PreviewのHTMLを変更
  nextArrow: '<div class="slick-next"></div>', //矢印部分NextのHTMLを変更
  centerMode: true, //要素を中央ぞろえにする
  variableWidth: true, //幅の違う画像の高さを揃えて表示
  dots: true, //下部ドットナビゲーションの表示
});

//H2スクロールをするたびにアニメーションを行う設定(右から左)
jQuery(".backInRightTrigger").on("inview", function (event, isInView) {
  if (isInView) {
    //表示領域に入った時
    jQuery(this).addClass("animate__animated animate__fadeInRight"); //クラス名が付与
  } else {
    //表示領域から出た時
    jQuery(this).removeClass("animate__animated animate__fadeInRight"); //クラス名が除去
  }
});
//H2スクロールをするたびにアニメーションを行う設定(左から右)
jQuery(".backInLeftTrigger").on("inview", function (event, isInView) {
  if (isInView) {
    //表示領域に入った時
    jQuery(this).addClass("animate__animated animate__fadeInLeft"); //クラス名が付与
  } else {
    //表示領域から出た時
    jQuery(this).removeClass("animate__animated animate__fadeInLeft"); //クラス名が除去
  }
});

//SVGアニメーションの描画
var stroke;
stroke = new Vivus(
  "mask",
  {
    //アニメーションをするIDの指定
    start: "manual", //自動再生をせずスタートをマニュアルに
    type: "scenario-sync", // アニメーションのタイプを設定
    duration: 10, //アニメーションの時間設定。数字が小さくなるほど速い
    forceRender: false, //パスが更新された場合に再レンダリングさせない
    animTimingFunction: Vivus.EASE, //動きの加速減速設定
  },
  function () {
    jQuery("#mask").attr("class", "done"); //描画が終わったらdoneというクラスを追加
  }
);

jQuery(window).on("load", function () {
  jQuery("#splash").delay(3000).fadeOut("slow"); //ローディング画面を3秒（3000ms）待機してからフェイドアウト
  jQuery("#splash_logo").delay(3000).fadeOut("slow"); //ロゴを3秒（3000ms）待機してからフェイドアウト
  stroke.play(); //SVGアニメーションの実行
});
