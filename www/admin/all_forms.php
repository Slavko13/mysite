<script>
function but1($myhref)
{
     window.location = $myhref
}
</script>


<form id="new_stat" action="add_stat.php" method="POST" style="display: none;">
		<h2>Добавление новой статьи</h2>
		<p> Название статьи </p>
        <input type="text" name="title" ><br>
        <p> Текст для предпoказа </p>
        <textarea name="less_text" cols="60" rows="20" maxlength="260" >
        	
        </textarea>
        <p> Полная статья </p>
       	<textarea name="full_text" cols="60" rows="20">
       		

       	</textarea>

       	<input type="submit" name="send_to_BD" value="send">
</form>




