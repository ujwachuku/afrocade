/*!
 * jScroll - jQuery Plugin for Infinite Scrolling / Auto-Paging
 * @see @link{https://jscroll.com}
 *
 * @copyright Philip Klauzinski
 * @license Dual licensed under the MIT and GPL Version 2 licenses
 * @author Philip Klauzinski (https://webtopian.com)
 * @version 2.4.1
 * @requires jQuery v1.8.0+
 * @preserve
 */
!function(t){'use strict';t.jscroll={defaults:{debug:!1,autoTrigger:!0,autoTriggerUntil:!1,loadingHtml:'<small>Loading...</small>',loadingFunction:!1,padding:0,nextSelector:'a:last',contentSelector:'',pagingSelector:'',callback:!1}};var n=function(n,o){var a,s=n.data('jscroll'),h='function'==typeof o?{callback:o}:o,e=t.extend({},t.jscroll.defaults,h,s||{}),d='visible'===n.css('overflow-y'),v=n.find(e.nextSelector).first(),r=t(window),b=t('body'),l=d?r:n,m=t.trim(v.prop('href')+' '+e.contentSelector),f=function(){n.find('.jscroll-inner').length||n.contents().wrapAll('<div class="jscroll-inner" />')},g=function(t){e.pagingSelector?t.closest(e.pagingSelector).hide():t.parent().not('.jscroll-inner,.jscroll-added').addClass('jscroll-next-parent').hide().length||t.wrap('<div class="jscroll-next-parent" />').parent().hide()},i=function(){return l.unbind('.jscroll').removeData('jscroll').find('.jscroll-inner').children().unwrap().filter('.jscroll-added').children().unwrap()},u=function(){if(n.is(':visible')){f();var t=n.find('div.jscroll-inner').first(),i=n.data('jscroll'),o=parseInt(n.css('borderTopWidth'),10),a=isNaN(o)?0:o,s=parseInt(n.css('paddingTop'),10)+a,g=d?l.scrollTop():n.offset().top,u=t.length?t.offset().top:0,r=Math.ceil(g-u+l.height()+200+s);if(!i.waiting&&r+e.padding>=t.outerHeight())return c('info','jScroll:',t.outerHeight()-r,'from bottom. Loading next request...'),j()}},p=function(){var o=n.find(e.nextSelector).first();if(o.length)if(e.autoTrigger&&(!1===e.autoTriggerUntil||0<e.autoTriggerUntil)){g(o);var i=b.height()-n.offset().top;(n.height()<i?n.height():i)<=(0<n.offset().top-r.scrollTop()?r.height()-(n.offset().top-t(window).scrollTop()):r.height())&&u(),l.unbind('.jscroll').bind('scroll.jscroll',function(){return u()}),0<e.autoTriggerUntil&&e.autoTriggerUntil--}
else l.unbind('.jscroll'),o.bind('click.jscroll',function(){return g(o),j(),!1})},j=function(){var o=n.find('div.jscroll-inner').first(),l=n.data('jscroll');return l.waiting=!0,o.append('<div class="jscroll-added" />').children('.jscroll-added').last().html('<div class="jscroll-loading" id="jscroll-loading">'+e.loadingHtml+'</div>').promise().done(function(){e.loadingFunction&&e.loadingFunction()}),n.animate({scrollTop:o.outerHeight()},0,function(){var r=l.nextHref;o.find('div.jscroll-added').last().load(r,function(o,s){if('error'===s)return i();var a,d=t(this).find(e.nextSelector).first();l.waiting=!1,l.nextHref=!!d.prop('href')&&t.trim(d.prop('href')+' '+e.contentSelector),t('.jscroll-next-parent',n).remove(),(a=a||n.data('jscroll'))&&a.nextHref?p():(c('warn','jScroll: nextSelector not found - destroying'),i()),e.callback&&e.callback.call(this,r),c('dir',l)})})},c=function(t){if(e.debug&&'object'==typeof console&&('object'==typeof t||'function'==typeof console[t]))if('object'==typeof t){var l=[];for(var n in t)'function'==typeof console[n]?(l=t[n].length?t[n]:[t[n]],console[n].apply(console,l)):console.log.apply(console,l)}
else console[t].apply(console,Array.prototype.slice.call(arguments,1))};return n.data('jscroll',t.extend({},s,{initialized:!0,waiting:!1,nextHref:m})),f(),(a=t(e.loadingHtml).filter('img').attr('src'))&&((new Image).src=a),p(),t.extend(n.jscroll,{destroy:i}),n};t.fn.jscroll=function(e){return this.each(function(){var l=t(this),o=l.data('jscroll');o&&o.initialized||n(l,e)})}}(jQuery);