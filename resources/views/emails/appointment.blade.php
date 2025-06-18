<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appointment Request</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #f9fafb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .email-wrapper {
            max-width: 620px;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }

        .email-header {
            background-color: #077e46;
            color: #ffffff;
            padding: 32px 24px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .email-header svg {
            width: 36px;
            height: 36px;
            flex-shrink: 0;
        }

        .email-header h1 {
            margin: 0;
            font-size: 22px;
            font-weight: 600;
        }

        .email-body {
            padding: 24px;
            color: #1e293b;
        }

        .email-body p {
            margin-bottom: 14px;
            line-height: 1.6;
        }

        .label {
            font-weight: 600;
            color: #077e46;
            display: inline-block;
            width: 90px;
        }

        .note {
            background-color: #f1f5f9;
            color: #64748b;
            font-size: 13px;
            text-align: center;
            padding: 18px;
        }

        hr {
            border: none;
            border-top: 1px solid #e5e7eb;
            margin: 24px 0;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-header">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            <h1>Appointment Request</h1>
        </div>

        <div class="email-body">
            <p><span class="label">Name     :  </span> {{ $appointment->name }}</p>
            <p><span class="label">Phone    :  </span> {{ $appointment->phone }}</p>
            <p><span class="label">Date     :  </span> {{ $appointment->date }}</p>
            <p><span class="label">Email    :  </span> <a href="mailto:{{ $appointment->email }}">{{ $appointment->email }}</a></p>
            <p><span class="label">Company  :  </span> {{ $appointment->company }}</p>
            <p><span class="label">Time     :  </span> {{ $appointment->time }}</p>
            <p><span class="label">Message  :  </span> {{ $appointment->message }}</p>
            
            <hr>

            <p class="note">A new appointment request has been received.</p>
        </div>
    </div>
</body>
</html>
