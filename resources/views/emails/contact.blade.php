<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { padding: 20px; border: 1px solid #ddd; max-width: 600px; margin: 0 auto; }
        h2 { color: #2c3e50; border-bottom: 1px solid #eee; padding-bottom: 10px; }
        .details { margin-bottom: 20px; }
        .details p { margin: 5px 0; }
        .message { background: #f9f9f9; padding: 15px; border-left: 4px solid #3498db; }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Contact Message from Bold Fellows Website</h2>
        
        <div class="details">
            <p><strong>Name:</strong> {{ $data['name'] }}</p>
            <p><strong>Email:</strong> {{ $data['email'] }}</p>
            <p><strong>Organization:</strong> {{ $data['organization'] ?? 'Not provided' }}</p>
        </div>

        <h3>Message:</h3>
        <div class="message">
            {!! nl2br(e($data['message'])) !!}
        </div>
    </div>
</body>
</html>
