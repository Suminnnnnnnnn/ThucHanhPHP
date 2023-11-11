<html>
<script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script><form action="bai2.php" enctype="multipart/form-data" method="POST">
<input type="text" class="form-control" name="email" placeholder="Email">
<input type="text" class="form-control" name="tieude" placeholder="ten">
<textarea name="content" id="editor" class="ckeditor"></textarea>
<script>

           CKEDITOR.replace( 'editor' );

       </script>
<input type="file" class="form-control" name="file"  >
<button type="submit" class="btn btn-primary">Gửi</button>
</form>



</html>