$feedback_body = mysqli_real_escape_string($db_link, (string)htmlspecialchars(strip_tags($_POST['review'])));


    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />


enctype="multipart/form-data"

move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)