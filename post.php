<?php
    include_once("templates/header.php");
    
    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
          if($post['id'] == $postId) {
            $currentPost = $post;
          }  
        }
    }
?>
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat unde dolor magnam quia quam, quis iure porro odit necessitatibus assumenda labore aliquid et adipisci ea pariatur illum. Dolore, laboriosam placeat.
        Dolore porro omnis vero laborum nisi sapiente obcaecati voluptatum odio soluta doloribus sunt, ex non quo beatae rerum, earum impedit officiis cumque! Doloremque, vero! Animi nihil molestias est quidem facilis?
        Eos deleniti, odio dolorem at, dolor aliquam facilis, perspiciatis nobis vel quaerat consectetur. Distinctio neque asperiores nostrum molestias nulla illum et voluptates, ex facilis delectus perspiciatis, assumenda quia praesentium accusamus!
        Inventore ipsam ducimus tempora mollitia, sunt quisquam placeat sint? Quod soluta facilis tenetur harum aperiam tempora, exercitationem debitis odit, adipisci doloribus vero quaerat reprehenderit numquam expedita sapiente ducimus possimus ex!
        Alias inventore beatae nihil tenetur quisquam soluta minima aperiam excepturi? Totam numquam eveniet ab praesentium blanditiis unde ipsa at molestias ex, maxime reprehenderit ratione laboriosam veritatis alias quos officia enim.
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
    include_once("templates/footer.php")
?>
