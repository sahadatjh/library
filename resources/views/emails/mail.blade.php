$to_name = 'TO_NAME';
$to_email = 'TO_EMAIL_ADDRESS';
$data = array('name'=>"Sam Jose", "body" => "Test mail");
    
Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
    $message->to($to_email, $to_name)
            ->subject('Artisans Web Testing Mail');
    $message->from('FROM_EMAIL_ADDRESS','Artisans Web');
});


Hi <strong>{{ $name }}</strong>,
 
<p>{{ $body }}</p>