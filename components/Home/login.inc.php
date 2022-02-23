<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" id="myBtn"
    class="fa fa-user"></button>

<div id="id01" class="modal1">
  
  <form class="modal-content animate" action="backend/adminLogin.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="static/admin.png" alt="Avatar" class="avatar">
    </div>

    <div class="container1">
      <label for="uname"><b>Admin Only</b></label>
      <input type="text" placeholder="Enter ID" name="adminid" required>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" class="btn log">Login</button>
    </div>
  </form>
</div>