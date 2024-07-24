<p>Dear {{ $withdrawal->user->name }},</p>

<p>Thank you for your withdrawal request. Here are the details:</p>

<p>Amount: {{ $withdrawal->amount }}</p>
<p>Wallet Address: {{ $withdrawal->wallet_address }}</p>
<p>Status: {{ $withdrawal->status }}</p>

<p>Your Withdrawal request is being processed...</p>

<p>Best regards,<br/>TetherEliteFinance Team</p>
