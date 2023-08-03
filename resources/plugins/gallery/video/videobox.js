﻿/*
 * VideoBox
 * Example and Documentation: https://github.com/tedktedk/videobox/blob/master/README.md
 *
 * Version: 1.1
 *
 * Copyright (c) 2016 Ted k'
 * http://tedk.com.br/
 *
 * Dual licensed under the MIT or GPL Version 2 licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */
 (function($){
 	$.fn.extend({
 		videoBox: function(options){
 			var obj = $(this);
 			var youtube_x = false;
 			var tag_y = document.createElement("script");
 			var tag_v = document.createElement("script");
			var firstScriptTag = document.getElementsByTagName("script")[0];
			var defaults_yt = {
				autohide: 2,
				autoplay: 0,
				cc_load_policy: 1,
				color: "",
				controls: 1,
				disablekb: 0,
				enablejsapi: 0,
				fs: 1,
				hl: "",
				iv_load_policy: 1,
				loop: 0,
				modestbranding: 1,
				showinfo: 1,
			    height: 390,
				width: 640
			};

			var defaults_vm = {
		        width: 640,
		        height: 360,
		        loop: false,
		        autoplay: false,
		        byline: true,
		        color: "00adef",
		        maxheight: "",
		        maxwidth: "",
		        portrait: true,
		        title: ""
			};
			
			var options_yt = $.extend(defaults_yt, options);
			var options_vm = $.extend(defaults_vm, options);

			$.each( obj, function( key, value ){
				var _this = $(value);

				if (_this.attr("data-youtube")){
					tag_y.id = "VIDEOBOX_createTag_y";
					if (!document.getElementById("VIDEOBOX_createTag_y")){
						tag_y.src = "https://www.youtube.com/iframe_api";
						firstScriptTag.parentNode.insertBefore(tag_y, firstScriptTag);
					}
				}
				else if (_this.attr("data-vimeo")){
					var randomID = "VIDEOBOX_" + Math.floor(Math.random() * 100) + key;
					var returnID = _this.attr("data-vimeo").match(/https?:\/\/(?:www\.)?vimeo.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|)(\d+)(?:$|\/|\?)/);

					tag_v.id = "VIDEOBOX_createTag_v";
					_this.attr("id", randomID);

					if (!document.getElementById("VIDEOBOX_createTag_v")){
						tag_v.src = "https://player.vimeo.com/api/player.js";
						firstScriptTag.parentNode.insertBefore(tag_v, firstScriptTag);
					}

					tag_v.addEventListener("load", function(e){
						options_vm.id = returnID[3];
						return new Vimeo.Player(document.getElementById(randomID), options_vm);
					}, false);
				}
			});

			window.onYouTubeIframeAPIReady = function(){
				$.each( obj, function( key, value ){
					var _this = $(value);
					var randomID = "VIDEOBOX_" + Math.floor(Math.random() * 100) + key;

					if (_this.attr("data-youtube")){
						_this.attr("id", randomID);
						var returnID = _this.attr("data-youtube").match(/(?:https?:\/{2})?(?:w{3}\.)?youtu(?:be)?\.(?:com|be)(?:\/watch\?v=|\/)([^\s&]+)/);

						return new YT.Player(randomID, {
							height: options_yt.height,
							width: options_yt.width,
							videoId: returnID[1],
							playerVars: {
					            "autohide": options_yt.autohide,
								"autoplay": options_yt.autoplay,
								"cc_load_policy": options_yt.cc_load_policy,
								"color": options_yt.color,
								"controls": options_yt.controls,
								"disablekb": options_yt.disablekb,
								"enablejsapi": options_yt.enablejsapi,
								"fs": options_yt.fs,
								"hl": options_yt.hl,
								"iv_load_policy": options_yt.iv_load_policy,
								"loop": options_yt.loop,
								"modestbranding": options_yt.modestbranding,
								"showinfo": options_yt.showinfo,
							    "height": options_yt.height,
								"width": options_yt.width
					        }
						});
					}
				});
			};
    	}
	});

})(jQuery);
