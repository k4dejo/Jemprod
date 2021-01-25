<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transacción</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    </head>
    <body style="style=width: 100%">
        <Form name="CredomaticPost" method="post"
        action="https://credomatic.compassmerchantsolutions.com/api/transact.php">
            <div class="form-group">
                <Input type="text" name="type" value=" sale"/>
                <Input type="text" name="key_id" value="49338953"/>
                <Input type="text" name="hash" value="28519d58218c0a43a300b538c7303836"/>
                <Input type="text" name="time" value="1366839938"/>
                <Input type="text" name="amount" value="1.00"/>
                <Input type="text" name="orderid" value="CredomaticTest"/>
                <Input type="text" name="processor_id" value=""/>
                <Input type="text" name="ccnumber" value="5431111111111111"/>
                <Input type="text" name="ccexp" value="1220"/>
                <Input type="text" name="cvv" value="123"/>
                <Input type="text" name="avs" value="12 Calle San Jose"/>
                <Input type="text" name="redirect"
                value="http://modajem.com/get/transaccion/credomatic"/>
                <Input type="submit" value="Enviar Transacción"/>
            </div>
        </Form>
    </body>
</html>