<!-- resources/views/emails/withdrawal_request.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Withdrawal Request</title>
</head>
<body>
    <p>Dear {{ $withdrawal->name }},</p>
    <p>Your withdrawal request has been received.</p>
    <p><strong>Amount:</strong> ${{ number_format($withdrawal->amount, 2) }}</p>
    <p><strong>Wallet Address:</strong> {{ $withdrawal->wallet_address }}</p>
    <p>Status: {{ $withdrawal->status }}</p>
    <p>Thank you!</p>
</body>
</html>
