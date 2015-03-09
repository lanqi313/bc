<html>
        <body>
          <h1>Pleale  put your file  in  here,it will be put in the datebase!</h1>
        <form  method = "POST", action = "apply/upload", enctype="multipart/form-data">
          请选择你要上传的文件:
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <input type = "file" name = "file1" /><br/>
          <input type = "file" name = "file2" /><br/>
         <input type = "file" name = "file3" /><br/>
         <input type = "file" name = "file4" /><br/>
         <input type = "file" name = "file5" /><br/>
        <input type = "file" name = "file6" /><br/>       
         <input  type = "submit", name = "submit"  value = "上传文件"  />
      </form>

    </body>
   </html>