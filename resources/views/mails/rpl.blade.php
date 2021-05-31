<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <style>
        body{
            margin: 0px !important;
            padding: 0px !important;
        }
        .wrapper{
            width: 100% !important;
            background: #F2F3F5 !important;
        }
        .container{
            width: 776px !important;
            margin: 0px auto;
        }
        table{
            width: 100%;
            padding-bottom: 25px !important;
            border: none;
            border-spacing: 0; 
        }
        thead tr th{
            text-align: center;
        }
        tbody{
            background: #fff;
            border-radius: 10px !important;

        }
        tbody tr td{
            color: #1C375B;
            padding: 35px;
        }
        tbody tr td div{
            padding: 5px ;
        }
        tfoot tr td{
            padding: 15px 5px;
        }
        small{
            color: #8d8d8d;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th align="center" colspan="2">
                            <a href="https://itecounsel.com" target="_blank">
                                <img src="https://itecounsel.com/public/assets/images/logo.png" alt="logo" style="width: 100px !important; padding: 35px 15px !important;">
                            </a>
                        </th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td colspan="2" align="center">
                            <h2 style="color: #CD4236;">Request For Recognition of Prior Learning Eligibility Check</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>
                                <h4>Student Name</h4>
                                <p>{{$data['name']}}</p>
                            </div>
                            <div>
                                <h4>Email Address</h4>
                                <p>{{$data['email']}}</p>
                            </div>
                            <div>
                                <h4>Contact Number</h4>
                                <p>{{$data['contact']}}</p>
                            </div>
                            <div>
                                <h4>Location</h4>
                                <p>{{$data['location']}}</p>
                            </div>
                            <div>
                                <h4>Qualification</h4>
                                <p>{{$data['qualification']}}</p>
                            </div>
                            <div>
                                <h4>Relevant Work Exprience</h4>
                                <p>{{$data['relevant']}}</p>
                            </div>
                            <div>
                                <h4>Work Location</h4>
                                <p>{{$data['work_location']}}</p>
                            </div>
                            <div>
                                <h4>Designation</h4>
                                <p>{{$data['designation']}}</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>
                            <small>
                                International Training and Education Counsel
                            </small>
                            <small>  
                                Level 1, 7 Greenfield Pde Bankstown, NSW 2200, Sydney, Australia
                                1300 535 922
                                info@itecounsel.com
                            </small>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</body>
</html>