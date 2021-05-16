$(function(){"use strict";var header=$('.header');var menuActive=false;var menu=$('.menu');var burger=$('.hamburger');setHeader();$(window).on('resize',function()
{setHeader();});$(document).on('scroll',function()
{setHeader();});initMenu();initHeaderSearch();initMilestones();function setHeader()
{if($(window).scrollTop()>100)
{header.addClass('scrolled');}
else
{header.removeClass('scrolled');}}
function initMenu()
{if($('.menu').length)
{var menu=$('.menu');if($('.hamburger').length)
{burger.on('click',function()
{if(menuActive)
{closeMenu();}
else
{openMenu();$(document).one('click',function cls(e)
{if($(e.target).hasClass('menu_mm'))
{$(document).one('click',cls);}
else
{closeMenu();$(".menu").animate({height:"0vh"});}});}});}}}
function openMenu()
{menu.addClass('active');menuActive=true;$(".menu").animate({height:"100vh"});}
function closeMenu()
{menu.removeClass('active');menuActive=false;}
function initHeaderSearch()
{if($('.search_button').length)
{$('.search_button').on('click',function()
{if($('.header_search_container').length)
{$('.header_search_container').toggleClass('active');}});}}
function initMilestones()
{if($('.milestone_counter').length)
{var milestoneItems=$('.milestone_counter');milestoneItems.each(function(i)
{var ele=$(this);var endValue=ele.data('end-value');var eleValue=ele.text();var signBefore="";var signAfter="";if(ele.attr('data-sign-before'))
{signBefore=ele.attr('data-sign-before');}
if(ele.attr('data-sign-after'))
{signAfter=ele.attr('data-sign-after');}
var milestoneScene=new ScrollMagic.Scene({triggerElement:this,triggerHook:'onEnter',reverse:false}).on('start',function()
{var counter={value:eleValue};var counterTween=TweenMax.to(counter,4,{value:endValue,roundProps:"value",ease:Circ.easeOut,onUpdate:function()
{document.getElementsByClassName('milestone_counter')[i].innerHTML=signBefore+counter.value+signAfter;}});}).addTo(ctrl);});}}});$(function(){var $galleryDiv=$('.Clients-Testimonial-carousel');if($galleryDiv.length&&$.fn.owlCarousel){$galleryDiv.owlCarousel({nav:false,center:true,loop:true,dots:true,singleItem:true,navigation:true,transitionStyle:"backSlide",navText:['<span class="ti-arrow-left"></span>','<span class="ti-arrow-right"></span>'],responsive:{0:{items:1},768:{items:3}}});}
$(".Featuread-Company-carousel").owlCarousel({dots:true,loop:true,items:4,responsive:{0:{items:1},767:{items:1},900:{items:2},1000:{items:3},1198:{items:3},1199:{items:4},}});$(".owl-prev").html(' <i class="large material-icons next-prev-color transform">trending_flat</i>');$(".owl-next").html('<i class="large material-icons next-prev-color">trending_flat</i>');$('.Job-Nature').on("click",function(){$('#Job-Nature .Job-Nature.active1').removeClass('active1');$(this).addClass('active1');});'use strict';;(function(document,window,index)
{var inputs=document.querySelectorAll('.inputfile');Array.prototype.forEach.call(inputs,function(input)
{var label=input.nextElementSibling,labelVal=label.innerHTML;input.addEventListener('change',function(e)
{var fileName='';if(this.files&&this.files.length>1)
fileName=(this.getAttribute('data-multiple-caption')||'').replace('{count}',this.files.length);else
fileName=e.target.value.split('\\').pop();if(fileName)
label.querySelector('span').innerHTML=fileName;else
label.innerHTML=labelVal;});input.addEventListener('focus',function(){input.classList.add('has-focus');});input.addEventListener('blur',function(){input.classList.remove('has-focus');});});}(document,window,0));'use strict';;(function(document,window,index)
{var inputs=document.querySelectorAll('.inputfile1');Array.prototype.forEach.call(inputs,function(input)
{var label=input.nextElementSibling,labelVal=label.innerHTML;input.addEventListener('change',function(e)
{var fileName='';if(this.files&&this.files.length>1)
fileName=(this.getAttribute('data-multiple-caption')||'').replace('{count}',this.files.length);else
fileName=e.target.value.split('\\').pop();if(fileName)
label.querySelector('span').innerHTML=fileName;else
label.innerHTML=labelVal;});input.addEventListener('focus',function(){input.classList.add('has-focus');});input.addEventListener('blur',function(){input.classList.remove('has-focus');});});}(document,window,0));var $galleryDiv=$('.Trusted-by-Experts-carousel');if($galleryDiv.length&&$.fn.owlCarousel){$galleryDiv.owlCarousel({nav:false,center:true,loop:true,dots:true,singleItem:true,navigation:true,dots:false,transitionStyle:"backSlide",navText:['<span class="ti-arrow-left"></span>','<span class="ti-arrow-right"></span>'],items:1});}
$(".owl-prev").html(' <i class="large material-icons next-prev-color transform">trending_flat</i>');$(".owl-next").html('<i class="large material-icons next-prev-color">trending_flat</i>');$(function(){$("#slider-range").slider({range:true,min:1,max:99,values:[20,45],slide:function(event,ui){$("#amount1").val(ui.values[0])+" -"
$("#amount2").val(ui.values[1]);}});$("#amount1").val($("#slider-range").slider("values",0))+
$("#amount2").val($("#slider-range").slider("values",1));});});function initMap(){var styledMapType=new google.maps.StyledMapType([{"featureType":"all","elementType":"all","stylers":[{"saturation":"12"},{"lightness":"-3"},{"visibility":"on"},{"weight":"1.18"}]},{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"saturation":"-70"},{"lightness":"14"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"saturation":"100"},{"lightness":"-14"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"},{"lightness":"12"}]}],{name:'Styled Map'});var myLatLng={lat:55.647,lng:37.581};var map=new google.maps.Map(document.getElementById('map'),{center:myLatLng,zoom:11,mapTypeControlOptions:{mapTypeIds:['roadmap','satellite','hybrid','terrain','styled_map']}});var marker=new google.maps.Marker({position:myLatLng,map:map,title:'Hello World!'});map.mapTypes.set('styled_map',styledMapType);map.setMapTypeId('styled_map');}