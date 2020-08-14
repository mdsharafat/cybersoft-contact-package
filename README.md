# Contact Us Form Package

## This package will send email to admin and save contact message to database

<h3>How to install</h3>
<br>
<ul>
    <li><p>composer require cybersoft/contact</p></li>
    <li><p>Then goto config/app.php file. Inside the providers array add <strong>Cybersoft\Contact\ContactServiceProvider::class,</strong></p></li>
    <li><p>Create database and connect to .env file.</p></li>
    <li><p>Run the command <strong>php artisan migrate. </strong> You will find a new database table named 'contacts' with field name, email, phone & message</p></li>
    <li>Configure Mail on .env file to send mail</li>
    <li>Now to go '/contact' url to check the contact form</li>
</ul>
