{{-- filepath: /Users/themacstore/Documents/Full Stack/Learning/Laravel/laracasts/resources/views/mail/job-posted.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Posted</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: #5993e9;
            color: #ffffff;
            text-align: center;
            padding: 20px;
        }
        .email-body {
            padding: 20px;
            color: #333333;
        }
        .email-body h2 {
            color: #5993e9;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .email-body p {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        .email-body a {
            display: inline-block;
            background-color: #5993e9;
            color: #ffffff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }
        .email-body a:hover {
            background-color: #5993e9;
        }
        .email-footer {
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #777777;
            background-color: #f9f9f9;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Job Posted Successfully!</h1>
        </div>
        <div class="email-body">
            <h2>{{ $job->title }}</h2>
            <p>Congratulations! Your job listing is now live on our website.</p>
            <p>
                <a href="{{ url('jobs', $job->id) }}">View Your Job Listing</a>
            </p>
        </div>
        <div class="email-footer">
            <p>Thank you for using our platform!</p>
        </div>
    </div>
</body>
</html>