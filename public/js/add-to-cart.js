$(".product-button").find("a").click((function(t){t.preventDefault(),$.ajax({url:$(this).attr("href"),success:function(){window.location.reload()}})}));
//# sourceMappingURL=add-to-cart.js.map