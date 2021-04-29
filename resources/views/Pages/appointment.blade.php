<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>

    <style>
        .wrapper {
            min-width: 100%;
            padding: 0px;
            margin: 0px;
        }

        .header {
            background-color: #eef1f6;
            padding: 15px;
            display: flex;
            justify-content: center;
        }

        .header-text {
            color: #CD4236;
            text-align: center;
        }

        .body {
            min-width: 60%;
            margin: auto;
        }

        .point {
            color: #1C375B;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            margin: auto;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            width: 50%;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

    </style>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <h2 class="header-text"><span style="color: #1C375B;">ITE</span> Counsel</h2>
        </header>

        <section class="body">
            <table class="info-table" cell-padding="5">
                <tbody>
                    <tr>
                        <td><strong class="point">Student Name: </strong></td>
                        <td>{{ $data['Name'] }}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Email: </strong></td>
                        <td>{{ $data['Email'] }}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Contact: </strong></td>
                        <td>{{ $data['Phone'] }}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Date: </strong></td>
                        <td>{{ $data['Date'] }}</td>
                    </tr>
                    <tr>
                        <td><strong class="point">Message: </strong></td>
                        <td>{{ $data['Msg'] }}</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </div>
</body>

</html>
