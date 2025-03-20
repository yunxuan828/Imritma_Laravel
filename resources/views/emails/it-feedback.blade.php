<!DOCTYPE html>
<html>
<head>
    <title>IT Support Feedback</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            line-height: 1.6; 
            color: #333; 
            margin: 0;
            padding: 0;
        }
        .container { 
            max-width: 600px; 
            margin: 0 auto; 
            padding: 20px; 
        }
        h2 { 
            color: #2c7873; 
            margin-bottom: 20px;
        }
        .feedback-item { 
            margin-bottom: 15px; 
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .label { 
            font-weight: bold; 
            color: #2c7873;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #666;
            border-top: 1px solid #eee;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>IT Support Feedback Submission</h2>
        
        <div class='feedback-item'>
            <span class='label'>Name:</span> {{ $name }}
        </div>
        
        <div class='feedback-item'>
            <span class='label'>Email:</span> {{ $email }}
        </div>
        
        <div class='feedback-item'>
            <span class='label'>Department:</span> {{ $department }}
        </div>
        
        <div class='feedback-item'>
            <span class='label'>Feedback:</span><br>
            {!! nl2br(e($feedback)) !!}
        </div>
        
        <div class='feedback-item'>
            <span class='label'>Suggestions for Improvement:</span><br>
            {!! nl2br(e($suggestions)) !!}
        </div>
        
        <div class="footer">
            <p>This is an automated email from the IT Support Portal.</p>
            <p>© {{ date('Y') }} Ritma Group. All rights reserved.</p>
        </div>
    </div>
</body>
</html> 