<form action="/tweet" method="post">
  content:
  <input type="text" name="content">
  {{csrf_field()}}
  <input type="submit" value="submit">
</form>
