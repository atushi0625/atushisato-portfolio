import $ from "@modules/jquery";
const jquery = () => {
  $(function () {
    //スクロールに応じてヘッダーの背景色が変化
    $(window).scroll(function () {
      if ($(this).scrollTop() > 0) {
        $('.header-inner').addClass('active');
      } else {
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
    $('#js-hamburger').click(function () {
      $('body').toggleClass('is-drawerActive')
      if ($(this).attr('aria-expanded') == "false") {
        $(this).attr('aria-expanded', "true")
        $('#js-global-menu').attr('area-hidden', "false")
      } else {
        $(this).attr('aria-expanded', "false")
        $('#js-global-menu').attr('area-hidden', "true")
      }
    })
    //背景の黒をクリックするとドロワーが閉じる
    $('#js-drawer-background').click(function () {
      $('body').removeClass('is-drawerActive')
      $('#js-hamburger').attr('aria-expanded', "false")
      $('#js-global-menu').attr('area-hidden', "true")
    })

  });
}


/* node_modulesの中にgsapやScrollTriggerが入っている */
import { gsap } from "@modules/gsap";
import { ScrollTrigger } from "@modules/gsap/ScrollTrigger";
gsap.registerPlugin(ScrollTrigger);
const Gsap = () => {
  gsap.timeline({
    defaults: {
      stagger: .1,
      ease: 'power3.out'
    },
    scrollTrigger: {
      trigger: '.works-item',
      start: 'top 40%',
      scrub: true,
      pin: true,
      markers: true,
      snap: {
        sanapTo: e => Math.round(e / .25) * .25,
        duration: {
          min: 1,
          max: 3,
        },
        delay: .1
      },
      onUpdate: e => console.log(`${Math.round(e.progress * 100000) / 1000}%`)
    }
  })
    .from('.works-item > li', .5, {
      x: -200,
      opacity: 0,
    })
    .to('.works-item > li', 2, {
      x: 0,
      rotation: 720,
    })
    .to('.works-item > li', .5, {
      opacity: 0,
      x: 100
    })
}

import Swiper, { Autoplay, EffectFade } from '@modules/swiper';
Swiper.use([Autoplay, EffectFade]);
const mySwiper = () => {
  const option = {
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    autoplay: true,
    speed: 2000,
  };
  new Swiper('.swiper', option);
}
export { jquery, Gsap, mySwiper };
