<!DOCTYPE html>
<html>
<head>
    <title>KALPA GRANITES CONTACT FORM SUBMISSION </title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #cccccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Hello,</h1>
    <table>
        <tr>
            <th>Package Type</th>
             <td>{{ $data['name'] }}</td> 
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $data['Phone'] }}</td>
        </tr>      
        
        <tr>
            <th>Email</th>
            <td>{{ $data['email'] }}</td>
        </tr>
       
        <tr>
            <th>Message</th>
            <td>{{ $data['message'] }}</td>
        </tr>
    
       
    </table>

   
</body>
</html>

