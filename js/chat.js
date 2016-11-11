var length = 0;
$(function(){
	$(".model-overlay").hide();
	$(".model-data").hide();
})
$(function(){
	$("#change-account").click(function(){
		$(".model-overlay").show();
		$(".model-data").show();
	})
})
// 上传发言或者登录
$(function(){
	$("#input-submit").click(function(){
		if ($("#input-submit").val() == "登录") {
			$(".model-overlay").show();
			$(".model-data").show();
		} else {

			var input_ = $("#input").val();
			$("#input").val("");
			//alert(input_);
			$.ajax({
				url : "update.php",
				type : "POST",
				data : {
					input : input_
				},
				error : function (
								XMLHttpRequest,
								textStatus,
								errorThrown) {
					alert(XMLHttpRequest.status);
					alert(textStatus);
					alert(XMLHttpRequest.readyState);
				},
				success : function(data) {
					//var add = ++length + ": " + data + "<br />";
					//$("#show").append(add);
					//alert("ajax交互成功");
					//alert(data);
				}		
			});
			return false;
		}
	})
})
// 更新聊天室
$(function(){
	setInterval(aa, 500);
	function aa() {
	$.ajax({
		url : "load.php",
		type : "POST",
		data : {
			ask : "load"
		},
		error : function (
							XMLHttpRequest,
							textStatus,
							errorThrown) {
				//alert(XMLHttpRequest.status);
				//alert(textStatus);
				//alert(XMLHttpRequest.readyState);
		},
		success : function(data) {
			//alert(data);
			var tmp = eval(data);
			var lengthtmp = tmp.length;
			if (lengthtmp != length) {
				$("#show").html("");
				length = lengthtmp;
				for (var i = 1; i <= length; i++) {
					var add = "<font color='blue'>" + tmp[i-1][0] + "</font>: " + tmp[i-1][1] + "<br/><br/>";
					$("#show").append(add);
				} 
				$("#show").append("<div id='click'></div>");
				var div = document.getElementById("show");
				div.scrollTop = div.scrollHeight;
			}
		}	
	});
	return false;
	};	
})
// 登录
$(function(){
	$("#sub").click(function(){
		var name_ = $("#id").val();
		var passwd_ = $("#psd").val();
		//alert(name_);
		//alert(passwd_);
		$.ajax({
			url : "login.php",
			type : "POST",
			data : {
				name : name_,
				passwd : passwd_
			},
			error : function (
				XMLHttpRequest,
				textStatus,	
				errorThrown
				) {
				alert("连接失败");
			},
			success : function(data) {
				alert(data);
				var line = "";
				line = data;
				if (line == "success\n") {
					$(".model-overlay").hide();
					$(".model-data").hide();
					$("#input-submit").val("提交");
					$("#change-account").html(name_);
					$("#id").val("");
					$("#psd").val("");
				} else {
					$(".model-overlay").hide();
					$(".model-data").hide();
				}
				/*if (data == 'test')
					alert("test");
				var result = data;
				alert(result);*/
			}			
		});
		return false;
	})
})
// 提交注册信息
$(function(){
	$("#sub-2").click(function(){
		var name_ = $("#id-2").val();
		var passwd_ = $("#psd-2").val();
		//alert(name_);
		//alert(passwd_);
		$.ajax({
			url : "register.php",
			type : "POST",
			data : {
				name : name_,
				passwd : passwd_
			},
			error : function (
				XMLHttpRequest,
				textStatus,	
				errorThrown
				) {
				alert("连接失败");
			},
			success : function(data) {
				alert(data);
				$("#register").hide();
				$("#login").show();
				/*var line = "";
				line = data;
				if (line == "success\n") {
					$(".model-overlay").hide();
					$(".model-data").hide();
					$("#input-submit").val("提交");
					$("#welcome").html("欢迎" + name_ + "来到聊天室");
				} else {
					$(".model-overlay").hide();
					$(".model-data").hide();
				}*/
				/*if (data == 'test')
					alert("test");
				var result = data;
				alert(result);*/
			}			
		});
		return false;
	})
})

// 进入注册界面
$(function(){
	$("#register").hide();
	$("#change-register").click(function(){
		$("#login").hide();
		$("#register").show();
	})
	$("#change-login").click(function(){
		$("#register").hide();
		$("#login").show();
	})
})
