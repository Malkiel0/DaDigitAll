<!-- resources/views/emails/contact-form-submitted.blade.php -->
<h2>Nouveau message de contact</h2>
<p><strong>Nom:</strong> {{ $name }}</p>
<p><strong>Email:</strong> {{ $email }}</p>
<p><strong>Message:</strong></p>
<p>{{ $messageContent }}</p>