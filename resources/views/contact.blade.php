
<div>
    @include('layouts.partialTemplates.nagivation')
</div>
<form action="" method="post">
    @csrf
    <input type="text" name="username" id=""  placeholder="username"><br><br>
    <input type="email" name="email" id=""  placeholder="email"><br><br>
    <textarea name="message" id="" cols="30" rows="10"  placeholder="message"></textarea>
    <input type="hidden" name="subject" value="enquiry"><br><br>
    <input type="submit" value="send">
</form>
<div>
    @include('layouts.partialTemplates.footer')
</div>

