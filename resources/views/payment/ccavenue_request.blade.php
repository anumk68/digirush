<!DOCTYPE html>
<html>
<head>
    <title>Redirecting to CCAvenue...</title>
</head>
<body>

<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction">
    <input type="hidden" name="encRequest" value="{{ $encRequest }}">
    <input type="hidden" name="access_code" value="{{ $accessCode }}">
</form>

    <script type="text/javascript">
        document.redirect.submit();
    </script>
</body>
</html>
