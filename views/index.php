<html><head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>swoole+websocket+redis+php7+mysql在linux上实现即时聊天通讯</title>
  <script type="text/javascript">
  //WebSocket = null;
  </script>
  <link href="../public/css/bootstrap.min.css" rel="stylesheet">
  <link href="../public/css/style.css" rel="stylesheet">
  <!-- Include these three JS files: -->
  <script type="text/javascript" src="../public/js/swfobject.js"></script>
  <script type="text/javascript" src="../public/js/web_socket.js"></script>
  <script type="text/javascript" src="../public/js/jquery.min.js"></script>
</head>
<body>
    <div class="container">
	    <div class="row clearfix">
	        <div class="col-md-1 column">
	        </div>
	        <div class="col-md-6 column">
	           <div class="thumbnail">
	               <div class="caption" id="dialog"></div>
	           </div>
	           <form onsubmit="onSubmit(); return false;">
	                <select style="margin-bottom:8px" id="client_list">
                        <option value="all">所有人</option>
                    </select>
                    <textarea class="textarea thumbnail" id="textarea"></textarea>
                    <div class="say-btn"><input type="submit" class="btn btn-default" value="发表" /></div>
               </form>
               <div>
               &nbsp;&nbsp;&nbsp;&nbsp;<b>房间列表:</b>（当前在&nbsp;房间<?php echo isset($_GET['room_id'])&&intval($_GET['room_id'])>0 ? intval($_GET['room_id']):1; ?>）<br>
               &nbsp;&nbsp;&nbsp;&nbsp;<a href="/?room_id=1">房间1</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/?room_id=2">房间2</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/?room_id=3">房间3</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="/?room_id=4">房间4</a>
               <br><br>
               </div>
               <p class="cp">PHP多进程+Websocket(HTML5/Flash)+PHP Socket实时推送技术&nbsp;&nbsp;&nbsp;&nbsp;Powered by <a href="http://www.workerman.net/workerman-chat" target="_blank">workerman-chat</a></p>
	        </div>
	        <div class="col-md-3 column">
	           <div class="thumbnail">
                   <div class="caption" id="userlist"></div>
               </div>
	        </div>
	    </div>
    </div>
</body>
</html>
