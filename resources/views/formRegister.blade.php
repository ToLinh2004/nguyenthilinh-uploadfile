<form action="/postRegister" method="POST">
@csrf
<pre>Name     <input type="text" name="name"></pre>
<pre>Username <input type="text" name="userName"></pre>
<pre>Password <input type="password" name="password"></pre>
<pre>         <button type="submit">Register</button></pre>

</form>