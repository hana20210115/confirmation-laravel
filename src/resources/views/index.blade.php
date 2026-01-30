<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/index.css')}}"/>
</head>
<body>
<header>
  <div class="header_inner"> 
  <h1 class="title">FashionablyLate</h1>
  </div>
</header>

<main>
<form class="from">

 <div class="contact-form_content">
  <h2 class="contact-title">Contact</h2>

  <div class="form-group">
   <div class="form-group-title">
   <span class="form-label-item">お名前 ※</span>

   </div>
   <div class="form-group-content">
    <div class="form-input-text">
    <input type="text" name="name" placeholder="テスト太郎">
    </div>
     <div class="form-error">

     </div>
   </div> 
 </div>

 <div class="form-group">
  <div class="from-group-title">
    <span class="form-label-item">性別 ※</span>
 </div>
<div class="form-group-content">
    <div class="form-input-text">
    <input type="radio" name="gender" placeholder="男">
</div>
 <div class="form-error">
  </div>
 </div>
</div>  
</form>





</div>

</main>

</body>
</html>