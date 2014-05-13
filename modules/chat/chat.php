
<div class="col-md-9" id="content-container">
<div class="panel panel-primary">
    
        <div class="panel-heading"><h3 class="panel-title">Chat Room</h3></div>
        <div class="panel-body"> 
            
                <div class="row clearfix">
                <div class="col-md-12 column" id="post">
                	<div id="chatwindow">
                     <div class="col-md-8">
                     <div id="chatrooms">
                     	<?php echo $chatS->chatRooms(); ?>
                     </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Chat</div>
                                <div class="panel-body">
                                
                                <div id="chats"></div>
                            </div>
                        </div>
                     
                     
                     </div>
                     <div class="col-md-4">
                     	
                        <div class="panel panel-default">
                            <div class="panel-heading">Online</div>
                                <div class="panel-body">
                                <div id="chatusers"></div>
                            </div>
                        </div>
                        
                     </div>
                     </div>
                </div>
                </div>  
        		<?php echo $chatS->chatForm().jsTexts($lsite); ?>
        </div>
    	<div id="playchatbeep">
            <span id="chatbeep"></span>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?=_URL?>chat/chatfiles/chatfunctions.js"></script>