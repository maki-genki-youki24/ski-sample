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

/////////////////////////////////////////////////////////////////////
////SVGアニメーションの描画
/////////////////////////////////////////////////////////////////////
// var stroke;
// stroke = new Vivus(
//   "mask",
//   {
//     //アニメーションをするIDの指定
//     start: "manual", //自動再生をせずスタートをマニュアルに
//     type: "scenario-sync", // アニメーションのタイプを設定
//     duration: 10, //アニメーションの時間設定。数字が小さくなるほど速い
//     forceRender: false, //パスが更新された場合に再レンダリングさせない
//     animTimingFunction: Vivus.EASE, //動きの加速減速設定
//   },
//   function () {
//     jQuery("#mask").attr("class", "done"); //描画が終わったらdoneというクラスを追加
//   }
// );

// jQuery(window).on("load", function () {
//   jQuery("#splash").delay(3000).fadeOut("slow"); //ローディング画面を3秒（3000ms）待機してからフェイドアウト
//   jQuery("#splash_logo").delay(3000).fadeOut("slow"); //ロゴを3秒（3000ms）待機してからフェイドアウト
//   stroke.play(); //SVGアニメーションの実行
// });
