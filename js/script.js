$(function () {
    //スクロールに応じてヘッダーの背景色が変化
    $(window).scroll(function () {
      if ($(this).scrollTop() > 0) {
        $('.header-inner').addClass('active');
      }else {
        $('.header-inner').removeClass('active');
      }
    });
  
  //ページ内スクロール
  $('a[href^="#"]').on("click", function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top;
    $("html, body").animate({ scrollTop: position, }, 300, "swing");
    return false;
  });

  //ページトップ
  $("#js-page-top").on("click", function () {
    $("body,html").animate({ scrollTop: 0, }, 300);
    return false;
  });

      //ハンバーガーメニュー
$('#js-hamburger').click(function(){
  $('body').toggleClass('is-drawerActive')
  if($(this).attr('aria-expanded') == "false"){
       $(this).attr('aria-expanded', "true")
       $('#js-global-menu').attr('area-hidden', "false")
  }else{
       $(this).attr('aria-expanded', "false")
       $('#js-global-menu').attr('area-hidden', "true")
  }
})
//背景の黒をクリックするとドロワーが閉じる
　　$('#js-drawer-background').click(function(){
  $('body').removeClass('is-drawerActive')
  $('#js-hamburger').attr('aria-expanded', "false")
  $('#js-global-menu').attr('area-hidden', "true")
})

});

//Worksの画像をライトボックスで表示する
new LuminousGallery(document.querySelectorAll(".works-img"), {},{
  caption:function(trigger){
       return trigger.querySelector('img').getAttribute('alt');
  }
});

//AOS.jsで全体をフワッとアニメーション
  AOS.init({
    duration: 600,
    delay: 300,
    easing: 'ease-in',
    placement: 'center-bottom',
    once: false
  });

