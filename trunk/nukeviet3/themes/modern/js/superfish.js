(function(a){a.fn.superfish=function(c){var b=a.fn.superfish,h=b.c,n=a(['<span class="',h.arrowClass,'"> &#187;</span>'].join("")),i=function(){var d=a(this),e=j(d);clearTimeout(e.sfTimer);d.showSuperfishUl().siblings().hideSuperfishUl()},k=function(){var d=a(this),e=j(d),g=b.op;clearTimeout(e.sfTimer);e.sfTimer=setTimeout(function(){g.retainPath=a.inArray(d[0],g.$path)>-1;d.hideSuperfishUl();g.$path.length&&d.parents(["li.",g.hoverClass].join("")).length<1&&i.call(g.$path)},g.delay)},j=function(d){d=
d.parents(["ul.",h.menuClass,":first"].join(""))[0];b.op=b.o[d.serial];return d};return this.each(function(){var d=this.serial=b.o.length,e=a.extend({},b.defaults,c);e.$path=a("li."+e.pathClass,this).slice(0,e.pathLevels).each(function(){a(this).addClass([e.hoverClass,h.bcClass].join(" ")).filter("li:has(ul)").removeClass(e.pathClass)});b.o[d]=b.op=e;a("li:has(ul)",this)[a.fn.hoverIntent&&!e.disableHI?"hoverIntent":"hover"](i,k).each(function(){e.autoArrows&&a(">a:first-child",this).addClass(h.anchorClass).append(n.clone())}).not("."+
h.bcClass).hideSuperfishUl();var g=a("a",this);g.each(function(l){var m=g.eq(l).parents("li");g.eq(l).focus(function(){i.call(m)}).blur(function(){k.call(m)})});e.onInit.call(this)}).each(function(){var d=[h.menuClass];b.op.dropShadows&&!(a.browser.msie&&a.browser.version<7)&&d.push(h.shadowClass);a(this).addClass(d.join(" "))})};var f=a.fn.superfish;f.o=[];f.op={};f.IE7fix=function(){var c=f.op;a.browser.msie&&a.browser.version>6&&c.dropShadows&&c.animation.opacity!=undefined&&this.toggleClass(f.c.shadowClass+
"-off")};f.c={bcClass:"sf-breadcrumb",menuClass:"sf-js-enabled",anchorClass:"sf-with-ul",arrowClass:"sf-sub-indicator",shadowClass:"sf-shadow"};f.defaults={hoverClass:"sfHover",pathClass:"overideThisToUse",pathLevels:1,delay:800,animation:{opacity:"show"},speed:"normal",autoArrows:true,dropShadows:true,disableHI:false,onInit:function(){},onBeforeShow:function(){},onShow:function(){},onHide:function(){}};a.fn.extend({hideSuperfishUl:function(){var c=f.op,b=c.retainPath===true?c.$path:"";c.retainPath=
false;b=a(["li.",c.hoverClass].join(""),this).add(this).not(b).removeClass(c.hoverClass).find(">ul").hide().css("visibility","hidden");c.onHide.call(b);return this},showSuperfishUl:function(){var c=f.op,b=this.addClass(c.hoverClass).find(">ul:hidden").css("visibility","visible");f.IE7fix.call(b);c.onBeforeShow.call(b);b.animate(c.animation,c.speed,function(){f.IE7fix.call(b);c.onShow.call(b)});return this}})})(jQuery);