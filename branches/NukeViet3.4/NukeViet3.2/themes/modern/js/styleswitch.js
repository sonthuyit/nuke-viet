(function(b){function d(a){b("link[rel*=style][title]").each(function(){this.disabled=!0;if(this.getAttribute("title")==a)this.disabled=!1});createCookie("style",a,365)}b(document).ready(function(){b(".styleswitch").click(function(){d(this.getAttribute("rel"));return!1});var a=readCookie("style");a&&d(a)})})(jQuery);function createCookie(b,d,a){if(a){var c=new Date;c.setTime(c.getTime()+a*864E5);a="; expires="+c.toGMTString()}else a="";document.cookie=b+"="+d+a+"; path=/"} function readCookie(b){b+="=";for(var d=document.cookie.split(";"),a=0;a<d.length;a++){for(var c=d[a];c.charAt(0)==" ";)c=c.substring(1,c.length);if(c.indexOf(b)==0)return c.substring(b.length,c.length)}return null}function eraseCookie(b){createCookie(b,"",-1)};