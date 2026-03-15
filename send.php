<?php
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed']);
    exit;
}

$name    = trim($_POST['name']    ?? '');
$email   = trim($_POST['email']   ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Vyplňte prosím všechna pole.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Neplatná e-mailová adresa.']);
    exit;
}

// Sanitize inputs to prevent header injection
$name    = str_replace(["\r", "\n"], '', $name);
$email   = str_replace(["\r", "\n"], '', $email);

mb_language('uni');
mb_internal_encoding('UTF-8');

$to      = 'radek@radekdobias.cz';
$subject = 'Dotaz z portfolia od ' . $name;
$body    = "Jméno: {$name}\nE-mail: {$email}\n\n{$message}";
$headers = implode("\r\n", [
    'From: portfolio@radekdobias.cz',
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion(),
]);

if (mb_send_mail($to, $subject, $body, $headers)) {
    echo json_encode(['ok' => true]);
} else {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Odeslání selhalo.']);
}
