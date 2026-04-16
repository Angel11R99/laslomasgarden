<?php

declare(strict_types=1);

header('Content-Type: application/json; charset=UTF-8');

require_once __DIR__ . '/components/env.php';

$accountHome = $_SERVER['HOME'] ?? getenv('HOME') ?: null;
$externalEnvFile = env_value('LAS_LOMAS_ENV_FILE');
$projectParent = dirname(__DIR__);
$projectGrandparent = dirname($projectParent);
$projectGreatGrandparent = dirname($projectGrandparent);

$envCandidates = array_unique(array_filter([
    __DIR__ . '/.env',
    dirname(__DIR__) . '/.env',
    ($_SERVER['DOCUMENT_ROOT'] ?? '') !== '' ? rtrim((string) $_SERVER['DOCUMENT_ROOT'], '/\\') . '/.env' : null,
    $projectParent . '/.env',
    $projectParent . '/laslomas.env',
    $projectParent . '/.laslomasserenas.env',
    $projectGrandparent . '/.env',
    $projectGrandparent . '/laslomas.env',
    $projectGrandparent . '/.laslomasserenas.env',
    $projectGreatGrandparent . '/.env',
    $projectGreatGrandparent . '/laslomas.env',
    $projectGreatGrandparent . '/.laslomasserenas.env',
    $accountHome ? rtrim((string) $accountHome, '/\\') . '/.env' : null,
    $accountHome ? rtrim((string) $accountHome, '/\\') . '/laslomas.env' : null,
    $accountHome ? rtrim((string) $accountHome, '/\\') . '/.laslomasserenas.env' : null,
    $externalEnvFile ?: null,
]));

foreach ($envCandidates as $envCandidate) {
    load_env_file($envCandidate);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'status' => 'error',
        'message' => 'Method not allowed.',
    ]);
    exit;
}

