<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Contact extends BaseController
{
    public function send(): ResponseInterface
    {
        // Only accept POST requests
        if ($this->request->getMethod() !== 'POST') {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Invalid request method.'
            ])->setStatusCode(405);
        }

        // Support both JSON body and standard Form POST
        $json = $this->request->getJSON(true);
        $name = trim($json['name'] ?? $this->request->getPost('name') ?? '');
        $email = trim($json['email'] ?? $this->request->getPost('email') ?? '');
        $service = trim($json['service'] ?? $this->request->getPost('service') ?? 'General Inquiry');
        $message = trim($json['message'] ?? $this->request->getPost('message') ?? '');

        // Validation
        if (empty($name) || empty($email) || empty($message)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Please fill in all required fields (Name, Email, and Message).'
            ])->setStatusCode(400);
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Please provide a valid email address.'
            ])->setStatusCode(400);
        }

        // Email Configuration (purely read from environment variables)
        $rawPass = env('email_SMTPPass') ?? env('email.SMTPPass') ?? '';
        $smtpPass = str_replace(' ', '', (string) $rawPass);

        $smtpUser = env('email_SMTPUser') ?? env('email.SMTPUser') ?? '';
        $smtpHost = env('email_SMTPHost') ?? env('email.SMTPHost') ?? 'smtp.gmail.com';
        $smtpPort = (int) (env('email_SMTPPort') ?? env('email.SMTPPort') ?? 587);
        $smtpCrypto = env('email_SMTPCrypto') ?? env('email.SMTPCrypto') ?? 'tls';
        $protocol = env('email_protocol') ?? env('email.protocol') ?? 'smtp';

        $config = [
            'protocol'      => $protocol,
            'SMTPHost'      => $smtpHost,
            'SMTPUser'      => $smtpUser,
            'SMTPPass'      => $smtpPass,
            'SMTPPort'      => $smtpPort,
            'SMTPCrypto'    => $smtpCrypto,
            'mailType'      => 'html',
            'charset'       => 'UTF-8',
            'newline'       => "\r\n",
            'CRLF'          => "\r\n",
            'SMTPTimeout'   => 15,
            'wordWrap'      => true
        ];

        $emailService = \Config\Services::email();
        $emailService->initialize($config);

        $recipientEmail = !empty($smtpUser) ? $smtpUser : 'najamrazzaq7861@gmail.com';

        $emailService->setFrom($recipientEmail, 'Portfolio Contact: ' . $name);
        $emailService->setTo($recipientEmail);
        $emailService->setReplyTo($email, $name);
        $emailService->setSubject("[Portfolio Inquiry] {$service} - from {$name}");

        // Build HTML Message Body
        $safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $safeService = htmlspecialchars($service, ENT_QUOTES, 'UTF-8');
        $safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));
        $sentTime = date('F j, Y, g:i a') . ' (PKT)';

        $htmlBody = <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; line-height: 1.6; color: #1e293b; background-color: #f8fafc; margin: 0; padding: 24px; }
        .container { max-width: 600px; margin: 0 auto; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); }
        .header { background: #020617; color: #ffffff; padding: 28px 32px; }
        .header h1 { margin: 0; font-size: 20px; font-weight: 700; }
        .header p { margin: 4px 0 0; color: #94a3b8; font-size: 13px; }
        .body { padding: 32px; }
        .field { margin-bottom: 20px; }
        .label { font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748b; letter-spacing: 0.5px; margin-bottom: 4px; }
        .value { font-size: 15px; font-weight: 600; color: #0f172a; }
        .badge { display: inline-block; padding: 4px 12px; background: #eff6ff; color: #1e40af; border-radius: 20px; font-size: 12px; font-weight: 600; }
        .message-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 18px; margin-top: 8px; font-size: 14px; color: #334155; line-height: 1.7; }
        .footer { background: #f8fafc; border-top: 1px solid #f1f5f9; padding: 20px 32px; text-align: center; font-size: 12px; color: #94a3b8; }
        .btn-reply { display: inline-block; margin-top: 20px; padding: 10px 22px; background: #020617; color: #ffffff !important; text-decoration: none; border-radius: 10px; font-size: 13px; font-weight: 600; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Portfolio Message 🚀</h1>
            <p>Received on {$sentTime}</p>
        </div>
        <div class="body">
            <div class="field">
                <div class="label">Sender Name</div>
                <div class="value">{$safeName}</div>
            </div>
            <div class="field">
                <div class="label">Sender Email</div>
                <div class="value"><a href="mailto:{$safeEmail}" style="color: #2563eb; text-decoration: none;">{$safeEmail}</a></div>
            </div>
            <div class="field">
                <div class="label">Interested Service</div>
                <div><span class="badge">{$safeService}</span></div>
            </div>
            <div class="field">
                <div class="label">Message</div>
                <div class="message-box">{$safeMessage}</div>
            </div>
            <div>
                <a href="mailto:{$safeEmail}?subject=Re:%20[Portfolio%20Inquiry]%20{$safeService}" class="btn-reply">Reply to {$safeName} ↗</a>
            </div>
        </div>
        <div class="footer">
            Sent from your portfolio contact form on <strong>Najam Razzaq Portfolio</strong>
        </div>
    </div>
</body>
</html>
HTML;

        $emailService->setMessage($htmlBody);

        if ($emailService->send()) {
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Thank you, ' . $name . '! Your message has been sent successfully.'
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Unable to send message via email server at this moment.',
                'debug'   => CI_ENVIRONMENT === 'development' ? $emailService->printDebugger(['headers']) : null
            ])->setStatusCode(500);
        }
    }
}
