<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$title}}</title>
  <meta content="Password Manager, your digital guardian in the realm of cyberspace, expertly safeguards and organizes your passwords with unparalleled precision. Elevate your online security effortlessly as it seamlessly stores and retrieves your credentials, ensuring a fortress of protection for your digital identity." name="description">
  <meta content="Password Manager" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/logo.png') }}" rel="icon">
  <link href="{{ asset('img/logo.png') }}" rel="apple-touch-icon">
  
  <!-- Stylesheet--> 
  @yield('stylesheet')
</head>

<body>
    <header>
       @yield('navbar')
    </header>
   <main>
      @yield('form')
   </main>
   <footer>
     
   </footer>
</body>
 @yield('script')
</html>