function clean_input(string $key): string
{
    return trim((string) ($_POST[$key] ?? ''));
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function save_contact_submission(array $payload): void
{
    $file = __DIR__ . '/survey-responses.json';
    $existing = [];

    if (is_file($file)) {
        $decoded = json_decode((string) file_get_contents($file), true);
        if (is_array($decoded)) {
            $existing = $decoded;
        }
    }

    $existing[] = $payload;

    $written = file_put_contents(
        $file,
        json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
    );

    if ($written === false) {
        throw new RuntimeException('Could not save the contact submission.');
    }
}

function build_email_html(array $data): string
{
    $fullName = trim($data['first_name'] . ' ' . $data['last_name']);
    $message = nl2br(e($data['message'] !== '' ? $data['message'] : 'No message provided.'));

    return '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Contact Request</title>
</head>
<body style="margin:0;padding:0;background:#f4f7f5;font-family:Outfit,Segoe UI,Arial,sans-serif;color:#214335;">
  <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f4f7f5;padding:32px 16px;">
    <tr>
      <td align="center">
        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:680px;background:#ffffff;border-radius:24px;overflow:hidden;box-shadow:0 18px 48px rgba(12,54,38,0.08);">
          <tr>
            <td style="background:linear-gradient(135deg,#0a4f33 0%,#089e67 100%);padding:32px 36px;color:#ffffff;">
              <div style="font-size:13px;letter-spacing:0.24em;text-transform:uppercase;opacity:0.78;margin-bottom:10px;">Las Lomas Serenas</div>
              <div style="font-size:30px;line-height:1.2;font-weight:700;margin:0 0 10px;">New contact request</div>
              <div style="font-size:16px;line-height:1.7;max-width:480px;opacity:0.92;">
                A visitor submitted the contact form and is waiting to hear back from your team.
              </div>
            </td>
          </tr>
          <tr>
            <td style="padding:32px 36px 20px;">
              <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                  <td style="padding:0 0 18px;">
                    <div style="font-size:12px;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#089e67;margin-bottom:8px;">Lead</div>
                    <div style="font-size:28px;line-height:1.2;font-weight:700;color:#0a4f33;">' . e($fullName) . '</div>
                  </td>
                </tr>
              </table>
              <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="border-collapse:separate;border-spacing:0 12px;">
                <tr>
                  <td style="width:180px;padding:14px 16px;background:#f4f8f6;border-radius:14px;font-size:12px;font-weight:700;letter-spacing:0.16em;text-transform:uppercase;color:#089e67;">Email</td>
                  <td style="padding:14px 16px;background:#f4f8f6;border-radius:14px;font-size:16px;color:#214335;">' . e($data['email']) . '</td>
                </tr>
                <tr>
                  <td style="width:180px;padding:14px 16px;background:#f4f8f6;border-radius:14px;font-size:12px;font-weight:700;letter-spacing:0.16em;text-transform:uppercase;color:#089e67;">Phone</td>
                  <td style="padding:14px 16px;background:#f4f8f6;border-radius:14px;font-size:16px;color:#214335;">' . e($data['phone'] !== '' ? $data['phone'] : 'Not provided') . '</td>
                </tr>
                <tr>
                  <td style="width:180px;padding:14px 16px;background:#f4f8f6;border-radius:14px;font-size:12px;font-weight:700;letter-spacing:0.16em;text-transform:uppercase;color:#089e67;">Interest</td>
                  <td style="padding:14px 16px;background:#f4f8f6;border-radius:14px;font-size:16px;color:#214335;">' . e($data['interest_label']) . '</td>
                </tr>
                <tr>
                  <td style="width:180px;padding:14px 16px;background:#f4f8f6;border-radius:14px;font-size:12px;font-weight:700;letter-spacing:0.16em;text-transform:uppercase;color:#089e67;">Submitted</td>
                  <td style="padding:14px 16px;background:#f4f8f6;border-radius:14px;font-size:16px;color:#214335;">' . e($data['submitted_at']) . '</td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="padding:0 36px 18px;">
              <div style="font-size:12px;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;color:#089e67;margin-bottom:10px;">Message</div>
              <div style="background:#ffffff;border:1px solid #dbe7e0;border-radius:18px;padding:20px 22px;font-size:16px;line-height:1.8;color:#456257;">
                ' . $message . '
              </div>
            </td>
          </tr>
          <tr>
            <td style="padding:0 36px 36px;">
              <div style="background:#0a4f33;border-radius:18px;padding:18px 22px;color:#ffffff;">
                <div style="font-size:12px;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;opacity:0.8;margin-bottom:8px;">Reply To</div>
                <div style="font-size:16px;line-height:1.6;">Respond directly to <a href="mailto:' . e($data['email']) . '" style="color:#ffffff;text-decoration:underline;">' . e($data['email']) . '</a></div>
              </div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>';
}

function build_confirmation_email_html(array $data): string
{
    $firstName = e($data['first_name']);
    $interest = e($data['interest_label']);

    return '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>We received your message</title>
</head>
<body style="margin:0;padding:0;background:#f4f7f5;font-family:Outfit,Segoe UI,Arial,sans-serif;color:#214335;">
  <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="background:#f4f7f5;padding:32px 16px;">
    <tr>
      <td align="center">
        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="max-width:680px;background:#ffffff;border-radius:24px;overflow:hidden;box-shadow:0 18px 48px rgba(12,54,38,0.08);">
          <tr>
            <td style="background:linear-gradient(135deg,#0a4f33 0%,#089e67 100%);padding:32px 36px;color:#ffffff;">
              <div style="font-size:13px;letter-spacing:0.24em;text-transform:uppercase;opacity:0.78;margin-bottom:10px;">Las Lomas Serenas</div>
              <div style="font-size:30px;line-height:1.2;font-weight:700;margin:0 0 10px;">We received your message</div>
              <div style="font-size:16px;line-height:1.7;max-width:500px;opacity:0.92;">
                Thank you for contacting our team. Your inquiry has been received and we will get back to you shortly.
              </div>
            </td>
          </tr>
          <tr>
            <td style="padding:32px 36px 20px;">
              <div style="font-size:24px;line-height:1.4;font-weight:700;color:#0a4f33;margin-bottom:12px;">Hello ' . $firstName . ',</div>
              <div style="font-size:16px;line-height:1.8;color:#456257;margin-bottom:18px;">
                We have successfully received your request regarding <strong style="color:#0a4f33;">' . $interest . '</strong>.
              </div>
              <div style="background:#f4f8f6;border-radius:18px;padding:20px 22px;font-size:15px;line-height:1.8;color:#456257;">
                One of our representatives will review your message and contact you using this email address or the phone number you provided.
              </div>
            </td>
          </tr>
          <tr>
            <td style="padding:0 36px 36px;">
              <div style="background:#0a4f33;border-radius:18px;padding:18px 22px;color:#ffffff;">
                <div style="font-size:12px;font-weight:700;letter-spacing:0.18em;text-transform:uppercase;opacity:0.8;margin-bottom:8px;">Contact</div>
                <div style="font-size:16px;line-height:1.6;">If you need immediate assistance, reply to this email or contact us at <a href="mailto:info@laslomasserenas.com" style="color:#f6f1d3;text-decoration:underline;text-decoration-color:rgba(246,241,211,0.65);font-weight:600;">info@laslomasserenas.com</a>.</div>
              </div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>';
}

function send_brevo_email(string $apiKey, array $payload): array
{
    $ch = curl_init('https://api.brevo.com/v3/smtp/email');

    curl_setopt_array($ch, [
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => [
            'accept: application/json',
            'api-key: ' . $apiKey,
            'content-type: application/json',
        ],
        CURLOPT_POSTFIELDS => json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 20,
    ]);

    $responseBody = curl_exec($ch);
    $curlError = curl_error($ch);
    $statusCode = (int) curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    curl_close($ch);

    return [
        'body' => $responseBody,
        'error' => $curlError,
        'status' => $statusCode,
    ];
}

$firstName = clean_input('first_name');
$lastName = clean_input('last_name');
$email = clean_input('email');
$phone = clean_input('phone');
$interest = clean_input('interest');
$message = clean_input('message');

$interestOptions = [
    '2-bedrooms' => '2 Bedrooms',
    '3-bedrooms' => '3 Bedrooms',
    'general' => 'General Information',
];

if ($firstName === '' || $lastName === '' || $email === '') {
    http_response_code(422);
    echo json_encode([
        'status' => 'error',
        'message' => 'Please complete first name, last name, and email.',
    ]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode([
        'status' => 'error',
        'message' => 'Please enter a valid email address.',
    ]);
    exit;
}

$submission = [
    'first_name' => $firstName,
    'last_name' => $lastName,
    'email' => $email,
    'phone' => $phone,
    'interest' => $interest,
    'interest_label' => $interestOptions[$interest] ?? 'General Inquiry',
    'message' => $message,
    'submitted_at' => date('Y-m-d H:i:s'),
    'ip' => $_SERVER['REMOTE_ADDR'] ?? 'unknown',
];

try {
    save_contact_submission($submission);
} catch (RuntimeException $exception) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'We could not save the contact request.',
    ]);
    exit;
}

