<form action="" method="post" id="form_chat" onsubmit="return addChatS(this)" class="form-inline">
	<input type="hidden" name="chatroom" id="chatroom" value="<?=$this->chatrooms[0]?>" />
	<?php if($this->chatadd === 1): ?>
    	<div class="form-group">
            <input type="text" class="form-control" name="chatuser" id="chatuser" placeholder="<?=$this->lsite['name']?>" size="12" maxlength="12" />
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" name="cod" id="cod" size="4" placeholder="<?=$this->lsite['code']?>" maxlength="4" />
        </div>
        
        <div class="checkbox">
        <label>
        <input type="text" size="2" class="form-control" value="<?=substr(md5(date(" j-F-Y, g:i a ")), 3, 4)?>" readonly />
          
        </label>
      </div>
      <button type="submit" class="btn btn-primary"  onclick="setNameC(this.form)">Set</button>
        
    <?php elseif( defined('CHATUSER') ) : ?>
    <input type="hidden" name="chatuser" id="chatuser" value="<?=CHATUSER?>" />
   <span id="enterchat" onclick="enterChat()"><?=sprintf($this->lsite['enterchat'], CHATUSER)?></span>
    <?php endif; ?>
    
    <div id="chatadd">
  <div id="chatex"> 
      <img src="chat/chatex/0.gif" alt=":)" title=":)" onclick="addSmile(':)', 'adchat');" />
      <img src="chat/chatex/1.gif" alt=":(" title=":(" onclick="addSmile(':(', 'adchat');" />
      <img src="chat/chatex/2.gif" alt=":P" title=":P" onclick="addSmile(':P', 'adchat');" />
      <img src="chat/chatex/3.gif" alt=":D" title=":D" onclick="addSmile(':D', 'adchat');" />
      <img src="chat/chatex/4.gif" alt=":S" title=":S" onclick="addSmile(':S', 'adchat');" />
      <img src="chat/chatex/5.gif" alt=":O" title=":O" onclick="addSmile(':O', 'adchat');" />
      <img src="chat/chatex/6.gif" alt=":=)" title=":=)" onclick="addSmile(':=)', 'adchat');" />
      <img src="chat/chatex/7.gif" alt=":|H" title=":|H" onclick="addSmile(':|H', 'adchat');" />
      <img src="chat/chatex/8.gif" alt=":X" title=":X" onclick="addSmile(':X', 'adchat');" />
      <img src="chat/chatex/9.gif" alt=":-*" title=":-*" onclick="addSmile(':-*', 'adchat');" />
  </div>
  <input type="text" name="adchat" id="adchat" size="88" maxlength="200" /> &nbsp; 
  <input type="submit" value="<?php echo $this->lsite['chat']; ?>" id="submit"/>
 </div>
    
    
</form>