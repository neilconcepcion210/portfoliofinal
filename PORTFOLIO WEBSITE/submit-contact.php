<?php
declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contact.php', true, 303);
    exit;
}

if (!empty($_POST['website'])) {
    header('Location: contact.php?status=error', true, 303);
    exit;
}

$name = trim((string) ($_POST['fullname'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$topic = (string) ($_POST['topic'] ?? '');
$message = trim((string) ($_POST['message'] ?? ''));

if ($name === '' || mb_strlen($name) > 120 || !filter_var($email, FILTER_VALIDATE_EMAIL)
    || strlen($email) > 128 || strlen($phone) > 30
    || !in_array($topic, ['general', 'web', 'bike'], true)
    || $message === '' || mb_strlen($message) > 10000) {
    header('Location: contact.php?status=error', true, 303);
    exit;
}

try {
    $pdo = new PDO(
        'mysql:host=' . (getenv('DB_HOST') ?: '127.0.0.1')
            . ';port=' . (getenv('DB_PORT') ?: '3307')
            . ';dbname=' . (getenv('DB_NAME') ?: 'contact_form')
            . ';charset=utf8mb4',
        getenv('DB_USER') ?: 'root',
        getenv('DB_PASSWORD') ?: '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $statement = $pdo->prepare(
        'INSERT INTO contact (full_name, email, contact_number, topic, message, date_modified) VALUES (?, ?, ?, ?, ?, NOW())'
    );
    $statement->execute([$name, $email, $phone !== '' ? $phone : null, $topic, $message]);
    header('Location: contact.php?status=sent', true, 303);
} catch (Throwable $error) {
    error_log('Contact form database error: ' . $error->getMessage());
    header('Location: contact.php?status=error', true, 303);
}
exit;