$apiKey = env_value('BREVO_API_KEY');
$senderEmail = env_value('BREVO_SENDER_EMAIL');
$senderName = env_value('BREVO_SENDER_NAME', 'Las Lomas Serenas');
$recipientEmail = env_value('CONTACT_RECIPIENT_EMAIL');

$curlAvailable = function_exists('curl_init');

if ($apiKey === null || $senderEmail === null || $recipientEmail === null) {
    $missingConfiguration = [];

    if ($apiKey === null) {
        $missingConfiguration[] = 'BREVO_API_KEY';
    }

    if ($senderEmail === null) {
        $missingConfiguration[] = 'BREVO_SENDER_EMAIL';
    }

    if ($recipientEmail === null) {
        $missingConfiguration[] = 'CONTACT_RECIPIENT_EMAIL';
    }

    echo json_encode([
        'status' => 'ok',
        'message' => 'Message saved, but email delivery is not configured on this server yet.',
        'delivery' => 'pending_configuration',
        'missing_configuration' => $missingConfiguration,
    ]);
    exit;
}

if (!$curlAvailable) {
    http_response_code(500);
    echo json_encode([
        'status' => 'error',
        'message' => 'The message was saved, but cURL is not available on this server.',
    ]);
    exit;
}

$internalPayload = [
    'sender' => [
        'name' => $senderName,
        'email' => $senderEmail,
    ],
    'to' => [[
        'email' => $recipientEmail,
        'name' => 'Las Lomas Serenas',
    ]],
    'replyTo' => [
        'email' => $email,
        'name' => trim($firstName . ' ' . $lastName),
    ],
    'subject' => 'New contact request from ' . trim($firstName . ' ' . $lastName),
    'htmlContent' => build_email_html($submission),
    'textContent' => implode("\n", [
        'New contact request',
        'Name: ' . trim($firstName . ' ' . $lastName),
        'Email: ' . $email,
        'Phone: ' . ($phone !== '' ? $phone : 'Not provided'),
        'Interest: ' . ($interestOptions[$interest] ?? 'General Inquiry'),
        'Submitted: ' . $submission['submitted_at'],
        '',
        'Message:',
        $message !== '' ? $message : 'No message provided.',
    ]),
];

