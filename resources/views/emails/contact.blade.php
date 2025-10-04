<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .content {
            background-color: white;
            padding: 30px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .field {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .label {
            font-weight: bold;
            color: #666;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            color: #333;
        }
        .consent {
            background-color: #e8f5e9;
            padding: 10px;
            border-left: 4px solid #4CAF50;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Schedule A Call Form Submission</h2>
        </div>
        
        <div class="content">
            <div class="field">
                <span class="label">Name:</span>
                <span class="value">{{ $data['name'] }}</span>
            </div>

            <div class="field">
                <span class="label">Email Address:</span>
                <span class="value">{{ $data['email'] }}</span>
            </div>

            <div class="field">
                <span class="label">Phone Number:</span>
                <span class="value">{{ $data['phone_number'] }}</span>
            </div>

            <div class="field">
                <span class="label">Message:</span>
                <span class="value">{{ $data['message'] }}</span>
            </div>

        </div>
    </div>
</body>
</html>