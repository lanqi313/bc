<html>
<body>
        <form name="input" action="qq" method="post">
                    Select: 
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="sel" />
                    <input type="submit" value="Submit" />
        </form>

</body>
</html>