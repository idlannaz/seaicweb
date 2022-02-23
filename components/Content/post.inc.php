<button class="accordion">New Post!!!!</button>
<div class="panel">

  <section class="post">
    <header>Create Post</header>

    <form method="POST" action="" enctype="multipart/form-data">

      <textarea placeholder="Title" name="title" spellcheck="false" required></textarea>
      <textarea placeholder="Caption" name="caption" spellcheck="false" ></textarea>

      <div class="options">
        <li><input id="file-upload" type="file" name="image[]" accept="image/*" multiple required /></li>
      </div>

      

      <button type="post" name="post" id="myBtn">Post</button>
    </form>
  </section>

</div>