$confirmationPayload = [
    'sender' => [
        'name' => $senderName,
        'email' => $senderEmail,
    ],
    'to' => [[
        'email' => $email,
        'name' => trim($firstName . ' ' . $lastName),
    ]],
    'subject' => 'We received your message | Las Lomas Serenas',
    'htmlContent' => build_confirmation_email_html($submission),
    'textContent' => implode("\n", [
        'We received your message',
        '',
        'Hello ' . trim($firstName . ' ' . $lastName) . ',',
        'Thank you for contacting Las Lomas Serenas.',
        'We received your inquiry regarding ' . ($interestOptions[$interest] ?? 'General Inquiry') . '.',
        'Our team will get back to you shortly.',
        '',
        'Contact: info@laslomasserenas.com',
    ]),
];

$internalResponse = send_brevo_email($apiKey, $internalPayload);

if ($internalResponse['body'] === false || $internalResponse['error'] !== '') {
    http_response_code(502);
    echo json_encode([
        'status' => 'error',
        'message' => 'The message was saved, but Brevo could not be reached.',
    ]);
    exit;
}

if ($internalResponse['status'] < 200 || $internalResponse['status'] >= 300) {
    http_response_code(502);
    echo json_encode([
        'status' => 'error',
        'message' => 'The message was saved, but Brevo rejected the delivery request.',
        'brevo_status' => $internalResponse['status'],
    ]);
    exit;
}

$confirmationResponse = send_brevo_email($apiKey, $confirmationPayload);

if ($confirmationResponse['body'] === false || $confirmationResponse['error'] !== '') {
    http_response_code(502);
    echo json_encode([
        'status' => 'error',
        'message' => 'The internal message was sent, but the confirmation email could not be delivered.',
    ]);
    exit;
}

if ($confirmationResponse['status'] < 200 || $confirmationResponse['status'] >= 300) {
    http_response_code(502);
    echo json_encode([
        'status' => 'error',
        'message' => 'The internal message was sent, but the confirmation email was rejected.',
        'brevo_status' => $confirmationResponse['status'],
    ]);
    exit;
}

echo json_encode([
    'status' => 'ok',
    'message' => 'Message sent successfully.',
    'delivery' => 'sent',
]);
