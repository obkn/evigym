//ロールオーバー
function cq_rollover() {

	if (document.getElementsByTagName) {

		//プレロード用配列
		var preload_images = new Array();

		//画像処理
		var images = document.getElementsByTagName("img");
		
		for (var i=0; i < images.length; i++) {
			if (images[i].getAttribute("src").match("-off.")) {
				
				//プレロード処理
				preload_images[i] = new Image();
				preload_images[i].src = images[i].getAttribute("src").replace("-off.", "-on."); 
				
				//マウスオーバー処理
				images[i].onmouseover = function() {
					this.setAttribute("src", this.getAttribute("src").replace("-off.", "-on."));
				}
				
				//マウスアウト処理
				images[i].onmouseout = function() {
					this.setAttribute("src", this.getAttribute("src").replace("-on.", "-off."));
				}

			}
		}

		//input type="image" 処理
		var images = document.getElementsByTagName("input");

		for (var i=0; i < images.length; i++) {

			if (images[i].type != 'image') {
				continue
			}

			if (images[i].getAttribute("src").match("-off.")) {

				//プレロード処理
				preload_images[i] = new Image();
				preload_images[i].src = images[i].getAttribute("src").replace("-off.", "-on."); 
				
				//マウスオーバー処理
				images[i].onmouseover = function() {
					this.setAttribute("src", this.getAttribute("src").replace("-off.", "-on."));
				}
				
				//マウスアウト処理
				images[i].onmouseout = function() {
					this.setAttribute("src", this.getAttribute("src").replace("-on.", "-off."));
				}
			
			}
		}

	}

}

if (window.addEventListener) {
	window.addEventListener("load", cq_rollover, false);
} else if (window.attachEvent) {
	window.attachEvent("onload", cq_rollover);
}