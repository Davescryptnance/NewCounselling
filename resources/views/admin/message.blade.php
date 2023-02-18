<style>
  form {
    width: 500px;
    margin: auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
  }

  label {
    font-weight: bold;
    margin-top: 10px;
    display: block;
  }

  select, textarea {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }

  input[type="submit"] {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
</style>

<form action="/admin/dashboard" method="post">
@csrf 
  <label for="recipient">Recipient:</label>
  <select id="recipient" name="recipient">
    <option value="client1">Client 1</option>
    <option value="client2">Client 2</option>
    <option value="client3">Client 3</option>
  </select><br><br>

  <label for="message">Message:</label>
  <textarea id="message" name="message"></textarea><br><br>

  <input type="submit" value="Send">
</form>
