"use strict";(globalThis.blocksyJsonP=globalThis.blocksyJsonP||[]).push([[922],{922:function(t,e,o){o.r(e),o.d(e,{mount:function(){return d}});var n=o(194),c=o.n(n),r=o(601),i=o.n(r);let u=!1;const d=function(){if(!c())return;const t='.ct-header-cart, .ct-shortcuts-container [data-id="cart"]';u||(u=!0,c()(document.body).on("adding_to_cart",(function(){return[...document.querySelectorAll(t)].map((function(t){t.closest(".ct-shortcuts-container")||(t=t.firstElementChild),t.classList.remove("ct-added"),t.classList.add("ct-adding")}))})),c()(document.body).on("wc_fragments_loaded",(function(){setTimeout((function(){return i().trigger("ct:popper-elements:update")})),setTimeout((function(){return i().trigger("blocksy:frontend:init")}))})),c()(document.body).on("wc_cart_button_updated",(function(){setTimeout((function(){[...document.querySelectorAll(t)].map((function(t,e){e>0||!document.querySelector(".quick-view-modal.active")&&(!document.body.classList.contains("single-product")&&t.querySelector('[data-auto-open*="archive"]')||document.body.classList.contains("single-product")&&t.querySelector('[data-auto-open*="product"]'))&&t.querySelector("[data-auto-open]").click()}))}),100)})),c()(document.body).on("added_to_cart",(function(e,o,n,c,r){c=c[0],[...document.querySelectorAll(t)].map((function(t,e){let n=t;t.closest(".ct-shortcuts-container")||(n=t.firstElementChild),n.classList.remove("ct-adding"),n.classList.add("ct-added"),document.querySelector(".ct-cart-content")&&t.querySelector(".ct-cart-content")&&(t.querySelector(".ct-cart-content").innerHTML=Object.values(o)[0],t.querySelector(".ct-cart-total")&&t.querySelector(".ct-cart-content .woocommerce-mini-cart__total .woocommerce-Price-amount")&&(t.querySelector(".ct-cart-total").firstElementChild.innerHTML=t.querySelector(".ct-cart-content .woocommerce-mini-cart__total .woocommerce-Price-amount").innerHTML))}))})),c()(document.body).on("removed_from_cart",(function(e,o,n,c){return[...document.querySelectorAll(t)].map((function(t){if(c)try{c[0].closest("li").parentNode.removeChild(c[0].closest("li"))}catch(t){}}))})),c()(document).on("uael_quick_view_loader_stop",(function(){i().trigger("ct:add-to-cart:quantity")})),c()(document).on("facetwp-loaded",(function(){i().trigger("ct:custom-select:init")})),c()(window).on("wpf_ajax_success",(function(){i().trigger("blocksy:frontend:init")})),c()(document).on("prdctfltr-reload",(function(){i().trigger("blocksy:frontend:init")})),setTimeout((function(){if(window.woof_mass_reinit){const t=window.woof_mass_reinit;window.woof_mass_reinit=function(){i().trigger("blocksy:frontend:init"),t()}}}),1e3),c()(document.body).on("wc_fragments_refreshed",(function(){setTimeout((function(){i().trigger("blocksy:frontend:init"),i().trigger("ct:popper-elements:update")}))})),c()(document.body).on("wc_fragments_loaded",(function(){setTimeout((function(){i().trigger("blocksy:frontend:init"),i().trigger("ct:popper-elements:update")}))})))}}}]);
//# sourceMappingURL=922.9a27c90f554071228f90.js.map