
/* Variables */

var $doc = $(document),
  $w = $(window);

var w = $w.width(),
  h = $w.height();

var minW = 1080,
  minH = 550,
  breakpoint = 760;

var winSize = {
  type:"pc",
  update:false
  };

var mousewheelevent = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';


// var thisPage;

function common(){

  /* [ Side ]
  ---------------------------------------------------------------------*/
  var _side = function() {
    $(window).on('resize',function(){
      sideCheck();
    });
    sideCheck();
    function sideCheck(){
      w = $w.width();
      if(w < 1210){
        $('#side').removeClass('side-show');
        $('#content').removeClass('side-show');
      }else{
        $('#side').addClass('side-show');//.removeClass('side-open');
        $('#content').addClass('side-show');//.removeClass('side-open');
      }
    }
    $('#side .side-toggle').on('click', function(){
      if($('#side').hasClass('side-open')){
        $('#side').removeClass('side-open');
      }else{
        $('#side').addClass('side-open');
      }
    });
    // $('#side .gnav li a').each(function(e){
    //   e.preventDefault();
    //   var $href = $(this).attr('href');
    //   if($href == ''){
    //     $(this).toggleClass('active').next().slideToggle(300);
    //   }
    // });
    $('#side .gnav li a.arrow').on('click', function(e){
      e.preventDefault();
      $(this).toggleClass('active').next().slideToggle(300);
    });
  }// Side END


  /* [ Footer ]
  ---------------------------------------------------------------------*/
  var _footer = function() {
    $(".pagetop a").on("click",function(e){
      e.preventDefault();
      // $("body,html").animate({scrollTop:0},200);
      // TweenLite.to($("body,html"), .48, {scrollTo:0});
      $("body,html").animate({scrollTop:0},480, 'swing');
    });
  }// Footer END



  /* [ Tabs ]
  ---------------------------------------------------------------------*/
  var _tabs = function() {
    $(".tab a").on("click",function(e){
      e.preventDefault();
      var target = $(this).attr('href');
      $(target).addClass('active').siblings().removeClass('active');
      $(this).parent('li').addClass('active').siblings().removeClass('active');
    });
  }// Tabs END


  /* [ Modals ]
  ---------------------------------------------------------------------*/
  var _modal = function() {
    $(".openmodal").colorbox({inline: true});
    $('.modal-head .close').on('click',function(){
      $.colorbox.close();
    });
  }// Modals END


  /* [ Steps ] * 表示の便宜上
  ---------------------------------------------------------------------*/
  var _steps = function() {
    $('.next-step').on('click',function(e){
      e.preventDefault();
      var $target = "";
      if($(this).data('href') != ""){
        $target = $($(this).data('href'));
      }else{
        $target = $(this).parents('.step-container').next('.step-container');
      }
      // var _tween = TweenLite.to($('#user-step2') , 0.3, {autoAlpha: 0, display:'none', onComplete:function(){
        $target.fadeIn(300, function(){
          //$target.siblings('.step-container').removeClass('active');
          var nextTop = $target.offset().top;
          $('html, body').animate({scrollTop:nextTop},500, 'swing');
        });
      // }});
    });
    $('.add-basket').change(function(){
      if($(this).prop('checked')){
        console.log('テスト');
       var $target = "";
        if($(this).data('href') != ""){
          $target = $($(this).data('href'));
        }else{
          $target = $(this).parents('.step-container').next('.step-container');
        }
        // var _tween = TweenLite.to($('#user-step2') , 0.3, {autoAlpha: 0, display:'none', onComplete:function(){
          $target.fadeIn(300, function(){
            //$target.siblings('.step-container').removeClass('active');
            var nextTop = $target.offset().top;
            $('html, body').animate({scrollTop:nextTop},500, 'swing');
          });
        // }});
      }
    });

    $('.prev-step').on('click',function(e){
      e.preventDefault();
      var $target = $(this).parents('.step-container');
      $target.fadeOut(300,function(){
        // $target.siblings('.step-container').removeClass('active');
          var nextTop = $('.step-container').eq(0).offset().top;
          // console.log(nextTop);
          $('html, body').animate({scrollTop:nextTop},500, 'swing');
      });
    });
    // $('.prev-step-top').on('click',function(e){
    //   e.preventDefault();
    //   var $target = $(this).parents('.step-container-top');
    //   var _tween = $target.parents('.step-container').fadeOut(300,function(){
    //     var _tween2 = $target.fadeIn(300,function(){
    //       // $target.siblings('.step-container').removeClass('active');
    //       var nextTop = $('.step-container').eq(0).offset().top;
    //       console.log(nextTop);
    //       $('html, body').animate({scrollTop:nextTop},500, 'swing');
    //     });
    //   });
    // });
    $('.next-step.user-step2').on('click',function(e){
      e.preventDefault();
      if($('#group-step2').css('display','block')){
        $('#group-step2').css('display','none')
      }
      if($('#group-step3').css('display','block')){
        $('#group-step3').css('display','none')
      }
    });
    $('.next-step.group-step2').on('click',function(e){
      e.preventDefault();
      if($('#user-step2').css('display','block')){
        $('#user-step2').css('display','none')
      }
      if($('#user-step3').css('display','block')){
        $('#user-step3').css('display','none')
      }
    });
    $('.next-step.user-step3').on('click',function(e){
      e.preventDefault();
      if($('#group-step3').css('display','block')){
        $('#group-step3').css('display','none')
      }
    });
    $('.next-step.group-step3').on('click',function(e){
      e.preventDefault();
      if($('#user-step3').css('display','block')){
        $('#user-step3').css('display','none')
      }
    });
  }// Steps END

  /*[ select ]
  ---------------------------------------------------------------------*/
  var _select = function(){ //selectのdisplayに現在のoption:selectedを表示、selectごと変更された際等に呼び出して下さい。
    $(document).find('.select select').each(function(){
      var displayText = $(this).find('option:selected').text();
      $(this).prev('.display').text(displayText);
    });
    $(document).on('change','.select select',function(){ //select変更時にdisplayのtextを変更する
      var displayText = $(this).find('option:selected').text();
      $(this).prev('.display').text(displayText);
    });
 }// select END

var _allcheck = function(){ //
  $('.table .allcheck input').click(function(){ //全選択・全解除をクリックしたとき
    var items = $(".table.allcheck-table .check").find('input[type="checkbox"]');
      if($(this).is(':checked')) { //全選択・全解除がcheckedだったら
          $(items).prop('checked', true); //アイテムを全部checkedにする
          $(items).parents('.allcheck-table').find('tr').addClass('active');
      } else { //全選択・全解除がcheckedじゃなかったら
          $(items).prop('checked', false); //アイテムを全部checkedはずす
          $(items).parents('.allcheck-table').find('tr').removeClass('active');
      }
  });
 }// allcheck END

var _check = function(){ //
  $(document).find('.table tr').each(function(){
      $(this).find('input').click(function(){
        var tr = $(this).parents('tr');
        if($(this).is(':checked')) {
          $(tr).addClass('active');
        } else {
          $(tr).removeClass('active');
        }
      });
    });
 }// check END

var _radio = function(){
  var $radio = $('input[type=radio]');
    $radio.bind('change', function() {
      $radio.parents('tr').removeClass('active');
      $radio.filter(':checked').parents('tr').addClass('active');
    });
 }// radio END

 var _footerHeight = function(){
  var header = $('header').outerHeight();
  var footer = $('footer').outerHeight();
  // console.log(footer);
  $('main').css('min-height',h-header-footer-50 + "px");
    // $radio.bind('change', function() {
    //   $radio.parents('tr').removeClass('active');
    //   $radio.filter(':checked').parents('tr').addClass('active');
    // });
 }// footerHeight END

 var _sort = function(){
  $(document).find('.table th .th-inner span.sort-desc').each(function(){
       $(this).click(function(e){
        e.preventDefault();
        // console.log('テスト');
        if($(this).hasClass('sort-desc')){
          $(this).removeClass('sort-desc');
          $(this).addClass('sort-asc');
        }else{
          $(this).removeClass('sort-asc');
          $(this).addClass('sort-desc')
        }
      });
    });
 }// sort END

 var _newGroupitem = function(){
  $('.new-btn .btn').on('click',function(e){
    e.preventDefault();
    // console.log('テスト');
    var item = $(this).parent().next();
    console.log(item);
    item.find('tbody').prepend('<tr><td><input type="text" value="" class="w-max h23"></td><td><input type="text" value="" class="w-max h23"></td><td><input type="text" value="" class="w-max h23"></td><td>グループ新規登録</td><td class="mark delete-btn"><div class="btn type-gray btn-inline w50 h20"><a href="#">×</a></div></td></tr>');
  });
  $(document).on('click','.table td.delete-btn .btn',function(e){
    e.preventDefault();
    console.log('テスト');
    $(this).parents('tr').remove();
  });
 }//

  var _tableBlock= function(){
  $(document).ready( function(){
    var trItem = $('#table-block .table tbody tr');
    console.log(trItem);
    if(trItem.length < 11){
      trItem.parents('#table-block').removeClass('h455 h478');
    }
    // trItem.change(function(){
    //   if(trItem.length < 11){
    //     trItem.parents('#table-block').removeClass('h455 h478');
    //   }
    // })
  });
 }//




  $w.on("load",function(){


    setTimeout(function(){
      $('#document').animate({opacity: 1},580);
    },100);



    _side();
    _footer();
    _tabs();
    _modal();
    _steps();
    _select();
    _allcheck();
    _check();
    _radio();
    _footerHeight();
    _sort();
    _newGroupitem();
    _tableBlock();
  });
  $w.on("resize",function(){
    _footerHeight();
  });


  $doc.on(mousewheelevent,function(e){
    //if(_openGnavi) e.preventDefault();
  });
  /* [ キーボード操作 ] */
  $w.keyup(function(e){
    //if(_openGnavi) e.preventDefault();
  });

}

common();
