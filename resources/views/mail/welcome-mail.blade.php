    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $subject }}</title>
    </head>
    <body>
        <h3>{{ $subject }}</h3>
        <p>{{ $mailMessage }}</p>
        
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Product</th>
                <th>Price</th>
            </tr>
            <tr>
                <td>{{ $details['name'] }}</td>
                <td>{{ $details['product'] }}</td>
                <td>{{ $details['price'] }}</td>
            </tr>

        </table>
        
    </body>
    </html>